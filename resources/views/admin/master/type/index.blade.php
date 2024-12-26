@extends('template.main')
@section('header')
<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-6">
                <h4>
                    Display Type</h4>
            </div>
            <div class="col-6">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">                                       
                    <svg class="stroke-icon">
                        <use href="../assets/svg/icon-sprite.svg#stroke-home"></use>
                    </svg></a></li>
                <li class="breadcrumb-item">ECommerce</li>
                <li class="breadcrumb-item active">Type</li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row"> 
        <div class="col-sm-12"> 
        <div class="card"> 
            <div class="card-body">
            <div class="list-product-header">
                <div> 
                <div class="light-box">
                    <a data-bs-toggle="collapse" href="#collapseProduct" role="button" aria-expanded="false" aria-controls="collapseProduct">
                        <i class="filter-icon show" data-feather="filter"></i>
                        <i class="icon-close filter-close hide"></i>
                    </a>
                </div>
                <a class="btn btn-primary" href="#!" data-bs-toggle="modal" data-bs-target="#addTypeModal">
                    <i class="fa fa-plus">
                    </i>Add Type
                </a>
                </div>
                <div class="collapse" id="collapseProduct">
                <div class="card card-body list-product-body">
                    <div class="row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-2 g-3"> 
                    <div class="col"> 
                        <select class="form-select" aria-label="Default select example">
                        <option selected="">Choose Product</option>
                        <option value="1">Apple iphone 13 Pro</option>
                        <option value="2">Wood Chair</option>
                        <option value="3">M185 Compact Wireless Mouse</option>
                        </select>
                    </div>
                    <div class="col"> 
                        <select class="form-select" aria-label="Default select example">
                        <option selected="">Choose Category</option>
                        <option value="1">Furniture</option>
                        <option value="2">Smart Gadgets</option>
                        <option value="3">Electrics</option>
                        </select>
                    </div>
                    <div class="col"> 
                        <select class="form-select" aria-label="Default select example">
                        <option selected="">Choose Sub Category</option>
                        <option value="1">Smart Phones</option>
                        <option value="2">Smart Watches</option>
                        <option value="3">Wireless headphone</option>
                        </select>
                    </div>
                    <div class="col"> 
                        <select class="form-select" aria-label="Default select example">
                        <option selected="">Status</option>
                        <option value="1">Sold Out </option>
                        <option value="2">In Stock</option>
                        <option value="3">Pre Order</option>
                        <option value="4">Limited Stock </option>
                        </select>
                    </div>
                    <div class="col"> 
                        <select class="form-select" aria-label="Default select example">
                        <option selected="">Price</option>
                        <option value="1">56000.00</option>
                        <option value="2">19000.00</option>
                        <option value="3">10000.00</option>
                        <option value="3">15000.00</option>
                        <option value="3">99000.00</option>
                        </select>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="list-product list-category">
                <table class="table" id="project-status">
                <thead> 
                    <tr> 
                    <th>
                        <div class="form-check"> 
                        <input class="form-check-input checkbox-primary" type="checkbox">
                        </div>
                    </th>
                    <th> <span class="f-light f-w-600">Type Name</span></th>
                    <th> <span class="f-light f-w-600">Description</span></th>
                    <th> <span class="f-light f-w-600">Category Type</span></th>
                    <th> <span class="f-light f-w-600">Action</span></th>
                    </tr>
                </thead>
                <tbody> 
                    @foreach ($types as $type)
                    <tr class="product-removes">
                        <td>
                            <div class="form-check"> 
                            <input class="form-check-input checkbox-primary" type="checkbox">
                            </div>
                        </td>
                        <td> 
                            <div class="product-names">
                                <div class="light-product-box"><img class="img-fluid" src="../assets/images/product/1.png" alt="t-shirt"></div>
                            <p>{{ $type->type_name }}</p>
                            </div>
                        </td>
                        <td> 
                            <p class="f-light">{{ $type->description }}</p>
                        </td>
                        <td> <span class="badge badge-light-primary">{{ $type->category->category_name }}</span></td>
                        <td> 
                            <div class="product-action">
                            <svg>    
                                <use href="../assets/svg/icon-sprite.svg#edit-content"></use>
                            </svg>
                            <svg>
                                <use href="../assets/svg/icon-sprite.svg#trash1"></use>
                            </svg>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
            </div>
        </div>
        </div>
    </div>
</div>
@include('admin.master.type.add')   
@endsection