@include('Front.layouts.header')
<div class="container">
<h1 style="margin:15px;color:red">Contact Us</h1>
 @if(Session::has('message'))
  <div data-alert class="alert-box text-black">
       {{Session::get('message')}}
  </div>
  @endif
<div class="row">
            <!-- Map Column -->
              <div class="col-lg-4 mb-2">
               <img src="img/banner2.jpg">  
            </div>
            <div class="col-lg-6 mb-4">
                <h3>Send us a Message</h3>
               
                <form action="{{route('contact')}}"  method="post">
                @csrf
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Full Name:</label>
                            <input type="text" class="form-control" id="name" name="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Phone Number:</label>
                            <input type="tel" class="form-control" id="phone" name="phone"  required data-validation-required-message="Please enter your phone number.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email Address:</label>
                            <input type="email" class="form-control" id="email" name="email" required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Message:</label>
                            <textarea rows="5" cols="50" class="form-control" id="message" name="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" name="send"  class="btn btn-primary btn-center">Send Message</button>
                </form>
            </div>
</div>
        </div>
@include('Front.layouts.footer')