<div class="">
    <div class="card card-primary card-outline card-tabs">
        <div class="card-header p-0 pt-1 border-bottom-0">
            <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-three-home-tab" data-toggle="pill" href="#custom-tabs-three-home"
                        role="tab" aria-controls="custom-tabs-three-home" aria-selected="false">Payment Types</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill"
                        href="#custom-tabs-three-profile" role="tab" aria-controls="custom-tabs-three-profile"
                        aria-selected="false">Petty Cash Category</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-three-messages-tab" data-toggle="pill"
                        href="#custom-tabs-three-messages" role="tab" aria-controls="custom-tabs-three-messages"
                        aria-selected="false">Additional Details</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-three-settings-tab" data-toggle="pill"
                        href="#custom-tabs-three-settings" role="tab" aria-controls="custom-tabs-three-settings"
                        aria-selected="true">Tags</a>
                </li>
            </ul>
        </div>

        {{-- body --}}
        <div class="card-body">
            <div class="tab-content" id="custom-tabs-three-tabContent">
                <div class="tab-pane fade" id="custom-tabs-three-home" role="tabpanel"
                    aria-labelledby="custom-tabs-three-home-tab">
                    <div class="card-tools text-center">

                        {{-- table for pament type --}}
                        <div class="card">
                            <div class="card-header">
                                <span class="text-bold text-lg float-left">All Payments</span>
                                <div class="card-tools">
                                    <button data-toggle="modal" data-target="#modal-payment"
                                        class="btn btn-sm btn-success">Add Payment</button>
                                </div>
                            </div>
                            <div class="card-body p-0 m-0">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">Payment Name</th>
                                            <th scope="col">Description</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="#">xyz</a></td>
                                            <td>-</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="custom-tabs-three-profile" role="tabpanel"
                    aria-labelledby="custom-tabs-three-profile-tab">
                    <div class="card-tools text-center">

                        {{-- table for petty cash --}}
                        <div class="card">
                            <div class="card-header">
                                <span class="text-bold text-lg float-left">All Petty Cash Categories</span>
                                <div class="card-tools">
                                    <button data-toggle="modal" data-target="#modal-petty-cash-category"
                                        class="btn btn-sm btn-success">Add Petty Cash Category</button>
                                </div>
                            </div>
                            <div class="card-body p-0 m-0">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">Payment Name</th>
                                            <th scope="col">Description</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="#">xyz</a></td>
                                            <td>-</td>
                                        </tr>
                                        </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="tab-pane fade" id="custom-tabs-three-messages" role="tabpanel"
                    aria-labelledby="custom-tabs-three-messages-tab">
                    <div class="card-tools text-center">

                        {{-- table for Additonal details --}}
                        <div class="card">
                            <div class="card-header">
                                <span class="text-bold text-lg float-left">All Additional Details</span>
                                <div class="card-tools">
                                    <button data-toggle="modal" data-target="#modal-additional-detail"
                                        class="btn btn-sm btn-success">Add Additional Detail</button>
                                </div>
                            </div>
                            <div class="card-body p-0 m-0">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">Additional Detail Name</th>
                                            <th scope="col">Additional Detail Type</th>
                                            <th scope="col">Isprintable On Receipt</th>


                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="#">Burger</a></td>
                                            <td>-</td>
                                            <td>General</td>

                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="tab-pane fade active show" id="custom-tabs-three-settings" role="tabpanel"
                    aria-labelledby="custom-tabs-three-settings-tab">
                    <div class="card-tools text-center">

                        {{-- table for tag --}}
                        <div class="card">
                            <div class="card-header">
                                <span class="text-bold text-lg float-left">All Tags</span>
                                <div class="card-tools">
                                    <button data-toggle="modal" data-target="#modal-tag"
                                        class="btn btn-sm btn-success">Add Tag</button>
                                </div>
                            </div>
                            <div class="card-body p-0 m-0">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">Tag Name</th>
                                            <th scope="col">Tag Type</th>
                                            <th scope="col">Tag Color</th>
                                            <th scope="col">Isprintable On Receipt</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="#">xyz</a></td>
                                            <td>-</td>
                                            <td>Green</td>
                                            <td>Yes</td>

                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </div>
</div>






