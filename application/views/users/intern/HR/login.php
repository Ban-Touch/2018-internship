
<style>
	img{
		width: 120px;
		height: auto;
	}
	body{
		background-image: url('https://images.unsplash.com/photo-1460602594182-8568137446ce?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=c6a89cf0d31c8ed23b35aaf9a119a9f5&auto=format&fit=crop&w=755&q=80');
	}
</style>

<br>
<br>
<br><br>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-4">

					<div class="card bg-light">
						<h5 class="card-header bg-info text-center">Login to Internship Follow up</h5>
						<div class="card-body">
							<div class="row">
								<div class="col-md-2"></div>
								<div class="col-md-8"><img src="<?php echo base_url();?>/assets/images/logo_login.png" alt="logo.png"></div>
								<div class="col-md-2"></div>
							</div>
							<br>
							<form>
								<div class="form-group">
									<!-- <label for="formGroupExampleInput">Example label</label> -->
									<input type="text" class="form-control" id="formGroupExampleInput" placeholder="Email">
								</div>
								<div class="form-group">
									<!-- 						        <label for="formGroupExampleInput2">Another label</label> -->
									<input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Password">
								</div>
								<div class="form-group">
									<label for="formGroupExampleInput2"><a class="text-dark" href="">Forget Password ?</a></label>
								</div>
								<br>
								<button class="btn btn-info float-right"><a class="text-white" href="<?php echo base_url();?>login/admin">Login</a></button>
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-4"></div>
			</div>
		</div>
	</div>
</div>