<!DOCTYPE html>
  <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Attendance Monitoring Sheet - Help</title>
    <link rel="stylesheet" href="/ojtproj1/css/help.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css

" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css

" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
  <body class="bg-primary text-center text-light">
    
    <!--  Simple Header -->
    
    <header class="container-fluid position-fixed pb-4" style="background-color: yellow;">
      
      <!-- Searchbar - Help -->

      
      <!-- Navbar -->
      <ul class="p-3 m-2 text-primary font-weight-bold">
        <li>
          <a href="/ojtproj1/mainpages/help.php" class="float-right">Help</a>
        </li>
        <li>
          <a href="/ojtproj1/mainpages/newsearch.html" class="float-left"
            >Search</a
          >
        </li>
      </ul>
      
        
    </header>
    
    <br>
    <br>
    <br>
    <br>
    
    <span>
      <button><i class="fa-solid fa-left-long"></i>&nbsp; &nbsp; &nbsp; Return Back To Home</button>
    </span>
    
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    
    <div id="wrapper">
      
      <select>
        <option value="light">Light Mode</option>
        <option value="dark">Dark Mode</option>
      </select>
      
      <br>
      <br>
      <br>
      <br>
      <br>
      
      <img src="data:image/png;base64,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" alt="STI Logo" width="100" height="100" class=""/>
      
      <br>
      <br>
      <br>
      
    <div class="help-symbol">
      <i class="fa-sharp fa-solid fa-circle-info"></i>
    </div>
    
    <br>
    
    <h1>Help</h1>
    
    <br>
    <br>
    <br>
    
    <!-- Question 1 -->
    
    <b class="container" style="font-size: 18px;">1. What is STI College Marikina Faculty Attendance Monitoring Sheet?
    </b>
    
    <br>
    <br>
   
    <p class="container" style="">
    
    STI College Marikina Faculty Attendance Monitoring Sheet was created in order to function as an alternative for the faculty attendances for marking and checking of faculty members' attendances daily, weekly and monthly. It was also designed to function and act as the alternative way for checking the faculty members' attendance reports with the use of web app instead of using manual attendance reports such as whiteboard magnets and logbooks here in STI College Marikina. 

    <br>
    <br>
   
    The main benefits of this web app are:
    <br>
    <br>
    - To prevent proxy attendances of some or few faculty members who are not present.
    <br>
    - To mark who are the faculty members that are present in the given day.
    <br>
    - To provide medium security for all faculty members' accounts for their daily logins and attendances.
    <br>
    <br>
    
    For example:
    
    <br>
    
    If one of the faculty members are not present in the given day, they won't be marked as present. However, if one of the faculty members were present on the given day, they will have to login and write their Date, Day, especially their Time Ins and Outs during their attendance. With this, they will be marked as present on that given day.
   
    <br>
    <br>
    
    <!-- Question 2 -->
    
    <b class="container" style="font-size: 18px;">2. Why do faculty members must use this attendance monitoring sheet app?</b>
    
    <br>
    <br>
    
    <p class="container" style="">
      
       For clarifications, The Faculty Members still can use the manual attendance reports such as using whiteboard magnets and faculty attendance logbook in order for the faculty members to write down and mark their attendances. However, Our web app was designed as an alternative way for checking, marking and conducting daily, weekly and monthly faculty attendances here in STI College Marikina. Hence, the Faculty Members here in STI College Marikina will mark their attendances alternatively and systematically instead.
       
       <br>
       <br>
       
       We have also decided to create this web based attendance monitoring sheet app because based on our feasibility study or research online, We found out that some of the research findings allows instructors and students to use and mark their attendance effectively and efficiently online either using mobile phones or personal laptops / PCs without the use or needs of any manual attendance markings. Hence, we decided to create this web based attendance monitoring sheet due to this research findings that we found online.
      
      <br>
      <br>
      
    </p>
    
    <br>
    <br>
    
    <!-- Question  3 -->
    
    <b class="container" style="font-size: 18px;">3. Is this web based app can be accessed with other attendance security related tools such as Radio Frequency Identification Systems?</b>
    
    <br>
    <br>
    
    <p class="container" style="">
      
      This web based attendance sheet are strictly limited from low to medium security only due to our limitations of resources and knowledge about how do we use RFID by the use of programming, regardless by the use of front-end or back-end development features especially by HTML, CSS, JS, PHP, Java etc. programming languages. Additionally, due to the inability to create strong security especially the aforementioned common attendance report security tool, "RFID or Radio Frequency Identification System" using just by programming.
      <br>
      <br>
      
    </p>
    
    <br>
    <br>
    
    <!-- Question 4 -->
   
    <b class="container" style="font-size: 18px;">4. How does this app work?</b>
    
    <br>
    <br>
    
    <p class="container" style="">
      
      Our app works by the use of daily logins and logouts from your respective accounts. In this case, logging in your account here will mark your attendance as present on the given day as well as marking the date, day and time in altogether automatically. Afterwards, logging out your account will automatically mark your time out based on the time you logged out. To be specific, The faculty members' accounts based on the date, day especially the time they logged in and out will automatically mark their attendances effectively based on the date, day and their time ins and outs they made during the given day. As a result, Their respective faculty accounts together with their attendance reports will automatically be submitted inside the database.
      
    </p>
    
    <br>
    <br>
    
    <!-- Question 5 -->
    
    <b class="container" style="font-size: 18px;">5. Where can I find my profile information?</b>
    
    <br>
    <br>
    
    <p class="container" style="">
      
      After logging in, your account are saved. By opening the menu bar placed at the top-left-corner of the header section, here you'll find your account at the top corner of the navigation bars.
      
      <br>
      <br>
      
      In this case, by clicking your account, here you'll see your profile information as well as your recent attendance records based on the daily logins and logouts you gained daily.
    </p>
    
    <br>
    <br>
    
    <!-- Question 6 -->
    
    <b class="container" style="font-size: 18px;">6. How can I submit my attendance?</b>

    
    <br>
    <br>
    
    <p class="container" style="">
      
      To submit your attendance, here are the following simple steps that you can take in order to mark your attendance:
      
      <br>
      <br>
      
      <div class="step-headings">
      
      For Registered Faculty Members,
      <br>
      Go to <a href="#" class="profile-shortcut-link"><b><i class="fa-solid fa-user" class="user-icon"></i>&nbsp;My Profile</b></a> and verify yourself using a passcode.
      </div>
      
      <br>
      <br>
      
      <div class="step-headings">
      
      Then, click "Mark Attendance" in order to mark your daily attendance report.
      
      </div>
      
      <br>
      <br>
      
      <div class="step-headings">
      
      For Newly Registered Faculty Members,
      <br>
      A passcode will be given for you, after the passcode was received, you need to change your passcode.
      
      </div>
    
    </p>
    
    
    
    <br>
    <br>
    <br>
    <br>

  </div>

    <footer class="bg-dark" style="">
      <footer class="container-fluid p-3 bg-dark">
        STI College Marikina
        <br>
        "Be Future-Ready, Be More, Be STI"
        <br>
        For more information about our Campus, Please Kindly Follow, Message and Like Us On:
        <br>
        <br>
        <a href="https://www.facebook.com/marikina.sti.edu

