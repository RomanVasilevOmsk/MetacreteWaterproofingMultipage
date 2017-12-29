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

    <div class="l-page__container">
        @@include('./partial/designation-ico.html')
    </div>

    <div class="l-page__container">
        @@include('./partial/catalog-title.html')
    </div>
<section class="catalog">
    <div class="catalog__wrapper">
        <div class="catalog__first-block catalog__item wow fadeIn">
            <h3 class="catalog__block-title">Жесткая гидроизоляция</h3>
            <div class="catalog__content js-catalog__content" id="question-1">
                <div class="catalog__content-item wow fadeIn">
                    <h3 class="catalog__title">Metacrete Hydrostop TR</h3>
                    <div class="catalog__product-wrapper">
                        <div class="catalog__left-block catalog__left-block--small">
                            <div class="catalog__ico-container">
                                <img class="catalog__ico-img" src="data:../images/base64/designation-ico/designation-ico1.png;base64,iVBORw0KGgoAAAANSUhEUgAAAEYAAABGCAMAAABG8BK2AAAArlBMVEVHcEyVl5qVl5uVl5uVl5uVl5uVl5uVl5uVl5qVl5uVl5uVl5uVl5uVl5uVl5uVl5uVl5uVl5uUl5qVl5uVl5qVl5uVl5uVl5uVl5uVl5qVl5v///+WmJyDh4qAhIeXmZ2Mj5J9gYSJjI+Pkpbj5OSxs7bd3t/FxseGiY2foaTQ0tOWmJuqra/Mzc55fYCTlZjU1dbZ2tu5ur1vc3ekp6rw8PHq6+z5+fnAwsOanKBBEOBEAAAAGXRSTlMAUJUfnxLW8/J5hLgtqWC+bT0I3cnr9uXnWBIZBgAABKRJREFUWMONWIla6joQLggUFEVFPWfSNN0AylpA9Oj7v9ht0zSZLC03nwJd8ueffRLPs8awN+k/jMa+Pcb+fDaY9O68m2PYG/iEAOkcj0/DbpDJO6HGHNC+xMXHfQel57F4HVyEEF71P2kBmb6huTfEql6Yv7hQnhAG2CTq2zq6g9C9yR9aSOAxaEcBcwI4oWr1PXZwke9hGEsiB5+eZtY2I4ELB+nnTl8M2tQE4HhD2WukbkZZyFha+SBioM82vOJDmhqh5PHlsL6GBbUlBMMfGv79GuVVoexS8h2UY51kVAgK2H3B6QF1XEzEEkBIES4CPtbHjMq54OAkmQIQbvXXDwUdbwIxaj6NCOCym7pR0emBEjffBxKH8xHyA4BmNUO45xLmEWHHv0GA+SjPA50IaKRGZYrRcNk2MPgYzgOmM/GvaeXAyjt3Wb5COAyzB5eGhN6eGzsJ9UQpQzjLsDPjSN1D3xvoThWlocJZhHArd9VAM+/BiGXMZ5EX7mn60gAjb26+gPgskjhyJi3TdH+9sZU5S5yzwNmWOCAXdeR1MXzPN7wJOM5Ww7FzswPGzt9RHO5/ljxIt3mh88f+IzVRw5ghDBRydsy+KpwLa+6Do2TVRgchlJlouclY8c3FIu0ZtHlUw2BHRinsWAXqgZU/KcnDkGvbinL+53tjS8MSM1wKmChl1/MJYtpWvjgbu9jXqwgYWrDswMWjSn+6soRQjnwr2YR5suTKDjb5zqJeX/u1+4ETi8OsP/eNM56OVE/p8k0nTGNMDrP4PMhQ5XRUOlCCjT2/0TZYOuIwweoocc5HKlE0TaJgsBRNY8brxEnx2eQUO5AsP74KTbO0RXm8SVY1ThNi58SddMaeTxxBBRBlCTkHP581zvFb4PyW2oEOGL3VorswvPzjduI4mz2i4+jKxo3faEtEcbIR5bPm87vH2jHiuHY/qx+hkMQHVGbW3xf21VyuGMZo6EgVK7AoY/svVR2CbcrihbrchFTrVEALBuWSBaIiUjK+ODOwK5WvWQqU07UPTseI4kooI7PFv6d/XTArZtQYqISaNzANWpSF5LLowLli7dQ/3r1ZhacFyA5ilm4OX20w3JV1mJEqvpgRLXKW7duEuyLt1JNmenuOpc5CFrmFOydmUh54PdKW9HekFO768+2mAyLlQN2YDF2ds3ToIk/i/dYUbpUQXEqBTL2qpXA3hgIpC5Pocjbp7PCMuWiuNQgATU1Q5S+2WS90OijN0WrfMPwf27kdSZN0v1U+sM9xJ8f76z4h+vpOndMiZPHyLNR0wmlwVm93DVuD23RQ+UAY/SysrnDqqW4fdULKaqg/4p/cwa/rwzJFt+UO793a6phSqk9apIyFaqdE4FVunUGvpmC0RaAjAm4mSA/t44lde9QFSIYgdy1yqT7ebA6g4zwBXP2+eDTTt76Prs0S2O2l3tLCm7kRH+gZFkyd2J0aEPJgHwtMuto7h08C0fXSjJc/RGvobh01+E/uI5PXe/tIAZA/grZRGLQfBU0H7vbNkgweXjrPk+4mb7IHAucRQZXB76e3j7emT+UJ2Z+xfjZW/lcff0ez/rODyH8nesW91dgEYwAAAABJRU5ErkJggg==" width="72" height="72" alt="designation-ico"/>
                                <img class="catalog__ico-img" src="data:../images/base64/designation-ico/designation-ico8.png;base64,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" width="72" height="72" alt="designation-ico"/>
                            </div>
                            <div class="catalog__img-wrapper">
                                <img class="catalog__img"  src="./images/product-img/product-img1.jpg" alt="catalog-ico"/>
                            </div>
                        </div>
                        <div class="catalog__right-block catalog__right-block--big">
                            <p class="catalog__desc-top">Проникающий гидроизоляционный материал на цементной основе обмазочного типа, модифицировнный специальными химическими добавками.</p>
                            <h4 class="catalog__table-title">технические характеристики</h4>
                            <table class="catalog__table" cellspacing="0" cellpadding="5">
                                <tr>
                                    <td valign="top">Внешний вид</td>
                                    <td width="35%" valign="top">Сухая смесь</td>
                                </tr>
                                <tr>
                                    <td valign="top">Насыпная плотность</td>
                                    <td valign="top">1300–1400 кг/м²</td>
                                </tr>
                                <tr>
                                    <td valign="top">В/Т</td>
                                    <td valign="top">7,0–8,3 л/25 кг</td>
                                </tr>
                                <tr>
                                    <td valign="top">Повышение марки по
                                        водонепроницаемости бетона</td>
                                    <td valign="top">Минимум 3 ступени</td>
                                </tr>
                                <tr>
                                    <td valign="top">Снижение водопоглощения бетона,
                                        обработанного Metacrete Hydrostop TR</td>
                                    <td valign="top">На 45–50 %</td>
                                </tr>
                                <tr>
                                    <td valign="top">Водопоглощение при капилярном подсосе </td>
                                    <td valign="top">Не более 0,2 кг/(м²·ч⁰,⁵)</td>
                                </tr>
                                <tr>
                                    <td valign="top">Контакт с питьевой водой</td>
                                    <td valign="top">Да</td>
                                </tr>

                            </table>
                        </div>
                    </div>
                    <div class="catalog__desc-wrapper">
                        <div class="catalog__desc-bottom-wrapper">
                            <h4 class="catalog__desc-bottom-title">описание</h4>
                            <p class="catalog__desc-bottom">METACRETE Hydrostop TR представляет собой сухую смесь, готовую к приме-
                                нению. Состав препятствует просачиванию воды через бетонные конструкции,
                                благодаря образованию труднорастворимых кристаллических соединений на
                                поверхности бетонных конструкций.
                            </p>
                        </div>
                        <div class="catalog__bottom-wrapper">
                            <a class="button button-catalog js-show-modal" href="#js-modal">Узнать цену</a>
                        </div>
                    </div>
                    <div class="catalog__product-accordeon">
                        <div class="catalog__product-item-wrapper">
                            <div class="catalog__product-item">
                                <a href="#catalog__product1" class="catalog__product-item-title js-catalog__product-item-title">Применение</a>
                                <img class="catalog__ico" href="#question-1" src="data:../images/base64/active-block.png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAMCAYAAABm+U3GAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA3ZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTM4IDc5LjE1OTgyNCwgMjAxNi8wOS8xNC0wMTowOTowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDoyZjhiNmZiZS1kOTFhLTdjNDUtODhiMS05ZWQxNjM3Zjc4NTgiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NDQ4MjUwNDBDODMyMTFFN0FBMzNDREIwQ0U3REI1RDkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NDQ4MjUwM0ZDODMyMTFFN0FBMzNDREIwQ0U3REI1RDkiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTcgKFdpbmRvd3MpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6N2JhNzRkYWYtMWQwZC0yZDQ2LTg0NGEtNTNiNjEyNDRkNzQxIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjJmOGI2ZmJlLWQ5MWEtN2M0NS04OGIxLTllZDE2MzdmNzg1OCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Ph5K7hIAAADESURBVHjaYmAgDvAB8QEg3grEXAxUAtxAfBiI/0HxDiBmp9RQLqhLQQZmAXE+EP+HupyNEkN3Qw3KRxIvgoptIMdwdqiX/0MNQgdVULk1QMxCrKFsUK+CNFbgUVcPVbMSiJmJMXQDVEMdEY5ogapdgs9wFqjXQAobSQi2bqie+UDMiC7JDPUSSEE7GRHdD9U7G9lwZqhXQBK9ZKYgkGFToWZMhRk+FyowgcI0zwh1McisPpDAUyCegi18yDQc5NDbAAEGAFv4LzpLbqyzAAAAAElFTkSuQmCC" width="22"
                                     height="125" alt="catalog-ico"/>
                                <div class="catalog__product-content js-catalog__product-content" id="catalog__product1">
                                    <p class="catalog__product-desc-item">Применяется для предотвращения просачивания воды:</p>
                                    <ul class="catalog__product-list">
                                        <li class="catalog__product-list-item">―	из сооружений водоподготовки и водоочистки;</li>
                                        <li class="catalog__product-list-item">―	из плотин, дамб, резервуаров для хранения воды, систем мелиорации и ирригации;</li>
                                        <li class="catalog__product-list-item">―	из бассейнов;</li>
                                        <li class="catalog__product-list-item">―	в подвальные помещения и фундаменты гражданских и промышленных объектов;</li>
                                        <li class="catalog__product-list-item">―	в колодцы, шахты, тоннели.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="catalog__product-item">
                                <a href="#catalog__product2" class="catalog__product-item-title js-catalog__product-item-title">Упаковка</a>
                                <img class="catalog__ico" href="#question-1" src="data:../images/base64/active-block.png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAMCAYAAABm+U3GAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA3ZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTM4IDc5LjE1OTgyNCwgMjAxNi8wOS8xNC0wMTowOTowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDoyZjhiNmZiZS1kOTFhLTdjNDUtODhiMS05ZWQxNjM3Zjc4NTgiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NDQ4MjUwNDBDODMyMTFFN0FBMzNDREIwQ0U3REI1RDkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NDQ4MjUwM0ZDODMyMTFFN0FBMzNDREIwQ0U3REI1RDkiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTcgKFdpbmRvd3MpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6N2JhNzRkYWYtMWQwZC0yZDQ2LTg0NGEtNTNiNjEyNDRkNzQxIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjJmOGI2ZmJlLWQ5MWEtN2M0NS04OGIxLTllZDE2MzdmNzg1OCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Ph5K7hIAAADESURBVHjaYmAgDvAB8QEg3grEXAxUAtxAfBiI/0HxDiBmp9RQLqhLQQZmAXE+EP+HupyNEkN3Qw3KRxIvgoptIMdwdqiX/0MNQgdVULk1QMxCrKFsUK+CNFbgUVcPVbMSiJmJMXQDVEMdEY5ogapdgs9wFqjXQAobSQi2bqie+UDMiC7JDPUSSEE7GRHdD9U7G9lwZqhXQBK9ZKYgkGFToWZMhRk+FyowgcI0zwh1McisPpDAUyCegi18yDQc5NDbAAEGAFv4LzpLbqyzAAAAAElFTkSuQmCC" width="22"
                                     height="125" alt="catalog-ico"/>
                                <div class="catalog__product-content js-catalog__product-content" id="catalog__product2">
                                    <p class="catalog__product-desc-item">METACRETE Hydrostop TR выпускается в герметичных ведрах по 12,5 кг и во влагонепроницаемых мешках по 25 кг.</p>
                                </div>
                            </div>
                            <div class="catalog__product-item">
                                <a href="#catalog__product3" class="catalog__product-item-title js-catalog__product-item-title">Расход</a>
                                <img class="catalog__ico" href="#question-1" src="data:../images/base64/active-block.png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAMCAYAAABm+U3GAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA3ZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTM4IDc5LjE1OTgyNCwgMjAxNi8wOS8xNC0wMTowOTowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDoyZjhiNmZiZS1kOTFhLTdjNDUtODhiMS05ZWQxNjM3Zjc4NTgiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NDQ4MjUwNDBDODMyMTFFN0FBMzNDREIwQ0U3REI1RDkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NDQ4MjUwM0ZDODMyMTFFN0FBMzNDREIwQ0U3REI1RDkiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTcgKFdpbmRvd3MpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6N2JhNzRkYWYtMWQwZC0yZDQ2LTg0NGEtNTNiNjEyNDRkNzQxIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjJmOGI2ZmJlLWQ5MWEtN2M0NS04OGIxLTllZDE2MzdmNzg1OCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Ph5K7hIAAADESURBVHjaYmAgDvAB8QEg3grEXAxUAtxAfBiI/0HxDiBmp9RQLqhLQQZmAXE+EP+HupyNEkN3Qw3KRxIvgoptIMdwdqiX/0MNQgdVULk1QMxCrKFsUK+CNFbgUVcPVbMSiJmJMXQDVEMdEY5ogapdgs9wFqjXQAobSQi2bqie+UDMiC7JDPUSSEE7GRHdD9U7G9lwZqhXQBK9ZKYgkGFToWZMhRk+FyowgcI0zwh1McisPpDAUyCegi18yDQc5NDbAAEGAFv4LzpLbqyzAAAAAElFTkSuQmCC" width="22"
                                     height="125" alt="catalog-ico"/>
                                <div class="catalog__product-content js-catalog__product-content" id="catalog__product3">
                                    <p class="catalog__product-desc-item">Расход METACRETE Hydrostop TR на два слоя 1,5–2 кг/м².</p>
                                </div>
                            </div>
                            <div class="catalog__product-item">
                                <a href="#catalog__product4" class="catalog__product-item-title js-catalog__product-item-title">Подготовка основания</a>
                                <img class="catalog__ico" href="#question-1" src="data:../images/base64/active-block.png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAMCAYAAABm+U3GAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA3ZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTM4IDc5LjE1OTgyNCwgMjAxNi8wOS8xNC0wMTowOTowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDoyZjhiNmZiZS1kOTFhLTdjNDUtODhiMS05ZWQxNjM3Zjc4NTgiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NDQ4MjUwNDBDODMyMTFFN0FBMzNDREIwQ0U3REI1RDkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NDQ4MjUwM0ZDODMyMTFFN0FBMzNDREIwQ0U3REI1RDkiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTcgKFdpbmRvd3MpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6N2JhNzRkYWYtMWQwZC0yZDQ2LTg0NGEtNTNiNjEyNDRkNzQxIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjJmOGI2ZmJlLWQ5MWEtN2M0NS04OGIxLTllZDE2MzdmNzg1OCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Ph5K7hIAAADESURBVHjaYmAgDvAB8QEg3grEXAxUAtxAfBiI/0HxDiBmp9RQLqhLQQZmAXE+EP+HupyNEkN3Qw3KRxIvgoptIMdwdqiX/0MNQgdVULk1QMxCrKFsUK+CNFbgUVcPVbMSiJmJMXQDVEMdEY5ogapdgs9wFqjXQAobSQi2bqie+UDMiC7JDPUSSEE7GRHdD9U7G9lwZqhXQBK9ZKYgkGFToWZMhRk+FyowgcI0zwh1McisPpDAUyCegi18yDQc5NDbAAEGAFv4LzpLbqyzAAAAAElFTkSuQmCC" width="22"
                                     height="125" alt="catalog-ico"/>
                                <div class="catalog__product-content js-catalog__product-content" id="catalog__product4">
                                    <p class="catalog__product-desc-item catalog__product-desc-item--big">Основание должно быть очищено от
                                        масел, жиров, краски, грязи, плесени,
                                        средств по уходу за бетоном, и от других
                                        составов, препятствующих
                                        проникновению активных компонентов в
                                        бетон (кремнийорганические
                                        гидрофобизаторы, полимерцементные
                                        штукатурки).</p>
                                    <p class="catalog__product-desc-item catalog__product-desc-item--big">
                                        Слабый бетон и цементное молочко
                                        должны быть удалены металлической
                                        щеткой, легким перфоратором или
                                        водопескоструйной установкой, для
                                        вскрытия пор бетона. Вскрытие
                                        капиллярных каналов и пор бетона
                                        способствует лучшему проникновению
                                        METACRETE Hydrostop TR в
                                        обрабатываемую бетонную поверхность.
                                        Не допускается наличие активных
                                        протечек ремонтируемой поверхности.
                                    </p>
                                    <p class="catalog__product-desc-item catalog__product-desc-item--big">Перед нанесением METACRETE
                                        Hydrostop TR необходимо тщательно
                                        увлажнить ремонтируемую поверхность
                                        водой в течение 3-х часов, затем удалить
                                        излишки воды сжатым воздухом или
                                        ветошью.</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="catalog__content-item wow fadeIn">
                    <h3 class="catalog__title">Metacrete Hydrostop AT</h3>
                    <div class="catalog__product-wrapper">
                        <div class="catalog__left-block catalog__left-block--small">
                            <div class="catalog__ico-container">
                                <img class="catalog__ico-img" src="data:../images/base64/designation-ico/designation-ico1.png;base64,iVBORw0KGgoAAAANSUhEUgAAAEYAAABGCAMAAABG8BK2AAAArlBMVEVHcEyVl5qVl5uVl5uVl5uVl5uVl5uVl5uVl5qVl5uVl5uVl5uVl5uVl5uVl5uVl5uVl5uVl5uUl5qVl5uVl5qVl5uVl5uVl5uVl5uVl5qVl5v///+WmJyDh4qAhIeXmZ2Mj5J9gYSJjI+Pkpbj5OSxs7bd3t/FxseGiY2foaTQ0tOWmJuqra/Mzc55fYCTlZjU1dbZ2tu5ur1vc3ekp6rw8PHq6+z5+fnAwsOanKBBEOBEAAAAGXRSTlMAUJUfnxLW8/J5hLgtqWC+bT0I3cnr9uXnWBIZBgAABKRJREFUWMONWIla6joQLggUFEVFPWfSNN0AylpA9Oj7v9ht0zSZLC03nwJd8ueffRLPs8awN+k/jMa+Pcb+fDaY9O68m2PYG/iEAOkcj0/DbpDJO6HGHNC+xMXHfQel57F4HVyEEF71P2kBmb6huTfEql6Yv7hQnhAG2CTq2zq6g9C9yR9aSOAxaEcBcwI4oWr1PXZwke9hGEsiB5+eZtY2I4ELB+nnTl8M2tQE4HhD2WukbkZZyFha+SBioM82vOJDmhqh5PHlsL6GBbUlBMMfGv79GuVVoexS8h2UY51kVAgK2H3B6QF1XEzEEkBIES4CPtbHjMq54OAkmQIQbvXXDwUdbwIxaj6NCOCym7pR0emBEjffBxKH8xHyA4BmNUO45xLmEWHHv0GA+SjPA50IaKRGZYrRcNk2MPgYzgOmM/GvaeXAyjt3Wb5COAyzB5eGhN6eGzsJ9UQpQzjLsDPjSN1D3xvoThWlocJZhHArd9VAM+/BiGXMZ5EX7mn60gAjb26+gPgskjhyJi3TdH+9sZU5S5yzwNmWOCAXdeR1MXzPN7wJOM5Ww7FzswPGzt9RHO5/ljxIt3mh88f+IzVRw5ghDBRydsy+KpwLa+6Do2TVRgchlJlouclY8c3FIu0ZtHlUw2BHRinsWAXqgZU/KcnDkGvbinL+53tjS8MSM1wKmChl1/MJYtpWvjgbu9jXqwgYWrDswMWjSn+6soRQjnwr2YR5suTKDjb5zqJeX/u1+4ETi8OsP/eNM56OVE/p8k0nTGNMDrP4PMhQ5XRUOlCCjT2/0TZYOuIwweoocc5HKlE0TaJgsBRNY8brxEnx2eQUO5AsP74KTbO0RXm8SVY1ThNi58SddMaeTxxBBRBlCTkHP581zvFb4PyW2oEOGL3VorswvPzjduI4mz2i4+jKxo3faEtEcbIR5bPm87vH2jHiuHY/qx+hkMQHVGbW3xf21VyuGMZo6EgVK7AoY/svVR2CbcrihbrchFTrVEALBuWSBaIiUjK+ODOwK5WvWQqU07UPTseI4kooI7PFv6d/XTArZtQYqISaNzANWpSF5LLowLli7dQ/3r1ZhacFyA5ilm4OX20w3JV1mJEqvpgRLXKW7duEuyLt1JNmenuOpc5CFrmFOydmUh54PdKW9HekFO768+2mAyLlQN2YDF2ds3ToIk/i/dYUbpUQXEqBTL2qpXA3hgIpC5Pocjbp7PCMuWiuNQgATU1Q5S+2WS90OijN0WrfMPwf27kdSZN0v1U+sM9xJ8f76z4h+vpOndMiZPHyLNR0wmlwVm93DVuD23RQ+UAY/SysrnDqqW4fdULKaqg/4p/cwa/rwzJFt+UO793a6phSqk9apIyFaqdE4FVunUGvpmC0RaAjAm4mSA/t44lde9QFSIYgdy1yqT7ebA6g4zwBXP2+eDTTt76Prs0S2O2l3tLCm7kRH+gZFkyd2J0aEPJgHwtMuto7h08C0fXSjJc/RGvobh01+E/uI5PXe/tIAZA/grZRGLQfBU0H7vbNkgweXjrPk+4mb7IHAucRQZXB76e3j7emT+UJ2Z+xfjZW/lcff0ez/rODyH8nesW91dgEYwAAAABJRU5ErkJggg==" width="72" height="72" alt="designation-ico"/>
                                <img class="catalog__ico-img" src="data:../images/base64/designation-ico/designation-ico11.png;base64,iVBORw0KGgoAAAANSUhEUgAAAEYAAABGCAYAAABxLuKEAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA3ZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTM4IDc5LjE1OTgyNCwgMjAxNi8wOS8xNC0wMTowOTowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDoyZjhiNmZiZS1kOTFhLTdjNDUtODhiMS05ZWQxNjM3Zjc4NTgiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6QUEyMzk3QjdDOTBGMTFFN0E2NDdEMjZCOThDODVGNDkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6QUEyMzk3QjZDOTBGMTFFN0E2NDdEMjZCOThDODVGNDkiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTcgKFdpbmRvd3MpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6ODc1MGE5NDItZmRkYy01MTQ0LWE1NDgtMDQ0NmUxYzhlNjk0IiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjJmOGI2ZmJlLWQ5MWEtN2M0NS04OGIxLTllZDE2MzdmNzg1OCIv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" width="70" height="70" alt="designation-ico"/>
                                <img class="catalog__ico-img" src="data:../images/base64/designation-ico/designation-ico9.png;base64,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" width="70" height="70" alt="designation-ico"/>
                            </div>
                            <div class="catalog__img-wrapper">
                                <img class="catalog__img catalog__img--2" src="./images/product-img/product-img2.jpg" alt="catalog-ico"/>
                            </div>
                        </div>
                        <div class="catalog__right-block catalog__right-block--big">
                            <p class="catalog__desc-top">Безусадочный гидроизоляционный материал на цементной основе обма-
                                зочного типа, модифицированный полимерами, содержащий минеральные
                                наполнители и специальные химические добавки.</p>
                            <h4 class="catalog__table-title">технические характеристики</h4>
                            <table class="catalog__table" cellspacing="0" cellpadding="5">
                                <tr>
                                    <td valign="top">Внешний вид</td>
                                    <td width="35%" valign="top">Серый порошок</td>
                                </tr>
                                <tr>
                                    <td valign="top">Расход воды</td>
                                    <td valign="top">5,0–6,25 л/25 кг</td>
                                </tr>
                                <tr>
                                    <td valign="top">Работопригоднось</td>
                                    <td valign="top">7,0–8,3 л/25 кг</td>
                                </tr>
                                <tr>
                                    <td valign="top">Прочночть на сжатии<br>
                                        через 7 суток<br>
                                        через 28 суток</td>
                                    <td valign="top"><br>25 МПа<br>
                                        40 МПа</td>
                                </tr>
                                <tr>
                                    <td valign="top">Марка по водонепроницаемости на бетоне<br>
                                        при позитивном давлении<br>
                                        при негативном давлении</td>
                                    <td valign="top"><br>W16<br>
                                        W2</td>
                                </tr>
                                <tr>
                                    <td valign="top">Снижение водопоглощения бетона,
                                        обработанного Metacrete Hydrostop AT</td>
                                    <td valign="top">На 45–50 %</td>
                                </tr>
                                <tr>
                                    <td valign="top">Водопоглощение при капилярном подсосе </td>
                                    <td valign="top">Не более 0,2 кг/(м²·ч⁰,⁵)</td>
                                </tr>
                                <tr>
                                    <td valign="top">Прочность сцепления с бетонным основанием
                                        через 28 суток</td>
                                    <td valign="top">2,0 МПа</td>
                                </tr>
                                <tr>
                                    <td valign="top">Морозостойкость контактной зоны после
                                        50 циклов замораживания/оттаивания</td>
                                    <td valign="top">Не менее 2,0 МПа</td>
                                </tr>
                                <tr>
                                    <td valign="top">Контакт с питьевой водой</td>
                                    <td valign="top">Да</td>
                                </tr>

                            </table>
                        </div>
                    </div>
                    <div class="catalog__desc-wrapper">
                        <div class="catalog__desc-bottom-wrapper">
                            <h4 class="catalog__desc-bottom-title">описание</h4>
                            <p class="catalog__desc-bottom">METACRETE Hydrostop AT представляет собой сухую смесь, готовую к приме-
                                нению. При смешивании с водой образует раствор тиксотропной консистенции.
                                METACRETE Hydrostop AT обладает высокими показателями по водонепрони-
                                цаемости, адгезии к бетону. Позволяет сохранить паропроницаемость бетона.
                            </p>
                        </div>
                        <div class="catalog__bottom-wrapper">
                            <a class="button button-catalog js-show-modal" href="#js-modal">Узнать цену</a>
                        </div>
                    </div>
                    <div class="catalog__product-accordeon">
                        <div class="catalog__product-item-wrapper">
                            <div class="catalog__product-item">
                                <a href="#catalog__product5" class="catalog__product-item-title js-catalog__product-item-title">Применение</a>
                                <img class="catalog__ico" href="#question-1" src="data:../images/base64/active-block.png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAMCAYAAABm+U3GAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA3ZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTM4IDc5LjE1OTgyNCwgMjAxNi8wOS8xNC0wMTowOTowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDoyZjhiNmZiZS1kOTFhLTdjNDUtODhiMS05ZWQxNjM3Zjc4NTgiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NDQ4MjUwNDBDODMyMTFFN0FBMzNDREIwQ0U3REI1RDkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NDQ4MjUwM0ZDODMyMTFFN0FBMzNDREIwQ0U3REI1RDkiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTcgKFdpbmRvd3MpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6N2JhNzRkYWYtMWQwZC0yZDQ2LTg0NGEtNTNiNjEyNDRkNzQxIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjJmOGI2ZmJlLWQ5MWEtN2M0NS04OGIxLTllZDE2MzdmNzg1OCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Ph5K7hIAAADESURBVHjaYmAgDvAB8QEg3grEXAxUAtxAfBiI/0HxDiBmp9RQLqhLQQZmAXE+EP+HupyNEkN3Qw3KRxIvgoptIMdwdqiX/0MNQgdVULk1QMxCrKFsUK+CNFbgUVcPVbMSiJmJMXQDVEMdEY5ogapdgs9wFqjXQAobSQi2bqie+UDMiC7JDPUSSEE7GRHdD9U7G9lwZqhXQBK9ZKYgkGFToWZMhRk+FyowgcI0zwh1McisPpDAUyCegi18yDQc5NDbAAEGAFv4LzpLbqyzAAAAAElFTkSuQmCC" width="22"
                                     height="125" alt="catalog-ico"/>
                                <div class="catalog__product-content js-catalog__product-content" id="catalog__product5">
                                    <p class="catalog__product-desc-item">Применяется для предотвращения просачивания воды из бетонных конструкций:</p>
                                    <ul class="catalog__product-list">
                                        <li class="catalog__product-list-item">―	гидроизоляция и защита бетонных и железобетонных конструкций от разрушающего действия воды;</li>
                                        <li class="catalog__product-list-item">―	в гражданском строительстве для гидроизоляции фундаментных плит, монолитных и сборных ограждающих кон-
                                            струкций, бассейнов, подвальных помещений и т.п.;</li>
                                        <li class="catalog__product-list-item">―	гидроизоляция промышленных объектов различного назначения, таких как тоннели, шахты, градирни, силосы, под-
                                            порные стенки, мостовые и портовые конструкции;</li>
                                        <li class="catalog__product-list-item">―	обеспечение водонепроницаемости конструкций гидротехнических сооружений, таких как плотины, дамбы, ком-
                                            плексы водоподготовки и водоочистители, резервуары для хранения воды, системы мелиорации и ирригации.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="catalog__product-item">
                                <a href="#catalog__product6" class="catalog__product-item-title js-catalog__product-item-title">Упаковка</a>
                                <img class="catalog__ico" href="#question-1" src="data:../images/base64/active-block.png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAMCAYAAABm+U3GAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA3ZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTM4IDc5LjE1OTgyNCwgMjAxNi8wOS8xNC0wMTowOTowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDoyZjhiNmZiZS1kOTFhLTdjNDUtODhiMS05ZWQxNjM3Zjc4NTgiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NDQ4MjUwNDBDODMyMTFFN0FBMzNDREIwQ0U3REI1RDkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NDQ4MjUwM0ZDODMyMTFFN0FBMzNDREIwQ0U3REI1RDkiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTcgKFdpbmRvd3MpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6N2JhNzRkYWYtMWQwZC0yZDQ2LTg0NGEtNTNiNjEyNDRkNzQxIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjJmOGI2ZmJlLWQ5MWEtN2M0NS04OGIxLTllZDE2MzdmNzg1OCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Ph5K7hIAAADESURBVHjaYmAgDvAB8QEg3grEXAxUAtxAfBiI/0HxDiBmp9RQLqhLQQZmAXE+EP+HupyNEkN3Qw3KRxIvgoptIMdwdqiX/0MNQgdVULk1QMxCrKFsUK+CNFbgUVcPVbMSiJmJMXQDVEMdEY5ogapdgs9wFqjXQAobSQi2bqie+UDMiC7JDPUSSEE7GRHdD9U7G9lwZqhXQBK9ZKYgkGFToWZMhRk+FyowgcI0zwh1McisPpDAUyCegi18yDQc5NDbAAEGAFv4LzpLbqyzAAAAAElFTkSuQmCC" width="22"
                                     height="125" alt="catalog-ico"/>
                                <div class="catalog__product-content js-catalog__product-content" id="catalog__product6">
                                    <p class="catalog__product-desc-item">METACRETE Hydrostop AT выпускается в герметичных ведрах по 12,5 кг и во влагонепроницаемых мешках по 25 кг.</p>
                                </div>
                            </div>
                            <div class="catalog__product-item">
                                <a href="#catalog__product7" class="catalog__product-item-title js-catalog__product-item-title">Расход</a>
                                <img class="catalog__ico" href="#question-1" src="data:../images/base64/active-block.png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAMCAYAAABm+U3GAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA3ZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTM4IDc5LjE1OTgyNCwgMjAxNi8wOS8xNC0wMTowOTowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDoyZjhiNmZiZS1kOTFhLTdjNDUtODhiMS05ZWQxNjM3Zjc4NTgiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NDQ4MjUwNDBDODMyMTFFN0FBMzNDREIwQ0U3REI1RDkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NDQ4MjUwM0ZDODMyMTFFN0FBMzNDREIwQ0U3REI1RDkiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTcgKFdpbmRvd3MpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6N2JhNzRkYWYtMWQwZC0yZDQ2LTg0NGEtNTNiNjEyNDRkNzQxIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjJmOGI2ZmJlLWQ5MWEtN2M0NS04OGIxLTllZDE2MzdmNzg1OCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Ph5K7hIAAADESURBVHjaYmAgDvAB8QEg3grEXAxUAtxAfBiI/0HxDiBmp9RQLqhLQQZmAXE+EP+HupyNEkN3Qw3KRxIvgoptIMdwdqiX/0MNQgdVULk1QMxCrKFsUK+CNFbgUVcPVbMSiJmJMXQDVEMdEY5ogapdgs9wFqjXQAobSQi2bqie+UDMiC7JDPUSSEE7GRHdD9U7G9lwZqhXQBK9ZKYgkGFToWZMhRk+FyowgcI0zwh1McisPpDAUyCegi18yDQc5NDbAAEGAFv4LzpLbqyzAAAAAElFTkSuQmCC" width="22"
                                     height="125" alt="catalog-ico"/>
                                <div class="catalog__product-content js-catalog__product-content" id="catalog__product7">
                                    <p class="catalog__product-desc-item">Расход сухой смеси METACRETE Hydrostop AT при толщине слоя в 5 мм составляет 6,5 кг/м². В зависимости от шероховатости и впитывающей способности поверхности расход может меняться.</p>
                                </div>
                            </div>
                            <div class="catalog__product-item">
                                <a href="#catalog__product8" class="catalog__product-item-title js-catalog__product-item-title">Подготовка основания</a>
                                <img class="catalog__ico" href="#question-1" src="data:../images/base64/active-block.png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAMCAYAAABm+U3GAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA3ZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTM4IDc5LjE1OTgyNCwgMjAxNi8wOS8xNC0wMTowOTowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDoyZjhiNmZiZS1kOTFhLTdjNDUtODhiMS05ZWQxNjM3Zjc4NTgiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NDQ4MjUwNDBDODMyMTFFN0FBMzNDREIwQ0U3REI1RDkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NDQ4MjUwM0ZDODMyMTFFN0FBMzNDREIwQ0U3REI1RDkiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTcgKFdpbmRvd3MpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6N2JhNzRkYWYtMWQwZC0yZDQ2LTg0NGEtNTNiNjEyNDRkNzQxIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjJmOGI2ZmJlLWQ5MWEtN2M0NS04OGIxLTllZDE2MzdmNzg1OCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Ph5K7hIAAADESURBVHjaYmAgDvAB8QEg3grEXAxUAtxAfBiI/0HxDiBmp9RQLqhLQQZmAXE+EP+HupyNEkN3Qw3KRxIvgoptIMdwdqiX/0MNQgdVULk1QMxCrKFsUK+CNFbgUVcPVbMSiJmJMXQDVEMdEY5ogapdgs9wFqjXQAobSQi2bqie+UDMiC7JDPUSSEE7GRHdD9U7G9lwZqhXQBK9ZKYgkGFToWZMhRk+FyowgcI0zwh1McisPpDAUyCegi18yDQc5NDbAAEGAFv4LzpLbqyzAAAAAElFTkSuQmCC" width="22"
                                     height="125" alt="catalog-ico"/>
                                <div class="catalog__product-content js-catalog__product-content" id="catalog__product8">
                                    <p class="catalog__product-desc-item catalog__product-desc-item--big">Основание должно быть очищено от
                                        масел, жиров, краски, грязи, плесени,
                                        средств по уходу за бетоном.</p>
                                    <p class="catalog__product-desc-item catalog__product-desc-item--big">
                                        Слабый бетон и цементное молочко
                                        должны быть удалены металлической
                                        щеткой, перфоратором или
                                        водопескоструйной установкой, для
                                        придания шероховатой фактуры
                                        поверхности.
                                    </p>
                                    <p class="catalog__product-desc-item catalog__product-desc-item--big">Перед нанесением METACRETE
                                        Перед нанесением METACRETE
                                        Hydrostop AT необходимо тщательно
                                        увлажнить ремонтируемую поверхность
                                        водой в течение 3-х часов, затем удалить
                                        излишки воды сжатым воздухом или
                                        ветошью.</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="catalog__content-item wow fadeIn">
                    <h3 class="catalog__title">Metacrete Hydrostop Epoxy 24</h3>
                    <div class="catalog__product-wrapper">
                        <div class="catalog__left-block catalog__left-block--big">
                            <div class="catalog__ico-container">
                                <img class="catalog__ico-img" src="data:../images/base64/designation-ico/designation-ico2.png;base64,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" width="70" height="70" alt="designation-ico"/>
                                <img class="catalog__ico-img" src="data:../images/base64/designation-ico/designation-ico5.png;base64,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" width="70" height="70" alt="designation-ico"/>
                            </div>
                            <div class="catalog__img-wrapper">
                                <img class="catalog__img catalog__img--3" src="./images/product-img/product-img3.jpg" alt="catalog-ico"/>
                            </div>
                        </div>
                        <div class="catalog__right-block catalog__right-block--small">
                            <p class="catalog__desc-top">Эпоксидное трехкомпонентное низковязкое гидроизоляцион-
                                ное покрытие на основе водных дисперсий эпоксидных олиго-
                                меров для защиты железобетонных конструкций с выравни-
                                вающими свойствами.</p>
                            <h4 class="catalog__table-title">технические характеристики</h4>
                            <table class="catalog__table catalog__table--min" cellspacing="0" cellpadding="5">
                                <tr>
                                    <td valign="top">Внешний вид<br>
                                        Компонент А<br>
                                        Компонент В<br>
                                        Коспонент С</td>
                                    <td width="35%" valign="top"><br>Бесцветная жидкость
                                        <br>Жидкость<br>Порошок серого цвета</td>
                                </tr>
                                <tr>
                                    <td valign="top">Работопригодность при 20 °С</td>
                                    <td valign="top">20–30 минут</td>
                                </tr>
                                <tr>
                                    <td valign="top">Время отвердения при: 20 °С<br>
                                        10 °С</td>
                                    <td valign="top">8–10 часов<br>
                                        24 ч</td>
                                </tr>
                                <tr>
                                    <td valign="top">Температура применения</td>
                                    <td valign="top">От +5 °С до +30 °С</td>
                                </tr>
                                <tr>
                                    <td valign="top">Плотность</td>
                                    <td valign="top">1100–1200 кг/м³</td>
                                </tr>
                                <tr>
                                    <td valign="top">Время полного набора прочности</td>
                                    <td valign="top">5–7 суток</td>
                                </tr>
                                <tr>
                                    <td valign="top">Вязкость смеси по Брукфильду</td>
                                    <td valign="top">200–400 мПа·с</td>
                                </tr>
                                <tr>
                                    <td valign="top">Адгезионная прочность</td>
                                    <td valign="top">Более 3 МПа
                                        (разрушение по бетону)</td>
                                </tr>

                            </table>
                        </div>
                    </div>
                    <div class="catalog__desc-wrapper">
                        <div class="catalog__desc-bottom-wrapper">
                            <h4 class="catalog__desc-bottom-title">описание</h4>
                            <p class="catalog__desc-bottom">METACRETE Hydrostop Epoxy 24 представляет собой трехкомпонентное низко-
                                вязкое гидроизоляционное жесткое покрытие с хорошей адгезией к бетону и
                                металлу. В процессе полимеризации образуется защитное покрытие, обладающее гидроизоляционными свойствами.
                            </p>
                        </div>
                        <div class="catalog__bottom-wrapper">
                            <a class="button button-catalog js-show-modal" href="#js-modal">Узнать цену</a>
                        </div>
                    </div>
                    <div class="catalog__product-accordeon">
                        <div class="catalog__product-item-wrapper">
                            <div class="catalog__product-item">
                                <a href="#catalog__product9" class="catalog__product-item-title js-catalog__product-item-title">Применение</a>
                                <img class="catalog__ico" href="#question-1" src="data:../images/base64/active-block.png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAMCAYAAABm+U3GAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA3ZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTM4IDc5LjE1OTgyNCwgMjAxNi8wOS8xNC0wMTowOTowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDoyZjhiNmZiZS1kOTFhLTdjNDUtODhiMS05ZWQxNjM3Zjc4NTgiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NDQ4MjUwNDBDODMyMTFFN0FBMzNDREIwQ0U3REI1RDkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NDQ4MjUwM0ZDODMyMTFFN0FBMzNDREIwQ0U3REI1RDkiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTcgKFdpbmRvd3MpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6N2JhNzRkYWYtMWQwZC0yZDQ2LTg0NGEtNTNiNjEyNDRkNzQxIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjJmOGI2ZmJlLWQ5MWEtN2M0NS04OGIxLTllZDE2MzdmNzg1OCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Ph5K7hIAAADESURBVHjaYmAgDvAB8QEg3grEXAxUAtxAfBiI/0HxDiBmp9RQLqhLQQZmAXE+EP+HupyNEkN3Qw3KRxIvgoptIMdwdqiX/0MNQgdVULk1QMxCrKFsUK+CNFbgUVcPVbMSiJmJMXQDVEMdEY5ogapdgs9wFqjXQAobSQi2bqie+UDMiC7JDPUSSEE7GRHdD9U7G9lwZqhXQBK9ZKYgkGFToWZMhRk+FyowgcI0zwh1McisPpDAUyCegi18yDQc5NDbAAEGAFv4LzpLbqyzAAAAAElFTkSuQmCC" width="22"
                                     height="125" alt="catalog-ico"/>
                                <div class="catalog__product-content js-catalog__product-content" id="catalog__product9">
                                    <p class="catalog__product-desc-item">Для внутреннего и внешнего применения в качестве:</p>
                                    <ul class="catalog__product-list">
                                        <li class="catalog__product-list-item">―	состава для заделки швов и заполнения пор в бетонных изделиях и конструкциях, а также каменной кладке;</li>
                                        <li class="catalog__product-list-item">―	выравнивающего тонкослойного состава;</li>
                                        <li class="catalog__product-list-item">―	гидроизоляционного покрытия резервуаров с питьевой водой.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="catalog__product-item">
                                <a href="#catalog__product10" class="catalog__product-item-title js-catalog__product-item-title">Упаковка</a>
                                <img class="catalog__ico" href="#question-1" src="data:../images/base64/active-block.png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAMCAYAAABm+U3GAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA3ZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTM4IDc5LjE1OTgyNCwgMjAxNi8wOS8xNC0wMTowOTowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDoyZjhiNmZiZS1kOTFhLTdjNDUtODhiMS05ZWQxNjM3Zjc4NTgiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NDQ4MjUwNDBDODMyMTFFN0FBMzNDREIwQ0U3REI1RDkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NDQ4MjUwM0ZDODMyMTFFN0FBMzNDREIwQ0U3REI1RDkiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTcgKFdpbmRvd3MpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6N2JhNzRkYWYtMWQwZC0yZDQ2LTg0NGEtNTNiNjEyNDRkNzQxIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjJmOGI2ZmJlLWQ5MWEtN2M0NS04OGIxLTllZDE2MzdmNzg1OCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Ph5K7hIAAADESURBVHjaYmAgDvAB8QEg3grEXAxUAtxAfBiI/0HxDiBmp9RQLqhLQQZmAXE+EP+HupyNEkN3Qw3KRxIvgoptIMdwdqiX/0MNQgdVULk1QMxCrKFsUK+CNFbgUVcPVbMSiJmJMXQDVEMdEY5ogapdgs9wFqjXQAobSQi2bqie+UDMiC7JDPUSSEE7GRHdD9U7G9lwZqhXQBK9ZKYgkGFToWZMhRk+FyowgcI0zwh1McisPpDAUyCegi18yDQc5NDbAAEGAFv4LzpLbqyzAAAAAElFTkSuQmCC" width="22"
                                     height="125" alt="catalog-ico"/>
                                <div class="catalog__product-content js-catalog__product-content" id="catalog__product10">
                                    <p class="catalog__product-desc-item">METACRETE Hydrostop Epoxy 24
                                        выпускается в наборе (А+В) по – 5 кг,
                                        компонент С – мешок 25 кг.</p>
                                </div>
                            </div>
                            <div class="catalog__product-item">
                                <a href="#catalog__product11" class="catalog__product-item-title js-catalog__product-item-title">Расход</a>
                                <img class="catalog__ico" href="#question-1" src="data:../images/base64/active-block.png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAMCAYAAABm+U3GAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA3ZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTM4IDc5LjE1OTgyNCwgMjAxNi8wOS8xNC0wMTowOTowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDoyZjhiNmZiZS1kOTFhLTdjNDUtODhiMS05ZWQxNjM3Zjc4NTgiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NDQ4MjUwNDBDODMyMTFFN0FBMzNDREIwQ0U3REI1RDkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NDQ4MjUwM0ZDODMyMTFFN0FBMzNDREIwQ0U3REI1RDkiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTcgKFdpbmRvd3MpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6N2JhNzRkYWYtMWQwZC0yZDQ2LTg0NGEtNTNiNjEyNDRkNzQxIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjJmOGI2ZmJlLWQ5MWEtN2M0NS04OGIxLTllZDE2MzdmNzg1OCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Ph5K7hIAAADESURBVHjaYmAgDvAB8QEg3grEXAxUAtxAfBiI/0HxDiBmp9RQLqhLQQZmAXE+EP+HupyNEkN3Qw3KRxIvgoptIMdwdqiX/0MNQgdVULk1QMxCrKFsUK+CNFbgUVcPVbMSiJmJMXQDVEMdEY5ogapdgs9wFqjXQAobSQi2bqie+UDMiC7JDPUSSEE7GRHdD9U7G9lwZqhXQBK9ZKYgkGFToWZMhRk+FyowgcI0zwh1McisPpDAUyCegi18yDQc5NDbAAEGAFv4LzpLbqyzAAAAAElFTkSuQmCC" width="22"
                                     height="125" alt="catalog-ico"/>
                                <div class="catalog__product-content js-catalog__product-content" id="catalog__product11">
                                    <p class="catalog__product-desc-item">Ориентировочный расход при
                                        грунтовании: 200–500 г/м 2 (в зависимости
                                        от состояния основания).</p>
                                </div>
                            </div>
                            <div class="catalog__product-item">
                                <a href="#catalog__product12" class="catalog__product-item-title js-catalog__product-item-title">Подготовка основания</a>
                                <img class="catalog__ico" href="#question-1" src="data:../images/base64/active-block.png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAMCAYAAABm+U3GAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA3ZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTM4IDc5LjE1OTgyNCwgMjAxNi8wOS8xNC0wMTowOTowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDoyZjhiNmZiZS1kOTFhLTdjNDUtODhiMS05ZWQxNjM3Zjc4NTgiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NDQ4MjUwNDBDODMyMTFFN0FBMzNDREIwQ0U3REI1RDkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NDQ4MjUwM0ZDODMyMTFFN0FBMzNDREIwQ0U3REI1RDkiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTcgKFdpbmRvd3MpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6N2JhNzRkYWYtMWQwZC0yZDQ2LTg0NGEtNTNiNjEyNDRkNzQxIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjJmOGI2ZmJlLWQ5MWEtN2M0NS04OGIxLTllZDE2MzdmNzg1OCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Ph5K7hIAAADESURBVHjaYmAgDvAB8QEg3grEXAxUAtxAfBiI/0HxDiBmp9RQLqhLQQZmAXE+EP+HupyNEkN3Qw3KRxIvgoptIMdwdqiX/0MNQgdVULk1QMxCrKFsUK+CNFbgUVcPVbMSiJmJMXQDVEMdEY5ogapdgs9wFqjXQAobSQi2bqie+UDMiC7JDPUSSEE7GRHdD9U7G9lwZqhXQBK9ZKYgkGFToWZMhRk+FyowgcI0zwh1McisPpDAUyCegi18yDQc5NDbAAEGAFv4LzpLbqyzAAAAAElFTkSuQmCC" width="22"
                                     height="125" alt="catalog-ico"/>
                                <div class="catalog__product-content js-catalog__product-content" id="catalog__product12">
                                    <p class="catalog__product-desc-item catalog__product-desc-item--big">Основание должно быть очищено от
                                        масел, жиров, краски, грязи и пыли.
                                        Слабый бетон и цементное молочко
                                        должны быть удалены металлической
                                        щеткой, легким перфоратором или
                                        пескоструйной установкой.</p>
                                    <p class="catalog__product-desc-item catalog__product-desc-item--big">
                                        Основание должно быть сухим (влажность
                                        не более 8 %). Трещины в основании
                                        следует предварительно заделать
                                        материалами METACRETE.
                                        Температура основания должна быть от
                                        +10 °С до +30 °С.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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