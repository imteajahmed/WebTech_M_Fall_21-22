<?php
  
  session_start();

   if(isset($_POST['submit']))
   {

    $username = $_POST['username'];
    $password  = $_POST['password'];

    if($username == "" || $password == "")
    {
        echo "null input";
    }
    else
    {
        $file_location='file.json';
        $myfile = fopen($file_location, 'r');
        $flag = false;
        $users = json_decode(fread($myfile, filesize($file_location)),true);
        foreach() ($users as $user){ 
            if($user['username'] == $username && $user['password']==$password){
                $_SESSION['loggedInUser'] = $user;
                $flag = true;
                break;
            }
        } 

        if($flag){
            $_SESSION['flag']=true;
            header('location:homee.php');
        }
        else{
            echo "UserName or password is Incorrect!!!";
        }
    }
}
?>