@extends('layout.Boys')
@section('title','Admin-Inspired')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header m-3">
                                      
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                <strong>{{session('status')}}</strong>
            </div>
           @endif  

                    <h4>AFBEELDINGEN INSPIRED BY YOU
                    <a href="{{url('add-inspired')}}" class="btn  btn-sm btn-primary float-end">TOEVOEGEN AFBEELDING</a>
                    <a href="{{Route('admin')}}" class="btn  btn-sm btn-danger float-end mr-3">BACK</a>
                    </h4>
                </div>
                <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Naam</th>
                                    <th>Slug</th>
                                    <th>Omschrijving</th>
                                    <th>Afbeelding Product</th>
                                    <th>EDIT</th>
                                    <th>DELETE</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($inspiredPictures as $inspiredPicture)
                                    <tr>
                                    <td>{{$inspiredPicture->id}}</td>
                                    <td>{{$inspiredPicture->name}}</td>
                                    <td>{{$inspiredPicture->slug}}</td>
                                    <td>{{$inspiredPicture->description}}</td>
                                    <td>
                                        <img src="{{asset('img/Inspired/'.$inspiredPicture->inspired_image)}}" width="70px" height="70px"alt="img database">
                                    </td>
                                    <td>
                                        <a href="{{url('edit-inspired/'.$inspiredPicture->id)}}" class="btn  btn-sm btn-primary btn-sm">EDIT</a>
                                    </td>
                                    <td>
                                        <a href="{{url('delete-inspired/'.$inspiredPicture->id)}}" class="btn  btn-sm btn-danger btn-sm">DELETE</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
    

@endsection