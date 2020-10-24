<x-app-layout>
    <x-slot name="header">
    </x-slot>

    <div class="breadcrumb">
        <h1 class="mr-2">SHMS</h1>
        <ul>
            <li><a href="">ADD A NEW DOCTOR</a></li>
        </ul>
    </div>
    <div class="separator-breadcrumb border-top"></div>
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="card-title mb-3">Register a new doctor</div>

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
                    <form action="{{ route('doctor.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 form-group mb-3">
                                <label for="fullname">Full Name</label>
                                <input name="name" class="form-control form-control-rounded" id="fullname" type="text" required>
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="exampleInputEmail2">Email address</label>
                                <input name="email" class="form-control form-control-rounded" id="exampleInputEmail2" type="email" required>
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="phone1">Phone</label>
                                <input name="phone" class="form-control form-control-rounded" id="phone1" required>
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="address">Address</label>
                                <input name="address" class="form-control form-control-rounded" id="address" required>
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="picker1">Gender</label>
                                <select name="gender" class="form-control form-control-rounded" required>

                                    <option value="">Select Gender</option>
                                    <option value="male">Male</option>
                                    <option value="femail">Female</option>
                                </select>
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="degree">Degree</label>
                                <input name="degree" class="form-control form-control-rounded" id="degree" placeholder="MBBS, FCBS ..." required>
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="specialist">Specialist</label>
                                <input name="specialist" class="form-control form-control-rounded" id="specialist" required>
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="serial_phone_no">Phone (Serial)</label>
                                <input name="serial_phone_no" class="form-control form-control-rounded" id="serial_phone_no" required>
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
