function validate(formObj) {
  var alertText = "";
  var reg = /^\"?[\w-_\.]*\"?@rpi\.edu$/;
  if (formObj.firstName.value == "") {
    alertText += "You must enter a first name.\n";
    formObj.firstName.focus();
  } if (formObj.lastName.value == "") {
      if (alertText == "") {
          formObj.lastName.focus();
      } alertText += "You must enter a last name.\n"
  } if (formObj.username.value == "") {
      if (alertText == "") {
        formObj.username.focus();
      } alertText += "You must enter an email address.\n";
  } else if (!reg.test(formObj.username.value)) {
      alertText += "You must enter a valid RPI email address.\n";
  } if (formObj.password.value == "") {
       if (alertText == "") {
          formObj.password.focus();
       } alertText += "You must enter a password.\n";
  } if (formObj.confirmPassword.value == "") {
      if (alertText == "") {
        formObj.confirmPassword.focus();
      } alertText += "You must confirm your password.";
  } if (formObj.password.value != formObj.confirmPassword.value) {
      if (formObj.password.value != "") {
        if (formObj.confirmPassword.value != "") {
          if (alertText == "") {
            formObj.password.focus();
          } alertText += "Your passwords do not match.";
            formObj.password.value = ""
            formObj.confirmPassword.value = ""
        }
      }
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
    document.getElementById("firstName").focus();
    // focuses on the first name box when the page loads

}

