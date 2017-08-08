<?php $__env->startSection('main'); ?>
	<div id="produk">
		<div class="container">
    		<div class="row">
        		<div class="col-md-8 col-md-offset-2">
            		<div class="panel panel-default">
                		<div class="panel-heading"><strong>Tambah Data Produk</strong></div>
                		<div class="panel-body">

							<?php echo Form::open(['url' => 'produk', 'files' => true]); ?>

								<?php echo $__env->make('partials.form', ['buttonText' => 'Tambah Produk'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
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