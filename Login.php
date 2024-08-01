

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Find the book you want to read next!" />
  <title>Book Depot</title>
  <link rel="shortcut icon" href="img/reading.png" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="stylelog.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body class="bg">
  <script>
    const localTheme = localStorage?.getItem("theme");
    if (localTheme === "dark") {
      document.body.classList.add("dark-theme");
    } else {
      document.body.classList.remove("dark-theme");
    }
  </script>

<nav id="nav">
  <div class="container-fluid align-items-center">
    <a class="navbar-brand" href="index.html">
      <span class="text">Book</span><span class="find">Depot</span>
    </a>    
    <div class="mode d-flex align-items-center">
      <!-- <ul class="nav-menu">
        <li class="nav-item">
          <a class="nav-link" href="index.html"> <span class="find">Home</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.html"> <span class="find">About Us</span></a>
        </li>
      </ul> -->
      <!-- <img class="logo" id="icon" src="img/moon.png" alt="Toggle Dark Mode"/> -->
      <div class="hamburger">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </div>
    </div>
  </div>
</nav>
  <header class="header" id="header">
     
    <!-- <h2>Login</h2><br>    
    <div class="login">    
    <form id="login" method="get" action="login.php">    
        <label><b>    
        </b>    
        </label>    
        <input type="text" name="Uname" id="Uname" placeholder="Username">    
        <br><br>    
        <label><b>    
        </b>    
        </label>    
        <input type="Password" name="Pass" id="Pass" placeholder="Password">    
        <br><br>    
        <input type="button" name="log" id="log" value="Log In">       
        <br><br>   
        <label>Don't have an account? <label>
        <input type="button" name="log" id="log" onclick="window.location.href = 'SignUp.html';" value="Register"><br>  
        <input type="checkbox" id="check">    
        <span>Remember me</span>    
        <br><br>    
        <a href="#">Forgot Password</a>    
    </form>     
