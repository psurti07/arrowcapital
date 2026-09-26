<?php $this->load->view('includes/header');?>
<!--=====service start=======-->
<div class="contact5 sp4">
		<div class="container">
			<div class="row">
					<div class="col-lg-7 m-auto text-center">
						<div class="hadding2 text-center">
						<h1>Important Updates</h1>
						</div>
					</div>
			</div>
            <div class="col-lg-12">
              <div class="">
			  <?php
				if(count($noteslist)) {
					foreach($noteslist as $row) {
					?>
                		<div class="service1-box" style="border:unset">
							<div class="hadding1 text-start">
								<p><?php echo displayDate($row->rec_date); ?></p>
								<p><?php echo $row->tags; ?></p>
								<p><?php echo $row->descriptions; ?></p>
							</div>
                		</div>
				<?php } } else {?>
					<div class="service1-box" style="border:unset">
							<div class="hadding1">
								<h3 class="text-center"> <strong>No update as of now! </strong></h3>
							</div>
                		</div>
					<?php } ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--=====service end=======-->
<?php $this->load->view('includes/footer');?>
