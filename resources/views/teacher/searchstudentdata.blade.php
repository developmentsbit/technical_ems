

@extends('teacher.index')
@section('content')



<div class="content-body">
	<div class="container-fluid mt-3">

		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Students</h4>
					
					<div class="col-md-12 p-0">
					    <form>
					        <textarea class="form-control" rows="3" placeholder="Message..." required></textarea>
					        <button type="submit" class="btn btn-success btn-sm">Send Message</button>
					    </form>
					</div>
					<div class="table-responsive">
						<table class="table table-striped table-bordered zero-configurations">
							<thead>
								<tr>
									<th>SL.</th>
									<th>Student Roll</th>
									<th>Student Name</th>
									<th>Student Number</th>
								</tr>
							</thead>
							<tbody>
                                
                                
                                @php
                                  $i = 1;
                                @endphp
                                
								@if(isset($data))
								@foreach($data as $d)
								<tr>
									<td><input type="checkbox"> &nbsp;&nbsp;{{ $i++ }}</td>
									<td>{{ $d->diploma_board_roll }}</td>
									<td>{{ $d->students_name_en }} -- {{ $d->students_name_bn }}</td>
									<td>{{ $d->mobile_no }}</td>
								</tr>

								@endforeach
								@endif

							</table>
						</div>
					</div>
				</div>
			</div>
			
					</div>
			</div>
			
			
	@endsection