</div>     -->
<div class="navbar navbar-default">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
  </div>
  </div>
  <br>
  <div class="container">	
    <div class="col-sm">
      <img src="img/book-reading.png" class="img-fluid" alt="Responsive image" max-width="70%">
    </div>
    <form name="registration_form" id="registration_form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?" enctype="multipart/form-data" action="" > 
    <div class="row">
  
    <div class="col-sm">
      <div class="form-group">
        <h2>Register Here</h2><br>
          <label for="email">Email</label>
        <input type="text" name="email" id="email" class="form-control" placeholder="Enter your email">
      </div>
      
      <div class="form-group">
          <label for="password" >Password</label>
        <input type="password" name="password" id="password" class="form-control"  placeholder="Enter your password">
      </div>
      <button type="button" id="register" name="register" class="btn btn-success">Register Now</button>
    </div><!-- end col -->
    </form>
    
    <form name="login_form" id="login_form" method="post" action="#" enctype="multipart/form-data" >
    <div class="col-sm">
      <div class="form-group">
        <h2>Login</h2><br>
          <label for="email">Email</label>
        <input type="text" name="login_email" id="login_email" class="form-control" placeholder="Enter your email">
      </div>
      
      <div class="form-group">
          <label for="password">Password</label>
        <input type="password" name="login_password" id="login_password" class="form-control"  placeholder="Enter your password">
      </div>
      <button type="button" id="login" name="login" class="btn btn-success">Login</button>
    </div><!-- end col -->
    </div><!--  end row -->		
    </form>
    
  </div>
  </body>
    <script type="module">
      // Import the functions you need from the SDKs you need
      import { initializeApp } from "https://www.gstatic.com/firebasejs/9.18.0/firebase-app.js";
    import {getAnalytics } from "https://www.gstatic.com/firebasejs/9.18.0/firebase-analytics.js";
    // import {getDatabase, set, ref } from "https://www.gstatic.com/firebasejs/9.18.0/firebase-database.js";
    import { getAuth, createUserWithEmailAndPassword, signInWithEmailAndPassword, signOut } from "https://www.gstatic.com/firebasejs/9.18.0/firebase-auth.js";
    // TODO: Add SDKs for Firebase products that you want to use
    // https://firebase.google.com/docs/web/setup#available-libraries
  
    // Your web app's Firebase configuration
    const firebaseConfig = {
      apiKey: "AIzaSyCOajSGBdfQ4ZQLHgVjbM6hEHXtbmIytO8",
      authDomain: "book-depot.firebaseapp.com",
      projectId: "book-depot",
      storageBucket: "book-depot.appspot.com",
      messagingSenderId: "616702573444",
      appId: "1:616702573444:web:1e66ed78c7aa1e13c57bd1"
    };
  
      // Initialize Firebase
      const app = initializeApp(firebaseConfig);
      const getDatabase=getDatabase(app);
      const analytics = getAnalytics(app);
      const auth = getAuth();
      console.log(app);
  
      
  
      //----- New Registration code start	  
      document.getElementById("register").addEventListener("click", function() {
        var email =  document.getElementById("email").value;
        var password = document.getElementById("password").value;
        //For new registration
        createUserWithEmailAndPassword(auth, email, password)
        .then((userCredential) => {
          // Signed in 
          const user = userCredential.user;
          // set(ref(database,'users/'+user.user),{
          //   email:email,
          //   password:password
          // })

          console.log(user);
          
          alert("Registration successful!!");
          // ...
        })
        .catch((error) => {
          const errorCode = error.code;
          const errorMessage = error.message;
          // ..
          console.log(errorMessage);
          alert(error);
        });		  		  
      });
      //----- End
  
      //----- Login code start	  
      document.getElementById("login").addEventListener("click", function() {
        var email =  document.getElementById("login_email").value;
        var password = document.getElementById("login_password").value;
  
        signInWithEmailAndPassword(auth, email, password)
        .then((userCredential) => {
          // Signed in 
          const user = userCredential.user;
          console.log(user);
          window.location.replace("index1.html");
          alert(user.email+" Login successful!!!");
          // document.getElementById('logout').style.display = 'block';
          // ...
        })
        .catch((error) => {
          const errorCode = error.code;
          const errorMessage = error.message;
          console.log(errorMessage);
          alert(errorMessage);
        });		  		  
      });
      //----- End
  
      //----- Logout code start	  
      document.getElementById("logout").addEventListener("click", function() {
        signOut(auth).then(() => {
          // Sign-out successful.
          console.log('Sign-out successful.');
          alert('Sign-out successful.');
          window.location.replace("Login.html");
          document.getElementById('logout').style.display = 'none';
        }).catch((error) => {
          // An error happened.
          console.log('An error happened.');
        });		  		  
      });
      //----- End
  
    </script>

<section>
    <div class="whirly-loader" style="display: none;"></div>
    <div id="results" class="results container">
    </div>
  </section>
  <a href="#" id="return-to-top" class="special1" > 
    <i class="fa fa-arrow-up" ></i>
  </a>
  <footer>
    
   </footer>
</body>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init({
        offset: 200,
        duration: 1000
    });
</script>
<script src="main.js"></script>


<?php
    // Check if the form has been submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Check if the username and password have been filled in
        if (!empty($_POST['Username']) && !empty($_POST['Password'])) {
            // Get the username and password from the form
            $username = $_POST['Username'];
            $password = $_POST['Password'];

            // Connect to the database
            $conn = mysqli_connect("localhost", "root", "", "web");

            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            // Insert the username and password into the "details" table
            $sql = "INSERT INTO details (Username, Password) VALUES ('$Username', '$Password')";

            if (mysqli_query($conn, $sql)) {
                echo "Logged In.";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }

            // Close the database connection
            mysqli_close($conn);
        } else {
            // If the username and/or password are not filled in, show an error message
            echo "Please fill in both the username and password fields.";
        }
    }
    ?>


</body>

</html>
