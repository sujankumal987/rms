@extends('layouts.app')
@section('title', 'Charge | RMS')

@section('content')


    <div class="row align-items-start p-4">
        <div class="col-xs-12 col-md-4 p-4">
            <span class="text-aligncenter"><b>Additional Charge Details</b></span><br>
            <p class="text-aligncenter mt-2 text-gray">Delivery charges, parcel charges, service charges etc. can be setup as
                additional charges.<br>

                <br> Additional charges are applied on top of the discounted subtotal. Also, additional charges can have
                taxes.
            </p>
        </div>
        <div class="col-xs-12 col-md-8 bg-white">
            <form class="p-4">
                <div class="mb-3">
                    <label for="exampleInputtext" class="form-label">Additional Charge Name</label>
                    <input type="text" class="form-control" id="additionalchargename" placeholder="ABC">
                    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                </div>
                <div class="mb-3">
                    <div class="mb-3">
                        <label for="exampleInputtext" class="form-label">Additional Charge Type</label>
                        <select class="custom-select mr-sm-2" id="taxgroup">
                            <option value="1">Select additional charge Type</option>
                            <option value="2">Cash</option>
                            <option value="3">Percentage</option>

                        </select>
                        <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputtext" class="form-label">Additional Charge Value</label>
                        <input type="number" class="form-control" id="additionalchargevalue"
                            placeholder="Set Order (optional)" value="1" min="0" maxlength="4" size="4">
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputtext" class="form-label">Tax Group</label>
                        <select class="custom-select mr-sm-2" id="taxgroup">
                            <option value="1" disabled>Select Tax Group</option>
                            <option value="2">Zero Tax Group</option>
                        </select>
                        <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                    </div>
                    <div class="mb-3">
                        <div class="mb-3">
                            <label for="exampleInputtext" class="form-label">Order Type</label>
                            <select class="custom-select mr-sm-2" id="taxgroup">
                                <option value="1" disabled>Select a Type</option>
                                <option value="2">All Orders</option>
                                <option value="3">Take Away</option>
                                <option value="4">Delivery</option>
                                <option value="5">Dine in</option>
                            </select>
                            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                        </div>
                        <a href="/settings" class="btn btn-secondary mb-2">Go Back</a>
                        <button type="submit" class="btn btn-success mb-2">Save</button>
            </form>
        </div>
    </div>
@endsection
