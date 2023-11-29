<?php
    include_once("connection.php");
    $username = $_POST['username'];
    $password = $_POST['password'];

        $stmt = $conn->prepare("select * from login where username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        if($stmt_result->num_rows > 0)
        {
            $data = $stmt_result->fetch_assoc();
            if($data['password']== $password)
            {
                header("Location: welcome.php");
            }
        }
        else
        {
            echo '<script>
                        window.location.href = "index.php";
                        alert("Login failed. Invalid username or password!!")
                        </script>';
        }

?>