<div class="card py-3 m-b-30">
<div class="card-body">
@include('admin.language.header',['langs' => $langs])
</div>
</div>
<div class="tab-content" id="myTabContent1">
@php($i = 0)
@foreach($langs as $l)
@php($i++)

<div class="tab-pane fade show @if($l['id'] == 0) active @endif" id="lang{{ $l['id'] }}" role="tabpanel" aria-labelledby="lang{{$l['id'] }}-tab">

<input type="hidden" name="lid[]" value="{{ $l['id'] }}">

<h4>Trang chào mừng</h4>

<div class="card py-3 m-b-30">
<div class="card-body">

<div class="form-row">
<div class="form-group col-md-4">
<label for="inputEmail6">Nút bỏ qua</label>
<input type="text" name="skip_button[]" class="form-control" value="{{ $data->getSData($l['id'],'skip_button') }}">
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Vào ứng dụng</label>
<input type="text" name="enter_button[]" class="form-control" value="{{ $data->getSData($l['id'],'enter_button') }}">
</div>
</div>

</div>
</div>

<!--start-->
<h4>Trang chọn thành phố</h4>

<div class="card py-3 m-b-30">
<div class="card-body">

<div class="form-row">
<div class="form-group col-md-4">
<label for="inputEmail6">Tiêu đề</label>
<input type="text" name="city_title[]" class="form-control" value="{{ $data->getSData($l['id'],'city_title') }}">
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Tìm kiếm</label>
<input type="text" name="city_search[]" class="form-control" value="{{ $data->getSData($l['id'],'city_search') }}">
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Phần mở đầu</label>
<input type="text" name="city_heading[]" class="form-control" value="{{ $data->getSData($l['id'],'city_heading') }}">
</div>
</div>

<div class="form-row">
<div class="form-group col-md-4">
<label for="inputEmail6">Nút bên dưới</label>
<input type="text" name="city_button[]" class="form-control" value="{{ $data->getSData($l['id'],'city_button') }}">
</div>
</div>

</div>
</div>
<!--End-->

<!--start-->
<h4>Trang chủ</h4>

<div class="card py-3 m-b-30">
<div class="card-body">

<div class="form-row">
<div class="form-group col-md-4">
<label for="inputEmail6">Tìm kiếm</label>
<input type="text" name="home_search[]" class="form-control" value="{{ $data->getSData($l['id'],'home_search') }}">
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Tiêu đề Lọc theo khuyến mãi</label>
<input type="text" name="home_offer[]" class="form-control" value="{{ $data->getSData($l['id'],'home_offer') }}">
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Lọc theo giao hàng nhanh</label>
<input type="text" name="home_fast_delivery[]" class="form-control" value="{{ $data->getSData($l['id'],'home_fast_delivery') }}">
</div>
</div>

<div class="form-row">
<div class="form-group col-md-4">
<label for="inputEmail6">Lọc theo xu hướng</label>
<input type="text" name="home_trending[]" class="form-control" value="{{ $data->getSData($l['id'],'home_trending') }}">
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Lọc theo hàng mới</label>
<input type="text" name="home_new_arrival[]" class="form-control" value="{{ $data->getSData($l['id'],'home_new_arrival') }}">
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Lọc theo đánh giá</label>
<input type="text" name="home_by_rating[]" class="form-control" value="{{ $data->getSData($l['id'],'home_by_rating') }}">
</div>
</div>

<div class="form-row">
<div class="form-group col-md-4">
<label for="inputEmail6">Mã giảm giá</label>
<input type="text" name="home_coupon[]" class="form-control" value="{{ $data->getSData($l['id'],'home_coupon') }}">
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Chi phí cho mỗi người</label>
<input type="text" name="home_per_person[]" class="form-control" value="{{ $data->getSData($l['id'],'home_per_person') }}">
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Thẻ trang chủ</label>
<input type="text" name="home_footer_name[]" class="form-control" value="{{ $data->getSData($l['id'],'home_footer_name') }}">
</div>
</div>

