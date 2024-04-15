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
    <title></title>
    <style>
        .bi-arrow-left-circle-fill,
.svg-arrow {
    left: -650px;
  position: relative;
  z-index: 2; /* Set a higher z-index value to bring the arrow on top */
  top:74px
}

.arrow-container a {
  text-decoration: none;
  color: inherit; /* Inherit the color from the parent container */
  cursor: pointer; /* Show the hand cursor on hover */
}
   
.arrow-container {
      position: relative;
      top: 4px;
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
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #7D9682; /* Background color */
        }

        #video-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px; /* Adjusted margin */
            top: 300px
        }

        video {
            max-width: 100%;
            max-height: 200px;
            margin: 10px;
            border-radius: 6px;
        }

        button {
            padding: 10px;
            font-size: 16px;
            margin: 10px;
            cursor: pointer;
            border: none;
            background-color: #2ecc71; /* Button color */
            color: #fff;
            border-radius: 4px;
        }

        button:hover {
            background-color: #27ae60; /* Button color on hover */
        }
        #local-video {
    max-width: 100%;
    max-height: 200px;
    border: 1px solid #ccc;
    margin: 10px;
    background-color: #D9D9D9; /* Change to your desired color */
}

#remote-video {
    max-width: 100%;
    max-height: 200px;
    border: 1px solid #ccc;
    margin: 10px;
    background-color: #D9D9D9; /* Change to your desired color */
}

    </style>
</head>
<body>
    
    <div id="video-container">
        <video id="local-video" autoplay muted playsinline></video>
        <video id="remote-video" autoplay playsinline></video>
        <div id="call-controls">
            <button id="start-call-btn" onclick="startCall()">Start Call</button>
            <button id="accept-call-btn" onclick="acceptCall()" style="display: none;">Accept Call</button>
            <button id="reject-call-btn" onclick="rejectCall()" style="display: none;">Reject Call</button>
            <button id="end-call-btn" onclick="endCall()" style="display: none;">End Call</button>
        </div>
        <div id="call-status"></div>
    </div>
      
    <div class="arrow-container" style="position: absolute;">
    <a href="http://localhost/learningphp/dbform6.php" style="text-decoration: none; color: black;">
        <i class="bi bi-arrow-left-circle-fill"></i>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
            <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0m3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z"/>
        </svg>
    </a>
</div>

    <script>
        const localVideo = document.getElementById('local-video');
        const remoteVideo = document.getElementById('remote-video');
        const startCallBtn = document.getElementById('start-call-btn');
        const acceptCallBtn = document.getElementById('accept-call-btn');
        const rejectCallBtn = document.getElementById('reject-call-btn');
        const endCallBtn = document.getElementById('end-call-btn');
        const callStatus = document.getElementById('call-status');

        let localStream;
        let remoteStream;
        let isCaller;
        let isRecording = false;

        async function startCall() {
            try {
                localStream = await navigator.mediaDevices.getUserMedia({ video: true, audio: true });
                localVideo.srcObject = localStream;

                // Simulate an incoming call after a delay (you can replace this with your notification logic)
                setTimeout(() => {
                    handleIncomingCall();
                }, 2000);
            } catch (error) {
                console.error('Error starting call:', error);
            }
        }

        function handleIncomingCall() {
            isCaller = true;
            callStatus.textContent = 'Incoming Call...';
            startCallBtn.style.display = 'none';
            acceptCallBtn.style.display = 'inline-block';
            rejectCallBtn.style.display = 'inline-block';
        }

        async function acceptCall() {
            callStatus.textContent = 'Call Accepted';
            acceptCallBtn.style.display = 'none';
            rejectCallBtn.style.display = 'none';
            endCallBtn.style.display = 'inline-block';

            // Simulate the remote stream being available after a delay (you can replace this with your logic)
            setTimeout(() => {
                handleRemoteStream();
            }, 2000);
        }

        function handleRemoteStream() {
            remoteStream = localStream; // In this example, both local and remote use the same stream
            remoteVideo.srcObject = remoteStream;
        }

        function rejectCall() {
            stopRecording(); // Stop recording (simulated function, replace with your recording logic)
            localStream.getTracks().forEach(track => track.stop());
            localVideo.srcObject = null;
            remoteVideo.srcObject = null;
            callStatus.textContent = 'Call Rejected';
            startCallBtn.style.display = 'inline-block';
            acceptCallBtn.style.display = 'none';
            rejectCallBtn.style.display = 'none';
        }

        function endCall() {
            stopRecording(); // Stop recording (simulated function, replace with your recording logic)
            localStream.getTracks().forEach(track => track.stop());
            localVideo.srcObject = null;
            remoteVideo.srcObject = null;
            callStatus.textContent = 'Call Ended';
            startCallBtn.style.display = 'inline-block';
            acceptCallBtn.style.display = 'none';
            rejectCallBtn.style.display = 'none';
            endCallBtn.style.display = 'none';
        }

        // Simulated function to stop recording (replace with your recording logic)
        function stopRecording() {
            if (isRecording) {
                console.log('Recording stopped.');
                isRecording = false;
            }
        }
    </script>
</body>
</html>

