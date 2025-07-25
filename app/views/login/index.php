<?php require_once 'app/views/templates/headerPublic.php'?>
<main role="main" class="container">
    <div class="page-header" id="banner">
			<br>
        <div class="row">
            <div class="col-lg-12">
                <h1>You are not logged in</h1>
							<br>
            </div>
        </div>
    </div>

<div class="row">

    <div class="col-sm-auto">
		<form action="/login/verify" method="post" >
		<fieldset>
			<div class="form-group">
				<label for="username">Username</label>
				<input required type="text" class="form-control" name="username">
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input required type="password" class="form-control" name="password">
			</div>
            <br>
		    <button type="submit" class="btn btn-primary">Log in</button>
		</fieldset>

			<?php if (isset($success) && $success != ""  ) { ?>
				<br>																							
				<div class="row">
					<div class="col">
							<div class="alert alert-success" role="alert">
								<?= $success ?>
						</div>
						</div>
							</div>
				<?php } ?>
	
			<?php if (isset($failed) && $failed != "" ) { ?>
				<br>
				<div class="row">
					<div class="col">
							<div class="alert alert-danger" role="alert">
								<?= $failed ?>
						</div>
						</div>
							</div>
				<?php } ?>

						
		</form> 
			<br>

			<div class="row">
					<div class="col-lg-12">
							<h4>Don't have an account?</h4>
					</div>
			</div>
		<form action="/signup" method="post" >
			<button type="submit" class="btn btn-secondary">Sign Up</button>
		</form>
 <br>
		
	</div>
</div>
	</div>
	</main>
    <?php require_once 'app/views/templates/footer.php' ?>
