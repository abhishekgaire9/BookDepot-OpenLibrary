   
<body>    
    <center><h1>Vel-Mart Login Portal</h1>    
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">    
        <label for="username">Username:</label>    
        <input type="text" id="username" name="username"><br>    
        <label for="password">Password:</label>    
        <input type="password" id="password" name="password"><br>    
        <a href="hey.html"><input type="submit" name="submit" value="Login">  </a>  
    </form>  
     
    <?php
    // Check if the form has been submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Check if the username and password have been filled in
        if (!empty($_POST['username']) && !empty($_POST['password'])) {
            // Get the username and password from the form
            $username = $_POST['username'];
            $password = $_POST['password'];

            // Connect to the database
            $conn = mysqli_connect("localhost", "root", "", "web");

            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            // Insert the username and password into the "details" table
            $sql = "INSERT INTO details (username, password) VALUES ('$username', '$password')";

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
    </center> 
</body>    
</html>