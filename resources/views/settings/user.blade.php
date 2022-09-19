<div class="">
    <div class="card card-primary card-outline card-outline-tabs">
        <div class="card-header p-0 border-bottom-0">
            <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill"
                        href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home"
                        aria-selected="true">All Cashier</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill"
                        href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile"
                        aria-selected="false">All App Users</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-four-messages-tab" data-toggle="pill"
                        href="#custom-tabs-four-messages" role="tab" aria-controls="custom-tabs-four-messages"
                        aria-selected="false">All Waiters</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-four-settings-tab" data-toggle="pill"
                        href="#custom-tabs-four-settings" role="tab" aria-controls="custom-tabs-four-settings"
                        aria-selected="false">All Kitchen Users</a>
                </li>
            </ul>
        </div>


        {{-- body --}}
        <div class="card-body">
            <div class="tab-content" id="custom-tabs-four-tabContent">
                <div class="tab-pane fade active show" id="custom-tabs-four-home" role="tabpanel"
                    aria-labelledby="custom-tabs-four-home-tab">
                    {{-- table for cashier --}}
                    <div class="card">
                        <div class="card-header">
                            <span class="text-bold text-lg float-left">All Cashiers</span>
                            <div class="card-tools">
                                <button data-toggle="modal" data-target="#modal-cashier"
                                    class="btn btn-sm btn-success">Add Cashier</button>
                            </div>
                        </div>
                        <div class="card-body p-0 m-0">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Cashier Name</th>
                                        <th scope="col">Cashier PIN</th>
                                        <th scope="col">Has Manager Permissions?</th>
                                        <th scope="col">Cashier Register</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="#">xyz</a></td>
                                        <td>-</td>
                                        <td>Yes</td>
                                        <td>Main Register</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>



                <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel"
                    aria-labelledby="custom-tabs-four-profile-tab">
                    {{-- table for App Users --}}
                    <div class="card">
                        <div class="card-header">
                            <span class="text-bold text-lg float-left">All App Users</span>
                            <div class="card-tools">
                                <button data-toggle="modal" data-target="#modal-app-user"
                                    class="btn btn-sm btn-success">Add App User</button>
                            </div>
                        </div>
                        <div class="card-body p-0 m-0">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">App User Name</th>
                                        <th scope="col">App User PIN</th>


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


                <div class="tab-pane fade" id="custom-tabs-four-messages" role="tabpanel"
                    aria-labelledby="custom-tabs-four-messages-tab">
                    {{-- table for Waiters --}}
                    <div class="card">
                        <div class="card-header">
                            <span class="text-bold text-lg float-left">All Waiters</span>
                            <div class="card-tools">
                                <button data-toggle="modal" data-target="#modal-waiter"
                                    class="btn btn-sm btn-success">Add Waiter</button>
                            </div>
                        </div>
                        <div class="card-body p-0 m-0">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Waiter Name</th>
                                        <th scope="col">Waiter PIN</th>
                                        <th scope="col">Waiter Register</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="#">xyz</a></td>
                                        <td>-</td>
                                        <td>-</td>

                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>



                <div class="tab-pane fade" id="custom-tabs-four-settings" role="tabpanel"
                    aria-labelledby="custom-tabs-four-settings-tab">
                    {{-- table for kitchen users --}}
                    <div class="card">
                        <div class="card-header">
                            <span class="text-bold text-lg float-left">All Kitchen Users</span>
                            <div class="card-tools">
                                <button data-toggle="modal" data-target="#modal-kitchen-user"
                                    class="btn btn-sm btn-success">Add Kitchen User</button>
                            </div>
                        </div>
                        <div class="card-body p-0 m-0">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Kitchen Name</th>
                                        <th scope="col">Kitchen PIN</th>
                                        <th scope="col">Kitchen Register</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="#">xyz</a></td>
                                        <td>-</td>
                                        <td>-</td>

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

{{-- table end --}}






                        {{-- model start --}}

{{-- model for cashier --}}
<div class="modal fade" id="modal-cashier" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">All Cashiers</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <p>

                <form class="">
                    <div class="mb-3">
                        <label for="exampleInputtext" class="form-label">Cashier Name</label>
                        <input type="text" class="form-control" id="cashier name" placeholder="cashier name ">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputtext" class="form-label">Cashier PIN</label>
                        <input type="text" class="form-control" id="cashier pin"
                            placeholder="cashier pin Eg:1234">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Cashier Register</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>Main Register</option>
                            <option id="customCheckDisabled" disabled>Select a Register</option>
                        </select>
                    </div>

                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Allow manager permissions
                        </label>
                    </div>

                    <a href="/settings" class="btn btn-secondary mb-2">Go Back</a>
                    <button type="submit" class="btn btn-success mb-2">Save</button>
                </form>
            </div>
            </p>
        </div>

    </div>

</div>



{{-- model for App user --}}
<div class="modal fade" id="modal-app-user" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">All App Users</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <p>

                <form class="">
                    <div class="mb-3">
                        <label for="exampleInputtext" class="form-label">App User Name</label>
                        <input type="text" class="form-control" id="appusername" placeholder="App Username ">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputtext" class="form-label">App User PIN</label>
                        <input type="text" class="form-control" id="appuserpin"
                            placeholder="4 to 6 App User pin Eg:1234">
                    </div>

                    <a href="/settings" class="btn btn-secondary mb-2">Go Back</a>
                    <button type="submit" class="btn btn-success mb-2">Save</button>

                </form>
            </div>
            </p>
        </div>

    </div>

</div>


{{-- model for Waiter --}}
<div class="modal fade" id="modal-waiter" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">All Waiters</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <p>

                <form class="">
                    <div class="mb-3">
                        <label for="exampleInputtext" class="form-label">Waiter Name</label>
                        <input type="text" class="form-control" id="waiter name" placeholder="waiter name ">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputtext" class="form-label">Waiter PIN</label>
                        <input type="text" class="form-control" id="waiter pin"
                            placeholder="waiter pin Eg:1234">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Waiter Register</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>Main Register</option>
                            <option id="customCheckDisabled" disabled>Select a Register</option>
                        </select>
                    </div>

                    <a href="/settings" class="btn btn-secondary mb-2">Go Back</a>
                    <button type="submit" class="btn btn-success mb-2">Save</button>

                </form>
            </div>
            </p>
        </div>

    </div>

</div>


{{-- model for Kitchen-user --}}
<div class="modal fade" id="modal-kitchen-user" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">All Kitchen Users</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <p>

                <form class="">
                    <div class="mb-3">
                        <label for="exampleInputtext" class="form-label">Kitchen User Name</label>
                        <input type="text" class="form-control" id="kitchen name" placeholder="kitchen name ">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputtext" class="form-label">Kitchen User PIN</label>
                        <input type="text" class="form-control" id="kitchen user pin"
                            placeholder="4 to 6kitchen user pin Eg:1234">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Kitchen User Register</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option id="customCheckDisabled" disabled>Select a Register</option>
                            <option>Main Register</option>
                        </select>
                    </div>

                    <a href="/settings" class="btn btn-secondary mb-2">Go Back</a>
                    <button type="submit" class="btn btn-success mb-2">Save</button>

                </form>
            </div>
            </p>
        </div>

    </div>

</div>




