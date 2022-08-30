<div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2>Form Data Pemasukan</h2>
                </div>
                <div class="card-body">
                    @if ($editPurchases)
                    <livewire:purchase-edit></livewire:purchase-edit>
                    @else
                    <livewire:purchase-create></livewire:purchase-create>
                    @endif
                    
                    <table class="table table-hover ">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Kurir</th>
                                <th scope="col">Tipe</th>
                                <th scope="col">Kode</th>
                                <th scope="col">Tgl. Pesan</th>
                                <th scope="col">Tgl. Terima</th>
                                <th scope="col">Penerima</th>
                                <th scope="col">Alamat</th>
                                <th>Total</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($purchases as $purchase)
                            <tr>
                                <td scope="row">{{$purchase->id}}</td>
                                <td>{{$purchase->supplier->name}}</td>
                                <td>{{$purchase->purchase_type_id}}</td>
                                <td>{{$purchase->code}}</td>
                                <td>{{$purchase->purchase_date}}</td>
                                <td>{{$purchase->sent_date}}</td>
                                <td>{{$purchase->customer->name}}</td>
                                <td>{{$purchase->address}}</td>
                                <td>(Total Formula)</td>
                                <td>
                                    @if(!$purchase->completed)
                                        <button wire:click="getPurchases({{$purchase->id}})" class="btn btn-sm btn-info text-white">Edit</button>
                                        @if(auth()->user()->role->id == 1 )
                                        <a href="{{ route('admin.purchases.show', $purchase->id) }}" wire:click="getPurchases({{ $purchase->id }})" type="a" class="mb-1 btn btn-sm btn-success">
                                            <i class=" mdi mdi-checkbox-marked-outline mr-1"></i> Process
                                        </a>
                                        @else
                                        <a href="{{ route('front-office.purchases.show', $purchase->id) }}" wire:click="getPurchases({{ $purchase->id }})" type="a" class="mb-1 btn btn-sm btn-success">
                                            <i class=" mdi mdi-checkbox-marked-outline mr-1"></i> Process
                                        </a>
                                        @endif
                                    @endif
                                    @if ($purchase->products->count() > 0 && auth()->user()->role->id == 1)
                                        <a href="{{ route('admin.purchase.invoice', $purchase->id) }}" wire:click="showPurchases" type="button"
                                            class="mb-1 btn btn-sm btn-warning">
                                            <i class=" mdi mdi-file-document"></i> Invoice
                                        </a>
                                    @endif

                                    @if ($purchase->completed && auth()->user()->role->id >= 2)
                                            <a class="mb-1 btn btn-sm btn-warning">
                                                <i class=" mdi mdi-file-document"></i> Selesai
                                            </a>
                                        @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $purchases->links() }}
                </div>
            </div>
        </div
    </div>
</div>
