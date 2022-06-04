<?php
header('Content-Type: text/html; charset=utf-8');
session_start();
include 'assets/php/config.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,600;1,400&family=Spectral+SC:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css?v=<?= time(); ?>" />
    <link rel="stylesheet" href="assets/css/slider.css?v=<?= time(); ?>" />
    <script src="assets/js/slider.js"></script>
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <title>Торты от Маруси</title>
</head>
<body onload="start()">
<?php include('tpl/header.php');?>
<main>
<div class="container">
<div class="intro">
    <div class="col">
        <div class="intro_pic"></div>
    </div>
    <div class="col">
        <div class="logo">
            <div class="l_circle"></div>
            <div class="l_cake">
                <div class="l_cake2"></div>
                <div class="l_cake3"></div>
                <div class="l_cake4">
                    <div class="l_cake42"></div>
                </div>
            </div>
            <div class="l_text">Торты от Маруси</div>
        </div>
        <h1 class="intro_title">
            Торты на заказ<br />
            Сыктывкар<br />
        </h1>
    </div>
</div>
<div class="catalog">
    <div class="col">
        <h1 class="photos_title">Девочкам</h1>
        <div class="slider">
            <div class="item" id="sl1">
                <img src="assets/img/girls5.jpg" alt="" />
            </div>
            <div class="item" id="sl1">
                <img src="assets/img/girls4.jpg" alt="" />
            </div>
            <div class="item" id="sl1">
                <img src="assets/img/girls1.jpg" alt="" />
            </div>
            <div class="item" id="sl1">
                <img src="assets/img/girls2.jpg" alt="" />
            </div>
            <div class="item" id="sl1">
                <img src="assets/img/girls3.jpg" alt="" />
            </div>
            <a class="prev" onclick="minusSlide(1)">&#10094;</a>
            <a class="next" onclick="plusSlide(1)">&#10095;</a>
        </div>
        <div class="slider-dots">
            <span class="slider-dots_item" id="sld1" onclick="currentSlide(1,1)"></span>
            <span class="slider-dots_item" id="sld1" onclick="currentSlide(2,1)"></span>
            <span class="slider-dots_item" id="sld1" onclick="currentSlide(3,1)"></span>
            <span class="slider-dots_item" id="sld1" onclick="currentSlide(4,1)"></span>
            <span class="slider-dots_item" id="sld1" onclick="currentSlide(5,1)"></span>
        </div>
    </div>
    <div class="col">
        <h1 class="photos_title">Мальчикам</h1>
        <div class="slider">
            <div class="item" id="sl2">
                <img src="assets/img/boys4.jpg" alt="" />
            </div>
            <div class="item" id="sl2">
                <img src="assets/img/boys5.jpg" alt="" />
            </div>
            <div class="item" id="sl2">
                <img src="assets/img/boys1.jpg" alt="" />
            </div>
            <div class="item" id="sl2">
                <img src="assets/img/boys2.jpg" alt="" />
            </div>
            <div class="item" id="sl2">
                <img src="assets/img/boys3.jpg" alt="" />
            </div>
            <a class="prev" onclick="minusSlide(2)">&#10094;</a>
            <a class="next" onclick="plusSlide(2)">&#10095;</a>
        </div>
        <div class="slider-dots">
            <span class="slider-dots_item" id="sld2" onclick="currentSlide(1,2)"></span>
            <span class="slider-dots_item" id="sld2" onclick="currentSlide(2,2)"></span>
            <span class="slider-dots_item" id="sld2" onclick="currentSlide(3,2)"></span>
            <span class="slider-dots_item" id="sld2" onclick="currentSlide(4,2)"></span>
            <span class="slider-dots_item" id="sld2" onclick="currentSlide(5,2)"></span>
        </div>
    </div>
