@extends('layouts.app')

@section('title', 'Sell | RMS')

@section('css')
    <link rel="stylesheet" href="/assets/css/sell.css">
@endsection

@section('content')

    <div class="p-4">
        <div class="row mt-4 py-4 p-4" style="background-color: white">

            <div class="col-7 flex-start  p-4">
                <div class="col-12">
                    <nav class="">
                        <form class="d-flex">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i
                                    class="fas fa-search"></i></button>
                        </form>
                    </nav>
                </div>

                <div class="row mt-3">
                    <div class="col-5 col-sm-3">
                        <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist"
                            aria-orientation="vertical">
                            <a class="nav-link" id="vert-tabs-home-tab" data-toggle="pill" href="#vert-tabs-home"
                                role="tab" aria-controls="vert-tabs-home" aria-selected="false">All</a>
                            <a class="nav-link" id="vert-tabs-profile-tab" data-toggle="pill" href="#vert-tabs-profile"
                                role="tab" aria-controls="vert-tabs-profile" aria-selected="false">Top</a>
                            <a class="nav-link active" id="vert-tabs-messages-tab" data-toggle="pill"
                                href="#vert-tabs-messages" role="tab" aria-controls="vert-tabs-messages"
                                aria-selected="true">General</a>

                        </div>
                    </div>
                    <div class="col-7 col-sm-9">
                        <div class="tab-content" id="vert-tabs-tabContent">
                            <div class="p-4 tab-pane text-left fade" id="vert-tabs-home" role="tabpanel"
                                aria-labelledby="vert-tabs-home-tab">
                                <div class="d-flex">
                                    <div data-id="1" data-title="Burger" data-price="500"
                                        class="product-btn p-2 bd-highlight bg-light-gray mr-4  btn btn-outline-secondary food-items shadow">
                                        Burger
                                    </div>
                                    <div data-id="2" data-title="Pizza" data-price="500"
                                        class="product-btn p-2 bd-highlight bg-light-gray mr-4  btn btn-outline-secondary food-items shadow">
                                        Pizza
                                    </div>
                                    <div data-id="3" data-title="Momo" data-price="500"
                                        class="product-btn p-2 bd-highlight bg-light-gray mr-4  btn btn-outline-secondary food-items shadow">
                                        Momo
                                    </div>
                                </div>
                            </div>
                            <div class="p-4 tab-pane fade" id="vert-tabs-profile" role="tabpanel"
                                aria-labelledby="vert-tabs-profile-tab">
                                <div class="d-flex">
                                    <div
                                        class="p-2 bd-highlight bg-light-gray mr-4  btn btn-outline-secondary food-items shadow">
                                        Momo
                                    </div>
                                </div>
                            </div>
                            <div class="p-4 tab-pane fade active show" id="vert-tabs-messages" role="tabpanel"
                                aria-labelledby="vert-tabs-messages-tab">
                                <div class="d-flex">

                                    <div
                                        class="p-2 bd-highlight bg-light-gray mr-4  btn btn-outline-secondary food-items shadow">
                                        Pizza
                                    </div>
                                    <div
                                        class="p-2 bd-highlight bg-light-gray mr-4  btn btn-outline-secondary food-items shadow">
                                        Momo
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-5 bg-light shadow">
                <div class="d-flex justify-content-between align-items-center mx-2 mt-2">
                    <div class="">
                        <span> Current sale | <a href="#" data-toggle="modal" data-target="#modal-lg">
                                Add Customer
                            </a></span>
                    </div>

                    <div>
                        <a href="#" id="btnClear" class="btn-group-sm btn-gray  text-danger">clear</a>
                    </div>
                </div>
                <form>
                    <div class="mb-3 mt-3">
                        <input type="number" class="form-control" id="number" placeholder="Customer mobile number">
                    </div>
                </form>

                <table class="table " id="product-table">
                    <thead>
                        <tr>
                            <th scope="col cart-sn">SN</th>
                            <th scope="col cart-item">Product</th>
                            <th scope="col cart-price">Price</th>
                            <th scope="col cart-quantity">Quantity</th>
                            <th scope="col cart-subtotal">Sub-Total</th>
                        </tr>
                    </thead>
                    <tbody id="table-body">
                    </tbody>
                </table>
                <div class="text-center">
                    <button type="button" class=" mb-2 w-100 btn btn-success">Charge (<span
                            id="total"></span>)</button>
                </div>

            </div>
        </div>

        {{-- model for customer --}}
        <div class="modal fade" id="modal-lg" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add Customer</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>
                        <div class="card m-0 card-primary card-outline card-tabs">
                            <div class="card-header p-0 pt-1 border-bottom-0">
                                <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="custom-tabs-three-home-tab" data-toggle="pill"
                                            href="#custom-tabs-three-home" role="tab"
                                            aria-controls="custom-tabs-three-home" aria-selected="true">General</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill"
                                            href="#custom-tabs-three-profile" role="tab"
                                            aria-controls="custom-tabs-three-profile" aria-selected="false">Delivery</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="tab-content" id="custom-tabs-three-tabContent">
                                    <div class="tab-pane fade show active" id="custom-tabs-three-home" role="tabpanel"
                                        aria-labelledby="custom-tabs-three-home-tab">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Customer Phone</label>
                                            <input type="number" class="form-control" id="exampleInputNumber"
                                                aria-describedby="emailHelp" placeholder="Enter number" min="0">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputName">Customer Name</label>
                                            <input type="text" class="form-control" id="exampleInputText"
                                                placeholder="Customer name">
                                        </div>
                                        <div class="float-right">
                                            <a href="/sells" type="button" class="btn  btn-secondary">Back</a>
                                            <button type="button" class="btn  btn-primary">Save</button>
                                        </div>
                                    </div>


                                    {{-- delivery --}}
                                    <div class="tab-pane fade" id="custom-tabs-three-profile" role="tabpanel"
                                        aria-labelledby="custom-tabs-three-profile-tab">
                                        <div>
                                            <label for="exampleTextarea" class="form-label">Shipping Address</label>
                                            <textarea class="form-control" id="shippingaddress" rows="1"placeholder="enter your address" required></textarea>
                                            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                                        </div>
                                        <div class="form-row mt-2">
                                            <div class="col">
                                                <label for="exampleTextarea" class="form-label">City</label>
                                                <input type="text" class="form-control" placeholder="City">
                                            </div>
                                            <div class="col">
                                                <label for="exampleTextarea" class="form-label">pincode</label>
                                                <input type="number" class="form-control" placeholder="zipcode" min="0">
                                            </div>
                                        </div>
                                        <div class="float-right mt-3">
                                            <a href="/sells" type="button" class="btn  btn-secondary">Back</a>
                                            <button type="button" class="btn  btn-primary">Save</button>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>


                        </p>
                    </div>
                </div>

            </div>
        </div>
        {{-- model for product --}}
        <div class="modal fade" id="modal-product" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Update Product</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>
                        <div class="card m-0 card-primary card-outline card-tabs">
                            <div class="card-header p-0 pt-1 border-bottom-0">
                            </div>
                            <div class="card-body">
                                <div class="tab-content" id="custom-tabs-three-tabContent">
                                    <div class="tab-pane fade show active" id="custom-tabs-three-home" role="tabpanel"
                                        aria-labelledby="custom-tabs-three-home-tab">
                                        <div class="form-group">
                                            <label for="exampleInputNumber">Quantity</label>
                                            <input type="number" class="form-control" id="exampleInputNumber"
                                                aria-describedby="emailHelp" placeholder="update quantity" min="0">
                                        </div>

                                        <span class="text-bold">Total Price</span><br>
                                        <div class="form-check form-check-inline mt-2 ">
                                            <input class="form-check-input" type="radio" name="type"
                                                id="inlineRadio1"  value="option1">
                                            <label class="form-check-label" for="inlineRadio1">Cash Discount</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="type"
                                                id="inlineRadio2" value="option2">
                                            <label class="form-check-label" for="inlineRadio2">Percentage Discount</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="type"
                                                id="inlineRadio2" value="option2">
                                            <label class="form-check-label" for="inlineRadio2">Free item</label>
                                        </div>
                                        <div class="mt-2">
                                        <input type="number" class="form-control" id="exampleInputNumber"
                                         min="0">
                                        </div>
                                    </div>


                                </div>
                            </div>
                           <div class="card-footer">
                            <div class="float-right ml-3">
                                <a href="/sells" type="button" class="btn  btn-secondary">Back</a>
                                <button type="button" class="btn  btn-primary">Save</button>
                            </div>
                        </div>

                        </div>


                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="/assets/js/sell.js"></script>
@endsection
