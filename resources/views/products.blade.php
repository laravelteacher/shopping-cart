
@extends('layout')

@section('title', 'Products')

@section('content')

    <div class="container">


        <div class="row">
 <!-- by this code show any product in in ths page -->

            @foreach($products as $product)
            <div class="col-sm-3 card hover">
               
                <img src="{{ $product->photo }}" class="card-img-top" alt="..." width="100" height="233">
                <div class="card-body">
                       <h4>{{ $product->name }}</h4>
                            
                            <p><strong>Price: </strong> {{ $product->price }}$</p>
                            <p class="btn-holder">
                            <a href="{{ url('add-to-cart/'.$product->id) }}" class="btn btn-block text-center text-light" role="button">Add to cart</a> </p>
                </div>
            </div>
                    
                
            @endforeach

        </div><!-- End row -->

    </div>

    <style>

    .btn-block{
        background:light;
        transition: 1.5s ease;
        position:relative;
        bottom:-10
    }
    .card:hover a{
        background:green;
        transition: 1.5s ease;
        transform: translate(-.1%, -.1%);
        
    }
    .hover:hover {

  box-shadow: 0 2px 5px 0 , 0 2px 10px 0 rgba(0, 0, 0, 0.12);
}
    </style>

@endsection
