@extends('layout.Boys')
@section('title','Edit-Admin-Inspired')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12"> 

            <div class="card">
                <div class="card-header m-3">
                    <h4>EDIT
                    <a href="{{Route('adminInspired')}}" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{url('updateInspired/'.$inspiredPictures->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                            <label for="">Naam</label>
                            <input type="text"  class="form-control" name="name" value="{{$inspiredPictures->name}}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Slug</label>
                            <input type="text"  class="form-control" name="slug" value="{{$inspiredPictures->slug}}">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Omschrijving</label>
                            <input type="text" class="form-control" name="description" value="{{$inspiredPictures->description}}"" >
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Foto</label>
                            <input type="file" name="inspired_image" class="form-control">
                            <img src="{{asset('img/Inspired/'.$inspiredPictures->inspired_image)}}" width="70px" height="70px"alt="img database">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">UPDATE</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    

@endsection