			@if($errors->any())
				<div class="form-group {{ $errors->has('nama_kategori') ? 'has-error':'has-success' }}">
			@else
				<div class="form-group">
			@endif
				{!! Form::label('nama_kategori', 'Kategori', ['class' => 'control-label']) !!}
				<select name="nama_kategori" class="form-control Category">
					<option value="0" disabled="true" selected="true">- Kategori -</option>
					@foreach($kategori as $kat)
						<option value="{{ $kat->id }}">{{ $kat->nama_kategori }}</option>
					@endforeach
				</select>
				@if($errors->has('nama_kategori'))
					<span class="help-block">{{ $errors->first('nama_kategori') }}</span>
				@endif
			</div>

			@if($errors->any())
				<div class="form-group {{ $errors->has('nama_subkategori') ? 'has-error':'has-success' }}">
			@else
				<div class="form-group">
			@endif
				{!! Form::label('nama_subkategori', 'Sub Kategori', ['class' => 'control-label']) !!}

				<select name="nama_subkategori" class="form-control subCategory">
					<option value="0" disabled="true" selected="true">- Sub Kategori -</option>
				</select>
				@if($errors->has('nama_subkategori'))
					<span class="help-block">{{ $errors->first('nama_subkategori') }}</span>
				@endif
			</div>

			@if($errors->any())
				<div class="form-group {{ $errors->has('nama_barang') ? 'has-error':'has-success' }}">
			@else
				<div class="form-group">
			@endif
				{!! Form::label('nama_barang', 'Nama Barang', ['class' => 'control-label']) !!}
				{!! Form::text('nama_barang', null, ['class' => 'form-control']) !!}
				@if($errors->has('nama_barang')) 
					<span class="help-block">{{ $errors->first('nama_barang') }}</span>
				@endif
			</div>

			@if($errors->any())
				<div class="form-group {{ $errors->has('deskripsi') ? 'has-error':'has-success' }}">
			@else
				<div class="form-group">
			@endif
				{!! Form::label('deskripsi', 'Deskripsi', ['class' => 'control-label']) !!}
				{!! Form::text('deskripsi', null, ['class' => 'form-control']) !!}
				@if($errors->has('deskripsi')) 
					<span class="help-block">{{ $errors->first('deskripsi') }}</span>
				@endif
			</div>

			@if($errors->any())
				<div class="form-group {{ $errors->has('harga') ? 'has-error':'has-success' }}">
			@else
				<div class="form-group">
			@endif
				{!! Form::label('harga', 'Harga', ['class' => 'control-label']) !!}
				{!! Form::text('harga', null, ['class' => 'form-control']) !!}
				@if($errors->has('harga')) 
					<span class="help-block">{{ $errors->first('harga') }}</span>
				@endif
			</div>

			@if($errors->any())
				<div class="form-group {{ $errors->has('status') ? 'has-error':'has-success' }}">
			@else
				<div class="form-group">
			@endif
				{!! Form::label('status', 'Status Barang', ['class' => 'control-label']) !!}
				<div class="radio">
					<label>{!! Form::radio('status', 'aktif') !!}Aktif</label> 
				</div>
				<div class="radio">
					<label>{!! Form::radio('status', 'non_aktif') !!}Tidak Aktif</label> 
				</div>
				@if($errors->has('status')) 
					<span class="help-block">{{ $errors->first('status') }}</span>
				@endif
			</div>

			@if($errors->any())
				<div class="form-group {{ $errors->has('foto') ? 'has-error':'has-success' }}">
			@else
				<div class="form-group">
			@endif
				{!! Form::label('foto', 'Foto Produk', ['class' => 'control-label']) !!}
				{!! Form::file('foto') !!}
				@if($errors->has('foto')) 
					<span class="help-block">{{ $errors->first('foto') }}</span>
				@endif 
			</div>

			{!! Form::submit($buttonText, ['class' => 'btn btn-primary form-control']) !!}