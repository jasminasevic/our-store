function checkContactForm() {
  // e.preventDefault();
  console.log("radi");

  var arrayOk = [];
  var arrayNotOk = [];

  var firstName = document.querySelector("#tbFirstName").value;
  console.log(firstName);

  var reFirstLastName = /^[A-Z][a-z]{2,14}(\s[A-Z][a-z]{2,14})*$/;
  var flag = true;
  if (!reFirstLastName.test(firstName)) {
    document.querySelector("#tbFirstName").style.border = "1px solid red";
    $("#tbFirstName")
      .prev("span")
      .show();
    arrayNotOk.push("First name is not ok");
    flag = false;
  } else {
    document.querySelector("#tbFirstName").style.border = "1px solid #ccc";
    $("#tbFirstName")
      .prev("span")
      .hide();
  }

  var lastName = document.querySelector("#tbLastName").value;
  console.log(lastName);

  if (!reFirstLastName.test(lastName)) {
    document.querySelector("#tbLastName").style.border = "1px solid red";
    $("#tbLastName")
      .prev("span")
      .show();
    arrayNotOk.push("Last name is not ok");
    flag = false;
  } else {
    document.querySelector("#tbLastName").style.border = "1px solid #ccc";
    $("#tbLastName")
      .prev("span")
      .hide();
  }

  var email = document.querySelector("#tbEmail").value;
  console.log(email);

  var reEmail = /^[A-Za-z-_.]{2,15}@[A-Za-z._-]{2,10}\.[a-z]{2,5}$/;
  if (!reEmail.test(email)) {
    document.querySelector("#tbEmail").style.border = "1px solid red";
    $("#tbEmail")
      .prev("span")
      .show();
    arrayNotOk.push("Email is not ok");
    flag = false;
  } else {
    document.querySelector("#tbEmail").style.border = "1px solid #ccc";
    $("#tbEmail")
      .prev("span")
      .hide();
  }

  var subject = document.querySelector("#tbSubject").value;
  var reSubject = /^[A-Za-z0-9\s]{2,50}$/;
  if (!reSubject.test(subject)) {
    document.querySelector("#tbSubject").style.border = "1px solid red";
    $("#tbSubject")
      .prev("span")
      .show();
    arrayNotOk.push("Subject is not ok");
    flag = false;
  } else {
    document.querySelector("#tbSubject").style.border = "1px solid #ccc";
    $("#tbSubject")
      .prev("span")
      .hide();
  }

  var message = document.querySelector("#tbMessage").value;
  var reMessage = /^[A-Za-z0-9\s\.,?!]{2,}$/;
  if (!reMessage.test(message)) {
    document.querySelector("#tbMessage").style.border = "1px solid red";
    $("#tbMessage")
      .prev("span")
      .show();
    arrayNotOk.push("Message is not ok");
    flag = false;
  } else {
    document.querySelector("#tbMessage").style.border = "1px solid #ccc";
    $("#tbMessage")
      .prev("span")
      .hide();
  }
  return flag;
}
