<?php
/* Created by Nichole Beyer
 * Course: CSC354 Spring 2020
 * Assignment: DR Essentials
 * Document description: landing page with buttons to log in
*/

include "functions.php";
session_start();
if(isset($_POST['email'], $_POST['password'])){
  $email = $_POST['email'];
  $password = $_POST['password'];

  $a = getUserRecord($email, $password);
  if($a = getUserRecord($email, $password)){
    $_SESSION['email'] = $a['email'];
    $_SESSION['password'] = $a['password'];
    $_SESSION['name'] = $a['name'];
    $_SESSION['role'] = $a['role'];
   // $_SESSION['hall'] = $a['hall'];
 }
if(!$a){
  print("INVALID"); //need a better error message
}
}
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
   <title>DR Essentials</title>
   <meta charset="utf-8">
   <!-- insert a link to stylesheet when made -->
  <link href="style.css" rel="stylesheet">
 </head>
 <body>
   <!-- insert logo -->
 <img class="logo" src="logo2.png" alt="logo">
   <!--make button-->
 
  <div id='id01' class="signIn">
   <form class="signIn" action="/DREssentials/choose_building.php" method="post">
   <div class="container">
    <label for="email_1"><b>Email</b></label>
    <input type="email" id="email_1" placeholder="Enter Your KU Email" name="email" required>
    
    <label for="password_1"><b>Password</b></label>
    <input type="password" id="password_1" placeholder="Enter Your KU Password" name="password" required>
    <input type="submit" placeholder="Login">
   </div>
   </form>
  </div>
 
</body>
</html>
