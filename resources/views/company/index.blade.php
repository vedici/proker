@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <table class="table table-responsive table-striped" id="companyTable">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Alamat</th>
                            <th>No HP</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($companies as $company)
                            <tr>
                                <th>{{ $company->name }}</th>
                                <th>{{ $company->email }}</th>
                                <th>{{ $company->address }}</th>
                                <th>{{ $company->phone }}</th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-md-2">

            </div>
        </div>
    </div>
</div>
@endsection