<?php
    include 'connect.php';

    // Register new user account
    if(isset($_POST['registerAcc'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confPassword = $_POST['confPassword'];
        
        if($confPassword !== $password) {
            die("Confirmation password doesn't match");
        }

        $password = md5($password);

        $checkEmail = "SELECT * FROM users WHERE email='$email'";
        $result = $connection->query($checkEmail);
        if($result->num_rows > 0) {
            echo "Email Address Already Used!";
        } else {
            $insertQuery = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
            if($connection->query($insertQuery) == TRUE) {
                header("Location:index.php");
            } else {
                echo "Error:".$connection->error;
            }
        }
    }

    // Login user account
    if(isset($_POST['logIn'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password = md5($password);

        $checkUser = "SELECT * FROM users WHERE email='$email' AND password='$password'";
        $result = $connection->query($checkUser);
        if($result->num_rows > 0) {
            echo "Log in successful!";
        } else {
            echo "Incorrect Email or Password";
        }
    }

    // Send messages from contact us form to database
    if(isset($_POST['sendMessage'])) {
        $firstName = $_POST['fName'];
        $lastName = $_POST['lName'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $subject = $_POST['subject'];
        $messages = $_POST['messages'];

        $sendMessage = "INSERT INTO messages (firstName, lastName, email, phone, subject, messages) VALUES ('$firstName', '$lastName', '$email', '$phone', '$subject', '$messages')";
        if($connection->query($sendMessage) == TRUE) {
            header("Location:contact.php");
        } else {
            echo "Error:".$connection->error;
        }
    }
?>