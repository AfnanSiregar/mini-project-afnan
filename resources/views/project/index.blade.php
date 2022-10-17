@extends('layouts.main')
@section('table')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Project</h6>
    </div>
    <div class="card-body">
        <form action="{{ url('/search') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-1" style="padding-top: 15px; text-align:center">Specific Filter</div>
                <div class="col-3">
                    <label>Project Name</label>
                    <input type="text" class="form-control" name="project_name" value="{{$dataProjek}}" placeholder="ENTER" required>
                </div>
                <div class="col-2">
                    <label>Client</label>
                    <select class="form-control" name="client_id" required>
                        <option disabled selected value>ALL CLIENT</option>
                        @foreach($client as $client_data):
                        <option value="{{$client_data->client_id}}" @if($dataClient==$client_data->client_name ) selected @endif>{{$client_data->client_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-2">
                    <label>Status</label>
                    <select class="form-control" name="project_status" required>
                        <option disabled selected value>ALL STATUS</option>
                        <option value="OPEN" @if($dataStatus=="OPEN" ) selected @endif>OPEN</option>
                        <option value="DOING" @if($dataStatus=="DOING" ) selected @endif>DOING</option>
                        <option value="DONE" @if($dataStatus=="DONE" ) selected @endif>DONE</option>
                    </select>
                </div>
                <div class="col-2" style="padding-top: 30px; text-align:center;">
                    <button type="submit" class="btn btn-primary" style="min-width: -webkit-fill-available;">Search</button>
                </div>
                <div class="col-2" style="padding-top: 30px; text-align:center;">
                    <a href="{{route('project.index')}}" class="btn btn-danger" style="min-width: -webkit-fill-available;">Reset</a>
                </div>
        </form>
    </div>
    <hr>

    <div class="table-responsive">
        <div class="py-1">
            <a class="btn btn-sm btn-success" href="{{ route('project.create')}}">New</a>
            <a class="btn btn-sm btn-danger" id="deleteAllSelectedRecord" href="#">Delete</a>
        </div>
        <table class="table table-bordered" width="100%" cellspacing="0" id="dataTable">
            <thead>
                <tr>
                    <th><input type="checkbox" id="chkCheckAll"></th>
                    <th>Action</th>
                    <th>Project Name</th>
                    <th>Client</th>
                    <th>Project Start</th>
                    <th>Project End</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($project as $data)
                <tr id="sid{{$data->project_id}}">
                    <td><input type="checkbox" name="ids" class="checkBoxClass" value="{{$data->project_id}}"></td>
                    <td>
                        <a href="{{route('project.edit',$data->project_id)}}">Edit</a>
                    </td>
                    <td>{{$data->project_name}}</td>
                    <td>{{$data->clientModel->client_name}}</td>
                    <td>{{ date("d F Y", strtotime($data->project_start)) }}</td>
                    <td>{{date("d F Y", strtotime($data->project_end))}}</td>
                    <td>{{$data->project_status}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection