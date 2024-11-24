<?php


require 'vendor/autoload.php';

use Google\Cloud\Dialogflow\V2\SessionsClient;
use Google\Cloud\Dialogflow\V2\TextInput;
use Google\Cloud\Dialogflow\V2\QueryInput;

$responseMessage = ''; // Initialize the response variable

putenv('GOOGLE_APPLICATION_CREDENTIALS=C:\laragon\www\Atema\html\credentials\friendly-autumn-442711-p6-010ad22ba4c0.json');
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['user_query'])) {
$projectId = 'friendly-autumn-442711-p6';
$sessionId = uniqid();
$languageCode = 'en';

 // Capture user input dynamically from the form
 $userInput = $_POST['user_query'];

$sessionClient = new SessionsClient();
$session = $sessionClient->sessionName($projectId, $sessionId);



$textInput = new TextInput();
$textInput->setText($userInput);
$textInput->setLanguageCode($languageCode);

$queryInput = new QueryInput();
$queryInput->setText($textInput);

$response = $sessionClient->detectIntent($session, $queryInput);
$queryResult = $response->getQueryResult();

$responseMessage = $queryResult->getFulfillmentText();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatbot</title>
</head>
<body>
<div class="chatbot-container">
        <h1>Chat with Dialogflow</h1>
        <form action="chatbot.php" method="POST">
            <label for="query">Ask me anything:</label>
            <input type="text" id="query" name="user_query" placeholder="Type your question..." required>
            <button type="submit">Send</button>
        </form>

        <?php if (!empty($responseMessage)): ?>
            <div class="response">
                <strong>Response:</strong> <?= htmlspecialchars($responseMessage) ?>
            </div>
        <?php endif; ?>
        <strong style="color: black;">Go back to HomePage -></strong><a href="index.php" style="color: #001431;">HomePage</a>
    </div>
</body>
</html>
<style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(90deg, #001431 66%, #f8f2e2 61%);
            color: #fff;
        }

        .chatbot-container {
            background: #fff;
            border-radius: 15px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            max-width: 450px;
            width: 100%;
            text-align: center;
        }

        .chatbot-container h1 {
            font-size: 2rem;
            margin-bottom: 20px;
            color: #001431;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        label {
            font-size: 1rem;
            color: #ffffff;
            text-align: left;
        }

        input {
            padding: 12px 15px;
            font-size: 1rem;
            border: 1px solid #ddd;
            border-radius: 8px;
            transition: 0.3s;
        }

        input:focus {
            border-color: #6a11cb;
            outline: none;
            box-shadow: 0 0 8px rgba(106, 17, 203, 0.4);
        }

        button {
            background: #001431;
            color: #fff;
            font-size: 1rem;
            padding: 12px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: #222222;
        }

        .response {
            margin-top: 20px;
            padding: 15px;
            background: #f1f1f1;
            border-radius: 8px;
            color: #333;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .response strong {
            color: #001431;
        }
    </style>