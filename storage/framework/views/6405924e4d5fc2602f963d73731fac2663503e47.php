<?php if(isset($user)): ?>
	<?php echo Form::hidden('id', $user->id); ?>

<?php endif; ?>

<?php if($errors->any()): ?>
	<div class="form-group <?php echo e($errors->has('name') ? 'has-error':'has-success'); ?>">
<?php else: ?>
	<div class="form-group">
<?php endif; ?>
	<?php echo Form::label('name', 'Nama', ['class' => 'control-label']); ?>

	<?php echo Form::text('name', null, ['class' => 'form-control']); ?>

	<?php if($errors->has('name')): ?>
		<span class="help-block"><?php echo e($errors->first('name')); ?></span>
	<?php endif; ?>
</div>

<?php if($errors->any()): ?>
	<div class="form-group <?php echo e($errors->has('email') ? 'has-error':'has-success'); ?>">
<?php else: ?>
	<div class="form-group">
<?php endif; ?>
	<?php echo Form::label('email', 'Email', ['class' => 'control-label']); ?>

	<?php echo Form::email('email', null, ['class' => 'form-control']); ?>

	<?php if($errors->has('email')): ?>
		<span class="help-block"><?php echo e($errors->first('email')); ?></span>
	<?php endif; ?>
</div>

<?php if($errors->any()): ?>
	<div class="form-group <?php echo e($errors->has('level') ? 'has-error':'has-success'); ?>">
<?php else: ?>
	<div class="form-group">
<?php endif; ?>
	<?php echo Form::label('level', 'Level', ['class' => 'control-label']); ?>

	<div class="radio">
		<label><?php echo Form::radio('level', 'Kasir'); ?> Kasir</label>
	</div>
	<div class="radio">
		<label><?php echo Form::radio('level', 'Pelayan'); ?> Pelayan</label>
	</div>
	<div class="radio">
		<label><?php echo Form::radio('level', 'Admin'); ?> Admin</label>
	</div>
	<?php if($errors->has('level')): ?>
		<span class="help-block"><?php echo e($errors->first('level')); ?></span>
	<?php endif; ?>
</div>

<?php if($errors->any()): ?>
	<div class="form-group <?php echo e($errors->has('password') ? 'has-error':'has-success'); ?>">
<?php else: ?>
	<div class="form-group">
<?php endif; ?>
	<?php echo Form::label('password', 'Password', ['class' => 'control-label']); ?>

	<?php echo Form::password('password', ['class' => 'form-control']); ?>

	<?php if($errors->has('password')): ?>
		<span class="help-block"><?php echo e($errors->first('password')); ?></span>
	<?php endif; ?>
</div>

<?php if($errors->any()): ?>
	<div class="form-group <?php echo e($errors->has('password_confirmation') ? 'has-error':'has-success'); ?>">
<?php else: ?>
	<div class="form-group">
<?php endif; ?>
	<?php echo Form::label('password_confirmation', 'Password Confirmation', ['class' => 'control-label']); ?>

	<?php echo Form::password('password_confirmation', ['class' => 'form-control']); ?>

	<?php if($errors->has('password_confirmation')): ?>
		<span class="help-block"><?php echo e($errors->first('password_confirmation')); ?></span>
	<?php endif; ?>
</div>

<div class="form-group">
	<?php echo Form::submit($buttonText, ['class' => 'btn btn-primary form-control']); ?>

</div>