<?php
    session_start();
    $Username = "";
    $email = "";
    $error = array();


    if(!isset($_SESSION["reg_user"])) {
      
        $Username = mysqli_real_escape_string($conn,$_POST['username']);
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $Username = mysqli_real_escape_string($conn,$_POST['username']);
        $password_1 = mysqli_real_escape_string($conn,$_POST['password_1']);
        $password_2 = mysqli_real_escape_string($conn,$_POST['password_2']);


        if(empty($Username)){array_push($error, "USername is required");}
        if(empty($email)){array_push($error, "Email is required");}
        if(empty($password)){array_push($error, "password is required");}
        if($password_1 != $password_2){array_push($error, "the two password do not match");}
    }


        $user_check_query = "SELECT * FROM users WHERE username='$Username' or email='$email' LIMIT 1 ";
        $result = mysqli_query($conn, $user_check_query);
        $user = mysqli_fetch_assoc($result);


        if($user){
            if($user['username'] == $username){
                array_push($errors, "Username already exists");
            }

            if($user['email'] == $email){
                array_push($errors, "email already exists");
            }
        }


        if(count($error)==0){
            $password =md5($password_1);
            $query = "INSERT INTO users(username,email,password) VALUES($Username,$email,$password)";

            mysqli_query($conn,$query);
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "you have logged in";
            header('location: index.php');
                }
?>
