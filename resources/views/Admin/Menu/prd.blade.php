<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>{{$title}}</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free HTML Templates" name="keywords">
        <meta content="Free HTML Templates" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto:wght@700&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>
<body>


    @include('Admin.Style.sidebar')
    <div class="container-fluid py-5">
        <div class="container">
            <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
                <h6 class="text-primary text-uppercase">Products</h6>
                <h1 class="display-5 text-uppercase mb-0">Products For Your Best Friends</h1>
            </div>
            <div class="d-flex">
                @foreach ($products as $product)
                <div class="pb-5 m-3">
                    <div class="product-item position-relative bg-light d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="img/product-1.png" alt="">
                        <h6 class="text-uppercase">{{$product->name}}</h6>
                        <h5 class="text-primary mb-0">{{$product->price}}</h5>
                        <img src="{{url('storage/'.$product->image)}}" alt="" height="100px" width="100px">
                        <div class="btn-action d-flex justify-content-center">
                            <form action="/cart/{{$product->id}}" method="post">
                                @csrf
                                <button class="btn btn-primary py-2 px-3" id="keranjang"><i class="bi bi-cart"></i></button>
                            </form>
                            <form action="" method="post">
                                <button class="btn btn-primary py-2 px-3"><i class="bi bi-eye"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <script src="{{asset('js/cart.js')}}"></script>
</body>
</html>
