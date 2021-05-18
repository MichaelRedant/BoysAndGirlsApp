@extends('layout.Boys')
@section('title','Search Results')
@section('content')
{{-- @component('Pages.Components.Breadcrumbs') --}}
<div class="breadcrumbs">
    <div class="breadcrumbs-container container">
        <div>
        <a href="index">Home </a><i class="fas fa-chevron-right breadcrumb-seperator"></i>
        <a href="{{route('GirlsJunior')}}">Girls Junior </a>
        <i class="fas fa-chevron-right breadcrumb-seperator"></i><span> Zoekresultaten </span>
        </div>
        <div>
          <form class="search-form" action="{{route('searchGirlsJunior')}}"method="GET" ">
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
        <div class="list-group-item">{{$product->name}}
        <p>{{$product->description}}</p>
        <p>{{$product->slug}}</p></div>
    @endforeach
    
</div>
@endsection
