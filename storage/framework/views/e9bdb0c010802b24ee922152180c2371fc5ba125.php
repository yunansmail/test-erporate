<?php $__env->startSection('main'); ?>
	<div id="produk">
		<h2>Detil Produk</h2>
		<table class="table table-striped">
			<tr>
				<th>Kategori</th>
				<td><?php foreach($kategori as $kat): ?> <?php echo e($kat['nama_kategori']); ?> <?php endforeach; ?></td>
			</tr>
			<tr>
				<th>Sub Kategori</th>
				<td><?php foreach($subkategori as $kat): ?> <?php echo e($kat['nama_subkategori']); ?> <?php endforeach; ?></td>
			</tr>
			<tr>
				<th>Nama Barang</th>
				<td><?php echo e($produk->nama_barang); ?></td>
			</tr>
			<tr>
				<th>Deskripsi</th>
				<td><?php echo e($produk->deskripsi); ?></td>
			</tr>
			<tr>
				<th>Harga</th>
				<td>Rp <?php echo e($produk->harga); ?></td>
			</tr>
			<tr>
				<th>Status</th>
				<td><?php echo e($produk->status); ?></td>
			</tr>
			<tr>
				<th>Foto Produk</th>
				<td><img src="<?php echo e(asset('fotoupload/'.$produk->foto)); ?>"</td>
			</tr>
		</table>
		<?php echo e(link_to('produk', 'Kembali', ['class' => 'btn btn-primary'])); ?>

	</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
	<?php echo $__env->make('partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>