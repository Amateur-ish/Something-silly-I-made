
    const email = document.getElementById("email")
    const password = document.getElementById("password")

    function sendLoginRequest() {

        var ajax = new XMLHttpRequest();
        
        var param = "email="+email.value+"&password="+password.value;
        console.log(email.value);
        console.log(password.value);
        ajax.open('POST', '/ojtproj1/back-end/login.php', true);
        ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        ajax.onload = function() {
        if (this.status == 200) {       
            var output = this.responseText;
            console.log(output)
            if (output  === "invalidpass") {
                $('#staticBackdrop2').modal('show');
                return;
            }         
            if (output  === "invalidemail") {
                $('#staticBackdrop').modal('show');
                return;
            }     
            window.location.href = "/ojtproj1/mainpages/main.php";

            }
        }   
    ajax.send(param);
    }   
    console.log("Test");
