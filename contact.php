<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Amateur Astronomer - Contact</title>
<link rel="stylesheet" href="css/style.css" type="text/css">
<link rel="stylesheet" type="text/css" href="css/mobile.css">
<script src="js/mobile.js" type="text/javascript"></script>
</head>

<body>
<div id="page">
<?php include 'header.php'?>
<div id="body">
  <div class="header">
    <div class="contact">
      <h1>Contact</h1>
      <h2>DO NOT HESITATE TO CONTACT US</h2>
      <form action="index.html">
        <input type="text" name="Name" value="Name" onblur="this.value=!this.value?'Name':this.value;" onfocus="this.select()" onclick="this.value='';">
        <input type="text" name="Email Address" value="Email Address" onblur="this.value=!this.value?'Email Address':this.value;" onfocus="this.select()" onclick="this.value='';">
        <input type="text" name="Subject" value="Subject" onblur="this.value=!this.value?'Subject':this.value;" onfocus="this.select()" onclick="this.value='';">
        <textarea name="message" cols="50" rows="7">Message</textarea>
        <input type="submit" value="Send" id="submit">
      </form>
    </div>
  </div>
</div>
<?php include 'footer.php'?>
</div>
</body>
</html>