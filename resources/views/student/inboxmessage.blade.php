@extends('student.index')
@section('content')
<div class="content-body">

	<div class="container-fluid mt-3">


		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">All Message</h4>
					<div class="table-responsive">
						<table class="table table-striped table-bordered zero-configuration">
							<thead>
								<tr>
									<th>Date</th>
									<th>Teacher Info.</th>
									<th>Message</th>
								</tr>
							</thead>
							<tbody>

								@if(isset($data))
								@foreach($data as $d)
								<tr>
									<td>{{ $d->date }}</td>
									<td>
										Name-- <span class="text-success">{{ $d->teachers_name }}</span><br>
										Department-- <span class="text-success">{{ $d->department_name }}</span><br>
										
									</td>
									<td>
										{{ $d->message }}
										<br><br>
										<form method="post" action="{{ url("replystudentmessage") }}">
											@csrf
											<input type="hidden" name="to" value="{{ $d->from }}">
											<textarea id="messagebox" placeholder="Reply Message..." name="message" class="form-control" rows="2" required=""></textarea><br>
											<button type="submit" class="btn btn-dark btn-sm">Send Now</button>
										</form>
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









