@extends('layout.Boys')
@section('title','Admin Page')
@section('content')
   
<div class="row">
    <div class="col-md-12">
        @if(Session::has('user'))
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{$users->name}}
                <span class="caret"></span></a>
                <ul class="dropdown-menu">
                <li><a href="/logout">Logout</a></li>
                </ul>
            </li>

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 m-3">
                        <div class="card">
                            <div class="card-header">Admin Dashboard
                            </form>
                            </div>
                            
                            <h1 class="section-title m-3 " ><span>Update </span> foto's</h1>
                                <div class="wrapper d-flex justify-content-center">
                                    <a href="{{Route('adminProducts')}}" class="btn btn-primary m-3">PRODUCTS</a>
                                    <a href="{{Route('adminInspired')}}" class="btn btn-primary m-3">INSPIRED</a>
                                    <a href="{{Route('home')}}" class="btn btn-danger m-3">SITE</a>
                                </div>
                            <div class="container">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        @else
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 m-3">
                    <div class="card">
                        <div class="card-header">Admin Dashboard
                        </form>
                        </div>
                        
                        <h1 class="section-title m-3 " ><span>Geen </span> toegang</h1>
                            <div class="wrapper d-flex justify-content-center">
                                <a href="{{url('login')}}" class="btn btn-secondary m-3">LOGIN</a>
                                <a href="{{Route('home')}}" class="btn btn-danger m-3">SITE</a> 
                            </div>
                        <div class="container">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
</div>

@endsection
