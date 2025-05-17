const tableBody = document.getElementById("tableBody");
const month = ["January","February","March","April","May","June","July","August","September","October","November","December"];

let date = new Date();

const currMonth = month[date.getMonth()];
const currDay = date.getDate();
const currYear = date.getFullYear();
const nowTime = new Date().toLocaleTimeString();    


function requestUserTable() {
    var ajax = new XMLHttpRequest();
    ajax.open('POST', '/ojtproj1/back-end/getAllUsers.php', true);
    ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    ajax.onload = function() {
        if (this.status == 200) {
            var output = this.responseText;
            console.log(output);
            tableBody.innerHTML = output;        
        }
    }   
    ajax.send();   

}

function sendAttendance() {
    var ajax = new XMLHttpRequest();
    ajax.open('POST', '/ojtproj1/back-end/getAllUsers.php', true);
    ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    ajax.onload = function() {
        if (this.status == 200) {
            var output = this.responseText;
            console.log(output);
            tableBody.innerHTML = output;        
        }
    }   
    ajax.send();   
}

function sendLogout() {
    var ajax = new XMLHttpRequest();
    ajax.open('POST', '/ojtproj1/back-end/getAllUsers.php', true);
    ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    ajax.onload = function() {
        if (this.status == 200) {
            var output = this.responseText;
            console.log(output);
            tableBody.innerHTML = output;        
        }
    }   
    ajax.send();   
}

function markAttendance() {
    const email = document.getElementById("email");
    const user = document.getElementById("user");
    const pos = document.getElementById("pos");
    document.getElementById("email");
    var ajax = new XMLHttpRequest();
    ajax.open('POST', '/ojtproj1/back-end/markAttendance.php', true);
    var param = "submit_type=login&"+"email="+email.value+"&month="+currMonth+"&day="+currDay+"&year="+currYear+"&time="+nowTime+
    "&name="+user.value+"&pos="+pos.value;
    ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    ajax.onload = function() {
        if (this.status == 200) {
            var output = this.responseText;
            console.log(output);
            
                alert('User has been marked as attended.');
                window.location.reload();

             
        }
    }   
    ajax.send(param);   
}


function sessionLogout() {
    const email = document.getElementById("email");
    const user = document.getElementById("user");
    const pos = document.getElementById("pos");           
    var ajax = new XMLHttpRequest();
    ajax.open('POST', '/ojtproj1/back-end/logouttimeout.php', true);
    var param = "email="+email.value+"&month="+currMonth+"&day="+currDay+"&year="+currYear+"&time="+nowTime+
    "&name="+user.value+"&pos="+pos.value;

    ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    ajax.onload = function() {
        if (this.status == 200) {
            var output = this.responseText;
            console.log(output);
            alert('User has been marked as logged out');
            window.location.reload();
        }
    }   
    ajax.send(param);   
}

function deleteUser() {
    const email = document.getElementById("email");          
    var ajax = new XMLHttpRequest();
    ajax.open('POST', '/ojtproj1/back-end/logouttimeout.php', true);
    var param = "email="+email.valuea

    ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    ajax.onload = function() {
        if (this.status == 200) {
            var output = this.responseText;
            console.log(output);
            alert('User has been deleted');
            window.location.reload();
        }
    }   
    ajax.send(param);   
}


function openModal(user, email, position) {
    $('#myModal').modal('show')
    document.getElementById("user").value = user;
    document.getElementById("pos").value = position;
    document.getElementById("email").value = email;
    
    document.getElementById("username").textContent = "Username:" + user;
    document.getElementById("position").textContent = "Position: " + position;
    
  }

requestUserTable();