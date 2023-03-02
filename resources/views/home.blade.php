@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex">
        <p style="margin-left: 2px; font-weight: bold;">Master Barang</p>
        <p style="margin-left: 5px;">/ Tampilkan Stock</p>
    </div>
<div class="col-lg- col-md- mx-auto">
    <div class="card card-user">
        <div class="image">
        <img src="{{asset('asset/img/wd.png')}}" width="1110px" alt="...">
        </div>
    </div>
</div>
<table class="table" style="margin-top: 10%">
    <thead>
      <tr>
        <th scope="col">Kode Barang</th>
        <th scope="col">Nama Barang </th>
        <th scope="col">Brand</th>
        <th scope="col">UOM</th>
        <th scope="col">Price</th>
      </tr>
    </thead>
  </table>
@endsection

