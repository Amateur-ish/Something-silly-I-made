<!-- <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Site</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    </head>
    <body class="m-5">
    
    <header>
        <h1>STI</h1>
    </header>


    <main>
        <h1>Profile</h1>
        <section>
          
            <h1>Batter</h1>
            <p>Haas F1 Whistleblower </p>
            <p>0231248t50123</p>
            <p>Email address</p>
            <p><b>batter5943@gmail.com</b></p>
            <h4>Last Attendance: </h4>
            <h5>03/11/21</h5>
        </section>
        <section>
            <h4>Recent Attendance Record:</h4>
            <h6>11/11/21</h6>
            <table>
            
            </table>
        </section>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    </body>
    </html> -->

    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Site</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css
" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css
" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body class="m-5 bg-primary">
      
    <a href="usermanage.php">
        <button class="bg-primary border rounded-pill p-2" style="color: yellow;"><i class="fa-solid fa-left-long"></i> &nbsp; &nbsp; Back To User Manage</button>
    </a>
    
    <header class="bg-primary">
        <img src="data:image/png;base64,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" alt="STI Logo" height="80" width="80" class="rounded-pill" style="display: block; margin-left: auto; margin-right: auto; padding-top: 4px;"/>
        <h1 class="m-3 p-3 text-center font-weight-bold" style="color: yellow;">STI Faculty Registration Form</h1>        
    </header>


    <main class="bg-light container py-3" style="border-radius: 20px">
        <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N//AABEIAJQAtQMBIgACEQEDEQH/xAAbAAEAAgMBAQAAAAAAAAAAAAAABAUBAwYCB//EADIQAQACAQIEAwYEBwEAAAAAAAABAgMEEQUhQVESMWETIjJScZGhsdHxI0JicoGSwRT/xAAUAQEAAAAAAAAAAAAAAAAAAAAA/8QAFBEBAAAAAAAAAAAAAAAAAAAAAP/aAAwDAQACEQMRAD8A+iAAAAAAAAAABubx+wAAAAAAAAAAAAAAAAAAAM0ra94rSN7TO0QDOOlsl4rSJm09IhaabhG8RbUX5/LX9UzQaOmmxxyicn81ksEfHotNj+HDT6zG7ZOnwz54cf8ArDYAh5uG6bJvMY/BPevJV6vh2XT72r7+PvHnH1dAxPkDk4n79hZ8U0Ps98+GNq+dqx09VYAAAAAAAAAAAAAAAteC6febZ7dPdqqnR8Np4NFijvXf78wSgAAAAAeb1i0TW0bxPnDmdThnT574u3l9OjqFJx2m2fHf5qzH2/cFaAAAAAAAAAAAAABP49HTaGYnR4Zj5I/JzMr3g2Xx6OKdaTt+gLAAAAAABT8emPFgj0t/xbz6KDi+WMmsmI5xSPD/AJBCGWAAAAAAAAAAAAAErh2p/wDNqPFafctG1v1RQHWVtFoiYneJ6sqHh/EZwbY83PH0/pXeLJTLSLY7RaJ6xIPYAAxujavW4dNX3rRN+lY8wZ12prpsE2mfenlWO8ucmZmZm07zM85bNTnvqck5Mk+kR0hqAAAAAAAAAAAAAAAAAe8ebJhnfFe1Z9Hhvw6PUZo9zFO3eeUAkY+L6ivK1aW9dtmyeNZNuWGu/wDc804Pmn4r0r95ep4Nk6Za/aQaMvEtTljbxxSP6IRJmZneZ3num5OFamnwxW/0nZEyYsuKdslLV+sA8AAAAAAAAAAAAAAAAJOl0OXVTvWPDTreUrh3DvaxGXURMU6Unr9VzWsViIjlEeUQCLpuH4NPG8V8d/mslRDIAAA83pW9fDesWjtL0ArNVwmlomdP7s/LPkqMuO+G/gyVmtvV1TTqdNj1NPDkrv2nrAOYG/V6W+lyeC/Ov8tu7QAAAAAAAAAAAsOFaL29vbZY/hxPKO8omlwTqc9cUdfintDpsdK0pFaxtWI2gGYjZkAAAAAAAAAatRgx58VqZI5T17Oc1GG+nzWx3846947uoQeJ6X2+DxUjfJTnHqCgCAAAAAAAADznaPMF1wTB4MM5Z+K8/gs2vBjjFipSPKtYhsAAAAAAAAAAAYlkBznEcMYdVaK/Db3oRVxx3Hvix5NvhttP0VAMAAAAAANmnjfUY4nraPzAHUgAAAAAAAAAAAAAhcXjfQ39Jifxc+AAAAAP/9k=" alt="No Profile Picture Sample" height="200" class="rounded-pill" style="display: block; margin-left: auto; margin-right: auto;" />
        <form method="post" action="/ojtproj1/back-end/registerUser.php" enctype="multipart/form-data">
        <h1 style="text-align:center; color: black; font-weight: bold;">Profile Information</h1>
        
            <section style="color: black;" class="m-3">
                <p>Profile Photo Upload</p>
                <input type="file" name="profile" class="form-control col-lg mb-3">
                <p style="">First Name</p>
                <input type="fname" name="fname" id="fname" class="form-control input-lg col-lg" required/>
                <p style="">Last Name</p>
                <input type="lname" name="lname" id="lname" class="form-control input-lg col-lg" required/>
                <p style="">Faculty Position</p>
                <input type="name" name="facult_pos" id="name"  class="form-control input-lg col-lg" required/>
                <p style="">Faculty ID</p> 
                <input type="name" name="facult_id" id="facult_id"  class="form-control input-lg col-lg" required/>
                <p style="">Birth date</p>
                <input type="name" name="birth_date" id="id"  class="form-control input-lg col-lg" required/>

            <h1 class="font-weight-bold m-4 text-center">Your Contact Information</h1>
            <section>
                <p style="">Email</p>
                <input type="" name="email" id="" class="form-control input-lg col-lg" required/>
                <p style="">Contact Number</p>
                <input type="" name="phone_num" id=""  class="form-control input-lg col-lg" required/>
                <p style="">Passcode (By default)</p>
                <input type="text" value="2346" name="passcode" maxlength="4" class="form-control input-lg col-lg" required/>
                <p  class="text-danger" style="font-size: 12x;">Note: This for logi n in this account to submit attendance.</p> 
            </section>
            <button class="btn btn-light border" style="margin: auto !important; width: 60%; height: 50px" type="submit">SUBMIT</button>
        </form>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js
" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js
" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    </body>
    </html>