<!doctype html>

<html>
  
  <head>
    <title>Sign In</title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #eee;
      }
      .form-signin {
        max-width: 330px;
        padding: 15px;
        margin: 0 auto;
      }
      .form-signin .form-signin-heading, .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin .checkbox {
        font-weight: normal;
      }
      .form-signin .form-control {
        max-width: 330px;
        position: relative;
        font-size: 16px;
        height: auto;
        padding: 10px;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
      }
      .form-signin .form-control:focus {
        z-index: 2;
      }
       .form-control {
        max-width: 330px;
        position: relative;
        font-size: 16px;
        height: auto;
        padding: 10px;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
      }
      .form-control:focus {
        z-index: 2;
      }
      .form-signin input[type="text"] {
        margin-bottom: -1px;
        border-bottom-left-radius: 0;
        border-bottom-right-radius: 0;
      }
      .form-signin input[type="password"] {
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
      }
      btn btn-lg btn-primary btn-block{
          max-width: 330px;
      }
       
    </style>
  </head>
  
  <body>
<<<<<<< HEAD
    <div class="container">
      <form class="form-signin">
        <h2>
          <font color='red'>
            <?php

            if(isset($_GET['status'])) 
            {
              if($_GET['status'] == "blmlgn") 
              echo "WARNING : Anda Belum Login";  
            }
            ?>
          </font>
        </h2>
        <h2 class="form-signin-heading">LOGIN</h2>
        <input type="text" class="form-control" placeholder="Username">
        <input type="password" class="form-control" placeholder="Password">
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>
    </div>
=======
    <div class="form-signin">
      
        <h2 class="form-signin-heading">LOGIN</h2>
      
        <?php echo validation_errors(); ?>
        
        <?php echo form_open('LoginController/loginValidation'); ?>
        
        <input type="text" class="form-control" placeholder="Username" name="username">
        <input type="password" class="form-control" placeholder="Password" name="password">
        <button value="Login" name="submit"class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        
       </div>
>>>>>>> fb2a1812b7b8e7cdb10f47f9fa2d369c094ec270
    <!-- /container -->
  </body>

</html>