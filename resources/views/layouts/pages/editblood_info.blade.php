@extends('layouts.master')
@section('content')

<div  class="container">
<h1 style="margin:15px">Update Blood Donar Info</h1>
</div>
<div class="container">
<form action="{{route('updateblood_info',$bedonar->id)}}" method="POST">
{{csrf_field()}}
<div class="row">
<div class="col-lg-4 mb-4">
<div class="font-italic">Full Name<span style="color:red">*</span></div>
<div><input type="text" name="fullname" class="form-control" value="{{$bedonar->fullname}}"></div>
</div>
<div class="col-lg-4 mb-4">
<div class="font-italic">Mobile Number<span style="color:red">*</span></div>
<div><input type="text" name="mobileno" class="form-control" value="{{$bedonar->mobileno}}"></div>
</div>
<div class="col-lg-4 mb-4">
<div class="font-italic">Email Id</div>
<div>
<input type="email" name="emailno" class="form-control" value="{{$bedonar->emailno}}"></div>
</div>
</div>

<div class="row">
<div class="col-lg-4 mb-4">
<div class="font-italic">Age<span style="color:red">*</span></div>
<div><input type="text" name="age" class="form-control" value="{{$bedonar->age}}"></div>
</div>


<div class="col-lg-4 mb-4">
<div class="font-italic">Gender<span style="color:red">*</span></div>
<div><select name="gender" class="form-control" >
<option value="{{$bedonar->gender}}">{{$bedonar->gender}}</option>
<option value="Male">Male</option>
<option value="Female">Female</option>
</select>
</div>
</div>

<div class="col-lg-4 mb-4">
<div class="font-italic">Blood Group<span style="color:red">*</span> </div>
<div>
<select name="bloodgroup" class="form-control">
<option value="{{$bedonar->bloodgroup}}">{{$bedonar->bloodgroup}}</option>
<option value="A+">A+</option>
<option value="B+">B+</option>
<option value="O+">O+</option>
<option value="AB+">AB+</option>
</select>
</div>
</div>
</div>


<div class="row">
	<div class="col-lg-4 mb-4">
<div class="font-italic">Last Date of Donation</div>
<div><input class="form-control" name="dod" value="{{$bedonar->dod}}"></div>
</div>
<div class="col-lg-4 mb-4">
<div class="font-italic">Address</div>
<div><textarea class="form-control" name="address" value="{{$bedonar->address}}">{{$bedonar->address}}</textarea></div>
</div>

<div class="col-lg-4 mb-4">
<div class="font-italic">Message<span style="color:red">*</span></div>
<div><textarea class="form-control" name="message" value="{{$bedonar->message}}"> {{$bedonar->message}}</textarea></div>
</div>
</div>

<div class="row">
<div class="col-lg-4 mb-4">
<div><input type="submit" name="submit" class="btn btn-primary" value="Update" style="cursor:pointer"></div>
</div>


</div>

</form>   
        
</div>
</div>
@endsection