<option value="">Select One</option>
@if($upazila)
@foreach($upazila as $viewupazila)
<option value="{{$viewupazila->id}}">{{$viewupazila->upazila_name}}</option>
@endforeach
@endif