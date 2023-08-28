@extends('index')

@section('Menu')

   <!-- Products Start -->
   @include('Admin.Style.produk')
<!-- Products End -->
<div class="container">
    <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
        <h6 class="text-primary text-uppercase">Produk-produk</h6>
        <h1 class="display-5 text-uppercase mb-0">Produk-produk kami yang akan memuaskan anda</h1>
    </div>
    <div class="container mt-5 mb-5">
        <div class="d-flex justify-content-center row">
            <div class="col-md-10">
                @foreach ($produk as $item)
                    
                <div class="row p-2 bg-white border rounded">
                    <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" src="public/IMG{{$item->image}}"></div>
                    <div class="col-md-6 mt-1">
                        <h5>{{$item->name}}</h5>
                        <div class="d-flex flex-row">
                            <div class="ratings mr-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div><span>{{$item->stock}}</span>
                        </div>
                        <div class="mt-1 mb-1 spec-1"><span>100% cotton</span><span class="dot"></span><span>Light weight</span><span class="dot"></span><span>Best finish<br></span></div>
                        <div class="mt-1 mb-1 spec-1"><span>Unique design</span><span class="dot"></span><span>For men</span><span class="dot"></span><span>Casual<br></span></div>
                        <p class="text-justify text-truncate para mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.<br><br></p>
                    </div>
                    <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                        <div class="d-flex flex-row align-items-center">
                            <h4 class="mr-1">{{$item->price}}</h4><span class="strike-text">$220.00</span>
                        </div>
                        <h6 class="text-success">Free shipping</h6>
                        <div class="d-flex flex-column mt-4"><a href="/prd/{{$item->id}}/show"><button class="btn btn-primary btn-sm" type="button">Details</button></a><button class="btn btn-outline-primary btn-sm mt-2" type="button">Add to wishlist</button></div>
                    </div>
                </div>
                @endforeach
              
            </div>
        </div>
    </div>
</div>

<!-- Offer Start -->
<div class="container-fluid bg-offer my-5 py-5">
    <div class="container py-5">
        <div class="row gx-5 justify-content-start">
            <div class="col-lg-7">
                <div class="border-start border-5 border-dark ps-5 mb-5">
                    <h6 class="text-dark text-uppercase">Special Offer</h6>
                    <h1 class="display-5 text-uppercase text-white mb-0">Save 50% on all items your first order</h1>
                </div>
                <p class="text-white mb-4">Eirmod sed tempor lorem ut dolores sit kasd ipsum. Dolor ea et dolore et at sea ea at dolor justo ipsum duo rebum sea. Eos vero eos vero ea et dolore eirmod et. Dolores diam duo lorem. Elitr ut dolores magna sit. Sea dolore sed et.</p>
                <a href="" class="btn btn-light py-md-3 px-md-5 me-3">Shop Now</a>
                <a href="" class="btn btn-outline-light py-md-3 px-md-5">Read More</a>
            </div>
        </div>
    </div>
</div>
<!-- Offer End -->


<!-- Pricing Plan Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
            <h6 class="text-primary text-uppercase">Pricing Plan</h6>
            <h1 class="display-5 text-uppercase mb-0">Competitive Pricing For Pet Services</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-4">
                <div class="bg-light text-center pt-5 mt-lg-5">
                    <h2 class="text-uppercase">Basic</h2>
                    <h6 class="text-body mb-5">The Best Choice</h6>
                    <div class="text-center bg-primary p-4 mb-2">
                        <h1 class="display-4 text-white mb-0">
                            <small class="align-top"
                                style="font-size: 22px; line-height: 45px;">$</small>49<small
                                class="align-bottom" style="font-size: 16px; line-height: 40px;">/
                                Mo</small>
                        </h1>
                    </div>
                    <div class="text-center p-4">
                        <div class="d-flex align-items-center justify-content-between mb-1">
                            <span>HTML5 & CSS3</span>
                            <i class="bi bi-check2 fs-4 text-primary"></i>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-1">
                            <span>Bootstrap v5</span>
                            <i class="bi bi-check2 fs-4 text-primary"></i>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-1">
                            <span>Responsive Layout</span>
                            <i class="bi bi-x fs-4 text-danger"></i>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-1">
                            <span>Browsers Compatibility</span>
                            <i class="bi bi-x fs-4 text-danger"></i>
                        </div>
                        <a href="" class="btn btn-primary text-uppercase py-2 px-4 my-3">Order Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="bg-light text-center pt-5">
                    <h2 class="text-uppercase">Standard</h2>
                    <h6 class="text-body mb-5">The Best Choice</h6>
                    <div class="text-center bg-dark p-4 mb-2">
                        <h1 class="display-4 text-white mb-0">
                            <small class="align-top"
                                style="font-size: 22px; line-height: 45px;">$</small>99<small
                                class="align-bottom" style="font-size: 16px; line-height: 40px;">/
                                Mo</small>
                        </h1>
                    </div>
                    <div class="text-center p-4">
                        <div class="d-flex align-items-center justify-content-between mb-1">
                            <span>HTML5 & CSS3</span>
                            <i class="bi bi-check2 fs-4 text-primary"></i>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-1">
                            <span>Bootstrap v5</span>
                            <i class="bi bi-check2 fs-4 text-primary"></i>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-1">
                            <span>Responsive Layout</span>
                            <i class="bi bi-check2 fs-4 text-primary"></i>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-1">
                            <span>Browsers Compatibility</span>
                            <i class="bi bi-x fs-4 text-danger"></i>
                        </div>
                        <a href="" class="btn btn-primary text-uppercase py-2 px-4 my-3">Order Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="bg-light text-center pt-5 mt-lg-5">
                    <h2 class="text-uppercase">Extended</h2>
                    <h6 class="text-body mb-5">The Best Choice</h6>
                    <div class="text-center bg-primary p-4 mb-2">
                        <h1 class="display-4 text-white mb-0">
                            <small class="align-top"
                                style="font-size: 22px; line-height: 45px;">$</small>149<small
                                class="align-bottom" style="font-size: 16px; line-height: 40px;">/
                                Mo</small>
                        </h1>
                    </div>
                    <div class="text-center p-4">
                        <div class="d-flex align-items-center justify-content-between mb-1">
                            <span>HTML5 & CSS3</span>
                            <i class="bi bi-check2 fs-4 text-primary"></i>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-1">
                            <span>Bootstrap v5</span>
                            <i class="bi bi-check2 fs-4 text-primary"></i>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-1">
                            <span>Responsive Layout</span>
                            <i class="bi bi-check2 fs-4 text-primary"></i>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-1">
                            <span>Browsers Compatibility</span>
                            <i class="bi bi-check2 fs-4 text-primary"></i>
                        </div>
                        <a href="" class="btn btn-primary text-uppercase py-2 px-4 my-3">Order Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Pricing Plan End -->

    
@endsection