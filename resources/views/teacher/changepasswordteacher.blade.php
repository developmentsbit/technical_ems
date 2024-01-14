@extends('teacher.index')
@section('content')
<div class="content-body">

	<div class="container-fluid mt-3">


		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Change Password</h4>
					 
					 
					 <form method="post" action="{{ url('upchangepasswordteacher') }}">
					     
					     @csrf
					     
					     <div class="row">
					         <div class="form-group col-md-6 mt-4">
                          <label>Old Password</label>
                          <input type="text"  autocomplete="off"  class="form-control" readonly="" value="{{ Auth('teacher')->user()->show_password }}">
                         </div>
					     </div>
                         
                         <div class="row">
                             <div class="form-group col-md-6">
                                 <label>New Password</label>
                          <input type="text"  autocomplete="off"  class="form-control" name="password">
                             </div>
                             <br>
                             
                             <div class="form-group col-md-12">
                             <button type="submit" class="btn btn-success">Update Password</button>
                             </div>
                             
                         </div>
					     
					 </form>
					
			
					</div>
				</div>
			</div>

		</div>


		@endsection









