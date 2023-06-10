<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ Hàng</title>


    <!-- Link cdn css -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

    <!-- Slick css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- remix icon -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">


    <!-- Link custom css -->
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/giohang.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>

   

    <div class="app">
        {{-- <header class="header">
            <div class="header__top">
                <div class="container">

                    <div class="row">

                        <div class="col-md-6 col-xl-8">

                            <div class="header__top-left">
                                <div class="header__top-info">
                                    <span><i class="ri-map-pin-line"></i></span>
                                    <p>Đ. 3/2, P. Xuân Khánh, Q. Ninh Kiều, TP. CT</p>
                                </div>
                                <div class="d-flex gap-3">
                                    <div class="header__top-info">
                                        <span><i class="ri-mail-send-line"></i></span>
                                        <a href="mailto:linhdi21v7x013@dttx.ctu.edu.vn">linhdi21v7x013@dttx.ctu.edu.vn </a>
                                    </div>
                                    <div class="header__top-info">
                                        <span><i class="ri-phone-fill"></i></span>
                                        <a href="#">0932 850 695</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-xl-4">
                            <ul class="header__top-right">
                                <li><a href="#">Giới thiệu</a></li>
                                <li><a href="#">Sơ đồ đường đi</a></li>
                                <li><a href="#">Chính sách</a></li>
                                <li><a href="#">Liên hệ</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="header__middle">
                <div class="container">
                    <div class="row">
                        <div class="col-3 show__menu-mobile">
                            <div class="menu__icon">
                                <i class="ri-menu-fill"></i>
                            </div>
                        </div>
                        <div class="col-lg-3 col-5">
                            <a href="" class="logo">
                                <img src="./assets/imgs/logo.png" alt="">
                            </a>
                        </div>
                        <div class="col-lg-7 search">
                            <div class="search__box">
                                <input type="text" placeholder="Tìm sản phẩm">
                                <button class="search__btn"><i class="ri-search-line"></i></button>
                            </div>
                        </div>
                        <div class="col-lg-2 col-4">
                            <ul class="social__links">
                                <li><a href="#"><i class="ri-facebook-fill"></i></a></li>
                                <li><a href="#"><i class="ri-twitter-fill"></i></a></li>
                                <li><a href="#"><i class="ri-linkedin-fill"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>


            <div class="header__bottom">
                <div class="container">
                    <div class="navigation">
                        <div class="nav__item">
                            <a href="#" class="nav__links">Trang chủ</a>
                        </div>
                        <div class="nav__item">
                            <a href="#" class="nav__links">Giới thiệu</a>
                        </div>
                        <div class="nav__item">
                            <a href="#" class="nav__links">Dịch vụ</a>
                        </div>
                        <div class="nav__item">
                            <a href="#" class="nav__links">Khuyễn mãi</a>
                        </div>
                        <div class="nav__item">
                            <a href="#" class="nav__links">Hỗ trợ</a>
                        </div>
                        <div class="nav__item">
                            <a href="#" class="nav__links">Sơ đồ đường đi</a>
                        </div>
                        <div class="nav__item">
                            <a href="#" class="nav__links">Đại lý</a>
                        </div>
                        <div class="nav__item">
                            <a href="#" class="nav__links">Liên hệ</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="menu__mobile">
                <form action="" method="post">
                    <div class="search__mobile">
                        <input type="text" name="keyword" placeholder="Tìm kiếm..." required>
                        <button type="submit" class="search__mobile-btn"><i class="ri-search-2-line"></i></button>
                    </div>
                </form>
                <a href="#" class="menu__mobile-nav">
                    <div class="menu__mobile-title">
                        <span>Trang chủ</span>
                    </div>
                    <span class="menu__mobile-nav-icon"><i class="ri-arrow-right-fill"></i></span>
                </a>
                <a href="#" class="menu__mobile-nav">
                    <div class="menu__mobile-title">
                        <span>Giới thiệu</span>
                    </div>
                    <span class="menu__mobile-nav-icon"><i class="ri-arrow-right-fill"></i></span>
                </a>
                <a href="#" class="menu__mobile-nav">
                    <div class="menu__mobile-title">
                        <span>Dịch vụ</span>
                    </div>
                    <span class="menu__mobile-nav-icon"><i class="ri-arrow-right-fill"></i></span>
                </a>
                <a href="#" class="menu__mobile-nav">
                    <div class="menu__mobile-title">
                        <span>Khuyến mãi</span>
                    </div>
                    <span class="menu__mobile-nav-icon"><i class="ri-arrow-right-fill"></i></span>
                </a>
                <a href="#" class="menu__mobile-nav">
                    <div class="menu__mobile-title">
                        <span>Hỗ trợ</span>
                    </div>
                    <span class="menu__mobile-nav-icon"><i class="ri-arrow-right-fill"></i></span>
                </a>
                <a href="#" class="menu__mobile-nav">
                    <div class="menu__mobile-title">
                        <span>Sơ đồ đường đi</span>
                    </div>
                    <span class="menu__mobile-nav-icon"><i class="ri-arrow-right-fill"></i></span>
                </a>
                <a href="#" class="menu__mobile-nav">
                    <div class="menu__mobile-title">
                        <span>Đại lý</span>
                    </div>
                    <span class="menu__mobile-nav-icon"><i class="ri-arrow-right-fill"></i></span>
                </a>
                <a href="#" class="menu__mobile-nav">
                    <div class="menu__mobile-title">
                        <span>Liên hệ</span>
                    </div>
                    <span class="menu__mobile-nav-icon"><i class="ri-arrow-right-fill"></i></span>
                </a>
            </div>
        </header> --}}
        @include('navbar')
        <!------------end header----------------------------------------------------------->
       
       
     
        <main>
            <div class="main__body">
                <div class="container">
                    <div class="row" style="padding-top: 20px;">
                        <div class="col-lg-3">
                            <div class="category">
                                <div class="category__title">
                                    <span>Danh mục sản phẩm</span>
                                </div>
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
                                                <tr class="table_row">
                                                    <td style="width: 50px;">STT </td>
                                                    <td colspan="2">SẢN PHẨM</td>
                                                    <td style="width: 60px;">SỐ LƯỢNG</td>
                                                    <td style="width: 80px;">ĐƠN GIÁ</td>
                                                    <td style="width: 80px;"> SỐ TIỀN</td>
                                                    <td style="width: 50px;"> CHỈNH SỬA</td>
                                                </tr>
                                                    <td>1</td>
                                                    <td class="img_sp"><img src="./assets/imgs/dt1.jpg"> </td>
                                                    <td>sản phẩm 1</td>
                                                    <td>2</td>
                                                    <td>1.500.000</td>
                                                    <td>3.000.000</td>
                                                    <td><button class="bt_cart_delete">Xóa</button></td>
                                                
                                                <tr>
                                                    <td>2</td>
                                                    <td  class="img_sp"><img src="./assets/imgs/dt2.jpg"> </td>
                                                    <td>sản phẩm 2</td>
                                                    <td>1</td>
                                                    <td>1.500.000</td>
                                                    <td>1.500.000</td>
                                                    <td><button class="bt_cart_delete">Xóa</button></td>
                                                </tr>

                                                <tr>
                                                    <td>3</td>
                                                    <td  class="img_sp"><img src="./assets/imgs/dt2.jpg"> </td>
                                                    <td>sản phẩm 3</td>
                                                    <td>1</td>
                                                    <td>500.000</td>
                                                    <td>500.000</td>
                                                    <td><button class="bt_cart_delete">Xóa</button></td>
                                                </tr>

                                                <tr>
                                                    <td></td>
                                                    <td class="money_all" colspan="4">TỔNG TIỀN ĐƠN HÀNG</td>
                                                    <td></td>
                                                </tr>

                                            </table> 
                                            <button class="tb_dh">Đặt hàng</button>
                                          <a href="index.blade.php"><button class="bt_ttmh">Tiếp tục mua hàng</button></a>
                                            
                                        </div>  
                                        
                                        

                                        

                                        

                                        

                                        

                                        
                                    </div>
                                    
                                    
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-2 ads">
                            <div class="category__title">
                                <span>Quảng cáo</span>
                            </div>
                            <div class="ads__content">
                                <a href="#">
                                    <img src="https://sieuthivienthong.com/advert/p_361.jpg" alt="">
                                </a>
                                <a href="#">
                                    <img src="https://sieuthivienthong.com/advert/p_336.jpg" alt="">
                                </a>
                                <a href="#">
                                    <img src="https://sieuthivienthong.com/advert/p_339.jpg" alt="">
                                </a>
                            </div>
                        </div>
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

        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class=" footer_info_left col-sm-6 col-md-6 col-xl-6">
                        <h3 class="footer_info_1">CONG TY VIEN THONG ABC</h3><br>
                        <h5 class="footer_info_2">Giấy phép kinh doanh số 123456789 do Sở Kế Hoạch và Đầu Tư Tp.HCM cấp ngày 17/04/2007</h5><br>
                        <h5 class="footer_info_3">Đ. 3/2, P. Xuân Khánh, Q. Ninh Kiều, TP. CT <br>
                            Điện thoại: 0932 850 695<br>
                            Fax: 0292 777999<br>
                            Email: linhdi21v7x013@dttx.ctu.edu.vn<br>
                        </h5><br>
                    </div>
                    <div  class=" footer_info_4 col-md-6 col-xl-12">
                        <h5>© Design in 2023 by Nguyen Ngoc Linh. All Rights Reserved.</h5>
                    </div>
                    
            </div>

            </div>

        </footer>
    </div>
    

    <!-- Link cdn js -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>    
     <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    
    <!-- Link custom js -->
    <script src="{{asset('front-end/assets/js/main.js')}}"></script>

    <script>
        $('.slick__banner').slick({
            dots: true,
            infinite: true,
            speed: 500,
            cssEase: 'linear'
        });



        $('.menu__icon').click(function(){
            $('.menu__mobile').toggleClass('active');
        })

        $('.icon__category').click(function(){
            $('.category__mobile').toggleClass('active');
        })
    </script>
    
</body>
</html>