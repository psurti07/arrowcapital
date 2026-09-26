<?php $this->load->view('customer/includes/header-apply'); ?>
<div class="page-hero page-hero-inner-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-hero-haddig text-center">
                        <h1 class="text-dark">My Loan Applications History</h1>
                    </div>
                </div>
            </div>
        </div>
      </div>
<div class="pricing-area pricing2 section-padding2">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="single-price">
					<div class="price-body">
						<div class="table-responsive">
						<table id="myDatatable" class="table table-hover tbl-responsive">
							<thead>
								<tr class="cart-head">
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
										echo "<td>".formatePriceIndia($row->loanamount)."</td>";
										echo "<td>".htmlentities($row->cibilscore)."</td>";
										echo "<td>".htmlentities($row->loanpurpose)."</td>";
										echo "<td>".htmlentities($row->loantenure)."</td>";

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
