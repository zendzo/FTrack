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
        <h2>Recent Orders</h2>
        <div class="date-range-report ">
          <span></span>
        </div>
      </div>
      <div class="card-body pt-0 pb-5">
        <table class="table card-table table-responsive table-responsive-large" style="width:100%">
          <thead>
            <tr>
              <th>Order ID</th>
              <th>Product Name</th>
              <th class="d-none d-lg-table-cell">Units</th>
              <th class="d-none d-lg-table-cell">Order Date</th>
              <th class="d-none d-lg-table-cell">Order Cost</th>
              <th>Status</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>24541</td>
              <td>
                <a class="text-dark" href=""> Coach Swagger</a>
              </td>
              <td class="d-none d-lg-table-cell">1 Unit</td>
              <td class="d-none d-lg-table-cell">Oct 20, 2018</td>
              <td class="d-none d-lg-table-cell">$230</td>
              <td>
                <span class="badge badge-success">Completed</span>
              </td>
              <td class="text-right">
                <div class="dropdown show d-inline-block widget-dropdown">
                  <a class="dropdown-toggle icon-burger-mini" href="" role="button" id="dropdown-recent-order1"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"></a>
                  <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-recent-order1">
                    <li class="dropdown-item">
                      <a href="#">View</a>
                    </li>
                    <li class="dropdown-item">
                      <a href="#">Remove</a>
                    </li>
                  </ul>
                </div>
              </td>
            </tr>
            <tr>
              <td>24541</td>
              <td>
                <a class="text-dark" href=""> Toddler Shoes, Gucci Watch</a>
              </td>
              <td class="d-none d-lg-table-cell">2 Units</td>
              <td class="d-none d-lg-table-cell">Nov 15, 2018</td>
              <td class="d-none d-lg-table-cell">$550</td>
              <td>
                <span class="badge badge-warning">Delayed</span>
              </td>
              <td class="text-right">
                <div class="dropdown show d-inline-block widget-dropdown">
                  <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdown-recent-order2"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"></a>
                  <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-recent-order2">
                    <li class="dropdown-item">
                      <a href="#">View</a>
                    </li>
                    <li class="dropdown-item">
                      <a href="#">Remove</a>
                    </li>
                  </ul>
                </div>
              </td>
            </tr>
            <tr>
              <td>24541</td>
              <td>
                <a class="text-dark" href=""> Hat Black Suits</a>
              </td>
              <td class="d-none d-lg-table-cell">1 Unit</td>
              <td class="d-none d-lg-table-cell">Nov 18, 2018</td>
              <td class="d-none d-lg-table-cell">$325</td>
              <td>
                <span class="badge badge-warning">On Hold</span>
              </td>
              <td class="text-right">
                <div class="dropdown show d-inline-block widget-dropdown">
                  <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdown-recent-order3"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"></a>
                  <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-recent-order3">
                    <li class="dropdown-item">
                      <a href="#">View</a>
                    </li>
                    <li class="dropdown-item">
                      <a href="#">Remove</a>
                    </li>
                  </ul>
                </div>
              </td>
            </tr>
            <tr>
              <td>24541</td>
              <td>
                <a class="text-dark" href=""> Backpack Gents, Swimming Cap Slin</a>
              </td>
              <td class="d-none d-lg-table-cell">5 Units</td>
              <td class="d-none d-lg-table-cell">Dec 13, 2018</td>
              <td class="d-none d-lg-table-cell">$200</td>
              <td>
                <span class="badge badge-success">Completed</span>
              </td>
              <td class="text-right">
                <div class="dropdown show d-inline-block widget-dropdown">
                  <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdown-recent-order4"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"></a>
                  <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-recent-order4">
                    <li class="dropdown-item">
                      <a href="#">View</a>
                    </li>
                    <li class="dropdown-item">
                      <a href="#">Remove</a>
                    </li>
                  </ul>
                </div>
              </td>
            </tr>
            <tr>
              <td>24541</td>
              <td>
                <a class="text-dark" href=""> Speed 500 Ignite</a>
              </td>
              <td class="d-none d-lg-table-cell">1 Unit</td>
              <td class="d-none d-lg-table-cell">Dec 23, 2018</td>
              <td class="d-none d-lg-table-cell">$150</td>
              <td>
                <span class="badge badge-danger">Cancelled</span>
              </td>
              <td class="text-right">
                <div class="dropdown show d-inline-block widget-dropdown">
                  <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdown-recent-order5"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"></a>
                  <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-recent-order5">
                    <li class="dropdown-item">
                      <a href="#">View</a>
                    </li>
                    <li class="dropdown-item">
                      <a href="#">Remove</a>
                    </li>
                  </ul>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-xl-4">
    <!-- New Customers -->
    <div class="card card-table-border-none" data-scroll-height="580">
      <div class="card-header justify-content-between ">
        <h2>New Customers</h2>
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
            <tr>
              <td>
                <div class="media">
                  <div class="media-image mr-3 rounded-circle">
                    <a href="profile.html"><img class="rounded-circle w-45" src="assets/img/user/u1.jpg"
                        alt="customer image"></a>
                  </div>
                  <div class="media-body align-self-center">
                    <a href="profile.html">
                      <h6 class="mt-0 text-dark font-weight-medium">Selena Wagner</h6>
                    </a>
                    <small>@selena.oi</small>
                  </div>
                </div>
              </td>
              <td>2 Orders</td>
              <td class="text-dark d-none d-md-block">$150</td>
            </tr>
            <tr>
              <td>
                <div class="media">
                  <div class="media-image mr-3 rounded-circle">
                    <a href="profile.html"><img class="rounded-circle w-45" src="assets/img/user/u2.jpg"
                        alt="customer image"></a>
                  </div>
                  <div class="media-body align-self-center">
                    <a href="profile.html">
                      <h6 class="mt-0 text-dark font-weight-medium">Walter Reuter</h6>
                    </a>
                    <small>@walter.me</small>
                  </div>
                </div>
              </td>
              <td>5 Orders</td>
              <td class="text-dark d-none d-md-block">$200</td>
            </tr>
            <tr>
              <td>
                <div class="media">
                  <div class="media-image mr-3 rounded-circle">
                    <a href="profile.html"><img class="rounded-circle w-45" src="assets/img/user/u3.jpg"
                        alt="customer image"></a>
                  </div>
                  <div class="media-body align-self-center">
                    <a href="profile.html">
                      <h6 class="mt-0 text-dark font-weight-medium">Larissa Gebhardt</h6>
                    </a>
                    <small>@larissa.gb</small>
                  </div>
                </div>
              </td>
              <td>1 Order</td>
              <td class="text-dark d-none d-md-block">$50</td>
            </tr>
            <tr>
              <td>
                <div class="media">
                  <div class="media-image mr-3 rounded-circle">
                    <a href="profile.html"><img class="rounded-circle w-45" src="assets/img/user/u4.jpg"
                        alt="customer image"></a>
                  </div>
                  <div class="media-body align-self-center">
                    <a href="profile.html">
                      <h6 class="mt-0 text-dark font-weight-medium">Albrecht Straub</h6>
                    </a>
                    <small>@albrech.as</small>
                  </div>
                </div>
              </td>
              <td>2 Orders</td>
              <td class="text-dark d-none d-md-block">$100</td>
            </tr>
            <tr>
              <td>
                <div class="media">
                  <div class="media-image mr-3 rounded-circle">
                    <a href="profile.html"><img class="rounded-circle w-45" src="assets/img/user/u5.jpg"
                        alt="customer image"></a>
                  </div>
                  <div class="media-body align-self-center">
                    <a href="profile.html">
                      <h6 class="mt-0 text-dark font-weight-medium">Leopold Ebert</h6>
                    </a>
                    <small>@leopold.et</small>
                  </div>
                </div>
              </td>
              <td>1 Order</td>
              <td class="text-dark d-none d-md-block">$60</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-lg-6 col-12">
    <!-- Top Sell Table -->
    <div class="card card-table-border-none" data-scroll-height="550">
      <div class="card-header justify-content-between">
        <h2>Top Products</h2>
        <div>
          <button class="text-black-50 mr-2 font-size-20"><i class="mdi mdi-cached"></i></button>
          <div class="dropdown show d-inline-block widget-dropdown">
            <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdown-units"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"></a>
            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-units">
              <li class="dropdown-item"><a href="#">Action</a></li>
              <li class="dropdown-item"><a href="#">Another action</a></li>
              <li class="dropdown-item"><a href="#">Something else here</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="card-body slim-scroll py-0">
        <table class="table ">
          <tbody>
            <tr>
              <td class="text-dark">Backpack</td>
              <td class="text-center">9</td>
              <td class="text-right">33% <i class="mdi mdi-arrow-up-bold text-success pl-1 font-size-12"></i> </td>
            </tr>
            <tr>
              <td class="text-dark">T-Shirt</td>
              <td class="text-center">6</td>
              <td class="text-right">150% <i class="mdi mdi-arrow-up-bold text-success pl-1 font-size-12"></i> </td>
            </tr>
            <tr>
              <td class="text-dark">Coat</td>
              <td class="text-center">3</td>
              <td class="text-right">50% <i class="mdi mdi-arrow-up-bold text-success pl-1 font-size-12"></i> </td>
            </tr>
            <tr>
              <td class="text-dark">Necklace</td>
              <td class="text-center">7</td>
              <td class="text-right">150% <i class="mdi mdi-arrow-up-bold text-success pl-1 font-size-12"></i> </td>
            </tr>
            <tr>
              <td class="text-dark">Jeans Pant</td>
              <td class="text-center">10</td>
              <td class="text-right">300% <i class="mdi mdi-arrow-down-bold text-danger pl-1 font-size-12"></i> </td>
            </tr>
            <tr>
              <td class="text-dark">Shoes</td>
              <td class="text-center">5</td>
              <td class="text-right">100% <i class="mdi mdi-arrow-up-bold text-success pl-1 font-size-12"></i> </td>
            </tr>
            <tr>
              <td class="text-dark">T-Shirt</td>
              <td class="text-center">6</td>
              <td class="text-right">150% <i class="mdi mdi-arrow-up-bold text-success pl-1 font-size-12"></i> </td>
            </tr>
          </tbody>
        </table>

      </div>
      <div class="card-footer bg-white py-4">
        <a href="#" class="btn-link py-3 text-uppercase">View Report</a>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-lg-6 col-12">
    <!-- Top Sell Table -->
    <div class="card card-table-border-none" data-scroll-height="550">
      <div class="card-header justify-content-between">
        <h2>Sold by Units</h2>
        <div>
          <button class="text-black-50 mr-2 font-size-20"><i class="mdi mdi-cached"></i></button>
          <div class="dropdown show d-inline-block widget-dropdown">
            <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdown-units"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"></a>
            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-units">
              <li class="dropdown-item"><a href="#">Action</a></li>
              <li class="dropdown-item"><a href="#">Another action</a></li>
              <li class="dropdown-item"><a href="#">Something else here</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="card-body slim-scroll py-0">
        <table class="table ">
          <tbody>
            <tr>
              <td class="text-dark">Backpack</td>
              <td class="text-center">9</td>
              <td class="text-right">33% <i class="mdi mdi-arrow-up-bold text-success pl-1 font-size-12"></i> </td>
            </tr>
            <tr>
              <td class="text-dark">T-Shirt</td>
              <td class="text-center">6</td>
              <td class="text-right">150% <i class="mdi mdi-arrow-up-bold text-success pl-1 font-size-12"></i> </td>
            </tr>
            <tr>
              <td class="text-dark">Coat</td>
              <td class="text-center">3</td>
              <td class="text-right">50% <i class="mdi mdi-arrow-up-bold text-success pl-1 font-size-12"></i> </td>
            </tr>
            <tr>
              <td class="text-dark">Necklace</td>
              <td class="text-center">7</td>
              <td class="text-right">150% <i class="mdi mdi-arrow-up-bold text-success pl-1 font-size-12"></i> </td>
            </tr>
            <tr>
              <td class="text-dark">Jeans Pant</td>
              <td class="text-center">10</td>
              <td class="text-right">300% <i class="mdi mdi-arrow-down-bold text-danger pl-1 font-size-12"></i> </td>
            </tr>
            <tr>
              <td class="text-dark">Shoes</td>
              <td class="text-center">5</td>
              <td class="text-right">100% <i class="mdi mdi-arrow-up-bold text-success pl-1 font-size-12"></i> </td>
            </tr>
            <tr>
              <td class="text-dark">T-Shirt</td>
              <td class="text-center">6</td>
              <td class="text-right">150% <i class="mdi mdi-arrow-up-bold text-success pl-1 font-size-12"></i> </td>
            </tr>
          </tbody>
        </table>

      </div>
      <div class="card-footer bg-white py-4">
        <a href="#" class="btn-link py-3 text-uppercase">View Report</a>
      </div>
    </div>
  </div>
</div>
@endsection