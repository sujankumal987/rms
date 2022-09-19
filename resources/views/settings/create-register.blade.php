@extends('layouts.app')
@section('title', 'Register | RMS')

@section('content')

    <div class="row align-items-start p-4">
        <div class="col-xs-12 col-md-4  p-4">
            <span class="text-aligncenter"><b>Your Register Details</b></span><br>
            <p class="text-aligncenter mt-2 text-gray">Enable receipt printing to print receipts while billing with this
                register.<br>


                <br> By default, The shop name will be printed on the receipt.
            </p>
        </div>
        <div class="col-xs-12 col-md-8  bg-white">
            <form class="p-4">
                <div class="mb-3">
                    <label for="exampleInputtext" class="form-label">Register Name</label>
                    <input type="text" class="form-control" id="registername" placeholder="Register name">
                    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                </div>
                <div class="mb-3">
                    <label for="exampleInputtext" class="form-label">Receipt Number Prefix </label>
                    <input type="text" class="form-control" id="receiptnumberprefix" placeholder="General">
                    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                </div>

                <div class="mb-3">
                    <label for="exampleTextarea" class="form-label">Bill Header </label>
                    <textarea class="form-control" id="billheader" rows="6"placeholder="Required example textarea" required></textarea>
                    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                </div>

                <div class="mb-3">
                    <label for="exampleTextarea" class="form-label">Bill Footer </label>
                    <textarea class="form-control" id="billfooter" rows="3"placeholder="Thank you. Visit Again" required></textarea>
                    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                </div>

                <div class="mb-3">
                    <label for="exampleInputtext" class="form-label">Printer Type (for SlickPOS Web)</label>
                    <select class="custom-select mr-sm-2" id="printertype">
                        <option value="1">3 inch receipt</option>
                        <option value="2">2 inch receipt</option>
                        <option value="2">A4 size</option>
                        <option value="2">A5 size</option>
                    </select>
                </div>

                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Print receipts and order tickets (for SlickPOS
                        Web)</label><br>
                    <input type="checkbox" class="form-check-input" id="exampleCheck2">
                    <label class="form-check-label" for="exampleCheck2">include shop logo in printed receipts (for SlickPOS
                        Web)</label>
                </div>
                <div class="mb-3">
                    <label for="exampleTextarea" class="form-label">Table Numbers </label>
                    <textarea class="form-control" id="tablenumbers" rows="2"placeholder="Eg:1-6 or 1,2,3(optional)" required></textarea>
                    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                </div>
                <a href="/settings" class="btn btn-secondary mt-2 mb-2">Go Back</a>
                <button type="submit" class="btn btn-success mt-2 mb-2">Save</button>
            </form>
        </div>
    </div>
@endsection
