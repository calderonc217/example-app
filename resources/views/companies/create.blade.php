@extends('layouts.master')

@section('title', 'Create Company')

@section('content')
    <div class="row">
        <div class="col-12 margin-tb">
            <div class="row justify-content-between">
                <div class="col">
                    <h2>Add Company</h2>
                </div>
                <div class="col d-flex flex-row justify-content-end align-items-center">
                    <a class="btn btn-outline-secondary" href="{{ route('companies.index') }}">Back</a>
                </div>
            </div>
        </div>
    </div>
    @if (session('status'))
        <div class="alert alert-success my-1">
            <p>{{ session('status') }}</p>
        </div>
    @endif
    <div class="row justify-content-center">
        <div class="col-12 col-md-6 col-xl-4">
            <form action="{{ route('companies.store') }}" method="post">
                <div class="card">
                    <div class="card-body">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name">
                            @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email">
                            @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address">
                            @error('address')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop
