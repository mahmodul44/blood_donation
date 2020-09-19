@include('Front.layouts.header')

<h1 style="margin:15px;color:red">Gallery</h1>
<div class="container-fluid ">
<div class="row">
  @foreach($gallery as $galleries)
<div class="col-sm-4">
<div class="card" style="">

    <img width="100%" src="gallery/{{$galleries->photo}}">
    <div class="card-body">
     
      <p class="card-text">{{$galleries->description}}</p>
 
    </div>
  </div>
</div>
@endforeach

</div>
</div>
@include('Front.layouts.footer')