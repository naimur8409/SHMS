<x-app-layout>
    <x-slot name="header">
    </x-slot>

    <div class="breadcrumb">
        <h1 class="mr-2">SHMS</h1>
        <ul>
            <li><a href="">SERIAL LIST</a></li>
        </ul>
    </div>
    <div class="separator-breadcrumb border-top"></div>
    <div class="row">

        <div class="col-md-12 mb-4">
            <div class="card text-left">
                <div class="card-body">
                    <h4 class="card-title mb-3">List of All Serials</h4>
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
                                    <th>Phone</th>
                                    <th>Gender</th>
                                    <th>Age</th>
                                    <th>Problem</th>
                                    <th>Doctor</th>
                                    <th>Action</th>
                                </tr>

                            </thead>
                            <tbody>
                                @foreach ($serials as $i => $item)

                                <tr>
                                    <th>{{ $i+1 }}</th>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->phone }}</td>
                                    <td>{{ $item->gender }}</td>
                                    <td>{{ $item->age }}</td>
                                    <td>{{ $item->problem }}</td>
                                    <td>{{ $item->doctor->name }}</td>
                                    <td>
                                        @if($item->status == 0)

                                            <a href="{{ route('serial.edit', [$item->id ,$item->status] ) }}" class="btn btn-warning">Pending</a>

                                        @endif

                                        @if($item->status == 1)

                                            <a href="{{ route('serial.edit', [$item->id, $item->status] ) }}" class="btn btn-success">Confirmed</a>

                                        @endif
                                        <a href="{{ route('serial.delete', $item->id) }}" class="btn btn-danger" onclick="confirm('Are You Sure?')">Delete</a>

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>SL#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Gender</th>
                                    <th>Age</th>
                                    <th>Problem</th>
                                    <th>Doctor</th>
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
