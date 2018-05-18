
<div class="container">
	<div class="row">
		<div class="col-md-2">
			<a href="<?php echo base_url(); ?>supervisor/student">
				<button type="button" class="btn btn-primary">
					<i class="mdi mdi-chevron-left"></i>Back
				</button>
			</a>
		</div>
		<div class="col-md-8">
			<h3 class="text-center text-primary"><strong>Student Profile</strong></h3>
		</div>
	</div>
	<br>
	<div class="row bg-white">
		<?php foreach ($student as $student):?>
		<div class="col-md-1"></div>
		<div class="col-md-4 text-center "><br>
			<img class="user userSupervisor"  src="<?php echo base_url(); ?>assets/images/studentpiture.jpg" alt="" style="height: 260px; margin-top: 17px; padding: 10px;"><br>

			<label for=""><?php echo $student['firstname']; ?></label>
			<label for=""><?php echo $student['lastname']; ?></label>
		</div>
		<div class="col-md-6">
			
				<table><br>
					<tr>
						<td> 
							<div class="form-group">
								<label>First Name</label>
							</div> 
						</td>
						<td> </td>
						<td>
							<div class="form-group">
								<span class="font-weight-bold"><?php echo $student['firstname']; ?></span>
							</div>
						</td>
					</tr>
					<tr>
						<td> 
							<div class="form-group">
								<label>Last Name</label>
							</div> 
						</td>
						<td> </td>
						<td>
							<div class="form-group">
								<span class="font-weight-bold" ><?php echo $student['lastname']; ?></span>
							</div>
						</td>
					</tr>
					<tr>
						<td> 
							<div class="form-group">
								<label>Company Website</label>
							</div> 
						</td>
						<td> </td>
						<td>
							<div class="form-group">
								<!-- <a href="#"><?php echo $student['url']; ?></a> -->
								<a href="#">www.codingget.com</a>
							</div>
						</td>
					</tr>
					<tr>
						<td> 
							<div class="form-group">
								<label>Tutor By</label>
							</div> 
						</td>
						<td> </td>
						<td>
							<div class="form-group">
								<!-- <label><?php echo $student['tutorName']; ?></label> -->
								<label>Rady Y</label>
							</div>
						</td>
					</tr>
					<tr>
						<td> 
							<div class="form-group">
								<label>Batch</label>
							</div> 
						</td>
						<td> </td>
						<td>
							<div class="form-group">
								<span class="font-weight-bold"><?php echo $student['batch']; ?></span>
							</div>
						</td>
					</tr>
					<tr>
						<td> 
							<div class="form-group">
								<label>Year</label>
							</div> 
						</td>
						<td> </td>
						<td>
							<div class="form-group">
								<span class="font-weight-bold"><?php echo $student['year']; ?></span>
							</div>
						</td>
					</tr>
					<tr>
						<td> 
							<div class="form-group">
								<label for="email">Eamil School</label>
							</div> 
						</td>
						<td> </td>
						<td>
							<div class="form-group">
								<a href="#"><?php echo $student['schoolemail']; ?></a>
							</div>
						</td>
					</tr>
					<tr>
						<td> 
							<div class="form-group">
								<label for="email">Eamil Personal</label>
							</div> 
						</td>
						<td> </td>
						<td>
							<div class="form-group">
								<a href="#"><?php echo $student['peremail'] ?></a>
							</div>
						</td>
					</tr>
					<tr>
						<td> 
							<div class="form-group">
								<label for="email">Phone Number</label>
							</div> 
						</td>
						<td> </td>
						<td>
							<div class="form-group">
								<span class="font-weight-bold"><?php echo $student['phone']; ?></span>
							</div>
						</td>
					</tr>
				</table>
		</div>
		<?php endforeach ?>
	</div>
</div>