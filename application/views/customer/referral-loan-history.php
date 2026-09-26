<?php $this->load->view('customer/includes/header-apply'); ?>
<div class="page-hero page-hero-inner-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-hero-haddig text-center">
                        <h1 class="text-dark">My Customers Loan History</h1>
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
									<th>Date</th>
									<th>Name</th>
									<th>Loan Type</th>
									<th>Loan Amount</th>
									<th>Loan tenure</th>
									<th>Loan Purpose</th>
									<th>Status</th>
								</tr>
							</thead>
							<tbody>
								<?php
									$cnt = 1;
									foreach($loanhistory as $row) {
										echo "<tr>";
										echo "<td>".$cnt."</td>";
										echo "<td>".displayDate($row->rec_date)."</td>";
										echo "<td class='text-capitalize'>".htmlentities($row->fullname)."</td>";

										if($row->loantype == 11) {
											echo "<td>Personal Loan</td>";
										}
										else if($row->loantype == 12) {
											echo "<td>Business Loan</td>";
										}
										else {
											echo "<td>-</td>";
										}

										echo "<td>".formatePriceIndia($row->loanamount)."</td>";
										echo "<td>".htmlentities($row->loantenure)."</td>";
										echo "<td>".htmlentities($row->loanpurpose)."</td>";

										if($row->status == 1) {
											echo "<td class='text-warning'>New</td>";
										}
										else if($row->status == 2) {
											echo "<td class='text-success'>Approve</td>";
										}
										else if($row->status == 3) {
											echo "<td class='text-danger'>Rejected</td>";
										}
										else {
											echo "<td>-</td>";
										}
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
