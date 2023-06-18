<div class="category">
    <div class="category__title">
        <span>Danh mục sản phẩm</span>
    </div>
    
    <ul class="category__list">
        @foreach($danhmuc_sp as $_danhmuc_sp) 
        <li>
            <a href="#" class="category__links">
                <div class="d-flex align-items-center gap-2">
                    <img src="./public/frontend/images/icon_menu_left.png" alt="">
                    {{$_danhmuc_sp->ten_dm}}
                </div>
                <i class="ri-arrow-down-s-line"></i>
            </a>
        </li>
        @endforeach
    </ul>
   
</div>

<div class="support">
    <div class="category__title">
        <span>Hỗ trợ kinh doanh</span>
    </div>
    <ul>
        <li class="support__info">Kinh Doanh 1: 0932 850 695</li>
        <li class="support__info">Kinh Doanh 2: 0932 850 695</li>
        <li class="support__info">Kinh Doanh 3: 0932 850 695</li>
    </ul>
</div>

<div class="support">
    <div class="category__title">
        <span>Hotline Tu Van</span>
    </div>
    <ul>
        <li class="support__info" style="color: red;">0932 850 695</li>
        
    </ul>
</div>