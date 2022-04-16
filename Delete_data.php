<?php

$host = "localhost";
$user = "root";
$password ="";
$database = "usc";

/*

$id = "";
$fname = "";
$lname = "";
$age = "";
*/
$St_id = "";
$name = "";
$study = "";
$country = "";
$semester ="";
$credit ="";
$cgpa ="";
$scholarship_name ="";
$scholarship_category ="";
$department ="";



mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// connect to mysql database
try{
    $connect = mysqli_connect($host, $user, $password, $database);
} catch (mysqli_sql_exception $ex) {
    echo 'Error';
}

// get values from the form
function getPosts()
{
    $posts = array();
    $posts[0] = $_POST['St_id'];

	
	$posts[1] = $_POST['name'];
    $posts[2] = $_POST['study'];
    $posts[3] = $_POST['country'];
	
	
	$posts[4] = $_POST['semester'];
	$posts[5] = $_POST['credit'];
    $posts[6] = $_POST['cgpa'];
    $posts[7] = $_POST['scholarship_name'];
	$posts[8] = $_POST['scholarship_category'];
	$posts[9] = $_POST['department'];
	
	
    return $posts;
}






// Delete
if(isset($_POST['delete']))
{
    $data = getPosts();
	
//  $delete_Query = "DELETE FROM `users` WHERE `id` = $data[0]";
 $delete_Query = "DELETE FROM `scholarship_form` WHERE `St_id` = $data[0]";

    try{
        $delete_Result = mysqli_query($connect, $delete_Query);
        
        if($delete_Result)
        {
            if(mysqli_affected_rows($connect) > 0)
            {
                echo 'Data Deleted';
	
			//     header("refresh:2; url=View_data.php");
				
				
            }else{
                echo 'Data Not Deleted';
            }
        }
    } catch (Exception $ex) {
        echo 'Error Delete '.$ex->getMessage();
    }
}




?>
<!DOCTYPE Html>
<html>
    <head>
        <title>DELETE</title>
    </head>
    <body>
<body
	style="background-color:#FBF6D9 ;">
  <p>  </p>
	<body/> 
	
	<table align ="center">
	 <tr><td>
    <div class="container">
      <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
          <div class="panel-heading text-center">
            <h1>Delete Record!</h1>
          </div></td></tr>
	     <br><br>
		 </table>
		 
		 
        <form action="Delete_data.php" method="post">
         
		 
		 <table border=4 cellpadding=12 cellspacing=16; align ="center">


			
			<!--t type="number" name="St_id" placeholder="St_id" value="<?php echo $St_id;?>"><br><br-->
			
			<tr><td>
			<input type="text" name="St_id" placeholder="St_id" value="<?php echo $St_id;?>"><br><br></td></tr>
			
			<tr><td>
            <input type="text" name="name" placeholder="name" value="<?php echo $name;?>"><br><br></td></tr>
			
                <tr><td>
                <input type="text" name="study" placeholder="study" value="<?php echo $study;?>"><br><br></td></tr>
				
			<tr><td>	
            <input type="text" name="country" placeholder="country" value="<?php echo $country;?>"><br><br></td></tr>
			
			<tr><td>
			<input type="text" name="semester" placeholder="semester" value="<?php echo $semester;?>"><br><br></td></tr>
			
          
		    <tr><td>
		    <input type="text" name="credit" placeholder="credit" value="<?php echo $credit;?>"><br><br></td></tr>
			
			
            <tr><td>
        	<input type="text" name="cgpa" placeholder="cgpa" value="<?php echo $cgpa;?>"><br><br></td></tr>
			
            <tr><td>
           	<input type="text" name="scholarship_name" placeholder="scholarship_name" value="<?php echo $scholarship_name;?>"><br><br></td></tr>
			
			
            <tr><td>
           	<input type="text" name="scholarship_category" placeholder="scholarship_category" value="<?php echo $scholarship_category;?>"><br><br> </td></tr>
			
            <tr><td> 
            <input type="text" name="department" placeholder="department" value="<?php echo $department;?>"><br><br> </td></tr>
		  
			
			<tr><td>
            <div>
             
			   <!-- Input For Clear Values -->
			   
                <input type="submit" name="delete" value="Delete">
				
				<a href=edit_data.php?>Update</a>
				
                <a href=View_data.php?>View</a>
				
				<a href=usc_Submit_data.php?>Submission Form</a>
				
				
            </div></td></tr>
			</table>
        </form>
    </body>
</html>