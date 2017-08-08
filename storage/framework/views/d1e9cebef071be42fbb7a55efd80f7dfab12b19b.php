<?php $__env->startSection('main'); ?>
	<div id="produk">
		<h2>Edit Produk</h2>
		<?php echo Form::model($produk, ['method' => 'PATCH', 'files' => true, 'action' => ['ProdukController@update', $produk->id]]); ?>

			<?php echo $__env->make('partials.form', ['buttonText' => 'Update Produk'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<?php echo Form::close(); ?>

	</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
	<?php echo $__env->make('partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>