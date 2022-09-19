<div class="">
    <div class="card card-primary card-tabs">
        <div class="card-header p-0 pt-1">
            <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill"
                        href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home"
                        aria-selected="true">Variants</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill"
                        href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile"
                        aria-selected="false">Variant Groups</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-messages-tab" data-toggle="pill"
                        href="#custom-tabs-one-messages" role="tab" aria-controls="custom-tabs-one-messages"
                        aria-selected="false">Addons</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-settings-tab" data-toggle="pill"
                        href="#custom-tabs-one-settings" role="tab" aria-controls="custom-tabs-one-settings"
                        aria-selected="false">Addons Groups</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-setting-tab" data-toggle="pill"
                        href="#custom-tabs-one-setting" role="tab" aria-controls="custom-tabs-one-setting"
                        aria-selected="false">Item Groups</a>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <div class="tab-content" id="custom-tabs-one-tabContent">
                <div class="tab-pane fade active show" id="custom-tabs-one-home" role="tabpanel"
                    aria-labelledby="custom-tabs-one-home-tab">
                    {{-- table for Variant --}}
                    <div class="card">
                        <div class="card-header">
                            <span class="text-bold text-lg float-left">All Variants</span>
                            <div class="card-tools">
                                <button data-toggle="modal" data-target="#modal-variant"
                                    class="btn btn-sm btn-success">Add Variant</button>
                            </div>
                        </div>
                        <div class="card-body p-0 m-0">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Variant Name</th>
                                        <th scope="col">Variant Comment</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Sort Order</th>
                                        <th scope="col">Is Linked To A Variant Group?</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="#">xyz</a></td>
                                        <td>-</td>
                                        <td>Yes</td>
                                        <td>Main Register</td>
                                        <td>-</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


                <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel"
                    aria-labelledby="custom-tabs-one-profile-tab">
                    {{-- table for variant group --}}
                    <div class="card">
                        <div class="card-header">
                            <span class="text-bold text-lg float-left">All Variant Groups</span>
                            <div class="card-tools">
                                <button data-toggle="modal" data-target="#modal-variant-group"
                                    class="btn btn-sm btn-success">Add Variant Group</button>
                            </div>
                        </div>
                        <div class="card-body p-0 m-0">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Variant Group Name</th>
                                        <th scope="col">Variants</th>
                                        <th scope="col">Sort Order</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="#">xyz</a></td>
                                        <td>1</td>
                                        <td>2</td>

                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


                <div class="tab-pane fade" id="custom-tabs-one-messages" role="tabpanel"
                    aria-labelledby="custom-tabs-one-messages-tab">
                    {{-- table for Addons --}}
                    <div class="card">
                        <div class="card-header">
                            <span class="text-bold text-lg float-left">All Addons</span>
                            <div class="card-tools">
                                <button data-toggle="modal" data-target="#modal-addon"
                                    class="btn btn-sm btn-success">Add Addon</button>
                            </div>
                        </div>
                        <div class="card-body p-0 m-0">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Addon Name</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Sort Order</th>
                                        <th scope="col">Is Linked To A Variant Group?</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="#">xyz</a></td>
                                        <td>-</td>
                                        <td>1</td>
                                        <td>-</td>

                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


                <div class="tab-pane fade" id="custom-tabs-one-settings" role="tabpanel"
                    aria-labelledby="custom-tabs-one-settings-tab">
                    {{-- table for Addon group --}}
                    <div class="card">
                        <div class="card-header">
                            <span class="text-bold text-lg float-left">All Addon Groups</span>
                            <div class="card-tools">
                                <button data-toggle="modal" data-target="#modal-addon-group"
                                    class="btn btn-sm btn-success">Add Addon Group</button>
                            </div>
                        </div>
                        <div class="card-body p-0 m-0">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Addon Group Name</th>
                                        <th scope="col">Addons</th>
                                        <th scope="col">Sort Order</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="#">xyz</a></td>
                                        <td>1</td>
                                        <td>2</td>

                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


                <div class="tab-pane fade" id="custom-tabs-one-setting" role="tabpanel"
                    aria-labelledby="custom-tabs-one-setting-tab">
                    {{-- table for Items group --}}
                    <div class="card">
                        <div class="card-header">
                            <span class="text-bold text-lg float-left">All Items</span>
                            <div class="card-tools">
                                <button data-toggle="modal" data-target="#modal-item-group"
                                    class="btn btn-sm btn-success">Add Items</button>
                            </div>
                        </div>
                        <div class="card-body p-0 m-0">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Item Group Name</th>
                                        <th scope="col">Items</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="#">xyz</a></td>
                                        <td>1</td>
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



{{-- model start --}}

