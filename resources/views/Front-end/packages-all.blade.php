@extends('Front-end.partials.master-layout')
@section('content')
    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs img1">
        <div class="breadcrumbs-inner text-center">
            <h1 class="page-title">{{$breadcrumb_pacakages}}</h1>
            <ul>
                <li title="Braintech - IT Solutions and Technology Startup HTML Template">
                    <a class="active" href="{{route('MainHome')}}">Home</a>
                </li>
                <li>{{$breadcrumb_pacakages}}</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumbs End -->



    <!-- Pricing section start -->
    <div class="rs-pricing style2 gray-color pt-120 pb-143 md-pt-80 md-pb-80">
        <div class="container">
            <div class="sec-title2 text-center mb-45">
                <span class="sub-text style-bg">Pricing</span>
                <h2 class="title title2">
                    Our Pricing Plan
                </h2>
            </div>
            <div class="tab-container">
                <div class="tab-menu">
                    <ul>
                        <li><a href="#" class="tab-a active-a" data-id="tab1">Web Design </a></li>
                        <li><a href="#" class="tab-a" data-id="tab2">eCommerce Packages</a></li>
                        <li><a href="#" class="tab-a" data-id="tab3">Wordpress</a></li>
                        <li><a href="#" class="tab-a" data-id="tab4">Branding</a></li>
                        <li><a href="#" class="tab-a" data-id="tab5">Logo Design</a></li>
                    </ul>
                </div><!--end of tab-menu-->
                <div  class="tab tab-active" data-id="tab1">

                    <div class="row">
                        <div class="col-lg-4 md-mb-30">
                            <div class="pricing-table new-style2">
                                <div class="pricing-badge">
                                    Silver
                                </div>
                                <div class="pricing-icon">
                                    <img src="{{asset('assets/images/pricing/main-home/icons/1.png')}}" alt="">
                                </div>
                                <div class="pricing-table-price">
                                    <div class="pricing-table-bags">
                                        <span class="pricing-currency">$</span>
                                        <span class="table-price-text">29.99</span>
                                        <span class="table-period">Monthly Package</span>
                                    </div>
                                </div>
                                <div class="pricing-table-body">
                                    <ul>
                                        <li><i class="fa fa-check"></i><span>Powerful Admin Panel</span></li>
                                        <li><i class="fa fa-check"></i><span>1 Native Android App</span></li>
                                        <li><i class="fa fa-close"></i><span>Multi-Language Support</span></li>
                                        <li><i class="fa fa-check"></i><span>Support via E-mail and Phone</span></li>
                                    </ul>
                                </div>
                                <div class="btn-part">
                                    <a class="readon buy-now" href="contact.html">Buy Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 md-mb-30">
                            <div class="pricing-table primary-bg">
                                <div class="pricing-badge white-color-bg">
                                    Gold
                                </div>
                                <div class="pricing-icon">
                                    <img src="{{asset('assets/images/pricing/main-home/icons/2.png')}}" alt="">
                                </div>
                                <div class="pricing-table-price">
                                    <div class="pricing-table-bags">
                                        <span class="pricing-currency">$</span>
                                        <span class="table-price-text">39.99</span>
                                        <span class="table-period">Monthly Package</span>
                                    </div>
                                </div>
                                <div class="pricing-table-body">
                                    <ul>
                                        <li><i class="fa fa-check"></i><span>Powerful Admin Panel</span></li>
                                        <li><i class="fa fa-check"></i><span>2 Native Android App</span></li>
                                        <li><i class="fa fa-check"></i><span>Multi-Language Support</span></li>
                                        <li><i class="fa fa-check"></i><span>Support via E-mail and Phone</span></li>
                                    </ul>
                                </div>
                                <div class="btn-part">
                                    <a class="readon buy-now" href="contact.html">Buy Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="pricing-table new-style2">
                                <div class="pricing-badge">
                                    Platinum
                                </div>
                                <div class="pricing-icon">
                                    <img src="{{asset('assets/images/pricing/main-home/icons/3.png')}}" alt="">
                                </div>
                                <div class="pricing-table-price">
                                    <div class="pricing-table-bags">
                                        <span class="pricing-currency">$</span>
                                        <span class="table-price-text">79.99</span>
                                        <span class="table-period">Monthly Package</span>
                                    </div>
                                </div>
                                <div class="pricing-table-body">
                                    <ul>
                                        <li><i class="fa fa-check"></i><span>Powerful Admin Panel</span></li>
                                        <li><i class="fa fa-check"></i><span>3 Native Android App</span></li>
                                        <li><i class="fa fa-check"></i><span>Multi-Language Support</span></li>
                                        <li><i class="fa fa-check"></i><span>Support via E-mail and Phone</span></li>
                                    </ul>
                                </div>
                                <div class="btn-part">
                                    <a class="readon buy-now" href="contact.html">Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div><!--end of tab one-->

                <div  class="tab " data-id="tab2">

                    <div class="row">
                        <div class="col-lg-4 md-mb-30">
                            <div class="pricing-table new-style2">
                                <div class="pricing-badge">
                                    Silver
                                </div>
                                <div class="pricing-icon">
                                    <img src="{{asset('assets/images/pricing/main-home/icons/1.png')}}" alt="">
                                </div>
                                <div class="pricing-table-price">
                                    <div class="pricing-table-bags">
                                        <span class="pricing-currency">$</span>
                                        <span class="table-price-text">29.99</span>
                                        <span class="table-period">Monthly Package</span>
                                    </div>
                                </div>
                                <div class="pricing-table-body">
                                    <ul>
                                        <li><i class="fa fa-check"></i><span>Powerful Admin Panel</span></li>
                                        <li><i class="fa fa-check"></i><span>1 Native Android App</span></li>
                                        <li><i class="fa fa-close"></i><span>Multi-Language Support</span></li>
                                        <li><i class="fa fa-check"></i><span>Support via E-mail and Phone</span></li>
                                    </ul>
                                </div>
                                <div class="btn-part">
                                    <a class="readon buy-now" href="contact.html">Buy Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 md-mb-30">
                            <div class="pricing-table primary-bg">
                                <div class="pricing-badge white-color-bg">
                                    Gold
                                </div>
                                <div class="pricing-icon">
                                    <img src="{{asset('assets/images/pricing/main-home/icons/2.png')}}" alt="">
                                </div>
                                <div class="pricing-table-price">
                                    <div class="pricing-table-bags">
                                        <span class="pricing-currency">$</span>
                                        <span class="table-price-text">39.99</span>
                                        <span class="table-period">Monthly Package</span>
                                    </div>
                                </div>
                                <div class="pricing-table-body">
                                    <ul>
                                        <li><i class="fa fa-check"></i><span>Powerful Admin Panel</span></li>
                                        <li><i class="fa fa-check"></i><span>2 Native Android App</span></li>
                                        <li><i class="fa fa-check"></i><span>Multi-Language Support</span></li>
                                        <li><i class="fa fa-check"></i><span>Support via E-mail and Phone</span></li>
                                    </ul>
                                </div>
                                <div class="btn-part">
                                    <a class="readon buy-now" href="contact.html">Buy Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="pricing-table new-style2">
                                <div class="pricing-badge">
                                    Platinum
                                </div>
                                <div class="pricing-icon">
                                    <img src="{{asset('assets/images/pricing/main-home/icons/3.png')}}" alt="">
                                </div>
                                <div class="pricing-table-price">
                                    <div class="pricing-table-bags">
                                        <span class="pricing-currency">$</span>
                                        <span class="table-price-text">79.99</span>
                                        <span class="table-period">Monthly Package</span>
                                    </div>
                                </div>
                                <div class="pricing-table-body">
                                    <ul>
                                        <li><i class="fa fa-check"></i><span>Powerful Admin Panel</span></li>
                                        <li><i class="fa fa-check"></i><span>3 Native Android App</span></li>
                                        <li><i class="fa fa-check"></i><span>Multi-Language Support</span></li>
                                        <li><i class="fa fa-check"></i><span>Support via E-mail and Phone</span></li>
                                    </ul>
                                </div>
                                <div class="btn-part">
                                    <a class="readon buy-now" href="contact.html">Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end of tab two-->
                <div  class="tab " data-id="tab3">
                    <div class="row">
                        <div class="col-lg-4 md-mb-30">
                            <div class="pricing-table new-style2">
                                <div class="pricing-badge">
                                    Silver
                                </div>
                                <div class="pricing-icon">
                                    <img src="{{asset('assets/images/pricing/main-home/icons/1.png')}}" alt="">
                                </div>
                                <div class="pricing-table-price">
                                    <div class="pricing-table-bags">
                                        <span class="pricing-currency">$</span>
                                        <span class="table-price-text">29.99</span>
                                        <span class="table-period">Monthly Package</span>
                                    </div>
                                </div>
                                <div class="pricing-table-body">
                                    <ul>
                                        <li><i class="fa fa-check"></i><span>Powerful Admin Panel</span></li>
                                        <li><i class="fa fa-check"></i><span>1 Native Android App</span></li>
                                        <li><i class="fa fa-close"></i><span>Multi-Language Support</span></li>
                                        <li><i class="fa fa-check"></i><span>Support via E-mail and Phone</span></li>
                                    </ul>
                                </div>
                                <div class="btn-part">
                                    <a class="readon buy-now" href="contact.html">Buy Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 md-mb-30">
                            <div class="pricing-table primary-bg">
                                <div class="pricing-badge white-color-bg">
                                    Gold
                                </div>
                                <div class="pricing-icon">
                                    <img src="{{asset('assets/images/pricing/main-home/icons/2.png')}}" alt="">
                                </div>
                                <div class="pricing-table-price">
                                    <div class="pricing-table-bags">
                                        <span class="pricing-currency">$</span>
                                        <span class="table-price-text">39.99</span>
                                        <span class="table-period">Monthly Package</span>
                                    </div>
                                </div>
                                <div class="pricing-table-body">
                                    <ul>
                                        <li><i class="fa fa-check"></i><span>Powerful Admin Panel</span></li>
                                        <li><i class="fa fa-check"></i><span>2 Native Android App</span></li>
                                        <li><i class="fa fa-check"></i><span>Multi-Language Support</span></li>
                                        <li><i class="fa fa-check"></i><span>Support via E-mail and Phone</span></li>
                                    </ul>
                                </div>
                                <div class="btn-part">
                                    <a class="readon buy-now" href="contact.html">Buy Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="pricing-table new-style2">
                                <div class="pricing-badge">
                                    Platinum
                                </div>
                                <div class="pricing-icon">
                                    <img src="{{asset('assets/images/pricing/main-home/icons/3.png')}}" alt="">
                                </div>
                                <div class="pricing-table-price">
                                    <div class="pricing-table-bags">
                                        <span class="pricing-currency">$</span>
                                        <span class="table-price-text">79.99</span>
                                        <span class="table-period">Monthly Package</span>
                                    </div>
                                </div>
                                <div class="pricing-table-body">
                                    <ul>
                                        <li><i class="fa fa-check"></i><span>Powerful Admin Panel</span></li>
                                        <li><i class="fa fa-check"></i><span>3 Native Android App</span></li>
                                        <li><i class="fa fa-check"></i><span>Multi-Language Support</span></li>
                                        <li><i class="fa fa-check"></i><span>Support via E-mail and Phone</span></li>
                                    </ul>
                                </div>
                                <div class="btn-part">
                                    <a class="readon buy-now" href="contact.html">Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end of tab three-->

                <div  class="tab " data-id="tab4">
                <div class="row">
                    <div class="col-lg-4 md-mb-30">
                        <div class="pricing-table new-style2">
                            <div class="pricing-badge">
                                Silver
                            </div>
                            <div class="pricing-icon">
                                <img src="{{asset('assets/images/pricing/main-home/icons/1.png')}}" alt="">
                            </div>
                            <div class="pricing-table-price">
                                <div class="pricing-table-bags">
                                    <span class="pricing-currency">$</span>
                                    <span class="table-price-text">29.99</span>
                                    <span class="table-period">Monthly Package</span>
                                </div>
                            </div>
                            <div class="pricing-table-body">
                                <ul>
                                    <li><i class="fa fa-check"></i><span>Powerful Admin Panel</span></li>
                                    <li><i class="fa fa-check"></i><span>1 Native Android App</span></li>
                                    <li><i class="fa fa-close"></i><span>Multi-Language Support</span></li>
                                    <li><i class="fa fa-check"></i><span>Support via E-mail and Phone</span></li>
                                </ul>
                            </div>
                            <div class="btn-part">
                                <a class="readon buy-now" href="contact.html">Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 md-mb-30">
                        <div class="pricing-table primary-bg">
                            <div class="pricing-badge white-color-bg">
                                Gold
                            </div>
                            <div class="pricing-icon">
                                <img src="{{asset('assets/images/pricing/main-home/icons/2.png')}}" alt="">
                            </div>
                            <div class="pricing-table-price">
                                <div class="pricing-table-bags">
                                    <span class="pricing-currency">$</span>
                                    <span class="table-price-text">39.99</span>
                                    <span class="table-period">Monthly Package</span>
                                </div>
                            </div>
                            <div class="pricing-table-body">
                                <ul>
                                    <li><i class="fa fa-check"></i><span>Powerful Admin Panel</span></li>
                                    <li><i class="fa fa-check"></i><span>2 Native Android App</span></li>
                                    <li><i class="fa fa-check"></i><span>Multi-Language Support</span></li>
                                    <li><i class="fa fa-check"></i><span>Support via E-mail and Phone</span></li>
                                </ul>
                            </div>
                            <div class="btn-part">
                                <a class="readon buy-now" href="contact.html">Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="pricing-table new-style2">
                            <div class="pricing-badge">
                                Platinum
                            </div>
                            <div class="pricing-icon">
                                <img src="{{asset('assets/images/pricing/main-home/icons/3.png')}}" alt="">
                            </div>
                            <div class="pricing-table-price">
                                <div class="pricing-table-bags">
                                    <span class="pricing-currency">$</span>
                                    <span class="table-price-text">79.99</span>
                                    <span class="table-period">Monthly Package</span>
                                </div>
                            </div>
                            <div class="pricing-table-body">
                                <ul>
                                    <li><i class="fa fa-check"></i><span>Powerful Admin Panel</span></li>
                                    <li><i class="fa fa-check"></i><span>3 Native Android App</span></li>
                                    <li><i class="fa fa-check"></i><span>Multi-Language Support</span></li>
                                    <li><i class="fa fa-check"></i><span>Support via E-mail and Phone</span></li>
                                </ul>
                            </div>
                            <div class="btn-part">
                                <a class="readon buy-now" href="contact.html">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end of tab four-->


            <div  class="tab " data-id="tab5">
                dsd
            <div class="row">
                <div class="col-lg-4 md-mb-30">
                    <div class="pricing-table new-style2">
                        <div class="pricing-badge">
                            Silver
                        </div>
                        <div class="pricing-icon">
                            <img src="{{asset('assets/images/pricing/main-home/icons/1.png')}}" alt="">
                        </div>
                        <div class="pricing-table-price">
                            <div class="pricing-table-bags">
                                <span class="pricing-currency">$</span>
                                <span class="table-price-text">29.99</span>
                                <span class="table-period">Monthly Package</span>
                            </div>
                        </div>
                        <div class="pricing-table-body">
                            <ul>
                                <li><i class="fa fa-check"></i><span>Powerful Admin Panel</span></li>
                                <li><i class="fa fa-check"></i><span>1 Native Android App</span></li>
                                <li><i class="fa fa-close"></i><span>Multi-Language Support</span></li>
                                <li><i class="fa fa-check"></i><span>Support via E-mail and Phone</span></li>
                            </ul>
                        </div>
                        <div class="btn-part">
                            <a class="readon buy-now" href="contact.html">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 md-mb-30">
                    <div class="pricing-table primary-bg">
                        <div class="pricing-badge white-color-bg">
                            Gold
                        </div>
                        <div class="pricing-icon">
                            <img src="{{asset('assets/images/pricing/main-home/icons/2.png')}}" alt="">
                        </div>
                        <div class="pricing-table-price">
                            <div class="pricing-table-bags">
                                <span class="pricing-currency">$</span>
                                <span class="table-price-text">39.99</span>
                                <span class="table-period">Monthly Package</span>
                            </div>
                        </div>
                        <div class="pricing-table-body">
                            <ul>
                                <li><i class="fa fa-check"></i><span>Powerful Admin Panel</span></li>
                                <li><i class="fa fa-check"></i><span>2 Native Android App</span></li>
                                <li><i class="fa fa-check"></i><span>Multi-Language Support</span></li>
                                <li><i class="fa fa-check"></i><span>Support via E-mail and Phone</span></li>
                            </ul>
                        </div>
                        <div class="btn-part">
                            <a class="readon buy-now" href="contact.html">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="pricing-table new-style2">
                        <div class="pricing-badge">
                            Platinum
                        </div>
                        <div class="pricing-icon">
                            <img src="{{asset('assets/images/pricing/main-home/icons/3.png')}}" alt="">
                        </div>
                        <div class="pricing-table-price">
                            <div class="pricing-table-bags">
                                <span class="pricing-currency">$</span>
                                <span class="table-price-text">79.99</span>
                                <span class="table-period">Monthly Package</span>
                            </div>
                        </div>
                        <div class="pricing-table-body">
                            <ul>
                                <li><i class="fa fa-check"></i><span>Powerful Admin Panel</span></li>
                                <li><i class="fa fa-check"></i><span>3 Native Android App</span></li>
                                <li><i class="fa fa-check"></i><span>Multi-Language Support</span></li>
                                <li><i class="fa fa-check"></i><span>Support via E-mail and Phone</span></li>
                            </ul>
                        </div>
                        <div class="btn-part">
                            <a class="readon buy-now" href="contact.html">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end of tab five-->
            </div><!--end of container-->

        </div>
    </div>
    <!-- Pricing section end -->




    </div>
    <!-- Main content End -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        jQuery(document).ready(function(){
            jQuery('.tab-a').click(function(){
                jQuery(".tab").removeClass('tab-active');
                jQuery(".tab[data-id='"+$(this).attr('data-id')+"']").addClass("tab-active");
                jQuery(".tab-a").removeClass('active-a');
                jQuery(this).parent().find(".tab-a").addClass('active-a');
            });
        });
    </script>
@endsection
