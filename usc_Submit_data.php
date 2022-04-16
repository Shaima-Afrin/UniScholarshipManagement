<?php
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

if(isset($_POST['save_contact']))
{
	//print_r($_POST);
//sql = "INSERT INTO scholarship_form(St_id, name, study, country) VALUES('".addslashes($_POST['St_id'])."','".addslashes($_POST['name'])."', '".addslashes($_POST['study'])."', '".addslashes($_POST['country'])."')";

         $sql = "INSERT INTO scholarship_form(St_id, name, study, country,semester, credit, cgpa, scholarship_name, scholarship_category,department)
		 VALUES('".addslashes($_POST['St_id'])."','".addslashes($_POST['name'])."', '".addslashes($_POST['study'])."',
		 '".addslashes($_POST['country'])."','".addslashes($_POST['semester'])."','".addslashes($_POST['credit'])."','".addslashes($_POST['cgpa'])."'
		 ,'".addslashes($_POST['scholarship_name'])."','".addslashes($_POST['scholarship_category'])."','".addslashes($_POST['department'])."'
		 )";


	$conn->query($sql);
	echo "SUBMITTED";
	 header("refresh:3; url= View_data.php"); 
	
}

?>

<html>
	<head>
		<title>Scholarship Submission Form</title>
	</head>
	<body>
	
	<p style="text-align: center;"> University Scholarship Management </p>
	
	
	<body
	style="background-color: powderblue;">
  <p>  </p>
	<body/> 
	 <table align ="center">
	 <tr><td>
    <div class="container">
      <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
          <div class="panel-heading text-center">
            <h1>Scholarship Submission Form </h1>
          </div></td></tr>
	     <br><br>
		 </table>
		 
		 
		 
		 
		 
		 
		<form action="" method="post">
		
		
		
		
	
      
		
		
		
		<table border=6 cellpadding=19 cellspacing=18; align ="center">
		
		
		
		
		<tr><td>
        <div>  St_id : <input type="text" name="St_id" value="" /><br><br></div></td></tr>
		
		
		
		
		<tr><td>
		<div> Name: <input type="text" name="name" value="" /> <br><br></div></td></tr>
				
				
				
		<tr><td>       
		<div> Study: <input type="text" name="study" value="" /> <br><br></div></td></tr>
		
		
		
		<tr><td>
		<div> Country: <input type="text" name="country" value="" /> <br><br></div></td></tr>
		
		
			
		<tr><td>	
		<div> Semester: <input type="text" name="semester" value="" /> <br><br></div></td></tr><br><br>
		
		
		
		<tr><td>
		<div> Credit: <input type="text" name="credit" value="" /> <br><br></div></td></tr>
				
				
				
		<tr><td>       
		<div> CGPA: <input type="text" name="cgpa" value="" /> <br><br></div></td></tr>
		
		
		
		<tr><td>
		<div> Scholarship Name: <input type="text" name="scholarship_name" value="" /> <br><br></div></td></tr>
		
		
			
		<tr><td>	
		<div> Scholarship Category: <input type="text" name="scholarship_category" value="" /> <br><br></div></td></tr><br><br>
		
		
		
        <tr><td>	
		<div> Department: <input type="text" name="department" value="" /> <br><br></div></td></tr><br><br> 

		
		
		
		<tr><td>
		<div> <input type="submit" name="save_contact" value="Submit" /></div> </td></tr>
		
		
		     <tr><td>
		     <a href=View_data.php?>View</a>
			 <a href=edit_data.php?>Update</a>
             <a href=Delete_data.php?>Delete</a>
			 <a href=home2.php?>Home</a></td></tr>
			
			</table>
			
		</form>
	</body>
</html>