<?php require_once 'app/views/templates/header.php' ?>
<div class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
                <h1>Departments</h1>
            </div>
        </div>
    </div>
	<div class="row">
    <div class="col-lg-12">
		<?php foreach ($data['departments'] as $course) { ?>
		<?php 
		 $departmentName = $course['department'];
		 echo "<a href=/courses/display/", $course['department'],">$departmentName</a>";
		 ?>
		
		<?php } ?>
	</div>
    </div>
	<div class="row">
    <div class="col-lg-12">
		<h1>Programs</h1>
		<?php foreach($data['programs'] as $program) {
    	  	if ($program['department'] == $departmentName) { 
			$programsName=$program['program'];
        	echo "<a href=/courses/display/", $program['department'],"/", $program['program'],">$programsName</a>
			<br>"; 
		}
	 }	
	?>
	</div>
    </div>
			
<?php require_once 'app/views/templates/footer.php' ?>