<!-- HEADER -->
<header class="header-opt-2 cate-show notranslate" style="background-color:#eee!important;">
    <!-- header-top -->
    <script>(function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/he_IL/sdk.js#xfbml=1&version=v2.9&appId=418846555167177";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
    <?php $alert = \Illuminate\Support\Facades\DB::table('alerts')->where('id', 1)->get()->first();?>
    @if(!isset($_COOKIE["banner"]) && $alert->status == 1)
        <div class="header-banner qc-top-site qc-top-site1">
            <div class="container">
                <button class="close" type="button" id="header-banner-button">
                    X
                </button>
                <div class="description">
                    <a href="/aliexpress"><span class="title">@lang('general.week_promotions_express')</span></a>
                    <span class="subtitle">@lang('general.crazy_deals_and_prices') 02/09/2017-28/08/17</span>
                    <span class="subtitle">@lang('general.up_to_90_discount_start_adding_products_your_shopping') </span>
                </div>
            </div>
        </div>
    @endif
    <div class="site-header header-banner-fixed">
        <div class="header-top">
            <div class="container">

                <!-- nav-left -->
                <ul class="nav-left">
                    @if(!isset($_SESSION['user']))
                        <li class="dropdown setting">
                            <a href="/auth"><span>@lang('general.register_login')</span></a>
                        </li>
                    @else
                        <li class="dropdown setting">
                            <a data-toggle="dropdown" role="button" href="#"
                               class="dropdown-toggle ">
                                <span>@lang('general.peace'), {{ $_SESSION['user']->name }}</span>
                                <i aria-hidden="true" class="fa fa-angle-down"></i>
                            </a>
                            <div class="dropdown-menu">
                                <ul class="account">
                                    <li><a href="/conversation">@lang('general.customer_service')</a></li>
                                    <li><a href="/reportConversation">@lang('general.my_product_reports')</a></li>
                                    <li><a href="/profile/{{ $_SESSION['user']->id }}">@lang('general.my_account')</a>
                                    </li>
                                    <li>
                                        <a href="/profile/{{ $_SESSION['user']->id }}/history">@lang('general.my_orders')</a>
                                    </li>
                                    <li><a href="/auth/logout">@lang('general.log_out')</a></li>
                                </ul>
                            </div>
                        </li>
                    @endif
                    <li class="dropdown setting"><a href="/main/rules">@lang('general.rules_header')</a></li>
                    <li class="dropdown setting"><a href="/main/whoWeAre">@lang('general.who_we_are')</a></li>
                    <li class="dropdown setting"><a href="/main/customer-service">@lang('general.customer_service')</a>
                    </li>
                    <li class="dropdown setting"><a href="/main/questionanswer">@lang('general.common_questions')</a>
                    </li>
                    <li class="dropdown setting lang-switcher">
                        <a data-toggle="dropdown" role="button" href="#"
                           class="dropdown-toggle ">
                            <span>@lang('general.languages')</span>
                            <i aria-hidden="true" class="fa fa-angle-down"></i>
                        </a>
                        <div class="dropdown-menu">

                            <ul class="account">
                                <li><a href="/lang/en">English</a></li>
                                <li><a href="/lang/he">עִברִית</a></li>
                                <li><a href="/lang/es">Spanish</a></li>
                            </ul>
                        </div>
                    </li>

                    {{--<li style="margin-top: 5px;">--}}
                    {{--<div class="dropdown">--}}
                    {{--<button class="dropdown-toggle" type="button" id="dropdownMenu"--}}
                    {{--data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">--}}
                    {{--שירותים--}}
                    {{--<es class="caret"></es>--}}
                    {{--</button>--}}
                    {{--<ul class="dropdown-menu" aria-labelledby="dropdownMenu">--}}
                    {{----}}
                    {{--</ul>--}}
                    {{--</div>--}}
                    {{--</li>--}}
                    {{--<li><a href="">Services</a></li>--}}
                    <div class="fb-like" data-href="{{$rootUrl}}" data-layout="button" data-action="like"
                         data-size="large"
                         data-show-faces="false" data-share="false" style="margin-right: 50px; margin-top: 4px;"></div>


                </ul><!-- nav-left -->

                <!-- nav-right -->
                <ul class="nav-right">
                    @if(isset($siteslug))
                        @if($siteslug=="ebay")
                            <h1>@lang('general.ebay')</h1>
                        @elseif($siteslug=="aliexpress")
                            <h1>@lang('general.aliexpress')</h1>
                        @elseif($siteslug=="amazon")
                            <h1>@lang('general.amazon')</h1>
                        @elseif($siteslug=="next")
                            <h1>@lang('general.next_store')</h1>
                        @elseif($siteslug=="asos")
                            <h1>@lang('general.asos_shop')</h1>
                        @endif
                    @endif
                </ul><!-- nav-right -->


            </div>
        </div><!-- header-top -->

        <!-- header-content -->
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 nav-left">

                        <!-- logo -->
                        <strong class="logo">
                            <a href="/"><img class="header-logo" src="{!! asset('images/icon/index1/main_logo.png') !!}"
                                             alt="logo"></a>
                        </strong>
                    </div>

                    <div class="nav-right">

                        <!-- block mini cart -->
                        <div class="block-minicart dropdown">
                            <a class="dropdown-toggle" href="/cart" role="button">
                                {{--<div class="block-minicart dropdown">--}}
                                {{--<a class="" href="/cart" role="button" data-toggle="">--}}

                                <span class="cart-icon"></span>
                                <span class="counter qty">
                            <span class="cart-text">Shopping Cart</span>
                                        <span class="counter-number">
                                            <span class="cart-items-count">
                                               @if(isset($_SESSION['products']))
                                                    {{ count($_SESSION['products']) }}
                                                @else
                                                    0
                                                @endif
                                        </span>
                                        </span>
                                        <span class="counter-label">
                                            <span class="cart-items-count">
                                               @if(isset($_SESSION['products']))
                                                    {{ count($_SESSION['products']) }}
                                                @else
                                                    0
                                                @endif
                                            </span>
                                            <span>Items</span>
                                        </span>
                            <span class="counter-price">$75.00</span>
                            </span>
                            </a>
                            <div class="dropdown-menu">
                                <form>
                                    <div class="minicart-content-wrapper">
                                        <div class="subtitle">
                                        <span class="cart-items-count">
                                            @if(!isset($_SESSION['products']) || count($_SESSION['products'])==0)
                                                @lang('general.empty_shop_cart')@endlang
                                            @else
                                                @lang('general.you_have')@endlang
                                                {{ count($_SESSION['products']) }}
                                                @lang('general.items_in_your_cart')@endlang
                                            @endif
                                        </span>

                                        </div>
                                        <div class="minicart-items-wrapper">
                                            <ol class="minicart-items">
                                            </ol>
                                        </div>
                                        <div class="subtotal">
                                        </div>
                                        <div class="actions">
                                            <a href="/checkout">
                                                <button class="btn btn-checkout" type="button" title="Check Out">
                                                    <span>@lang('general.order_now')</span>
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="nav-mind" style="float:right">
                        <!-- block search -->
                        <div class="block-search" style="width: 100%">
                            <div class="block-title">
                                <span>Search</span>
                            </div>
                            @include('includes.fragments.search')
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- header-content -->


        <!-- header-nav -->
        <div class="header-nav mid-header">
            <div class="container">

                <div class="box-header-nav">

                @if(isset($siteslug))
                    @if($_SERVER["REQUEST_URI"]=="/" ||$_SERVER["REQUEST_URI"]=="/aliexpress"
                    ||$_SERVER["REQUEST_URI"]=="/amazon"||$_SERVER["REQUEST_URI"]=="/ebay"||$_SERVER["REQUEST_URI"]=="/next")
                        @include('includes.fragments.categoryMenuClose')
                    @else
                        @include('includes.fragments.categoryMenuOpen')
                    @endif
                @endif
                <!-- menu -->
                    <div class="block-nav-menu">
                        <div class="clearfix"><span data-action="close-nav" class="close-nav"><span>close</span></span>
                        </div>

                        <ul class="ui-menu tabs">

                            <li @if(isset($isOneDayDeals)) class="active tabs-one-day"
                                @endif class="tabs-one-day">

                                @if(isset($siteslug) && $siteslug=="ebay")
                                    <a href="/{{$siteslug}}/oneDayDeals">
                                        <span>@lang('general.eBay_daily_deal')</span>
                                        @else
                                            <a href="/aliexpress/oneDayDeals">
                                                <span>@lang('general.aliexspress_promotions')</span>
                                                @endif
                                                <div class="deals-of-countdown">
                                                    <div class="count-down-time clearfix"
                                                         @if(isset($timerTime))
                                                         data-countdown="{{$timerTime}}"
                                                         @else
                                                         data-countdown="{{date('Y-m-d',strtotime("+1 day"))}}"
                                                            @endif
                                                    ></div>
                                                </div>
                                            </a>
                            </li>

                            <li @if(isset($siteslug) && $siteslug == "aliexpress" && !isset($isOneDayDeals))
                                class="active"
                                    @endif
                            >
                                <a href="/aliexpress">
                                    <img height="40px" src="{!! asset('images/icon/index1/ali_logo.png') !!}"
                                         alt="aliexpress_logo">
                                </a>
                            </li>

                            <li @if(isset($siteslug) && $siteslug=="ebay" && !isset($isOneDayDeals))
                                class="active"
                                    @endif
                            >
                                <a href="/ebay">
                                    <img height="40px" src="{!! asset('images/icon/index1/ebay_logo.png') !!}"
                                         alt="ebay_logo">
                                </a>
                            </li>

                            <li @if(isset($siteslug) && $siteslug=="amazon")
                                class="active"
                                    @endif
                            >
                                <a href="/amazon">
                                    <img height="40px" src="{!! asset('images/icon/index1/amazon_logo.png') !!}"
                                         alt="amazon_logo">
                                </a>
                            </li>

                            <li @if(isset($siteslug) && $siteslug=="next")
                                class="active"
                                    @endif
                            >
                                <a href="/next">
                                    <img height="20px" src="{!! asset('images/icon/index1/next-logo.png') !!}"
                                         alt="amazon_logo">
                                </a>
                            </li>

                            <li @if(isset($siteslug) && $siteslug=="asos")
                            class="active"
                                    @endif
                            >
                                <a href="/asos" class="asos-shop">
                                    <img height="25px" src="{!! asset('images/icon/index1/asos_logo.png') !!}"
                                         alt="asos_logo">
                                </a>
                            </li>
                        </ul>
                    </div><!-- menu -->
                    <div class="block-minicart dropdown ">
                        {{--<a class="dropdown-toggle" href="/cart" role="button" data-toggle="dropdown">--}}
                        <a class="dropdown-toggle" href="/cart" role="button">
                            <span class="cart-icon"></span>
                        </a>
                        <div class="dropdown-menu">
                            <form>
                                <div class="minicart-content-wrapper">
                                    <div class="subtitle">
                                        @lang("general.empty_shop_cart")
                                    </div>
                                    <div class="minicart-items-wrapper">
                                        <ol class="minicart-items">
                                        </ol>
                                    </div>
                                    <div class="subtotal">
                                    </div>
                                    <div class="actions">
                                        <button class="btn btn-checkout" type="button" title="Check Out">
                                            <span>Checkout</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="block-search">
                        <div class="block-title">
                            <span>Search</span>
                        </div>
                        @include('includes.fragments.search')
                    </div>

                    <!--setting  -->
                    <div class="dropdown setting">

                        <a data-toggle="dropdown" role="button" href="#" class="dropdown-toggle "><span>Settings</span>
                            <i aria-hidden="true" class="fa fa-user"></i></a>
                        <div class="dropdown-menu">
                            @if(isset($_SESSION['user']))
                                <strong class="title">@lang('general.peace'),{{ $_SESSION['user']->name }}</strong>
                                <hr style="height: 1px; color:gray">
                            @endif

                            <ul class="account">

                                @if(!isset($_SESSION['user']))
                                    <li>
                                        <a href="/auth"><span>@lang('general.register_login')</span></a>
                                    </li>
                                @else
                                    <li><a href="/conversation">פניות לשירות לקוחות</a></li>
                                    <li><a href="/reportConversation">דיווחי המוצרים שלי</a></li>
                                    <li><a href="/profile/{{ $_SESSION['user']->id }}">החשבון שלי</a></li>
                                    <li><a href="/profile/{{ $_SESSION['user']->id }}/history">ההזמנות שלי</a></li>
                                    <li><a href="/auth/logout">התנתק</a></li>
                                @endif
                            </ul>
                        </div>
                    </div><!--setting  -->
                    <!--setting  -->
                    <div class="block-minicart dropdown " style="margin-left: 153px;">

                        <a data-toggle="dropdown" role="button" href="#" class="dropdown-toggle "><img class="cart-icon"
                                                                                                       src="/images/media/index1/book-icon.png"></a>
                        <div class="dropdown-menu">
                            <ul class="account">
                                <li style="list-style: disc;margin-right: 15px;color: #aaa;">
                                    <a href="/main/rules"><span>תקנון האתר</span></a>
                                </li>
                                <li style="list-style: disc; margin-right: 15px;color: #aaa;">
                                    <a href="/main/whoWeAre"><span>מי אנחנו ?</span></a>
                                </li>
                            </ul>
                        </div>
                    </div><!--setting  -->
                    <div class="block-minicart dropdown " style="margin-left: 215px; margin-top: 11px;">
                        <div class="fb-like" data-href="{{$rootUrl}}" data-layout="button" data-action="like"
                             data-size="large"
                             data-show-faces="false" data-share="false"></div>
                    </div>
                </div>
            </div>
        </div><!-- header-nav -->
    </div>
</header><!-- end HEADER -->
