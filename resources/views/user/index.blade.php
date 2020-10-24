<x-app-layout>
    <x-slot name="header">
    </x-slot>

    <div class="breadcrumb">
        <h1 class="mr-2">SHMS</h1>
        <ul>
            <li><a href="">USERS LIST</a></li>
        </ul>
    </div>
    <div class="separator-breadcrumb border-top"></div>
    <div class="row">

        <div class="col-md-12 mb-4">
            <div class="card text-left">
                <div class="card-body">
                    <h4 class="card-title mb-3">List of All registered User</h4>
                    @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-dismissible m-4">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h5><i class="icon fa fa-check"></i> Success!</h5>
                                <strong>{{ $message }}</strong>
                            </div>

                        @endif

                        @if ($message = Session::get('error'))
                            <div class="alert alert-danger alert-dismissible m-4">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h5><i class="icon fa fa-check"></i> Error!</h5>
                                <strong>{{ $message }}</strong>
                            </div>

                        @endif
                        <div class="table-responsive">
                            <table class="display table table-striped table-bordered" id="zero_configuration_table" style="width:100%">

                                <thead>
                                    <tr>
                                        <th>SL#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <td>Role</td>
                                        <th>Action</th>
                                    </tr>

                                </thead>
                                <tbody>
                                    @foreach ($users as $i => $item)

                                    <tr>
                                        <th>{{ $i+1 }}</th>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>
                                            @forelse ($item->roles as $role)
                                                {{ $role->name }}
                                            @empty

                                            @endforelse
                                        </td>
                                        <td>
                                            <a href="{{ route('user.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                                            <a href="{{ route('user.delete', $item->id) }}" class="btn btn-danger" onclick="alert('Are you sure? ')">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>SL#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <td>Role</td>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
