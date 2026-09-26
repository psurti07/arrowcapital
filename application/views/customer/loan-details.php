<?php $this->load->view('customer/includes/header-apply'); ?>
<div class="section-sm bg-lend-blue pt-0 pb-0" id="home">
	<div class="container pt-5">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h1 class="fw-light text-light m-0">My Loan Applications Details</h1>
            </div>
            <div class="col-md-4">
                <img class="img-fluid" src="<?= base_url('assets/images/slider/link-page.png') ?>" alt="Career Image">
            </div>
        </div>
    </div>
</div>

<div class="section-md bg-gray">
	<div class="pricing-area pricing2 section-padding2">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<?php
					switch($appdetails->status) {
						case "5":
							echo '<div role="alert" class="alert alert-info"> Your application is reopen again for process. Please contact customer care for more details.</div>';
							break;

						case "4":
							echo '<div role="alert" class="alert alert-warning"> Your application is under query processing. Please contact customer care for more details.</div>';
							break;

						case "3":
							echo '<div role="alert" class="alert alert-danger"> Your application has been completely rejected. Please contact customer care for more details.</div>';
							break;

						case "2":
							echo '<div role="alert" class="alert alert-success"> Your application has been approved. Please contact customer care for more details.</div>';
							break;

						default:
							break;
					}
					?>
				</div>
				<div class="col-lg-6">
					<div class="bg-white border-radius-1 box-shadow p-4 mb-4">
						<div class="price-body">
							<ul class="list-unstyled text-dark">
								<li><i class="bi bi-check pe-2"></i><b class="float-left">Loan Date :&nbsp;</b><?php echo displayDate($appdetails->rec_date); ?> </li>
								<li><i class="bi bi-check pe-2"></i><b class="float-left">Loan Type :&nbsp;</b><?php
										if($appdetails->loantype == 11) {
											echo 'Personal Loan';
										} else if($appdetails->loantype == 12) {
											echo 'Business Loan';
										}
										?></li>
								<li><i class="bi bi-check pe-2"></i><b class="float-left">Loan Amount :</b>&nbsp;<?php echo formatePriceIndia($appdetails->loanamount); ?></li>
								<li><i class="bi bi-check pe-2"></i><b class="float-left">Loan Tenure :</b>&nbsp;<?php echo $appdetails->loantenure; ?></li>
								<li><i class="bi bi-check pe-2"></i><b class="float-left">Loan Purpose :</b>&nbsp;<?php echo $appdetails->loanpurpose; ?></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="bg-white border-radius-1 box-shadow p-4 mb-5">
						<div class="price-body">
							<ul class="list-unstyled text-dark">
								<li><i class="bi bi-check pe-2"></i><b class="float-left">CIBIL Score :&nbsp;</b><?php echo $appdetails->cibilscore; ?> </li>
								<li><i class="bi bi-check pe-2"></i><b class="float-left">Income :&nbsp;</b><?php echo formatePriceIndia($appdetails->income); ?></li>
								<li><i class="bi bi-check pe-2"></i><b class="float-left">Current EMI :&nbsp;</b><?php echo $appdetails->currentemi; ?></li>
								<li><i class="bi bi-check pe-2"></i><b class="float-left">EMI Bounce :&nbsp;</b><?php
										if($appdetails->emibounce == 0) {
											echo 'No';
										} else if($appdetails->emibounce == 1) {
											echo 'Yes';
										} else {
											echo '-';
										} ?>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="bg-white border-radius-1 box-shadow p-5">
						<div class="price-body">
							<table id="myDatatable" class="table table-hover dt-responsive">
								<thead>
									<tr>
										<th></th>
										<th>Status</th>
										<th>Date</th>
										<th>Bank</th>
										<th>Remarks</th>
										<th>Details</th>
									</tr>
								</thead>
								<tbody>
									<?php
										if(count($statuslist)) {
											foreach ($statuslist as $row) {
												echo "<tr class='table-".$row->colorclass."'>";
												echo "<td></td>";

												echo "<td><strong>".htmlentities($row->statusname)."</strong></td>";
												echo "<td>".displayDate($row->statusdate).' '.displayTime($row->rec_date)."</td>";
												echo "<td>".htmlentities($row->bank_name)."</td>";
												echo "<td>".htmlentities($row->remarks)."</td>";

												echo "<td width='200'>";
												if($row->loanamount > 0) { echo "Loan Amount - ".formatePriceIndia($row->loanamount); }

												if($row->loanroi != "") { echo "<br/>ROI - ".htmlentities($row->loanroi); }

												if($row->loanterms != "") { echo "<br/>Terms - ".htmlentities($row->loanterms); }

												if($row->processfees > 0) { echo "<br/>Process Fees - ".htmlentities($row->processfees); }

												if($row->insurance != "") { echo "<br/>Insurance - ".htmlentities($row->insurance); }

												if($row->monthlyemi > 0) { echo "<br/>Monthly EMI - ".htmlentities($row->monthlyemi); }
												echo "</td>";

												echo "</tr>";
											}
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
