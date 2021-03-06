@extends('layouts.sleek.main')

@section('content')
<div>
  <div class="row">
      <div class="col-lg-12">
          <div class="card card-default">
              <div class="card-header bg-info card-header-border-bottom">
                  <h2>Detail Pengeluaran</h2>
              </div>
              <div class="card-body">
                <div class="row">
                  {{-- <div class="col-sm-6">
                      <div class="form-group">
                          <label for="name">Pembeli</label>
                          <input disabled type="text" class="form-control placeholder="John" value="{{ $sales->name }}">
                      </div>
                  </div> --}}
                  <div class="col-sm-6">
                      <div class="form-group">
                      <label for="lname">Kode Unil</label>
                      <input disabled type="text" class="form-control placeholder="CODE" value="{{ Str::upper($sales->code) }}">
                      </div>
                  </div>
                  <div class="col-sm-6">
                      <div class="form-group>
                          <label for="city">Jenis Pengeluaran</label>
                          <select disabled class="form-control">
                            <option>{{ $sales->type->name }} - ({{ $sales->type->description }})</option>
                          </select>
                      </div>
                  </div>
                  <div class="col-sm-6">
                      <div class="row">
                          <div class="col-6">
                              <div class="form-group">
                                  <label for="State">Tgl. Belanja</label>
                                  <input disabled type="text" class="form-control" placeholder="DD-MM-YYY" value="{{ $sales->sale_date }}">
                              </div>
                          </div>
                          <div class="col-6">
                              <div class="form-group">
                                  <label for="Zip">Tgl. Terima</label>
                                  <input disabled type="text" class="form-control" placeholder="DD-MM-YYY" value="{{ $sales->sent_date }}">
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-sm-6">
                      <div class="form-group">
                      <label for="lname">Keterangan</label>
                      <input disabled type="text" class="form-control" placeholder="Keterangan" value="{{ $sales->description }}">
                      </div>
                  </div>
              </div>
                <livewire:sale-list :salesId="$sales->id"></livewire:sale-list>
                <livewire:sale-entry :salesId="$sales->id"></livewire:sale-entry>
                @if (Auth::user()->role_id === 1)
                    <a href="{{ route('admin.sales.invoice', $sales->id) }}" class="btn btn-lg btn-warning">
                        <i class=" mdi mdi-file-document"></i>
                    </a>
                @else
                    <a href="{{ route('cashier.sales.invoice', $sales->id) }}" class="btn btn-lg btn-warning">
                        <i class=" mdi mdi-file-document"></i>
                    </a>
                @endif
              </div>
          </div>
        </div>
  </div>
</div>
@endsection