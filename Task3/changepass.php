<?php



$curpassword = "Abc@123";
$curpassword_error = "";


$newpassword = "";
$newpassword_error = "";


$retypassword = "";
$retypassword_error = "";

if (isset($_POST["submit"])) {
   

    if($newpassword == $curpassword) {
        $newpassword_error = "*Current password & new password can't be same";
    }else {
        $newpassword = test_input($_POST['newpassword']);
    }

     if($newpassword == $retypassword) {
         $retypassword = test_input($_POST['retypassword']);
    }else {
       
        $retypassword_error = "* password mismatched";
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
                    <legend height>Change Password</legend>
                    <table height="200px" align="center">
                        <tr>
                            <td>Current Password</td>
                            <td>:<input type="password" name="curpassword" value="<?php echo $curpassword; ?>">
                                <span class="error"><?php echo $curpassword_error; ?></span></td>
                        </tr>
                        <tr>
                            <td>New Password</td>
                            <td>:<input type="password" name="newpassword" value="<?php echo $newpassword; ?>">
                            <span class="error"><?php echo $newpassword_error; ?></span></td>
                        </tr>
                        <tr>
                            
                            <td>Retype Password</td>
                            <td>:<input type="password" name="retypassword" value="<?php echo $retypassword; ?>">
                            <span class="error"><?php echo $retypassword_error; ?></span></td>
                    
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <input type="submit" name="submit" value="Submit"> 
                                
                            </td>
                        </tr>
                    </table>
                </fieldset>
            </form>
        </td>
        
  
</body>
</html>
