<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login/ Register Form</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css'>
   <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style_reg.css">   

</head>
<body>
<!-- partial:index.partial.html -->
<section id="form" style="height : 430px;">
        <div id="toggle-forms">
            <button class="waves-effect waves-light active" id="login">Register</button>
            <button class="waves-effect waves-light" id="register">Login</button>
        </div>
        <form class="col s12" action="<?php echo base_url();?>LogReg/registration" method="post">
            <div class="row center-align">
                <h5 class="white-text">Register your Details</h5>
            </div>
            <div class="row">
                <div class="input-field">
                    <input id="username" type="text" class="validate" name="exname" required autofocus="on" autocomplete="off">
                    <label for="username">User Name</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field">
                    <input id="email" type="email" class="validate" name="exemail" required autocomplete="off">
                    <label for="email">Email</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field">
                    <input id="password" type="password" class="validate" name="expass" required autocomplete="off">
                    <label for="password">Password</label>
                </div>
            </div>
            <div class="row center-align">
               
                <input type="submit" name="creg" class="btn waves-effect waves-light" value="Register">
            </div>
           
            
            <ul class="animate">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </form>
       <form class="col s12" action="<?php echo base_url();?>LogReg/login_validation" method="post"> 
            <div class="row center-align">
                <h5 class="white-text">Login</h5>
            </div>
            <div class="row">
                <div class="input-field">
                    <input id="email" type="email" class="validate" name="exemail" required autofocus="on" autocomplete="off">
                    <label for="email">Email</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field">
                    <input id="password" type="password" class="validate" name="expass" required autofocus="on" autocomplete="off">
                    <label for="password">Password</label>
                </div>  
            </div>
            <div class="row center-align">
                <!-- <button class="btn waves-effect waves-light">Login</button> -->
                <input type="submit" name="clog" class="btn waves-effect waves-light" value="Login">
            </div>
            <br>
            <div class="row center-align">
                <b><a>Forgot Password?</a>
            </div>
            
            
            <ul class="animate">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </form>
    </section>
<!-- partial -->
  <script src='https://code.jquery.com/jquery-3.2.1.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js'></script><script src="<?php echo base_url();?>assets/js/script_reg.js"></script>

</body>
</html>
