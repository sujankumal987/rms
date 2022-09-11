@extends('layouts.app')

@section('title', 'pettycash | RMS')

@section('content')

    <div class="card">
        <div class="card-header">
            <span class="text-bold text-lg">All Entries</span>
            <div class="card-tools">
                <button data-toggle="modal" data-target="#modal-default" class="btn btn-sm btn-success">Add Entry</button>
            </div>
        </div>
        <div class="card-body p-0 m-0">
            <table class="table table-bordered table-hover">
            <thead>
              <tr>
                <th scope="col">Date</th>
                <th scope="col">Amount</th>
                <th scope="col">Type</th>
                <th scope="col">Category</th>
                <th scope="col">Notes</th>
                <th scope="col">User</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                  <td>Sep 11, 2022, 5:50 PM</td>
                  <td>-250</td>
                  <td>Cash out</td>
                  <td>Petty cash out</td>
                  <td>hey</td>
                  <td>Sujan</td>
                    <td><a href="#"><i class="fas fa-trash-alt text-danger"></a></i></td>
              </tr>

            </tbody>
          </table>
    </div>
    </div>

    {{-- model --}}
    <div class="modal fade" id="modal-default" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">All Entry</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>
                        <span class="text-bold">Type</span>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="type" id="inlineRadio1"
                            value="option1">
                        <label class="form-check-label" for="inlineRadio1">Cash Out</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="type" id="inlineRadio2"
                            value="option2">
                        <label class="form-check-label" for="inlineRadio2">Cash In</label>
                    </div>
                    <div class="mt-3">
                        <div>
                            <label for="exampleInputtext" class="form-label">Amount</label>
                            <input type="number" class="form-control" id="amount" placeholder="Amount">
                            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                        </div>
                        <div class="mt-3">
                            <label for="exampleInputtext" class="form-label">Notes</label>
                            <input type="text" class="form-control" id="notes" placeholder="Notes">
                            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                        </div>
                    </div>
                    <div class="float-right mt-4 ">
                        <button type="button" class="btn btn-default mr-2">Cancle (Ecs)</button>
                        <button type="button" class="btn btn-primary">Add Cash Out</button>
                    </div>
                </div>
                </p>
            </div>

        </div>

    </div>
@endsection
