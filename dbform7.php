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
    </div>
    </div>
    </div>
</body>
</html>
