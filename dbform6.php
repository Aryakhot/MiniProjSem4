<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "responsiveform2";

// Create a database connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check the database connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['search'])) {
  $cbox1 = isset($_POST['cbox1']) ? 1 : 0; // Check if the checkbox is selected, set to 1 if selected.
  $cbox2 = isset($_POST['cbox2']) ? 1 : 0;
  $cbox3 = isset($_POST['cbox3']) ? 1 : 0;
  $service = isset($_POST['service']) ? $_POST['service'] : '';
  $date = isset($_POST['date']) ? $_POST['date'] : '';
  $date2 = isset($_POST['date2']) ? $_POST['date2'] : '';

  $query = "INSERT INTO searchapi values('$cbox1','$cbox2','$cbox3','$service','$date','$date2')";
  // Execute the SQL query
  if (mysqli_query($conn, $query)) {
    // Data inserted into the database successfully
    echo "Data inserted into the database successfully";

    // Redirect to a new page
    header("Location:http://localhost/learningphp/payment.php");
    exit; // Ensure no further code execution
  } else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
  }
}
?>

<!DOCTYPE html>
<html>

<head>
  <style>
    /* Add your CSS styles here */
    /* ... */



    .calendar-popup {
      display: none;
      position: absolute;
      border: 1px solid #ccc;
      background-color: #fff;
      z-index: 1000;
    }

    .calendar-popup table {
      border-collapse: collapse;
    }

    .calendar-popup th,
    .calendar-popup td {
      border: 1px solid #ccc;
      padding: 5px;
      text-align: center;
    }

    .date-input {
      cursor: pointer;
      /* background-color: rgba(169.30, 195.36, 243.31, 0.53); */
    }

    body {
      font-family: 'Arial', sans-serif;
      margin: 0;
      padding: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      background-color: #f4f4f4;
    }

    .svg-video {
      left: 790px;
      position: absolute;
      z-index: 2;
      /* Set a higher z-index value to bring the arrow on top */
      top: -170px;
    }

    .video-container {
      position: relative;
      top: 7px;
      z-index: 1;
      /* Lower z-index to ensure video container is behind the icon */
    }

    .video-container video {
      max-width: 100%;
      max-height: 200px;
      border-radius: 6px;
    }

    .video-container svg {
      width: 24px;
      height: auto;
    }

    body {
      overflow-x: hidden;
    }

    .bi {
      margin: 0;
      padding: 2px;
      margin-right: 500px;
      margin-bottom: 170px;
      position: relative;
    }

    .bi-arrow-left-circle-fill,
    .svg-arrow {
      left: -650px;
      position: relative;
      z-index: 2;
      /* Set a higher z-index value to bring the arrow on top */
      top: 55px
    }

    .arrow-container a {
      text-decoration: none;
      color: inherit;
      /* Inherit the color from the parent container */
      cursor: pointer;
      /* Show the hand cursor on hover */
    }

    .arrow-container {
      position: relative;
      top: 4px;
    }

    .arrow-container svg {
      width: 24px;
      /* Adjusted size to 24px */
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
  <a href="http://localhost/learningphp/desktop8.php" target="">
    <div class="video-container">
      <!-- <video id="local-video" autoplay muted playsinline></video> -->
      <!-- <video id="remote-video" autoplay playsinline></video> -->
      <!-- Add your video icon here -->
      <svg xmlns="http://www.w3.org/2000/svg" class="bi bi-camera-video-fill svg-video" viewBox="0 0 16 16">
        <path fill-rule="evenodd"
          d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2z" />
      </svg>
    </div>

    <div class="arrow-container" style="position: absolute; left: /* adjust as needed */; top: /* adjust as needed */;">
      <a href="javascript:history.back()">
        <i class="bi bi-arrow-left-circle-fill"></i>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
          class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
          <path
            d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0m3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z" />
        </svg>
      </a>
    </div>
    <!-- <div class="Desktop6" style="width: 1340px; height: 700px; position: relative; background: white">
        <div class="Rectangle109"
            style="width: 1440px; height: 1024px; left: 0px; top: 20px; position: absolute; background: rgba(169.30, 195.36, 243.31, 0.53)">
        </div> -->
    <div class="Rectangle103"
      style="width: 1440px; height: 600px; left: 0px; top: 108px; position: absolute; background-color:#a3b899"></div>
    <form action="#" method="POST">
      <div class="ForBoarding"
        style="width: 247px; height: 50px; left: 127px; top: 270px; position: absolute; color: black; font-size: 38px; font-family: 'Jacques Francois'; font-weight: 400; word-wrap: break-word">
        for boarding</div>
      <input type="checkbox" name="cbox1" id="ForBoarding" value="ForBoarding"
        style="width: 244px; height: 41px; left: 270px; top: 277px; position: absolute;">
      <div class="ForDayCare"
        style="width: 247px; height: 50px; left: 569px; top: 270px; position: absolute; color: black; font-size: 38px; font-family: Jacques Francois; font-weight: 400; word-wrap: break-word">
        for day care</div>
      <input type="checkbox" name="cbox2" id="ForDayCare" value="ForDayCare"
        style="width: 244px; height: 41px; left: 688px; top: 277px; position: absolute;">
      <div class="ForFewHours"
        style="width: 247px; height: 50px; left: 986px; top: 270px; position: absolute; color: black; font-size: 38px; font-family: Jacques Francois; font-weight: 400; word-wrap: break-word">
        for few hours</div>
      <input type="checkbox" name="cbox3" id="ForFewHours" value="ForFewHours"
        style="width: 244px; height: 41px; left: 1137px; top: 277px; position: absolute;">

      <div class="Rectangle107"
        style="width: 347px; height: 83px; left: 279px; top: 429px; position: absolute; background: #D9D9D9">
      </div>
      <div class="ForDuration"
        style="width: 325px; height: 53px; left: 127px; top: 348px; position: absolute; color: black; font-size: 40px; font-family: Inika; font-weight: 700; word-wrap: break-word">
        For duration</div>
      <div class="Rectangle107"
        style="width: 347px; height: 83px; left: 854px; top: 429px; position: absolute; background: #D9D9D9">
      </div>
      <div class="DropOff"
        style="width: 167px; height: 50px; left: 127px; top: 443px; position: absolute; color: black; font-size: 38px; font-family: Jacques Francois; font-weight: 400; word-wrap: break-word">
        drop off</div>
      <div class="PickUp"
        style="width: 167px; height: 50px; left: 708px; top: 432px; position: absolute; color: black; font-size: 38px; font-family: Jacques Francois; font-weight: 400; word-wrap: break-word">
        pick up</div>
      <div class="AnySpecificServices"
        style="width: 427px; height: 49px; left: 114px; top: 560px; position: absolute; color: black; font-size: 38px; font-family: Jacques Francois; font-weight: 400; word-wrap: break-word">
        any specific services</div>
      <input type="text" name="service" id="full_name"
        style="left: 500px; top: 560px; position: absolute; width: 427px; height: 49px;" required>
      <!-- <div class="Rectangle110"
        style="width: 1440px; height: 120px; left: 0px; top: 0px; position: absolute; background: #D9D9D9">
      </div> -->
      <!-- <div class="Ellipse98"
                style="width: 100px; height: 97px; left: 1283px; top: 34px; position: absolute; background: #53678C; border-radius: 9999px">
            </div>
            <img class="Ellipse98" style="width: 99.31px; height: 99.31px; left: 1283px; top: 34px; position: absolute"
                src="Union pic.png" /> -->
      <!-- <div class="Rectangle111" style="width: 180px; height: 55px; left: 541px; top: 695px; position: absolute; background: rgba(83, 103, 140, 0.79); box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25)"></div> -->
      <!-- <div class="Search" style="width: 332px; height: 52px; left: 659px; top: 717px; position: absolute; color: white; font-size: 40px; font-family: Inika; font-weight: 700; word-wrap: break-word"><a href="file:///C:/Users/hp/Downloads/desktop5/desktop5.html"style="color: black" >search</a></div> -->
      <a href="http://localhost/learningphp/payment.php">
        <input type="SUBMIT" name="search" value="SUBMIT"
          style="left: 704px; top: 650px; position: absolute; width: 80px; height: 30px;">
      </a>


      <!-- <div class="Messages"
                style="width: 99.31px; height: 99.31px; padding: 33.10px; left: 1100px; top: 10px; position: absolute; justify-content: center; align-items: center; gap: 33.10px; display: inline-flex">
                <img class="Union" style="width: 99.31px; height: 99.31px; position: absolute" src="Messages.png"> -->
      <!-- <input type="SUBMIT" name="search" value="SUBMIT" href="http://localhost/learningphp/payment.html"
        style="left:  -425px; top: 650px; position: absolute; width: 80px; height: 30px;">
      </div> -->
      <div class="Home"
        style="width: 134px; height: 18px; left: 1109px; top: 67px; position: absolute; color: black; font-size: 25px; font-family: Inter; font-weight: 400; word-wrap: break-word">
        <a href="http://localhost/learningphp/desktop1.php" style="color: black">Home</a>
      </div>
      <input type="date" name="date" id="dateInput" class="date-input" readonly
        style="width: 120px; height: 41px; left: 475px; top: 450px; position: absolute; text-align: center;">
      <div id="calendarPopup" class="calendar-popup"></div>
      </div>
      <div class="PetDaycare"
        style="width: 202px; height: 32px; left: 80px; top: 48px; position: absolute; color: black; font-size: 40px; font-family: Inter; font-weight: 400; word-wrap: break-word">
        Pet Connect</div>
      <input type="date" name="date2" id="dateInput2" class="date-input" readonly
        style="width: 120px; height: 41px; left: 1045px; top: 450px; position: absolute; text-align: center;">
      <div id="calendarPopup2" class="calendar-popup"></div>
      </div>

      <script>
        // Function to open the calendar popup for the first input
        // document.getElementById("dateInput").addEventListener("click", function () {
        //   openCalendar("dateInput", "calendarPopup");
        // });

        // Function to select a date for the first calendar and close the calendar popup
        function selectDate(year, month, day, dateInputId, calendarPopupId) {
          const dateInput = document.getElementById(dateInputId);
          const calendarPopup = document.getElementById(calendarPopupId);
          dateInput.value = `${year}-${(month + 1).toString().padStart(2, '0')}-${day.toString().padStart(2, '0')}`;
          calendarPopup.style.display = "none";
        }

        // Function to open the calendar popup for the second input
        document.getElementById("dateInput2").addEventListener("click", function () {
          openCalendar("dateInput2", "calendarPopup2");
        });

        // Function to select a date for the second calendar and close the calendar popup
        function selectDate2(year, month, day, dateInputId, calendarPopupId) {
          const dateInput = document.getElementById(dateInputId);
          const calendarPopup = document.getElementById(calendarPopupId);
          dateInput.value = `${year}-${(month + 1).toString().padStart(2, '0')}-${day.toString().padStart(2, '0')}`;
          calendarPopup.style.display = "none";
        }

        // Function to generate the calendar for the input field
        function generateCalendar(year, month, dateInputId, calendarPopupId) {
          const calendarPopup = document.getElementById(calendarPopupId);
          const daysInMonth = new Date(year, month + 1, 0).getDate();
          const firstDay = new Date(year, month, 1).getDay();
          const monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

          let calendarHTML = `<table>
                <caption>${monthNames[month]} ${year}</caption>
                <tr>
                    <th>Sun</th>
                    <th>Mon</th>
                    <th>Tue</th>
                    <th>Wed</th>
                    <th>Thu</th>
                    <th>Fri</th>
                    <th>Sat</th>
                </tr><tr>`;

          for (let i = 0; i < firstDay; i++) {
            calendarHTML += '<td></td>';
          }

          for (let day = 1; day <= daysInMonth; day++) {
            calendarHTML += `<td><a href="#" onclick="selectDate(${year}, ${month + 1}, ${day}, '${dateInputId}', '${calendarPopupId}')">${day}</a></td>`;
            if ((day + firstDay) % 7 === 0) {
              calendarHTML += '</tr><tr>';
            }
          }

          calendarHTML += '</tr></table>';
          calendarPopup.innerHTML = calendarHTML;
        }

        // Function to open the calendar popup for the input field
        function openCalendar(dateInputId, calendarPopupId) {
          const calendarPopup = document.getElementById(calendarPopupId);
          const dateInput = document.getElementById(dateInputId);
          const currentDate = new Date();
          const year = currentDate.getFullYear();
          const month = currentDate.getMonth();

          generateCalendar(year, month, dateInputId, calendarPopupId);

          calendarPopup.style.display = "block";
          calendarPopup.style.left = dateInput.offsetLeft + "px";
          calendarPopup.style.top = dateInput.offsetTop + dateInput.offsetHeight + "px";
        }
        let localStream;
        let remoteStream;
        let peerConnection;


      </script>
      </head>
      <!DOCTYPE html>
      <html lang="en">

      <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0"
          rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,1,0"
          rel="stylesheet">
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
          body.show-chatbot .chatbot-toggler span:first-child {
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
            box-shadow: 0 0 128px 0 rgba(0, 0, 0, 0.1),
              0 32px 64px -48px rgba(0, 0, 0, 0.5);
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
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
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

          .chat-input textarea:valid~span {
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
            "tell me which food is better for my dog": "cooked,unseasoned fish,chicken,egg,carot,spinach,pumpkin etc",
            "skincare for my dog": "coconut oil,vitamin E oil,green tea bath",
            "my dog is wounded, help with aid": "Apply a band aid",
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
            if (!userMessage) return;

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
            if (e.key === "Enter" && !e.shiftKey) {
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