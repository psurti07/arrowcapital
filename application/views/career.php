<?php $this->load->view('includes/header.php'); ?>
<div class="contact5 sp4">
	<div class="container">
		<div class="row">
			<div class="col-lg-7 m-auto text-center">
				<div class="hadding2 text-center">
					<h1>Rewarding & Progressive Career</h1>
				</div>
			</div>
		</div>
		<div class="col-12 mt-5">
			<div class="cart-items">
				<table class="table table-borderless">
					<tbody>
						<tr class="cart-head">
							<th class="table-product">Job Title</th>
							<th class="table-price">Job Time</th>
							<th class="table-quantity">Job Code</th>
							<th class="table-subtotal">Apply</th>
						</tr>
						<?php if (count($openinglist)) {
							$cnt = 1;
							foreach ($openinglist as $row) { ?>
								<tr class="cart-product-list">
									<td width="40%">
										<div class="cart-prodct">
											<div class="cart-product-details">
												<p><?php echo $row->title; ?></p>
											</div>
										</div>
									</td>
									<td class="cart-price" width="20%">Full time</td>
									<td width="20%">
										<div class="cart-product">
											<div class="cart-product-details">
												<p><?php echo $row->slug; ?></p>
											</div>
										</div>
									</td>
									<td class="cart-price" width="20%"><a
											href="<?php echo site_url('apply/career/' . $row->slug); ?>"
											class="btn btn-success btn-sm">Apply Now</a></td>
								</tr>
								<?php $cnt++;
							}
						} else { ?>
							<tr class="cart-product-list">
								<td colspan="4"><strong>Unfortunately, we currently do not have any openings.

										Please share your updated resume at <a
											href='mailto:hr@cashindia.in'>hr@cashindia.in</a>. <br/>We will contact you if
										your profile matches any of our future requirements. </strong></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<?php $this->load->view('includes/footer.php'); ?>
