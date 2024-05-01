@extends('auth.layouts')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header"><strong>Dashboard</strong></div>
            <div class="card-body">

                <div class="alert alert-success">
                    <h3>Hello {{Auth::user()->name}}</h3> 
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
{{-- as --}}