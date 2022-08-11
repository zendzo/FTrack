<div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2>Pengaturan</h2>
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

                    @if ($editSetting)
                    <livewire:setting-edit></livewire:setting-edit>
                    @else
                    <livewire:setting-create></livewire:setting-create>
                    @endif
                    <div class="form-footer pt-5">
                        <button wire:click="getSetting(1)" class="btn btn-warning btn-default">Load</button>
                    </div>
                </div>
            </div>
        </div
    </div>
</div>
