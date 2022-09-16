<div>
    <form class="horizontal-form" wire:submit.prevent="addSetting">
        <div class="form-group row">
            <div class="col-12 col-md-3 text-right">
                <label for="margin">Persentase</label>
            </div>
            <div class="col-12 col-md-9">
                <input type="text" id="margin" class="form-control @error('margin') is-invalid @enderror" wire:model.lazy="margin" placeholder="Besar Margin %">
                @error('margin')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <div class="col-12 col-md-3 text-right">
                <label for="description">Keterangan</label>
            </div>
            <div class="col-12 col-md-9">
                <input type="text" id="description" class="form-control @error('description') is-invalid @enderror"
                    wire:model.lazy="description" placeholder="Keterangan">
                @error('description')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <div class="col-12 col-md-3 text-right">
                <label for="default">Status</label>
            </div>
            <div class="col-12 col-md-9">
                <select id="default" class="form-control" wire:model.lazy="default">
                    <option value="1" selected>Aktif</option>
                    <option value="0">Tidak Aktif</option>
                </select>
                @error('default')
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