<div class="form-row">
<div class="form-group col-md-4">
<label for="inputEmail6">Thẻ Gần đây</label>
<input type="text" name="home_nearest[]" class="form-control" value="{{ $data->getSData($l['id'],'home_nearest') }}">
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Thẻ Giỏ hàng</label>
<input type="text" name="home_cart[]" class="form-control" value="{{ $data->getSData($l['id'],'home_cart') }}">
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Thẻ Thông tin cá nhân</label>
<input type="text" name="home_profile[]" class="form-control" value="{{ $data->getSData($l['id'],'home_profile') }}">
</div>
</div>

</div>
</div>
<!--End-->

<!--start-->
<h4>Danh mục bên</h4>

<div class="card py-3 m-b-30">
<div class="card-body">

<div class="form-row">
<div class="form-group col-md-4">
<label for="inputEmail6">Tiêu đề</label>
<input type="text" name="menu_title[]" class="form-control" value="{{ $data->getSData($l['id'],'menu_title') }}">
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Tiêu đề trang</label>
<input type="text" name="menu_page_title[]" class="form-control" value="{{ $data->getSData($l['id'],'menu_page_title') }}">
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Phiên bản ứng dụng</label>
<input type="text" name="menu_footer[]" class="form-control" value="{{ $data->getSData($l['id'],'menu_footer') }}">
</div>
</div>

</div>
</div>
<!--End-->

<!--start-->
<h4>Trang sản phẩm</h4>

<div class="card py-3 m-b-30">
<div class="card-body">

<div class="form-row">
<div class="form-group col-md-4">
<label for="inputEmail6">Xem thông tin</label>
<input type="text" name="item_view_info[]" class="form-control" value="{{ $data->getSData($l['id'],'item_view_info') }}">
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Chỉ ăn Chay</label>
<input type="text" name="item_veg_only[]" class="form-control" value="{{ $data->getSData($l['id'],'item_veg_only') }}">
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Nút Thêm vào giỏ hàng</label>
<input type="text" name="item_add_button[]" class="form-control" value="{{ $data->getSData($l['id'],'item_add_button') }}">
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Tiêu đề trang Mua thêm</label>
<input type="text" name="item_addon_title[]" class="form-control" value="{{ $data->getSData($l['id'],'item_addon_title') }}">
</div>
</div>

<div class="form-row">
<div class="form-group col-md-4">
<label for="inputEmail6">Tiêu đề Chọn kích thước</label>
<input type="text" name="item_size_heading[]" class="form-control" value="{{ $data->getSData($l['id'],'item_size_heading') }}">
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Bán lẻ</label>
<input type="text" name="item_small[]" class="form-control" value="{{ $data->getSData($l['id'],'item_small') }}">
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Bình thường</label>
<input type="text" name="item_m[]" class="form-control" value="{{ $data->getSData($l['id'],'item_m') }}">
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Bán sỉ</label>
<input type="text" name="item_large[]" class="form-control" value="{{ $data->getSData($l['id'],'item_large') }}">
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Thêm Mua thêm</label>
<input type="text" name="addon_add_title[]" class="form-control" value="{{ $data->getSData($l['id'],'addon_add_title') }}">
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Tiêu đề Mua thêm</label>
<input type="text" name="item_addon_heading[]" class="form-control" value="{{ $data->getSData($l['id'],'item_addon_heading') }}">
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Nút Mua thêm</label>
<input type="text" name="item_addon_button[]" class="form-control" value="{{ $data->getSData($l['id'],'item_addon_button') }}">
</div>
</div>

</div>
</div>
<!--End-->

<!--start-->
<h4>Trang thông tin</h4>

<div class="card py-3 m-b-30">
<div class="card-body">

<div class="form-row">
<div class="form-group col-md-4">
<label for="inputEmail6">Tiêu đề</label>
<input type="text" name="info_title[]" class="form-control" value="{{ $data->getSData($l['id'],'info_title') }}">
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Tiêu đề Đánh giá & Nhận xét</label>
<input type="text" name="info_rating_title[]" class="form-control" value="{{ $data->getSData($l['id'],'info_rating_title') }}">
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Giờ mở cửa</label>
<input type="text" name="info_open[]" class="form-control" value="{{ $data->getSData($l['id'],'info_open') }}">
</div>
</div>

