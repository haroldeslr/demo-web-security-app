window.onload = function () {
  render();
};

function render() {
  window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier(
    "recaptcha-container"
  );
  recaptchaVerifier.render();
}

function phoneAuth() {
  //get the number
  var number = document.getElementById("number").value;
  //it takes two parameter first one is number and second one is recaptcha
  firebase
    .auth()
    .signInWithPhoneNumber(number, window.recaptchaVerifier)
    .then(function (confirmationResult) {
      //s is in lowercase
      window.confirmationResult = confirmationResult;
      let verifyCodeForm = document.getElementById("verify-code-form");
      verifyCodeForm.classList.remove("d-none");
      verifyCodeForm.classList.add("d-block");
      document.getElementById("send-otp-button").disabled = true;
    })
    .catch(function (error) {
      alert(error.message);
    });
}

function codeverify() {
  var code = document.getElementById("verificationCode").value;

  confirmationResult
    .confirm(code)
    .then(function (result) {
      window.location.href = "login-success.php";
    })
    .catch(function (error) {
      alert(error.message);
    });
}
