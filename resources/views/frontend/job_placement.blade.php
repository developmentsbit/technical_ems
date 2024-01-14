@extends('frontend.index')
@section('content')

<style>
.tabs {
  display: flex;
  flex-wrap: wrap;
  margin-top: 12px;
}
.tabs > section {
  order: 999;
  width: 100%;
  display: none;
}
.tabs > input {
  opacity: 0;
  position: absolute;
}
.tabs > input[type="radio"]:checked + label {
  background: yellow;
}
.tabs > input[type="radio"]:checked + label + section {
  display: unset;
}

.tabs > label {
  padding: 0.5em 1em;
  background: #b4d5e4;
  border-right: 1px solid #798f99;
}
.tabs > label:last-of-type {
  border-right: none;
}
.tabs > input[type="radio"]:checked + label {
  background: #798f99;
}

.tabs section {
  border: 1px #798f99 solid;
  border-top: 5px #798f99 solid;
  padding: 1em;
}
</style>
    <div class="container">
        <div class="col-sm-12 col-12 pt-2">
            <div class='tabs'>
            <h2>@include ('error.msg')</h2>
            <!-- Add Infomation & Content -->
            <input type="radio" name="tab" id="tab1" role="tab" checked>
            <label for="tab1" id="tab1-label">Add Infomation</label>
                <section aria-labelledby="tab1-label">
                    <form method="post" action="{{url('job_replace')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-3 col-form-label">Name :</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputPassword" name="name" placeholder="Name" required="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-3 col-form-label">Roll :</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="roll" id="inputPassword" placeholder="Roll" required="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-3 col-form-label">Session :</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="session" id="session" placeholder="Session" required="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-3 col-form-label">Department:</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="department_id" id="department_id" required="">
                                    @if(isset($department))
                                    @foreach($department as $d)
                                    <option value="{{ $d->id }}">@if($lang == 'en'){{ $d->department }}@else {{$d->department_name_bn}}@endif</option>
                                    @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-3 col-form-label">Designation /Job Title:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="job_title" name="job_title" placeholder="Job Title" required="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-3 col-form-label">Company / Organization :</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="institute" name="institute" placeholder="Company/Organization" required="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-3 col-form-label">Phone :</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputPassword" name="phone" placeholder="Phone" required="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-3 col-form-label">Details :</label>
                            <div class="col-sm-9">
                                <textarea rows="5" class="form-control" name="details" placeholder="Details"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-3 col-form-label">Picture</label>
                            <div class="col-sm-9">
                                <input type="file" name="image" class="form-control" id="inputPassword">
                            </div>
                        </div>
                        <br><br>
                        <input type="submit" name="" value="SUBMIT" class="btn btn-success" style="width: 120px;">
                    </form>
                </section>
            
            <!-- Job Placement & Content -->
            <input type="radio" name="tab" id="tab2" role="tab">
            <label for="tab2" id="tab2-label">Job Placement</label>
            <section aria-labelledby="tab2-label">
                <table id="dtBasicExample" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Organization</th>
                            <th>Designation</th>
                            <th>Phone</th>
                            <th>Picture</th>
                        </tr>
                    </thead>
                    <tbody>
                    @php
                    $sl=1;
                    @endphp
                    @if($data)
                    @foreach($data as $showdata)
                
                    <tr>
                        <td><a href="{{url('/job-placement-data')}}/{{$showdata->roll}}" style="color:black;text-decoration: none;">{{$sl++}}</a></td>
                        <td><a href="{{url('/job-placement-data')}}/{{$showdata->roll}}" style="color:black;text-decoration: none;">{{$showdata->name}}</a></td>
                        <td><a href="{{url('/job-placement-data')}}/{{$showdata->roll}}" style="color:black;text-decoration: none;">{{$showdata->institute}}</a></td>
                        <td><a href="{{url('/job-placement-data')}}/{{$showdata->roll}}" style="color:black;text-decoration: none;">{{$showdata->job_title}}</a></td>
                        <td><a href="{{url('/job-placement-data')}}/{{$showdata->roll}}" style="color:black;text-decoration: none;">{{$showdata->phone}}</a></td>
                        <td><a href="{{url('/job-placement-data')}}/{{$showdata->roll}}" style="color:black;text-decoration: none;"><img src="{{asset('job_replacement_img')}}/{{$showdata->roll}}.{{$showdata->img}}" style="height: 100px;width: 100px"></a></td>                
                    </tr>
                    
                    @endforeach
                    @endif
                    </tbody>
                </table>
            </section>
        </div>
        </div>
    </div>
@endsection
