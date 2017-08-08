<?php $__env->startSection('main'); ?>
	<div id="user">
	<div id="produk">
		<div class="container">
    		<div class="row">
        		<div class="col-md-8 col-md-offset-2">
            		<div class="panel panel-default">
                		<div class="panel-heading"><strong>Tambah Data User</strong></div>
                		<div class="panel-body">
						<?php echo Form::open(['url' => 'user']); ?>

							<?php echo $__env->make('partials.form_user', ['buttonText' => 'Tambah User'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
						<?php echo Form::close(); ?>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
	<?php echo $__env->make('partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>