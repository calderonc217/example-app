@extends('layouts.master')

@section('title', 'Companies')

@section('content')
    <div class="row">
        <div class="col-12 margin-tb">
            <div class="row justify-content-between">
                <div class="col">
                    <h2>Companies</h2>
                </div>
                <div class="col d-flex flex-row justify-content-end align-items-center">
                    <a class="btn btn-primary" href="{{ route('companies.create') }}">Create</a>
                </div>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>No.</th>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($companies as $company)
            <tr>
                <td>{{$company->id}}</td>
                <td>{{$company->name}}</td>
                <td>{{$company->email}}</td>
                <td>{{$company->address}}</td>
                <td></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {!! $companies->links() !!}
@stop
