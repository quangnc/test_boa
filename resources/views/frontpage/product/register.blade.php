<div class="content">
    <script src="https://www.google.com/recaptcha/api.js?hl=vi"></script>
    <div class="tieude_dk"><img src="/interface/pageHome/images/boaweb/user.png">Nộp đơn đăng ký</div>
    <form action="/" method="get" id="dang-ky-fake">
        <input type="text" placeholder="Tên đơn vị" name="dangky_dv" id="donvi" required="">
        <input type="email" placeholder="Email" name="dangky_email" id="dangky_email">
        <input type="text" placeholder="Số điện thoại" name="dangky_dt" id="dangky_dt">
        <input type="text" placeholder="Mã số công nhận do VACI cấp (nếu có)" name="dangky_ms" id="dangky_ms">
        <select name="chondichvu">
            <option value="256">Phòng thí nghiệm</option>
            <option value="259">Phòng thí nghiệm y tế</option>
            <option value="258">Tổ chức chứng nhận</option>
            <option value="257">Tổ chức giám định</option>
            <option value="">Năng lực tổ chức</option>
            <option value="">Năng lực khác</option>
        </select>
        <input type="submit" value="Đăng ký" id="dangky" style="cursor:pointer">
    </form>
<div class="tailieu"><a href="{{ route('apply') }}">**Hướng dẫn nộp đơn đăng ký online</a></div>
</div>