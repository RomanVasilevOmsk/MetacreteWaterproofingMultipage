<?php

require_once 'cpc.php';

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Metacrete - смеси для гидроизоляции</title>
    <link rel="stylesheet" href="css/app.css">
    @@include('partial/common/head.html')
</head>
<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TKKGPR8"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div class="l-page">
    <div class="l-page__inner header__wrapper">
        @@include('./partial/common/header.html')
    </div>

    <section class="key-objects">
        <div class="key-objects__inner">
            <h2 class="key-objects__title">Ключевые объекты</h2>
            <div class="objects-galery1" id="js-lightgallery1">
                <a class="objects-galery1__item-link" href="images/objects/tc-tetris.jpg" data-sub-html="#caption1">
                    <img class="objects-galery1__image" src="images/objects/tc-tetris.jpg" alt="">
                    <p class="objects-galery1__desc">ТЦ«Тетрис», г. Магнитогорск</p>
                </a>
                <a class="objects-galery1__item-link" href="images/objects/airport.jpg" data-sub-html="#caption2">
                    <img class="objects-galery1__image" src="images/objects/airport.jpg" alt="">
                    <p class="objects-galery1__desc">«Международный аэропорт », г. Уфа</p>
                </a>
                <a class="objects-galery1__item-link" href="images/objects/aerodrom.jpg" data-sub-html="#caption3">
                    <img class="objects-galery1__image" src="images/objects/aerodrom.jpg" alt="">
                    <p class="objects-galery1__desc">ФГУП ГУСДА при Спецстрое России, аэродром г. Чкаловский</p>
                </a>

                <a class="objects-galery1__item-link" href="images/objects/rosneft.jpg" data-sub-html="#caption4">
                    <img class="objects-galery1__image" src="images/objects/rosneft.jpg" alt="">
                    <p class="objects-galery1__desc">ОАО НК «Роснефть»</p>
                </a>

                <a class="objects-galery1__item-link" href="images/objects/kaztec.jpg" data-sub-html="#caption5">
                    <img class="objects-galery1__image" src="images/objects/kaztec.jpg" alt="">
                    <p class="objects-galery1__desc">Казанская ТЭЦ-2</p>
                </a>

                <a class="objects-galery1__item-link" href="images/objects/transneft.jpg" data-sub-html="#caption6">
                    <img class="objects-galery1__image" src="images/objects/transneft.jpg" alt="">
                    <p class="objects-galery1__desc">АО «Черномортранснефть»</p>
                </a>

                <a class="objects-galery1__item-link" href="images/objects/aerodrom_moz.jpg" data-sub-html="#caption7">
                    <img class="objects-galery1__image" src="images/objects/aerodrom_moz.jpg" alt="">
                    <p class="objects-galery1__desc">ФГУП ГУСДА при Спецстрое России, аэродром г. Моздок</p>
                </a>

                <a class="objects-galery1__item-link" href="images/objects/lukoil.jpg" data-sub-html="#caption8">
                    <img class="objects-galery1__image" src="images/objects/lukoil.jpg" alt="">
                    <p class="objects-galery1__desc">ООО «ЛУКОЙЛ- Нижегороднефтеоргсинтез»,г. Кстово</p>
                </a>

                <a class="objects-galery1__item-link" href="images/objects/yamal.jpg" data-sub-html="#caption9">
                    <img class="objects-galery1__image" src="images/objects/yamal.jpg" alt="">
                    <p class="objects-galery1__desc">ОАО «Ямал СПГ», полуостров Ямал</p>
                </a>
            </div>

            <div id="caption1" class="caption">
                <h2 class="caption__title">Торговый центр «Тетрис», г. Магнитогорск</h2>
                <p class="caption__desc">Подливка под опорную часть колонн, гидроизоляция фундаментных блоков, заполнение межконструкционного пространства перекрытий</p>
                <p class="caption__inner-desc"><span class="caption__inner-title">Материал:&nbsp; </span>METACRETE Grand 17, METACRETE Hydrostop</p>
            </div>

            <div id="caption2" class="caption">
                <h2 class="caption__title">АО «Международный аэропорт «Уфа», г. Уфа</h2>
                <p class="caption__desc">Ремонт и восстановление несущих конструкций здания Международного аэропорта "Уфа"</p>
                <p class="caption__inner-desc"><span class="caption__inner-title">Материал:&nbsp; </span>METACRETE Grand 15</p>
            </div>
            <div id="caption3" class="caption">
                <h2 class="caption__title">ФГУП ГУСДА при Спецстрое России, аэродром г. Чкаловский</h2>
                <p class="caption__desc">Ремонт взлётно-посадочной полосы и рулевой дорожки</p>
                <p class="caption__inner-desc"><span class="caption__inner-title">Материал:&nbsp; </span>METACRETE Grand 15Т, METACRETE Epoxy 24</p>
            </div>

            <div id="caption4" class="caption">
                <h2 class="caption__title">ОАО НК «Роснефть»</h2>
                <p class="caption__desc">Ремонт дорожного покрытия для обслуживания трубопроводов</p>
                <p class="caption__inner-desc"><span class="caption__inner-title">Материал:&nbsp; </span>METACRETE Grand Fast</p>
            </div>

            <div id="caption5" class="caption">
                <h2 class="caption__title">«Казанская ТЭЦ-2», г. Казань</h2>
                <p class="caption__desc">Ремонт несущих конструкций градирни</p>
                <p class="caption__inner-desc"><span class="caption__inner-title">Материал:&nbsp; </span>METACRETE Grand 10, METACRETE Grand 15</p>
            </div>

            <div id="caption6" class="caption">
                <h2 class="caption__title">АО «Черномортранснефть» производственная площадка «Грушовая»</h2>
                <p class="caption__desc">Подливка под опорную часть колонн, гидроизоляция фундаментных блоков, заполнение межконструкционного пространства перекрытий</p>
                <p class="caption__inner-desc"><span class="caption__inner-title">Материал:&nbsp; </span>METACRETE Grand 17, METACRETE Hydrostop</p>
            </div>

            <div id="caption7" class="caption">
                <h2 class="caption__title">ФГУП ГУСДА при Спецстрое России, аэродром г. Моздок</h2>
                <p class="caption__desc">Ремонт взлётно-посадочной полосы и рулевой дорожки</p>
                <p class="caption__inner-desc"><span class="caption__inner-title">Материал:&nbsp; </span>METACRETE Grand 15Т, METACRETE Epoxy 24</p>
            </div>

            <div id="caption8" class="caption">
                <h2 class="caption__title">ООО «ЛУКОЙЛ-Нижегороднефтеоргсинтез», г. Кстово, Нижегородская область</h2>
                <p class="caption__desc">Конструкционный ремонт железобетонных конструкций, устройство фундаментов для насосов станции каталитического крекинга</p>
                <p class="caption__inner-desc"><span class="caption__inner-title">Материал:&nbsp; </span>METACRETE Grand 15Т, METACRETE Grand 10Т, METACRETE Grand 15L</p>
            </div>

            <div id="caption9" class="caption">
                <h2 class="caption__title">ОАО «Ямал СПГ», полуостров Ямал</h2>
                <p class="caption__desc">Ремонт дорожного и аэродромного полотна, обслуживающего газопровод проекта "Ямал СПГ"</p>
                <p class="caption__inner-desc"><span class="caption__inner-title">Материал:&nbsp; </span>METACRETE Grand Fast</p>
            </div>

        </div>
    </section>

    <div class="l-page__footer">
        @@include('./partial/common/footer.html')
    </div>
</div>
@@include('partial/common/modal.html')


<link rel="stylesheet" href="css/vendor.css">
<script src="https://code.jquery.com/jquery-2.2.2.min.js" integrity="sha256-36cp2Co+/62rEAAYHLmRCPIych47CvdM+uTBJwSzWjI=" crossorigin="anonymous"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCPbn32_WlBQp_zLSXAcotipuI8xFcenEQ" ></script>
<script  src="js/vendor.min.js"></script>
<script src="js/app.js"></script>
<script>
    (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-TKKGPR8');
</script>

</body>
</html>