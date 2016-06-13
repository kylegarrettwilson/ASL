<!DOCTYPE html>
<html lang="en">
  <head>
    <title>FoneBook - Private Area</title>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
    <link rel="stylesheet" href="<?php echo base_url("assets/css/home.css"); ?>" />
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700' rel='stylesheet' type='text/css'>
  </head>
  <body>
    <h1 class="bounceIn">Home</h1>
    <h2>Welcome <?php echo $username; ?>!</h2>
    <a href="home/logout">Logout</a>
  </body>


  <script type="text/javascript" src="<?php echo base_url("assets/js/jquery.js"); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
</html>
