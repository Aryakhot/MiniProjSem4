<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "responsiveform4";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn) {
    // echo "Connection ok";
} else {
    echo "Connection failed";
}

if (isset($_POST['register'])) {
    $full_name = $_POST['full_name'];
    $addr = $_POST['addr']; // Update variable name
    $email = $_POST['email']; // Update variable name
    $years_of_experience = $_POST['years_of_experience']; // Update variable name
    
    $contact = $_POST['contact'];
    $date_of_birth = $_POST['date_of_birth'];

    // Insert data into the database
    $query = "INSERT INTO desktop3 (full_name, addr, email, years_of_experience, contact, date_of_birth) VALUES ('$full_name', '$addr', '$email', '$years_of_experience', '$contact', '$date_of_birth')";


    $data = mysqli_query($conn,$query);

    if ($data) {
        // echo "\nData inserted into the database";
    } else {
        echo "Failed: " . mysqli_error($conn); // Print the error message for debugging
    }
}
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Your Title Here</title>
  <style>
         body {
            overflow-x: hidden; /* Hide horizontal scrollbar */
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
      top: 28px;
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
<body>
  
<div class="arrow-container" style="position: absolute; left: /* adjust as needed */; top: /* adjust as needed */;">
  <a href="javascript:history.back()">
<i class="bi bi-arrow-left-circle-fill"></i>
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">  
  <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0m3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z"/>
   </svg>
   </a>
</div>
  <div class="Desktop3" style="width: 1359px; height: 980px; position: relative; background: white">
  <form action="#" method="POST" enctype="multipart/form-data">

  <div class="Rectangle83" style="width: 1158px; height: 832px; left: 138px; top: 77px; position: absolute; background: #D9D9D9"></div>
    <div class="Rectangle74" style="width: 409px; height: 92px; left: 539px; top: 20px; position: absolute; background: #C6A58E; border: 1px black solid"></div>
    <div class="RegisterNow" style="left: 595px; top: 31px; position: absolute; color: white; font-size: 48px; font-family: Inter; font-weight: 400; word-wrap: break-word">Register Now</div>
    <div class="FullName" style="left: 260px; top: 165px; position: absolute; color: black; font-size: 25px; font-family: Inter; font-weight: 500; word-wrap: break-word">FULL NAME</div>
    <input type="text" name="full_name" id="full_name" style="left: 264px; top: 196px; position: absolute; width: 458px; height: 31px;" required>
    <div class="Address" style="left: 260px; top: 315px; position: absolute; color: black; font-size: 25px; font-family: Inter; font-weight: 500; word-wrap: break-word">ADDRESS</div>
    <input type="text" name="addr" id="Address" style="left: 264px; top: 350px; position: absolute; width: 458px; height: 31px;" required> 
    <div class="EmailId" style="left: 260px; top: 465px; position: absolute; color: black; font-size: 25px; font-family: Inter; font-weight: 500; word-wrap: break-word">EMAIL ID</div>
    <input type="text" name="email" id="EmailId" style="left: 264px; top: 496px; position: absolute; width: 458px; height: 31px;" required>  
    <div class="YearsOfExperienceAsASitter" style="left: 265px; top: 548px; position: absolute; color: black; font-size: 25px; font-family: Inter; font-weight: 500; word-wrap: break-word">YEARS OF EXPERIENCE AS A SITTER</div>
    <input type="text" name="years_of_experience" id="YearsOfExperienceAsASitter" style="left: 264px; top: 585px; position: absolute; width: 458px; height: 31px;" required> 
    <!-- <div class="LivingEnvironment" style="left: 265px; top: 642px; position: absolute; color: black; font-size: 25px; font-family: Inter; font-weight: 500; word-wrap: break-word">LIVING ENVIRONMENT</div> -->
    <!-- <input type="file" name="img" id="image" style="left: 265px; top: 690px; position: absolute;width: 458px; height: 31px;" accept=".jpg" required> -->
    <!-- <input type="text" name="LivingEnvironment" id="LivingEnvironment" style="left: 264px; top: 673px; position: absolute; width: 458px; height: 31px;" required>  -->
    <div class="Contact" style="left: 260px; top: 240px; position: absolute; color: black; font-size: 25px; font-family: Inter; font-weight: 500; word-wrap: break-word">CONTACT</div>
    <input type="text" name="contact" id="Contact" style="left: 264px; top: 270px; position: absolute; width: 458px; height: 31px;" required> 
    <div class="DateOfBirth" style="left: 260px; top: 390px; position: absolute; color: black; font-size: 25px; font-family: Inter; font-weight: 500; word-wrap: break-word">DATE OF BIRTH</div>
    <input type="date" id="DateOfBirth" name="date_of_birth" style="left: 264px; top: 426px; position: absolute; width: 458px; height: 31px;" required>
    <div class="Frame1" style="width: 134px; height: 33px; left: 260px; top: 332px; position: absolute"></div>
    <!-- <div class="Rectangle71" style="width: 159px; height: 41px; left: 410px; top: 816px; position: absolute; background: rgba(109.44, 75.24, 75.24, 0.68)"></div> -->
    <!-- <div class="Submit" style="left: 437px; top: 822px; position: absolute; color: white; font-size: 25px; font-family: Inter; font-weight: 400; word-wrap: break-word">SUBMIT</div> -->
    <div class="mb-3">
    <input type="file" class="form-control" aria-label="file example" style="z index:1; left: 265px; top: 650px; position: absolute; width:458px">
    
    <div class="invalid-feedback"></div>
   </div>
   <div class="form-check">
      <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required style="z index:1; left: 290px; top: 740px; position: absolute; color:black">
      <label class="form-check-label" for="invalidCheck3"style="z index:1; left: 295px; top: 740px; position: absolute; color:black">
        Agree to terms and conditions 
      </label>
      <div id="invalidCheck3Feedback" class="invalid-feedback " style="z index:1; left: 295px; top: 760px; position: absolute; color:black">
        You must agree before submitting.
      </div>
    <input type="SUBMIT" name="register" value="SUBMIT" style="left: 264px; top: 800px; position: absolute;color: black; font-size: 20px; font-family:georgia; text-transform: lowercase; font-weight: 350; word-wrap: break-word width: 120px; height: 40px; border-radius:50px;background-color:#4285F4;color:white">
    <div class="PetDaycare" style="width: 202px; height: 32px; left: 60px; top: 9px; position: absolute; color: black; font-size: 40px; font-family: Inter; font-weight: 400; word-wrap: break-word">Pet Connect</div>
    <div class="Home" style="width: 134px; height: 18px; left: 1223px; top: 27px; position: absolute; color: black; font-size: 25px; font-family: Inter; font-weight: 400; word-wrap: break-word"><p><a class="link-body-emphasis link-offset-2 link-underline-opacity-25 link-underline-opacity-75-hover"href="http://localhost/learningphp/desktop1.php"style="color:black">Home</a></p></div>
    <div class="BySubmittingThisFormYouExpressYourInterestInBecomingADogSitterAndCommitToComplyingWithLocalPetCareLawsAndRegulationsWeAppreciateYourApplication" style="width: 874px; height: 57px; left: 283px; top: 936px; position: absolute; text-align: center; color: black; font-size: 15px; font-family: Inter; font-weight: 400; word-wrap: break-word">*By submitting this form, you express your interest in becoming a dog sitter and commit to complying with local pet care laws and regulations. We appreciate your application!</div>
    <img class="Rectangle119" style="width: 420px; height: 704px; left: 813px; top: 143px; position: absolute" src="doggyyyyy.jpg" />
    </form>
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