" class="p-2" style="border: 2px solid steelblue; border-radius: 50px;"><i class="fa-brands fa-facebook mr-1"></i>FACEBOOK</a>
        <br>
         <br>
        To all respective instructors / teachers, Are you an instructor who registered and employed at STI? Click the STI Elms given below to stay tuned for any updates, discussions and assignments for your fellow students:
        <br>
        <br>
        <a href="https://elms.sti.edu/

" class="p-2" style="border: 2px solid steelblue; border-radius: 50px;"><i class="fa-solid fa-user-group mr-1"></i>STI ELMS</a>
        <br>
        <br>
        To all respective STI College Marikina Instructors, Do you need to check and grade your fellow students according to their performance and status using One STI Student Portal? Click One STI Student Portal linked below:
        <br>
        <br>
        <a href="https://one.sti.edu/

" class="p-2" style="border: 2px solid steelblue; border-radius: 50px;"><i class="fa-solid fa-chart-line mr-1"></i>ONE STI STUDENT PORTAL</a>
        <br>
        <br>
        For more information about STI, Please Kindly Visit The Official STI Webpage:
        <br>
        <br>
        <a href="https://www.sti.edu/?gad_source=1&gbraid=0AAAAADogi8fzq8bMKpVPQwphUzPXw10xx&gclid=EAIaIQobChMIxP697qT6jAMVqzKDAx2jrTeeEAAYASAAEgIdsPD_BwE

" class="p-2" style="border: 2px solid steelblue; border-radius: 50px;"><i class="fa-solid fa-globe mr-1"></i>STI OFFICIAL WEBPAGE</a>
      </footer>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js

" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js

" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

    </body>

</html>