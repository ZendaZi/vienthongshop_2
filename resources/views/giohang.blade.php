<!DOCTYPE html>
<html lang="en">
@include('header')

<body>



    <div class="app">

        @include('navbar')
        <!------------end header----------------------------------------------------------->



        <main>
            <div class="main__body">
                <div class="container">
                    <div class="row" style="padding-top: 20px;">
                        <div class="col-lg-3">
                            @include('category')




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
                        </div>

                        <div class="col-lg-7">
                            <div class="product__body">
                                <div class="product__title">
                                    <span class="icon__category"><i class="ri-list-check"></i></span>
                                    <span>
                                        Giỏ hàng của bạn
                                    </span>
                                </div>

                                <div class="product__content row">

                                    <div class="product__item col-lg-12">
                                        <div class="cart">
                                            <table class="table_cart">
                                                <thead class="table_row">
                                                    <th >STT </th>
                                                    <th >SẢN PHẨM</th>
                                                    <th >HÌNH ẢNH</th>
                                                    <th >SỐ LƯỢNG</th>
                                                    <th >ĐƠN GIÁ</th>
                                                   
                                                   
                                                </thead>
                                                <tbody>
                                                    <form action="{{ url('muangay') }}" method="post">
                                                       @csrf
                                                    @foreach ( $sanpham as $sp)
                                                        
                                                   
                                                <tr>
                                                    <td>1</td>
                                                    <td>{{$sp->ten_sp}}
                                                        <input type="hidden" name="id_sp" value="{{$sp->id_sp}}"></td>
                                                    <td class="img_sp"><img src="{{$sp->link_imgsp}}"> </td>
                                                    <td> <input class="cart_num" value="1" type="number" name="soluong" min="1"
                                                        max="100"></td>
                                                    <td>{{$sp->	gia_sp}}</td>
                                                   
                                                  
                                                </tr>
                                                @endforeach
                                              
                                               
                                            </tbody>
                                            </table>
                                            <tr>                                            
                                                <td class="money_all">TỔNG TIỀN ĐƠN HÀNG</td>
                                            </tr>
                                            <br>
                                            <tr>                                            
                                                <td class="money_all">THÔNG TIN KHÁCH HÀNG</td>
                                            </tr>
                                            <br>
                                            <tr>                                            
                                                <td class="money_all"> <label for="">Tên khách hàng</label>
                                                    <input type="text" name="ten_kh"> </td>
                                                    <td class="money_all"> <label for="">SDT</label>
                                                        <input type="text" name="sdt_kh"> </td>
                                                        <td class="money_all"> <label for="">Địa chỉ</label>
                                                            <input type="text" name="dc_kh"> </td>
                                            </tr>
<br>
                                            <button type="submit" class="tb_dh">Đặt hàng</button>
                                        </form>
                                            <a href="index" class="bt_ttmh">Tiếp tục mua hàng</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-lg-2 ads">
                            @include('ads')
                        </div> --}}
                    </div>
                </div>


                <div class="category__mobile">
                    <h5 class="category__mobile-title">Danh mục sản phẩm</h5>
                    <ul class="category__list">
                        <li>
                            <a href="#" class="category__links">
                                <div class="d-flex align-items-center gap-2">
                                    <img src="./assets/imgs/icon_menu_left.png" alt="">
                                    <span>Tổng đài điện thoại</span>
                                </div>
                                <i class="ri-arrow-down-s-line"></i>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="category__links">
                                <div class="d-flex align-items-center gap-2">
                                    <img src="./assets/imgs/icon_menu_left.png" alt="">
                                    <span>Camera quan sát</span>
                                </div>
                                <i class="ri-arrow-down-s-line"></i>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="category__links">
                                <div class="d-flex align-items-center gap-2">
                                    <img src="./assets/imgs/icon_menu_left.png" alt="">
                                    <span>Camera hành trình</span>
                                </div>
                                <i class="ri-arrow-down-s-line"></i>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="category__links">
                                <div class="d-flex align-items-center gap-2">
                                    <img src="./assets/imgs/icon_menu_left.png" alt="">
                                    <span>Báo cháy - báo trộm</span>
                                </div>
                                <i class="ri-arrow-down-s-line"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="category__links">
                                <div class="d-flex align-items-center gap-2">
                                    <img src="./assets/imgs/icon_menu_left.png" alt="">
                                    <span>Tổng đài điện thoại</span>
                                </div>
                                <i class="ri-arrow-down-s-line"></i>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="category__links">
                                <div class="d-flex align-items-center gap-2">
                                    <img src="./assets/imgs/icon_menu_left.png" alt="">
                                    <span>Camera quan sát</span>
                                </div>
                                <i class="ri-arrow-down-s-line"></i>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="category__links">
                                <div class="d-flex align-items-center gap-2">
                                    <img src="./assets/imgs/icon_menu_left.png" alt="">
                                    <span>Camera hành trình</span>
                                </div>
                                <i class="ri-arrow-down-s-line"></i>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="category__links">
                                <div class="d-flex align-items-center gap-2">
                                    <img src="./assets/imgs/icon_menu_left.png" alt="">
                                    <span>Báo cháy - báo trộm</span>
                                </div>
                                <i class="ri-arrow-down-s-line"></i>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </main>
        @include('footer')
    </div>


    <!-- Link cdn js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
        integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <!-- Link custom js -->
    <script src="{{ asset('front-end/assets/js/main.js') }}"></script>

    <script>
        $('.slick__banner').slick({
            dots: true,
            infinite: true,
            speed: 500,
            cssEase: 'linear'
        });



        $('.menu__icon').click(function() {
            $('.menu__mobile').toggleClass('active');
        })

        $('.icon__category').click(function() {
            $('.category__mobile').toggleClass('active');
        })
    </script>

</body>

</html>