<div class="form-row">
<div class="form-group col-md-4">
<label for="inputEmail6">Giờ đóng cửa</label>
<input type="text" name="info_close[]" class="form-control" value="{{ $data->getSData($l['id'],'info_close') }}">
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Chi phí cho một người</label>
<input type="text" name="info_person[]" class="form-control" value="{{ $data->getSData($l['id'],'info_person') }}">
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Thời gian giao hàng</label>
<input type="text" name="info_d_time[]" class="form-control" value="{{ $data->getSData($l['id'],'info_d_time') }}">
</div>
</div>

</div>
</div>
<!--End-->

<!--start-->
<h4>Trang Giỏ hàng</h4>

<div class="card py-3 m-b-30">
<div class="card-body">

<div class="form-row">
<div class="form-group col-md-4">
<label for="inputEmail6">Tiêu đề</label>
<input type="text" name="cart_heading[]" class="form-control" value="{{ $data->getSData($l['id'],'cart_heading') }}">
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Tổng số tiền</label>
<input type="text" name="cart_total[]" class="form-control" value="{{ $data->getSData($l['id'],'cart_total') }}">
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Phí vận chuyển</label>
<input type="text" name="cart_delivery[]" class="form-control" value="{{ $data->getSData($l['id'],'cart_delivery') }}">
</div>
</div>

<div class="form-row">
<div class="form-group col-md-4">
<label for="inputEmail6">Mã giảm giá</label>
<input type="text" name="cart_coupon[]" class="form-control" value="{{ $data->getSData($l['id'],'cart_coupon') }}">
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Số tiền thanh toán</label>
<input type="text" name="cart_payable[]" class="form-control" value="{{ $data->getSData($l['id'],'cart_payable') }}">
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Nút Đặt hàng</label>
<input type="text" name="cart_button[]" class="form-control" value="{{ $data->getSData($l['id'],'cart_button') }}">
</div>
</div>

<div class="form-row">
<div class="form-group col-md-4">
<label for="inputEmail6">Giỏ hàng trống</label>
<input type="text" name="cart_empty[]" class="form-control" value="{{ $data->getSData($l['id'],'cart_empty') }}">
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Bắt đầu mua hàng</label>
<input type="text" name="cart_start_order[]" class="form-control" value="{{ $data->getSData($l['id'],'cart_start_order') }}">
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Giá giỏ hàng</label>
<input type="text" name="cart_price[]" class="form-control" value="{{ $data->getSData($l['id'],'cart_price') }}">
</div>
</div>

<div class="form-row">
<div class="form-group col-md-4">
<label for="inputEmail6">Số lượng giỏ hàng</label>
<input type="text" name="cart_qty[]" class="form-control" value="{{ $data->getSData($l['id'],'cart_qty') }}">
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Gảm giá</label>
<input type="text" name="cart_discount[]" class="form-control" value="{{ $data->getSData($l['id'],'cart_discount') }}">
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Nhập mã khuyến mãi</label>
<input type="text" name="cart_apply[]" class="form-control" value="{{ $data->getSData($l['id'],'cart_apply') }}">
</div>
</div>

</div>
</div>
<!--End-->

<!--start-->
<h4>Trang Khuyến mãi</h4>

<div class="card py-3 m-b-30">
<div class="card-body">

<div class="form-row">
<div class="form-group col-md-4">
<label for="inputEmail6">Tiêu đề</label>
<input type="text" name="coupon_title[]" class="form-control" value="{{ $data->getSData($l['id'],'coupon_title') }}">
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Tiêu đề</label>
<input type="text" name="coupon_heading[]" class="form-control" value="{{ $data->getSData($l['id'],'coupon_heading') }}">
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Nút chấp nhận</label>
<input type="text" name="coupon_button[]" class="form-control" value="{{ $data->getSData($l['id'],'coupon_button') }}">
</div>
</div>

</div>
</div>
<!--End-->

<!--start-->
<h4>Trang Đăng nhập</h4>

<div class="card py-3 m-b-30">
<div class="card-body">

<div class="form-row">
<div class="form-group col-md-4">
<label for="inputEmail6">Tiêu đề</label>
<input type="text" name="login_title[]" class="form-control" value="{{ $data->getSData($l['id'],'login_title') }}">
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Tiêu đề</label>
<input type="text" name="login_heading[]" class="form-control" value="{{ $data->getSData($l['id'],'login_heading') }}">
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Nút Đăng nhập</label>
<input type="text" name="login_button[]" class="form-control" value="{{ $data->getSData($l['id'],'login_button') }}">
</div>
</div>

