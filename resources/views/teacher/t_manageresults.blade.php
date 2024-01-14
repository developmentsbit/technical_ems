


@extends('teacher.index')
@section('content')
<div class="content-body">

	<div class="container-fluid mt-3">






		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Manage Results</h4>
					<div class="table-responsive">
						<table class="table table-striped table-bordered zero-configuration">
							<thead>
								<tr>
									<th>Date</th>
									<th>Department Info</th>
									<th>Subject</th>
									<th>Title</th>
									<th>File</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>

								@if(isset($data))
								@foreach($data as $d)
								<tr>
									<td>{{ $d->date }}</td>
									<td>
										Department-- <span class="text-success">{{ $d->department_name }}</span><br>
										Semester-- <span class="text-success">{{ $d->semester }}</span><br>
										Section-- <span class="text-success">{{ $d->section }}</span><br>
										Shift-- <span class="text-success">{{ $d->shift }}</span><br>
									</td>
									<td>{{ $d->subName }}</td>
									<td>{{ $d->title }}</td>
									<td><a href="{{ url($d->image) }}" download="" class="btn btn-success btn-sm">Download</a></td>
									<td><a onclick="return confirm('Are you sure?')" href="{{ url("deletet_results/".$d->id) }}" class="btn btn-danger btn-sm">Delete</a>
									<a href="{{ url("editt_results/".$d->id) }}" class="btn btn-info btn-sm">Edit</a>
								</td>
								</tr>

								@endforeach
								@endif

							</table>
						</div>
					</div>
				</div>
			</div>

		</div>


		@endsection









