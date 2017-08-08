<?php if(Session::has('pesan_flash')): ?>
	<div class="alert alert-success <?php echo e(Session::has('penting') ? 'alert-important':''); ?>">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<?php echo e(Session::get('pesan_flash')); ?>

	</div>
<?php endif; ?>