<?php $__env->startSection('main'); ?>
	<div id="user">
		<h2>Edit User</h2>
		<?php echo Form::model($user, ['method' => 'PATCH', 'action' => ['UserController@update', $user->id]]); ?>

			<?php echo $__env->make('partials.form_user', ['buttonText' => 'Update User'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<?php echo Form::close(); ?>

	</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
	<?php echo $__env->make('partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>