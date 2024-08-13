<?php
include 'DB-connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];

    if (empty($full_name) || empty($email) || empty($password) || empty($phone)) {
        echo "All fields are required.";
        exit();
    }

    $full_name = $conn->real_escape_string($full_name);
    $email = $conn->real_escape_string($email);
    $password = $conn->real_escape_string($password);
    $phone = $conn->real_escape_string($phone);

    $query = "SELECT * FROM users WHERE Email = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['Password'])) {
         
            session_start();
            $_SESSION['user_id'] = $user['ID'];
            $_SESSION['email'] = $email;
            $_SESSION['full_name'] = $user['Full_Name'];
            header("Location: index.php");
        }
        else{
            echo "<script>alert('Please check your credentials.'); window.location.href='register.php';</script>";
            exit();
        } 
        
    } else {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $query = "INSERT INTO users (Full_Name, Email, Password, Phone) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('ssss', $full_name, $email, $hashed_password, $phone);

        if ($stmt->execute()) {
            session_start();
            $_SESSION['user_id'] = $stmt->insert_id;
            $_SESSION['email'] = $email;
            $_SESSION['full_name'] = $full_name;

            
            header("Location: index.php");
        } 
    }
    
    $stmt->close();
}

$conn->close();
?>
