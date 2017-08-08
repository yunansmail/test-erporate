<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=#bs-example-navbar-collapse-1 aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="{{ url('/') }}" class="navbar-brand">TestCodeErporate</a>
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
			@if(!empty($halaman) && $halaman == 'produk')
				<li class="active"><a href="{{url('produk') }}">Produk<span class="sr-only">(current)</span></a></li>
			@else
				<li><a href="{{ url('produk') }}">Produk</a></li>
			@endif

			@if(Auth::check() && Auth::user()->level == 'Admin')
			@if(!empty($halaman) && $halaman == 'user')
				<li class="active"><a href="{{url('user') }}">User Management<span class="sr-only">(current)</span></a></li>
			@else
				<li><a href="{{ url('user') }}">User Management</a></li>
			@endif
			@endif
			</ul>

			<ul class="nav navbar-nav navbar-right">
			@if(Auth::check())
				<li><a href="{{ url('logout') }}">{{ Auth::user()->name }}</a></li>
			@else
			
			@if(!empty($halaman) && $halaman == 'login')
				<li class="active"><a href="{{ url('login') }}"><span class="glyphicon glyphicon-log-in"></span> Login<span class="sr-only">(current)</span></a></li>
			@else
				<li><a href="{{ url('login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
			@endif
			@endif
			</ul>
		</div>
	</div>
</nav>