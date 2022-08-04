<div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2>Data Customer</h2>
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

                    @if ($editCustomer)
                    <livewire:customer-edit></livewire:customer-edit>
                    @else
                    <livewire:customer-create></livewire:customer-create>
                    @endif
                    <hr>
                    <table class="table table-hover ">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Address</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Description</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $customer)
                            <tr>
                                <td scope="row">{{$customer->id}}</td>
                                <td>{{$customer->name}}</td>
                                <td>{{$customer->address}}</td>
                                <td>{{$customer->phone}}</td>
                                <td>{{$customer->description}}</td>
                                <td>
                                    <button wire:click="getCustomer({{$customer->id}})" class="btn btn-sm btn-info text-white">Edit</button>
                                    <button wire:click="destroy({{$customer->id}})" class="btn btn-sm btn-danger text-white">Delete</button>
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
