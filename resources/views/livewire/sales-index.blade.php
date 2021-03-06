<div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2>Form Data Pengeluaran</h2>
                </div>
                <div class="card-body">
                    @if (session()->has('message'))
                    <div class="alert alert-dismissible fade show alert-{{strpos(session('message'), 'Deleted') ? 'danger':'success'}}" role="alert">
                        {{ session('message') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    @endif

                    @if ($editSales)
                    <livewire:sales-edit></livewire:sales-edit>
                    @else
                    <livewire:sales-create></livewire:sales-create>
                    @endif
                    
                    <table class="table table-hover ">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Jenis</th>
                                <th scope="col">Kode</th>
                                <th scope="col">Tgl. Belanja</th>
                                <th scope="col">Tgl. Terima</th>
                                <th scope="col">Keterangan</th>
                                <th>Total</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sales as $sale)
                            <tr>
                                <td scope="row">{{$sale->id}}</td>
                                <td>{{$sale->type->name}}</td>
                                <td>{{$sale->code}}</td>
                                <td>{{$sale->sale_date}}</td>
                                <td>{{$sale->sent_date}}</td>
                                <td>{{Str::limit($sale->description,10)}}</td>
                                <td>(Formula Total)</td>
                                <td>
                                    <button wire:click="getSales({{$sale->id}})" class="btn btn-sm btn-info text-white">Edit</button>
                                    {{-- <button wire:click="destroy({{$sale->id}})" class="btn btn-sm btn-danger text-white">Delete</button> --}}
                                    @if (Auth::user()->role_id === 1)
                                        <a href="{{ route('admin.sales.show', $sale->id) }}" wire:click="getSales({{ $sale->id }})" type="a"
                                            class="mb-1 btn btn-sm btn-success">
                                            <i class=" mdi mdi-checkbox-marked-outline mr-1"></i> Process
                                        </a>
                                    @else
                                        <a href="{{ route('cashier.sales.show', $sale->id) }}" wire:click="getSales({{ $sale->id }})" type="a"
                                            class="mb-1 btn btn-sm btn-success">
                                            <i class=" mdi mdi-checkbox-marked-outline mr-1"></i> Process
                                        </a>
                                    @endif
                                    @if ($sale->products->count() > 0)
                                        <a href="{{ route('admin.sales.invoice', $sale->id) }}" class="mb-1 btn btn-sm btn-warning">
                                            <i class=" mdi mdi-file-document"></i> Invoice
                                        </a>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $sales->links() }}
                </div>
            </div>
        </div
    </div>
</div>
