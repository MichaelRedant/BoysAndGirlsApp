@extends('layout.Boys')
@section('title','Admin-Products')
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
                    <a href="{{Route('adminProducts')}}" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{Route('addProducts')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3 fw-bold">
                            <label for="">Product Naam</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group mb-3 fw-bold">
                            <label for="">Product Slug</label>
                            <input type="text" name="slug" class="form-control">
                        </div>

                        <div class="form-group mb-3 fw-bold">
                            <label for="">Product Prijs</label>
                            <input type="text" name="price" class="form-control">
                        </div>

                        <div class="form-group mb-3 fw-bold">
                            <label for="">Product Categorie</label>
                            <div class="fw-normal">
                                1: Baby Boy <br>
                                2: Mini Boy <br>
                                3: Kids Boy <br>
                                4: Junior Boy <br>
                                5: Baby Girl <br>
                                6: Mini Girl <br>
                                7: Kids Girl <br>
                                8: Junior Boy <br>
                            </div>
                            <br>
                            <input type="text" name="category" class="form-control">
                        </div>

                        <div class="form-group mb-3 fw-bold">
                            <label for="">Product Geslacht</label>
                            <div class="fw-normal">
                                1: Boys <br>
                                2: Girls <br>
                            </div>
                            <br>
                            <input type="text" name="gender" class="form-control">
                        </div>

                        <div class="form-group mb-3 fw-bold">
                            <label for="">Product Omschrijving</label>
                            <input type="text" name="description" class="form-control">
                        </div>

                        <div class="form-group mb-3 fw-bold">
                            <label for="">Product Foto</label>
                            <input type="file" name="product_image" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">SAVE PRODUCT</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    

@endsection