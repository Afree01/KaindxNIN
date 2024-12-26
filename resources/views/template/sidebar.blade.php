<!-- Page Sidebar Start-->
<div class="sidebar-wrapper" sidebar-layout="stroke-svg">
    <div>
        <div class="logo-wrapper"><a href="index.html"><img class="img-fluid for-light" src="../assets/images/logo/logo.png" alt=""><img class="img-fluid for-dark" src="../assets/images/logo/logo_dark.png" alt=""></a>
            <div class="back-btn"><i class="fa fa-angle-left"></i></div>
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
        </div>
        <div class="logo-icon-wrapper"><a href="index.html"><img class="img-fluid" src="../assets/images/logo/logo-icon.png" alt=""></a></div>
        <nav class="sidebar-main">
        <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
        <div id="sidebar-menu">
            <ul class="sidebar-links" id="simple-bar">
                <li class="back-btn">
                    <a href="index.html">
                        <img class="img-fluid" src="../assets/images/logo/logo-icon.png" alt=""></a>
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                </li>
                <li class="pin-title sidebar-main-title">
                    <div> 
                        <h6>Pinned</h6>
                    </div>
                </li>
                <li class="sidebar-main-title">
                    <div>
                        <h6 class="lan-1">General</h6>
                    </div>
                </li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="{{route('admin.dashboard')}}">
                        <svg class="stroke-icon">
                            <use href="../assets/svg/icon-sprite.svg#stroke-home"></use>
                        </svg>
                        <svg class="fill-icon">
                            <use href="../assets/svg/icon-sprite.svg#fill-home"></use>
                        </svg><span>Dashboard</span></a>
                    </li>
                <li class="sidebar-main-title">
                    <div>
                        <h6>Product</h6>
                    </div>
                </li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="{{route('admin.product')}}">
                        <svg class="stroke-icon">
                            <use href="../assets/svg/icon-sprite.svg#stroke-bookmark"></use>
                        </svg>
                        <svg class="fill-icon">
                            <use href="../assets/svg/icon-sprite.svg#stroke-bookmark"> </use>
                        </svg><span>Product</span></a>
                    </li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="{{route('admin.transaction')}}">
                        <svg class="stroke-icon">
                            <use href="../assets/svg/icon-sprite.svg#stroke-ecommerce"></use>
                        </svg>
                        <svg class="fill-icon">
                            <use href="../assets/svg/icon-sprite.svg#stroke-ecommerce"> </use>
                        </svg><span>Stock Movement</span></a>
                    </li>
                <li class="sidebar-main-title">
                    <div>
                        <h6>Master</h6>
                    </div>
                </li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="{{route('admin.category')}}">
                        <svg class="stroke-icon">
                            <use href="../assets/svg/icon-sprite.svg#stroke-social"></use>
                        </svg>
                        <svg class="fill-icon">
                            <use href="../assets/svg/icon-sprite.svg#fill-social"> </use>
                        </svg><span>Category</span></a>
                    </li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="{{route('admin.type')}}">
                        <svg class="stroke-icon">
                            <use href="../assets/svg/icon-sprite.svg#stroke-social"></use>
                        </svg>
                        <svg class="fill-icon">
                            <use href="../assets/svg/icon-sprite.svg#fill-social"> </use>
                        </svg><span>Type</span></a>
                    </li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="{{route('admin.location')}}">
                        <svg class="stroke-icon">
                            <use href="../assets/svg/icon-sprite.svg#stroke-calendar"></use>
                        </svg>
                        <svg class="fill-icon">
                            <use href="../assets/svg/icon-sprite.svg#fill-calender"></use>
                        </svg><span>Location</span></a>
                    </li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="{{route('admin.color')}}">
                        <svg class="stroke-icon">
                            <use href="../assets/svg/icon-sprite.svg#stroke-search"></use>
                        </svg>
                        <svg class="fill-icon">
                            <use href="../assets/svg/icon-sprite.svg#fill-search"> </use>
                        </svg><span>Color</span></a>
                    </li>
                <li class="sidebar-main-title">
                    <div>
                        <h6>Report</h6>
                    </div>
                </li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="{{route('report.stockMovement')}}">
                        <svg class="stroke-icon">
                            <use href="../assets/svg/icon-sprite.svg#stroke-calendar"></use>
                        </svg>
                        <svg class="fill-icon">
                            <use href="../assets/svg/icon-sprite.svg#fill-calender"> </use>
                        </svg><span>Stock Movement</span></a>
                    </li>
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </nav>
    </div>
</div>
<!-- Page Sidebar Ends-->