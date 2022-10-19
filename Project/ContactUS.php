<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Boxicons -->
  <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />

  <!-- Fontawesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <!-- Custom StyleSheet -->
  <link rel="stylesheet" href="./style_Homepage.css" />
  <title>Contact US</title>
</head>

<body>
  
  <!-- HEADER -->

 <header class="header">
  <nav>
    <img src="logo.png"  class="logo">
    <ul>
        <li><a href="Homepage.php">HOME</a></li>
        <li><a href="ContactUS.php">CONTACT US</a></li>
    </ul>
    </nav>
  </header>

<div class="container">
  <div style="text-align:center">
    <h2>Contact Us</h2>
    <p>Get in touch using the form below:</p>
  </div>
    <div class="intro1">
      <form action="pro.php" method="POST">
        <label for="fname">Full Name</label>
        <input type="text" id="fname" name="fullname" required>
        <label for="lname">Email Address</label>
        <input type="text" id="lname" name="email" required>
        <label for="contactno">Phone Number</label>
        <input type="text" id="contactno" name="phone" required>
        <label for="Message">Message</label>
        <textarea id="Message" name="message" style="height:100px" required></textarea>
        <input type="submit" value="Submit">
      </form>
      