function validate(formObj) {
  var alertText = "";
  if (formObj.username.value == "") {
    alertText += "You must enter a username.\n";
    formObj.username.focus();
  }  if (formObj.password.value == "") {
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
      alert("Success");
      // send an alert saying "Success"
      return true;
  }
}


window.onload = function() {
    document.getElementById("username").focus();
    // focuses on the first name box when the page loads
}
