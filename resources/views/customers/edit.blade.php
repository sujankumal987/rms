@extends('layouts.app')

@section('title', 'customer | RMS')

@section('content')

<div class="row align-items-start mr-4">
      <div class="col-xs-12 col-md-4 mt-4 p-4">
        <span class="text-aligncenter"><b>Customer Details</b></span><br>
        <p class="text-aligncenter mt-2 text-gray">Edit your cutomer details here.</p></div>
      <div class="col-xs-12 col-md-8  mt-4 bg-white">
        <form class="p-4">
            <div class="mb-3">
              <label for="exampleInputtext" class="form-label">Customer Name</label>
              <input type="text" class="form-control" id="customername" placeholder="enter your name">
              <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
            </div>
            <div class="mb-3">
                <label for="exampleInputtext" class="form-label">Customer Mobile</label>
                <input type="number" class="form-control" id="customermobile" placeholder="enter your mobile number" min="0">
                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
            </div>
            <div class="mb-3">
                <label for="exampleInputtext" class="form-label">Customer Email</label>
                <input type="email" class="form-control" id="email" placeholder="enter your email">
                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
            </div>
            <div class="mb-3">
                <label for="exampleTextarea" class="form-label">Shipping Address</label>
                <textarea class="form-control" id="shippingaddress" rows="2"placeholder="enter your address" required></textarea>
                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
            </div>
            <div class="mb-3">
                <div class="form-row">
                    <div class="col">
                    <label for="exampleTextarea" class="form-label">City</label>
                      <input type="text" class="form-control" placeholder="City">
                    </div>
                    <div class="col">
                        <label for="exampleTextarea" class="form-label">pincode</label>
                      <input type="number" class="form-control" placeholder="zipcode"  min="0">
                    </div>
                  </div>
            </div>

            <a href="/customers" class="btn btn-secondary mb-2">Go Back</a>
            <button type="submit" class="btn btn-success mb-2">Save</button>
        </form>
    </div>
</div>


<div class="row align-items-start  mt-4 mr-4">
              <div class="col-xs-12 col-md-4  mt-4 p-4">
                <span class="text-aligncenter"><b>Order Details</b></span><br>
                <p class="text-aligncenter mt-2 text-gray">Last Seen At Aug 14, 2022,4:20 PM.</p>
              </div>
            <div class="col-xs-12 col-md-8  mt-4 bg-white mb-4">
                <form class="p-4">
                    <div class="mb-3">
                      <label for="exampleInputtext" class="form-label">Order Count</label>
                      <input type="number" class="form-control" id="ordercount" placeholder="number of order"value="1" min="0">
                      <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputtext" class="form-label">Order Value</label>
                        <input type="number" class="form-control" id="ordervalue" placeholder="number of value"  min="0">
                        <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                      </div>
                    <a href="/customers" class="btn btn-secondary mb-2">Go Back</a>
                    <button type="submit" class="btn btn-success mb-2">Save</button>
                </form>
              </div>
    </div>
@endsection
