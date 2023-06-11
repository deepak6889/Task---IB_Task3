<?php

$conn = mysqli_connect('localhost','root','','login','4306');



if(isset($_POST['submit']))
{
$username=$_POST['name'];
$password=$_POST['password'];

 
$insert_query = mysqli_query($conn, "INSERT INTO `admin`(username, password) VALUES('$username', '$password')") or die('query failed');

if($insert_query){
  echo"
  <script>alert('LOGGIN AS ADMIN');
  window.location.href='shop/admin.php';
  </script>
  ";
   
}else{
   $message[] = 'could not login';
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
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe
            dolorum adipisci recusandae praesentium dicta!
          </p>

          <div class="info">
            <div class="information">
              <img src="images/location.png" class="icon" alt="" />
              <p>92 Cherry Drive Uniondale, NY 11553</p>
            </div>
            <div class="information">
              <img src="images/email.png" class="icon" alt="" />
              <p>lorem@ipsum.com</p>
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
            <h3 class="title">Admin Login</h3>
            <div class="input-container">
              <input type="text" name="name" class="input" />
              <label for="">Username</label>
              <span>Username</span>
            </div>
            <div class="input-container">
              <input type="text" name="password" class="input" />
              <label for="">Password</label>
              <span>Password</span>
            </div>
            
            <button type="submit"name="submit"class="btn">LOGIN</button>
          </form>
        </div>
      </div>
    </div>

    <script src="contact.js"></script>
  </body>
</html>
