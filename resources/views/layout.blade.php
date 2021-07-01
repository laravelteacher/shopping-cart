
<!DOCTYPE html>
<html>
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>@yield('title')</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</head>
<body>

<div class="container">

    <div class="row">
        <div class="col-sm-2">
            
            @if(session('cart'))
                <a href="{{ url('cart') }}" class="btn btn-primary  mt-3 mb-3 btn-block">

                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                     Cart
                    <!-- this code count product of choose tha user choose -->

                    <span class="badge badge-pill badge-danger">{{ count(session('cart')) }}</span>
                </a>
        </div>
                      
      
        <div class="col-sm-4 text-center">
     
                @if(session('success'))
                    <p class="btn-success  mt-3 mb-3 btn-block session" style='padding: .375rem .75rem;'>
                      {{ session('success') }}
                    </p>
        </div>

                @endif
       <!-- if user dont choose any product -->
                @else
                      
                    <a href="" class="btn text-light bg-warning mt-3 mb-3" role="button">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    Cart Empty
                    </a> 

                    @endif
                    

                    
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    @yield('content')
</div>


    @yield('scripts')

 <script>


$("a").click(function () {
      $(".session").visibility(2);
    });

      
    </script>

<style>
.session{
    visibility:hidden ;
    
}


body{
    background-color: #fff;
}
</style>

  </body>
</html>

