<!-- begin sidebar scrollbar -->
@if (Auth::user()->role_id === 1)
    <div class="sidebar-scrollbar">
    
      <!-- sidebar menu -->
      <ul class="nav sidebar-inner" id="sidebar-menu">
        <li
          class="has-sub {{ active(['admin.sales', 'admin.sales.*', 'admin.purchase', 'admin.purchaes.*','admin.purchases.show'], 'expand active') }}">
          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard"
            aria-expanded="false" aria-controls="dashboard">
            <i class="mdi mdi-cart"></i>
            <span class="nav-text">Transaksi</span> <b class="caret"></b>
          </a>
          <ul class="collapse {{ active(['admin.sales', 'admin.sales.*', 'admin.purchase', 'admin.purchase.*','admin.purchases.show'], 'show') }}"
            id="dashboard" data-parent="#sidebar-menu">
            <div class="sub-menu">
    
              <li class="{{ active(['admin.purchase','admin.purchase.*'], 'active') }}">
                <a class="sidenav-item-link" href="{{ route('admin.purchase') }}">
                  <i class="mdi mdi-arrow-right-bold" style="padding-right: 8px;"></i>
                  <span class="nav-text">Pemasukan</span>
                  <span class="badge badge-success">IN</span>
                </a>
              </li>
              
              <li class="{{ active(['admin.sales','admin.sales.*'], 'active') }}">
                <a class="sidenav-item-link" href="{{ route('admin.sales') }}">
                  <i class="mdi mdi-arrow-left-bold" style="padding-right: 8px;"></i>
                  <span class="nav-text">Pengeluaran</span>
                  <span class="badge badge-warning">OUT</span>
                </a>
              </li>
            </div>
          </ul>
        </li>
        <li
          class="has-sub {{ active(['admin.category', 'admin.product', 'admin.unit', 'admin.sales-type', 'admin.purchase-type', 'admin.supplier'], 'expand active') }}">
          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#app"
            aria-expanded="false" aria-controls="app">
            <i class="mdi mdi-pencil-box-multiple"></i>
            <span class="nav-text">MASTER DATA</span> <b class="caret"></b>
          </a>
          <ul class="collapse {{ active([
            'admin.category',
            'admin.product',
            'admin.unit',
            'admin.sales-type',
            'admin.purchase-type',
            'admin.supplier',
            'admin.customer'
            ], 'show') }}" id="app" data-parent="#sidebar-menu">
            <div class="sub-menu">
    
              <li class="{{active(['admin.category'], 'active')}}">
                <a class="sidenav-item-link" href="{{ route('admin.category') }}">
                  <i class="mdi mdi-check-circle-outline" style="margin-right: 5px;"></i>
                  <span class="nav-text">Data Kat. Produk</span>
                </a>
              </li>
    
              <li class="{{active(['admin.unit'], 'active')}}">
                <a class="sidenav-item-link" href="{{ route('admin.unit') }}">
                  <i class="mdi mdi-check-circle-outline" style="margin-right: 5px;"></i>
                  <span class="nav-text">Satuan</span>
                </a>
              </li>
    
              <li class="{{active(['admin.sales-type'], 'active')}}">
                <a class="sidenav-item-link" href="{{ route('admin.sales-type') }}">
                  <i class="mdi mdi-check-circle-outline" style="margin-right: 5px;"></i>
                  <span class="nav-text">Jenis Pengeluaran</span>
                </a>
              </li>
    
              <li class="{{active(['admin.purchase-type'], 'active')}}">
                <a class="sidenav-item-link" href="{{ route('admin.purchase-type') }}">
                  <i class="mdi mdi-check-circle-outline" style="margin-right: 5px;"></i>
                  <span class="nav-text">Jenis Pembayaran</span>
                </a>
              </li>
    
              <li class="{{active(['admin.product'], 'active')}}">
                <a class="sidenav-item-link" href="{{ route('admin.product') }}">
                  <i class="mdi mdi-check-circle-outline" style="margin-right: 5px;"></i>
                  <span class="nav-text">Data Produk (HPS)</span>
                </a>
              </li>
    
              <li class="{{active(['admin.supplier'], 'active')}}">
                <a class="sidenav-item-link" href="{{ route('admin.supplier') }}">
                  <i class="mdi mdi-check-circle-outline" style="margin-right: 5px;"></i>
                  <span class="nav-text">Kurir</span>
                </a>
              </li>
    
              <li class="{{active(['admin.customer'], 'active')}}">
                <a class="sidenav-item-link" href="{{ route('admin.customer') }}">
                  <i class="mdi mdi-account-circle" style="margin-right: 5px;"></i>
                  <span class="nav-text">Pelanggan</span>
                </a>
              </li>
    
            </div>
          </ul>
        </li>
        <li class="has-sub {{ active(['admin.user','admin.role'], 'expand active') }}">
          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#user"
            aria-expanded="false" aria-controls="user">
            <i class="mdi mdi-account-group"></i>
            <span class="nav-text">User</span> <b class="caret"></b>
          </a>
          <ul class="collapse {{ active(['admin.user','admin.role'], 'show') }}" id="user" data-parent="#sidebar-menu">
            <div class="sub-menu">
              
              <li class="{{active(['admin.user'], 'active')}}">
                <a class="sidenav-item-link" href="{{ route('admin.role') }}">
                  <i class="mdi mdi-account-circle"></i>
                  <span class="nav-text" style="margin-left: 5px;">Role</span>
                  <span class="badge badge-success">role-list</span>
                </a>
              </li>

              <li class="{{active(['admin.user'], 'active')}}">
                <a class="sidenav-item-link" href="{{ route('admin.user') }}">
                  <i class="mdi mdi-account-circle"></i>
                  <span class="nav-text" style="margin-left: 5px;">User</span>
                  <span class="badge badge-success">user-list</span>
                </a>
              </li>
    
            </div>
          </ul>
    
        <li class="has-sub {{ active(['admin.report.*'], 'expand active') }}">
          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#report"
            aria-expanded="false" aria-controls="report">
            <i class="mdi mdi-file-document-box-multiple"></i>
            <span class="nav-text">Laporan</span> <b class="caret"></b>
          </a>
          <ul class="collapse {{ active(['admin.report.*'], 'show') }}" id="report" data-parent="#sidebar-menu">
            <div class="sub-menu">
    
              <li class="{{ active(['admin.report.sales'], 'active') }}">
                <a class="sidenav-item-link" href="{{ route('admin.report.sales') }}">
                  <i class="mdi mdi-book-open" style="padding-right: 8px;"></i>
                  <span class="nav-text">Pengeluaran</span>
                </a>
              </li>
    
              <li class="{{ active(['admin.report.purchase'], 'active') }}">
                <a class="sidenav-item-link" href="{{ route('admin.report.purchase') }}">
                  <i class="mdi mdi-book-open" style="padding-right: 8px;"></i>
                  <span class="nav-text">Pemasukan</span>
                </a>
              </li>
    
              <li class="{{ active(['admin.report.stock'], 'active') }}">
                <a class="sidenav-item-link" href="{{ route('admin.report.stock') }}">
                  <i class="mdi mdi-book-open" style="padding-right: 8px;"></i>
                  <span class="nav-text">Laporan Laba</span>
                </a>
              </li>
    
            </div>
          </ul>
        </li>
      </ul>
    
    </div>
