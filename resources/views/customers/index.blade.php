@extends('layouts.app')

@section('title', 'customer | RMS')

@section('content')

<div class=" table bg-light gray mt-4 ml-auto">
    <table class="table">
    <thead>
      <tr>
        <th scope="col">Mobile</th>
        <th scope="col">Name</th>
        <th scope="col">Order Count</th>
        <th scope="col">Order value</th>
        <th scope="col">Last Seen</th>
      </tr>
    </thead>
    <tbody>
      <tr>
          <td><a href="/customers/edit">9898989898</a></td>
          <td>sujan maskey</td>
          <td>1</td>
          <td>250.00</td>
          <td>August 14, 2022, 4:00 PM</td>
      </tr>

    </tbody>
  </table>
</div>

@endsection
