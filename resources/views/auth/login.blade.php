<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sign-Up/Login Form</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('assets/folder_form_register_login/css/style.css') }}">  
</head>

<body>

  <div class="form">

    <div class="tab-content">
        
      <div id="login">   
        <h1>Welcome to Login!</h1>
          
        <form method="POST">
          @csrf

          <div class="field-wrap">
            <label>
              Username<span class="req">*</span>
            </label>
            <input type="text" name="username" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" name="password" required autocomplete="off"/>
          </div>
        <div class="option-login">
          <p class="forgot register"><a href="{{ url('register') }}">Register</a></p>
          <p class="forgot forgot-pass"><a href="#">Forgot Password?</a></p>
        </div>
        <button class="button button-block"/>Log In</button>
          
        </form>

      </div>
        
    </div><!-- tab-content -->
    <a href="redirect/facebook">FB Login</a> 
  </div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script  src="{{ asset('assets/folder_form_register_login/js/index.js') }}"></script>
</body>
</html>
