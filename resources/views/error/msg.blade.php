@if(Session::has('success'))


<div class="container-fluid">
	<div class="alert alert-success alert-dismissible fade show" role="alert" style="padding: 15px;">
		{{Session::get('success')}}
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
</div>

@endif


@if(Session::has('error'))

<div class="container-fluid">
	<div class="alert alert-danger alert-dismissible fade show" role="alert" style="padding: 15px;">
		{{Session::get('error')}}
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
</div>


@endif

@if(Session::has('update'))

<div class="container-fluid">
	<div class="alert alert-primary alert-dismissible fade show" role="alert" style="padding: 15px;">
		{{Session::get('update')}}
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
</div>

@endif

@if (count($errors) > 0)

<div class="container-fluid">
	<div class="col-md-12">
			<div class="alert alert-warning alert-dismissible fade show" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		<ul>
			@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
		
	</div>

</div>

@endif

<div class="alert alert-danger" id="msg" style="display: none;">



</div>