<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "responsiveform3";

// Create a database connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check the database connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['signin'])) {
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    $query = "INSERT INTO desktop7 (Username, Password) VALUES ('$Username', '$Password')";

    // Execute the SQL query
    if (mysqli_query($conn, $query)) {
        // Data inserted into the database successfully
        echo "Data inserted into the database successfully";

        // Redirect to a new page
        header("Location: http://localhost/learningphp/dbform6.php");
        exit; // Ensure no further code execution
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Sign In</title>
    <style>
         body {
            overflow-x: hidden; /* Hide horizontal scrollbar */
            overflow-y: hidden; /* Hide vertical scrollbar */
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
<body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <div class="overflow-x-hidden">
        <div class="overflow-y-hidden">
<div class="Group20" style="width: 1367px; height: 855px; position: relative">
    <div class="Rectangle118" style="width: 1407px; height: 855px; left: 0px; top: 0px; position: absolute; background: #C0A2A2"></div>
    <div class="Rectangle115" style="width: 436px; height: 455px;border-radius:20px; left: 467px; top: 130px; position: absolute; background: white"></div>
    <form id="signInForm" method="POST" action="">
        <div class="SignIn" style="width: 236.99px; height: 59.95px; left: 625px; top: 159px; position: absolute; color: black; font-size: 30px; font-family: Jacques Francois; font-weight: 400; word-wrap: break-word">Sign In</div>
        <input type="text" name="Username" id="Username" style="left: 517px;border-radius:10px; top: 270px; position: absolute; width: 344.80px; height: 49px;" required>
        <input type="password" name="Password" id="Password" style="left: 517px; top: 400px;border-radius:10px; position: absolute; width: 344.80px; height: 49px;" required>
        <input type="submit" name="signin" value="Sign In" style="left: 645px; top: 474px;border-radius:5px; position: absolute; width: 80px; height: 30px;">
    </form>
    <div class="Username" style="width: 212.68px; height: 51.07px; left: 515px; top: 223px; position: absolute; color: rgba(0, 0, 0, 0.68); font-size: 25px; font-family: Inter; font-weight: 400; word-wrap: break-word">username</div>
    <div class="ForgotPassword" style="width: 365.33px; height: 27.75px; left: 615px; top: 527px; position: absolute; color: black; font-size: 20px; font-family: Inter; font-weight: 400; word-wrap: break-word"> <p><a class="link-body-emphasis link-offset-2 link-underline-opacity-25 link-underline-opacity-75-hover" href="http://localhost/learningphp/desktop9.php" style="color:black">forgot password?</a></p></div>
    <div class="Password" style="width: 306.88px; height: 48.85px; left: 515px; top: 355px; position: absolute; color: rgba(0, 0, 0, 0.60); font-size: 25px; font-family: Inter; font-weight: 400; word-wrap: break-word">password</div>
    <div class="Home" style="width: 134px; height: 18px; left: 1166px; top: 45px; position: absolute; color: black; font-size: 25px; font-family: Inter; font-weight: 400; word-wrap: break-word;z-index: 2 "><p><a class="link-body-emphasis link-offset-2 link-underline-opacity-25 link-underline-opacity-75-hover" href="http://localhost/learningphp/desktop1.php" style="color:black">Home</a></p></div>
    <div class="PetDaycare"
                style="width: 202px; height: 32px; left: 90px; top: 27px; position: absolute; color: black; font-size: 40px; font-family: Inter; font-weight: 400; word-wrap: break-word">
                Pet Connect</div>
    </div>
    </div>
    </div>
    <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,1,0" rel="stylesheet">
<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
  }
  body {
    /* Add any additional styles for body if needed */
  }
  .chatbot-toggler {
    position: fixed;
    bottom: 30px;
    right: 35px;
    outline: none;
    border: none;
    height: 50px;
    width: 50px;
    display: flex;
    cursor: pointer;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    background: #724ae8;
    transition: all 0.2s ease;
  }
  body.show-chatbot .chatbot-toggler {
    transform: rotate(90deg);
  }
  .chatbot-toggler span {
    color: #fff;
    position: absolute;
  }
  .chatbot-toggler span:last-child,
  body.show-chatbot .chatbot-toggler span:first-child  {
    opacity: 0;
  }
  body.show-chatbot .chatbot-toggler span:last-child {
    opacity: 1;
  }
  .chatbot {
    position: fixed;
    right: 35px;
    bottom: 90px;
    width: 420px;
    background: #fff;
    border-radius: 15px;
    overflow: hidden;
    opacity: 0;
    pointer-events: none;
    transform: scale(0.5);
    transform-origin: bottom right;
    box-shadow: 0 0 128px 0 rgba(0,0,0,0.1),
                0 32px 64px -48px rgba(0,0,0,0.5);
    transition: all 0.1s ease;
  }
  body.show-chatbot .chatbot {
    opacity: 1;
    pointer-events: auto;
    transform: scale(1);
  }
  .chatbot header {
    padding: 16px 0;
    position: relative;
    text-align: center;
    color: #fff;
    background: #724ae8;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
  }
  .chatbot header span {
    position: absolute;
    right: 15px;
    top: 50%;
    display: none;
    cursor: pointer;
    transform: translateY(-50%);
  }
  header h2 {
    font-size: 1.4rem;
  }
  .chatbot .chatbox {
    overflow-y: auto;
    height: 230px;
    padding: 30px 20px 100px;
  }
  .chatbot :where(.chatbox, textarea)::-webkit-scrollbar {
    width: 6px;
  }
  .chatbot :where(.chatbox, textarea)::-webkit-scrollbar-track {
    background: #fff;
    border-radius: 25px;
  }
  .chatbot :where(.chatbox, textarea)::-webkit-scrollbar-thumb {
    background: #ccc;
    border-radius: 25px;
  }
  .chatbox .chat {
    display: flex;
    list-style: none;
  }
  .chatbox .outgoing {
    margin: 20px 0;
    justify-content: flex-end;
  }
  .chatbox .incoming span {
    width: 32px;
    height: 32px;
    color: #fff;
    cursor: default;
    text-align: center;
    line-height: 32px;
    align-self: flex-end;
    background: #724ae8;
    border-radius: 4px;
    margin: 0 10px 7px 0;
  }
  .chatbox .chat p {
    white-space: pre-wrap;
    padding: 12px 16px;
    border-radius: 10px 10px 0 10px;
    max-width: 75%;
    color: #fff;
    font-size: 0.95rem;
    background: #724ae8;
  }
  .chatbox .incoming p {
    border-radius: 10px 10px 10px 0;
  }
  .chatbox .chat p.error {
    color: #721c24;
    background: #f8d7da;
  }
  .chatbox .incoming p {
    color: #000;
    background: #f2f2f2;
  }
  .chatbot .chat-input {
    display: flex;
    gap: 5px;
    position: absolute;
    bottom: 0;
    width: 100%;
    background: #fff;
    padding: 3px 20px;
    border-top: 1px solid #ddd;
  }
  .chat-input textarea {
    height: 50px;
    width: 100%;
    border: none;
    outline: none;
    max-height: 170px;
    padding: 15px 15px 15px 0;
    font-size: 0.95rem;
  }
  .chat-input span {
    align-self: flex-end;
    color: #724ae8;
    cursor: pointer;
    height: 55px;
    display: flex;
    align-items: center;
    visibility: hidden;
    font-size: 1.35rem;
  }
  .chat-input textarea:valid ~ span {
    visibility: visible;
  }

  @media (max-width: 490px) {
    .chatbot-toggler {
      right: 20px;
      bottom: 20px;
    }
    .chatbot {
      right: 0;
      bottom: 0;
      height: 100%;
      border-radius: 0;
      width: 100%;
    }
    .chatbot .chatbox {
      height: 90%;
      padding: 25px 15px 100px;
    }
    .chatbot .chat-input {
      padding: 5px 15px;
    }
    .chatbot header span {
      display: block;
    }
  }
</style>
</head>
<body>
  <button class="chatbot-toggler">
    <span class="material-symbols-rounded">mode_comment</span>
    <span class="material-symbols-outlined">close</span>
  </button>
  <div class="chatbot">
    <header>
      <h2>Chatbot</h2>
      <span class="close-btn material-symbols-outlined">close</span>
    </header>
    <ul class="chatbox">
      <li class="chat incoming">
        <span class="material-symbols-outlined">smart_toy</span>
        <p>Hi there 👋<br>How can I help you today?</p>
      </li>
    </ul>
    <div class="chat-input">
      <textarea id="user-input" placeholder="Enter a message..." spellcheck="false" required></textarea>
      <span id="send-btn" class="material-symbols-rounded">send</span>
    </div>
  </div>

<script>
  const chatbotToggler = document.querySelector(".chatbot-toggler");
  const closeBtn = document.querySelector(".close-btn");
  const chatbox = document.querySelector(".chatbox");
  const chatInput = document.getElementById("user-input");
  const sendChatBtn = document.getElementById("send-btn");

  const responses = {
    "hi": "Hello! How can I assist you today?",
    "how are you": "I'm just a bot, but thanks for asking!",
    "what is your name": "I'm just a humble chatbot.",
    "what can you do": "I can answer your questions. Try asking me something!",
    "default": "I'm sorry, I don't understand. Can you please rephrase?",
    "tell me which food is better for my dog":"cooked,unseasoned fish,chicken,egg,carot,spinach,pumpkin etc",
    "skincare for my dog":"coconut oil,vitamin E oil,green tea bath"
  };

  const createChatLi = (message, className) => {
    const chatLi = document.createElement("li");
    chatLi.classList.add("chat", `${className}`);
    let chatContent = className === "outgoing" ? `<p></p>` : `<span class="material-symbols-outlined">smart_toy</span><p></p>`;
    chatLi.innerHTML = chatContent;
    chatLi.querySelector("p").textContent = message;
    return chatLi;
  }

  const handleChat = () => {
    const userMessage = chatInput.value.trim().toLowerCase();
    if(!userMessage) return;

    chatInput.value = ""; // Clear input field

    chatbox.appendChild(createChatLi(userMessage, "outgoing"));
    chatbox.scrollTo(0, chatbox.scrollHeight);

    setTimeout(() => {
      const response = responses[userMessage] || responses["default"];
      const incomingChatLi = createChatLi(response, "incoming");
      chatbox.appendChild(incomingChatLi);
      chatbox.scrollTo(0, chatbox.scrollHeight);
    }, 600);
  }

  chatInput.addEventListener("keydown", (e) => {
    if(e.key === "Enter" && !e.shiftKey) {
      e.preventDefault();
      handleChat();
    }
  });

  sendChatBtn.addEventListener("click", handleChat);
  closeBtn.addEventListener("click", () => document.body.classList.remove("show-chatbot"));
  chatbotToggler.addEventListener("click", () => document.body.classList.toggle("show-chatbot"));
</script>
</body>
</html>

</body>
</html>
