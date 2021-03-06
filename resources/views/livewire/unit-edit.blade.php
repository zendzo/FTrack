<div>
    <form class="horizontal-form" wire:submit.prevent="updateUnit">
        <div class="form-group row">
            <div class="col-12 col-md-3 text-right">
                <label for="name">Nama</label>
            </div>
            <div class="col-12 col-md-9">
                <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" wire:model.lazy="name" placeholder="Nama Satuan">
                <input type="hidden" wire:model="id">
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <div class="col-12 col-md-3 text-right">
                <label for="">Singkatan</label>
            </div>
            <div class="col-12 col-md-9">
                <input type="text" class="form-control @error('symbol') is-invalid @enderror"  wire:model.lazy="symbol" placeholder="Singkatan">
                @error('symbol')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="form-footer pt-5 border-top">
            <button type="submit" class="btn btn-primary btn-default">Save</button>
        </div>
    </form>
</div>
