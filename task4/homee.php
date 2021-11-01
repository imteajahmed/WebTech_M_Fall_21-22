<?php
    session_start();
    if(isset($_SESSION['flag'])){
    $user = $_SESSION['loggedInUser'];
?>

<html>
<head>
   
    <title>HOME</title>
</head>
<body>
     <table border="1" width="100%" align="center">
        <tr>
            <td colspan="3" height="80px" align="right">
                <img src="logo.png" height="50px" align="left">
                <h4>
                    <a href="homee.php"> Home</a> | 
                    <a href="login.html" >Login</a> |
                    <a href="Registration.html"> Registration</a>           
                </h4>
            </td>
            
        </tr>
    </table>

    <table width="100%" border="1">   
        <td height='200px' align="left">
            <h3> Welcome <?php echo $user['username'] ?> </h3> 
        </td>
    </table>

    <table border="1" width="100%" height="50px">
        <td colspan="3"><center>Copyright@2017</center></td> 
    </table> 
    
</body>
</html>
<?php
	}else{
		header('location: login.html');
	}
?>