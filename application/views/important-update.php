<?php $this->load->view('includes/header.php');?>

<div class="section bg-lend-blue pt-0 pb-0" id="home">
	<div class="container pt-5">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h1 class="fw-light text-light m-0">Important Update</h1>
            </div>
            <div class="col-md-4">
                <img class="img-fluid" src="<?= base_url('assets/images/slider/link-page.png') ?>" alt="Career Image">
            </div>
        </div>
    </div>
</div>

<div class="single-blog-area pt-5 pb-5 inner-font-1 inner-blog-1" id="home">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 m-auto">
				<div class="single-blog-contents">
					<?php
					if(count($noteslist)) {
						foreach($noteslist as $row) {
							?>
							<div class="card mb-2">
								<div class="card-body py-4">
									<p class="text-bold text-primary"><?php echo displayDate($row->rec_date); ?><span class="badge bg-pale-blue text-dark ms-4"><?php echo $row->tags; ?></span></p>
									<?php
									echo $row->descriptions;
									?>
								</div>
							</div>
						<?php }
					}
					else {
						echo "<div class='card shadow-lg'>";
						echo "<div class='card-body'>";
						echo "<p class='text-center'><strong>No update as of now!</strong></p>";
						echo "</div>";
						echo "</div>";
					} ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('includes/footer.php');?>
