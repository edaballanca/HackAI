<?php
// Database connection
$host = "localhost";
$dbname = "user_auth";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

if ($_SERVER['REQUEST_METHOD'] === 'GET' && $_GET['action'] === 'getLawyers') {
    $stmt = $conn->prepare("SELECT * FROM lawyers");
    $stmt->execute();
    echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
}
// Fetch time slots for a specific lawyer
if ($_SERVER['REQUEST_METHOD'] === 'GET' && $_GET['action'] === 'getTimeSlots') {
    $lawyerId = $_GET['lawyerId'];

    $stmt = $conn->prepare("SELECT available_slots FROM lawyers WHERE id = ?");
    $stmt->execute([$lawyerId]);

    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($result) {
        // Convert comma-separated slots into an array
        $slots = explode(',', $result['available_slots']);
        echo json_encode($slots);
    } else {
        echo json_encode([]);
    }
}


if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_GET['action'] === 'bookAppointment') {
    // Get data from the POST request
    $lawyerId = $_POST['lawyer'];
    $slot = $_POST['slot'];
    $clientName = $_POST['clientName'];
    $clientEmail = $_POST['clientEmail'];

    // Validate the data
    if (empty($lawyerId) || empty($slot) || empty($clientName) || empty($clientEmail)) {
        echo json_encode(['status' => 'error', 'message' => 'All fields are required.']);
        exit;
    }

    $stmt = $conn->prepare("INSERT INTO appointments (lawyer_id, slot, client_name, client_email) VALUES (?, ?, ?, ?)");
    $result = $stmt->execute([$lawyerId, $slot, $clientName, $clientEmail]);
    
    

    if ($result) {
        // Appointment was successfully booked, redirect to index.php
        header("Location: index.php");
        exit;
    } else {
        // Failed to book appointment, return a JSON response
        echo json_encode(['status' => 'error', 'message' => 'Failed to book the appointment.']);
        exit;
    }
    
}

?>
