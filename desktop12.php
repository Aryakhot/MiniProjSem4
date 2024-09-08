<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatbot</title>
    <style>
        .chat-icon {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 50px;
            height: 50px;
            background-color: #007bff;
            color: #fff;
            border-radius: 50%;
            text-align: center;
            line-height: 50px;
            font-size: 24px;
            cursor: pointer;
        }

        .chat-container {
            display: none;
            position: fixed;
            bottom: 90px;
            right: 20px;
            max-width: 400px;
            border: 1px solid #ccc;
            border-radius: 5px;
            overflow: hidden;
            background-color: #fff;
        }

        .chat-box {
            min-height: 200px;
            padding: 10px;
            margin-bottom: 10px;
            border-bottom: 1px solid #ddd;
            overflow-y: auto;
        }

        #user-input {
            width: calc(100% - 70px);
            padding: 5px;
        }

        button {
            padding: 5px 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="chat-icon" onclick="toggleChat()">Chat</div>
    <div class="chat-container" id="chat-container">
        <div class="chat-box" id="chat-box">
            <?php
            // Dummy responses for demonstration
            $responses = array(
                "What is your name?" => "My name is Chatbot.",
                "How are you?" => "I am doing well, thank you!",
                "What can you do?" => "I can answer your questions.",
                "default" => "Sorry, I did not understand that."
            );

            // Get user input
            $userInput = isset($_POST['userInput']) ? $_POST['userInput'] : '';

            if (!empty($userInput)) {
                // Get response from predefined responses or default response
                $response = isset($responses[$userInput]) ? $responses[$userInput] : $responses['default'];

                // Simulate server processing delay
                sleep(1);

                // Display server response
                echo "<div class='bot-message'>" . $response . "</div>";
            }
            ?>
        </div>
        <form method="post" onsubmit="sendMessage(); return false;">
            <input type="text" id="user-input" name="userInput" placeholder="Type your message...">
            <button type="submit">Send</button>
        </form>
    </div>
    <script>
        function toggleChat() {
            var chatContainer = document.getElementById("chat-container");
            if (chatContainer.style.display === "block") {
                chatContainer.style.display = "none";
            } else {
                chatContainer.style.display = "block";
            }
        }

        function sendMessage() {
            var userInput = document.getElementById("user-input").value.trim();
            if (userInput === "") return;

            // Display user message
            var chatBox = document.getElementById("chat-box");
            chatBox.innerHTML += "<div class='user-message'>" + userInput + "</div>";

            // Clear user input field
            document.getElementById("user-input").value = "";
        }
    </script>
</body>
</html>