</div>
<div class="catalog">
    <div class="col">
        <h1 class="photos_title">Муссовые</h1>
        <div class="slider">
            <div class="item" id="sl5">
                <img src="assets/img/muss1.jpg" alt="" />
            </div>
            <div class="item" id="sl5">
                <img src="assets/img/muss2.jpg" alt="" />
            </div>
            <div class="item" id="sl5">
                <img src="assets/img/muss4.jpg" alt="" />
            </div>
            <div class="item" id="sl5">
                <img src="assets/img/muss5.jpg" alt="" />
            </div>
            <div class="item" id="sl5">
                <img src="assets/img/muss3.jpg" alt="" />
            </div>
            <a class="prev" onclick="minusSlide(5)">&#10094;</a>
            <a class="next" onclick="plusSlide(5)">&#10095;</a>
        </div>
        <div class="slider-dots">
            <span class="slider-dots_item" id="sld5" onclick="currentSlide(1,5)"></span>
            <span class="slider-dots_item" id="sld5" onclick="currentSlide(2,5)"></span>
            <span class="slider-dots_item" id="sld5" onclick="currentSlide(3,5)"></span>
            <span class="slider-dots_item" id="sld5" onclick="currentSlide(4,5)"></span>
            <span class="slider-dots_item" id="sld5" onclick="currentSlide(5,5)"></span>
        </div>
    </div>
    <div class="col">
        <h1 class="photos_title">Классика</h1>
        <div class="slider">
            <div class="item" id="sl6">
                <img src="assets/img/classic1.jpg" alt="" />
            </div>
            <div class="item" id="sl6">
                <img src="assets/img/classic2.jpg" alt="" />
            </div>
            <div class="item" id="sl6">
                <img src="assets/img/classic3.jpg" alt="" />
            </div>
            <div class="item" id="sl6">
                <img src="assets/img/classic4.jpg" alt="" />
            </div>
            <div class="item" id="sl6">
                <img src="assets/img/classic5.jpg" alt="" />
            </div>
            <a class="prev" onclick="minusSlide(6)">&#10094;</a>
            <a class="next" onclick="plusSlide(6)">&#10095;</a>
        </div>
        <div class="slider-dots">
            <span class="slider-dots_item" id="sld6" onclick="currentSlide(1,6)"></span>
            <span class="slider-dots_item" id="sld6" onclick="currentSlide(2,6)"></span>
            <span class="slider-dots_item" id="sld6" onclick="currentSlide(3,6)"></span>
            <span class="slider-dots_item" id="sld6" onclick="currentSlide(4,6)"></span>
            <span class="slider-dots_item" id="sld6" onclick="currentSlide(5,6)"></span>
        </div>
    </div>
</div>
<div class="catalog">
    <div class="col">
        <h1 class="photos_title">Малышам</h1>
        <div class="slider">
            <div class="item" id="sl3">
                <img src="assets/img/babys1.jpg" alt="" />
            </div>
            <div class="item" id="sl3">
                <img src="assets/img/babys2.jpg" alt="" />
            </div>
            <div class="item" id="sl3">
                <img src="assets/img/babys3.jpg" alt="" />
            </div>
            <div class="item" id="sl3">
                <img src="assets/img/babys4.jpg" alt="" />
            </div>
            <div class="item" id="sl3">
                <img src="assets/img/babys5.jpg" alt="" />
            </div>
            <a class="prev" onclick="minusSlide(3)">&#10094;</a>
            <a class="next" onclick="plusSlide(3)">&#10095;</a>
        </div>
        <div class="slider-dots">
            <span class="slider-dots_item" id="sld3" onclick="currentSlide(1,3)"></span>
            <span class="slider-dots_item" id="sld3" onclick="currentSlide(2,3)"></span>
            <span class="slider-dots_item" id="sld3" onclick="currentSlide(3,3)"></span>
            <span class="slider-dots_item" id="sld3" onclick="currentSlide(4,3)"></span>
            <span class="slider-dots_item" id="sld3" onclick="currentSlide(5,3)"></span>
        </div>
    </div>
    <div class="col">
        <h1 class="photos_title">Капкейки</h1>
        <div class="slider">
            <div class="item" id="sl4">
                <img src="assets/img/cup1.jpg" alt="" />
            </div>
            <div class="item" id="sl4">
                <img src="assets/img/cup2.jpg" alt="" />
            </div>
            <div class="item" id="sl4">
                <img src="assets/img/cup3.jpg" alt="" />
            </div>
            <div class="item" id="sl4">
                <img src="assets/img/cup4.jpg" alt="" />
            </div>
            <div class="item" id="sl4">
                <img src="assets/img/cup5.jpg" alt="" />
            </div>
            <a class="prev" onclick="minusSlide(4)">&#10094;</a>
            <a class="next" onclick="plusSlide(4)">&#10095;</a>
        </div>
        <div class="slider-dots">
            <span class="slider-dots_item" id="sld4" onclick="currentSlide(1,4)"></span>
            <span class="slider-dots_item" id="sld4" onclick="currentSlide(2,4)"></span>
            <span class="slider-dots_item" id="sld4" onclick="currentSlide(3,4)"></span>
            <span class="slider-dots_item" id="sld4" onclick="currentSlide(4,4)"></span>
            <span class="slider-dots_item" id="sld4" onclick="currentSlide(5,4)"></span>
        </div>
    </div>
