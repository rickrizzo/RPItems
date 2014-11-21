// JavaScript source code
function validate(formObj) {

    //Variables
    var fix = "";
    var valid = true;

    //Valid Category
    if (formObj.catagory.value == "") {
        valid = false;
        fix = fix.concat("\nCatagory");
    }
    if (formObj.item.value == "") {
        valid = false;
        fix = fix.concat("\nlease enter a name.")
    }

    if (fix != "") {
        alert("Please fix the following " + fix);
    }

  /*
  var a = 0;
  var b = document.forms["addForm"]["Item"].value;
  var c = document.forms["addForm"]["Price"].value;
  var d = document.forms["addForm"]["description"].value;
  var e = document.forms["addForm"]["phone"].value;
  var f = document.forms["addForm"]["Email"].value;
  var s=document.getElementById("mySelect");
  if (s.options[s.selectedIndex].text == "" ){
    document.getElementById("select").style.color = "#ff0000";
    a++;
  }
  if (b == "" || b == null) {
    document.getElementById("ItemName").style.color = "#ff0000";
    a++;
  }
    if (c == "" || c == null) {
        document.getElementById("price").style.color = "#ff0000";
        a++;
    }
    if (e == "" || e == null) {
        document.getElementById("phon").style.color = "#ff0000";
        a++;
    }
    if (f == "" || f == null) {
        document.getElementById("emai").style.color = "#ff0000";
        a++;
    }

    if (a != 0){
        alert("You must enter a require filed");          
        return false;
    }
    else{
        alert("Save successfully!")
    }
    return true;*/
}
