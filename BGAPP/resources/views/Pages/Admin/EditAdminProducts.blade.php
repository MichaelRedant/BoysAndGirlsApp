@extends('layout.Boys')
@section('title','Edit-Admin-Products')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12"> 

            <div class="card">
                <div class="card-header m-3">
                    <h4>EDIT PRODUCT
                    <a href="{{Route('adminProducts')}}" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{url('updateProducts/'.$product->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                            <label for="">Product Naam</label>
                            <input type="text"  class="form-control" name="name" value="{{$product->name}}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Product Slug</label>
                            <input type="text"  class="form-control" name="slug" value="{{$product->slug}}">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Product Prijs</label>
                            <input type="text"  class="form-control" name="price" value="{{$product->price}}">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Product Categorie</label>
                            <input type="text"  class="form-control" name="category" value="{{$product->category}}">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Product Geslacht</label>
                            <input type="text" class="form-control" name="gender" value="{{$product->gender}}" >
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Product Omschrijving</label>
                            <input type="text" class="form-control" name="description" value="{{$product->description}}"" >
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Product Foto</label>
                            <input type="file" name="product_image" class="form-control">
                            <img src="{{asset('img/Products/'.$product->product_image)}}" width="70px" height="70px"alt="img database">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">UPDATE PRODUCT</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    

@endsection