<div class="row">
    <div class="col-sm-2 col-md-2 col-lg-2"></div>
    <div class="col-sm-8 col-md-8 col-lg-8 shipping_form">
        @if ($errors->any())
        <div class="row">
            <div class="alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li style="position: relative; lSSSeft: 50px">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6">
            </div>
        </div>
        @endif
        <div class="s_f_title">
            <h4>Shipping address</h4>
        </div>
        <div class="row s_f_conten" style="z-index: 999">
            <form action="{{ url('/customer') }}" method="POST" class="form-horizontal">
                <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                        <label class="control-label col-sm-5" for="email">Email</label>
                        <div class="col-sm-7">
                            <input type="email" class="form-control" name="email" value="{{$customer['email']}}" id="email" placeholder="Enter email "/>
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                        <label class="control-label col-sm-5" for="name">Full Name</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="name" id="name"  value="{{ $customer['name']}}" placeholder="Enter full name "/>
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('city') ? 'has-error' : '' }}">
                        <label class="control-label col-sm-5" for="city">Province/City</label>
                        <div class="col-sm-7">
                            <select name="city" class="form-control" value="{{ $customer['city'] }}">
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
                                <option value="">Đắk Lắk</option>
                                <option value="">Đắk Nông</option>
                                <option value="">Điện Biên</option>
                                <option value="">Đồng Nai</option>
                                <option value="">Đồng Tháp</option>
                                <option value="">Quảng Bình</option>
                                <option value="">Quảng Nam</option>
                                <option value="">Đà Nẵng</option>
                                <option value="">Huế</option>
                                <option value="">TP Hồ Chí Minh</option>
                                <option value="">Sài Gòn</option>
                                <option value="">Hà Nội</option>
                            </select>
                            <span class="text-danger">{{ $errors->first('city') }}</span>
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('district') ? 'has-error' : '' }}">  
                        <label class="control-label col-sm-5" for="district">District</label>
                        <div class="col-sm-7">
                            <select name="district" class="form-control" value="{{ $customer['district'] }}">
                                <option value="Quận 1">Quận 1</option>
                                <option value="">Quận 2</option>
                                <option value="">Quận 3</option>
                                <option value="">Quận 4</option>
                                <option value="">Quận 5</option>
                                <option value="">Quận 6</option>
                                <option value="">Quận 7</option>
                                <option value="">Quận 8</option>
                                <option value="">Quận 9</option>
                            </select>
                            <span class="text-danger">{{ $errors->first('district') }}</span>
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('town') ? 'has-error' : '' }}">
                        <label class="control-label col-sm-5" for="town">Town</label>
                        <div class="col-sm-7">
                            <select name="town" class="form-control" value="{{ $customer['town'] }}">
                                <option value="phường 1">phường 1</option>
                                <option value="">phường 2</option>
                                <option value="">phường 3</option>
                                <option value="">phường 4</option>
                                <option value="">phường 5</option>
                                <option value="">phường 6</option>
                                <option value="">phường 7</option>
                                <option value="">phường 8</option>
                                <option value="">phường 9</option>
                            </select>
                            <span class="text-danger">{{ $errors->first('town') }}</span>
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('homeNum') ? 'has-error' : '' }}">
                        <label class="control-label col-sm-5" for="receipt">Goods receipt (floor, house number, street)</label>
                        <div class="col-sm-7">
                            <textarea class="form-control" rows="4" id="address" name="homeNum" placeholder="Enter address">{{ $customer['homeNum'] }}</textarea>
                            <span class="text-danger">{{ $errors->first('homeNum') }}</span>
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
                        <label class="control-label col-sm-5" for="phone">Phone number</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="phone" id="phone" value="{{ $customer['phone'] }}" placeholder="Enter phone number"/>
                            <span class="text-danger">{{ $errors->first('phone') }}</span>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-sm-10 col-md-10 col-lg-10" style="padding-left: 5%;">
                        <label class="control-label">Infomation shipping</label>
                        <div class="radio">
                            <label><input checked='checked' type="radio" name="ship">Shipping: Free<br>Delivery is from Friday, 3 - Friday, 10 November 2017</label>
                            <label><input type="radio" name="ship">Standard Delivery: Free<br>Delivery is from Wednesday, 1 - Monday, 6 November 2017</label>
                            <input class="btn-danger" style="border: 0px;margin-left: 15px;width: 95%;height: 50px;margin-bottom: 15px"  type="submit" value="Save"/>
                        </div>
                    </div>
                    <div class="col-sm-2 col-md-2 col-lg-2">
                    </div>
                </div> 
            </form>
        </div>
    </div>
    <div class="col-sm-2 col-md-2 col-lg-2"></div>
</div>