<div id="breadcrumb">
    <ul class="breadcrumb">
        <li class="breadcrumb-item">
            <a href=""><a href="/vi">Trang chủ</a> </a>
        </li>
        
        @foreach ($segments = request()->segments() as $index => $segment)
            <li class="breadcrumb-item">
                <a href="{{ url( implode(array_alice($segments, 0, $index + 1), '/') ) }}">
                    {{ isset($model) && $index === count($segments) - 1 ? $model->title : title_case($segment) }}
                </a>
            </li>
        @endforeach
        {{-- » <a href="/vi/tin-tuc">Tin tức</a> 
        » Danh sách các tổ chức được công nhận mới tháng 6/2019 --}}
    </ul>    
</div>