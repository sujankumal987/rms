@extends('layouts.app')

@section('title', 'setting | RMS')

@section('content')

    <div class="p-4">
        <div class="row align-items-start">
            <div class="col-xs-12 col-md-4  ">
                <span class="text-aligncenter"><b>Discount Rule Details</b></span><br>
                <p class="text-aligncenter mt-2 text-gray">Choose the type of discount rule you want to create. Discount
                    rules are identified by a unique coupon code.</p>
            </div>
            <div class="col-xs-12 col-md-8   bg-white">
                <form class="p-4">
                    <div class="mb-3">
                        <label for="exampleInputtext" class="form-label">Coupon Code </label>
                        <input type="text" class="form-control" id="productname" placeholder="Product name">
                        <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputtext" class="form-label">Discount Type</label>
                        <input type="text" class="form-control" id="productcategory" placeholder="General">
                        <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputtext" class="form-label">Level</label>
                        <select class="custom-select mr-sm-2" id="taxgroup">
                            <option value="1">Select Tax Group</option>
                            <option value="2">Zero Tax Group</option>
                        </select>
                        <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                    </div>
                </form>
            </div>
        </div>
        <!-- form -->

        {{-- another form --}}
        <div class="row align-items-start  mt-4">
            <div class="col-xs-12 col-md-4  mt-4 p-4">
                <span class="text-aligncenter"><b>Discount Visibility</b></span><br>
                <p class="text-aligncenter mt-2 text-gray">Set the time period when the discount rule is active. Two column
                    layout for start and end date.</p>
            </div>
            <div class="col-xs-12 col-md-8  mt-4 bg-white mb-4">
                <form class="p-4">
                    <div class="mb-3">
                        <label for="exampleInputtext" class="form-label">Start Date</label>
                        <input type="text" class="form-control" id="unitofmeasure"
                            placeholder="Unit of Measure(optional)">
                        <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                    </div>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Set End Date
                        </label>
                    </div>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                        <label class="form-check-label" for="defaultCheck2">
                            Set Happy Hours Time
                        </label>
                    </div>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                        <label class="form-check-label" for="defaultCheck2">
                            Set Days Of Week
                        </label>
                    </div>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                        <label class="form-check-label" for="defaultCheck2">
                            Apply the discount automatically
                        </label>
                    </div>
                    <div class="mt-3">
                        <a href="/settings" class="btn btn-secondary mb-2">Go Back</a>
                        <button type="submit" class="btn btn-success mb-2">Save</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
