@extends('layouts.master')

@section('content')
<div class="col-md-8 content">
	  <form method="POST" action="#">
			@csrf
	<h2>Welcome {{ $user->first_name }} {{ $user->last_name }}</h2>

	<div class="form-group" style="padding-top:20px;">
    <label class="col-sm-2 control-label" style="padding-top:5px;">First Name</label>
    <div class="col-sm-10">
      <input class="form-control" name="first_name" id="focusedInput" type="text" value="{{ $user->first_name}}" required>
    </div>
  </div>
</br>
<div class="form-group" style="padding-top:20px;">
	<label class="col-sm-2 control-label" style="padding-top:5px;">Last Name</label>
	<div class="col-sm-10">
		<input class="form-control" name="last_name" id="focusedInput" type="text" value="{{ $user->last_name}}" required>
	</div>
</div>
</br>

<div class="form-group" style="padding-top:20px;">
	<label class="col-sm-2 control-label" style="padding-top:5px;">Mobile no.</label>
	<div class="col-sm-10">
		<input class="form-control" name="phone_no" id="focusedInput" type="text" value="{{ $user->phone_no}}" required>
	</div>
</div>
</br>
<div class="form-group" style="padding-top:20px;">
	<label class="col-sm-2 control-label" style="padding-top:5px;">Email</label>
	<div class="col-sm-10">
		<input class="form-control" readonly id="focusedInput" type="text" value="{{ $user->email}}" required>
	</div>
</div>
</br>


	<div class="form-group" style="padding-top:20px;">
    <label class="col-sm-2 control-label" style="padding-top:5px;">Street Address</label>
    <div class="col-sm-10">
      <input class="form-control" name="street_address" id="focusedInput" type="text" value="{{ $user->street_address}}" required>
    </div>
  </div>
</br>
	<div class="form-group" style="padding-top:20px;">
    <label class="col-sm-2 control-label" style="padding-top:5px;">Shipping Address</label>
    <div class="col-sm-10">
      <input class="form-control" name="shipping_address" id="focusedInput" type="text" value="{{ $user->shipping_address}}" required>
    </div>
  </div>
</br>



<div class="form-group" style="padding-top:20px;">
	<div class="col-sm-10" align='center'>
		<button type="submit" class="btn btn-primary">
			Submit
		</button>
	</div>
</div>
</br>



</form>





</div>
@endsection('')
