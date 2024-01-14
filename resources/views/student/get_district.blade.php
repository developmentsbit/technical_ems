<option value="">Select One</option>
@if($district)
@foreach($district as $viewdistrict)
<option value="{{$viewdistrict->id}}">{{$viewdistrict->district_name}}</option>
@endforeach
@endif