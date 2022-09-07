<div class="card card-default">
    <div class="card-header bg-success card-header-border-bottom">
        <h2>Detail Pemasukan</h2>
    </div>
    <div class="card-body">
        {{-- <form wire:submit.prevent="addSales"> --}}
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="name">Kurir</label>
                        <select class="form-control @error('supplier_id') is-invalid @enderror" wire:model.lazy="supplier_id">
                            <option value="-1">Select</option>
                            @foreach ($suppliers as $supplier)
                            <option value="{{$supplier->id}}">{{$supplier->name}} - ({{ $supplier->description }})</option>
                            @endforeach
                        </select>
                        @error('supplier_id')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                    <label for="lname">Kode Unik</label>
                    <input type="text" class="form-control @error('code') is-invalid @enderror" wire:model.lazy="code" placeholder="CODE">
                    @error('code')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="city">Jenis Pembayaran</label>
                        <select class="form-control @error('purchase_type_id') is-invalid @enderror" wire:model.lazy="purchase_type_id">
                            <option value="-1">Select</option>
                            @foreach ($purchasesType as $type)
                            <option value="{{$type->id}}">{{$type->name}} - ({{ $type->description }})</option>
                            @endforeach
                        </select>
                        @error('purchase_type_id')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="State">Tgl. Pesan</label>
                                <input type="text" class="form-control @error('purchase_date') is-invalid @enderror" wire:model="purchase_date"
                                autocomplete="off"
                                id="purchase_date"                      
                                onchange="this.dispatchEvent(new InputEvent('input'))"
                                >
                                @error('purchase_date')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="Zip">Tgl. Terima</label>
                                <input type="text" class="form-control dateRange @error('sent_date') is-invalid @enderror" wire:model="sent_date"
                                autocomplete="off"
                                id="sent_date"                     
                                onchange="this.dispatchEvent(new InputEvent('input'))"
                                >
                                @error('sent_date')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                    <label for="lname">Penerima</label>
                    <select class="form-control @error('recipient') is-invalid @enderror" wire:model.lazy="recipient">
                        <option value="-1">Select</option>
                        @foreach ($recipients as $recipient)
                        <option value="{{$recipient->id}}">{{$recipient->name}} - ({{ $recipient->description }})</option>
                        @endforeach
                    </select>
                    @error('recipient')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="lname">Alamat Penerima</label>
                        <input type="text" class="form-control @error('address') is-invalid @enderror" wire:model.lazy="address" placeholder="Keterangan">
                        @error('address')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form-footer pt-5 border-top">
                <button wire:click="addPurchases" class="btn btn-primary btn-default">
                    <div wire:loading.class="sk-wave" wire:target="addPurchases">
                        <div class="rect1"></div>
                        <div class="rect2"></div>
                        <div class="rect3"></div>
                        <div class="rect4"></div>
                        <div class="rect5"></div>
                    </div>
                    <div wire:loading.remove wire:target="addPurchases">
                        Save
                    </div>
                </button>
            </div>
        {{-- </form> --}}
    </div>
</div>