@extends('layout.Boys')
@section('title','Search Results')
@section('content')
{{-- @component('Pages.Components.Breadcrumbs') --}}
<div class="breadcrumbs">
    <div class="breadcrumbs-container container">
        <div>
        <a href="index">Home </a><i class="fas fa-chevron-right breadcrumb-seperator"></i>
        <a href="{{route('GirlsBaby')}}">Girls Baby </a>
        <i class="fas fa-chevron-right breadcrumb-seperator"></i><span> Zoekresultaten </span>
        </div>
        <div>
          <form class="search-form" action="{{route('searchGirlsBaby')}}"method="GET" ">
            <i class="fas fa-search"></i>
            <input type="text" name="query" value={{request()->input('query')}} class="search-box" placeholder="Zoeken">
        </form>
        </div>
    </div>
  </div>
  
  {{-- @endcomponent --}}

<div class="search-container container list-group">
    <h2 class="section-title mb-5"><span>Resultaten</span> zoekopdracht</h2>
    <div>
       <p>{{$products->count()}} result(s) for '{{request()->input('query')}}'</p> 
    </div>

    @foreach ($products as $product)
    <div class="container d-flex justify-content-center">
      <div class="row">
          <div class="col-sm-12">
              <div class="card text-center border-light bg-light ">
              <img src="{{asset('img/Products/'.$product->slug.'.jpg')}}" class="card-img-top" alt="Foto product Boys and Girls">
              <div class="card-body">
                <p class="card-title "><div class="product-name fs-4">{{ $product->name }}</div>
                <p class="card-text">{{$product->description}}</p>
                <div class="card-text">€{{ $product->price }}</div></p>
              </div>
              </div>
            </div>
          </div>   
        </div>
    @endforeach
    
</div>
@endsection
