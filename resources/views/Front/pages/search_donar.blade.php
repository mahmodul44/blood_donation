@include('Front.layouts.header')
<div  class="container">
<h1 style="margin:15px">Search Blood Donar</h1>
</div>
<div class="container">
<!-- <form name="donar" action="{{url::to('view_donar')}}" method="post">
{{csrf_field()}}
<div class="row">

<div class="col-lg-4 mb-4">
<div class="font-italic">Blood Group<span style="color:red">*</span> </div>
<div>
<select class="form-control">
<option value="">Select Blood Group</option>
@foreach($search_donar as $search)

<option name="query" value="{{$search->bloodgroup}}">{{$search->bloodgroup}}</option>
@endforeach
</select>
</div>
</div>


<div class="col-lg-4 mb-4">
<div class="font-italic">Location </div>
<div><textarea class="form-control" name="location"></textarea></div>
</div>

</div>

<div class="row">
<div class="col-lg-4 mb-4">
<div><input type="submit" name="submit" class="btn btn-primary" value="submit" style="cursor:pointer"></div>
</div>
</div>
      
</form>   -->
<form action="{{url::to('view_donar')}}" class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" name="query" type="search" placeholder="Search blood group" aria-label="Search" required>
      <select  name="location" class="form-control mr-sm-2">
      <option value="">Search your location</option> 
      <option value="rangpur">rangpur </option>
      <option value="dhaka">dhaka</option>
      </select>
      <!-- <input class="form-control mr-sm-2" name="location" type="search" placeholder="type location" aria-label="Search" required> -->
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>

    </form> 
</div>
<br>
@include('Front.layouts.footer')