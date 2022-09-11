@extends('layouts.app')

@section('title', 'setting | RMS')

@section('content')


<div class="row mt-4  py-4">
    <div class="card-body">
      <div class="row">
        <div class="col-5 col-sm-3">
          <div
            class="nav flex-column nav-tabs h-100"
            id="vert-tabs-tab"
            role="tablist"
            aria-orientation="vertical"
          >
            <a
              class="nav-link active"
              id="vert-tabs-home-tab"
              data-toggle="pill"
              href="#vert-tabs-home"
              role="tab"
              aria-controls="vert-tabs-home"
              aria-selected="true"
              >Register</a
            >
            <a
              class="nav-link"
              id="vert-tabs-profile-tab"
              data-toggle="pill"
              href="#vert-tabs-profile"
              role="tab"
              aria-controls="vert-tabs-profile"
              aria-selected="false"
              >Product Category</a
            >
            <a
              class="nav-link"
              id="vert-tabs-messages-tab"
              data-toggle="pill"
              href="#vert-tabs-messages"
              role="tab"
              aria-controls="vert-tabs-messages"
              aria-selected="false"
              >Taxes</a
            >
            <a
              class="nav-link"
              id="vert-tabs-settings-tab"
              data-toggle="pill"
              href="#vert-tabs-settings"
              role="tab"
              aria-controls="vert-tabs-settings"
              aria-selected="false"
              >Additional Charge</a
            >
          </div>
        </div>

        <!-- Register -->
        <div class="col-7 col-sm-9">
          <div class="tab-content " id="vert-tabs-tabContent">
            <div
              class="tab-pane text-left fade active show"
              id="vert-tabs-home"
              role="tabpanel"
              aria-labelledby="vert-tabs-home-tab"
            >
              <form class="form-inline active-cyan-3 active-cyan-4">
                <i class="fas fa-search" aria-hidden="true"></i>
                <input
                  class="form-control form-control-sm ml-3 w-75"
                  type="text"
                  placeholder="Filter by register name"
                  aria-label="Search"
                />
                <a href="/settings/register" class="btn btn-sm btn-success ml-4">Add Register</a>
            </form>


              <div class="table table-hover bg-light gray mt-4 ml-auto">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">RegisterName</th>
                      <th scope="col">Receipt Number prefix</th>
                      <th scope="col">Print Receipt?(for NESpos Web) </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><a href="/settings/register">Main Register</a></td>
                      <td>NE</td>
                      <td>Yes</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- register end -->


            <!-- Category table -->
            <div
              class="tab-pane fade"
              id="vert-tabs-profile"
              role="tabpanel"
              aria-labelledby="vert-tabs-profile-tab"
            >
            <form class="form-inline active-cyan-3 active-cyan-4">
              <i class="fas fa-search" aria-hidden="true"></i>
              <input
                class="form-control form-control-sm ml-3 w-75"
                type="text"
                placeholder="Filter by category name"
                aria-label="Search"
              />
              <a href="/settings/category" class="btn btn-sm btn-success ml-4">Add Product Category</a>
            </form>

            <div class="table table-hover  bg-light gray mt-4 ml-auto">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Product Category Name</th>

                    <th scope="col">Sort Order</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><a href="/settings/category">General</a></td>
                    <td>-</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <!-- end of Category -->


          <!-- taxes table -->
            <div
              class="tab-pane fade"
              id="vert-tabs-messages"
              role="tabpanel"
              aria-labelledby="vert-tabs-messages-tab"
            >
            <form class="form-inline active-cyan-3 active-cyan-4">
              <i class="fas fa-search" aria-hidden="true"></i>
              <input
                class="form-control form-control-sm ml-3 w-75"
                type="text"
                placeholder="Filter by tax name"
                aria-label="Search"
              />
              <a href="/settings/tax" class="btn btn-sm btn-success ml-4">Add Taxes</a>
            </form>

            <div class="table  table-hover bg-light gray mt-4 ml-auto">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Tax Name</th>
                    <th scope="col">Tax Percent</th>
                    <th scope="col">Is Linked To A Tax Group? </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><a href="/settings/tax">Zero Tax</a></td>
                    <td>0</td>
                    <td>Yes</td>
                  </tr>
                </tbody>
              </table>
            </div>
            </div>
             <!-- end of Taxes -->


             <!-- additional charge table -->
            <div
              class="tab-pane fade "
              id="vert-tabs-settings"
              role="tabpanel"
              aria-labelledby="vert-tabs-settings-tab"
            >
            <form class="form-inline active-cyan-3 active-cyan-4">
              <i class="fas fa-search" aria-hidden="true"></i>
              <input
                class="form-control form-control-sm ml-3 w-75"
                type="text"
                placeholder="Filter by additional charge name"
                aria-label="Search"
              />
              <a href="/settings/charge" class="btn btn-sm btn-success ml-4">Add Additional Charge</a>
            </form>

            <div class="table table-hover  bg-light gray mt-4 ml-auto">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Additional Charge Name</th>
                    <th scope="col">Type</th>
                    <th scope="col">value</th>
                    <th scope="col">Tax Group</th>
                    <th scope="col">Is Automatically Added?</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><a href="/settings/charge">ABC</a></td>
                    <td>Cash</td>
                    <td>1</td>
                    <td>Zero Tax Group</td>
                    <td>No</td>
                  </tr>
                </tbody>
              </table>
            </div>
            </div>

            <!-- end of additionalcharge table -->

          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
