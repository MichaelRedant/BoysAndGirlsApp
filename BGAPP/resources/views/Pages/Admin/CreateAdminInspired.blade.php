@extends('layout.Boys')
@section('title','Admin-Inspired')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">

             @if (session()->has('status'))
                 <div class="alert alert-success">{{session()->get('status')}}</div>
             @endif

            <div class="card">
                <div class="card-header m-3">
                    <h4>TOEVOEGEN PRODUCT
                    <a href="{{Route('adminInspired')}}" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{Route('addInspired')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="">Naam</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Slug</label>
                            <input type="text" name="slug" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Omschrijving</label>
                            <input type="text" name="description" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Foto</label>
                            <input type="file" name="inspired_image" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">SAVE</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    

@endsection