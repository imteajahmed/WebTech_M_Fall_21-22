<?php
     session_start();
     if(isset($_SESSION['flag'])){
         $user = $_SESSION['loggedInUser'];
     }else
     {
        header('location:homee.php');
     }
?>


<html>
<head>
	<title>Dashboard</title>
</head>
<body>
	<table border="1" width="100%" align="center">
		<tr>
			<td colspan="3" width="50%" height="50%" align="right">
				<img src="logo.png" width="100px" height="50" align="left">
                Logged in as <?php echo $user['username'] ?>|
                <a href="logout.php">Logout</a>
            </td>

		    </tr>
		</table>   

        <table border="1" width="100%" align="center">
        <tr align="left" height="300px">
            <td width="200px">
            <p>
                <h3>Account</h3>
                <ul>
                <li><a href="dashboard.php"> Dashboard</a></li>
                <li><a href="profile.php"> View Profile</a></li>
                <li><a href="eProfile.php"> Edit Profile</a></li>        
                <li><a href="changep.php"> Change Profile Picture</a></li>    
                <li><a href="changepass.php"> Change Passowrd</a></li>
                <li><a href="logout.php"> Logout </a></li>           
                </ul>      
             </p>
            </td>
            <td height='200px' align="center">
            <h3> Welcome <?php echo $user['username'] ?> </h3> 
        </td>
           
        </tr>
    </table>
 


         <table border="1" width="100%" height="50px">
        <td colspan="3"><center>Copyright@2017</center></td> 
    </table> 	
           	

	
</body>
</html>
