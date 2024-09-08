<?php
$servername ="localhost";
$username = "root";
$password ="";
$dbname = "responsiveform1";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
    // echo "connection ok";
}
else 
{
    echo "connection failed";
}

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

    // Send response back to client
    echo "<div class='bot-message'>" . $response . "</div>";
    exit(); // Exit PHP after sending response
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pets Day Care - Terms and Conditions</title>
    <style>
        
        body {
            font-family: 'Arial', sans-serif;
          
            padding: 0;
            background-color: #f7f7f7;
            height:1500px;
            margin: 0;
        }

        header {
            background-image: url('https://www.nutriment.co.uk/media/catalog/category/Natural-Organic-Working-Complete-Dog-banner.jpg');
            background-repeat:no-repeat;
            background-size:cover;
            background-position:top left:
            background-color: #4CAF50;
            color: #ffffff;
            text-align:left;
            padding:20px;
            height:300px;
            
        }
       h1{
         padding-left:50px;
         paddding-top:100px;
         
         }
       #tnc{
         font-family:Tahoma,Verdana,Segoe,sans-serif;
           }
       
       
  
        .container {
            margin: 20px 0;
            padding: 20px;
            background-color: #fff;
            
        }

        h2 {
            color: #4CAF50;
        }

        p {
            line-height: 1.6;
        }

       #footer{
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
            top:500px;
            bottom:500px;
            width: 100%;
        }
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
            z-index: 9999;
            font: size 20px;
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

            z-index: 9998;
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
        .bi-arrow-left-circle-fill,
.svg-arrow {
    left: 20px;
  position: relative;
  z-index: 2; /* Set a higher z-index value to bring the arrow on top */
  top:14px
}

.arrow-container a {
  text-decoration: none;
  color: inherit; /* Inherit the color from the parent container */
  cursor: pointer; /* Show the hand cursor on hover */
}
   
.arrow-container {
      position: relative;
      top: 30px;
      left:30px;
    }

    .arrow-container svg {
      width: 24px; /* Adjusted size to 24px */
      height: auto;
    }

    .arrow-container a {
      text-decoration: none;
      color: black;
      cursor: pointer;
    }
</style>  
</head>
<div class="arrow-container" style="position: absolute; left: /* adjust as needed */; top: /* adjust as needed */;">
  <a href="javascript:history.back()">
<i class="bi bi-arrow-left-circle-fill"></i>
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">  
  <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0m3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z"/>
   </svg>
   </a>
</div>
    </style>
</head>
<body>

    <header>
        <br>
        <br>
        <h1>PETS CONNECT</h1>
        <h1 id="tnc">Terms and Conditions</h1>
        
      
    </header>

    <div class="conatiner">

       <h2>1. Acceptance of Terms:</h2>
       <p>These Terms of Use establish the agreement between you and the Company mentioned on the initial page of this website ("Company," "we," or "us"). Your access to and use of the Website, including its content, features, and services, are governed by these Terms of Use and our Privacy Policy. Carefully review these terms before using the Website. By accessing or using the Website, you indicate your acceptance and agreement with these Terms of Use and our Privacy Policy. If you do not consent to these terms, refrain from accessing or using the Website.
This Website is accessible to individuals aged 18 or older residing in the United States or its territories. By using the Website, you affirm that you are of legal age to enter into a binding contract with the Company and meet the specified eligibility criteria. If you fail to meet these requirements, refrain from accessing or using the Website.</p>

       <h2>2. User Registration:</h2>
       <p>To register on our website, users must agree to the following terms and conditions. By creating an account, you acknowledge that you have read, understood, and accepted our privacy policy and user agreement. You agree to provide accurate and complete information during the registration process and to keep your account credentials confidential. Furthermore, you accept responsibility for all activities conducted through your account. We reserve the right to suspend or terminate accounts that violate our terms or engage in unauthorized or unlawful activities. By registering, you demonstrate your commitment to abide by our community guidelines and ensure a safe and respectful online environment for all users.</p>

<h2>3. Service Provider Obligations:</h2>
   <p>Service providers are required to uphold the highest standards of transparency and integrity in representing their services, qualifications, and availability on our platform. It is imperative that all information provided by service providers is accurate and truthful. Any instance of false or misleading information may result in the immediate removal of the service provider from our platform.

We believe in fostering a trustworthy environment for our users, and as such, the adherence to these guidelines is crucial for maintaining the credibility of our platform. We encourage service providers to regularly update their profiles to reflect current and accurate information. Our commitment to ensuring a reliable and authentic experience for users is unwavering, and we appreciate the cooperation of our service providers in upholding these standards.</p>

<h2>4.Booking:</h2>
   <p>Users agree to pay the agreed-upon fees for the services booked through the platform. Payment details will be processed securely through the provided payment gateway.</p>

<h2>5. Cancellation and Refunds:</h2>
   <p>Cancellation policies for booked services are at the discretion of the service provider. Refunds, if applicable, will be subject to the cancellation policy outlined by the service provider.</p>

<h2>6. User Conduct:</h2>
   <p>Users agree not to engage in any conduct that could harm the reputation of the Pets Day Care Website, other users, or service providers. Any abusive or inappropriate behavior may result in account suspension.</p>

<h2>7. Reviews and Ratings:</h2>
   <p>Users are encouraged to provide honest and constructive reviews of service providers. However, any reviews containing false information, profanity, or personal attacks may be removed.<p>

<h2>8. Privacy and Security:</h2>
   <P>The Pets Day Care Website is committed to protecting user privacy. User data will be handled in accordance with the privacy policy. Users are responsible for maintaining the confidentiality of their account credentials.</P>

<h2>9.Intellectual Property:</h2>
   <p>All content and materials on the Pets Day Care Website, unless otherwise indicated, are the property of the website owner. Users may not use, reproduce, or distribute any content without prior written consent.</p>

<h2>10. Limitation of Liability:</h2>
    <p>The Pets Day Care Website is not liable for any damages, direct or indirect, arising from the use of the platform. This includes but is not limited to loss of data, loss of profits, or any other intangible losses.</p>

<h2>11.Termination of Service:</h2>
<p>The Pets Day Care Website reserves the right to terminate or suspend user accounts or services at any time for violations of these terms and conditions.</p>



    </div>

    <div id="footer">
        <p>&copy; 2024 PETS CONNECT. All rights reserved.</p>
    </div>
    <div class="chat-icon" onclick="toggleChat()">Chat</div>

    <div class="chat-container" id="chat-container">
        <div class="chat-box" id="chat-box"></div>
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

            // Send user input to server using AJAX
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "", true); // Empty URL means current page
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    // Display server response
                    var response = xhr.responseText;
                    chatBox.innerHTML += response;
                    // Scroll to bottom of chat box
                    chatBox.scrollTop = chatBox.scrollHeight;
                }
            }
            xhr.send("userInput=" + userInput);
            // Clear user input field
            document.getElementById("user-input").value = "";
        }
    </script>
</body>
</html>
