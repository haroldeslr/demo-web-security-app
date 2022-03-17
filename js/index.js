function login() {
  if (grecaptcha && grecaptcha.getResponse().length > 0) {
    //the recaptcha is checked
    // Do what you want here
    alert("Well, recaptcha is checked !");
  } else {
    //The recaptcha is not cheched
    //You can display an error message here
    alert("Oops, you have to check the recaptcha !");
  }
}