<div class="form-row">
<div class="form-group col-md-4">
<label for="inputEmail6">Quên mật khẩu</label>
<input type="text" name="login_forgot_password[]" class="form-control" value="{{ $data->getSData($l['id'],'login_forgot_password') }}">
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Láy lại mât khẩu</label>
<input type="text" name="login_reset_password[]" class="form-control" value="{{ $data->getSData($l['id'],'login_reset_password') }}">
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Nút Đăng ký</label>
<input type="text" name="login_signup[]" class="form-control" value="{{ $data->getSData($l['id'],'login_signup') }}">
</div>
</div>

</div>
</div>
<!--End-->

<!--start-->
<h4>Quên mật khẩu</h4>

<div class="card py-3 m-b-30">
<div class="card-body">

<div class="form-row">
<div class="form-group col-md-4">
<label for="inputEmail6">Tiêu đề</label>
<input type="text" name="forgot_title[]" class="form-control" value="{{ $data->getSData($l['id'],'forgot_title') }}">
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Tiêu đề</label>
<input type="text" name="forgot_heading[]" class="form-control" value="{{ $data->getSData($l['id'],'forgot_heading') }}">
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Văn bản</label>
<input type="text" name="forgot_text[]" class="form-control" value="{{ $data->getSData($l['id'],'forgot_text') }}">
</div>
</div>


</div>
</div>
<!--End-->

<!--start-->
<h4>Đăng ký</h4>

<div class="card py-3 m-b-30">
<div class="card-body">

<div class="form-row">
<div class="form-group col-md-4">
<label for="inputEmail6">Tiêu đề</label>
<input type="text" name="signup_title[]" class="form-control" value="{{ $data->getSData($l['id'],'signup_title') }}">
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Tiêu đề</label>
<input type="text" name="signup_heading[]" class="form-control" value="{{ $data->getSData($l['id'],'signup_heading') }}">
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Nút đăng ký</label>
<input type="text" name="signup_button[]" class="form-control" value="{{ $data->getSData($l['id'],'signup_button') }}">
</div>
</div>


</div>
</div>
<!--End-->

<!--start-->
<h4>Đặt hàng</h4>

<div class="card py-3 m-b-30">
<div class="card-body">

<div class="form-row">
<div class="form-group col-md-4">
<label for="inputEmail6">Tiêu đề</label>
<input type="text" name="place_title[]" class="form-control" value="{{ $data->getSData($l['id'],'place_title') }}">
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Tiêu đề đị chỉ giao hàng</label>
<input type="text" name="place_delivery_heading[]" class="form-control" value="{{ $data->getSData($l['id'],'place_delivery_heading') }}">
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Thêm địa chỉ mới</label>
<input type="text" name="place_add_address[]" class="form-control" value="{{ $data->getSData($l['id'],'place_add_address') }}">
</div>
</div>

<div class="form-row">
<div class="form-group col-md-4">
<label for="inputEmail6">Nhập địa chỉ</label>
<input type="text" name="place_address_text[]" class="form-control" value="{{ $data->getSData($l['id'],'place_address_text') }}">
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Tiêu đề Thanh toán</label>
<input type="text" name="place_payment_heading[]" class="form-control" value="{{ $data->getSData($l['id'],'place_payment_heading') }}">
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Nút Đặt hàng</label>
<input type="text" name="place_order_button[]" class="form-control" value="{{ $data->getSData($l['id'],'place_order_button') }}">
</div>
</div>

</div>
</div>
<!--End-->

<!--start-->
<h4>Thêm địa chỉ mới</h4>

<div class="card py-3 m-b-30">
<div class="card-body">

<div class="form-row">
<div class="form-group col-md-4">
<label for="inputEmail6">Tiêu đề</label>
<input type="text" name="add_title[]" class="form-control" value="{{ $data->getSData($l['id'],'add_title') }}">
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Địa chỉ</label>
<input type="text" name="add_address[]" class="form-control" value="{{ $data->getSData($l['id'],'add_address') }}">
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Khu vực lân cận</label>
<input type="text" name="add_landmark[]" class="form-control" value="{{ $data->getSData($l['id'],'add_landmark') }}">
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Nút bấm</label>
<input type="text" name="add_button[]" class="form-control" value="{{ $data->getSData($l['id'],'add_button') }}">
</div>
</div>

