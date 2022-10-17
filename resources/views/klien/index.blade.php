@extends('layouts/main')
@section('table')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Client</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0" id="dataTable">
                <thead>
                    <tr>
                        <th>Client ID</th>
                        <th>Client Name</th>
                        <th>Client Address</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($klien as $klayen)
                    <tr>
                        <td>{{$klayen->client_id}}</td>
                        <td>{{$klayen->client_name}}</td>
                        <td>{{$klayen->client_address}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection