<x-app-layout>
    <x-slot name="header">
    </x-slot>

    <div class="breadcrumb">
        <h1 class="mr-2">SHMS</h1>
        <ul>
            <li><a href="">UPDATE A USER</a></li>
        </ul>
    </div>
    <div class="separator-breadcrumb border-top"></div>
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="card-title mb-3">Update a User</div>

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
                    <form action="{{ route('user.update', $user->id) }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 form-group mb-3">
                                <label for="fullname">Full Name</label>
                                <input name="name" class="form-control form-control-rounded" id="fullname" type="text" value="{{ $user->name }}">
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="exampleInputEmail2">Email address</label>
                                <input name="email" class="form-control form-control-rounded" id="exampleInputEmail2" type="email" value="{{ $user->email}}">
                            </div>

                            <div class="col-md-6 form-group mb-3">
                                <label for="picker1">Role</label>
                                <select name="role_id" class="form-control form-control-rounded" >

                                    <option value="">Select Role</option>
                                    @foreach ($roles as $item)
                                        <option value="{{ $item->id }}"
                                            @forelse ($user->roles as $role)
                                                @if($role->id == $item->id) selected = 'selected' @endif
                                            @empty

                                            @endforelse
                                            >{{ $item->name }}</option>
                                    @endforeach
                                    <option value="femail">Female</option>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-primary">Create</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</x-app-layout>
