<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">

</head>
<body>
    <section id="header">
        <div class="header_container">
            <div class="header_left">
                <div class="header_left--logo">
                    <a href="{{ route('home') }}"><img src="{{ asset('img/logo.png') }}" alt=""></a>
                </div>
            </div>

            <div class="header_center">
                <div class="header_center--directory">
                    <div class="directory--title"><p>đồ ăn</p></div>
                    <div class="directory--title"><p>đồ uống</p></div>
                    <div class="directory--title"><p>nhà hàng</p></div>
                    <div class="directory--title"><p>bán chạy</p></div>
                    <div class="directory--title"><p>tất cả</p></div>
                </div>

                <div class="header_center--classify">
                    <div class="classify-title">
                        <ul>
                            <li>đồ chay</li>
                            <li>đồ mặn</li>
                            <li>đồ khô</li>
                            <li>đồ ướt</li>
                        </ul>
                    </div>
                    <div class="classify-img">
                        <div><img src="{{ asset('img/home_img2.jpg') }}" alt=""></div>
                        <div><img src="{{ asset('img/home_img2.jpg') }}" alt=""></div>
                        <div><img src="{{ asset('img/home_img2.jpg') }}" alt=""></div>
                        <div><img src="{{ asset('img/home_img2.jpg') }}" alt=""></div>
                    </div>
                </div>
                
            </div>
            <div class="header_right">
                <div class="header_right--search">
                    <div class="search-icon">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                    <div class="search-text">
                        <input type="search" placeholder="Tìm kiếm sản phẩm">
                    </div>
                </div>
                <div class="header_right--email">
                    <i class="fa-solid fa-envelope"></i>
                </div>

                <div class="header_right--cart">
                    <i class="fa-solid fa-cart-shopping"></i>
                </div>
                <div class="header_right--account">
                    <div class="account-icon"><i class="fa-solid fa-user"></i></div>
                    <div class="account-nav">
                            <ul>
                                <li>Đăng kí</li>
                                <li>Đăng Nhập</li>
                                <li>Đăng Xuất</li>
                            </ul>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
</body>
</html>