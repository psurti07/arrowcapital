<?php $this->load->view('customer/includes/header-apply.php'); ?>

<div class="section-sm bg-lend-blue pt-0 pb-0" id="home">
	<div class="container pt-5">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h1 class="fw-light text-light m-0">My Loan Applications History</h1>
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
					<div class="table-responsive">
						<table id="myDatatable" class="table table-hover tbl-responsive">
							<thead>
								<tr>
									<th>#</th>
									<th>Date</th>
									<th>Loan Type</th>
									<th>Amount</th>
									<th>CIBIL Score</th>
									<th>Loan Purpose</th>
									<th>Tenure</th>
									<th>Details</th>
								</tr>
							</thead>
							<tbody>
								<?php
									$cnt = 1;
									foreach($loanhistory as $row) {
										echo "<tr>";
										echo "<td>".$cnt."</td>";
										echo "<td>".displayDate($row->rec_date)."</td>";

										if($row->loantype == 11) {
											echo "<td>Personal Loan</td>";
										}
										else if($row->loantype == 12) {
											echo "<td>Business Loan</td>";
										}
										else {
											echo "<td>-</td>";
										}
										$enc_id = '';
										$enc_id = stringCrypt($row->id, 'encrypt');
										echo "<td>".formatePriceIndia($row->loanamount ?? '')."</td>";
										echo "<td>".htmlspecialchars($row->cibilscore ?? '')."</td>";
										echo "<td>".htmlspecialchars($row->loanpurpose ?? '')."</td>";
										echo "<td>".htmlspecialchars($row->loantenure ?? '')."</td>";

										echo "<td class='text-center' width='50'>".anchor("customer/loan/appdetails/{$enc_id}",'<i class="fa fa-info-circle"></i>','class="btn btn-circle btn-soft-primary btn-sm"')."</td>";

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
