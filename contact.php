<?php

$conn = mysqli_connect('localhost','root','','login','4306');



if(isset($_POST['submit']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$msg=$_POST['msg'];

 
$insert_query = mysqli_query($conn, "INSERT INTO `contact`(name, email, phone, msg) VALUES('$name', '$email', '$phone', '$msg')") or die('query failed');

if($insert_query){
  echo"
  <script>alert('msg sent');
  window.location.href='ecomm.php';
  </script>
  ";
   
}else{
   $message[] = 'could not sent';
}
};
?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="contact.css" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <div class="container">
      <span class="big-circle"></span>
      <img src="images/shape.png" class="square" alt="" />
      <div class="form">
        <div class="contact-info">
          <h3 class="title">Let's get in touch</h3>
          <p class="text">
          “We’re here to help you. Contact us anytime for any questions or concerns.” 
“We’re always happy to hear from you. Reach out to us anytime
“We’re just a phone call away. Contact us for any assistance you need.”
          </p>

          <div class="info">
            <div class="information">
              <img src="images/location.png" class="icon" alt="" />
              <p>92 Cherry Drive Uniondale, NY 11553</p>
            </div>
            <div class="information">
              <img src="images/email.png" class="icon" alt="" />
              <a href="#">muskan@gmail.com</a>
            </div>
            <div class="information">
              <img src="images/phone.png" class="icon" alt="" />
              <p>123-456-789</p>
            </div>
          </div>

          <div class="social-media">
            <p>Connect with us :</p>
            <div class="social-icons">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="contact-form">
          <span class="circle one"></span>
          <span class="circle two"></span>

          <form method="POST"action=""autocomplete="off">
            <h3 class="title">Contact us</h3>
            <div class="input-container">
              <input type="text" name="name" class="input" />
              <label for="">Username</label>
              <span>Username</span>
            </div>
            <div class="input-container">
              <input type="email" name="email" class="input" />
              <label for="">Email</label>
              <span>Email</span>
            </div>
            <div class="input-container">
              <input type="tel" name="phone" class="input" />
              <label for="">Phone</label>
              <span>Phone</span>
            </div>
            <div class="input-container textarea">
              <textarea name="msg" class="input"></textarea>
              <label for="">Message</label>
              <span>Message</span>
            </div>
            <button type="submit"name="submit"class="btn">SUBMIT</button>
          </form>
        </div>
      </div>
    </div>

    <script src="contact.js"></script>
  </body>
</html>
