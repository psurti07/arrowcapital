<?php $this->load->view('customer/includes/header-apply.php'); ?>

<div class="section-sm bg-lend-blue pt-0 pb-0" id="home">
	<div class="container pt-5">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h1 class="fw-light text-light m-0">My Customers Loan History</h1>
            </div>
            <div class="col-md-4">
                <img class="img-fluid" src="<?= base_url('assets/images/slider/link-page.png') ?>" alt="Career Image">
            </div>
        </div>
    </div>
</div>

<div class="section-xl bg-gray">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="bg-white border-radius-1 box-shadow p-5">
					<div class="price-body">
						<table id="myDatatable" class="table table-hover dt-responsive">
							<thead>
								<tr>
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
<?php $this->load->view('customer/includes/footer-apply.php'); ?>
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
