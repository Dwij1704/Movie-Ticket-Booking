<html>
<head>
       <title>Login And Registration Form</title>
       <link rel="stylesheet" href="index.css">
       <style>
           ::placeholder {
             color: white;
             opacity: 1; 
           }
           
           :-ms-input-placeholder { 
            color: white;
           }
           
           ::-ms-input-placeholder { 
            color: white;
           }
           </style>
   </head>
   <body>
       <div class="hero">
           <div class="contain">
           <div class="form-box">
                   <div class="button-box">
                       <div id="btn"></div>
                           <button type="button" class="toggle-btn" onclick="Login()">Login</button>
                       
                           <button type="button" class="toggle-btn" onclick="Register()">Register</button>                     
                   </div>
               <form  id="Login" name="frm-Contact" method="post" action="log.php" class="input-group">
                   <input type="text" name="c_name" class="input-field" placeholder="User name or Email" required id="username">
                   <input type="password" name="c_pass" class="input-field" placeholder="Password" required id="password">
                  
                   <input type="checkbox" class="check-box-log"><span> Remember Password</span>
                   <button type="submit" name="Login" class="submit-btn">Login</button>
                  
               </form>
               <?php
                   if(isset($_GET['login']))
                   {
                       $error=$_GET['login'];
                   if($error=="invalid")
                   {
                       ?><div class="error_log">Please try again..&#128077</div>
                        
                       <?php
                   }
                    }
                    ?>
               
               <form id="Register" name="frmContact" method="post" action="db.php" class="input-group2">
                   <input type="text" name="username" class="input-field" placeholder="User name" required>
                   <input type="email" name="email" class="input-field" placeholder="Email Id" required>
                   <input type="text" name="c_phone_no" class="input-field" placeholder="Phone no" required>
                   <input type="password" name="password" class="input-field" placeholder="Password" required>
             
                   <input type="checkbox" class="check-box-sign"><span> I Agree To The Terms And Conditions</span>
                   <button type="submit" name="register" class="submit-btn">Register</button>
               </form>
               <?php
                   if(isset($_GET['signup']))
                   {
                       $error=$_GET['signup'];
                   if($error=="sameuser")
                   {
                       ?><div class="error_sign" id="error">username is taken..&#128577</div>
                        
                       <?php
                       echo "<script></script>";
                   }
                    }
                    ?>
               
           </div>
       </div>
       </div>
   <script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.6.8/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.6.8/firebase-analytics.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyB9U9qFKIURBN_iraXCfx-VR-gZncbikRY",
    authDomain: "its-show-time-f6ce5.firebaseapp.com",
    projectId: "its-show-time-f6ce5",
    storageBucket: "its-show-time-f6ce5.appspot.com",
    messagingSenderId: "538001001092",
    appId: "1:538001001092:web:d52c962e6aa38ee2ddd0d1",
    measurementId: "G-ZS0JZRSQR3"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);
</script>
       <script>
           var x= document.getElementById("Login"); 
           var y= document.getElementById("Register");         
           var z= document.getElementById("btn");
           var r= document.getElementsById("error");
                    console("hey");
           function Register(){
               x.style.left = "-450px";
               y.style.left = "50px";
               z.style.left = "100px";
                r.style.left="50px";

           }
           function Login(){
               x.style.left = "50px";
               y.style.left = "450px";
               z.style.left = "00px";
               r.style.left = "450px";
           }
          
       </script>
   
</body>
</html>