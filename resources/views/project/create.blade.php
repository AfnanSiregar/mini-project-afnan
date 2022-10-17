<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Create New Data</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('SBAdmin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('SBAdmin/css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">
    <div class="container">

        <!-- Outer Row -->
        <section class="ftco-section p-md-5 text-light">
            <div class="wrap">
                <div class="p-4 p-md-5 bg-dark">

                    <form action="{{route('project.store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>PROJECT NAME</label>
                            <input type="text" name="project_name" placeholder="Enter Project Name" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>CLIENT</label>
                            <select class="form-control select form-select-lg mb-3" aria-label="form-select-lg" name="client_id" required>
                                @foreach($client as $data)
                                <option value="{{$data->client_id}}">{{$data->client_name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-6">
                                @php
                                use Carbon\Carbon;
                                $waktu = Carbon::now()->format('d-m-Y');
                                $waktu2 = date('Y-m-d', strtotime($waktu));
                                @endphp
                                <label>PROJECT START</label>
                                <input type="text" onfocus="(this.type='date')" placeholder="CHOOSE DATE" min="{{ $waktu2 }}" name="project_start" class="form-control form-select-lg mb-3" onkeypress="return event.charCode < 48 || event.charCode  >57" required>
                            </div>
                            <div class="col-sm-6">
                                <label>PROJECT END</label>
                                <input type="text" onfocus="(this.type='date')" min="{{$waktu2}}" placeholder="CHOOSE DATE" name="project_end" class="form-control form-select-lg mb-3" onkeypress="return event.charCode < 48 || event.charCode  >57" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>STATUS</label>
                            <select class="form-control select form-select-lg mb-3" aria-label="form-select-lg" name="project_status" required>
                                <option>OPEN</option>
                                <option>DOING</option>
                                <option>DONE</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-success">SIMPAN</button>
                        <input type="button" value="Kembali" class="btn btn-danger" onclick="history.back()">
                    </form>
                </div>
            </div>
        </section>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('SBAdmin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('SBAdmin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('SBAdmin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('SBAdmin/js/sb-admin-2.min.js') }}"></script>

</body>

</html>