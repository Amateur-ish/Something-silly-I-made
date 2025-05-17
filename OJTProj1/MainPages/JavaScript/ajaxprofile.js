const month = [
  "January",
  "February",
  "March",
  "April",
  "May",
  "June",
  "July",
  "August",
  "September",
  "October",
  "November",
  "December",
];
let date = new Date();
let type;

const currMonth = month[date.getMonth()];
const currDay = date.getDate();
const currYear = date.getFullYear();
const nowTime = new Date().toLocaleTimeString();

function showModalPass(type, user, pos, email) {
  const emailThing = document.getElementById("userofuser");
  const userThing = document.getElementById("userofuser2");
  const posThing = document.getElementById("userofuser3");

  emailThing.value = email;
  userThing = user;
  posThing = pos;
  this.type = type;
  console.log(this.type);
  $("#verifyPasscode").modal("show");
}

function verifySelf() {
  var ajax = new XMLHttpRequest();
  const email = document.getElementById("userofuser");
  const user = document.getElementById("userofuser2");
  const pos = document.getElementById("userofuser3");

  ajax.open("POST", "/ojtproj1/back-end/verifyperson.php", true);
  const param =
    "passcode=" +
    document.getElementById("passcodething").value +
    "&email=" +
    email.value +
    "&month=" +
    currMonth +
    "&day=" +
    currDay +
    "&year=" +
    currYear +
    "&time=" +
    nowTime +
    "&name=" +
    user.value +
    "&pos=" +
    pos.value +
    "&type=" +
    this.type;

  ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  ajax.onload = function () {
    if (this.status == 200) {
      var output = this.responseText;
      console.log(output);
      switch (output) {
        case "logout":
          $("#logoutSent").modal("show");
          break;

        case "login":
          $("#attendanceSent").modal("show");
          break;

        case "changepass":
          $("#changePass").modal("show");
          break;

        case "invalid":
          $("#invalidPass").modal("show");
          break;
      }
    }
  };
  ajax.send(param);
}

function getUserData() {}

function changePass() {
  const email = document.getElementById("userofuser");
  const user = document.getElementById("userofuser2");
  const pos = document.getElementById("userofuser3");
  const newPass = document.getElementById("newPassword");
  console.log(newPass.value);
  var ajax = new XMLHttpRequest();
  ajax.open("POST", "/ojtproj1/back-end/verifyperson.php", true);
  var param =
    "type=changepass&newPass=" +
    newPass.value +
    "&passcode=" +
    document.getElementById("passcodething").value +
    "&email=" +
    email.value +
    "&month=" +
    currMonth +
    "&day=" +
    currDay +
    "&year=" +
    currYear +
    "&time=" +
    nowTime +
    "&name=" +
    user.value +
    "&pos=" +
    pos.value;
  ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  ajax.onload = function () {
    if (this.status == 200) {
      var output = this.responseText;
      console.log(output);
      if (output == "changed") {
        $("#passCodeChanged").modal("show");
      }
    }
  };
  ajax.send(param);
}
