@extends('layouts.app')

@section('content')
  <div id="waitlist-page">
    <div class="content-box">
      <div class="row">
        <div class="col-md-6">
          <h1>Get On The List</h1>
          <form>
            <div class="form-group">
              <label for="emailinput">Email address</label>
              <input type="email" class="form-control" id="emailinput" name="email" placeholder="name@example.com">
            </div>
            <div class="form-group">
              <label for="phoneinput">Phone Number</label>
              <input type="text" class="form-control" id="phoneinput" name="phone" placeholder="(222)-222-2222">
            </div>
            <div class="form-group">
              <label for="guestinput">How Many Guest?</label>
              <select class="form-control" name="guest" id="guestinput">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </div>
            <div class="form-group">
              <label for="timeinput">What Time?</label>
              <select class="form-control" name="time" id="timeinput">
                <option value="6">6:00 PM</option>
                <option value="7">7:00 PM</option>
                <option value="8">8:00 PM</option>
                <option value="9">9:00 PM</option>
                <option value="10">10:00 PM</option>
              </select>
            </div>
            <div class="form-group">
              <button type="button" class="btn btn-primary">Confirm</button>
            </div>
          </form>
        </div>
        <div class="col-md-6">
          <p>Please Note: This is not a reservation. You will be added to the current waitlist. You may have a short wait once you arrive while we prepare your table.</p>
        </div>
      </div>
    </div>
  </div>
@endsection