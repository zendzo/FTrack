<div class="card card-default">
    <div class="card-header bg-success card-header-border-bottom">
        <h2>Detail Pemesanan</h2>
    </div>
    <div class="card-body">
        {{-- <form wire:submit.prevent="addSales"> --}}
            <div class="row">
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
                        <label for="city">Jenis Pengeluaran</label>
                        <select class="form-control @error('sale_type_id') is-invalid @enderror" wire:model.lazy="sale_type_id">
                            <option value="-1">Select</option>
                            @foreach ($salesType as $type)
                            <option value="{{$type->id}}">{{$type->name}} - ({{ $type->description }})</option>
                            @endforeach
                        </select>
                        @error('sale_type')
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
                                <label for="State">Tgl. Belanja</label>
                                <input type="text" class="form-control @error('sale_date') is-invalid @enderror" wire:model.lazy="sale_date"
                                autocomplete="off"
                                id="sale_date_edit"
                                onchange="this.dispatchEvent(new InputEvent('input'))"
                                >
                                @error('sale_date')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="Zip">Tgl. Terima</label>
                                <input type="text" class="form-control @error('sent_date') is-invalid @enderror" wire:model.lazy="sent_date"
                                autocomplete="off"
                                id="sent_date_edit"
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
                    <label for="lname">Keterangan</label>
                    <input type="text" class="form-control @error('sent_date') is-invalid @enderror" wire:model.lazy="description" placeholder="Keterangan">
                    @error('description')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                    </div>
                </div>
            </div>
            
            <div class="form-footer pt-5 border-top">
                <button wire:click="updateSales" class="btn btn-primary btn-default">
                    <div wire:loading.class="sk-wave" wire:target="updateSales">
                        <div class="rect1"></div>
                        <div class="rect2"></div>
                        <div class="rect3"></div>
                        <div class="rect4"></div>
                        <div class="rect5"></div>
                    </div>
                    <div wire:loading.remove wire:target="updateSales">
                        Simpan
                    </div>
                </button>
            </div>
        {{-- </form> --}}
    </div>
</div>