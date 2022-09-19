@extends('layouts.app')
@section('title', 'tax | RMS')
@section('content')


    <div class="row align-items-start p-4">
        <div class="col-xs-12 col-md-4  mt-4 p-4">
            <span class="text-aligncenter"><b>Setup Taxes and Tax Groups</b></span><br>
            <p class="text-aligncenter mt-2 text-gray">Create separate taxes for different tax rates and types.<br>

                <br>One or more taxes can be grouped under a tax group and applied to products.
            </p>
        </div>
        <div class="col-xs-12 col-md-8  mt-4 bg-white mb-4">
            <form class="p-4">
                <div class="mb-3">
                    <label for="exampleInputtext" class="form-label">Tax Name</label>
                    <input type="text" class="form-control" id="taxname" placeholder="Zero Tax">
                    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                </div>

                <div class="mb-3">
                    <label for="exampleInputtext" class="form-label">Tax Percent</label>
                    <input type="number" class="form-control" id="taxpercent" placeholder="Set Order (optional)"
                        value="1" maxlength="4" size="4">
                    </select>
                </div>
                <a href="/settings" class="btn btn-secondary mt-2 mb-2">Go Back</a>
                <button type="submit" class="btn btn-success mt-2 mb-2">Save</button>
            </form>
        </div>
    </div>



@endsection
