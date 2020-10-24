<x-app-layout>
    <x-slot name="header">
    </x-slot>

    <div class="breadcrumb">
        <h1 class="mr-2">SHMS</h1>
        <ul>
            <li><a href="">UPDATEDiSEASE</a></li>
        </ul>
    </div>
    <div class="separator-breadcrumb border-top"></div>
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="card-title mb-3">Update disease</div>

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
                    <form action="{{ route('disease.update', $disease->id) }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 form-group mb-3">
                                <label for="fullname">Disease Name</label>
                                <input name="name" class="form-control form-control-rounded" id="fullname" type="text" value="{{ $disease->name }}">
                            </div>


                            <div class="col-md-6 form-group mb-3">
                                <label for="picker1">Doctor</label>
                                <select name="doctor_id[]" class="form-control form-control-rounded" multiple required>

                                    <option value="">Select Doctor</option>
                                    @foreach ($doctors as $item)
                                        <option value="{{ $item->id }}"
                                            @if($disease->id == $item->id) selected="selected" @endif
                                            >{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-12 form-group mb-3">
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text">Basic treatment</span></div>
                                    <textarea class="form-control" aria-label="With textarea" name="basic_treatment">{{ $disease->basic_treatment }}</textarea>
                                </div>
                            </div>


                            <div class="col-md-12">
                                <button class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</x-app-layout>
