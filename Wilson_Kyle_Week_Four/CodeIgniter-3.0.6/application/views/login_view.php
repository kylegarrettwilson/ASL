<!DOCTYPE html>
<html>
  <head>
    <title>FoneBook</title>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
    <link rel="stylesheet" href="<?php echo base_url("assets/css/login.css"); ?>" />
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700' rel='stylesheet' type='text/css'>
  </head>
  <body>

    <h1 class="bounceIn">FoneBook</h1>

    <div id="wrapper">
      <h3>User Login</h3>
      <?php echo validation_errors(); ?>
      <?php echo form_open('verifylogin'); ?>
        <label for="username">Username:</label>
        <input type="text" size="20" id="username" name="username"/>
        <br/>
        <label for="password">Password:</label>
        <input type="password" size="20" id="password" name="password"/>
        <br/>
        <input id="submit" class="btn btn-primary btn-lg" type="submit" value="Login"/>
      </form>
    </div>

    <script type="text/javascript" src="<?php echo base_url("assets/js/jquery.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
  </body>
</html>
