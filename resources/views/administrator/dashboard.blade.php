@extends('layouts.sleek.main')

@section('scripts')
    <script src="{{ asset('admin/assets/plugins/charts/Chart.min.js') }}"></script>
@endsection

@section('content')
<!-- Top Statistics -->
<div class="row">
  <div class="col-xl-3 col-sm-6">
    <div class="card card-mini mb-4">
      <div class="card-body">
        <h2 class="mb-1">71,503</h2>
        <p>Online Signups</p>
        <div class="chartjs-wrapper">
          <canvas id="barChart"></canvas>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6">
    <div class="card card-mini  mb-4">
      <div class="card-body">
        <h2 class="mb-1">9,503</h2>
        <p>New Visitors Today</p>
        <div class="chartjs-wrapper">
          <canvas id="dual-line"></canvas>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6">
    <div class="card card-mini mb-4">
      <div class="card-body">
        <h2 class="mb-1">71,503</h2>
        <p>Monthly Total Order</p>
        <div class="chartjs-wrapper">
          <canvas id="area-chart"></canvas>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6">
    <div class="card card-mini mb-4">
      <div class="card-body">
        <h2 class="mb-1">9,503</h2>
        <p>Total Revenue This Year</p>
        <div class="chartjs-wrapper">
          <canvas id="line"></canvas>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-12">
    <!-- Recent Order Table -->
    <div class="card card-table-border-none" id="recent-orders">
      <div class="card-header justify-content-between">
        <h2>Pemasukan Terbaru</h2>
        <div class="date-range-report ">
          <span></span>
        </div>
      </div>
      <div class="card-body pt-0 pb-5">
        <table class="table card-table table-responsive table-responsive-large" style="width:100%">
          <thead>
            <tr>
              <th>Code Pes.</th>
              <th>Nama Pelanggan</th>
              <th class="d-none d-lg-table-cell">Quantity</th>
              <th class="d-none d-lg-table-cell">Tgl. Pemesanan</th>
              <th class="d-none d-lg-table-cell">Biaya Pemesanan</th>
              <th>Status</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($purchases as $purchase)
                <tr>
                  <td>{{ strtoupper($purchase->code) }}</td>
                  <td>
                    <a class="text-dark" href=""> {{ $purchase->customer->name}}</a>
                  </td>
                  <td class="d-none d-lg-table-cell">{{ $purchase->products->count() }}</td>
                  <td class="d-none d-lg-table-cell">{{ $purchase->purchase_date->format('D, d M y')}}</td>
                  <td class="d-none d-lg-table-cell">{{ $purchase->products[0]->pivot->grand_total + $purchase->products[0]->pivot->delivery_fee}}</td>
                  <td>
                    @if ($purchase->completed)
                        <span class="badge badge-success">Completed</span>
                    @else
                        <span class="badge badge-warning">Pending</span>
                    @endif
                  </td>
                  <td class="text-right">
                    <div class="dropdown show d-inline-block widget-dropdown">
                      <a class="dropdown-toggle icon-burger-mini" href="" role="button" id="dropdown-recent-order1"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"></a>
                      <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-recent-order1">
                        <li class="dropdown-item">
                          <a href="{{ route('admin.purchases.show',$purchase->id) }}">View</a>
                        </li>
                      </ul>
                    </div>
                  </td>
                </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-xl-5">
    <!-- New Customers -->
    <div class="card card-table-border-none" data-scroll-height="580">
      <div class="card-header justify-content-between ">
        <h2>Pelanggan Baru</h2>
        <div>
          <button class="text-black-50 mr-2 font-size-20">
            <i class="mdi mdi-cached"></i>
          </button>
          <div class="dropdown show d-inline-block widget-dropdown">
            <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdown-customar"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
            </a>
            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-customar">
              <li class="dropdown-item"><a href="#">Action</a></li>
              <li class="dropdown-item"><a href="#">Another action</a></li>
              <li class="dropdown-item"><a href="#">Something else here</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="card-body pt-0">
        <table class="table ">
          <tbody>
            @foreach ($customers as $customer)
                <tr>
                  <td>
                    <div class="media">
                      <div class="media-image mr-3 rounded-circle">
                        <a href="#"><img src="https://ui-avatars.com/api/?name={{$customer->name}}&amp;color=7F9CF5&amp;background=EBF4FF" class="user-image"
                          alt="User Image"></a>
                      </div>
                      <div class="media-body align-self-center">
                        <a href="#">
                          <h6 class="mt-0 text-dark font-weight-medium">{{ $customer->name }}</h6>
                        </a>
                        <small>{{ $customer->address }}</small>
                      </div>
                    </div>
                  </td>
                  <td>{{ $customer->purchases->count() }} Pemesanan</td>
                  {{-- <td class="text-dark d-none d-md-block">$777</td> --}}
                </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="col-xl-7 col-lg-6 col-12">
    <!-- Top Sell Table -->
    <div class="card card-default" data-scroll-height="580">
      <div class="card-header justify-content-between mb-4">
        <h2>Top Products</h2>
        <div>
          <button class="text-black-50 mr-2 font-size-20"><i class="mdi mdi-cached"></i></button>
          <div class="dropdown show d-inline-block widget-dropdown">
            <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdown-product" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false" data-display="static">
            </a>
            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-product">
              <li class="dropdown-item"><a href="#">Update Data</a></li>
              <li class="dropdown-item"><a href="#">Detailed Log</a></li>
              <li class="dropdown-item"><a href="#">Statistics</a></li>
              <li class="dropdown-item"><a href="#">Clear Data</a></li>
            </ul>
          </div>
        </div>
    
      </div>
      <div class="card-body py-0">
        <div class="media d-flex mb-5">
          <div class="media-image align-self-center mr-3 rounded">
            <a href="#"><img src="assets/img/products/p1.jpg" alt="customer image"></a>
          </div>
          <div class="media-body align-self-center">
            <a href="#">
              <h6 class="mb-3 text-dark font-weight-medium"> Coach Swagger</h6>
            </a>
            <p class="float-md-right"><span class="text-dark mr-2">20</span>Sales</p>
            <p class="d-none d-md-block">Statement belting with double-turnlock hardware adds “swagger” to a simple.</p>
            <p class="mb-0">
              <del>$300</del>
              <span class="text-dark ml-3">$250</span>
            </p>
          </div>
        </div>
    
        <div class="media d-flex mb-5">
          <div class="media-image align-self-center mr-3 rounded">
            <a href="#"><img src="assets/img/products/p2.jpg" alt="customer image"></a>
          </div>
          <div class="media-body align-self-center">
            <a href="#">
              <h6 class="mb-3 text-dark font-weight-medium"> Coach Swagger</h6>
            </a>
            <p class="float-md-right"><span class="text-dark mr-2">20</span>Sales</p>
            <p class="d-none d-md-block">Statement belting with double-turnlock hardware adds “swagger” to a simple.</p>
            <p class="mb-0">
              <del>$300</del>
              <span class="text-dark ml-3">$250</span>
            </p>
          </div>
        </div>
    
        <div class="media d-flex mb-5">
          <div class="media-image align-self-center mr-3 rounded">
            <a href="#"><img src="assets/img/products/p3.jpg" alt="customer image"></a>
          </div>
          <div class="media-body align-self-center">
            <a href="#">
              <h6 class="mb-3 text-dark font-weight-medium"> Gucci Watch</h6>
            </a>
            <p class="float-md-right"><span class="text-dark mr-2">10</span>Sales</p>
            <p class="d-none d-md-block">Statement belting with double-turnlock hardware adds “swagger” to a simple.</p>
            <p class="mb-0">
              <del>$300</del>
              <span class="text-dark ml-3">$50</span>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection