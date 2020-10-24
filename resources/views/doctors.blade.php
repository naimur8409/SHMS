
<!DOCTYPE html>
<html lang="en">
<head>
  <title>SHMS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

    <div class="jumbotron text-center">
    <h2>SMART HEATH MANAGEMENT SYSTEM</h2>
    <p>Suggested Doctors</p>
    </div>

    <div class="container">
            <div class="row">
                {{-- <div class="col-3">
                    <div class="card mb-4" style="border-right: 2px solid grey ">
                        <div class="card-body">
                            <div class="card-title mb-3">Filter</div>
                            <form>
                                <div class="row">

                                    <div class="col-md-6 form-group mb-3">
                                        <label for="picker1">Your Place</label>
                                        <select class="form-control form-control-rounded">
                                            <option>Option 1</option>
                                            <option>Option 1</option>
                                            <option>Option 1</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <button class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div> --}}
                <div class="col-12">

                    <div class="row">
                        @foreach ($doctors as $item)
                            <div class="col-6">
                                <div class="card card-profile-1 mb-4" style=" box-shadow: 10px 10px 5px grey;">
                                    <div class="card-body text-center">
                                        {{-- <div class="avatar box-shadow-2 mb-3"><img src="../../dist-assets/images/faces/16.jpg" alt="" width="150px"></div> --}}
                                        <h5 class="m-0">{{$item->name }}</h5>
                                        <p class="mt-0">{{$item->degree }}</p>
                                        <p>
                                            <strong>Specialist</strong>: {{$item->specialist }}
                                        </p>
                                        <p>
                                            <strong>Chamber</strong>: {{$item->address }}
                                        </p>
                                        <p>
                                            <strong>Email</strong>: {{$item->email }}
                                        </p>
                                        <p>
                                            <strong>Phone</strong>: {{$item->phone }}
                                        </p>
                                        <button class="btn btn-info pull-left" data-toggle="modal" data-target="#a{{$item->id}}">Request for serail</button>
                                        <a class="btn btn-info pull-right" href="mailto:{{$item->email }}">Mail to doctor </a>

                                        <div class="card-socials-simple mt-4"><a href=""><i class="i-Linkedin-2"></i></a><a href=""><i class="i-Facebook-2"></i></a><a href=""><i class="i-Twitter"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        {{-- <div class="col-6">
                            <ul class="list-group list-group-flush p-2" style=" box-shadow: 10px 10px 5px grey;">
                                <li class="list-group-item">
                                    <h6><strong>Doctor Name</strong>: {{$item->name }} </h6>
                                </li>
                                <li class="list-group-item">
                                    <h6><strong>Degree</strong>: {{$item->degree }} </h6>
                                </li>
                                <li class="list-group-item">
                                    <h6><strong>Specialist</strong>: {{$item->specialist }} </h6>
                                </li>
                                <li class="list-group-item">
                                    <h6><strong>Chamber</strong>: {{$item->address }} </h6>
                                </li>
                                <li class="list-group-item">
                                    <h6><strong>Phone Number</strong>: {{$item->phone }} </h6>
                                </li>

                                <li style="list-style-type: none;">

                                <button class="btn btn-info pull-left" data-toggle="modal" data-target="#a{{$item->id}}">Request for serail</button>
                                <a class="btn btn-info pull-right" href="mailto:{{$item->email }}">Mail to doctor </a>
                                </li>
                            </ul>

                        </div> --}}
                        {{-- ======================= Modal =================== --}}
                        <div class="modal fade" id="a{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('serial.store') }}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleFormControlInput0">Full Name</label>
                                            <input type="text" name="name" class="form-control" id="exampleFormControlInput0">
                                        </div>
                                        <input type="hidden" name="doctor_id" value="{{ $item->id }}">

                                        <div class="form-group">
                                        <label for="exampleFormControlInput1">Email address</label>
                                        <input type="email" name="email" class="form-control" id="exampleFormControlInput1">
                                        </div>

                                        <div class="form-group">
                                        <label for="exampleFormControlInput3">Phone Number</label>
                                        <input type="text" name="phone" class="form-control" id="exampleFormControlInput3">
                                        </div>

                                        <div class="form-group">
                                        <label for="exampleFormControlSelect4">Gender</label>
                                        <select class="form-control" name="gender" id="exampleFormControlSelect4">
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlInput5">Age</label>
                                            <input type="number" name="age" class="form-control" id="exampleFormControlInput5">
                                        </div>

                                        <div class="form-group">
                                        <label for="exampleFormControlTextarea6">Problem</label>
                                        <textarea class="form-control" name="problem" id="exampleFormControlTextarea6" rows="3"></textarea>
                                        </div>

                                <button type="submit" class="btn btn-primary">Request for serial</button>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                            </div>
                        </div>
                    @endforeach
                    </div>

                </div>
            </div>


    </div>


</body>
</html>
