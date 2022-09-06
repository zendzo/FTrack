<div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2>Pengaturan Margin Jasa</h2>
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
                    <hr>
                    <table class="table table-hover ">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Peresentase</th>
                                <th scope="col">Author</th>
                                <th scope="col">Tgl. Posting</th>
                                <th scope="col">Tgl. Update</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($settings as $setting)
                            <tr>
                                <td scope="row">{{$setting->id}}</td>
                                <td>{{$setting->margin}} %</td>
                                <td>{{$setting->author->name}} </td>
                                <td>{{$setting->created_at->format('D d/m/y H:m')}}</td>
                                <td>
                                    @if ($setting->created_at == $setting->updated_at)
                                        Belum Update
                                    @else
                                        {{$setting->updated_at->format('D d/m/y H:m')}}
                                    @endif
                                </td>
                                <td>
                                    @if($loop->last)
                                    <button wire:click="getSetting({{$setting->id}})" class="btn btn-sm btn-info text-white">Edit</button>
                                    <span>(saat ini)</span>
                                    @endif
                                    @if(!$loop->last)
                                    <button class="btn btn-sm btn-danger text-white">Terpakai</button>
                                    @endif
                                    <!-- <button wire:click="destroy({{$setting->id}})" class="btn btn-sm btn-danger text-white">Delete</button> -->
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $settings->links() }}
                </div>
            </div>
        </div
    </div>
</div>
