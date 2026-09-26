<?php $this->load->view('includes/header.php'); ?>
<!--=====faq 2 end=======-->
<div class="faq sp4">
	<div class="container">
		<div class="row">
			<div class="col-lg-7 m-auto text-center">
				<div class="hadding2 text-center">
					<h1>FAQs</h1>
				</div>
			</div>
		</div>
		<div class="space40"></div>

		<div class="row">
			<div class="col-lg-9 m-auto">
				<div class="accordion" id="accordionExample">
					<?php
					if (count($faqlist)) {
						$cnt = 1;
						foreach ($faqlist as $row) {
							$acc_heading = "headingOne" . $cnt;
							$acc_collapse = "collapseOne" . $cnt;
							?>
							<div class="accordion-item accordion-item">
								<h2 class="accordion-header accordion-header2" id="<?php echo $acc_heading; ?>">
									<button class="accordion-button accordion-button3" type="button" data-bs-toggle="collapse"
										data-bs-target="#<?php echo $acc_collapse; ?>" aria-expanded="false"
										aria-controls="<?php echo $acc_collapse; ?>">
										<?php echo $row->faq_question; ?>
									</button>
								</h2>
								<div id="<?php echo $acc_collapse; ?>" class="accordion-collapse collapse"
									aria-labelledby="<?php echo $acc_heading; ?>" data-bs-parent="#accordionExample">
									<div class="accordion-body accordion-body2">
										<?php echo $row->faq_answer; ?>
									</div>
								</div>
							</div>
							<?php $cnt++;
						}
					} ?>
				</div>
			</div>
		</div>
	</div>
</div>

<!--=====faq 2 end=======-->

<?php $this->load->view('includes/footer.php'); ?>
