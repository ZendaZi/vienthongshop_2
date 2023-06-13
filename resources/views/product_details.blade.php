
<div class="product__title">
    <span class="icon__category"><i class="ri-list-check"></i></span>
    <span>
        {{$sp->ten_sp}}
    </span>
</div>
<div class="product__content row">
    <div class="product__item col-lg-12">
        <div class="name">
            {{$sp->ten_sp}}
        </div>
        <div class="image">
            <a href="#">
                <img src=" {{$sp->link_imgsp}}"
                    alt=""></a>
        </div>
        <div class="desc">
            {{$sp->ten_sp}}<br>

            {{$sp->giaithich_sp}}

        </div><br>

        <div class="price">Giá: <span>{{$sp->gia_sp}}</span></div>
        <div class="vat">(Đã bao gồm VAT)</div>

        <div class="cart_check">
            <span> Số lượng:</span><br>
            </span>
            <input class="cart_num" type="number" name="points" min="1"
                max="100">
            <a href="giohang"><button class="bt_cart">Thêm vào giỏ hàng</button></a>
            <a href="dathang"> <button class="bt_bynow">Mua ngay</button></a>
            <input type="number">
            <div class="facebook">
                <div class="fb-share-button"
                    data-href="https://developers.facebook.com/docs/plugins/"
                    data-layout="" data-size=""><a target="_blank"
                        href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse"
                        class="fb-xfbml-parse-ignore">Chia sẻ</a></div>
            </div>
        </div>
    </div>
</div>
