<!--Sponsors can add, delete, and edit Drivers-->

<?php 
 	include('../server.php');
  //  require_once("connect.php");
	$userID = $_SESSION['id'];

  	mysqli_select_db($db, 'cloud337');
	$query = "select company_id from users_has_company where users_id='$userID'";
	$results = mysqli_query($db,$query);

	if(mysqli_num_rows($results) > 0){
		$user = mysqli_fetch_assoc($results);
		$company = $user['company_id'];
		$_SESSION['company'] = $company;
	}else{
		echo "empty";
	}


	mysqli_select_db($db, 'cloud337');
	$query = "select * from (users join users_has_company on id=users_id) where company_id='$company' and role='Driver'";
	$result = mysqli_query($db,$query);

	mysqli_select_db($db, 'cloud337');
	$query = "select * from (users join users_has_company on id=users_id) where company_id='$company' and role='Sponsor'";
	$result2 = mysqli_query($db,$query);
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="../navigation.css">
    <title>Review/Edit Drivers and Sponsors</title>
</head>
<style>
	table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}
</style>	
<body class ="style" class="bg-dark">
	<ul>
        <div class="dropdown">
            <button class="dropbtn"><a href="sponsorprof.php"><img src="spons.jpg" alt="Avatar" width="50" height="50" >
            </a></button>
            <div class="dropdown-content">
                <a href="sponsor_home.html">HOME</a>
                <a href="view.php">DRIVER</a>
                <a href="points2.php">POINT SYSTEM</a>
                <a href="sponsor_catalog.php">CATALOG</a>
                <a href="#">ANALYTIC</a>
                <a href="../logins/login.php">LOGOUT</a>
            </div>
        </div>
    </ul>

	
	<h1 align = "center" style="color: black" >Review and Edit Your Drivers</h1>
	<button  style="width: 20%; height: 20%; background-color: #17A5BC;" onclick=" window.location.href='newSponDriv.php' ">Add New Drivers</button>
	<br>
	
        <div class="container">
                        <table style="color: black" align = "center">
                            <tr>
                                <th> User ID </th>
                                <th> Username </th>
                                <th> Email </th>
                                <th> User Password </th>
                                <th> First's Name </th>
                                <th> Last's Name </th>
                                <th> User Points </th>
                                <th>  </th>
                                <th>  </th>
								<th>  </th>
                            </tr>
                            <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $UserID = $row['id'];
                                        $UserName = $row['username'];
                                        $UserEmail = $row['email'];
                                        $UserPass = $row['password'];
                                        $UserFname = $row['fname'];
                                        $UserLname = $row['lname'];
                                        $UserPoints = $row['points'];
                                        
                            ?>
                                    <tr>
                                        <td><?php echo $UserID ?></td>
                                        <td><?php echo $UserName ?></td>
                                        <td><?php echo $UserEmail ?></td>
                                        <td><?php echo $UserPass ?></td>
                                        <td><?php echo $UserFname ?></td>
                                        <td><?php echo $UserLname ?></td>
                                        <td><?php echo $UserPoints ?></td>
                                      	<td>
											<button  style="background-color: #17A43D" onclick=" window.location.href='sponsorDriver_edit.php?GetID=<?php echo $UserID ?>' ">Edit</button>
										</td>
										<td>
											<button  style="background-color: #FB1111" onclick=" window.location.href='sponsorDriver_update.php?Del=<?php echo $UserID ?>' ">Delete</button>
										</td>
										<td>
											<button  style="background-color: #0907C7" onclick=" window.location.href='buy.php?Del=<?php echo $UserID ?>' ">Buy</button>
										</td>
                                    </tr>        
                            <?php 
                                    }  
                            ?>                                                                    
                                   
 
                        </table>
        </div>
    
	
	<h1 align = "center" style="color: black" >Review and Edit Sponsors in Your Company</h1>
	<button  style="width: 20%; height: 20%; background-color: #17A5BC;" onclick=" window.location.href='newSponSpon.php' ">Add New Sponsor</button>
	<br>
	
               <div class="container">
                        <table style="color: black" align = "center">
                            <tr>
                                <th> User ID </th>
                                <th> Username </th>
                                <th> Email </th>
                                <th> User Password </th>
                                <th> First's Name </th>
                                <th> Last's Name </th>
                                <th>  </th>
                                <th>  </th>
						
                            </tr>
                            <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result2))
                                    {
                                        $UserID = $row['id'];
                                        $UserName = $row['username'];
                                        $UserEmail = $row['email'];
                                        $UserPass = $row['password'];
                                        $UserFname = $row['fname'];
                                        $UserLname = $row['lname'];
                                 
                                        
                            ?>
                                    <tr>
                                        <td><?php echo $UserID ?></td>
                                        <td><?php echo $UserName ?></td>
                                        <td><?php echo $UserEmail ?></td>
                                        <td><?php echo $UserPass ?></td>
                                        <td><?php echo $UserFname ?></td>
                                        <td><?php echo $UserLname ?></td>
                                 
										   <td>
											<button  style="background-color: #17A43D" onclick=" window.location.href='sponsorDriver_edit.php?GetID=<?php echo $UserID ?>' ">Edit</button>
										</td>
                                        <td>
											<button  style="background-color: #FB1111" onclick=" window.location.href='sponsorDriver_update.php?Del=<?php echo $UserID ?>'  ">Delete</button>
										</td>
										
					
                                    </tr>        
                            <?php 
                                    }  
                            ?>                                                                    
                                   
 
                        </table>
        </div>
</body>
</html>