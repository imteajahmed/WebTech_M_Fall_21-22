<?php

$username = "";
$username_error = "";

$password = "";
$password_error = "";

if (isset($_POST["submit"])) {
   
    if(strlen($_POST['username']) < 2) {
        $username_error ="*User Name must be greater than 2 character";
    } else if(preg_match('/^[a-zA-Z]+[a-zA-Z0-9._]+$/ ', $_POST['username']) != 1) {
        $username_error = "*User Name can contain alpha numeric characters, period, dash or 
       underscore only";
    } else {
        $username = test_input($_POST['username']);
    }



    if(strlen($_POST['password'])  < 8) {
        $password_error = "*password must not be less than 8 characters";
    } else if(!preg_match('/[\'^$%&()}{@#~?><>,|=_+-]/',$_POST['password'])) {
        $password_error = "*password must contain at least one of the special characters (@, #, $,
     %";
    }else {
        $password = test_input($_POST['password']);
    }
}
function test_input($str) {
    return htmlspecialchars(trim($str));
}

?>
<!DOCTYPE html>
<html>
<head>
   
    <title>Login</title>
    <style type="text/css">
        .error {
            color: red;
        }
    </style>
</head>
<body>
    
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">     
                <fieldset style="width:320px">
                    <legend height>LOGIN</legend>
                    <table height="200px" align="center">
                        <tr>
                            <td>Username</td>
                            <td>:<input type="text" name="username" value="<?php echo $username; ?>">
                                <span class="error"><?php echo $username_error; ?></span></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td>:<input type="password" name="password" value="<?php echo $password; ?>">
                            <span class="error"><?php echo $password_error; ?></span></td>
                        </tr>
                        <tr>
                            
                            <td><input type="checkbox" name="rememberme" value="Remember Me">Remember Me</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <input type="submit" name="submit" value="Submit"> 
                                <a href="forgotpassword.php">Forgot Password?</a>
                            </td>
                        </tr>
                    </table>
                </fieldset>
            </form>
        </td>
        
  
</body>
</html>
