<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12 shipping_form" style="background-color: white">
        <h3 style="margin-top: 10px">Shipping Infomation</h3>
        <div class="row s_f_conten" style="z-index: 999">
            <form>
                <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                <div class="col-md-6 col-lg-6 col-sm-6">
                    <p class="control-label p-style" for="email">Email</p>
                    <div class="form-group" id="mail-error">
                        <input type="email" class="form-control form_custom" onkeyup="emailonkeyup()" name="email" id="email-c" placeholder="Enter email "/>
                        <span class="text-danger error-email"></span>
                    </div>
                    <p class="control-label p-style" for="name">Full Name</p>
                    <div class="form-group" id="name-error">
                        <input type="text" class="form-control form_custom" name="name" id="name-c" placeholder="Enter full name "/>
                        <span class="text-danger name-error"></span>
                    </div>
                    <p class="control-label p-style" for="phone">Phone number</p>
                    <div class="form-group" id="phone-error">
                        <input type="text" class="form-control form_custom" name="phone" id="phone" placeholder="Enter phone number"/>
                        <span class="text-danger phone-error"></span>
                    </div>
                    <p class="control-label p-style" for="code">Tax code</p>
                    <div class="form-group">
                        <input type="text" class="form-control form_custom" name="Taxcode" id="Taxcode"  placeholder="Enter tax code"/>
                        <span class="text-danger"></span>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-md-6">
                    <p class="control-label p-style" for="receipt">Goods receipt (house number, street)</p>
                    <div class="form-group" id="homeNum-error">
                        <input type="text" class="form-control form_custom" id="address" name="homeNum" placeholder="Enter address"></textarea>
                        <span class="text-danger homeNum-error"></span>
                    </div>
                    <p class="control-label p-style" for="city">Province/City</p>
                    <div class="form-group city" id="city-error">
                        <select name="city" id="city" class="form-control form_custom" onchange="ctychange(this)">
                            <option value="">-- Choose City --</option>
                            <option value="An Giang">An Giang</option>
                            <option value="Bà Rịa - Vũng Tàu">Bà Rịa - Vũng Tàu</option>
                            <option value="Hà Giang">Hà Giang</option>
                            <option value="Bạc Liêu">Bạc Liêu</option>
                            <option value="Bắc Ninh">Bắc Ninh</option>
                            <option value="Bến Tre">Bến Tre</option>
                            <option value="Bình Định">Bình Định</option>
                            <option value="Bình Phước">Bình Phước</option>
                            <option value="Bình Thuận">Bình Thuận</option>
                            <option value="Cao Bằng">Cao Bằng</option>
                            <option value="Đắk Lắk">Đắk Lắk</option>
                            <option value="Đắk Nông">Đắk Nông</option>
                            <option value="Điện Biên">Điện Biên</option>
                            <option value="Đồng Nai">Đồng Nai</option>
                            <option value="Đồng Tháp">Đồng Tháp</option>
                            <option value="Quảng Bình">Quảng Bình</option>
                            <option value="Quảng Nam">Quảng Nam</option>
                            <option value="Đà Nẵng">Đà Nẵng</option>
                            <option value="Huế">Huế</option>
                            <option value="TP Hồ Chí Minh">TP Hồ Chí Minh</option>
                            <option value="Sài Gòn">Sài Gòn</option>
                            <option value="Hà Nội">Hà Nội</option>
                        </select>
                        <span class="text-danger city-error"></span>
                    </div>
                    <p class="control-label p-style" for="district">District</p>
                    <div class="form-group district" id="district-error">  
                        <select name="district" id="district" class="form-control form_custom" onchange="districtchange(this)">
                            <option value="">-- Choose District --</option>
                            <option value="Quận 1">Quận 1</option>
                            <option value="Quận 2">Quận 2</option>
                            <option value="Quận 2">Quận 3</option>
                            <option value="Quận 4">Quận 4</option>
                            <option value="Quận 5">Quận 5</option>
                            <option value="Quận 6">Quận 6</option>
                            <option value="Quận 7">Quận 7</option>
                            <option value="Quận 8">Quận 8</option>
                            <option value="Quận 9">Quận 9</option>
                        </select>
                        <span class="text-danger district-error"></span>
                    </div>
                    <p class="control-label p-style" for="town">Town</p>
                    <div class="form-group town" id="town-error">
                        <select name="town" id="town" class="form-control form_custom" onchange="townchange(this)" >
                            <option value="">-- Choose Town --</option>
                            <option value="phường 1">phường 1</option>
                            <option value="phường 2">phường 2</option>
                            <option value="phường 3">phường 3</option>
                            <option value="phường 4">phường 4</option>
                            <option value="phường 5">phường 5</option>
                            <option value="phường 6">phường 6</option>
                            <option value="phường 7">phường 7</option>
                            <option value="phường 8">phường 8</option>
                            <option value="phường 9">phường 9</option>
                        </select>
                        <span class="text-danger town-error"></span>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-6" style="padding-left: 5%;">
                        <label class="control-label">Infomation shipping</label>
                        <div class="radio">
                            <label><input checked='checked' type="radio" class="ship" name="ship">Shipping: Free<br>Delivery is from Friday, 3 - Friday, 10 November 2017</label>
                        </div>
                        <input onclick="save()" type="button" style="border: 0px;margin-left: 0px;width: 100%;height: 50px;margin-bottom: 15px; background-color: #2fdab8" value="Save">
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <label class="control-label"></label>
                        <div class="radio">
                            <label><input type="radio" class="ship" name="ship">Standard Delivery: Free<br>Delivery is from Wednesday, 1 - Monday, 6 November 2017</label>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div> 
            </form>
        </div>
    </div>
</div>