@extends('layouts.app')

@section('content')
<div class="tourtravels">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="filters">
              <h2 class="active" data-filter="*">PAKET WISATA
                <!--fitur search data-->
                <form class="form" method="get" action="{{ route('search') }}">
                            <div class="form-group w-100 mb-3">
                                <input type="text" name="search" class="form-control w-75 d-inline" id="search" placeholder="search...">
                                <button type="submit" class="btn btn-primary mb-1">Search</button>
                            </div>
                </form>
              </h2> 
            </div>
          </div>
          <div class="col-md-12">
            <div class="filters-content">
                <div class="row grid">
                @foreach($products as $p)
                    <div class="col-lg-4 col-md-4 all des">
                      <div class="product-item">
                        <a href="/product/{{$p->id}}"><img src="{{asset('storage/'.$p->images)}}" alt=""></a>
                        <div class="down-content">
                          <a href="/product/{{$p->id}}"><h4>{{$p -> package}}</h4></a>
                          <h4>Rp {{$p -> price}}</h4>
                          <br></br>
                          <ul class="stars">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                          </ul>
                          <span>Reviews (12)</span>
                        </div>
                      </div>
                    </div>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

@endsection