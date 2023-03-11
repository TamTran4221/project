@extends('layout')
@section('layout')
    <main id="main" class="">
        <div id="content" class="content-area page-wrapper" role="main">
            <div class="row row-main">
                <div class="large-12 col">
                    <div class="col-inner">
                        <div class="woocommerce">
                            <div class="woocommerce-info message-wrapper">
                                <div class="message-container container medium-text-center">
                                    Bạn đã có tài khoản? <a href="#" class="showlogin">Ấn vào đây để đăng nhập</a>
                                </div>
                            </div>
                            <form class="woocommerce-form woocommerce-form-login login" method="post"style="display:none;">
                                <p>Nếu trước đây bạn đã mua hàng của chúng tôi, vui lòng ghi đầy đủ thông tin trong các hộp
                                    dưới đây. Nếu bạn là khách hàng mới, vui lòng chuyển tới phần Đơn hàng &amp; Giao hàng.
                                </p>
                                <p class="form-row form-row-first">
                                    <label for="username">Tên đăng nhập hoặc email <span class="required">*</span></label>
                                    <input type="text" class="input-text" name="username" id="username" />
                                </p>
                                <p class="form-row form-row-last">
                                    <label for="password">Mật khẩu <span class="required">*</span></label>
                                    <input class="input-text" type="password" name="password" id="password" />
                                </p>
                                <div class="clear"></div>
                                <p class="form-row">
                                    <input type="hidden" id="woocommerce-login-nonce" name="woocommerce-login-nonce" value="" /><input type="hidden" name="_wp_http_referer" value="" />
                                    <button type="submit" class="button" name="" value="Đăng nhập">Đăng nhập</button>
                                    <input type="hidden" name="" value="{{route('home')}}" />
                                    <label class="woocommerce-form__label woocommerce-form__label-for-checkbox inline">
                                        <input class="woocommerce-form__input woocommerce-form__input-checkbox"name="rememberme" type="checkbox" id="rememberme" value="forever" /> <span>Ghi nhớ mật khẩu</span>
                                    </label>
                                </p>
                                <p class="lost_password">
                                    <a href="">Quên mật khẩu?</a>
                                </p>

                                <div class="clear"></div>


                            </form>



                            <form name="checkout" method="post" class="checkout woocommerce-checkout " action=""
                                enctype="multipart/form-data">

                                <div class="row pt-0 ">
                                    <div class="large-7 col  ">


                                        <div id="customer_details">
                                            <div class="clear">
                                                <div class="woocommerce-billing-fields">
                                                    <h3>Thông tin thanh toán</h3>
                                                    <div class="woocommerce-billing-fields__field-wrapper">
                                                        <p class="form-row form-row-first validate-required"
                                                            id="billing_first_name_field" data-priority="10"><label
                                                                for="billing_first_name" class="">Họ tên <abbr
                                                                    class="required" title="bắt buộc">*</abbr></label><input
                                                                type="text" class="input-text " name="billing_first_name"
                                                                id="billing_first_name" placeholder="" value=""
                                                                autocomplete="given-name" /></p>

                                                        <p class="form-row address-field form-row-first validate-required"
                                                            id="billing_address_1_field" data-priority="50"><label
                                                                for="billing_address_1" class="">Địa chỉ <abbr
                                                                    class="required" title="bắt buộc">*</abbr></label><input
                                                                type="text" class="input-text " name="billing_address_1"
                                                                id="billing_address_1" placeholder="Địa chỉ" value=""
                                                                autocomplete="address-line1" /></p>
                                                        <p class="form-row address-field form-row-last"
                                                            id="billing_address_2_field" data-priority="60"><label
                                                                for="billing_address_2" class="">Địa chỉ nhà, căn
                                                                hộ, toà nhà,.. (tuỳ chọn)</label><input type="text"
                                                                class="input-text " name="billing_address_2"
                                                                id="billing_address_2"
                                                                placeholder="Địa chỉ nhà, căn hộ, toà nhà,.. (tuỳ chọn)"
                                                                value="" autocomplete="address-line2" /></p>
                                                        <p class="form-row form-row-wide address-field validate-required"
                                                            id="billing_city_field" data-priority="70"><label
                                                                for="billing_city" class="">Tỉnh / Thành phố <abbr
                                                                    class="required"
                                                                    title="bắt buộc">*</abbr></label><input type="text"
                                                                class="input-text " name="billing_city" id="billing_city"
                                                                placeholder="" value=""
                                                                autocomplete="address-level2" /></p>
                                                        <p class="form-row form-row-wide address-field validate-state"
                                                            id="billing_state_field" style="display: none"><label
                                                                for="billing_state" class="">Quận /
                                                                huyện</label><input type="hidden" class="hidden"
                                                                name="billing_state" id="billing_state" value=""
                                                                autocomplete="address-level1" placeholder=""
                                                                readonly="readonly" /></p>
                                                        <p class="form-row form-row-wide validate-required validate-phone"
                                                            id="billing_phone_field" data-priority="100"><label
                                                                for="billing_phone" class="">Số điện thoại <abbr
                                                                    class="required"
                                                                    title="bắt buộc">*</abbr></label><input type="tel"
                                                                class="input-text " name="billing_phone"
                                                                id="billing_phone" placeholder="" value=""
                                                                autocomplete="tel" /></p>
                                                        <p class="form-row form-row-wide validate-required validate-email"
                                                            id="billing_email_field" data-priority="110"><label
                                                                for="billing_email" class="">Địa chỉ email <abbr
                                                                    class="required"
                                                                    title="bắt buộc">*</abbr></label><input type="email"
                                                                class="input-text " name="billing_email"
                                                                id="billing_email" placeholder="" value=""
                                                                autocomplete="email username" /></p>
                                                    </div>

                                                </div>

                                                <div class="woocommerce-account-fields">

                                                    <p class="form-row form-row-wide create-account">
                                                        <label
                                                            class="woocommerce-form__label woocommerce-form__label-for-checkbox checkbox">
                                                            <input
                                                                class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox"
                                                                id="createaccount" type="checkbox" name="createaccount"
                                                                value="1" /> <span>Tạo tài khoản mới?</span>
                                                        </label>
                                                    </p>




                                                    <div class="create-account">
                                                        <p class="form-row validate-required" id="account_password_field"
                                                            data-priority=""><label for="account_password"
                                                                class="">Tạo mật khẩu của tài khoản <abbr
                                                                    class="required"
                                                                    title="bắt buộc">*</abbr></label><input
                                                                type="password" class="input-text "
                                                                name="account_password" id="account_password"
                                                                placeholder="Mật khẩu" value="" /></p>
                                                        <div class="clear"></div>
                                                    </div>


                                                </div>
                                            </div>
                                            <div class="clear">
                                                <div class="woocommerce-shipping-fields">

                                                    <h3 id="ship-to-different-address">
                                                        <label
                                                            class="woocommerce-form__label woocommerce-form__label-for-checkbox checkbox">
                                                            <input id="ship-to-different-address-checkbox"
                                                                class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox"
                                                                type="checkbox" name="ship_to_different_address"
                                                                value="1" /> <span>Giao hàng tới địa chỉ khác?</span>
                                                        </label>
                                                    </h3>

                                                    <div class="shipping_address">


                                                        <div class="woocommerce-shipping-fields__field-wrapper">
                                                            <p class="form-row form-row-first validate-required"
                                                                id="shipping_first_name_field" data-priority="10"><label
                                                                    for="shipping_first_name" class="">Họ và tên <abbr
                                                                        class="required"
                                                                        title="bắt buộc">*</abbr></label><input
                                                                    type="text" class="input-text "
                                                                    name="shipping_first_name" id="shipping_first_name"
                                                                    placeholder="" value=""
                                                                    autocomplete="given-name" /></p>
                                                            


                                                            <p class="form-row address-field form-row-first validate-required"
                                                                id="shipping_address_1_field" data-priority="50"><label
                                                                    for="shipping_address_1" class="">Địa chỉ <abbr
                                                                        class="required"
                                                                        title="bắt buộc">*</abbr></label><input
                                                                    type="text" class="input-text "
                                                                    name="shipping_address_1" id="shipping_address_1"
                                                                    placeholder="Địa chỉ" value=""
                                                                    autocomplete="address-line1" /></p>
                                                            <p class="form-row address-field form-row-last"
                                                                id="shipping_address_2_field" data-priority="60"><label
                                                                    for="shipping_address_2" class="">Địa chỉ nhà,
                                                                    căn hộ, toà nhà,.. (tuỳ chọn)</label><input
                                                                    type="text" class="input-text "
                                                                    name="shipping_address_2" id="shipping_address_2"
                                                                    placeholder="Địa chỉ nhà, căn hộ, toà nhà,.. (tuỳ chọn)"
                                                                    value="" autocomplete="address-line2" /></p>
                                                            <p class="form-row form-row-wide address-field validate-required"
                                                                id="shipping_city_field" data-priority="70"><label
                                                                    for="shipping_city" class="">Tỉnh / Thành phố
                                                                    <abbr class="required"
                                                                        title="bắt buộc">*</abbr></label><input
                                                                    type="text" class="input-text "
                                                                    name="shipping_city" id="shipping_city"
                                                                    placeholder="" value=""
                                                                    autocomplete="address-level2" /></p>
                                                            <p class="form-row form-row-wide address-field validate-state"
                                                                id="shipping_state_field" style="display: none"><label
                                                                    for="shipping_state" class="">Quận /
                                                                    huyện</label><input type="hidden" class="hidden"
                                                                    name="shipping_state" id="shipping_state"
                                                                    value="" autocomplete="address-level1"
                                                                    placeholder="" readonly="readonly" /></p>
                                                        </div>


                                                    </div>

                                                </div>
                                                <div class="woocommerce-additional-fields">



                                                    <div class="woocommerce-additional-fields__field-wrapper">
                                                        <p class="form-row notes" id="order_comments_field"
                                                            data-priority=""><label for="order_comments"
                                                                class="">Ghi chú đơn hàng</label>
                                                            <textarea name="order_comments" class="input-text " id="order_comments"
                                                                placeholder="Ghi chú về đơn hàng, ví dụ: thời gian hay chỉ dẫn địa điểm giao hàng chi tiết hơn." rows="2"
                                                                cols="5"></textarea>
                                                        </p>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>


                                    </div><!-- large-7 -->

                                    <div class="large-5 col">

                                        <div class="col-inner has-border">
                                            <div class="checkout-sidebar sm-touch-scroll">
                                                <h3 id="order_review_heading">Đơn hàng của bạn</h3>

                                                <div id="order_review" class="woocommerce-checkout-review-order">
                                                    <table class="shop_table woocommerce-checkout-review-order-table">
                                                        <thead>
                                                            <tr>
                                                                <th class="product-name">Sản phẩm</th>
                                                                <th class="product-total">Tổng cộng</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($cart->items as $item)
                                                            <tr class="cart_item">
                                                                <td class="product-name">
                                                                    {{$item->name}}&nbsp; <strong
                                                                        class="product-quantity">× {{$item->quantity}}</strong> </td>
                                                                <td class="product-total">
                                                                    <span
                                                                        class="woocommerce-Price-amount amount">{{number_format($item->price)}}&nbsp;<span
                                                                            class="woocommerce-Price-currencySymbol">₫</span></span>
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                           
                                                            
                                                        </tbody>
                                                        <tfoot>
                                                            <tr class="cart-subtotal">
                                                                <th>Tổng cộng</th>
                                                                <td><span
                                                                        class="woocommerce-Price-amount amount">{{number_format($cart->totalAmount)}}&nbsp;<span
                                                                            class="woocommerce-Price-currencySymbol">₫</span></span>
                                                                </td>
                                                            </tr>
                                                            <tr class="shipping">
                                                                <th>Giao hàng 1</th>
                                                                <td data-title="Giao hàng 1">
                                                                    Giao hàng miễn phí <input type="hidden"
                                                                        name="shipping_method[0]" data-index="0"
                                                                        id="shipping_method_0" value="free_shipping:1"
                                                                        class="shipping_method">

                                                                </td>
                                                            </tr>
                                                            <tr class="order-total">
                                                                <th>Tổng cộng</th>
                                                                <td><strong><span
                                                                            class="woocommerce-Price-amount amount">{{number_format($cart->totalAmount)}}&nbsp;<span
                                                                                class="woocommerce-Price-currencySymbol">₫</span></span></strong>
                                                                </td>
                                                            </tr>


                                                        </tfoot>
                                                    </table>

                                                    <div id="payment" class="woocommerce-checkout-payment">
                                                        <ul class="wc_payment_methods payment_methods methods">
                                                            <li
                                                                class="woocommerce-notice woocommerce-notice--info woocommerce-info">
                                                                Rất tiếc, có vẻ như không có phương thức thanh toán nào phù
                                                                hợp với khu vực bang hiện tại của bạn. Vui lòng liên hệ với
                                                                chúng tôi nếu bạn cần hỗ trợ hoặc muốn sắp xếp phương án
                                                                thay thế.</li>
                                                        </ul>
                                                        <div class="form-row place-order">
                                                            <noscript>
                                                                Trình duyệt của bạn không hỗ trợ JavaScript, hoặc nó bị vô
                                                                hiệu hóa, hãy đảm bảo bạn nhấp vào &lt;em&gt; Cập nhật giỏ
                                                                hàng &lt;/ em&gt; trước khi bạn thanh toán. Bạn có thể phải
                                                                trả nhiều hơn số tiền đã nói ở trên, nếu bạn không làm như
                                                                vậy. <br /><button type="submit" class="button alt"
                                                                    name="woocommerce_checkout_update_totals"
                                                                    value="Cập nhật tổng">Cập nhật tổng</button>
                                                            </noscript>



                                                            <button type="submit" class="button alt"
                                                                name="woocommerce_checkout_place_order" id="place_order"
                                                                value="Đặt hàng" data-value="Đặt hàng">Đặt hàng</button>

                                                            <input type="hidden" id="_wpnonce" name="_wpnonce"
                                                                value="8a5a1064a6"><input type="hidden"
                                                                name="_wp_http_referer"
                                                                value="/noithatbanghe/?wc-ajax=update_order_review">
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="html-checkout-sidebar pt-half"></div>
                                            </div>
                                        </div>

                                    </div><!-- large-5 -->

                                </div><!-- row -->
                            </form>

                        </div>


                    </div><!-- .col-inner -->
                </div><!-- .large-12 -->
            </div><!-- .row -->
        </div>


    </main><!-- #main -->
@endsection
