
@extends('student.index')
@section('content')

@php

$teacher = DB::table("teachers_information")->get();


@endphp


<div class="content-body">
	<div class="container-fluid mt-3">


		<div class="col-lg-12">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Send Message</h4><br>
					<div class="basic-form">
						<form method="post" class="row" action="{{ url("insertsendmessage") }}" enctype="multipart/form-data">

							@csrf

							<div class="form-group col-md-12">
								<label>Teacher:</label>
								<select  name="teacher_id" class="form-control" required="">
									<option value="">Select Teacher</option>
									@if(isset($teacher))
									@foreach($teacher as $d)

									<option value="{{ $d->id }}">{{ $d->teachers_name }}</option>

									@endforeach
									@endif
								</select>
							</div>



							<div class="form-group col-md-12">
								<label>Details:</label>
								<textarea class="form-control" rows="10" name="message"></textarea>
							</div>


							<div class="form-group col-md-12">
								<button type="submit" class="btn btn-dark">Send Now</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>







	</div>
</div>

@endsection