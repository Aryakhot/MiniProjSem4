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

?>

<link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.3/components/services/service-2/assets/css/service-2.css" />
<!-- Service 2 - Bootstrap Brain Component -->
<body>
    <style>
        .body{
            background-color:  rgba(124.84, 149.81, 130.34, 0.70);
            height:150%;
           
        }
        #hello {
          color:black;
        }
        .hi{
          text-align: center;
          color:black;
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

<div class="body">
<section id="hello" class="py-5 py-xl-8">
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
        <h1 class="hi">Services</h1><br>
        <p class="hi">Welcome to the ultimate pet oasis! Unleash the joy with our top-notch pet daycare and boarding services all under one woof. Your furry friend's exclusive retreat—because they deserve the best!.</p>
        <p class="text-secondary mb-5 text-center"></p>
        <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle">
      </div>
    </div>
  </div>

  <div class="container overflow-hidden">
    <div class="row gy-5 gx-md-5 justify-content-center">
      <div class="col-10 col-md-5 col-xl-4 overflow-hidden">
        <div class="row gy-4">
          <div class="col-12 col-lg-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" fill="currentColor" class="bi bi-command text-primary" viewBox="0 0 16 16">
              <path d="M3.5 2A1.5 1.5 0 0 1 5 3.5V5H3.5a1.5 1.5 0 1 1 0-3zM6 5V3.5A2.5 2.5 0 1 0 3.5 6H5v4H3.5A2.5 2.5 0 1 0 6 12.5V11h4v1.5a2.5 2.5 0 1 0 2.5-2.5H11V6h1.5A2.5 2.5 0 1 0 10 3.5V5H6zm4 1v4H6V6h4zm1-1V3.5A1.5 1.5 0 1 1 12.5 5H11zm0 6h1.5a1.5 1.5 0 1 1-1.5 1.5V11zm-6 0v1.5A1.5 1.5 0 1 1 3.5 11H5z" />
            </svg>
          </div>
          <div class="col-12 col-lg-10">
            <h4 class="mb-3">Daycare</h4>Experience a day at Puppy Playtime bursting with joy, buddies, and non-stop play! Our daycare service provides a secure and vibrant space for your pup to socialize, exercise, and revel in countless tail-wagging adventures.
            <p class="mb-3 text-secondary"></p>
            
          </div>
        </div>
      </div>
      <div class="col-10 col-md-5 col-xl-4 overflow-hidden">
        <div class="row gy-4">
          <div class="col-12 col-lg-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" fill="currentColor" class="bi bi-laptop text-primary" viewBox="0 0 16 16">
              <path d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5h11zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5z" />
            </svg>
          </div>
          <div class="col-12 col-lg-10">
            <h4 class="mb-3">Video calling </h4>Introducing our seamless video calling system on the website—connect with your pet in real-time! Experience the joy of seeing your furry friend, ensuring you're never too far away. Stay close, virtually, with our cutting-edge video calling feature.
            <p class="mb-3 text-secondary"style=" color:black;"></p>
                      </div>
        </div>
      </div>
      <div class="col-10 col-md-5 col-xl-4 overflow-hidden">
        <div class="row gy-4">
          <div class="col-12 col-lg-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" fill="currentColor" class="bi bi-credit-card-2-front text-primary" viewBox="0 0 16 16">
              <path d="M14 3a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12zM2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2z" />
              <path d="M2 5.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z" />
            </svg>
          </div>
          <div class="col-12 col-lg-10">
            <h4 class="mb-3">Pet Boarding</h4>While you're away, treat your dog to comfort and style. Our boarding service offers a cozy, home-like atmosphere, guaranteeing your furry friend feels cherished and secure, bridging the gap when you're apart.</p>
           
            <p class="mb-3 text-secondary">
          </div>
        </div>
      </div>
      <div class="col-10 col-md-5 col-xl-4 overflow-hidden">
        <div class="row gy-4">
          <div class="col-12 col-lg-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" fill="currentColor" class="bi bi-cup-hot text-primary" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M.5 6a.5.5 0 0 0-.488.608l1.652 7.434A2.5 2.5 0 0 0 4.104 16h5.792a2.5 2.5 0 0 0 2.44-1.958l.131-.59a3 3 0 0 0 1.3-5.854l.221-.99A.5.5 0 0 0 13.5 6H.5ZM13 12.5a2.01 2.01 0 0 1-.316-.025l.867-3.898A2.001 2.001 0 0 1 13 12.5ZM2.64 13.825 1.123 7h11.754l-1.517 6.825A1.5 1.5 0 0 1 9.896 15H4.104a1.5 1.5 0 0 1-1.464-1.175Z" />
              <path d="m4.4.8-.003.004-.014.019a4.167 4.167 0 0 0-.204.31 2.327 2.327 0 0 0-.141.267c-.026.06-.034.092-.037.103v.004a.593.593 0 0 0 .091.248c.075.133.178.272.308.445l.01.012c.118.158.26.347.37.543.112.2.22.455.22.745 0 .188-.065.368-.119.494a3.31 3.31 0 0 1-.202.388 5.444 5.444 0 0 1-.253.382l-.018.025-.005.008-.002.002A.5.5 0 0 1 3.6 4.2l.003-.004.014-.019a4.149 4.149 0 0 0 .204-.31 2.06 2.06 0 0 0 .141-.267c.026-.06.034-.092.037-.103a.593.593 0 0 0-.09-.252A4.334 4.334 0 0 0 3.6 2.8l-.01-.012a5.099 5.099 0 0 1-.37-.543A1.53 1.53 0 0 1 3 1.5c0-.188.065-.368.119-.494.059-.138.134-.274.202-.388a5.446 5.446 0 0 1 .253-.382l.025-.035A.5.5 0 0 1 4.4.8Zm3 0-.003.004-.014.019a4.167 4.167 0 0 0-.204.31 2.327 2.327 0 0 0-.141.267c-.026.06-.034.092-.037.103v.004a.593.593 0 0 0 .091.248c.075.133.178.272.308.445l.01.012c.118.158.26.347.37.543.112.2.22.455.22.745 0 .188-.065.368-.119.494a3.31 3.31 0 0 1-.202.388 5.444 5.444 0 0 1-.253.382l-.018.025-.005.008-.002.002A.5.5 0 0 1 6.6 4.2l.003-.004.014-.019a4.149 4.149 0 0 0 .204-.31 2.06 2.06 0 0 0 .141-.267c.026-.06.034-.092.037-.103a.593.593 0 0 0-.09-.252A4.334 4.334 0 0 0 6.6 2.8l-.01-.012a5.099 5.099 0 0 1-.37-.543A1.53 1.53 0 0 1 6 1.5c0-.188.065-.368.119-.494.059-.138.134-.274.202-.388a5.446 5.446 0 0 1 .253-.382l.025-.035A.5.5 0 0 1 7.4.8Zm3 0-.003.004-.014.019a4.077 4.077 0 0 0-.204.31 2.337 2.337 0 0 0-.141.267c-.026.06-.034.092-.037.103v.004a.593.593 0 0 0 .091.248c.075.133.178.272.308.445l.01.012c.118.158.26.347.37.543.112.2.22.455.22.745 0 .188-.065.368-.119.494a3.198 3.198 0 0 1-.202.388 5.385 5.385 0 0 1-.252.382l-.019.025-.005.008-.002.002A.5.5 0 0 1 9.6 4.2l.003-.004.014-.019a4.149 4.149 0 0 0 .204-.31 2.06 2.06 0 0 0 .141-.267c.026-.06.034-.092.037-.103a.593.593 0 0 0-.09-.252A4.334 4.334 0 0 0 9.6 2.8l-.01-.012a5.099 5.099 0 0 1-.37-.543A1.53 1.53 0 0 1 9 1.5c0-.188.065-.368.119-.494.059-.138.134-.274.202-.388a5.446 5.446 0 0 1 .253-.382l.025-.035A.5.5 0 0 1 10.4.8Z" />
            </svg>
          </div>
          <div class="col-12 col-lg-10">
            <h4 class="mb-3">Chat bot</h4>Say hello to our website chat bot—your instant guide and companion! Whether you have questions, need assistance, or just want a friendly chat, our bot is here 24/7 to make your online experience a breeze. Engage, inquire, and explore effortlessly with our interactive chat bot.
            <p class="mb-3 text-secondary"></p>
                      </div>
        </div>
      </div>
      <div class="col-10 col-md-5 col-xl-4 overflow-hidden">
        <div class="row gy-4">
          <div class="col-12 col-lg-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" fill="currentColor" class="bi bi-gear text-primary" viewBox="0 0 16 16">
              <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z" />
              <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z" />
            </svg>
          </div>
          <div class="col-12 col-lg-10">
            <h4 class="mb-3">Payment</h4>For a pet daycare website, integrating payment services for booking appointments is crucial. You can offer options like credit/debit card payments, PayPal, or even digital wallets like Apple Pay or Google Pay for seamless transactions. Ensure the payment process is secure and user-friendly to encourage bookings.</p>
            <p class="mb-3 text-secondary"></p>
                     </div>
        </div>
      </div>
     
    </div>
  </div>
</section>
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