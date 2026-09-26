<?php $this->load->view('customer/includes/header-apply'); ?>
<div class="page-hero page-hero-inner-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-hero-haddig text-center">
                        <h1 class="text-dark">My Customers</h1>
                    </div>
                </div>
            </div>
        </div>
</div>
<div class="pricing-area pricing2 section-padding2 bg5">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="single-price">
					<div class="price-body">
						<table id="myDatatable" class="table table-hover dt-responsive">
							<thead>
								<tr class="cart-head">
									<th>#</th>
									<th>Registration</th>
									<th>Name</th>
									<th>Mobile</th>
									<th>Email Id</th>
									<th>City</th>
									<th>Payout</th>
									<th>Pay Date</th>
								</tr>
							</thead>
							<tbody>
								<?php
									$cnt = 1;
									foreach($refuserlist as $row) {
										echo "<tr>";
										echo "<td>".$cnt."</td>";
										echo "<td>".displayDate($row->rec_date)."</td>";
										echo "<td class='text-capitalize'>".htmlentities($row->fullname)."</td>";
										echo "<td>".htmlentities($row->mobile)."</td>";
										echo "<td>".htmlentities($row->email)."</td>";
										echo "<td>".htmlentities($row->city)."</td>";

										if($row->payout == 1) {
											echo "<td class='text-success'>Approved</td>";
										}
										else if($row->payout == 2) {
											echo "<td class='text-danger'>Rejected</td>";
										}
										else if($row->payout == 3) {
											echo "<td class='text-info'>Pending</td>";
										}
										else if($row->payout == 4) {
											echo "<td class='text-warning'>Hold</td>";
										}
										else {
											echo "<td>-</td>";
										}

										echo "<td>";
										if($row->payout_date != NULL) { echo displayDate($row->payout_date); }
										echo "</td>";

										echo "</tr>";
										$cnt++;
									}
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('customer/includes/footer-apply'); ?>
<script>
	$(document).ready(function() {
		$('#myDatatable').DataTable( {
			dom: 'Bfrtip',
			responsive: true,
			buttons: [
				'copyHtml5',
				'excelHtml5',
				'csvHtml5',
				'pdfHtml5'
			]
		} );
	} );
</script>
