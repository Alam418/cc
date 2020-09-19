<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VA-11 Hall-A</title>
    <link rel="stylesheet" href="<?php echo site_url('css/login.css')?>">
</head>
<!-- Font -->
<link href="<?php echo site_url('https://fonts.googleapis.com/css2?family=Lato:wght@300&family=Montserrat:wght@600&display=swap')?>" rel="stylesheet">

<body>
<main class="main">
  <section class="home">
    <h1>Welcome to the <span>VA-11 Hall-A</span></h1>
    <button id="sign-up" class="btn">Sign Up</button>
    <button id="sign-in" class="btn">Sign In</button>
    <p><a class="link-copy" href="http://collectui.com/designers/dnes/sign-up" target="_blank">©Copyright 2020</a></p>
  </section>

  <section class="sign-up">
    <article class="signup-left">
      <h1>VA-11 Hall-A</h1>
      <div class="wc_message">
        <h3>Let's Kick Now!</h3>
        <p>It's Easy and takes less then 30 seconds.</p>
      </div>
      <div class="btn-back">
        <i class="fas fa-2x fa-angle-left angle-left-color"></i>
        HOME
      </div>
    </article>

    <article class="form-area">
      <!-- Form area Sign Up -->
      <div class="organize-form form-area-signup">
        <h2>SIGN UP</h2>
        <form class="form">
          <div class="form-field">
            <label for="name">Name</label>
            <input type="text" id="name" />
          </div>

          <div class="form-field">
            <label for="email">Email</label>
            <input type="text" id="email" />
          </div>

          <div class="form-field">
            <label for="password">Password</label>
            <input type="text" id="password" />
          </div>

          <button class="btn-sign btn-up">Sign Up</button>
        </form>
        <p>Have an account? <a href="#" class="link-in">Sign In</a></p>

      </div>

      <!-- Form area Sign In -->
      <div class="organize-form form-area-signin">
        <h2>SIGN IN</h2>
        <form class="form" action="<?php echo site_url('login/auth')?>" method="post">
        <?php echo $this->session->flashdata('msg');?>
          <div class="form-field">
            <label for="email">Email</label>
            <input name="email" type="email" id="email"/>
          </div>

          <div class="form-field">
            <label for="password">Password</label>
            <input name="password" type="password" id="password"/>
          </div>

          <button class="btn-sign btn-in" type="submit">Sign In</button>
        </form>
        <p>Haven't an account? <a href="#" class="link-up">Sign Up</a></p>
      </div>
    </article>

    <article class="signup-right">
      <i class="fas fa-2x fa-bars bars-style"></i>
      <p><a class="link-copy" href="http://collectui.com/designers/dnes/sign-up" target="_blank">©Copyright 2020</a></p>

    </article>
  </section>
</main>
<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.min.js"></script>
<script src="lib/login.js"></script>

</body>

</html>