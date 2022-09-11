@extends('layouts.app')
@section('title', 'Productedit | RMS')
@section('content')


<div class="p-4">
    <div class="row align-items-start">
      <div class="col-xs-12 col-md-4  ">
        <span class="text-aligncenter"><b>Product Details</b></span><br>
        <p class="text-aligncenter mt-2 text-gray">Edit your product details here. Product <br> name should be unique.</p>        </div>
      <div class="col-xs-12 col-md-8   bg-white">
        <form class="p-4">
            <div class="mb-3">
              <label for="exampleInputtext" class="form-label">Product Name</label>
              <input type="text" class="form-control" id="productname" placeholder="Product name">
              <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
            </div>
            <div class="mb-3">
                <label for="exampleInputtext" class="form-label">Product Category</label>
                <input type="text" class="form-control" id="productcategory" placeholder="General">
                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
            </div>
            <div class="mb-3">
                <label for="exampleInputtext" class="form-label">Tax Group</label>
                <select class="custom-select mr-sm-2" id="taxgroup">
                    <option value="1">Select Tax Group</option>
                    <option value="2">Zero Tax Group</option>
                </select>
                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
            </div>
            <div class="mb-3">
                <label for="exampleInputtext" class="form-label">Product Price</label>
                <input type="number" class="form-control" id="productprice"placeholder="Product Price">
                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
            </div>
            <a href="/products" class="btn btn-secondary mb-2">Go Back</a>
            <button type="submit" class="btn btn-success mb-2">Save</button>
        </form>
    </div>
</div>
   <!-- form -->

    <div class="row align-items-start  mt-4">
      <div class="col-xs-12 col-md-4  mt-4 ">
        <span class="text-aligncenter"><b>Product Option</b></span><br>
        <p class="text-aligncenter mt-2 text-gray">You can add one ore more variant<br>groups and an add-on group to the<br> product.</p>
      </div>
      <div class="col-xs-12 col-md-8 mt-4 bg-white p-4">
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
            <label class="form-check-label" for="inlineRadio1">Regular</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
            <label class="form-check-label" for="inlineRadio2">Combo</label>
          </div>

          <div class="mt-2 p-2">
                    <span class="text-blue mt-3 p-2">Add Combo Group</span><br>
          </div>
         <div class="mt-2 p-2">
                    <a href="/products" class="btn btn-secondary mb-2">Go Back</a>
                    <button type="submit" class="btn btn-success mb-2">Save</button>
          </div>

        </div>
    </div>


        <div class="row align-items-start  mt-4">
              <div class="col-xs-12 col-md-4  mt-4 p-4">
                <span class="text-aligncenter"><b>Additional Details</b></span><br>
                <p class="text-aligncenter mt-2 text-gray">Additional details about the product.</p>
              </div>
            <div class="col-xs-12 col-md-8  mt-4 bg-white mb-4">
                <form class="p-4">
                    <div class="mb-3">
                      <label for="exampleInputtext" class="form-label">Unit Of Measure</label>
                      <input type="text" class="form-control" id="unitofmeasure" placeholder="Unit of Measure(optional)">
                      <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputtext" class="form-label">Product Code</label>
                        <input type="text" class="form-control" id="productcode" placeholder="Product Code(optional)">
                        <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputtext" class="form-label">Notes</label>
                        <input type="text" class="form-control" id="notes" placeholder="Notes(optional)">
                        <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputtext" class="form-label">Limit to Register</label>
                        <select class="custom-select mr-sm-2" id="taxgroup">
                            <option value="1">All Register</option>
                            <option value="2">Main Register</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputtext" place class="form-label">Set Order</label>
                        <input type="number" class="form-control" id="setorder" placeholder="Set Order (optional)">
                    </div>
                    <a href="/products" class="btn btn-secondary mb-2">Go Back</a>
                    <button type="submit" class="btn btn-success mb-2">Save</button>
                </form>
              </div>
    </div>

</div>
@endsection
