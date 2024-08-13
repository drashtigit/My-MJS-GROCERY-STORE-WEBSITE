<?php
session_start();
include 'DB-connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        $_SESSION['login_error'] = 'All fields are required.';
        header("Location: index.php");
        exit();
    }

    $email = $conn->real_escape_string($email);
    $password = $conn->real_escape_string($password);

  
    $sql = "SELECT ID, Full_Name, Password FROM users WHERE Email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        if (password_verify($password, $user['Password'])) {
           
            $_SESSION['user_id'] = $user['ID'];
            $_SESSION['email'] = $email;
            $_SESSION['full_name'] = $user['Full_Name'];

            
            header("Location: index.php");
            exit();
        } else {
            $_SESSION['login_error'] = 'Invalid password.';
            header("Location: index.php");
            exit();
        }
    } else {
        $_SESSION['login_error'] = 'No user found with that email.';
        header("Location: index.php");
        exit();
    }

    $conn->close();
}
?>
