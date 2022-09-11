@extends('layouts.app')

@section('title' , 'product | RMS')

@section('content')


<div class="card">
    <div class="card-header">
        <span class="text-bold text-lg">All Products</span>
        <div class="card-tools">
            <button data-toggle="modal" data-target="#modal-default" class="btn btn-sm btn-success">Add Prdouct</button>
        </div>
    </div>
        <div class="card-body p-0 m-0">
                <table class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th scope="col">Product Name</th>
                    <th scope="col">Product Option</th>
                    <th scope="col">Product Category</th>
                    <th scope="col">Tax Group</th>
                    <th scope="col">Product Price</th>
                    <th scope="col">Sort Order</th>

                  </tr>
                </thead>
                <tbody>
                  <tr>
                      <td><a href="/products/edit">Burger</a></td>
                      <td>-</td>
                      <td>General</td>
                      <td>Zero Tax Group</td>
                      <td>75.00</td>
                      <td>-</td>
                  </tr>

                </tbody>
              </table>
        </div>
</div>

<div class="modal fade" id="modal-default" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">All Product</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <p>

                    <form class="p-4">
                        <div class="mb-3">
                          <label for="exampleInputtext" class="form-label">Product Name</label>
                          <input type="text" class="form-control" id="productname" placeholder="Product name">
                          <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputtext" class="form-label">Product Category</label>
                            <select class="custom-select mr-sm-2" id="taxgroup">
                                <option value="1">Select general</option>
                                <option value="2">General</option>
                            </select>
                            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputtext" class="form-label">Tax Group</label>
                            <select class="custom-select mr-sm-2" id="taxgroup">
                                <option value="1">Select Tax Group</option>
                                <option value="2">Zero Tax Group</option>
                            </select>
                            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputtext" class="form-label">Product Price</label>
                            <input type="number" class="form-control" id="productprice"placeholder="Product Price">
                            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                        </div>
                        <a href="/products" class="btn btn-secondary mb-2">Go Back</a>
                        <button type="submit" class="btn btn-success mb-2">Save</button>
                    </form>
            </div>
            </p>
        </div>

    </div>

</div>

@endsection
