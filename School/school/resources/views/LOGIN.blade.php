<!DOCTYPE html>
<html>
       <head>
	    <meta charset="utf-8">
         <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="{{asset('css/LOGINstyles.css')}}">
	<title> LOGIN </title>
	    </head>
		<body>

  <div class="container">
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">
        <img src="BooksFrontPAGE.jpeg" alt="">
        <div class="text">
          <span class="text-1">MAYWEATHER <br> UNIVERSITY  </span>
          <span class="text-2">Working to excellence </span>
        </div>
      </div>
      <div class="back">
        <img class="backImg" src="BooksFrontPAGE.jpeg" alt="">
        <div class="text">
          <span class="text-1">Complete miles of journey <br> with one step</span>
          <span class="text-2">Let's get started</span>
        </div>
      </div>
    </div>
    <div class="forms">
        <div class="form-content">
          <div class="login-form">
            <div class="title">Login</div>
          <form action="{{route('logincheck')}}">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" placeholder="Enter your email" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Enter your password" required>
              </div>
              <div class="text"><a href="#">Forgot password?</a></div>
              <div class="button input-box">
                <input type="submit" value="Submit">
              </div>
              <div class="text sign-up-text">Don't have an account? <label for="flip">Apply now</label></div>
            </div>
        </form>
      </div>
        <div class="signup-form">
          <button> <a href="Application Form1.html"></a> APPLY NOW 
          </button>
              <div class="text sign-up-text">Already have an account? <label for="flip">Login now</label></div>
            </div>
     
    </div>
    </div>
    </div>
  </div>
</body>
</html>