</div>
<div class="catalog">
    <div class="col">
        <h1 class="photos_title">Мужские</h1>
        <div class="slider">
            <div class="item" id="sl7">
                <img src="assets/img/men1.jpg" alt="" />
            </div>
            <div class="item" id="sl7">
                <img src="assets/img/men2.jpg" alt="" />
            </div>
            <div class="item" id="sl7">
                <img src="assets/img/men3.jpg" alt="" />
            </div>
            <div class="item" id="sl7">
                <img src="assets/img/men4.jpg" alt="" />
            </div>
            <div class="item" id="sl7">
                <img src="assets/img/men5.jpg" alt="" />
            </div>
            <a class="prev" onclick="minusSlide(7)">&#10094;</a>
            <a class="next" onclick="plusSlide(7)">&#10095;</a>
        </div>
        <div class="slider-dots">
            <span class="slider-dots_item" id="sld7" onclick="currentSlide(1,7)"></span>
            <span class="slider-dots_item" id="sld7" onclick="currentSlide(2,7)"></span>
            <span class="slider-dots_item" id="sld7" onclick="currentSlide(3,7)"></span>
            <span class="slider-dots_item" id="sld7" onclick="currentSlide(4,7)"></span>
            <span class="slider-dots_item" id="sld7" onclick="currentSlide(5,7)"></span>
        </div>
    </div>
    <div class="col">
        <h1 class="photos_title">Женские</h1>
        <div class="slider">
            <div class="item" id="sl8">
                <img src="assets/img/wmen1.jpg" alt="" />
            </div>
            <div class="item" id="sl8">
                <img src="assets/img/wmen2.jpg" alt="" />
            </div>
            <div class="item" id="sl8">
                <img src="assets/img/wmen3.jpg" alt="" />
            </div>
            <div class="item" id="sl8">
                <img src="assets/img/wmen4.jpg" alt="" />
            </div>
            <div class="item" id="sl8">
                <img src="assets/img/wmen5.jpg" alt="" />
            </div>
            <a class="prev" onclick="minusSlide(8)">&#10094;</a>
            <a class="next" onclick="plusSlide(8)">&#10095;</a>
        </div>
        <div class="slider-dots">
            <span class="slider-dots_item" id="sld8" onclick="currentSlide(1,8)"></span>
            <span class="slider-dots_item" id="sld8" onclick="currentSlide(2,8)"></span>
            <span class="slider-dots_item" id="sld8" onclick="currentSlide(3,8)"></span>
            <span class="slider-dots_item" id="sld8" onclick="currentSlide(4,8)"></span>
            <span class="slider-dots_item" id="sld8" onclick="currentSlide(5,8)"></span>
        </div>
    </div>
</div>
<div class="catalog">
    <div class="col">
        <h1 class="photos_title">Другие сладости</h1>
        <div class="slider">
            <div class="item" id="sl10">
                <img src="assets/img/other1.jpg" alt="" />
            </div>
            <div class="item" id="sl10">
                <img src="assets/img/other2.jpg" alt="" />
            </div>
            <div class="item" id="sl10">
                <img src="assets/img/other3.jpg" alt="" />
            </div>
            <div class="item" id="sl10">
                <img src="assets/img/other4.jpg" alt="" />
            </div>
            <div class="item" id="sl10">
                <img src="assets/img/other5.jpg" alt="" />
            </div>
            <a class="prev" onclick="minusSlide(10)">&#10094;</a>
            <a class="next" onclick="plusSlide(10)">&#10095;</a>
        </div>
        <div class="slider-dots">
            <span class="slider-dots_item" id="sld10" onclick="currentSlide(1,10)"></span>
            <span class="slider-dots_item" id="sld10" onclick="currentSlide(2,10)"></span>
            <span class="slider-dots_item" id="sld10" onclick="currentSlide(3,10)"></span>
            <span class="slider-dots_item" id="sld10" onclick="currentSlide(4,10)"></span>
            <span class="slider-dots_item" id="sld10" onclick="currentSlide(5,10)"></span>
        </div>
    </div>
    <div class="col">
        <h1 class="photos_title">Новогодние</h1>
        <div class="slider">
            <div class="item" id="sl9">
                <img src="assets/img/ng1.jpg" alt="" />
            </div>
            <div class="item" id="sl9">
                <img src="assets/img/ng5.jpg" alt="" />
            </div>
            <div class="item" id="sl9">
                <img src="assets/img/ng3.jpg" alt="" />
            </div>
            <div class="item" id="sl9">
                <img src="assets/img/ng4.jpg" alt="" />
            </div>
            <div class="item" id="sl9">
                <img src="assets/img/ng2.jpg" alt="" />
            </div>
            <a class="prev" onclick="minusSlide(9)">&#10094;</a>
            <a class="next" onclick="plusSlide(9)">&#10095;</a>
        </div>
        <div class="slider-dots">
            <span class="slider-dots_item" id="sld9" onclick="currentSlide(1,9)"></span>
            <span class="slider-dots_item" id="sld9" onclick="currentSlide(2,9)"></span>
            <span class="slider-dots_item" id="sld9" onclick="currentSlide(3,9)"></span>
            <span class="slider-dots_item" id="sld9" onclick="currentSlide(4,9)"></span>
            <span class="slider-dots_item" id="sld9" onclick="currentSlide(5,9)"></span>
        </div>
    </div>
</div>
</div>
</main>
<?php include('tpl/footer.php');?>
</body>
</html>
