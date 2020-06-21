@extends('layouts.app')

@section('content')
  <div id="offers-page">
    <div class="content-box">
      <div class="row">
        <div class="col-md-12">
          <h1>Sign Up to Notifications for Deals</h1>
          <form>
            <div class="row">
              <div class="col-md-6">
                 <div class="form-group">
                  <label for="firstnameinput">First Name</label>
                  <input type="text" class="form-control" id="firstnameinput" name="fname" placeholder="name@example.com">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="lastnameinput">Last Name</label>
                  <input type="text" class="form-control" id="lastnameinput" name="lname" placeholder="(222)-222-2222">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                 <div class="form-group">
                  <label for="emailinput">Email address</label>
                  <input type="email" class="form-control" id="emailinput" name="email" placeholder="name@example.com">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="phoneinput">Phone Number</label>
                  <input type="text" class="form-control" id="phoneinput" placeholder="(222)-222-2222">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6"></div>
              <div class="col-md-6"></div>
            </div>
            <div class="form-group">
              <button type="button" class="btn btn-primary">Confirm</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection