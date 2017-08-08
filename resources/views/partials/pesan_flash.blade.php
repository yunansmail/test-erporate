@if(Session::has('pesan_flash'))
	<div class="alert alert-success {{ Session::has('penting') ? 'alert-important':'' }}">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		{{ Session::get('pesan_flash') }}
	</div>
@endif