@endif

@if (Auth::user()->role_id === 2)
    <div class="sidebar-scrollbar">
    
      <!-- sidebar menu -->
      <ul class="nav sidebar-inner" id="sidebar-menu">
        <li
          class="has-sub {{ active(['cashier.sales', 'cashier.sales.*', 'cashier.purchase', 'cashier.purchaes.*'], 'expand active') }}">
          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard"
            aria-expanded="false" aria-controls="dashboard">
            <i class="mdi mdi-cart"></i>
            <span class="nav-text">Transaksi</span> <b class="caret"></b>
          </a>
          <ul class="collapse {{ active(['cashier.sales', 'cashier.sales.*', 'cashier.purchase', 'cashier.purchase.*'], 'show') }}"
            id="dashboard" data-parent="#sidebar-menu">
            <div class="sub-menu">
    
              <li class="{{ active(['cashier.sales','cashier.sales.*'], 'active') }}">
                <a class="sidenav-item-link" href="{{ route('cashier.sales') }}">
                  <i class="mdi mdi-arrow-left-bold" style="padding-right: 8px;"></i>
                  <span class="nav-text">Pengeluaran</span>
                  <span class="badge badge-warning">OUT</span>
                </a>
              </li>
    
              <li class="{{ active(['cashier.purchase','cashier.purchase.*'], 'active') }}">
                <a class="sidenav-item-link" href="{{ route('cashier.purchase') }}">
                  <i class="mdi mdi-arrow-right-bold" style="padding-right: 8px;"></i>
                  <span class="nav-text">Pemasukan</span>
                  <span class="badge badge-success">IN</span>
                </a>
              </li>
    
            </div>
          </ul>
        </li>
      </ul>
    
    </div>
@endif

@if (Auth::user()->role_id === 3)
    <div class="sidebar-scrollbar">
    
      <!-- sidebar menu -->
      <ul class="nav sidebar-inner" id="sidebar-menu">   
        <li class="has-sub {{ active(['secertary.report.*'], 'expand active') }}">
          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#report"
            aria-expanded="false" aria-controls="report">
            <i class="mdi mdi-file-document-box-multiple"></i>
            <span class="nav-text">Laporan</span> <b class="caret"></b>
          </a>
          <ul class="collapse {{ active(['secertary.report.*'], 'show') }}" id="report" data-parent="#sidebar-menu">
            <div class="sub-menu">
    
              <li class="{{ active(['secertary.report.sales'], 'active') }}">
                <a class="sidenav-item-link" href="{{ route('secertary.report.sales') }}">
                  <i class="mdi mdi-book-open" style="padding-right: 8px;"></i>
                  <span class="nav-text">Pengeluaran</span>
                </a>
              </li>
    
              <li class="{{ active(['secertary.report.purchase'], 'active') }}">
                <a class="sidenav-item-link" href="{{ route('secertary.report.purchase') }}">
                  <i class="mdi mdi-book-open" style="padding-right: 8px;"></i>
                  <span class="nav-text">Pemasukan</span>
                </a>
              </li>
    
              <li class="{{ active(['secertary.report.stock'], 'active') }}">
                <a class="sidenav-item-link" href="{{ route('secertary.report.stock') }}">
                  <i class="mdi mdi-book-open" style="padding-right: 8px;"></i>
                  <span class="nav-text">Kosong</span>
                </a>
              </li>
    
            </div>
          </ul>
        </li>
      </ul>
    
    </div>
@endif