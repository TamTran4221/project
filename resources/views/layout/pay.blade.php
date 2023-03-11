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
                            <form class="woocommerce-form woocommerce-form-login login" method="post"
                                style="display:none;">


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
                                    <input type="hidden" id="woocommerce-login-nonce" name="woocommerce-login-nonce"
                                        value="e2cfeb509d" /><input type="hidden" name="_wp_http_referer"
                                        value="" /> <button type="submit" class="button"
                                        name="login" value="Đăng nhập">Đăng nhập</button>
                                    <input type="hidden" name="redirect" value="index.html" />
                                    <label class="woocommerce-form__label woocommerce-form__label-for-checkbox inline">
                                        <input class="woocommerce-form__input woocommerce-form__input-checkbox"
                                            name="rememberme" type="checkbox" id="rememberme" value="forever" /> <span>Ghi
                                            nhớ mật khẩu</span>
                                    </label>
                                </p>
                                <p class="lost_password">
                                    <a href="">Quên mật khẩu?</a>
                                </p>

                                <div class="clear"></div>


                            </form>



                            <form name="checkout" method="post" class="checkout woocommerce-checkout "
                                action=""
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
                                                                for="billing_first_name" class="">Họ <abbr
                                                                    class="required" title="bắt buộc">*</abbr></label><input
                                                                type="text" class="input-text " name="billing_first_name"
                                                                id="billing_first_name" placeholder="" value=""
                                                                autocomplete="given-name" /></p>
                                                        <p class="form-row form-row-last validate-required"
                                                            id="billing_last_name_field" data-priority="20"><label
                                                                for="billing_last_name" class="">Tên <abbr
                                                                    class="required"
                                                                    title="bắt buộc">*</abbr></label><input type="text"
                                                                class="input-text " name="billing_last_name"
                                                                id="billing_last_name" placeholder="" value=""
                                                                autocomplete="family-name" /></p>
                                                        <p class="form-row form-row-wide" id="billing_company_field"
                                                            data-priority="30"><label for="billing_company"
                                                                class="">Tên công ty</label><input type="text"
                                                                class="input-text " name="billing_company"
                                                                id="billing_company" placeholder="" value=""
                                                                autocomplete="organization" /></p>
                                                        <p class="form-row form-row-wide address-field update_totals_on_change validate-required"
                                                            id="billing_country_field" data-priority="40"><label
                                                                for="billing_country" class="">Quốc gia <abbr
                                                                    class="required"
                                                                    title="bắt buộc">*</abbr></label><select
                                                                name="billing_country" id="billing_country"
                                                                class="country_to_state country_select "
                                                                autocomplete="country">
                                                                <option value="">Chọn quốc gia&hellip;</option>
                                                                <option value="AF">Afghanistan</option>
                                                                <option value="EG">Ai Cập</option>
                                                                <option value="AL">Albania</option>
                                                                <option value="DZ">Algeria</option>
                                                                <option value="AS">American Samoa</option>
                                                                <option value="AD">Andorra</option>
                                                                <option value="AO">Angola</option>
                                                                <option value="AI">Anguilla</option>
                                                                <option value="GB">Anh (UK)</option>
                                                                <option value="AQ">Antarctica</option>
                                                                <option value="AG">Antigua và Barbuda</option>
                                                                <option value="AR">Argentina</option>
                                                                <option value="AM">Armenia</option>
                                                                <option value="AW">Aruba</option>
                                                                <option value="AZ">Azerbaijan</option>
                                                                <option value="BS">Bahamas</option>
                                                                <option value="BH">Bahrain</option>
                                                                <option value="BD">Bangladesh</option>
                                                                <option value="BB">Barbados</option>
                                                                <option value="BY">Belarus</option>
                                                                <option value="PW">Belau</option>
                                                                <option value="BZ">Belize</option>
                                                                <option value="BJ">Benin</option>
                                                                <option value="BM">Bermuda</option>
                                                                <option value="BT">Bhutan</option>
                                                                <option value="BO">Bolivia</option>
                                                                <option value="BQ">Bonaire, Saint Eustatius và Saba
                                                                </option>
                                                                <option value="BA">Bosnia và Herzegovina</option>
                                                                <option value="BW">Botswana</option>
                                                                <option value="BR">Brazil</option>
                                                                <option value="BN">Brunei</option>
                                                                <option value="BG">Bulgaria</option>
                                                                <option value="BF">Burkina Faso</option>
                                                                <option value="BI">Burundi</option>
                                                                <option value="BE">Bỉ</option>
                                                                <option value="PT">Bồ Đào Nha</option>
                                                                <option value="CI">Bờ biển Ngà</option>
                                                                <option value="CM">Cameroon</option>
                                                                <option value="KH">Campuchia</option>
                                                                <option value="CA">Canada</option>
                                                                <option value="CV">Cape Verde</option>
                                                                <option value="TD">Chad</option>
                                                                <option value="CL">Chile</option>
                                                                <option value="CX">Christmas Island</option>
                                                                <option value="CO">Colombia</option>
                                                                <option value="KM">Comoros</option>
                                                                <option value="CG">Congo (Brazzaville)</option>
                                                                <option value="CD">Congo (Kinshasa)</option>
                                                                <option value="CR">Costa Rica</option>
                                                                <option value="HR">Croatia</option>
                                                                <option value="CU">Cuba</option>
                                                                <option value="CW">Cura&Ccedil;ao</option>
                                                                <option value="CY">Cyprus</option>
                                                                <option value="UM">Các Tiểu đảo xa của Hoa Kỳ (US)
                                                                </option>
                                                                <option value="AE">Các tiểu vương quốc Ả Rập</option>
                                                                <option value="DO">Cộng hòa Dominica</option>
                                                                <option value="CZ">Cộng hòa Séc</option>
                                                                <option value="CF">Cộng hòa Trung Phi</option>
                                                                <option value="DJ">Djibouti</option>
                                                                <option value="DM">Dominica</option>
                                                                <option value="EC">Ecuador</option>
                                                                <option value="SV">El Salvador</option>
                                                                <option value="ER">Eritrea</option>
                                                                <option value="EE">Estonia</option>
                                                                <option value="ET">Ethiopia</option>
                                                                <option value="FJ">Fiji</option>
                                                                <option value="GA">Gabon</option>
                                                                <option value="GM">Gambia</option>
                                                                <option value="GE">Georgia</option>
                                                                <option value="GH">Ghana</option>
                                                                <option value="GI">Gibraltar</option>
                                                                <option value="GL">Greenland</option>
                                                                <option value="GD">Grenada</option>
                                                                <option value="GP">Guadeloupe</option>
                                                                <option value="GU">Guam</option>
                                                                <option value="GT">Guatemala</option>
                                                                <option value="GG">Guernsey</option>
                                                                <option value="GN">Guinea</option>
                                                                <option value="GQ">Guinea Xích đạo</option>
                                                                <option value="GW">Guinea-Bissau</option>
                                                                <option value="GY">Guyana</option>
                                                                <option value="GF">Guyane thuộc Pháp</option>
                                                                <option value="HT">Haiti</option>
                                                                <option value="HN">Honduras</option>
                                                                <option value="HU">Hungary</option>
                                                                <option value="GR">Hy Lạp</option>
                                                                <option value="NL">Hà Lan</option>
                                                                <option value="KR">Hàn Quốc</option>
                                                                <option value="HK">Hồng Kông</option>
                                                                <option value="IS">Iceland</option>
                                                                <option value="ID">Indonesia</option>
                                                                <option value="IR">Iran</option>
                                                                <option value="IQ">Iraq</option>
                                                                <option value="IE">Ireland</option>
                                                                <option value="IM">Isle of Man</option>
                                                                <option value="IL">Israel</option>
                                                                <option value="JM">Jamaica</option>
                                                                <option value="JE">Jersey</option>
                                                                <option value="JO">Jordan</option>
                                                                <option value="KZ">Kazakhstan</option>
                                                                <option value="KE">Kenya</option>
                                                                <option value="KI">Kiribati</option>
                                                                <option value="KW">Kuwait</option>
                                                                <option value="KG">Kyrgyzstan</option>
                                                                <option value="LV">Latvia</option>
                                                                <option value="LB">Lebanon</option>
                                                                <option value="LS">Lesotho</option>
                                                                <option value="LR">Liberia</option>
                                                                <option value="LY">Libya</option>
                                                                <option value="LI">Liechtenstein</option>
                                                                <option value="LT">Lithuania</option>
                                                                <option value="LU">Luxembourg</option>
                                                                <option value="LA">Lào</option>
                                                                <option value="TF">Lãnh thổ miền Nam nước Pháp</option>
                                                                <option value="IO">Lãnh thổ Ấn Độ Dương thuộc Anh
                                                                </option>
                                                                <option value="MK">Macedonia</option>
                                                                <option value="MG">Madagascar</option>
                                                                <option value="MW">Malawi</option>
                                                                <option value="MY">Malaysia</option>
                                                                <option value="MV">Maldives</option>
                                                                <option value="ML">Mali</option>
                                                                <option value="MT">Malta</option>
                                                                <option value="MQ">Martinique</option>
                                                                <option value="MR">Mauritania</option>
                                                                <option value="MU">Mauritius</option>
                                                                <option value="YT">Mayotte</option>
                                                                <option value="MX">Mexico</option>
                                                                <option value="FM">Micronesia</option>
                                                                <option value="MD">Moldova</option>
                                                                <option value="MC">Monaco</option>
                                                                <option value="ME">Montenegro</option>
                                                                <option value="MS">Montserrat</option>
                                                                <option value="MA">Morocco</option>
                                                                <option value="MZ">Mozambique</option>
                                                                <option value="MM">Myanmar</option>
                                                                <option value="MN">Mông Cổ</option>
                                                                <option value="US">Mỹ (US)</option>
                                                                <option value="NO">Na Uy</option>
                                                                <option value="GS">Nam Georgia và Quần đảo Nam Sandwich
                                                                </option>
                                                                <option value="ZA">Nam Phi</option>
                                                                <option value="SS">Nam Sudan</option>
                                                                <option value="NA">Namibia</option>
                                                                <option value="NR">Nauru</option>
                                                                <option value="NP">Nepal</option>
                                                                <option value="NC">New Caledonia</option>
                                                                <option value="NZ">New Zealand</option>
                                                                <option value="RU">Nga</option>
                                                                <option value="JP">Nhật Bản</option>
                                                                <option value="NI">Nicaragua</option>
                                                                <option value="NE">Niger</option>
                                                                <option value="NG">Nigeria</option>
                                                                <option value="NU">Niue</option>
                                                                <option value="NF">Norfolk Island</option>
                                                                <option value="OM">Oman</option>
                                                                <option value="PK">Pakistan</option>
                                                                <option value="PS">Palestinian Territory</option>
                                                                <option value="PA">Panama</option>
                                                                <option value="PG">Papua New Guinea</option>
                                                                <option value="PY">Paraguay</option>
                                                                <option value="PE">Peru</option>
                                                                <option value="PH">Philippines</option>
                                                                <option value="FR">Pháp</option>
                                                                <option value="FI">Phần Lan</option>
                                                                <option value="PL">Phần Lan</option>
                                                                <option value="PN">Pitcairn</option>
                                                                <option value="PF">Polynesia thuộc Pháp</option>
                                                                <option value="PR">Puerto Rico</option>
                                                                <option value="QA">Qatar</option>
                                                                <option value="AX">Quần đảo &#197;land</option>
                                                                <option value="VG">Quần đảo British Virgin</option>
                                                                <option value="MP">Quần đảo Bắc Mariana</option>
                                                                <option value="KY">Quần đảo Cayman</option>
                                                                <option value="CC">Quần đảo Cocos (Keeling)</option>
                                                                <option value="CK">Quần đảo Cook</option>
                                                                <option value="FK">Quần đảo Falkland</option>
                                                                <option value="FO">Quần đảo Faroe</option>
                                                                <option value="MH">Quần đảo Marshall</option>
                                                                <option value="SB">Quần đảo Solomon</option>
                                                                <option value="VI">Quần đảo Virgin của Hoa Kỳ (US)
                                                                </option>
                                                                <option value="RE">Reunion</option>
                                                                <option value="RO">Romania</option>
                                                                <option value="RW">Rwanda</option>
                                                                <option value="ST">S&atilde;o Tom&eacute; và
                                                                    Pr&iacute;ncipe</option>
                                                                <option value="BL">Saint Barth&eacute;lemy</option>
                                                                <option value="SH">Saint Helena</option>
                                                                <option value="KN">Saint Kitts và Nevis</option>
                                                                <option value="LC">Saint Lucia</option>
                                                                <option value="SX">Saint Martin (thuộc Hà Lan)</option>
                                                                <option value="PM">Saint Pierre và Miquelon</option>
                                                                <option value="VC">Saint Vincent và Grenadines</option>
                                                                <option value="MF">Saint-Martin (thuộc Pháp)</option>
                                                                <option value="SM">San Marino</option>
                                                                <option value="SN">Senegal</option>
                                                                <option value="RS">Serbia</option>
                                                                <option value="SC">Seychelles</option>
                                                                <option value="SL">Sierra Leone</option>
                                                                <option value="SG">Singapore</option>
                                                                <option value="SK">Slovakia</option>
                                                                <option value="SI">Slovenia</option>
                                                                <option value="SO">Somalia</option>
                                                                <option value="LK">Sri Lanka</option>
                                                                <option value="SD">Sudan</option>
                                                                <option value="SR">Suriname</option>
                                                                <option value="SJ">Svalbard và Jan Mayen</option>
                                                                <option value="SZ">Swaziland</option>
                                                                <option value="SY">Syria</option>
                                                                <option value="TJ">Tajikistan</option>
                                                                <option value="TZ">Tanzania</option>
                                                                <option value="TH">Thái Lan</option>
                                                                <option value="TR">Thổ Nhĩ Kỳ</option>
                                                                <option value="CH">Thụy Sĩ</option>
                                                                <option value="SE">Thụy Điển</option>
                                                                <option value="TG">Togo</option>
                                                                <option value="TK">Tokelau</option>
                                                                <option value="TO">Tonga</option>
                                                                <option value="TT">Trinidad và Tobago</option>
                                                                <option value="KP">Triều Tiên</option>
                                                                <option value="CN">Trung Quốc</option>
                                                                <option value="TN">Tunisia</option>
                                                                <option value="TM">Turkmenistan</option>
                                                                <option value="TC">Turks và quần đảo Caicos</option>
                                                                <option value="TV">Tuvalu</option>
                                                                <option value="ES">Tây Ban Nha</option>
                                                                <option value="UG">Uganda</option>
                                                                <option value="UA">Ukraine</option>
                                                                <option value="UY">Uruguay</option>
                                                                <option value="UZ">Uzbekistan</option>
                                                                <option value="VU">Vanuatu</option>
                                                                <option value="VA">Vatican</option>
                                                                <option value="VE">Venezuela</option>
                                                                <option value="VN" selected='selected'>Việt Nam
                                                                </option>
                                                                <option value="WF">Wallis và Futuna</option>
                                                                <option value="EH">Western Sahara</option>
                                                                <option value="YE">Yemen</option>
                                                                <option value="ZM">Zambia</option>
                                                                <option value="ZW">Zimbabwe</option>
                                                                <option value="AT">Áo</option>
                                                                <option value="AU">Úc</option>
                                                                <option value="IT">Ý</option>
                                                                <option value="DK">Đan Mạch</option>
                                                                <option value="TW">Đài Loan</option>
                                                                <option value="TL">Đông Timo</option>
                                                                <option value="BV">Đảo Bouvet</option>
                                                                <option value="HM">Đảo Heard và quần đảo McDonald
                                                                </option>
                                                                <option value="WS">Đảo Samoa</option>
                                                                <option value="MO">Đặc khu Ma Cao, Trung Quốc</option>
                                                                <option value="DE">Đức</option>
                                                                <option value="SA">Ả Rập Saudi</option>
                                                                <option value="IN">Ấn Độ</option>
                                                            </select><noscript><button type="submit"
                                                                    name="woocommerce_checkout_update_totals"
                                                                    value="Cập nhật quốc gia">Cập nhật quốc
                                                                    gia</button></noscript></p>
                                                        <p class="form-row address-field form-row-first validate-required"
                                                            id="billing_address_1_field" data-priority="50"><label
                                                                for="billing_address_1" class="">Địa chỉ <abbr
                                                                    class="required"
                                                                    title="bắt buộc">*</abbr></label><input type="text"
                                                                class="input-text " name="billing_address_1"
                                                                id="billing_address_1" placeholder="Địa chỉ"
                                                                value="" autocomplete="address-line1" /></p>
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
                                                        <p class="form-row form-row-wide address-field validate-postcode"
                                                            id="billing_postcode_field" data-priority="65"><label
                                                                for="billing_postcode" class="">Mã bưu
                                                                điện</label><input type="text" class="input-text "
                                                                name="billing_postcode" id="billing_postcode"
                                                                placeholder="" value=""
                                                                autocomplete="postal-code" /></p>
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
                                                                    for="shipping_first_name" class="">Họ <abbr
                                                                        class="required"
                                                                        title="bắt buộc">*</abbr></label><input
                                                                    type="text" class="input-text "
                                                                    name="shipping_first_name" id="shipping_first_name"
                                                                    placeholder="" value=""
                                                                    autocomplete="given-name" /></p>
                                                            <p class="form-row form-row-last validate-required"
                                                                id="shipping_last_name_field" data-priority="20"><label
                                                                    for="shipping_last_name" class="">Tên <abbr
                                                                        class="required"
                                                                        title="bắt buộc">*</abbr></label><input
                                                                    type="text" class="input-text "
                                                                    name="shipping_last_name" id="shipping_last_name"
                                                                    placeholder="" value=""
                                                                    autocomplete="family-name" /></p>
                                                            <p class="form-row form-row-wide" id="shipping_company_field"
                                                                data-priority="30"><label for="shipping_company"
                                                                    class="">Tên công ty</label><input
                                                                    type="text" class="input-text "
                                                                    name="shipping_company" id="shipping_company"
                                                                    placeholder="" value=""
                                                                    autocomplete="organization" /></p>
                                                            <p class="form-row form-row-wide address-field update_totals_on_change validate-required"
                                                                id="shipping_country_field" data-priority="40"><label
                                                                    for="shipping_country" class="">Quốc gia <abbr
                                                                        class="required"
                                                                        title="bắt buộc">*</abbr></label><select
                                                                    name="shipping_country" id="shipping_country"
                                                                    class="country_to_state country_select "
                                                                    autocomplete="country">
                                                                    <option value="">Chọn quốc gia&hellip;</option>
                                                                    <option value="AF">Afghanistan</option>
                                                                    <option value="EG">Ai Cập</option>
                                                                    <option value="AL">Albania</option>
                                                                    <option value="DZ">Algeria</option>
                                                                    <option value="AS">American Samoa</option>
                                                                    <option value="AD">Andorra</option>
                                                                    <option value="AO">Angola</option>
                                                                    <option value="AI">Anguilla</option>
                                                                    <option value="GB">Anh (UK)</option>
                                                                    <option value="AQ">Antarctica</option>
                                                                    <option value="AG">Antigua và Barbuda</option>
                                                                    <option value="AR">Argentina</option>
                                                                    <option value="AM">Armenia</option>
                                                                    <option value="AW">Aruba</option>
                                                                    <option value="AZ">Azerbaijan</option>
                                                                    <option value="BS">Bahamas</option>
                                                                    <option value="BH">Bahrain</option>
                                                                    <option value="BD">Bangladesh</option>
                                                                    <option value="BB">Barbados</option>
                                                                    <option value="BY">Belarus</option>
                                                                    <option value="PW">Belau</option>
                                                                    <option value="BZ">Belize</option>
                                                                    <option value="BJ">Benin</option>
                                                                    <option value="BM">Bermuda</option>
                                                                    <option value="BT">Bhutan</option>
                                                                    <option value="BO">Bolivia</option>
                                                                    <option value="BQ">Bonaire, Saint Eustatius và Saba
                                                                    </option>
                                                                    <option value="BA">Bosnia và Herzegovina</option>
                                                                    <option value="BW">Botswana</option>
                                                                    <option value="BR">Brazil</option>
                                                                    <option value="BN">Brunei</option>
                                                                    <option value="BG">Bulgaria</option>
                                                                    <option value="BF">Burkina Faso</option>
                                                                    <option value="BI">Burundi</option>
                                                                    <option value="BE">Bỉ</option>
                                                                    <option value="PT">Bồ Đào Nha</option>
                                                                    <option value="CI">Bờ biển Ngà</option>
                                                                    <option value="CM">Cameroon</option>
                                                                    <option value="KH">Campuchia</option>
                                                                    <option value="CA">Canada</option>
                                                                    <option value="CV">Cape Verde</option>
                                                                    <option value="TD">Chad</option>
                                                                    <option value="CL">Chile</option>
                                                                    <option value="CX">Christmas Island</option>
                                                                    <option value="CO">Colombia</option>
                                                                    <option value="KM">Comoros</option>
                                                                    <option value="CG">Congo (Brazzaville)</option>
                                                                    <option value="CD">Congo (Kinshasa)</option>
                                                                    <option value="CR">Costa Rica</option>
                                                                    <option value="HR">Croatia</option>
                                                                    <option value="CU">Cuba</option>
                                                                    <option value="CW">Cura&Ccedil;ao</option>
                                                                    <option value="CY">Cyprus</option>
                                                                    <option value="UM">Các Tiểu đảo xa của Hoa Kỳ (US)
                                                                    </option>
                                                                    <option value="AE">Các tiểu vương quốc Ả Rập
                                                                    </option>
                                                                    <option value="DO">Cộng hòa Dominica</option>
                                                                    <option value="CZ">Cộng hòa Séc</option>
                                                                    <option value="CF">Cộng hòa Trung Phi</option>
                                                                    <option value="DJ">Djibouti</option>
                                                                    <option value="DM">Dominica</option>
                                                                    <option value="EC">Ecuador</option>
                                                                    <option value="SV">El Salvador</option>
                                                                    <option value="ER">Eritrea</option>
                                                                    <option value="EE">Estonia</option>
                                                                    <option value="ET">Ethiopia</option>
                                                                    <option value="FJ">Fiji</option>
                                                                    <option value="GA">Gabon</option>
                                                                    <option value="GM">Gambia</option>
                                                                    <option value="GE">Georgia</option>
                                                                    <option value="GH">Ghana</option>
                                                                    <option value="GI">Gibraltar</option>
                                                                    <option value="GL">Greenland</option>
                                                                    <option value="GD">Grenada</option>
                                                                    <option value="GP">Guadeloupe</option>
                                                                    <option value="GU">Guam</option>
                                                                    <option value="GT">Guatemala</option>
                                                                    <option value="GG">Guernsey</option>
                                                                    <option value="GN">Guinea</option>
                                                                    <option value="GQ">Guinea Xích đạo</option>
                                                                    <option value="GW">Guinea-Bissau</option>
                                                                    <option value="GY">Guyana</option>
                                                                    <option value="GF">Guyane thuộc Pháp</option>
                                                                    <option value="HT">Haiti</option>
                                                                    <option value="HN">Honduras</option>
                                                                    <option value="HU">Hungary</option>
                                                                    <option value="GR">Hy Lạp</option>
                                                                    <option value="NL">Hà Lan</option>
                                                                    <option value="KR">Hàn Quốc</option>
                                                                    <option value="HK">Hồng Kông</option>
                                                                    <option value="IS">Iceland</option>
                                                                    <option value="ID">Indonesia</option>
                                                                    <option value="IR">Iran</option>
                                                                    <option value="IQ">Iraq</option>
                                                                    <option value="IE">Ireland</option>
                                                                    <option value="IM">Isle of Man</option>
                                                                    <option value="IL">Israel</option>
                                                                    <option value="JM">Jamaica</option>
                                                                    <option value="JE">Jersey</option>
                                                                    <option value="JO">Jordan</option>
                                                                    <option value="KZ">Kazakhstan</option>
                                                                    <option value="KE">Kenya</option>
                                                                    <option value="KI">Kiribati</option>
                                                                    <option value="KW">Kuwait</option>
                                                                    <option value="KG">Kyrgyzstan</option>
                                                                    <option value="LV">Latvia</option>
                                                                    <option value="LB">Lebanon</option>
                                                                    <option value="LS">Lesotho</option>
                                                                    <option value="LR">Liberia</option>
                                                                    <option value="LY">Libya</option>
                                                                    <option value="LI">Liechtenstein</option>
                                                                    <option value="LT">Lithuania</option>
                                                                    <option value="LU">Luxembourg</option>
                                                                    <option value="LA">Lào</option>
                                                                    <option value="TF">Lãnh thổ miền Nam nước Pháp
                                                                    </option>
                                                                    <option value="IO">Lãnh thổ Ấn Độ Dương thuộc Anh
                                                                    </option>
                                                                    <option value="MK">Macedonia</option>
                                                                    <option value="MG">Madagascar</option>
                                                                    <option value="MW">Malawi</option>
                                                                    <option value="MY">Malaysia</option>
                                                                    <option value="MV">Maldives</option>
                                                                    <option value="ML">Mali</option>
                                                                    <option value="MT">Malta</option>
                                                                    <option value="MQ">Martinique</option>
                                                                    <option value="MR">Mauritania</option>
                                                                    <option value="MU">Mauritius</option>
                                                                    <option value="YT">Mayotte</option>
                                                                    <option value="MX">Mexico</option>
                                                                    <option value="FM">Micronesia</option>
                                                                    <option value="MD">Moldova</option>
                                                                    <option value="MC">Monaco</option>
                                                                    <option value="ME">Montenegro</option>
                                                                    <option value="MS">Montserrat</option>
                                                                    <option value="MA">Morocco</option>
                                                                    <option value="MZ">Mozambique</option>
                                                                    <option value="MM">Myanmar</option>
                                                                    <option value="MN">Mông Cổ</option>
                                                                    <option value="US">Mỹ (US)</option>
                                                                    <option value="NO">Na Uy</option>
                                                                    <option value="GS">Nam Georgia và Quần đảo Nam
                                                                        Sandwich</option>
                                                                    <option value="ZA">Nam Phi</option>
                                                                    <option value="SS">Nam Sudan</option>
                                                                    <option value="NA">Namibia</option>
                                                                    <option value="NR">Nauru</option>
                                                                    <option value="NP">Nepal</option>
                                                                    <option value="NC">New Caledonia</option>
                                                                    <option value="NZ">New Zealand</option>
                                                                    <option value="RU">Nga</option>
                                                                    <option value="JP">Nhật Bản</option>
                                                                    <option value="NI">Nicaragua</option>
                                                                    <option value="NE">Niger</option>
                                                                    <option value="NG">Nigeria</option>
                                                                    <option value="NU">Niue</option>
                                                                    <option value="NF">Norfolk Island</option>
                                                                    <option value="OM">Oman</option>
                                                                    <option value="PK">Pakistan</option>
                                                                    <option value="PS">Palestinian Territory</option>
                                                                    <option value="PA">Panama</option>
                                                                    <option value="PG">Papua New Guinea</option>
                                                                    <option value="PY">Paraguay</option>
                                                                    <option value="PE">Peru</option>
                                                                    <option value="PH">Philippines</option>
                                                                    <option value="FR">Pháp</option>
                                                                    <option value="FI">Phần Lan</option>
                                                                    <option value="PL">Phần Lan</option>
                                                                    <option value="PN">Pitcairn</option>
                                                                    <option value="PF">Polynesia thuộc Pháp</option>
                                                                    <option value="PR">Puerto Rico</option>
                                                                    <option value="QA">Qatar</option>
                                                                    <option value="AX">Quần đảo &#197;land</option>
                                                                    <option value="VG">Quần đảo British Virgin</option>
                                                                    <option value="MP">Quần đảo Bắc Mariana</option>
                                                                    <option value="KY">Quần đảo Cayman</option>
                                                                    <option value="CC">Quần đảo Cocos (Keeling)
                                                                    </option>
                                                                    <option value="CK">Quần đảo Cook</option>
                                                                    <option value="FK">Quần đảo Falkland</option>
                                                                    <option value="FO">Quần đảo Faroe</option>
                                                                    <option value="MH">Quần đảo Marshall</option>
                                                                    <option value="SB">Quần đảo Solomon</option>
                                                                    <option value="VI">Quần đảo Virgin của Hoa Kỳ (US)
                                                                    </option>
                                                                    <option value="RE">Reunion</option>
                                                                    <option value="RO">Romania</option>
                                                                    <option value="RW">Rwanda</option>
                                                                    <option value="ST">S&atilde;o Tom&eacute; và
                                                                        Pr&iacute;ncipe</option>
                                                                    <option value="BL">Saint Barth&eacute;lemy</option>
                                                                    <option value="SH">Saint Helena</option>
                                                                    <option value="KN">Saint Kitts và Nevis</option>
                                                                    <option value="LC">Saint Lucia</option>
                                                                    <option value="SX">Saint Martin (thuộc Hà Lan)
                                                                    </option>
                                                                    <option value="PM">Saint Pierre và Miquelon
                                                                    </option>
                                                                    <option value="VC">Saint Vincent và Grenadines
                                                                    </option>
                                                                    <option value="MF">Saint-Martin (thuộc Pháp)
                                                                    </option>
                                                                    <option value="SM">San Marino</option>
                                                                    <option value="SN">Senegal</option>
                                                                    <option value="RS">Serbia</option>
                                                                    <option value="SC">Seychelles</option>
                                                                    <option value="SL">Sierra Leone</option>
                                                                    <option value="SG">Singapore</option>
                                                                    <option value="SK">Slovakia</option>
                                                                    <option value="SI">Slovenia</option>
                                                                    <option value="SO">Somalia</option>
                                                                    <option value="LK">Sri Lanka</option>
                                                                    <option value="SD">Sudan</option>
                                                                    <option value="SR">Suriname</option>
                                                                    <option value="SJ">Svalbard và Jan Mayen</option>
                                                                    <option value="SZ">Swaziland</option>
                                                                    <option value="SY">Syria</option>
                                                                    <option value="TJ">Tajikistan</option>
                                                                    <option value="TZ">Tanzania</option>
                                                                    <option value="TH">Thái Lan</option>
                                                                    <option value="TR">Thổ Nhĩ Kỳ</option>
                                                                    <option value="CH">Thụy Sĩ</option>
                                                                    <option value="SE">Thụy Điển</option>
                                                                    <option value="TG">Togo</option>
                                                                    <option value="TK">Tokelau</option>
                                                                    <option value="TO">Tonga</option>
                                                                    <option value="TT">Trinidad và Tobago</option>
                                                                    <option value="KP">Triều Tiên</option>
                                                                    <option value="CN">Trung Quốc</option>
                                                                    <option value="TN">Tunisia</option>
                                                                    <option value="TM">Turkmenistan</option>
                                                                    <option value="TC">Turks và quần đảo Caicos
                                                                    </option>
                                                                    <option value="TV">Tuvalu</option>
                                                                    <option value="ES">Tây Ban Nha</option>
                                                                    <option value="UG">Uganda</option>
                                                                    <option value="UA">Ukraine</option>
                                                                    <option value="UY">Uruguay</option>
                                                                    <option value="UZ">Uzbekistan</option>
                                                                    <option value="VU">Vanuatu</option>
                                                                    <option value="VA">Vatican</option>
                                                                    <option value="VE">Venezuela</option>
                                                                    <option value="VN" selected='selected'>Việt Nam
                                                                    </option>
                                                                    <option value="WF">Wallis và Futuna</option>
                                                                    <option value="EH">Western Sahara</option>
                                                                    <option value="YE">Yemen</option>
                                                                    <option value="ZM">Zambia</option>
                                                                    <option value="ZW">Zimbabwe</option>
                                                                    <option value="AT">Áo</option>
                                                                    <option value="AU">Úc</option>
                                                                    <option value="IT">Ý</option>
                                                                    <option value="DK">Đan Mạch</option>
                                                                    <option value="TW">Đài Loan</option>
                                                                    <option value="TL">Đông Timo</option>
                                                                    <option value="BV">Đảo Bouvet</option>
                                                                    <option value="HM">Đảo Heard và quần đảo McDonald
                                                                    </option>
                                                                    <option value="WS">Đảo Samoa</option>
                                                                    <option value="MO">Đặc khu Ma Cao, Trung Quốc
                                                                    </option>
                                                                    <option value="DE">Đức</option>
                                                                    <option value="SA">Ả Rập Saudi</option>
                                                                    <option value="IN">Ấn Độ</option>
                                                                </select><noscript><button type="submit"
                                                                        name="woocommerce_checkout_update_totals"
                                                                        value="Cập nhật quốc gia">Cập nhật quốc
                                                                        gia</button></noscript></p>
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
                                                            <p class="form-row form-row-wide address-field validate-postcode"
                                                                id="shipping_postcode_field" data-priority="65"><label
                                                                    for="shipping_postcode" class="">Mã bưu
                                                                    điện</label><input type="text" class="input-text "
                                                                    name="shipping_postcode" id="shipping_postcode"
                                                                    placeholder="" value=""
                                                                    autocomplete="postal-code" /></p>
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
                                                            <tr class="cart_item">
                                                                <td class="product-name">Ghế sofa SF31&nbsp<strong
                                                                        class="product-quantity">&times; </strong>
                                                                </td>
                                                                <td class="product-total">
                                                                    <span
                                                                        class="woocommerce-Price-amount amount">6,112,000&nbsp;
                                                                        <span
                                                                            class="woocommerce-Price-currencySymbol">&#8363;</span>
                                                                    </span>
                                                                </td>
                                                            </tr>

                                                        </tbody>
                                                        <tfoot>

                                                            <tr class="cart-subtotal">
                                                                <th>Tổng cộng</th>
                                                                <td>
                                                                    <span
                                                                        class="woocommerce-Price-amount amount">873,937,500&nbsp;
                                                                        <span
                                                                            class="woocommerce-Price-currencySymbol">&#8363;</span>
                                                                    </span>
                                                                </td>
                                                            </tr>
                                                            <tr class="shipping">
                                                                <th>Giao hàng 1</th>
                                                                <td data-title="Giao hàng 1"> Giao hàng miễn phí <input
                                                                        type="hidden" name="shipping_method[0]"
                                                                        data-index="0"id="shipping_method_0"
                                                                        value="free_shipping:1" class="shipping_method" />
                                                                </td>
                                                            </tr>
                                                            <tr class="order-total">
                                                                <th>Tổng cộng</th>
                                                                <td><strong><span
                                                                            class="woocommerce-Price-amount amount">873,937,500&nbsp;<span
                                                                                class="woocommerce-Price-currencySymbol">&#8363;</span></span></strong>
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
                                                                value="5984831849" /><input type="hidden"
                                                                name="_wp_http_referer"
                                                                value="/noithatbanghe/thanh-toan/" />
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
