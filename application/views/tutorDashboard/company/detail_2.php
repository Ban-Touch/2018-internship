
<div class="container">
	<a href="<?php echo base_url();?>tutorDas/detailCompany2">
		<button class="btn btn-primary">
			<i class="mdi mdi-chevron-left mdi-15px text-white"></i>Back
		</button>
	</a>
	<br>
	<br>
	<div class="row bg-white">
		<div class="col-md-6" id="col-md-6">
			<br>
			<?php foreach ($company as $company):?>
				
			<h3 class="text-center"><?php echo $company['name']; ?></h3>
			<div class="card-body">
				<form class="form" role="form" autocomplete="off">
					<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label">Company name</label>
						<div class="col-lg-9">
							<p><?php echo $company['name']; ?></p>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label">Description</label>
						<div class="col-lg-9">
							<p><?php echo $company['itemdescription']; ?></p>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label">Postal Address</label>
						<div class="col-lg-9">
							<p><?php echo $company['postaladdress']; ?></p>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label">Phone</label>
						<div class="col-lg-9">
							<p><?php echo $company['phone']; ?></p>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label">Website</label>
						<div class="col-lg-9">
							<p><?php echo $company['url']; ?></p>
						</div>
					</div>
				</form>
			</div>
			<?php endforeach ?>
		</div>
		<div class="col-md-4">
			<br>
			<h3 class="text-center">Maps</h3>
			<br>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3909.01419335054!2d104.88086341424142!3d11.550839347581286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310951add5e2cd81%3A0x171e0b69c7c6f7ba!2sPasserelles+num%C3%A9riques+Cambodia+(PNC)!5e0!3m2!1sen!2skh!4v1525250678472" width="500" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</div>
</div>
