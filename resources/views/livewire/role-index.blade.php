<div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2>Role</h2>
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

                    @if ($editRole)
                    <livewire:role-edit></livewire:role-edit>
                    @else
                    <livewire:role-create></livewire:role-create>
                    @endif
                    <hr>
                    <table class="table table-hover ">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Pilihan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                            <tr>
                                <td scope="row">{{$category->id}}</td>
                                <td>{{$category->name}}</td>
                                <td>
                                    <button wire:click="getRole({{$category->id}})" class="btn btn-sm btn-info text-white">Edit</button>
                                    {{-- <button wire:click="destroy({{$category->id}})" class="btn btn-sm btn-danger text-white">Delete</button> --}}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $categories->links() }}
                </div>
            </div>
        </div
    </div>
</div>
