@extends('layout')
@section('title', 'Danh mục')
@section('layout')

    <main id="main" class="">
        <div class="row category-page-row">

            <div class="col large-3 hide-for-medium ">
                <div id="shop-sidebar" class="sidebar-inner col-inner">
                    <aside id="woocommerce_product_search-2" class="widget woocommerce widget_product_search">
                        <form role="search" method="get" class="searchform"
                            action="">
                            <div class="flex-row relative">
                                <div class="flex-col flex-grow">
                                    <input type="search" class="search-field mb-0" name="s" value=""
                                        placeholder="Tìm kiếm&hellip;" />
                                    <input type="hidden" name="post_type" value="product" />
                                </div><!-- .flex-col -->
                                <div class="flex-col">
                                    <button type="submit"
                                        class="ux-search-submit submit-button secondary button icon mb-0">
                                        <i class="icon-search"></i> </button>
                                </div><!-- .flex-col -->
                            </div><!-- .flex-row -->
                            <div class="live-search-results text-left z-top"></div>
                        </form>
                    </aside>
                    <aside id="nav_menu-2" class="widget widget_nav_menu"><span class="widget-title shop-sidebar">Danh mục sản phẩm</span>
                        <div class="is-divider small"></div>
                        <div class="menu-danh-muc-san-pham-vertical-menu-container">
                            <ul id="menu-danh-muc-san-pham-vertical-menu" class="menu">
                               
                                @foreach ($category as $value)
                                <li id="menu-item-488"class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-488">
                                    <a href="{{route('category',['slug'=> $value->slug])}}" class="menu-image-title-after">
                                        <span class="menu-image-title">{{$value->name}}</span>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </aside>
                    <aside id="woocommerce_products-3" class="widget woocommerce widget_products"><span
                            class="widget-title shop-sidebar">Sản phẩm</span>
                        <div class="is-divider small"></div>
                        <ul class="product_list_widget">
                            <li>

                                <a href="../san-pham/ke-tivi-go-dinh-huong/index.html">
                                    <img width="300" height="300" src="../wp-content/uploads/2018/04/4-3-300x300.jpg"
                                        class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image"
                                        alt=""
                                        srcset="//mauweb.monamedia.net/noithatbanghe/wp-content/uploads/2018/04/4-3-300x300.jpg 300w, //mauweb.monamedia.net/noithatbanghe/wp-content/uploads/2018/04/4-3-150x150.jpg 150w, //mauweb.monamedia.net/noithatbanghe/wp-content/uploads/2018/04/4-3-24x24.jpg 24w, //mauweb.monamedia.net/noithatbanghe/wp-content/uploads/2018/04/4-3-36x36.jpg 36w, //mauweb.monamedia.net/noithatbanghe/wp-content/uploads/2018/04/4-3-48x48.jpg 48w, //mauweb.monamedia.net/noithatbanghe/wp-content/uploads/2018/04/4-3.jpg 600w, //mauweb.monamedia.net/noithatbanghe/wp-content/uploads/2018/04/4-3-100x100.jpg 100w"
                                        sizes="(max-width: 300px) 100vw, 300px" /> <span class="product-title">Kệ Tivi Gỗ
                                        Đinh Hương</span>
                                </a>


                                <span class="woocommerce-Price-amount amount">8,952,300&nbsp;<span
                                        class="woocommerce-Price-currencySymbol">&#8363;</span></span>
                            </li>
                            <li>

                                <a href="../san-pham/bo-ban-ghe-an-go-soi-6-ghe-vat-goc-boc/index.html">
                                    <img width="300" height="300" src="../wp-content/uploads/2018/04/05-300x300.jpg"
                                        class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image"
                                        alt=""
                                        srcset="//mauweb.monamedia.net/noithatbanghe/wp-content/uploads/2018/04/05-300x300.jpg 300w, //mauweb.monamedia.net/noithatbanghe/wp-content/uploads/2018/04/05-150x150.jpg 150w, //mauweb.monamedia.net/noithatbanghe/wp-content/uploads/2018/04/05-24x24.jpg 24w, //mauweb.monamedia.net/noithatbanghe/wp-content/uploads/2018/04/05-36x36.jpg 36w, //mauweb.monamedia.net/noithatbanghe/wp-content/uploads/2018/04/05-48x48.jpg 48w, //mauweb.monamedia.net/noithatbanghe/wp-content/uploads/2018/04/05.jpg 600w, //mauweb.monamedia.net/noithatbanghe/wp-content/uploads/2018/04/05-100x100.jpg 100w"
                                        sizes="(max-width: 300px) 100vw, 300px" /> <span class="product-title">Bộ bàn ghế ăn
                                        gỗ Sồi 6 ghế vát góc bọc</span>
                                </a>


                                <span class="woocommerce-Price-amount amount">7,459,000&nbsp;<span
                                        class="woocommerce-Price-currencySymbol">&#8363;</span></span>
                            </li>
                            <li>

                                <a href="../san-pham/bo-ban-ghe-an-go-cao-su/index.html">
                                    <img width="300" height="300" src="../wp-content/uploads/2018/04/09-300x300.jpg"
                                        class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image"
                                        alt=""
                                        srcset="//mauweb.monamedia.net/noithatbanghe/wp-content/uploads/2018/04/09-300x300.jpg 300w, //mauweb.monamedia.net/noithatbanghe/wp-content/uploads/2018/04/09-150x150.jpg 150w, //mauweb.monamedia.net/noithatbanghe/wp-content/uploads/2018/04/09-24x24.jpg 24w, //mauweb.monamedia.net/noithatbanghe/wp-content/uploads/2018/04/09-36x36.jpg 36w, //mauweb.monamedia.net/noithatbanghe/wp-content/uploads/2018/04/09-48x48.jpg 48w, //mauweb.monamedia.net/noithatbanghe/wp-content/uploads/2018/04/09.jpg 600w, //mauweb.monamedia.net/noithatbanghe/wp-content/uploads/2018/04/09-100x100.jpg 100w"
                                        sizes="(max-width: 300px) 100vw, 300px" /> <span class="product-title">Bộ bàn ghế ăn
                                        gỗ Cao Su</span>
                                </a>


                                <span class="woocommerce-Price-amount amount">5,471,000&nbsp;<span
                                        class="woocommerce-Price-currencySymbol">&#8363;</span></span>
                            </li>
                            <li>

                                <a href="../san-pham/bo-ban-ghe-an-go-soi-6-ghe-mau-2-tang-1m6-bas215/index.html">
                                    <img width="300" height="300" src="../wp-content/uploads/2018/04/04-300x300.jpg"
                                        class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image"
                                        alt=""
                                        srcset="//mauweb.monamedia.net/noithatbanghe/wp-content/uploads/2018/04/04-300x300.jpg 300w, //mauweb.monamedia.net/noithatbanghe/wp-content/uploads/2018/04/04-150x150.jpg 150w, //mauweb.monamedia.net/noithatbanghe/wp-content/uploads/2018/04/04-24x24.jpg 24w, //mauweb.monamedia.net/noithatbanghe/wp-content/uploads/2018/04/04-36x36.jpg 36w, //mauweb.monamedia.net/noithatbanghe/wp-content/uploads/2018/04/04-48x48.jpg 48w, //mauweb.monamedia.net/noithatbanghe/wp-content/uploads/2018/04/04.jpg 600w, //mauweb.monamedia.net/noithatbanghe/wp-content/uploads/2018/04/04-100x100.jpg 100w"
                                        sizes="(max-width: 300px) 100vw, 300px" /> <span class="product-title">Bộ bàn ghế
                                        ăn gỗ Sồi 6 ghế mẫu 2 tầng 1m6 - BAS215</span>
                                </a>


                                <span class="woocommerce-Price-amount amount">7,568,000&nbsp;<span
                                        class="woocommerce-Price-currencySymbol">&#8363;</span></span>
                            </li>
                        </ul>
                    </aside>
                </div><!-- .sidebar-inner -->
            </div><!-- #shop-sidebar -->

            <div class="col large-9">
                <div class="shop-container">
                   
                   
                    <div class="products row row-small large-columns-3 medium-columns-3 small-columns-2">
                        @foreach ($product as $value)
                        <div class="product-small col has-hover post-431 product type-product status-publish has-post-thumbnail product_cat-ban-an first instock shipping-taxable purchasable product-type-simple">
                            <div class="col" data-animate="bounceInRight">
                                <div class="col-inner">

                                    <div class="badge-container absolute left top z-1">
                                    </div>
                                    <div class="product-small box has-hover box-normal box-text-bottom">
                                        <div class="box-image">
                                            <div class="image-zoom">
                                                <a href="{{route('detail',['id'=> $value->id])}}">
                                                    <img width="300" height="300"
                                                        src="{{url('uploads')}}/{{$value->image}}"class="attachment-shop_catalog size-shop_catalog wp-post-image"alt=""/>
                                                </a>
                                                        
                                            </div>
                                            <div class="image-tools top right show-on-hover">
                                            </div>
                                            <div
                                            class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                            <a rel="nofollow" href="{{route('cart.add', $value->id)}}"
                                                
                                                class="ajax_add_to_cart add_to_cart_button add-to-cart-grid"
                                                style="width:0">
                                                <div class="cart-icon tooltip absolute is-small"
                                                    title="Thêm vào giỏ"><strong>+</strong></div>
                                            </a>
                                        </div>
                                        </div><!-- box-image -->

                                        <div class="box-text text-center">
                                            <div class="title-wrapper">
                                                <p
                                                    class="category uppercase is-smaller no-text-overflow product-cat op-7">{{$value->category->name}} </p>
                                                <p class="name product-title"><a
                                                        href="{{route('detail',['id'=> $value->id])}}">{{$value->name}}</a></p>
                                            </div>
                                            <div class="price-wrapper">
                                                <span class="price"><span
                                                        class="woocommerce-Price-amount amount">{{number_format($value->price)}}<span
                                                            class="woocommerce-Price-currencySymbol">&#8363;</span></span></span>
                                            </div>
                                        </div><!-- box-text -->
                                    </div><!-- box -->
                                </div><!-- .col-inner -->
                            </div><!-- col -->
                        </div><!-- row -->
                        @endforeach
                    </div><!-- shop container -->
                    
                </div>
            </div>

    </main><!-- #main -->
@endsection
