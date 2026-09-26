<?php $this->load->view('customer/includes/header-apply.php'); ?>
<div class="section-sm bg-lend-blue pt-0 pb-0" id="home">
    <div class="container pt-5">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h1 class="fw-light text-light m-0">My Customers</h1>
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
<?php $this->load->view('customer/includes/footer-apply.php'); ?>
<script>
$(document).ready(function() {
    $('#myDatatable').DataTable({
        dom: 'Bfrtip',
        responsive: true,
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
    });
});
</script>