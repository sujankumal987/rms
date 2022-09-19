@extends('layouts.app')

@section('title', 'setting | RMS')

@section('content')


    <div class="row ">
        <div class="card-body">
            <div class="row">
                <div class="col-5 col-sm-2 ">
                    <div class="nav flex-column nav-tabs h-100 position-fixed" id="vert-tabs-tab" role="tablist"
                        aria-orientation="vertical">

                        {{-- shop --}}
                        <a class="nav-link active " id="vert-tabs-shop-tab" data-toggle="pill" href="#vert-tabs-shop"
                            role="tab" aria-controls="vert-tabs-shop" aria-selected="true">Shop</a>

                        {{-- Register --}}
                        <a class="nav-link" id="vert-tabs-home-tab" data-toggle="pill" href="#vert-tabs-home" role="tab"
                            aria-controls="vert-tabs-home" aria-selected="false">Register</a>
                        {{-- end register --}}

                        {{-- category --}}
                        <a class="nav-link" id="vert-tabs-profile-tab" data-toggle="pill" href="#vert-tabs-profile"
                            role="tab" aria-controls="vert-tabs-profile" aria-selected="false">Product Category</a>

                        {{-- Taxes --}}
                        <a class="nav-link" id="vert-tabs-messages-tab" data-toggle="pill" href="#vert-tabs-messages"
                            role="tab" aria-controls="vert-tabs-messages" aria-selected="false">Taxes</a>

                        {{-- additional charge --}}
                        <a class="nav-link" id="vert-tabs-settings-tab" data-toggle="pill" href="#vert-tabs-settings"
                            role="tab" aria-controls="vert-tabs-settings" aria-selected="false">Additional Charge</a>

                        {{-- custom field --}}
                        <a class="nav-link" id="vert-tabs-custom-field-tab" data-toggle="pill"
                            href="#vert-tabs-custom-field" role="tab" aria-controls="vert-tabs-custom-field"
                            aria-selected="false">Custom Field</a>

                        {{-- Discount rules --}}
                        <a class="nav-link" id="vert-tabs-discount-tab" data-toggle="pill" href="#vert-tabs-discount"
                            role="tab" aria-controls="vert-tabs-discount" aria-selected="false">Discount Rules</a>

                        {{-- users --}}
                        <a class="nav-link" id="vert-tabs-user-tab" data-toggle="pill" href="#vert-tabs-user" role="tab"
                            aria-controls="vert-tabs-user" aria-selected="false">Users</a>

                        {{-- production option --}}
                        <a class="nav-link" id="vert-tabs-production-option-tab" data-toggle="pill"
                            href="#vert-tabs-production-option" role="tab" aria-controls="vert-tabs-production-option"
                            aria-selected="false">Product Option</a>



                    </div>

                </div>




                <!-- Register -->
                <div class="col-6 col-sm-10">
                    <div class="tab-content" id="vert-tabs-tabContent ">
                        <div class="tab-pane text-left fade" id="vert-tabs-home" role="tabpanel"
                            aria-labelledby="vert-tabs-home-tab">
                            @include('settings.register')
                        </div>
                        <!-- register end -->


                        <!-- Category table -->
                        <div class="tab-pane fade" id="vert-tabs-profile" role="tabpanel"
                            aria-labelledby="vert-tabs-profile-tab">
                            @include('settings.category')
                        </div>
                        <!-- end of Category -->


                        <!-- taxes table -->
                        <div class="tab-pane fade" id="vert-tabs-messages" role="tabpanel"
                            aria-labelledby="vert-tabs-messages-tab">

                            @include('settings.taxes')
                        </div>
                        <!-- end of Taxes -->


                        <!-- additional charge table -->
                        <div class="tab-pane fade " id="vert-tabs-settings" role="tabpanel"
                            aria-labelledby="vert-tabs-settings-tab">
                            @include('settings.additional-charge')
                        </div>

                        <!-- end of additionalcharge table -->



                        {{-- shop --}}
                        <div class="tab-pane fade active show " id="vert-tabs-shop" role="tabpanel"
                            aria-labelledby="vert-tabs-shop-tab">
                            <div>
                                @include('settings.shop')
                            </div>
                        </div>



                        {{-- custom field --}}
                        <div class="tab-pane fade" id="vert-tabs-custom-field" role="tabpanel"
                            aria-labelledby="vert-tabs-custom-field-tab">
                            <div>
                                @include('settings.custom')
                            </div>
                        </div>

                        {{-- users --}}
                        <div class="tab-pane fade" id="vert-tabs-user" role="tabpanel"
                            aria-labelledby="vert-tabs-user-tab">
                            <div>
                                @include('settings.user')
                            </div>
                        </div>


                        {{-- discount rules --}}
                        <div class="tab-pane fade" id="vert-tabs-discount" role="tabpanel"
                            aria-labelledby="vert-tabs-discount-tab">
                            <div>
                                @include('settings.discount')
                            </div>
                        </div>

                        {{-- production option --}}
                        <div class="tab-pane fade" id="vert-tabs-production-option" role="tabpanel"
                            aria-labelledby="vert-tabs-production-option-tab">
                            <div>
                                @include('settings.production-option')
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('js')
    <script></script>
@endsection