{{-- model for payment --}}
<div class="modal fade" id="modal-payment" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">All Payments</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    <span>What do you want to create?</span>
                <form class="">
                    <div class="form-check form-check-inline mb-3">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                            value="option1">
                        <label class="form-check-label" for="inlineRadio1">Payment Type</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                            value="option2">
                        <label class="form-check-label" for="inlineRadio2">Petty Cash Category</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3"
                            value="option3">
                        <label class="form-check-label" for="inlineRadio3">Additional Detail</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3"
                            value="option3">
                        <label class="form-check-label" for="inlineRadio3">Tag </label>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputtext" class="form-label">Product Type</label>
                        <input type="text" class="form-control" id="productname" placeholder="Product name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputtext" class="form-label">Description</label>
                        <input type="text" class="form-control" id="productname" placeholder="Product name">
                        <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                    </div>

                    <a href="/settings" class="btn btn-secondary mb-2">Go Back</a>
                    <button type="submit" class="btn btn-success mb-2">Save</button>
                </form>
            </div>
            </p>
        </div>

    </div>

</div>


{{-- model for petty cash category --}}
<div class="modal fade" id="modal-petty-cash-category" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">All Petty Cash Categories</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    <span>What do you want to create?</span>
                <form class="">
                    <div class="form-check form-check-inline mb-3">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                            value="option1">
                        <label class="form-check-label" for="inlineRadio1">Payment Type</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                            value="option2">
                        <label class="form-check-label" for="inlineRadio2">Petty Cash Category</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3"
                            value="option3">
                        <label class="form-check-label" for="inlineRadio3">Additional Detail</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3"
                            value="option3">
                        <label class="form-check-label" for="inlineRadio3">Tag </label>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputtext" class="form-label">Petty Cash Category Name</label>
                        <input type="text" class="form-control" id="productname" placeholder="Product name">
                        <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputtext" class="form-label">Description</label>
                        <input type="text" class="form-control" id="description" placeholder="description">
                        <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                    </div>

                    <a href="/settings" class="btn btn-secondary mb-2">Go Back</a>
                    <button type="submit" class="btn btn-success mb-2">Save</button>
                </form>
            </div>
            </p>
        </div>

    </div>

</div>


{{-- model for additional details --}}
<div class="modal fade" id="modal-additional-detail" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">All Additional Details</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <p>

                    <span>What do you want to create?</span>
                <form class="">
                    <div class="form-check form-check-inline mb-3">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                            value="option1">
                        <label class="form-check-label" for="inlineRadio1">Payment Type</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                            value="option2">
                        <label class="form-check-label" for="inlineRadio2">Petty Cash Category</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3"
                            value="option3">
                        <label class="form-check-label" for="inlineRadio3">Additional Detail</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3"
                            value="option3">
                        <label class="form-check-label" for="inlineRadio3">Tag </label>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputtext" class="form-label">Additional Detail Name</label>
                        <input type="text" class="form-control" id="additionaldetailname"
                            placeholder="Additional Detail Name">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlSelect1">Additional Detail Type</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>Customer Data</option>
                            <option>Sale Data</option>

                        </select>
                    </div>

                    <div class="mb-3 form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                        <label class="form-check-label" for="inlineCheckbox1">print this field on receipts</label>
                    </div><br>



                    <a href="/settings" class="btn btn-secondary mb-2">Go Back</a>
                    <button type="submit" class="btn btn-success mb-2">Save</button>
                </form>
            </div>
            </p>
        </div>

    </div>

</div>

{{-- model for tag --}}
<div class="modal fade" id="modal-tag" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">All Tags</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <p>

                    <span>What do you want to create?</span>
                <form class="">
                    <div class="form-check form-check-inline mb-3">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                            value="option1">
                        <label class="form-check-label" for="inlineRadio1">Payment Type</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                            value="option2">
                        <label class="form-check-label" for="inlineRadio2">Petty Cash Category</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3"
                            value="option3">
                        <label class="form-check-label" for="inlineRadio3">Additional Detail</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3"
                            value="option3">
                        <label class="form-check-label" for="inlineRadio3">Tag </label>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputtext" class="form-label">Tag Name</label>
                        <input type="text" class="form-control" id="tagname" placeholder="Product name">
                        <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlSelect1">Tag Type</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>Customer Data</option>
                            <option>Sale Data</option>

                        </select>
                    </div>

                    <div class="mb-3 form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                        <label class="form-check-label" for="inlineCheckbox1">print this field on receipts</label>
                    </div><br>



                    <a href="/settings" class="btn btn-secondary mb-2">Go Back</a>
                    <button type="submit" class="btn btn-success mb-2">Save</button>
                </form>
            </div>
            </p>
        </div>

    </div>

</div>
{{-- end of all model & custom field --}}
