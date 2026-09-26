<!--=====Footer start=======-->
<div class="section-sm bg-black py-2">
	<div class="container py-2">
		<div class="row align-items-center">
			<div class="col-12 col-md-6 text-center text-md-start">
				<p class="small">LLP NO : <?= COMPANY_LLP; ?></p>
			</div>
			<div class="col-12 col-md-6 text-center text-md-end">
				<p  class="small"><?= date('Y') ?> &copy; <?= COMPANY_NAME; ?>. All Rights Reserved.</p>
			</div>
		</div><!-- end row -->
	</div><!-- end container -->
</div>
<!--=====Footer end=======-->

<script src="<?= base_url('assets/plugins/jquery.min.js') ?>"></script>
<script src="<?= base_url('assets/plugins/plugins.js') ?>"></script>
<script src="<?= base_url('assets/js/functions.js') ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>		
<!-- font awesome script -->
</body>
</html>

<script>const base_url = '<?=base_url() ?>'</script>
<script>
	$(document).ready(function(){
		$(document).ready(function() {
			$('#loanamount, #monincome, #monemi, #monthlyincome, #cardamount').on('input', function() {
				var inputVal = $(this).val();
				inputVal = inputVal.replace(/\D/g, '');
				inputVal = inputVal.slice(0, 8);
				$(this).val(inputVal);
			});

			$('#mobileno, #mobile').on('input', function() {
				var inputVal = $(this).val();
				inputVal = inputVal.replace(/\D/g, '');
				inputVal = inputVal.slice(0, 10);
				$(this).val(inputVal);
			});

			$('#cardnumber').on('input', function() {
				var inputVal = $(this).val();
				inputVal = inputVal.replace(/\D/g, '');
				inputVal = inputVal.slice(0, 16);
				$(this).val(inputVal);
			});

		});
	})
</script>
