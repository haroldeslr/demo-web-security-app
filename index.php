<!DOCTYPE html>
<html lang="en">

<head>
  <title>UPANG</title>

  <!-- Required meta tags -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />

  <link rel="stylesheet" href="css/index.css" />
</head>

<body>
  <div class="wrapper">
    <div class="login-content">
      <div class="card">
        <div class="card-body text-center">
          <div class="logo">
            <img src="images/upang-logo.png.png" width="100rem" height="100rem" alt="lingayen-logo" />
          </div>

          <h3 class="text-center mt-5 mb-4">PHINMA UPANG</h3>

          <h6 class="mb-4 text-muted">Sign in to your account</h6>

          <form>
            <div class="form-group">
              <input id="number" type="text" class="form-control" placeholder="Phone number" required />
            </div>

            <div id="recaptcha-container"></div>
            <br />

            <input type="button" id="send-otp-button" class="btn btn-primary shadow-2 mb-2" value="Send OTP" onclick="phoneAuth()" />
          </form>
          <form id="verify-code-form" class="mt-4 d-none">
            <div class="form-group">
              <input id="verificationCode" type="number" class="form-control" placeholder="Verification code" required />
            </div>

            <input type="button" class="btn btn-success shadow-2 mb-2" value="Verify Code" onclick="codeverify()" />
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Compiled and minified JavaScript -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

  <script src="https://www.gstatic.com/firebasejs/8.3.1/firebase.js"></script>
  <script>
    // Your web app's Firebase configuration
    const firebaseConfig = {
      apiKey: "AIzaSyBUOZD4PokETTpCTx6f8dQRnsdVt5nddxM",
      authDomain: "web-security-app-586e2.firebaseapp.com",
      projectId: "web-security-app-586e2",
      storageBucket: "web-security-app-586e2.appspot.com",
      messagingSenderId: "12381983297",
      appId: "1:12381983297:web:7f609ba813d542798bacc0"
    };

    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
    firebase.analytics();
  </script>

  <script type="text/javascript" src="js/index.js"></script>
</body>

</html>