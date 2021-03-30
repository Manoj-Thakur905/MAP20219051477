<?php require_once 'app/views/templates/header.php' ?>
 <div class="container">
     <div class="page-header" id="banner">
         <div class="row">
             <div class="col-lg-12">
                 <h1>Programs</h1>
             </div>
         </div>
     </div>
 	<div class="row">
     <div class="col-lg-12">
		<?php
		 if(count($data['$courseList'] ) > 0){
		foreach ($data['$courseList']  as $course) {  ?> 
		<?php  
		$courseName = $course['program'];
		 echo "<a href=/courses/display/", $course ,">$courseName</a>";
		?>
		<br>
		<?php } }?>
	 
		<?php
		 	if(count($data['programs'] ) > 0){
			foreach ($data['programs']  as $programbyDepartment) {  ?> 
		<?php  
		$programName = $programbyDepartment['course_name'];
		 echo "<a href=/courses/display/",$programbyDepartment,">$programName</a>";
		?>
		<br>
		<?php } }?>
		 
		<br>
		 
	<?php
  		$url = htmlspecialchars($_SERVER['HTTP_REFERER']);
  		echo "<a href='$url'>Previous Page</a>"; 
	?>
	 
		</div>
	</div>
		
	

 <?php require_once 'app/views/templates/footer.php' ?>