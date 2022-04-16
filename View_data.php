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

// Search

if(isset($_POST['search']))
{
    $data = getPosts();
    
	
//  $search_Query = "SELECT * FROM users WHERE id = $data[0]";
    
	$search_Query = "SELECT * FROM scholarship_form WHERE St_id = $data[0]";
	
    $search_Result = mysqli_query($connect, $search_Query);
    
    if($search_Result)
    {
        if(mysqli_num_rows($search_Result))
        {
            while($row = mysqli_fetch_array($search_Result))
            {
               
$St_id = $row['St_id'];
                $name = $row['name'];
                $study = $row['study'];
                $country = $row['country'];
				$semester =$row['semester'];
				$credit = $row['credit'];
                $cgpa = $row['cgpa'];
                $scholarship_name = $row['scholarship_name'];
				$scholarship_category =$row['scholarship_category'];
				$department =$row['department'];
				
            }
        }else{
            echo 'No Data Found';
        }
    }else{
        echo 'Result Error';
    }
}




?>


<!DOCTYPE Html>
<html>
    <head>
        <title>VIEW</title>
    </head>
    <body>
	
	<body
	style="background-color: #E3E4FA;">
  <p>  </p>
	<body/> 
	
	<table align ="center">
	 <tr><td>
    <div class="container">
      <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
          <div class="panel-heading text-center">
            <h1>View Scholarship Request Information </h1>
          </div></td></tr>
	     <br><br>
		 </table>
	
	
	
        <form action="View_data.php" method="post">
		
		<table border=4 cellpadding=10 cellspacing=14; align ="center">
         
			
			<!--t type="number" name="St_id" placeholder="St_id" value="<?php echo $St_id;?>"><br><br-->
			
	<tr><td>
	<div> St-id:  <input type="text" name="St_id" placeholder="St_id" value="<?php echo $St_id;?>"><br><br></div></td></tr>
	
		<tr><td>	
       <div> Name:    <input type="text" name="name" placeholder="name" value="<?php echo $name;?>"><br><br></div></td></tr>
	   
       <tr><td>     
       <div> Study:   <input type="text" name="study" placeholder="study" value="<?php echo $study;?>"><br><br></div></td></tr>
	   
		<tr><td>		
        <div> Country:   <input type="text" name="country" placeholder="country" value="<?php echo $country;?>"><br><br></div></td></tr>
		
		
	<tr><td>		
	<div> Semester: <input type="text" name="semester" placeholder="semester" value="<?php echo $semester;?>"><br><br></div></td></tr>
	
	
	<tr><td>
	<div> Credit: <input type="text" name="credit" placeholder="credit" value="<?php echo $credit;?>"><br><br></div></td></tr>
	
	
	
        <tr><td>
        <div>  CGPA: <input type="text" name="cgpa" placeholder="cgpa" value="<?php echo $cgpa;?>"><br><br></div></td></tr>
		
		
        <tr><td>   
        <div> Scholarship Name: <input type="text" name="scholarship_name" placeholder="scholarship_name" value="<?php echo $scholarship_name;?>"><br><br></div></td></tr>
		
		
       <tr><td>
       <div> Scholarship Category: <input type="text" name="scholarship_category" placeholder="scholarship_category" value="<?php echo $scholarship_category;?>"><br><br></div></td></tr> 
	   
	   

           <tr><td>
           <div> Department: <input type="text" name="department" placeholder="department" value="<?php echo $department;?>"><br><br></div> </td></tr>

			
		

			
			<tr><td>
            <div>
             
                
                <!-- Input For Find Values With The given ID -->
               
 <input type="submit" name="search" value="View">
 
 
 
                                          <a href=edit_data.php?>Update</a>
										  <a href=Delete_data.php?>Delete</a>
										  <a href=usc_Submit_data.php?>Submission Form</a> </td></tr>
				
            </div>
        </form>
    </body>
</html>