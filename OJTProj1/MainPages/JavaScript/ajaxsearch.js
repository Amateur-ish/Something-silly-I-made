const searchbar = document.getElementById("searchbar");
const resultOutput = document.getElementById("output");

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

function searchThis() {
  const email = document.getElementById("searchbar");
  var ajax = new XMLHttpRequest();
  ajax.open("POST", "/ojtproj1/back-end/getFacultyMemb.php", true);
  var param = "input=" + searchbar.value;
  ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  ajax.onload = function () {
    if (this.status == 200) {
      var output = this.responseText;
      console.log(output);
      resultOutput.innerHTML = output;
    }
  };
  ajax.send(param);
}

function showModalPass(type, name, position, eemail) {
  const email = document.getElementById("userofuser");
  const user = document.getElementById("userofuser2");
  const pos = document.getElementById("userofuser3");

  email.value = eemail;
  user.value = name;
  pos.value = position;

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
          getUserData(user.value, currMonth, currDay, currYear);
          break;

        case "login":
          $("#attendanceSent").modal("show");
          getUserData(user.value, currMonth, currDay, currYear);
          break;

        case "changepass":
          $("#changePass").modal("show");
          getUserData(user.value, currMonth, currDay, currYear);
          break;

        case "invalid":
          $("#invalidPass").modal("show");

          break;

        case "errorsubmit":
          break;
      }
    }
  };
  ajax.send(param);
}

function getUserData(name, month, day, year) {
  var ajax = new XMLHttpRequest();
  ajax.open("POST", "/ojtproj1/back-end/getUserData.php", true);
  var param =
    "&user=" + name + "&month=" + month + "&day=" + day + "&year=" + year;
  ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  ajax.onload = function () {
    if (this.status == 200) {
      var output = JSON.parse(this.responseText);

      console.log(output);
      document.getElementById("profielpicture").src =
        "/ojtproj1/back-end/uploads/" + output.img;
      document.getElementById("fullname_memb").textContent = output.user;
      document.getElementById("employeeid_memb").textContent = output.facultid;
      document.getElementById("email_memb").textContent = output.email;
      document.getElementById("phone_memb").textContent = output.phone_num;
      document.getElementById("phone_memb").textContent = output.position;
      document.getElementById("timein").textContent = output.timein;
      document.getElementById("timeout").textContent = output.timeout;

      $("#profilething").modal("show");
    }
  };
  ajax.send(param);
}

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

searchbar.oninput = searchThis;
