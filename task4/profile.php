<?php
     session_start();
     if(isset($_SESSION['flag'])){
         $user = $_SESSION['loggedInUser'];
     }else{
        header('location: login.html');
    }
     
?>


<html>
<head>
	<title>View Profile</title>
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
            <td align="center" >
                <form action="#" method="POST">
                <fieldset>
                    <legend>PROFILE</legend>
                    <table>
                         <tr>
                           <td>Name</td>
                              <td>:</td>
                              <td rowspan="3">
                                   <img src="user.png" width="100" height="100"></td>
                              <tr>
                              <td>Email</td>
                              <td>:</td></tr>
                              <tr>
                                   <td>Gender</td>
                                   <td>:</td></tr>
                              <tr>
                                   <td>Date of Birth</td>
                                   <td>:</td>
                                   <td><a href="user.png">Change</a></td>
                                   </tr>
                              <tr>
                              <td><a href="eProfile.php">Edit Profile</a></td></tr> 
      
                    </table>
                </fieldset>
                </form>
            </td>
        </tr>
    </table>
 

         <table border="1" width="100%" height="50px">
        <td colspan="3"><center>Copyright@2017</center></td> 
    </table> 	
           	

	
</body>
</html>
