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

</body>
</html>
