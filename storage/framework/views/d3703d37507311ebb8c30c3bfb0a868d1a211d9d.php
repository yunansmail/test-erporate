<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=#bs-example-navbar-collapse-1 aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="<?php echo e(url('/')); ?>" class="navbar-brand">TestCodeErporate</a>
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
			<?php if(!empty($halaman) && $halaman == 'produk'): ?>
				<li class="active"><a href="<?php echo e(url('produk')); ?>">Produk<span class="sr-only">(current)</span></a></li>
			<?php else: ?>
				<li><a href="<?php echo e(url('produk')); ?>">Produk</a></li>
			<?php endif; ?>

			<?php if(Auth::check() && Auth::user()->level == 'Admin'): ?>
			<?php if(!empty($halaman) && $halaman == 'user'): ?>
				<li class="active"><a href="<?php echo e(url('user')); ?>">User Management<span class="sr-only">(current)</span></a></li>
			<?php else: ?>
				<li><a href="<?php echo e(url('user')); ?>">User Management</a></li>
			<?php endif; ?>
			<?php endif; ?>
			</ul>

			<ul class="nav navbar-nav navbar-right">
			<?php if(Auth::check()): ?>
				<li><a href="<?php echo e(url('logout')); ?>"><?php echo e(Auth::user()->name); ?></a></li>
			<?php else: ?>
			
			<?php if(!empty($halaman) && $halaman == 'login'): ?>
				<li class="active"><a href="<?php echo e(url('login')); ?>"><span class="glyphicon glyphicon-log-in"></span> Login<span class="sr-only">(current)</span></a></li>
			<?php else: ?>
				<li><a href="<?php echo e(url('login')); ?>"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
			<?php endif; ?>
			<?php endif; ?>
			</ul>
		</div>
	</div>
</nav>