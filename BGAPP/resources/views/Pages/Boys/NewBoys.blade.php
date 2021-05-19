@extends('layout.Boys')
@section('title', 'New Boys')
@section('content')
{{-- @component('Pages.Components.Breadcrumbs') --}}
<div class="breadcrumbs">
  <div class="breadcrumbs-container container">
      <div>
      <a href="index">Home </a><i class="fas fa-chevron-right breadcrumb-seperator"></i>
     <span> New Boys </span>
      </div>
      <div>
        <form class="search-form" action="{{route('searchBoys')}}"method="GET" ">
          <i class="fas fa-search"></i>
          <input type="text" name="query" class="search-box" placeholder="Zoeken" value={{request()->input('query')}} >
      </form>
      </div>
  </div>
</div>

{{-- @endcomponent --}}
<section id=boys_junior>
  @foreach ($products as $product) 
  <div class="container d-flex justify-content-center">
      <div class="row">
          <div class="col-md-12">
              <div class="card text-center border-light bg-light ">
              <img src="{{asset('img/Products/'.$product->slug.'.jpg')}}" class="card-img-top" alt="Foto product Boys and Girls">
              <div class="card-body">
                <p class="card-title"><div class="product-name fs-4">{{ $product->name }}</div>
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