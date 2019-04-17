function registration() {
  console.log("radi");

  var arrayOk = [];
  var arrayNotOk = [];

  var firstName = document.querySelector("#regFirstName").value;
  console.log(firstName);

  var reFirstLastName = /^[A-Z][a-z]{2,14}(\s[A-Z][a-z]{2,14})*$/;
  var flag = true;
  if (!reFirstLastName.test(firstName)) {
    document.querySelector("#regFirstName").style.border = "1px solid red";
    $("#regFirstName")
      .prev("span")
      .show();
    arrayNotOk.push("First name is not ok");
    flag = false;
  } else {
    document.querySelector("#regFirstName").style.border = "1px solid #ccc";
    $("#regFirstName")
      .prev("span")
      .hide();
  }

  var lastName = document.querySelector("#regLastName").value;
  console.log(lastName);

  if (!reFirstLastName.test(lastName)) {
    document.querySelector("#regLastName").style.border = "1px solid red";
    $("#regLastName")
      .prev("span")
      .show();
    arrayNotOk.push("Last name is not ok");
    flag = false;
  } else {
    document.querySelector("#regLastName").style.border = "1px solid #ccc";
    $("#regLastName")
      .prev("span")
      .hide();
  }

  var email = document.querySelector("#regEmail").value;
  console.log(email);

  var reEmail = /^[A-Za-z-_.]{2,15}@[A-Za-z._-]{2,10}\.[a-z]{2,5}$/;
  if (!reEmail.test(email)) {
    document.querySelector("#regEmail").style.border = "1px solid red";
    $("#regEmail")
      .prev("span")
      .show();
    arrayNotOk.push("Email is not ok");
    flag = false;
  } else {
    document.querySelector("#regEmail").style.border = "1px solid #ccc";
    $("#regEmail")
      .prev("span")
      .hide();
  }

  var pass = document.querySelector("#regPassword").value;
  var rePassword = /^[\S]{2,50}$/;
  if (!rePassword.test(pass)) {
    document.querySelector("#regPassword").style.border = "1px solid red";
    $("#regPassword")
      .prev("span")
      .show();
    arrayNotOk.push("Password is not ok");
    flag = false;
  } else {
    document.querySelector("#regPassword").style.border = "1px solid #ccc";
    $("#regPassword")
      .prev("span")
      .hide();
  }

  return flag;
}
