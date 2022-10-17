<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Edit Data</title>

    <link href="{{ asset('SBAdmin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="{{ asset('SBAdmin/css/sb-admin-2.min.css') }}" rel="stylesheet">
</head>

<body class="bg-gradient-primary">
    <div class="container">
        <section class="ftco-section p-md-5 text-light">
            <div class="wrap">
                <div class="p-4 p-md-5 bg-dark">
                    <form action="{{route('project.update', $project->project_id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>PROJECT NAME</label>
                            <input type="text" name="project_name" value="{{$project->project_name}}" class="form-control bg-secondary text-light" required>
                        </div>
                        <div class="form-group">
                            <label>CLIENT</label>
                            <select class="form-control select form-select-lg mb-3 bg-secondary text-light" aria-label="form-select-lg" name="client_id" required>
                                @foreach($client as $data)
                                <option value="{{$data->client_id}}">{{$data->client_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>PROJECT START</label>
                            <input type="date" name="project_start" value="{{$project->project_start}}" class="form-control bg-secondary text-light" onkeypress="return event.charCode < 48 || event.charCode  >57" required>
                        </div>
                        <div class="form-group">
                            <label>PROJECT END</label>
                            <input type="date" name="project_end" value="{{$project->project_end}}" class="form-control bg-secondary text-light" onkeypress="return event.charCode < 48 || event.charCode  >57" required>
                        </div>
                        <div class="form-group">
                            <label>STATUS</label>
                            <select class="form-control select form-select-lg mb-3 bg-secondary text-light" aria-label="form-select-lg" name="project_status" required>
                                <option @if($project->project_status == "OPEN") selected @endif>OPEN</option>
                                <option @if($project->project_status == "DOING") selected @endif>DOING</option>
                                <option @if($project->project_status == "DONE") selected @endif>DONE</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success">SIMPAN</button>
                        <input type="button" value="Kembali" class="btn btn-danger" onclick="history.back()">
                    </form>
                </div>
            </div>
        </section>
    </div>

    <script src="{{ asset('SBAdmin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('SBAdmin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('SBAdmin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('SBAdmin/js/sb-admin-2.min.js') }}"></script>
</body>

</html>