<html>
<head>
<title>Scholarship Record</title>
</head>
<body>

<body
	style="background-color:#93FFE8;">
  <p>  </p>
	<body/>
	
	<table align ="center">
	 <tr><td>
    <div class="container">
      <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
          <div class="panel-heading text-center">
            <h1>Scholarship Record</h1>
          </div></td></tr>
	     <br><br>
		 </table>
	
<table border=6 cellpadding=19 cellspacing=18; align ="center">

	
 <tr>
 <th>St_id</th>
 <th>Name</th>
 <th>Study</th>
 <th>Country</th>
 <th>Department</th>
 <th>Semester</th>
 <th>Scholarship Status</th>
 <th>Scholarship Name</th>
 <th>Scholarship Category</th>
 <th>Previous Scholarship History</th>
 
 </tr>
 
 
 
 <?php
   $con=mysqli_connect('localhost','root','');
   
   mysqli_select_db($con,'usc');
   
   if(isset($_POST['save_contact'])){
  
   
  //  $sql = "SELECT * FROM scholarship_history";
 
    $sql = "SELECT * FROM scholarship_history  WHERE `St_id`='".addslashes($_POST['St_id'])."' ";
   
   
   $rec = mysqli_query($con,$sql);
   
   while($row = mysqli_fetch_array($rec))
   {
	   
	
	   echo "
	   <tr>
	   <td>".$row['St_id']."</td>
	   <td>".$row['name']."</td>
	   <td>".$row['study']."</td>
	   <td>".$row['country']."</td>
	    <td>".$row['department']."</td>
		 <td>".$row['semester']."</td>
		  <td>".$row['scholarship_status']."</td>
		   <td>".$row['scholarship_name']."</td>
		    <td>".$row['scholarship_category']."</td>
			 <td>".$row['previous_scholarship_record']."</td>
	 </td></tr>";
	   
   }
   
   }
 
 ?>
 
 <form action="record.php" method="post">

 <table border=5 cellpadding=3 cellspacing=4; align ="center">
 
         
		    <tr><td>
		    <div> St_id: <input type="text" name="St_id" value="" /></div></td></tr>
 
 	     <tr><td>
			<div> <input type="submit" name="save_contact" value="See" /></div></td></tr>
			
 
 <tr><td>
 <a href=usc_Submit_data.php?>Go to Submission Form</a></td></tr>
 
 </table>
 
 </table>
 </body>
 </html>