@extends('layouts.app')

@section('title', 'Dashboard - Laravel Admin Panel')

@section('contents')
  <div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Dashboard</h1>
        <hr>
      </div>
    </div>
    <div class="row">
        <div class="col-lg-4 col-md-6" style="background-color: yellow; color:black; margin-left:13px; border-radius:10px; margin-bottom:25px">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <div class="row">
                <div class="col-xs-3">
                  <img src="{{ asset('admin_assets/img/stok-barang.png') }}" alt="Rack" class="img-responsive" style="width: 200px; margin: 25px 25px">
                </div>
                <div class="col-xs-9 text-center" style="font-size: 25px; margin-top: 80px; margin-left: 30px; font-family: 'Courier New', Courier, monospace">
                  <div class="huge">{{ $productCount }}</div>
                  <div>Total Products</div>
                </div>
              </div>
            </div>
            <!-- ... (existing code) ... -->
          </div>
        </div>

        <!-- Panel 2: Total Price -->
        <div class="col-lg-4 col-md-6" style="background-color: green; color:white; margin-left:50px; border-radius:10px; margin-bottom:25px">
          <div class="panel panel-green">
            <div class="panel-heading">
              <div class="row">
                <div class="col-xs-3">
                  <img src="{{ asset('admin_assets/img/uang.png') }}" alt="Money" class="img-responsive" style="width: 170px; margin: 40px 50px;">
                </div>
                <div class="col-xs-9 text-center" style="font-size: 30px; margin-top: 80px; margin-left: 30px; font-family: 'Courier New', Courier, monospace">
                    <div style="text">Total Price</div>
                    <div class="huge">Rp {{ number_format($totalPrice, 0, ',', '.') }}</div>
                </div>
              </div>
            </div>
          </div>
        </div>
  </div>
@endsection
