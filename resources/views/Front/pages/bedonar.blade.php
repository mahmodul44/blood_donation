@include('Front.layouts.header')
<div  class="container">

	     @if(Session::has('message'))
  <div data-alert class="alert-box text-success">
       {{Session::get('message')}}
  </div>
  @endif
<h1 style="margin:15px;color:red">Become Blood Donar</h1>
</div>
<div class="container">
<form action="{{route('front_bedonarinsert')}}" method="post">
{{csrf_field()}}
<div class="row">
<div class="col-lg-4 mb-4">
<div class="font-italic">Full Name<span style="color:red">*</span></div>
<div><input type="text" name="fullname" class="form-control" required></div>
</div>
<div class="col-lg-4 mb-4">
<div class="font-italic">Mobile Number<span style="color:red">*</span></div>
<div><input type="text" name="mobileno" class="form-control" required></div>
</div>
<div class="col-lg-4 mb-4">
<div class="font-italic">Email Id</div>
<div><input type="email" name="emailno" class="form-control"></div>
</div>
</div>

<div class="row">
<div class="col-lg-4 mb-4">
<div class="font-italic">Age<span style="color:red">*</span></div>
<div><input type="text" name="age" class="form-control" required></div>
</div>


<div class="col-lg-4 mb-4">
<div class="font-italic">Gender<span style="color:red">*</span></div>
<div><select name="gender" class="form-control" required>
<option value="">Select</option>
<option value="Male">Male</option>
<option value="Female">Female</option>
</select>
</div>
</div>

<div class="col-lg-4 mb-4">
<div class="font-italic">Blood Group<span style="color:red">*</span> </div>
<div><select name="bloodgroup" class="form-control" required>
<option>select</option>
<option value="A+">A+</option>
<option value="B+">B+</option>
<option value="O+">O+</option>
<option value="AB+">AB+</option>
<option value="A-">A-</option>
<option value="B-">B-</option>
<option value="O-">O-</option>
<option value="AB-">AB-</option>

</select>
</div>
</div>
</div>


<div class="row">
<div class="col-lg-4 mb-4">
<div class="font-italic">Last Date Of Donation<span style="color:red">*</span></div>
<div><input type="date" name="dod" class="form-control" required></div>
</div>

<div class="col-lg-4 mb-4">
<div class="font-italic">Address</div>
<div><textarea class="form-control" name="address"></textarea></div>
</div>

<div class="col-lg-4 mb-4">
<div class="font-italic">Message<span style="color:red">*</span></div>
<div><textarea class="form-control" name="message" required> </textarea></div>
</div>
</div>

<div class="row">
<div class="col-lg-4 mb-4">
<div><input type="submit" name="submit" class="btn btn-primary" value="submit" style="cursor:pointer"></div>
</div>


</div>

</form>   
        
</div>
</div>
@include('Front.layouts.footer')