function validate(formObj) {
  var alertText = "";
  var reg = /^\"?[\w-_\.]*\"?@rpi\.edu$/;
  if (formObj.username.value == "") {
    alertText += "You must enter an email address.\n";
    formObj.username.focus();
  } else if (reg.test(formObj.username.value)){
      alertText == "";
  } else if (!reg.test(formObj.username.value)) {
      alertText += "You must enter a valid RPI email address.\n";
  } if (formObj.password.value == "") {
       if (alertText == "") {
          formObj.password.focus();
       } alertText += "You must enter a password.";
  } if (alertText != "") {
    // if the variable alertText is not empty
      alert(alertText);
      // send an alert containing alertText
      return false;
  } if (alertText == "") {
    // if the variable alertText is empty
      alert("Welcome!");
      // send an alert saying "Welcome!"
      return true;
  }
}


window.onload = function() {
    document.getElementById("username").focus();
    // focuses on the email address box when the page loads
}
