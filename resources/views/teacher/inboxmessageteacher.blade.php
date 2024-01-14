@extends('teacher.index')
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
									<th>Student Info.</th>
									<th>Message</th>
								</tr>
							</thead>
							<tbody>

								@if(isset($data))
								@foreach($data as $d)
								<tr>
									<td>{{ $d->date }}</td>
									<td>
										Name-- <span class="text-success">{{ $d->students_name_en }}</span><br>
										Department-- <span class="text-success">{{ $d->department_name }}</span><br>
										Semester-- <span class="text-success">{{ $d->semester }}</span><br>
										Section-- <span class="text-success">{{ $d->section }}</span><br>
										Shift-- <span class="text-success">{{ $d->shift }}</span><br>
									</td>
									<td>
										{{ $d->message }}
										<br><br>
										<form method="post" action="{{ url("replyteachermessage") }}">
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









