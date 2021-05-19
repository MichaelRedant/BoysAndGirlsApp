@extends('layout.Boys')
@section('title', 'New Boys')
@section('content')

<section id=boys_junior>
  @foreach ($products as $product) 
  <div class="container d-flex justify-content-center">
      <div class="row">
          <div class="col-md-12">
              <div class="card text-center border-light bg-light ">
              <img src="{{asset('img/Products/'.$product->slug.'.jpg')}}" class="card-img-top" alt="Foto product Boys and Girls">
              <div class="card-body">
                <p class="card-title"><div class="product-name">{{ $product->name }}</div>
                <p class="card-text">{{$product->description}}</p>
                <div class="card-text">€{{ $product->price }}</div></p>
              </div>
              </div>
            </div>
          </div>   
        </div>
    @endforeach  
  </section>
  @endsection