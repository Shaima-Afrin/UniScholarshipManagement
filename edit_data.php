 
	
	
	<?php
	/*
	
$host = "localhost";
$username = "root";
$password = "";

try 
{
    $conn = new PDO("mysql:host=$host;dbname=usc", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}

// FORM SUBMITTED DATA CAN ACCESSED BY:
// 1. $_REQUEST : CAN BE USED FOR BOTH get AND post METHOD
// 2. $_POST : CAN BE USED ONLY FOR post METHOD
// 3. $_GET : CAN BE USED ONLY FOR get METHOD


*/



	
   $con=mysqli_connect('localhost','root','');
   
   mysqli_select_db($con,'usc');
   
 if(isset($_POST['save_contact'])){
 
 
 $sql = "UPDATE scholarship_form SET `Name`='".addslashes($_POST['name'])."',`Study`='".addslashes($_POST['study'])."',
 `Country`='".addslashes($_POST['country'])."',`Semester`='".addslashes($_POST['semester'])."',`Credit`='".addslashes($_POST['credit'])."',`CGPA`='".addslashes($_POST['cgpa'])."',
 
       `Scholarship_Name`='".addslashes($_POST['scholarship_name'])."',`Scholarship_Category`='".addslashes($_POST['scholarship_category'])."',`Department`='".addslashes($_POST['department'])."'
 
 WHERE `St_id`='".addslashes($_POST['St_id'])."' ";



/*

$sql = "UPDATE scholarship_form SET `Name`='".addslashes($_POST['name'])."',`Study`='".addslashes($_POST['study'])."',
 `Country`='".addslashes($_POST['country'])."',`Semester`='".addslashes($_POST['semester'])."', 
 `Credit`='".addslashes($_POST['credit'])."',`CGPA`='".addslashes($_POST['cgpa'])."',`Scholarship_Name`='".addslashes($_POST['scholarship_name'])."',
 `Scholarship Category`='".addslashes($_POST['scholarship_category'])."'
                                 WHERE `St_id`='".addslashes($_POST['St_id'])."' ";

*/




 
//$sql = "UPDATE scholarship_form SET `Name`='$_POST[name]',`Study`='$_POST[study]',`Country`='$_POST[country]' WHERE `St_id`='$_POST[St_id]'";
   
 if(mysqli_query($con,$sql))
 {
	 /*
header("refresh:1; url=del.php");
*/

 }
 else
	 echo "not updated";
		
 }
		
	?>
	
	<html>
	<head>
		<title>UPDATE</title>
	</head>
	<body>
	
	<body
	style="background-color:#FFE6E8;">
  <p>  </p>
	<body/> 
	
	<table align ="center">
	 <tr><td>
    <div class="container">
      <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
          <div class="panel-heading text-center">
            <h1> Update Data </h1>
          </div></td></tr>
	     <br><br>
		 </table>
	
	
		<form action="" method="post">
		
		<table border=2 cellpadding=8 cellspacing=10; align ="center">
		
		    <tr><td>
		    <div> St_id: <input type="text" name="St_id" value="" /></div></td></tr>
			
			 <tr><td>
			<div> Name: <input type="text" name="name" value="" /></div></td></tr>
			
			 <tr><td>
			<div> Study: <input type="text" name="study" value="" /></div></td></tr>
			
			 <tr><td>
			<div> Country: <input type="text" name="country" value="" /></div></td></tr>
			
		 <tr><td>	
		<div> Semester: <input type="text" name="semester" value="" /></div></td></tr>
		
		 <tr><td>
		<div> Credit: <input type="text" name="credit" value="" /></div></td></tr>
		
		 <tr><td>
		<div> CGPA: <input type="text" name="cgpa" value="" /> </div> </td></tr>
		
		 <tr><td>
		<div> Scholarship Name: <input type="text" name="scholarship_name" value="" /></div></td></tr>
		
		 <tr><td>
		<div> Scholarship Category: <input type="text" name="scholarship_category" value="" /></div></td></tr>
		
		 <tr><td>
		<div> Department: <input type="text" name="department" value="" /></div></td></tr>
		
		     <tr><td>
			<div> <input type="submit" name="save_contact" value="Update" /></div></td></tr>
			
			
			 <tr><td>
			<a href=View_data.php?>View</a>
			  <a href=Delete_data.php?>Delete</a>
			<a href=usc_Submit_data.php?>Submission Form</a></td></tr>
			
			</table>
			
		</form>
	</body>
</html>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		