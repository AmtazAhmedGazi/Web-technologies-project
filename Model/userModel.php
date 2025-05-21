<?php
    error_reporting(E_ALL);
    require_once('db.php');

    function login($user){
        $con = getConnection();
        $sql = "select * from users where username='{$user['username']}' and password='{$user['password']}'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);

        if($count == 1){
            return true;
        }else{
            return false;
        }
    }

    function Signup($user){
      $con = getConnection();

      $sql = "SELECT * FROM users WHERE username = '{$user['username']}'";
      $result = mysqli_query($con, $sql);
      if (mysqli_num_rows($result) > 0) {
          echo "Username already exists";
          return false;
      }
      $sql = "SELECT * FROM users WHERE email = '{$user['email']}'";
      $result = mysqli_query($con, $sql);
      if (mysqli_num_rows($result) > 0) {
          echo "Email already exists";
          return false;
      }
      $sql = "insert into users values(null, '{$user['username']}', '{$user['password']}', '{$user['email']}')";
      if($result2 = mysqli_query($con, $sql)){
          return true;
      }else{
          return false;
      }
      }

      function userCreate($user){
        $con = getConnection();
  
        $sql = "SELECT * from users where username= '{$user['username']}' AND email='{$user['email']}' AND password='{$user['password']}'";
        $result = mysqli_query($con, $sql);
        if (mysqli_num_rows($result) > 0) {
            echo "Invalid";
            return false;
        }
        $sql = "insert into users values(null, '{$user['username']}', '{$user['password']}', '{$user['email']}')";
        if($result2 = mysqli_query($con, $sql)){
            return true;
        }else{
            return false;
        }
        }

    function forgetPassword($user){
            $con = getConnection();
      
            $sql = "SELECT * FROM users WHERE email = '{$user['email']}'";
            $result = mysqli_query($con, $sql);
            if (mysqli_num_rows($result) == 1) {
                echo "Email already exists";
                return true;
            }else{
                return true;
            }
            }






    // function getUserById($id){

    // }

    // function addUser($user){

    // }

    // function deleteUser($id){

    // }

?> 