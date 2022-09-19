@extends('layouts.app')
@section('title', 'Category | RMS')

@section('content')

    <div class="row align-items-start p-3 mt-2">
        <div class="col-xs-12 col-md-4
    mt-4 p-4">
            <span class="text-aligncenter"><b>Your Product Category Details</b></span><br>
            <p class="text-aligncenter mt-2 text-gray">Products will be grouped under these categories in the sales register.
            </p>
        </div>
        <div class="col-xs-12 col-md-8  mt-2 bg-white mb-4">
            <form class="p-4">
                <div class="mb-3">
                    <label for="exampleInputtext" class="form-label">Product Category Name</label>
                    <input type="text" class="form-control" id="productcategoryname" placeholder="General">
                    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                </div>

                <div class="mb-3">
                    <label for="exampleInputtext" class="form-label">Sort Order</label>
                    <input type="number" class="form-control" id="sortorder" placeholder="Set Order (optional)"
                        value="1" min="0" maxlength="4" size="4">
                    </select>
                </div>
                <a href="/settings" class="btn btn-secondary mt-2 mb-2">Go Back</a>
                <button type="submit" class="btn btn-success mt-2 mb-2">Save</button>
            </form>
        </div>
    </div>
@endsection