{{-- model for variants --}}
<div class="modal fade" id="modal-variant" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">All Variants</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <p>

                <form class="">
                    <div class="mb-3">
                        <label for="exampleInputtext" class="form-label">Variant Name</label>
                        <input type="text" class="form-control" id="variant name" placeholder="variant name ">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputtext" class="form-label">Comment</label>
                        <input type="text" class="form-control" id="comment" placeholder="comment(optional)">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputtext" class="form-label">Price</label>
                        <input type="number" class="form-control" id="price" placeholder="price">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputtext" class="form-label">Sort Order</label>
                        <input type="number" class="form-control" id="sortorder"
                            placeholder="Sort Order (Optioanl)">
                    </div>



                    <div class=" mb-2">
                        <a href="/settings" class="btn btn-secondary">Go Back</a>
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                </form>
            </div>
            </p>
        </div>

    </div>

</div>

{{-- model for variant Group --}}
<div class="modal fade" id="modal-variant-group" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">All Variant Groups</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

            <div class="modal-body">
                <p>

                <form class="">
                    <div class="mb-3">
                        <label for="exampleInputtext" class="form-label">Variant Group Name</label>
                        <input type="text" class="form-control" id="variant name" placeholder="variant name ">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputtext" class="form-label">Sort Order</label>
                        <input type="number" class="form-control" id="sortorder"
                            placeholder="Sort Order (Optioanl)">
                    </div>

                    <span class="text-bold mb-3">Select the variants</span><br>
                    <div class="form-check form-check-inline mb-3">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                        <label class="form-check-label" for="inlineCheckbox1">xyz</label>
                    </div>

                    <div class=" mb-2">
                        <a href="/settings" class="btn btn-secondary">Go Back</a>
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                </form>
            </div>
            </p>
        </div>

    </div>

</div>

{{-- model for Addon --}}
<div class="modal fade" id="modal-addon" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">All Addons</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <p>

                <form class="">
                    <div class="mb-3">
                        <label for="exampleInputtext" class="form-label">Addon Name</label>
                        <input type="text" class="form-control" id="addon name" placeholder="variant name ">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputtext" class="form-label">Price</label>
                        <input type="number" class="form-control" id="price" placeholder="price">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputtext" class="form-label">Sort Order</label>
                        <input type="number" class="form-control" id="sortorder"
                            placeholder="Sort Order (Optioanl)">
                    </div>



                    <div class=" mb-2">
                        <a href="/settings" class="btn btn-secondary">Go Back</a>
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                </form>
            </div>
            </p>
        </div>

    </div>

</div>

{{-- model for Addon Group --}}
<div class="modal fade" id="modal-addon-group" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">All Addon Groups</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

            <div class="modal-body">
                <p>

                <form class="">
                    <div class="mb-3">
                        <label for="exampleInputtext" class="form-label">Addon Group Name</label>
                        <input type="text" class="form-control" id="addon name" placeholder="variant name ">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputtext" class="form-label">Sort Order</label>
                        <input type="number" class="form-control" id="sortorder"
                            placeholder="Sort Order (Optioanl)">
                    </div>

                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="minselectable">Min Selectable </label>
                            <input type="text" class="form-control" id="minselectable"
                                placeholder="Min number of addons">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="maxselectable">Max Selectable </label>
                            <input type="text" class="form-control" id="maxselectable"
                                placeholder="Max number of addons">
                        </div>
                    </div>

                    <span class="text-bold mb-3">Select the variants</span><br>
                    <div class="form-check form-check-inline mb-3">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                        <label class="form-check-label" for="inlineCheckbox1">xyz</label>
                    </div>

                    <div class=" mb-2">
                        <a href="/settings" class="btn btn-secondary">Go Back</a>
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                </form>
            </div>
            </p>
        </div>

    </div>

</div>

{{-- model for Itemsgroup --}}
<div class="modal fade" id="modal-item-group" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">All Item Groups</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <p>

                <form class="">
                    <div class="mb-3">
                        <label for="exampleInputtext" class="form-label">Item Group Name</label>
                        <input type="text" class="form-control" id="itemgroupname" placeholder="itemgroup name ">
                    </div>

                    <form class="container-fluid">
                        <div class="input-group mb-3 mt-4">
                            <button class="btn btn-outline-secondary" type="submit"><i
                                    class="fas fa-search"></i></button>
                            <input type="text" class="form-control" placeholder="Search" aria-label="Username"
                                aria-describedby="basic-addon1">
                        </div>
                    </form>
                    <span class="text-bold mb-3">Select the variants</span><br>
                    <div class="form-check form-check-inline mb-3">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                        <label class="form-check-label" for="inlineCheckbox1">xyz</label>
                    </div>

                    <div class=" mb-2">
                        <a href="/settings" class="btn btn-secondary">Go Back</a>
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                </form>
            </div>
            </p>
        </div>

    </div>

</div>


{{-- model end --}}
