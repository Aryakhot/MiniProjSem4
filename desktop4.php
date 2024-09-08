<?php
$servername ="localhost";
$username = "root";
$password ="";
$dbname = "responsiveform1";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
    echo "connection ok";
}
else 
{
    echo "connection failed";
}

?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="overflow-auto">
<div class="overflow-x-hidden">
  <style>
    .overflow-auto {
  overflow-x: hidden;
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
      top: 38px;
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
 
<div class="arrow-container" style="position: absolute; left: /* adjust as needed */; top: /* adjust as needed */;">
  <a href="javascript:history.back()">
<i class="bi bi-arrow-left-circle-fill"></i>
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">  
  <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0m3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z"/>
   </svg>
   </a>
</div>

<div class="Desktop4" style="width: 1440px; height: 2201px; position: relative; background: white">
    <div class="Rectangle92" style="width: 1310px; height: 256px; left: 30px; top: 1174px; position: absolute; background: rgba(142.59, 169.55, 194.44, 0.77)"></div>
    <div class="Line10" style="width: 1040.02px; height: 0px; left: 183px; top: 1618px; position: absolute; border: 2px black solid"></div>
    <div class="Rectangle91" style="width: 1440px; height: 797px; left: 0px; top: 90px; position: absolute; background: #D9D9D9"></div>
    <div class="AboutUs" style="width: 119px; height: 29px; left: 1159px; top: 28px; position: absolute; color: black; font-size: 25px; font-family: Inter; font-weight: 400; word-wrap: break-word"><p><a class="link-body-emphasis link-offset-2 link-underline-opacity-25 link-underline-opacity-75-hover" href="http://localhost/learningphp/desktop10.php" style="color:black">About Us</a></p></div>
    <div class="Rectangle88" style="width: 396px; height: 660px; left: 976px; top: 147px; position: absolute; background: rgba(124.84, 149.81, 130.34, 0.70)"></div>
    <img class="Rectangle88" style="width: 442px; height: 516px; left: 887px; top: 185px; position: absolute; border-top-left-radius: 209px; border-top-right-radius: 208px; border-bottom-right-radius: 6px; border-bottom-left-radius: 6px" src="petsitter.jpg" />
    <div class="GivePetsLoveAndAlsoGetPaid" style="width: 822px; height: 113px; left: 65px; top: 228px; position: absolute; color: black; font-size: 45px; font-family: Inknut Antiqua; font-weight: 400; word-wrap: break-word">give pets love and also get paid</div>
    <div class="Group19" style="width: 219px; height: 84px; left: 65px; top: 629px; position: absolute">
      <div class="Rectangle90" style="width: 219px; height: 84px; left: 0px; top: 0px; position: absolute; background: rgba(1.16, 33.30, 92.44, 0.62); box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 30px; border: 1px white solid"></div>
      <div class="CreateProfile" style="width: 178px; height: 43px; left: 45px; top: 22px; position: absolute; color: white; font-size: 24px; font-family: Inter; font-weight: 400; word-wrap: break-word"><p><a class="link-body-emphasis link-offset-2 link-underline-opacity-25 link-underline-opacity-75-hover" href="http://localhost/learningphp/dbform3.php"style="color:black" >Create Profile</a></p></div></div>  
    </div>
    <div class="Home" style="width: 134px; height: 18px; left: 1054px; top: 50px; position: absolute; color: black; font-size: 25px; font-family: Inter; font-weight: 400; word-wrap: break-word"><p><a class="link-body-emphasis link-offset-2 link-underline-opacity-25 link-underline-opacity-75-hover"href="http://localhost/learningphp/desktop1.php"style="color:black">Home</a></p></div>
    <div class="Ellipse86" style="width: 211px; height: 196px; left: 184px; top: 1520px; position: absolute; background: #7D9682; border-radius: 9999px"></div>
    <div class="GetStarted" style="width: 787px; height: 212px; left: 333px; top: 1252px; position: absolute; text-align: center; color: black; font-size: 61px; font-family: KoPub Batang; font-weight: 400; word-wrap: break-word">Get Started !</div>
    <div class="CreateAccount" style="width: 330px; height: 85px; left: 119px; top: 1758px; position: absolute; text-align: center; color: black; font-size: 40px; font-family: Inika; font-weight: 700; word-wrap: break-word">create account</div>
    <div class="GetVerfied" style="width: 330px; height: 85px; left: 555px; top: 1758px; position: absolute; text-align: center; color: black; font-size: 40px; font-family: Inika; font-weight: 700; word-wrap: break-word">get verfied</div>
    <div class="GetPaid" style="width: 330px; height: 85px; left: 962px; top: 1758px; position: absolute; text-align: center; color: black; font-size: 40px; font-family: Inika; font-weight: 700; word-wrap: break-word">get paid</div>
    <div class="SignUpAndLogin" style="width: 202px; height: 222px; left: 193px; top: 1854px; position: absolute; text-align: center; color: black; font-size: 32px; font-family: Adamina; font-weight: 400; word-wrap: break-word">sign up and login.</div>
    <div class="SubmitDocumentsToConfirmBackgroundCheck" style="width: 286px; height: 222px; left: 583px; top: 1854px; position: absolute; text-align: center; color: black; font-size: 32px; font-family: Adamina; font-weight: 400; word-wrap: break-word">submit documents to confirm background check.</div>
    <div class="AcceptBookingsRequestsAndShareLoveWithPets" style="width: 286px; height: 222px; left: 984px; top: 1854px; position: absolute; text-align: center; color: black; font-size: 32px; font-family: Adamina; font-weight: 400; word-wrap: break-word">accept bookings requests and share love with pets.</div>
    <div class="Step1" style="width: 159px; height: 104px; left: 211px; top: 1564px; position: absolute; text-align: center; color: black; font-size: 32px; font-family: Inknut Antiqua; font-weight: 600; word-wrap: break-word">step 1</div>
    <div class="Ellipse85" style="width: 211px; height: 196px; left: 615px; top: 1520px; position: absolute; background: rgba(54.77, 82.87, 44.89, 0.97); border-radius: 9999px"></div>
    <div class="Ellipse87" style="width: 211px; height: 196px; left: 1022px; top: 1520px; position: absolute; background: rgba(104.54, 146.62, 71.48, 0.98); border-radius: 9999px"></div>
    <div class="Step2" style="width: 159px; height: 104px; left: 641px; top: 1564px; position: absolute; text-align: center; color: black; font-size: 32px; font-family: Inknut Antiqua; font-weight: 600; word-wrap: break-word">step 2</div>
    <div class="Step3" style="width: 159px; height: 104px; left: 1048px; top: 1567px; position: absolute; text-align: center; color: black; font-size: 32px; font-family: Inknut Antiqua; font-weight: 600; word-wrap: break-word">step 3</div>
    <!-- <div class="Group17" style="width: 140px; height: 117.93px; left: 43px; top: 1137.79px; position: absolute; transform: rotate(-16.51deg); transform-origin: 0 0"> -->
      <!-- <div class="Ellipse91" style="width: 40.41px; height: 25.64px; left: 105.38px; top: 28.25px; position: absolute; transform: rotate(-59.75deg); transform-origin: 0 0; background: #5A4949; border-radius: 9999px"></div> -->
      <!-- <div class="Ellipse90" style="width: 32.11px; height: 47.54px; left: 69.26px; top: -19.67px; position: absolute; transform: rotate(-17.98deg); transform-origin: 0 0; background: #5A4949; border-radius: 9999px"></div> -->
      <!-- <div class="Ellipse88" style="width: 43.09px; height: 29.20px; left: 26.47px; top: 21.46px; position: absolute; transform: rotate(24.80deg); transform-origin: 0 0; background: #5A4949; border-radius: 9999px"></div> -->
      <!-- <div class="Ellipse89" style="width: 30.97px; height: 40.94px; left: 32.86px; top: 1.76px; position: absolute; transform: rotate(-33.90deg); transform-origin: 0 0; background: #5A4949; border-radius: 9999px"></div> -->
      <!-- <div class="Polygon1" style="width: 122.01px; height: 67.59px; left: 152.30px; top: 69.02px; position: absolute; transform: rotate(159.51deg); transform-origin: 0 0; background: #5A4949"></div> -->
    </div>
    <!-- <div class="Group18" style="width: 118.61px; height: 99.28px; left: 1305px; top: 1386px; position: absolute; transform: rotate(37.91deg); transform-origin: 0 0"> -->
      <!-- <div class="Ellipse91" style="width: 34.13px; height: 21.65px; left: 32.66px; top: 86.29px; position: absolute; transform: rotate(-5.15deg); transform-origin: 0 0; background: #5A4949; border-radius: 9999px"></div> -->
      <!-- <div class="Ellipse90" style="width: 27.21px; height: 40.02px; left: 47.70px; top: 38.03px; position: absolute; transform: rotate(36.45deg); transform-origin: 0 0; background: #5A4949; border-radius: 9999px"></div> -->
      <!-- <div class="Ellipse88" style="width: 36.41px; height: 24.65px; left: -1.65px; top: 28.70px; position: absolute; transform: rotate(79.04deg); transform-origin: 0 0; background: #5A4949; border-radius: 9999px"></div> -->
      <!-- <div class="Ellipse89" style="width: 26.23px; height: 34.48px; left: 15.02px; top: 23.46px; position: absolute; transform: rotate(20.62deg); transform-origin: 0 0; background: #5A4949; border-radius: 9999px"></div> -->
      <!-- <div class="Polygon1" style="width: 103.36px; height: 56.90px; left: 27.88px; top: 138.50px; position: absolute; transform: rotate(-146.05deg); transform-origin: 0 0; background: #5A4949"></div> -->
    </div>
    <div class="PetDaycare" style="width: 202px; height: 32px; left: 60px; top: 34px; position: absolute; color: black; font-size: 40px; font-family: Inter; font-weight: 400; word-wrap: break-word">Pet Connect</div>
    <div class="ServicesYouCanOffer" style="width: 536px; height: 76px; left: 124px; top: 2182px; position: absolute; color: black; font-size: 48px; font-family: Abril Fatface; font-weight: 400; word-wrap: break-word">Services you can offer</div>
    <div class="Boarding" style="width: 376px; height: 40px; left: 124px; top: 2308px; position: absolute; color: black; font-size: 36px; font-family: Hermeneus One; font-weight: 400; word-wrap: break-word">BOARDING</div>
    <div class="DayCare" style="width: 376px; height: 40px; left: 124px; top: 2555px; position: absolute; color: black; font-size: 36px; font-family: Hermeneus One; font-weight: 400; word-wrap: break-word">DAY CARE</div>
    <div class="ProvidingOvernightComfortableStayForThePet" style="width: 618px; height: 127px; left: 124px; top: 2378px; position: absolute; color: black; font-size: 34px; font-family: Inder; font-weight: 400; word-wrap: break-word">Providing overnight comfortable stay for the pet.</div>
    <div class="PetStaysAtYourHouseForADayOrCoupleOfHours" style="width: 618px; height: 127px; left: 124px; top: 2625px; position: absolute; color: black; font-size: 34px; font-family: Inder; font-weight: 400; word-wrap: break-word">Pet stays at your house for a day or couple of hours.</div>
    <div class="Ellipse93" style="width: 263px; height: 247px; left: 921px; top: 2544px; position: absolute; background: rgba(104.54, 146.62, 71.48, 0.81); border-radius: 9999px"></div>
    <img class="Image2" style="width: 150px; height: 154px; left: 984px; top: 2582px; position: absolute" src="image 1.png" />
    <div class="Ellipse94" style="width: 263px; height: 247px; left: 919px; top: 2258px; position: absolute; background: #34538C; border-radius: 9999px"></div>
    <img class="Image1" style="width: 150px; height: 154px; left: 977px; top: 2301px; position: absolute" src="image 1.png" />
    <!-- <div class="Ellipse95" style="width: 65.03px; height: 62.71px; left: 886px; top: 2258px; position: absolute; background: rgba(255, 199, 0, 0.84)"></div> -->
    <div class="Ellipse96" style="width: 43px; height: 43px; left: 908px; top: 2560px; position: absolute; background: rgba(255, 199, 0, 0.72); border-radius: 9999px"></div>
    <div class="Rectangle93" style="width: 1380px; height: 250px; left: 0px; top: 2985px; position: absolute; background: #D9D9D9"></div>
    <div class="Group3" style="width: 1145px; height: 183px; left: 124px; top: 3053px; position: absolute">
      <div class="TermsOfUse" style="width: 170px; height: 38px; left: 25px; top: -40px; position: absolute; color: black; font-size: 30px; font-family: Actor; font-weight: 400; word-wrap: break-word">terms of use</div>
      <div class="PrivacyPolicy" style="width: 189px; height: 38px; left: 202px; top: -40px; position: absolute; color: black; font-size: 30px; font-family: Actor; font-weight: 400; word-wrap: break-word">privacy policy</div>
      <div class="JoinOurTeam" style="width: 189px; height: 38px; left: 406px; top: -40px; position: absolute; color: black; font-size: 30px; font-family: Actor; font-weight: 400; word-wrap: break-word">join our team</div>
      <a href="https://www.instagram.com/accounts/login/?hl=en">
      <img class="Instagram1" style="width: 60px; height: 60px; left: 36px; top: 40px; position: absolute" src="instagram 1.png" 
        a href="https://www.instagram.com/accounts/login/?hl=en"/></a>
      <img class="Facebook1" style="width: 60px; height: 60px; left: 151px; top: 40px; position: absolute" src="facebook 1.png" />
      <img class="Gmail1" style="width: 65.83px; height: 60px; left: 266px; top: 40px; position: absolute" src="gmail 1.png" />
      <img class="Twitter11" style="width: 60px; height: 60px; left: 378px; top: 40px; position: absolute" src="twitter.png" />
      <img class="PhoneCall1" style="width: 60px; height: 60px; left: 757px; top: 40px; position: absolute" src="phone-call 1.png" />
      <div class="348" style="width: 284px; height: 38px; left: 861px; top: 40px; position: absolute; color: black; font-size: 30px; font-family: Actor; font-weight: 400; word-wrap: break-word">953094853986-348</div>
      <div style="width: 44px; height: 34px; left: 831px; top: 40px; position: absolute; color: black; font-size: 30px; font-family: Actor; font-weight: 400; word-wrap: break-word">:</div>
    </div>
   
    <div class="LovePetsButCanTOwnOneWantSomeExtraCashSignUpToProvideDayBoardingPetSittingOrPetWalkingServices" style="width: 650px; height: 127px; left: 73px; top: 370px; position: absolute; color: black; font-size: 40px; font-family: Inter; font-weight: 400; word-wrap: break-word">Love pets but can't own one? Want some extra cash? Sign up to provide day-boarding, pet-sitting or pet-walking services!<br/></div>
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

  