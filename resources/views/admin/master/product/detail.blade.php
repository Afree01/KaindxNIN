@extends('template.main')
@section('header')
<div class="container-fluid">
    <div class="page-title">
        <div class="row">
        <div class="col-6">
            <h3>Product Page</h3>
        </div>
        <div class="col-6">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">                                       
                <svg class="stroke-icon">
                    <use href="../assets/svg/icon-sprite.svg#stroke-home"></use>
                </svg></a></li>
            <li class="breadcrumb-item">ECommerce</li>
            <li class="breadcrumb-item active">Product Page</li>
            </ol>
        </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="container-fluid">
    <div>
        <div class="row product-page-main p-0">
        <div class="col-xxl-4 col-md-6 box-col-12">
            <div class="card">
            <div class="card-body">
                <div class="product-slider owl-carousel owl-theme" id="sync1">
                <div class="item"><img src="{{ asset('storage/'.$product->product_image) }}" alt=""></div>
                <div class="item"><img src="../assets/images/ecommerce/02.jpg" alt=""></div>
                <div class="item"><img src="../assets/images/ecommerce/03.jpg" alt=""></div>
                <div class="item"><img src="../assets/images/ecommerce/04.jpg" alt=""></div>
                <div class="item"><img src="../assets/images/ecommerce/05.jpg" alt=""></div>
                <div class="item"><img src="../assets/images/ecommerce/06.jpg" alt=""></div>
                <div class="item"><img src="../assets/images/ecommerce/07.jpg" alt=""></div>
                <div class="item"><img src="../assets/images/ecommerce/08.jpg" alt=""></div>
                </div>
                <div class="owl-carousel owl-theme" id="sync2">
                <div class="item"><img src="{{ asset('storage/'.$product->product_image) }}" alt=""></div>
                <div class="item"><img src="../assets/images/ecommerce/02.jpg" alt=""></div>
                <div class="item"><img src="../assets/images/ecommerce/03.jpg" alt=""></div>
                <div class="item"><img src="../assets/images/ecommerce/04.jpg" alt=""></div>
                <div class="item"><img src="../assets/images/ecommerce/05.jpg" alt=""></div>
                <div class="item"><img src="../assets/images/ecommerce/06.jpg" alt=""></div>
                <div class="item"><img src="../assets/images/ecommerce/07.jpg" alt=""></div>
                <div class="item"><img src="../assets/images/ecommerce/08.jpg" alt=""></div>
                </div>
            </div>
            </div>
        </div>
        <div class="col-xxl-5 box-col-6 order-xxl-0 order-1">
            <div class="card">
            <div class="card-body">
                <div class="product-page-details">
                <h3>{{ $product->product_name }}</h3>
                </div>
                <div class="product-price">Rp {{ number_format($product->price, 0, ',', '.') }}  
                <!-- <del> {{ $product->price }} </del> -->
                </div>
                <ul class="product-color">
                <li class="bg-primary"></li>
                <li class="bg-secondary"></li>
                <li class="bg-success"></li>
                <li class="bg-info"></li>
                <li class="bg-warning"></li>
                </ul>
                <hr>
                <p>{{ $product->description }}</p>
                <hr>
                <div>
                <table class="product-page-width">
                    <tbody>
                    <tr>
                        <td> <b>Brand &nbsp;&nbsp;&nbsp;:</b></td>
                        <td>Kaind x NIN</td>
                    </tr>
                    <tr>
                        <td> <b>Type &nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;</b></td>
                        <td class="txt-success">{{ $product->type_id }}</td>
                    </tr>
                    <tr>
                        <td> <b>Seller &nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;</b></td>
                        <td>ABC</td>
                    </tr>
                    <tr>
                        <td> <b>Fabric &nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;</b></td>
                        <td>Cotton</td>
                    </tr>
                    </tbody>
                </table>
                </div>
                <hr>
                <div class="row">
                <div class="col-md-4">
                    <h6 class="product-title">share it</h6>
                </div>
                <div class="col-md-8">
                    <div class="product-icon">
                    <ul class="product-social">
                        <li class="d-inline-block"><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li class="d-inline-block"><a href="https://accounts.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                        <li class="d-inline-block"><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <li class="d-inline-block"><a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                        <li class="d-inline-block"><a href="https://rss.app/" target="_blank"><i class="fa fa-rss"></i></a></li>
                    </ul>
                    <form class="d-inline-block f-right"></form>
                    </div>
                </div>
                </div>
                <hr>
                <div class="row">
                <div class="col-md-4">
                    <h6 class="product-title">Rate Now</h6>
                </div>
                <div class="col-md-8">
                    <div class="d-flex">
                    <select id="u-rating-fontawesome" name="rating" autocomplete="off">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select><span>(250 review)</span>
                    </div>
                </div>
                </div>
                <hr>
                <div class="m-t-15 btn-showcase"><a class="btn btn-primary" href="cart.html" title=""> <i class="fa fa-shopping-basket me-1"></i>Add To Cart</a><a class="btn btn-success" href="checkout.html" title=""> <i class="fa fa-shopping-cart me-1"></i>Buy Now</a><a class="btn btn-secondary" href="list-wish.html"> <i class="fa fa-heart me-1"></i>Add To WishList</a></div>
            </div>
            </div>
        </div>
        <div class="col-xxl-3 col-md-6 box-col-6">
            <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.productDetailStore', $product->id) }}" method="POST">
                @csrf 
                <label for="detail">Product Detail</label>
                <div class="form-group">
                    <label for="color" class="form-label">Color</label>
                    <select class="form-select" id="color" name="color" required>
                        <option value="">Select Color</option>
                        @foreach ($colors as $color)
                            <option value="{{ $color->id }}">{{ $color->color_name }}</option>
                        @endforeach
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="size" class="form-label">Size</label>
                    <select class="form-select" id="size" name="size" required>
                        <option value="All">All Size</option>
                        <option value="S">S</option>
                        <option value="M">M</option>
                        <option value="L">L</option>
                        <option value="XL">XL</option>
                        <option value="XXL">XXL</option>
                        <option value="XXXL">XXXL</option>
                    </select>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Save Detail</button>
            </form>
                
            </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Color</th>
                                <th>Size</th>
                                <th>Quantity</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($productDetails as $detail)
                            <tr>
                                <td>{{ $detail->color->color_name }}</td>
                                <td>{{ $detail->size }}</td>
                                <td>{{ $detail->quantity }}</td>
                                <td>
                                    <!-- Tombol Hapus -->
                                    <form action="#" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- silde-bar colleps block end here-->
            </div>
        </div>
        </div>
    </div>
    <div class="card">
        <div class="row product-page-main">
        <div class="col-sm-12">
            <ul class="nav nav-tabs border-tab nav-primary mb-0" id="top-tab" role="tablist">
            <li class="nav-item"><a class="nav-link active" id="top-home-tab" data-bs-toggle="tab" href="#top-home" role="tab" aria-controls="top-home" aria-selected="false">Febric</a>
                <div class="material-border"></div>
            </li>
            <li class="nav-item"><a class="nav-link" id="profile-top-tab" data-bs-toggle="tab" href="#top-profile" role="tab" aria-controls="top-profile" aria-selected="false">Video</a>
                <div class="material-border"></div>
            </li>
            <li class="nav-item"><a class="nav-link" id="contact-top-tab" data-bs-toggle="tab" href="#top-contact" role="tab" aria-controls="top-contact" aria-selected="true">Details</a>
                <div class="material-border"></div>
            </li>
            <li class="nav-item"><a class="nav-link" id="brand-top-tab" data-bs-toggle="tab" href="#top-brand" role="tab" aria-controls="top-brand" aria-selected="true">Brand</a>
                <div class="material-border"></div>
            </li>
            </ul>
            <div class="tab-content" id="top-tabContent">
            <div class="tab-pane fade active show" id="top-home" role="tabpanel" aria-labelledby="top-home-tab">
                <p class="mb-0 m-t-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                <p class="mb-0 m-t-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
            </div>
            <div class="tab-pane fade" id="top-profile" role="tabpanel" aria-labelledby="profile-top-tab">
                <p class="mb-0 m-t-20">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
            </div>
            <div class="tab-pane fade" id="top-contact" role="tabpanel" aria-labelledby="contact-top-tab">
                <p class="mb-0 m-t-20">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
            </div>
            <div class="tab-pane fade" id="top-brand" role="tabpanel" aria-labelledby="brand-top-tab">
                <p class="mb-0 m-t-20">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
@endsection

