<?php
        if ($_SERVER["REQUEST_METHOD"]=="POST")
         {
           $u_username = $_POST["username"];
           $p_password = $_POST["password"];
           $passwordRepeat = $_POST["repeat_password"];
           $email = $_POST["email"];
           

           $errors = array();
           
           if (empty($u_username) OR empty($email) OR empty($p_password) OR empty($passwordRepeat)) {
            array_push($errors,"All fields are required");
           }
           if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            array_push($errors, "Email is not valid");
           }
           if (strlen($p_password)<8) {
            array_push($errors,"Password must be at least 8 charactes long");
           }
           if ($p_password!==$passwordRepeat) {
            array_push($errors,"Password does not match");
           }


           require_once("connection.php");
           $sql = "SELECT * FROM login WHERE email = '".$email."'";
           $result = mysqli_query($conn, $sql);
           $rowCount = mysqli_num_rows($result);

           if ($rowCount>0) {
            array_push($errors,"Email already exists!");
           }

           if (count($errors)>0){
                echo '<script>
                window.location.href = "index.php";
                alert("Login failed. Invalid username or password!!'.$errors.'")
                </script>';
           }else{
                $sql = "INSERT INTO login (username, password, email) VALUES ( '".$u_username."','".$p_password."','".$email."')";
                $stmt = mysqli_stmt_init($conn);
                $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
                if ($prepareStmt) {
                    mysqli_stmt_execute($stmt);
                    echo "<div class='alert alert-success'>You are registered successfully.</div>";
                    header("Location: welcome.php");
                }else{
                    die("Something went wrong");
                }
            }
        }
        ?>