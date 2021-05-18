@extends('layout.Boys')
@section('title', 'Girls Baby')
@section('content')
{{-- @component('Pages.Components.Breadcrumbs') --}}
<div class="breadcrumbs">
  <div class="breadcrumbs-container container">
      <div>
      <a href="index">Home</a>
      <i class="fas fa-chevron-right breadcrumb-seperator"></i><span>Girls Baby</span>
      </div>
      <div>
        <form action="{{route('searchGirlsBaby')}}"method="GET" ">
          <i class="fas fa-search"></i>
          <input type="text"  name="query" value={{request()->input('query')}} class="search-box" placeholder="Zoeken">
      </form>
      </div>
  </div>
</div>

{{-- @endcomponent --}}
<section id=girls_junior>
@foreach ($products as $product)
<div class="container d-flex justify-content-center">
    <div class="row">
        <div class="col-sm-12">
            <div class="card text-center border-light bg-light ">
            <img src="{{asset('img/Baby/Girls/'.$product->slug.'.jpg')}}" class="card-img-top" alt="Foto product Boys and Girls">
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