		<!--=====Footer start=======-->
<footer>
	<div class="bg-black py-4">	
		<div class="container">
			<div class="row align-items-center g-2 g-lg-3">
				<div class="col-12 col-md-6 text-center text-md-start">
					<p class="font-14">CIN NO.: <?= COMPANY_CIN; ?></p>
				</div>
				<div class="col-12 col-md-6 text-center text-md-end">
					<p><?= date('Y') ?> ©
					<?= COMPANY_NAME; ?>. All Rights Reserved.</p>
				</div>
			</div><!-- end row -->
		</div><!-- end container -->
	</div>
</footer>
<!--=====Footer end=======-->
		
		<script src="<?= base_url('assets/plugins/jquery.min.js') ?>"></script>
		<script src="<?= base_url('assets/plugins/plugins.js') ?>"></script>
		<script src="<?= base_url('assets/js/functions.js') ?>"></script>
		<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
		<script src="<?=base_url('assets/js/main.js')?>"></script>
		<!-- Datatables Scripts -->
		<script src="<?=base_url('assets/plugins/datatables/js/datatables.min.js')?>" type="text/javascript"></script>
		<script src="<?=base_url('assets/plugins/datatables/js/jszip.min.js')?>" type="text/javascript"></script>
		<script src="<?=base_url('assets/plugins/datatables/js/pdfmake.min.js')?>" type="text/javascript"></script>
		<script src="<?=base_url('assets/plugins/datatables/js/vfs_fonts.js')?>" type="text/javascript"></script>
		<script src="<?=base_url('assets/plugins/datatables/js/buttons.html5.min.js')?>" type="text/javascript"></script>
		<script src="<?=base_url('assets/plugins/datatables/js/buttons.print.min.js')?>" type="text/javascript"></script>
	</body>
</html>
