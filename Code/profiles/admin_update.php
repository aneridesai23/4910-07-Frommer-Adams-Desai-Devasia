<?php 
 
    require_once("connect.php");
 	//Update
     if(isset($_POST['updateA']))
    {
        $UserID = $_GET['ID'];
        $UserName = $_POST['username'];
        $UserEmail = $_POST['email'];
        $UserPass = md5($_POST['password']);
        $UserFname = $_POST['fname'];
        $UserMname = $_POST['mname'];
        $UserLname = $_POST['lname'];
        $UserBmonth = $_POST['bmonth'];
        $UserBday = $_POST['bday'];
        $UserCity = $_POST['city'];
        $UserState = $_POST['state'];
 
        $query = " update users set username = '".$UserName."', email='".$UserEmail."', password='".$UserPass."', fname='".$UserFname."', mname='".$UserMname."', lname='".$UserLname."', bmonth='".$UserBmonth."', bday='".$UserBday."', city='".$UserCity."', state='".$UserState."' where id='".$UserID."'";
        $result = mysqli_query($conn,$query);
 
        if($result)
        {
           header("location:admin_view.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    else
    {
        header("location:admin_view.php");
    }


	//Delete
	if(isset($_GET['Del']))
	{
		$UserID = $_GET['Del'];
		$query = " delete from users where id = '".$UserID."'";
		$result = mysqli_query($conn,$query);

		if($result)
		{
			header("location:admin_view.php");
		}
		else
		{
			echo ' Please Check Your Query ';
		}
	}
?>