</div>
</div>
<!--End-->


<!--start-->
<h4>Xác nhận đơn hàng</h4>

<div class="card py-3 m-b-30">
<div class="card-body">

<div class="form-row">
<div class="form-group col-md-4">
<label for="inputEmail6">Tiêu đề</label>
<input type="text" name="confirm_title[]" class="form-control" value="{{ $data->getSData($l['id'],'confirm_title') }}">
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Tiêu đề</label>
<input type="text" name="confirm_heading[]" class="form-control" value="{{ $data->getSData($l['id'],'confirm_heading') }}">
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Xem chi tiết đơn hàng</label>
<input type="text" name="confirm_view_order[]" class="form-control" value="{{ $data->getSData($l['id'],'confirm_view_order') }}">
</div>
</div>

<div class="form-row">
<div class="form-group col-md-4">
<label for="inputEmail6">ID Đơn hàng</label>
<input type="text" name="confirm_order_id[]" class="form-control" value="{{ $data->getSData($l['id'],'confirm_order_id') }}">
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Tổng</label>
<input type="text" name="confirm_total[]" class="form-control" value="{{ $data->getSData($l['id'],'confirm_total') }}">
</div>
</div>

</div>
</div>
<!--End-->

<!--start-->
<h4>Trang tài khoản</h4>

<div class="card py-3 m-b-30">
<div class="card-body">

<div class="form-row">
<div class="form-group col-md-4">
<label for="inputEmail6">Tiêu đề</label>
<input type="text" name="profile_title[]" class="form-control" value="{{ $data->getSData($l['id'],'profile_title') }}">
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Tiêu đề</label>
<input type="text" name="profile_heading[]" class="form-control" value="{{ $data->getSData($l['id'],'profile_heading') }}">
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Dòng chữ Chào mừng</label>
<input type="text" name="profile_welcome[]" class="form-control" value="{{ $data->getSData($l['id'],'profile_welcome') }}">
</div>
</div>

<div class="form-row">
<div class="form-group col-md-4">
<label for="inputEmail6">Lịch sử đặt hàng</label>
<input type="text" name="profile_order_history[]" class="form-control" value="{{ $data->getSData($l['id'],'profile_order_history') }}">
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Cài đặt</label>
<input type="text" name="profile_setting[]" class="form-control" value="{{ $data->getSData($l['id'],'profile_setting') }}">
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Thoát</label>
<input type="text" name="profile_logout[]" class="form-control" value="{{ $data->getSData($l['id'],'profile_logout') }}">
</div>
</div>

</div>
</div>
<!--End-->

<!--start-->
<h4>Lịch sữ đặt hàng</h4>

<div class="card py-3 m-b-30">
<div class="card-body">

<div class="form-row">
<div class="form-group col-md-4">
<label for="inputEmail6">Tiêu đề</label>
<input type="text" name="history_title[]" class="form-control" value="{{ $data->getSData($l['id'],'history_title') }}">
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Tiêu đề</label>
<input type="text" name="history_heading[]" class="form-control" value="{{ $data->getSData($l['id'],'history_heading') }}">
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Ngày</label>
<input type="text" name="history_date[]" class="form-control" value="{{ $data->getSData($l['id'],'history_date') }}">
</div>
</div>

<div class="form-row">
<div class="form-group col-md-4">
<label for="inputEmail6">Trạng thái</label>
<input type="text" name="history_status[]" class="form-control" value="{{ $data->getSData($l['id'],'history_status') }}">
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Sản phẩm</label>
<input type="text" name="history_item[]" class="form-control" value="{{ $data->getSData($l['id'],'history_item') }}">
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Số lượng</label>
<input type="text" name="history_qty[]" class="form-control" value="{{ $data->getSData($l['id'],'history_qty') }}">
</div>
</div>

<div class="form-row">
<div class="form-group col-md-4">
<label for="inputEmail6">Giá</label>
<input type="text" name="history_price[]" class="form-control" value="{{ $data->getSData($l['id'],'history_price') }}">
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Tiêu đề Đánh giá</label>
<input type="text" name="history_rating[]" class="form-control" value="{{ $data->getSData($l['id'],'history_rating') }}">
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Huỷ đơn hàng</label>
<input type="text" name="history_cancel[]" class="form-control" value="{{ $data->getSData($l['id'],'history_cancel') }}">
</div>
</div>

