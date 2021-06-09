@extends('layout.Boys')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 m-3">
            <div class="card">
                <div class="card-header">Admin Dashboard</div>
                <h1 class="section-title m-3 " ><span>Update </span> foto's</h1>
                    <div class="wrapper d-flex justify-content-center">
                        <a href="{{Route('adminProducts')}}" class="btn btn-primary m-3">PRODUCTS</a>
                        <a href="{{Route('adminInspired')}}" class="btn btn-primary m-3">INSPIRED</a>
                        <a href="{{Route('home')}}" class="btn btn-danger m-3">SITE</a>
                    </div>
                <div class="container">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Succesvol ingelogd!
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
