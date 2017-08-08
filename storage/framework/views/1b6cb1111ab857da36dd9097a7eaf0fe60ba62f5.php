			<?php if($errors->any()): ?>
				<div class="form-group <?php echo e($errors->has('nama_kategori') ? 'has-error':'has-success'); ?>">
			<?php else: ?>
				<div class="form-group">
			<?php endif; ?>
				<?php echo Form::label('nama_kategori', 'Kategori', ['class' => 'control-label']); ?>

				<select name="nama_kategori" class="form-control Category">
					<option value="0" disabled="true" selected="true">- Kategori -</option>
					<?php foreach($kategori as $kat): ?>
						<option value="<?php echo e($kat->id); ?>"><?php echo e($kat->nama_kategori); ?></option>
					<?php endforeach; ?>
				</select>
				<?php if($errors->has('nama_kategori')): ?>
					<span class="help-block"><?php echo e($errors->first('nama_kategori')); ?></span>
				<?php endif; ?>
			</div>

			<?php if($errors->any()): ?>
				<div class="form-group <?php echo e($errors->has('nama_subkategori') ? 'has-error':'has-success'); ?>">
			<?php else: ?>
				<div class="form-group">
			<?php endif; ?>
				<?php echo Form::label('nama_subkategori', 'Sub Kategori', ['class' => 'control-label']); ?>


				<select name="nama_subkategori" class="form-control subCategory">
					<option value="0" disabled="true" selected="true">- Sub Kategori -</option>
				</select>
				<?php if($errors->has('nama_subkategori')): ?>
					<span class="help-block"><?php echo e($errors->first('nama_subkategori')); ?></span>
				<?php endif; ?>
			</div>

			<?php if($errors->any()): ?>
				<div class="form-group <?php echo e($errors->has('nama_barang') ? 'has-error':'has-success'); ?>">
			<?php else: ?>
				<div class="form-group">
			<?php endif; ?>
				<?php echo Form::label('nama_barang', 'Nama Barang', ['class' => 'control-label']); ?>

				<?php echo Form::text('nama_barang', null, ['class' => 'form-control']); ?>

				<?php if($errors->has('nama_barang')): ?> 
					<span class="help-block"><?php echo e($errors->first('nama_barang')); ?></span>
				<?php endif; ?>
			</div>

			<?php if($errors->any()): ?>
				<div class="form-group <?php echo e($errors->has('deskripsi') ? 'has-error':'has-success'); ?>">
			<?php else: ?>
				<div class="form-group">
			<?php endif; ?>
				<?php echo Form::label('deskripsi', 'Deskripsi', ['class' => 'control-label']); ?>

				<?php echo Form::text('deskripsi', null, ['class' => 'form-control']); ?>

				<?php if($errors->has('deskripsi')): ?> 
					<span class="help-block"><?php echo e($errors->first('deskripsi')); ?></span>
				<?php endif; ?>
			</div>

			<?php if($errors->any()): ?>
				<div class="form-group <?php echo e($errors->has('harga') ? 'has-error':'has-success'); ?>">
			<?php else: ?>
				<div class="form-group">
			<?php endif; ?>
				<?php echo Form::label('harga', 'Harga', ['class' => 'control-label']); ?>

				<?php echo Form::text('harga', null, ['class' => 'form-control']); ?>

				<?php if($errors->has('harga')): ?> 
					<span class="help-block"><?php echo e($errors->first('harga')); ?></span>
				<?php endif; ?>
			</div>

			<?php if($errors->any()): ?>
				<div class="form-group <?php echo e($errors->has('status') ? 'has-error':'has-success'); ?>">
			<?php else: ?>
				<div class="form-group">
			<?php endif; ?>
				<?php echo Form::label('status', 'Status Barang', ['class' => 'control-label']); ?>

				<div class="radio">
					<label><?php echo Form::radio('status', 'aktif'); ?>Aktif</label> 
				</div>
				<div class="radio">
					<label><?php echo Form::radio('status', 'non_aktif'); ?>Tidak Aktif</label> 
				</div>
				<?php if($errors->has('status')): ?> 
					<span class="help-block"><?php echo e($errors->first('status')); ?></span>
				<?php endif; ?>
			</div>

			<?php if($errors->any()): ?>
				<div class="form-group <?php echo e($errors->has('foto') ? 'has-error':'has-success'); ?>">
			<?php else: ?>
				<div class="form-group">
			<?php endif; ?>
				<?php echo Form::label('foto', 'Foto Produk', ['class' => 'control-label']); ?>

				<?php echo Form::file('foto'); ?>

				<?php if($errors->has('foto')): ?> 
					<span class="help-block"><?php echo e($errors->first('foto')); ?></span>
				<?php endif; ?> 
			</div>

			<?php echo Form::submit($buttonText, ['class' => 'btn btn-primary form-control']); ?>