</div>
</div>
<!--End-->

<!--start-->
<h4>Trang Thông tin & Đánh giá</h4>

<div class="card py-3 m-b-30">
<div class="card-body">

<div class="form-row">
<div class="form-group col-md-4">
<label for="inputEmail6">Tiêu đề</label>
<input type="text" name="rating_title[]" class="form-control" value="{{ $data->getSData($l['id'],'rating_title') }}">
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Tiêu đề</label>
<input type="text" name="rating_heading[]" class="form-control" value="{{ $data->getSData($l['id'],'rating_heading') }}">
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Nội dung đánh giá</label>
<input type="text" name="rating_msg[]" class="form-control" value="{{ $data->getSData($l['id'],'rating_msg') }}">
</div>
</div>

<div class="form-row">
<div class="form-group col-md-4">
<label for="inputEmail6">Nút bấm</label>
<input type="text" name="rating_button[]" class="form-control" value="{{ $data->getSData($l['id'],'rating_button') }}">
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Tiêu đề Trang giới thiệu</label>
<input type="text" name="about_title[]" class="form-control" value="{{ $data->getSData($l['id'],'about_title') }}">
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Tiêu đề Trang cách hoạt động</label>
<input type="text" name="how_title[]" class="form-control" value="{{ $data->getSData($l['id'],'how_title') }}">
</div>
</div>

<div class="form-row">
<div class="form-group col-md-4">
<label for="inputEmail6">Tiêu đề Trang hỏi đáp</label>
<input type="text" name="faq_title[]" class="form-control" value="{{ $data->getSData($l['id'],'faq_title') }}">
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Tiêu đề Trang liên hệ</label>
<input type="text" name="contact_title[]" class="form-control" value="{{ $data->getSData($l['id'],'contact_title') }}">
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Ngôn ngữ</label>
<input type="text" name="language[]" class="form-control" value="{{ $data->getSData($l['id'],'language') }}">
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Trang chủ</label>
<input type="text" name="home[]" class="form-control" value="{{ $data->getSData($l['id'],'home') }}">
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Thành phố</label>
<input type="text" name="city[]" class="form-control" value="{{ $data->getSData($l['id'],'city') }}">
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Tài khoản</label>
<input type="text" name="account[]" class="form-control" value="{{ $data->getSData($l['id'],'account') }}">
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Đơn hàng</label>
<input type="text" name="order[]" class="form-control" value="{{ $data->getSData($l['id'],'order') }}">
</div>

</div>

</div>
</div>
<!--End-->

<!--start-->
<h4>Ứng dụng của Nhân viên giao hàng</h4>

<div class="card py-3 m-b-30">
<div class="card-body">

<div class="form-row">
<div class="form-group col-md-4">
<label for="inputEmail6">Không tìm thấy đơn hàng</label>
<input type="text" name="d_no_order[]" class="form-control" value="{{ $data->getSData($l['id'],'d_no_order') }}">
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Đơn hàng mới</label>
<input type="text" name="d_new_order[]" class="form-control" value="{{ $data->getSData($l['id'],'d_new_order') }}">
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Xem chi tiết</label>
<input type="text" name="d_view_detail[]" class="form-control" value="{{ $data->getSData($l['id'],'d_view_detail') }}">
</div>
</div>

<div class="form-row">
<div class="form-group col-md-4">
<label for="inputEmail6">Người dùng</label>
<input type="text" name="d_user[]" class="form-control" value="{{ $data->getSData($l['id'],'d_user') }}">
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Số điện thoại</label>
<input type="text" name="d_phone[]" class="form-control" value="{{ $data->getSData($l['id'],'d_phone') }}">
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Địa chỉ</label>
<input type="text" name="d_address[]" class="form-control" value="{{ $data->getSData($l['id'],'d_address') }}">
</div>
</div>

