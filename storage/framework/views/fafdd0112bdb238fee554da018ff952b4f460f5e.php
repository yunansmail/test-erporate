<?php $__env->startSection('main'); ?>
	<div id="produk">
		<h2>Daftar Produk</h2>
		<?php echo $__env->make('partials.pesan_flash', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

		<?php if(count($produk) > 0): ?>
			<?php foreach($produk->chunk(3) as $productChunk): ?>
			<div class="row">
				<?php foreach($productChunk as $product): ?>
  				<div class="col-sm-6 col-md-4">
    				<div class="thumbnail">
      					<img src="<?php echo e(asset('fotoupload/'.$product->foto)); ?>" alt="..." class="img-responsive">
      					<div class="caption">
        					<h3><?php echo e($product->nama_barang); ?></h3>
        					<p class="description"><?php echo e($product->deskripsi); ?></p>
        					<div class="clearfix">
        						<div class="pull-left price">Rp <?php echo e($product->harga); ?></div>
        						<div class="pull-right">
        						<?php if(Auth::check() && Auth::user()->level != 'Kasir'): ?>
        							<div class="act-button">
        								<a href="<?php echo e(url('produk/'.$product->id)); ?>" class="btn btn-success" role="button">Show</a>
        							</div>
        							<div class="act-button">
        								<a href="<?php echo e(url('produk/'.$product->id.'/edit')); ?>" class="btn btn-warning" role="button">Edit</a>
        							</div>
        							<div class="act-button"> 
        								<?php echo Form::open(['method' => 'DELETE', 'action' => ['ProdukController@destroy', $product->id]]); ?>

        									<?php echo Form::submit('Delete', ['class' => 'btn btn-danger']); ?>

        								<?php echo Form::close(); ?>

        							</div>
        						<?php else: ?>
        							<a href="<?php echo e(url('addToCart'.$product->id)); ?>" class="btn btn-success pull-right" role="button">Add To Cart</a>
        						<?php endif; ?>
        						</div>
        					</div>
      					</div>
    				</div>
  				</div>
				<?php endforeach; ?>
			</div>
			<?php endforeach; ?>
		<?php else: ?>
			<p>Belum ada daftar produk.</p>
		<?php endif; ?>

		<?php if(Auth::check()): ?>
			<?php if(Auth::user()->level == 'Pelayan' || Auth::user()->level == "Admin"): ?>
				<div class="bottom-nav">
					<?php echo e(link_to('produk/create', 'Tambah Produk', ['class' => 'btn btn-primary'])); ?>

				</div>
			<?php endif; ?>
		<?php endif; ?>
	
	</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
	<?php echo $__env->make('partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>