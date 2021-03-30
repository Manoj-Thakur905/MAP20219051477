<?php require_once 'app/views/templates/headerPublic.php'?>
<main role="main" class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
                <h1>Enter to move forward You should enter Correct Details</h1>
				
				<?php if ($_SESSION['failedAuth'])
				echo '<P> TRY AGAIN </P>'; 
				if($data['message']){?>
					<?= $data['message'];?>
				<?php }
				?>
		
            </div>
        </div>
    </div>

<div class="row">
    <div class="col-sm-auto">
		<form action="/login/verify" method="post" >
		<fieldset>
			<div class="form-group">
				<label for="name">Username</label>
				<input required type="text"  name="Enter username">
			</div>
			<div class="form-group">
				<label for="name">Password</label>
				<input required type="password" name="Enter password">
			</div>
		  <button type="submit" class="btn btn-primary">Enter</button>
			<p>
				<a href = "/register">New Account Registration</a> 
			</p>
		</fieldset>
		</form> 
	</div>
</div>
    <?php require_once 'app/views/templates/footer.php' ?>