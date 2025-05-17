const tableBody = document.getElementById("tableBody");
const tableBody2 = document.getElementById("tableBody2");
const currTime = document.getElementsByClassName("currTime");
const weekyTime = document.getElementById("weeklyTime");
const monthlyTime = document.getElementById("monthlyTime");
const month = ["January","February","March","April","May","June","July","August","September","October","November","December"];
let date = new Date();

const currMonth = month[date.getMonth()];
const currDay = date.getDate();
const currYear = date.getFullYear();
const nowTime = new Date().toLocaleTimeString();    

function requestCurrentAttendance() {
    var ajax = new XMLHttpRequest();
    var param = `day=${currDay}&month=${currMonth}&year=${currYear}`;
    ajax.open('POST', '/ojtproj1/back-end/loadattendancedata.php', true);
    ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    ajax.onload = function() {
        if (this.status == 200) {
            var output = this.responseText;
            console.log(output);
            tableBody.innerHTML = output;        
        }
    }   
    ajax.send(param);   

}

function requestCurrentLogout() {
    var ajax = new XMLHttpRequest();
    var param = `day=${currDay}&month=${currMonth}&year=${currYear}`;
    ajax.open('POST', '/ojtproj1/back-end/loadlogoutdata.php', true);
    ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    ajax.onload = function() {
        if (this.status == 200) {
            var output = this.responseText;
            console.log(output);
            tableBody2.innerHTML = output;           
        }
    }   
    ajax.send(param);   

}




function sessionLogout() {
    const email = document.getElementById('userofuser');
    const user = document.getElementById('userofuser2'); 
    const pos = document.getElementById('userofuser3');           
    var ajax = new XMLHttpRequest();
    ajax.open('POST', '/ojtproj1/back-end/logouttimeout.php', true);
    var param = "email="+email.value+"&month="+currMonth+"&day="+currDay+"&year="+currYear+"&time="+nowTime+
    "&name="+user.value+"&pos="+pos.value;

    ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    ajax.onload = function() {
        if (this.status == 200) {
            var output = this.responseText;
            console.log(output);
            window.location.reload();
        }
    }   
    ajax.send(param);   
}




requestCurrentLogout();
requestCurrentAttendance();
console.log(nowTime);
for(element of currTime) {
    element.innerHTML = `AS OF ${currMonth} ${currDay}, ${currYear}`;
}