<div class="form-row">
<div class="form-group col-md-4">
<label for="inputEmail6">Bắt đầu đi giao hàng</label>
<input type="text" name="d_start_ride[]" class="form-control" value="{{ $data->getSData($l['id'],'d_start_ride') }}">
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Đã giao hàng</label>
<input type="text" name="d_complete_ride[]" class="form-control" value="{{ $data->getSData($l['id'],'d_complete_ride') }}">
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Tổng số tiền</label>
<input type="text" name="d_total_amount[]" class="form-control" value="{{ $data->getSData($l['id'],'d_total_amount') }}">
</div>
</div>

<div class="form-row">
<div class="form-group col-md-4">
<label for="inputEmail6">Cách thanh toán</label>
<input type="text" name="d_pay[]" class="form-control" value="{{ $data->getSData($l['id'],'d_pay') }}">
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Cửa hàng Đóng cửa</label>
<input type="text" name="close[]" class="form-control" value="{{ $data->getSData($l['id'],'close') }}">
</div>
</div>

</div>
</div>
<!--End-->

<!--start-->
<h4>Ứng dụng Nhà hàng</h4>

<div class="card py-3 m-b-30">
<div class="card-body">

<div class="form-row">
<div class="form-group col-md-4">
<label for="inputEmail6">Tổng đơn hàng</label>
<input type="text" name="s_total_order[]" class="form-control" value="{{ $data->getSData($l['id'],'s_total_order') }}">
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Đơn hàng đã giao</label>
<input type="text" name="s_complete_order[]" class="form-control" value="{{ $data->getSData($l['id'],'s_complete_order') }}">
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Đơn hàng mới</label>
<input type="text" name="s_new_order[]" class="form-control" value="{{ $data->getSData($l['id'],'s_new_order') }}">
</div>
</div>

<div class="form-row">
<div class="form-group col-md-4">
<label for="inputEmail6">Trạng thái đơn hàng mới</label>
<input type="text" name="s_new_status[]" class="form-control" value="{{ $data->getSData($l['id'],'s_new_status') }}">
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Trạng thái xác nhận</label>
<input type="text" name="s_confirm_order[]" class="form-control" value="{{ $data->getSData($l['id'],'s_confirm_order') }}">
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Trạng thái chỉ định nhân viên giao hàng</label>
<input type="text" name="s_assign_status[]" class="form-control" value="{{ $data->getSData($l['id'],'s_assign_status') }}">
</div>
</div>

<div class="form-row">
<div class="form-group col-md-4">
<label for="inputEmail6">Trạng thái đã đi giao hàng</label>
<input type="text" name="s_out_delivery_status[]" class="form-control" value="{{ $data->getSData($l['id'],'s_out_delivery_status') }}">
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Trạng thái Đã giao hàng</label>
<input type="text" name="s_complete_status[]" class="form-control" value="{{ $data->getSData($l['id'],'s_complete_status') }}">
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Tiêu đề chi tiết đơn hàng</label>
<input type="text" name="s_detail_title[]" class="form-control" value="{{ $data->getSData($l['id'],'s_detail_title') }}">
</div>
</div>

<div class="form-row">
<div class="form-group col-md-4">
<label for="inputEmail6">Tiêu đề Danh mục sản phẩm</label>
<input type="text" name="s_menu_title[]" class="form-control" value="{{ $data->getSData($l['id'],'s_menu_title') }}">
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Tổng quan đơn hàng</label>
<input type="text" name="s_order_overview[]" class="form-control" value="{{ $data->getSData($l['id'],'s_order_overview') }}">
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Đơn hàng hoàn thành</label>
<input type="text" name="s_c_order[]" class="form-control" value="{{ $data->getSData($l['id'],'s_c_order') }}">
</div>
</div>

<div class="form-row">
<div class="form-group col-md-4">
<label for="inputEmail6">Nút Huỷ đơn hàng</label>
<input type="text" name="s_cancel_button[]" class="form-control" value="{{ $data->getSData($l['id'],'s_cancel_button') }}">
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Nút xác nhận đơn hàng</label>
<input type="text" name="s_confirm_button[]" class="form-control" value="{{ $data->getSData($l['id'],'s_confirm_button') }}">
</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Chỉ định nhân viên giao hàng</label>
<input type="text" name="s_assign_button[]" class="form-control" value="{{ $data->getSData($l['id'],'s_assign_button') }}">
</div>
</div>

</div>
</div>

</div>
@endforeach

</div>

<button type="submit" class="btn btn-success btn-bold">Lưu thay đổi</button><br><br>
