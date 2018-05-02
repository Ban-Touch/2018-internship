
<!-- body -->
<div class="container con-body">
	<h3 class="text-primary text-center"><strong>Student List</strong></h3>
	<div class="row"><br><br>
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<table id="example" class="table table-striped table-bordered" style="width:100%">
				<thead class="text-center">
					<tr>
						<th>ID</th>
						<th>Student Name</th>
						<th>Comment</th>
						
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="text-center">1</td>
						<td>Devit Chea</td>
						
						<td class="text-center">
							
							<a href="<?php echo base_url();?>tutorDas/CommStuDas">
								<i class="mdi  mdi-comment text-primary" style="font-size:24px;"></i>
							</a>
							
						</td>
					</tr>
					<tr>
						<td class="text-center">2</td>
						<td>Ashton Cox</td>
						
						<td class="text-center">
							
							<a href="<?php echo base_url();?>tutorDas/CommStuDas" onclick = "return confirm('Do you want to edit information in this Student?')">
								<i class="mdi  mdi-comment text-primary" style="font-size:24px;"></i>
							</a>
							
						</td>
					</tr>
					<tr>
						<td class="text-center">3</td>
						<td>Ashton Cox</td>
						
						<td class="text-center">
							
							<a href="<?php echo base_url();?>tutorDas/CommStuDas" onclick = "return confirm('Do you want to edit information in this Student?')">
								<i class="mdi  mdi-comment text-primary" style="font-size:24px;"></i>
							</a>
							
						</td>
					</tr>
					<tr>
						<td class="text-center">4</td>
						<td>Devit Chea</td>
						
						<td class="text-center">
							
							<a href="<?php echo base_url();?>tutorDas/CommStuDas" onclick = "return confirm('Do you want to edit information in this Student?')">
								<i class="mdi mdi-comment text-primary" style="font-size:24px;"></i>
							</a>
							
						</td>
					</tr>
					<tr>
						<td class="text-center">5</td>
						<td>Devit Chea</td>
						
						<td class="text-center">
							
							<a href="<?php echo base_url();?>tutorDas/CommStuDas" onclick = "return confirm('Do you want to edit information in this Student?')">
								<i class="mdi  mdi-comment text-primary" style="font-size:24px;"></i>
							</a>
							
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="col-md-2"></div>
		
	</div>
	
</div>

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">

<script>
	$(document).ready(function() {
		$('#example').DataTable();
	} );
</script>