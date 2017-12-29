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
        <div class="catalog__first-block catalog__item wow fadeIn" >
            <h3 class="catalog__block-title ">Эластичная гидроизоляция</h3>
            <div class="catalog__content js-catalog__content" id="question-2">
                <div class="catalog__content-item wow fadeIn">
                    <h3 class="catalog__title">Metacrete Hydrostop Epoxy EL 06</h3>
                    <div class="catalog__product-wrapper">
                        <div class="catalog__left-block catalog__left-block--big">
                            <div class="catalog__ico-container">
                                <img class="catalog__ico-img" src="data:../images/base64/designation-ico/designation-ico7.png;base64,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" width="70" height="70" alt="designation-ico"/>
                            </div>
                            <div class="catalog__img-wrapper">
                                <img class="catalog__img catalog__img--4" src="./images/product-img/product-img4.jpg" alt="catalog-ico"/>
                            </div>
                        </div>
                        <div class="catalog__right-block catalog__right-block--small">
                            <p class="catalog__desc-top">Полимерцементное эластичное гидроизоляционное покрытие
                                с высокой адгезионной прочностью, предназначенное для за-
                                щиты бетонных, каменных и металлических поверхностей.
                                Сертифицировано для защиты поверхностей, контактирующих
                                с питьевой водой.</p>
                            <h4 class="catalog__table-title">технические характеристики</h4>
                            <table class="catalog__table catalog__table--min" cellspacing="0" cellpadding="5">
                                <tr>
                                    <td valign="top">Внешний вид<br>
                                        Компонент А<br>
                                        Компонент В</td>
                                    <td width="35%" valign="top"><br>Серый порошок <br>Жидкость белого цвета</td>
                                </tr>
                                <tr>
                                    <td valign="top">Интервал времени для нанесения
                                        второго слоя</td>
                                    <td valign="top">5–6 часов</td>
                                </tr>
                                <tr>
                                    <td valign="top">Максимальная крупность
                                        наполнителя</td>
                                    <td valign="top">0,63 мм</td>
                                </tr>
                                <tr>
                                    <td valign="top">Толщина покрытия</td>
                                    <td valign="top">1,5–2,5 мм</td>
                                </tr>
                                <tr>
                                    <td valign="top">Работопригодность</td>
                                    <td valign="top">Не менее 45 минут</td>
                                </tr>
                                <tr>
                                    <td valign="top">Марка по водонепроницаемости
                                        на бетоне</td>
                                    <td valign="top">W12</td>
                                </tr>
                                <tr>
                                    <td valign="top">Перекрытие трещин</td>
                                    <td valign="top">Не более 0,6 мм</td>
                                </tr>
                                <tr>
                                    <td valign="top">Водопоглощение при капилярном
                                        подсосе</td>
                                    <td valign="top">0,02 кг/(м²·ч⁰,⁵)</td>
                                </tr>
                                <tr>
                                    <td valign="top">Адгезия к бетону</td>
                                    <td valign="top">Не менее 0,8 МПа</td>
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
                            <p class="catalog__desc-bottom">METACRETE Hydrostop EL 06 представляет собой двухкомпонентное покрытие,
                                готовое к применению. Первый компонент − сухая смесь, состоящая из порт-
                                ландцемента и модифицирующих добавок; второй − жидкая полимерная дис-
                                персия. При смешивании двух компонентов образуется пластичный, легкона-
                                носимый состав, который после нанесения и полимеризации образует прочное
                                эластичное гидроизоляционное покрытие.
                            </p>
                        </div>
                        <div class="catalog__bottom-wrapper">
                            <a class="button button-catalog js-show-modal" href="#js-modal">Узнать цену</a>
                        </div>
                    </div>
                    <div class="catalog__product-accordeon">
                        <div class="catalog__product-item-wrapper">
                            <div class="catalog__product-item">
                                <a href="#catalog__product13" class="catalog__product-item-title js-catalog__product-item-title">Применение</a>
                                <img class="catalog__ico" href="#question-1" src="data:../images/base64/active-block.png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAMCAYAAABm+U3GAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA3ZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTM4IDc5LjE1OTgyNCwgMjAxNi8wOS8xNC0wMTowOTowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDoyZjhiNmZiZS1kOTFhLTdjNDUtODhiMS05ZWQxNjM3Zjc4NTgiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NDQ4MjUwNDBDODMyMTFFN0FBMzNDREIwQ0U3REI1RDkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NDQ4MjUwM0ZDODMyMTFFN0FBMzNDREIwQ0U3REI1RDkiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTcgKFdpbmRvd3MpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6N2JhNzRkYWYtMWQwZC0yZDQ2LTg0NGEtNTNiNjEyNDRkNzQxIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjJmOGI2ZmJlLWQ5MWEtN2M0NS04OGIxLTllZDE2MzdmNzg1OCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Ph5K7hIAAADESURBVHjaYmAgDvAB8QEg3grEXAxUAtxAfBiI/0HxDiBmp9RQLqhLQQZmAXE+EP+HupyNEkN3Qw3KRxIvgoptIMdwdqiX/0MNQgdVULk1QMxCrKFsUK+CNFbgUVcPVbMSiJmJMXQDVEMdEY5ogapdgs9wFqjXQAobSQi2bqie+UDMiC7JDPUSSEE7GRHdD9U7G9lwZqhXQBK9ZKYgkGFToWZMhRk+FyowgcI0zwh1McisPpDAUyCegi18yDQc5NDbAAEGAFv4LzpLbqyzAAAAAElFTkSuQmCC" width="22"
                                     height="125" alt="catalog-ico"/>
                                <div class="catalog__product-content js-catalog__product-content" id="catalog__product13">
                                    <p class="catalog__product-desc-item">Применяется для гидроизоляции и защиты:</p>
                                    <ul class="catalog__product-list">
                                        <li class="catalog__product-list-item">―	бетонных и железобетонных конструкций от разрушающего действия воды, хлоридов и карбонизации;</li>
                                        <li class="catalog__product-list-item">―	поверхностей конструкций, подвергающихся линейной деформации;</li>
                                        <li class="catalog__product-list-item">―	фундаментных плит в гражданском строи-тельстве, монолитных и сборных ограждающих конструкций, бассейнов,
                                            подвальных помещений и т.п.;</li>
                                        <li class="catalog__product-list-item">―	промышленных объектов различного назначения, таких как тоннели, шахты, градирни, силосы, подпорные стенки,
                                            мостовые и портовые конструкции; </li>
                                        <li class="catalog__product-list-item">―	для внутренней и внешней прижимной гидроизоляции заглубленных и наземных резервуаров, в том числе с пить-
                                            евой водой.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="catalog__product-item">
                                <a href="#catalog__product14" class="catalog__product-item-title js-catalog__product-item-title">Упаковка</a>
                                <img class="catalog__ico" href="#question-1" src="data:../images/base64/active-block.png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAMCAYAAABm+U3GAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA3ZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTM4IDc5LjE1OTgyNCwgMjAxNi8wOS8xNC0wMTowOTowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDoyZjhiNmZiZS1kOTFhLTdjNDUtODhiMS05ZWQxNjM3Zjc4NTgiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NDQ4MjUwNDBDODMyMTFFN0FBMzNDREIwQ0U3REI1RDkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NDQ4MjUwM0ZDODMyMTFFN0FBMzNDREIwQ0U3REI1RDkiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTcgKFdpbmRvd3MpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6N2JhNzRkYWYtMWQwZC0yZDQ2LTg0NGEtNTNiNjEyNDRkNzQxIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjJmOGI2ZmJlLWQ5MWEtN2M0NS04OGIxLTllZDE2MzdmNzg1OCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Ph5K7hIAAADESURBVHjaYmAgDvAB8QEg3grEXAxUAtxAfBiI/0HxDiBmp9RQLqhLQQZmAXE+EP+HupyNEkN3Qw3KRxIvgoptIMdwdqiX/0MNQgdVULk1QMxCrKFsUK+CNFbgUVcPVbMSiJmJMXQDVEMdEY5ogapdgs9wFqjXQAobSQi2bqie+UDMiC7JDPUSSEE7GRHdD9U7G9lwZqhXQBK9ZKYgkGFToWZMhRk+FyowgcI0zwh1McisPpDAUyCegi18yDQc5NDbAAEGAFv4LzpLbqyzAAAAAElFTkSuQmCC" width="22"
                                     height="125" alt="catalog-ico"/>
                                <div class="catalog__product-content js-catalog__product-content" id="catalog__product14">
                                    <p class="catalog__product-desc-item">METACRETE Hydrostop EL 06 выпускается
                                        комплектами: мешок – 20 кг, канистра – 12
                                        л.</p>
                                </div>
                            </div>
                            <div class="catalog__product-item">
                                <a href="#catalog__product15" class="catalog__product-item-title js-catalog__product-item-title">Расход</a>
                                <img class="catalog__ico" href="#question-1" src="data:../images/base64/active-block.png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAMCAYAAABm+U3GAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA3ZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTM4IDc5LjE1OTgyNCwgMjAxNi8wOS8xNC0wMTowOTowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDoyZjhiNmZiZS1kOTFhLTdjNDUtODhiMS05ZWQxNjM3Zjc4NTgiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NDQ4MjUwNDBDODMyMTFFN0FBMzNDREIwQ0U3REI1RDkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NDQ4MjUwM0ZDODMyMTFFN0FBMzNDREIwQ0U3REI1RDkiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTcgKFdpbmRvd3MpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6N2JhNzRkYWYtMWQwZC0yZDQ2LTg0NGEtNTNiNjEyNDRkNzQxIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjJmOGI2ZmJlLWQ5MWEtN2M0NS04OGIxLTllZDE2MzdmNzg1OCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Ph5K7hIAAADESURBVHjaYmAgDvAB8QEg3grEXAxUAtxAfBiI/0HxDiBmp9RQLqhLQQZmAXE+EP+HupyNEkN3Qw3KRxIvgoptIMdwdqiX/0MNQgdVULk1QMxCrKFsUK+CNFbgUVcPVbMSiJmJMXQDVEMdEY5ogapdgs9wFqjXQAobSQi2bqie+UDMiC7JDPUSSEE7GRHdD9U7G9lwZqhXQBK9ZKYgkGFToWZMhRk+FyowgcI0zwh1McisPpDAUyCegi18yDQc5NDbAAEGAFv4LzpLbqyzAAAAAElFTkSuQmCC" width="22"
                                     height="125" alt="catalog-ico"/>
                                <div class="catalog__product-content js-catalog__product-content" id="catalog__product15">
                                    <p class="catalog__product-desc-item">Расход METACRETE Hydrostop EL 06
                                        2,5–3,0 кг на 1 м² при толщине слоя в
                                        1,5–2,5 мм.</p>
                                </div>
                            </div>
                            <div class="catalog__product-item">
                                <a href="#catalog__product16" class="catalog__product-item-title js-catalog__product-item-title">Подготовка основания</a>
                                <img class="catalog__ico" href="#question-1" src="data:../images/base64/active-block.png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAMCAYAAABm+U3GAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA3ZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTM4IDc5LjE1OTgyNCwgMjAxNi8wOS8xNC0wMTowOTowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDoyZjhiNmZiZS1kOTFhLTdjNDUtODhiMS05ZWQxNjM3Zjc4NTgiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NDQ4MjUwNDBDODMyMTFFN0FBMzNDREIwQ0U3REI1RDkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NDQ4MjUwM0ZDODMyMTFFN0FBMzNDREIwQ0U3REI1RDkiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTcgKFdpbmRvd3MpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6N2JhNzRkYWYtMWQwZC0yZDQ2LTg0NGEtNTNiNjEyNDRkNzQxIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjJmOGI2ZmJlLWQ5MWEtN2M0NS04OGIxLTllZDE2MzdmNzg1OCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Ph5K7hIAAADESURBVHjaYmAgDvAB8QEg3grEXAxUAtxAfBiI/0HxDiBmp9RQLqhLQQZmAXE+EP+HupyNEkN3Qw3KRxIvgoptIMdwdqiX/0MNQgdVULk1QMxCrKFsUK+CNFbgUVcPVbMSiJmJMXQDVEMdEY5ogapdgs9wFqjXQAobSQi2bqie+UDMiC7JDPUSSEE7GRHdD9U7G9lwZqhXQBK9ZKYgkGFToWZMhRk+FyowgcI0zwh1McisPpDAUyCegi18yDQc5NDbAAEGAFv4LzpLbqyzAAAAAElFTkSuQmCC" width="22"
                                     height="125" alt="catalog-ico"/>
                                <div class="catalog__product-content js-catalog__product-content" id="catalog__product16">
                                    <p class="catalog__product-desc-item catalog__product-desc-item--big">Основание должно быть влажным, но не
                                        мокрым, очищено от масел, жиров, грязи и
                                        других посторонних веществ.</p>
                                    <p class="catalog__product-desc-item catalog__product-desc-item--big">
                                        Слабый бетон и цементное молочко
                                        должны быть удалены металлической
                                        щеткой или водоструйной установкой, для
                                        придания шероховатой фактуры
                                        поверхности.
                                        Активные протечки в основании
                                        необходимо устранить с помощью
                                        METACRETE Hydrostop PB и METACRETE
                                        Hydrostop PBF.
                                    </p>
                                    <p class="catalog__product-desc-item catalog__product-desc-item--big">Сколы, раковины и другие виды
                                        разрушений основания отремонтировать
                                        материалами METACRETE Grand.</p>
                                    <p class="catalog__product-desc-item catalog__product-desc-item--big"><strong>Внимание: температура основания
                                        должна быть в пределах от +5 °С до
                                        +30 °С.</strong></p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="catalog__content-item wow fadeIn">
                    <h3 class="catalog__title">Metacrete Hydrostop EL 13</h3>
                    <div class="catalog__product-wrapper">
                        <div class="catalog__left-block catalog__left-block--big">
                            <div class="catalog__ico-container">
                                <img class="catalog__ico-img" src="data:../images/base64/designation-ico/designation-ico1.png;base64,iVBORw0KGgoAAAANSUhEUgAAAEYAAABGCAMAAABG8BK2AAAArlBMVEVHcEyVl5qVl5uVl5uVl5uVl5uVl5uVl5uVl5qVl5uVl5uVl5uVl5uVl5uVl5uVl5uVl5uVl5uUl5qVl5uVl5qVl5uVl5uVl5uVl5uVl5qVl5v///+WmJyDh4qAhIeXmZ2Mj5J9gYSJjI+Pkpbj5OSxs7bd3t/FxseGiY2foaTQ0tOWmJuqra/Mzc55fYCTlZjU1dbZ2tu5ur1vc3ekp6rw8PHq6+z5+fnAwsOanKBBEOBEAAAAGXRSTlMAUJUfnxLW8/J5hLgtqWC+bT0I3cnr9uXnWBIZBgAABKRJREFUWMONWIla6joQLggUFEVFPWfSNN0AylpA9Oj7v9ht0zSZLC03nwJd8ueffRLPs8awN+k/jMa+Pcb+fDaY9O68m2PYG/iEAOkcj0/DbpDJO6HGHNC+xMXHfQel57F4HVyEEF71P2kBmb6huTfEql6Yv7hQnhAG2CTq2zq6g9C9yR9aSOAxaEcBcwI4oWr1PXZwke9hGEsiB5+eZtY2I4ELB+nnTl8M2tQE4HhD2WukbkZZyFha+SBioM82vOJDmhqh5PHlsL6GBbUlBMMfGv79GuVVoexS8h2UY51kVAgK2H3B6QF1XEzEEkBIES4CPtbHjMq54OAkmQIQbvXXDwUdbwIxaj6NCOCym7pR0emBEjffBxKH8xHyA4BmNUO45xLmEWHHv0GA+SjPA50IaKRGZYrRcNk2MPgYzgOmM/GvaeXAyjt3Wb5COAyzB5eGhN6eGzsJ9UQpQzjLsDPjSN1D3xvoThWlocJZhHArd9VAM+/BiGXMZ5EX7mn60gAjb26+gPgskjhyJi3TdH+9sZU5S5yzwNmWOCAXdeR1MXzPN7wJOM5Ww7FzswPGzt9RHO5/ljxIt3mh88f+IzVRw5ghDBRydsy+KpwLa+6Do2TVRgchlJlouclY8c3FIu0ZtHlUw2BHRinsWAXqgZU/KcnDkGvbinL+53tjS8MSM1wKmChl1/MJYtpWvjgbu9jXqwgYWrDswMWjSn+6soRQjnwr2YR5suTKDjb5zqJeX/u1+4ETi8OsP/eNM56OVE/p8k0nTGNMDrP4PMhQ5XRUOlCCjT2/0TZYOuIwweoocc5HKlE0TaJgsBRNY8brxEnx2eQUO5AsP74KTbO0RXm8SVY1ThNi58SddMaeTxxBBRBlCTkHP581zvFb4PyW2oEOGL3VorswvPzjduI4mz2i4+jKxo3faEtEcbIR5bPm87vH2jHiuHY/qx+hkMQHVGbW3xf21VyuGMZo6EgVK7AoY/svVR2CbcrihbrchFTrVEALBuWSBaIiUjK+ODOwK5WvWQqU07UPTseI4kooI7PFv6d/XTArZtQYqISaNzANWpSF5LLowLli7dQ/3r1ZhacFyA5ilm4OX20w3JV1mJEqvpgRLXKW7duEuyLt1JNmenuOpc5CFrmFOydmUh54PdKW9HekFO768+2mAyLlQN2YDF2ds3ToIk/i/dYUbpUQXEqBTL2qpXA3hgIpC5Pocjbp7PCMuWiuNQgATU1Q5S+2WS90OijN0WrfMPwf27kdSZN0v1U+sM9xJ8f76z4h+vpOndMiZPHyLNR0wmlwVm93DVuD23RQ+UAY/SysrnDqqW4fdULKaqg/4p/cwa/rwzJFt+UO793a6phSqk9apIyFaqdE4FVunUGvpmC0RaAjAm4mSA/t44lde9QFSIYgdy1yqT7ebA6g4zwBXP2+eDTTt76Prs0S2O2l3tLCm7kRH+gZFkyd2J0aEPJgHwtMuto7h08C0fXSjJc/RGvobh01+E/uI5PXe/tIAZA/grZRGLQfBU0H7vbNkgweXjrPk+4mb7IHAucRQZXB76e3j7emT+UJ2Z+xfjZW/lcff0ez/rODyH8nesW91dgEYwAAAABJRU5ErkJggg==" width="72" height="72" alt="designation-ico"/>
                                <img class="catalog__ico-img" src="data:../images/base64/designation-ico/designation-ico6.png;base64,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" width="70" height="70" alt="designation-ico"/>
                            </div>
                            <div class="catalog__img-wrapper">
                                <img class="catalog__img catalog__img--5" src="./images/product-img/product-img5.jpg" alt="catalog-ico"/>
                            </div>
                        </div>
                        <div class="catalog__right-block catalog__right-block--small">
                            <p class="catalog__desc-top">Полимерцементное эластичное гидроизоляционное паропро-
                                ницаемое покрытие, армированное полимерной фиброй, пред
                                -назначенное для защиты бетонных и каменных поверхностей.</p>
                            <h4 class="catalog__table-title">технические характеристики</h4>
                            <table class="catalog__table catalog__table--min" cellspacing="0" cellpadding="5">
                                <tr>
                                    <td valign="top">Внешний вид<br>
                                        Компонент А<br><br>
                                        Компонент В</td>
                                    <td width="35%" valign="top"><br>Порошок серого
                                        или белого цвета <br>Жидкость белого цвета</td>
                                </tr>
                                <tr>
                                    <td valign="top">Максимальная крупность
                                        наполнителя</td>
                                    <td valign="top">0,63 мм</td>
                                </tr>
                                <tr>
                                    <td valign="top">Время жизни раствора при: 5–10 °С<br>
                                        15–20 °С<br>
                                        25–30 °С</td>
                                    <td valign="top">2 ч<br>
                                        1 ч<br>
                                        20 мин</td>
                                </tr>
                                <tr>
                                    <td valign="top">Интервал нанесения второго слоя</td>
                                    <td valign="top">6–8 часов</td>
                                </tr>
                                <tr>
                                    <td valign="top">Перекрытие трещин</td>
                                    <td valign="top">До 1,25 мм</td>
                                </tr>
                                <tr>
                                    <td valign="top">Марка по водонепроницаемости на бетоне:
                                        при положительном давлении
                                        при отрицательном давлении</td>
                                    <td valign="top">W16<br>
                                        W2–4</td>
                                </tr>
                                <tr>
                                    <td valign="top">Прочность на разрыв в возрасте 28 суток</td>
                                    <td valign="top">0,64 МПа</td>
                                </tr>
                                <tr>
                                    <td valign="top">Относительное удлинение на воздухе
                                        (28 суток) при t=20 °C</td>
                                    <td valign="top">24,5 %</td>
                                </tr>
                                <tr>
                                    <td valign="top">Относительное удлинение на воздухе
                                        (28 суток) при t=–50 °C</td>
                                    <td valign="top">9,5 %</td>
                                </tr>
                                <tr>
                                    <td valign="top">Коэффициент капиллярного поглощения</td>
                                    <td valign="top">0,01 кг/(м²·ч⁰,⁵)</td>
                                </tr>
                                <tr>
                                    <td valign="top">Прочность сцепления с основанием
                                        через 28 суток</td>
                                    <td valign="top">1 МПа</td>
                                </tr>
                                <tr>
                                    <td valign="top">Время высыхания</td>
                                    <td valign="top">6 часов</td>
                                </tr>
                                <tr>
                                    <td valign="top">Плотность готовой смеси</td>
                                    <td valign="top">1650 кг/м³</td>
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
                            <p class="catalog__desc-bottom">METACRETE Hydrostop EL 13 представляет собой двухкомпонентное покрытие,
                                состоящее из сухой смеси и жидкого полимерного компонента. При смешивании
                                двух компонентов образуется пластичный состав.  После нанесения и полиме-
                                ризации образует прочное паропроницаемое эластичное гидроизоляционное
                                покрытие, которое сохраняет свою эластичность при длительном нахождении
                                в воде, а также при эксплуатации при отрицательных температурах (до –50 °С).
                                METACRETE Hydrostop EL 13 после высыхания образует надежное защитное
                                гидроизоляционное покрытие.<br>
                                METACRETE Hydrostop EL 13 может использоваться в качестве финишного по-
                                крытия для отделки бетонных конструкций.
                            </p>
                        </div>
                        <div class="catalog__bottom-wrapper">
                            <a class="button button-catalog js-show-modal" href="#js-modal">Узнать цену</a>
                        </div>
                    </div>
                    <div class="catalog__product-accordeon">
                        <div class="catalog__product-item-wrapper">
                            <div class="catalog__product-item">
                                <a href="#catalog__product17" class="catalog__product-item-title js-catalog__product-item-title">Применение</a>
                                <img class="catalog__ico" href="#question-1" src="data:../images/base64/active-block.png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAMCAYAAABm+U3GAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA3ZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTM4IDc5LjE1OTgyNCwgMjAxNi8wOS8xNC0wMTowOTowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDoyZjhiNmZiZS1kOTFhLTdjNDUtODhiMS05ZWQxNjM3Zjc4NTgiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NDQ4MjUwNDBDODMyMTFFN0FBMzNDREIwQ0U3REI1RDkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NDQ4MjUwM0ZDODMyMTFFN0FBMzNDREIwQ0U3REI1RDkiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTcgKFdpbmRvd3MpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6N2JhNzRkYWYtMWQwZC0yZDQ2LTg0NGEtNTNiNjEyNDRkNzQxIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjJmOGI2ZmJlLWQ5MWEtN2M0NS04OGIxLTllZDE2MzdmNzg1OCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Ph5K7hIAAADESURBVHjaYmAgDvAB8QEg3grEXAxUAtxAfBiI/0HxDiBmp9RQLqhLQQZmAXE+EP+HupyNEkN3Qw3KRxIvgoptIMdwdqiX/0MNQgdVULk1QMxCrKFsUK+CNFbgUVcPVbMSiJmJMXQDVEMdEY5ogapdgs9wFqjXQAobSQi2bqie+UDMiC7JDPUSSEE7GRHdD9U7G9lwZqhXQBK9ZKYgkGFToWZMhRk+FyowgcI0zwh1McisPpDAUyCegi18yDQc5NDbAAEGAFv4LzpLbqyzAAAAAElFTkSuQmCC" width="22"
                                     height="125" alt="catalog-ico"/>
                                <div class="catalog__product-content js-catalog__product-content" id="catalog__product17">
                                    <p class="catalog__product-desc-item">Применяется для :</p>
                                    <ul class="catalog__product-list">
                                        <li class="catalog__product-list-item">―	гидроизоляции и защиты бетонных и железобетонных конструкций от разрушающего действия воды, хлоридов и кар-
                                            бонизации;</li>
                                        <li class="catalog__product-list-item">―	гидроизоляции поверхностей конструкций, подвергающихся линейной деформации;</li>
                                        <li class="catalog__product-list-item">―	в гражданском строительстве для гидроизоляции фундаментных плит, монолитных и сборных ограждающих кон-
                                            струкций, бассейнов и т.п.;</li>
                                        <li class="catalog__product-list-item">―	гидроизоляции промышленных объектов различного назначения, таких как тоннели, шахты, градирни, силосы, под-
                                            порные стенки, мостовые и портовые конструкции;  </li>
                                        <li class="catalog__product-list-item">―	для внутренней и внешней прижимной гидроизоляции заглубленных и наземных резервуаров, в том числе с питьевой
                                            водой;</li>
                                        <li class="catalog__product-list-item">―	для защиты бетонных и каменных поверхностей от воздействия антиобледенительных солей;</li>
                                        <li class="catalog__product-list-item">―	для защиты бетонных и каменных поверхностей от воздействия сточных вод, слабых щелочных и кислых растворов.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="catalog__product-item">
                                <a href="#catalog__product18" class="catalog__product-item-title js-catalog__product-item-title">Упаковка</a>
                                <img class="catalog__ico" href="#question-1" src="data:../images/base64/active-block.png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAMCAYAAABm+U3GAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA3ZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTM4IDc5LjE1OTgyNCwgMjAxNi8wOS8xNC0wMTowOTowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDoyZjhiNmZiZS1kOTFhLTdjNDUtODhiMS05ZWQxNjM3Zjc4NTgiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NDQ4MjUwNDBDODMyMTFFN0FBMzNDREIwQ0U3REI1RDkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NDQ4MjUwM0ZDODMyMTFFN0FBMzNDREIwQ0U3REI1RDkiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTcgKFdpbmRvd3MpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6N2JhNzRkYWYtMWQwZC0yZDQ2LTg0NGEtNTNiNjEyNDRkNzQxIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjJmOGI2ZmJlLWQ5MWEtN2M0NS04OGIxLTllZDE2MzdmNzg1OCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Ph5K7hIAAADESURBVHjaYmAgDvAB8QEg3grEXAxUAtxAfBiI/0HxDiBmp9RQLqhLQQZmAXE+EP+HupyNEkN3Qw3KRxIvgoptIMdwdqiX/0MNQgdVULk1QMxCrKFsUK+CNFbgUVcPVbMSiJmJMXQDVEMdEY5ogapdgs9wFqjXQAobSQi2bqie+UDMiC7JDPUSSEE7GRHdD9U7G9lwZqhXQBK9ZKYgkGFToWZMhRk+FyowgcI0zwh1McisPpDAUyCegi18yDQc5NDbAAEGAFv4LzpLbqyzAAAAAElFTkSuQmCC" width="22"
                                     height="125" alt="catalog-ico"/>
                                <div class="catalog__product-content js-catalog__product-content" id="catalog__product18">
                                    <p class="catalog__product-desc-item">METACRETE Hydrostop EL 13 выпускается
                                        комплектами: мешок – 20 кг, канистра – 12
                                        л.</p>
                                </div>
                            </div>
                            <div class="catalog__product-item">
                                <a href="#catalog__product19" class="catalog__product-item-title js-catalog__product-item-title">Расход</a>
                                <img class="catalog__ico" href="#question-1" src="data:../images/base64/active-block.png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAMCAYAAABm+U3GAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA3ZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTM4IDc5LjE1OTgyNCwgMjAxNi8wOS8xNC0wMTowOTowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDoyZjhiNmZiZS1kOTFhLTdjNDUtODhiMS05ZWQxNjM3Zjc4NTgiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NDQ4MjUwNDBDODMyMTFFN0FBMzNDREIwQ0U3REI1RDkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NDQ4MjUwM0ZDODMyMTFFN0FBMzNDREIwQ0U3REI1RDkiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTcgKFdpbmRvd3MpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6N2JhNzRkYWYtMWQwZC0yZDQ2LTg0NGEtNTNiNjEyNDRkNzQxIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjJmOGI2ZmJlLWQ5MWEtN2M0NS04OGIxLTllZDE2MzdmNzg1OCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Ph5K7hIAAADESURBVHjaYmAgDvAB8QEg3grEXAxUAtxAfBiI/0HxDiBmp9RQLqhLQQZmAXE+EP+HupyNEkN3Qw3KRxIvgoptIMdwdqiX/0MNQgdVULk1QMxCrKFsUK+CNFbgUVcPVbMSiJmJMXQDVEMdEY5ogapdgs9wFqjXQAobSQi2bqie+UDMiC7JDPUSSEE7GRHdD9U7G9lwZqhXQBK9ZKYgkGFToWZMhRk+FyowgcI0zwh1McisPpDAUyCegi18yDQc5NDbAAEGAFv4LzpLbqyzAAAAAElFTkSuQmCC" width="22"
                                     height="125" alt="catalog-ico"/>
                                <div class="catalog__product-content js-catalog__product-content" id="catalog__product19">
                                    <p class="catalog__product-desc-item">Расход METACRETE Hydrostop EL 13
                                        составляет 2,4–3,4 кг/м² в зависимости от
                                        состояния поверхности.</p>
                                </div>
                            </div>
                            <div class="catalog__product-item">
                                <a href="#catalog__product20" class="catalog__product-item-title js-catalog__product-item-title">Подготовка основания</a>
                                <img class="catalog__ico" href="#question-1" src="data:../images/base64/active-block.png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAMCAYAAABm+U3GAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA3ZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTM4IDc5LjE1OTgyNCwgMjAxNi8wOS8xNC0wMTowOTowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDoyZjhiNmZiZS1kOTFhLTdjNDUtODhiMS05ZWQxNjM3Zjc4NTgiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NDQ4MjUwNDBDODMyMTFFN0FBMzNDREIwQ0U3REI1RDkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NDQ4MjUwM0ZDODMyMTFFN0FBMzNDREIwQ0U3REI1RDkiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTcgKFdpbmRvd3MpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6N2JhNzRkYWYtMWQwZC0yZDQ2LTg0NGEtNTNiNjEyNDRkNzQxIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjJmOGI2ZmJlLWQ5MWEtN2M0NS04OGIxLTllZDE2MzdmNzg1OCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Ph5K7hIAAADESURBVHjaYmAgDvAB8QEg3grEXAxUAtxAfBiI/0HxDiBmp9RQLqhLQQZmAXE+EP+HupyNEkN3Qw3KRxIvgoptIMdwdqiX/0MNQgdVULk1QMxCrKFsUK+CNFbgUVcPVbMSiJmJMXQDVEMdEY5ogapdgs9wFqjXQAobSQi2bqie+UDMiC7JDPUSSEE7GRHdD9U7G9lwZqhXQBK9ZKYgkGFToWZMhRk+FyowgcI0zwh1McisPpDAUyCegi18yDQc5NDbAAEGAFv4LzpLbqyzAAAAAElFTkSuQmCC" width="22"
                                     height="125" alt="catalog-ico"/>
                                <div class="catalog__product-content js-catalog__product-content" id="catalog__product20">
                                    <p class="catalog__product-desc-item catalog__product-desc-item--big">Основание должно быть влажным, но не
                                        мокрым, очищено от масел, жиров, грязи и
                                        других посторонних веществ.</p>
                                    <p class="catalog__product-desc-item catalog__product-desc-item--big">
                                        Слабый бетон и цементное молочко
                                        должны быть удалены металлической
                                        щеткой или водопескоструйной
                                        установкой, для придания шероховатой
                                        фактуры поверхности. Активные протечки
                                        в основании необходимо устранить с
                                        помощью METACRETE Hydrostop PB или
                                        METACRETE Hydrostop PBF.
                                    </p>
                                    <p class="catalog__product-desc-item catalog__product-desc-item--big">Сколы, раковины и другие виды
                                        разрушений основания отремонтировать
                                        материалами METACRETE Grand.</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="catalog__content-item wow fadeIn">
                    <h3 class="catalog__title">Metacrete Hydrostop ELM</h3>
                    <div class="catalog__product-wrapper">
                        <div class="catalog__left-block catalog__left-block--small">
                            <div class="catalog__ico-container">
                                <img class="catalog__ico-img" src="data:../images/base64/designation-ico/designation-ico1.png;base64,iVBORw0KGgoAAAANSUhEUgAAAEYAAABGCAMAAABG8BK2AAAArlBMVEVHcEyVl5qVl5uVl5uVl5uVl5uVl5uVl5uVl5qVl5uVl5uVl5uVl5uVl5uVl5uVl5uVl5uVl5uUl5qVl5uVl5qVl5uVl5uVl5uVl5uVl5qVl5v///+WmJyDh4qAhIeXmZ2Mj5J9gYSJjI+Pkpbj5OSxs7bd3t/FxseGiY2foaTQ0tOWmJuqra/Mzc55fYCTlZjU1dbZ2tu5ur1vc3ekp6rw8PHq6+z5+fnAwsOanKBBEOBEAAAAGXRSTlMAUJUfnxLW8/J5hLgtqWC+bT0I3cnr9uXnWBIZBgAABKRJREFUWMONWIla6joQLggUFEVFPWfSNN0AylpA9Oj7v9ht0zSZLC03nwJd8ueffRLPs8awN+k/jMa+Pcb+fDaY9O68m2PYG/iEAOkcj0/DbpDJO6HGHNC+xMXHfQel57F4HVyEEF71P2kBmb6huTfEql6Yv7hQnhAG2CTq2zq6g9C9yR9aSOAxaEcBcwI4oWr1PXZwke9hGEsiB5+eZtY2I4ELB+nnTl8M2tQE4HhD2WukbkZZyFha+SBioM82vOJDmhqh5PHlsL6GBbUlBMMfGv79GuVVoexS8h2UY51kVAgK2H3B6QF1XEzEEkBIES4CPtbHjMq54OAkmQIQbvXXDwUdbwIxaj6NCOCym7pR0emBEjffBxKH8xHyA4BmNUO45xLmEWHHv0GA+SjPA50IaKRGZYrRcNk2MPgYzgOmM/GvaeXAyjt3Wb5COAyzB5eGhN6eGzsJ9UQpQzjLsDPjSN1D3xvoThWlocJZhHArd9VAM+/BiGXMZ5EX7mn60gAjb26+gPgskjhyJi3TdH+9sZU5S5yzwNmWOCAXdeR1MXzPN7wJOM5Ww7FzswPGzt9RHO5/ljxIt3mh88f+IzVRw5ghDBRydsy+KpwLa+6Do2TVRgchlJlouclY8c3FIu0ZtHlUw2BHRinsWAXqgZU/KcnDkGvbinL+53tjS8MSM1wKmChl1/MJYtpWvjgbu9jXqwgYWrDswMWjSn+6soRQjnwr2YR5suTKDjb5zqJeX/u1+4ETi8OsP/eNM56OVE/p8k0nTGNMDrP4PMhQ5XRUOlCCjT2/0TZYOuIwweoocc5HKlE0TaJgsBRNY8brxEnx2eQUO5AsP74KTbO0RXm8SVY1ThNi58SddMaeTxxBBRBlCTkHP581zvFb4PyW2oEOGL3VorswvPzjduI4mz2i4+jKxo3faEtEcbIR5bPm87vH2jHiuHY/qx+hkMQHVGbW3xf21VyuGMZo6EgVK7AoY/svVR2CbcrihbrchFTrVEALBuWSBaIiUjK+ODOwK5WvWQqU07UPTseI4kooI7PFv6d/XTArZtQYqISaNzANWpSF5LLowLli7dQ/3r1ZhacFyA5ilm4OX20w3JV1mJEqvpgRLXKW7duEuyLt1JNmenuOpc5CFrmFOydmUh54PdKW9HekFO768+2mAyLlQN2YDF2ds3ToIk/i/dYUbpUQXEqBTL2qpXA3hgIpC5Pocjbp7PCMuWiuNQgATU1Q5S+2WS90OijN0WrfMPwf27kdSZN0v1U+sM9xJ8f76z4h+vpOndMiZPHyLNR0wmlwVm93DVuD23RQ+UAY/SysrnDqqW4fdULKaqg/4p/cwa/rwzJFt+UO793a6phSqk9apIyFaqdE4FVunUGvpmC0RaAjAm4mSA/t44lde9QFSIYgdy1yqT7ebA6g4zwBXP2+eDTTt76Prs0S2O2l3tLCm7kRH+gZFkyd2J0aEPJgHwtMuto7h08C0fXSjJc/RGvobh01+E/uI5PXe/tIAZA/grZRGLQfBU0H7vbNkgweXjrPk+4mb7IHAucRQZXB76e3j7emT+UJ2Z+xfjZW/lcff0ez/rODyH8nesW91dgEYwAAAABJRU5ErkJggg==" width="72" height="72" alt="designation-ico"/>
                                <img class="catalog__ico-img" src="data:../images/base64/designation-ico/designation-ico7.png;base64,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" width="70" height="70" alt="designation-ico"/>
                            </div>
                            <div class="catalog__img-wrapper">
                                <img class="catalog__img catalog__img--6" src="./images/product-img/product-img6.jpg" alt="catalog-ico"/>
                            </div>
                        </div>
                        <div class="catalog__right-block catalog__right-block--big">
                            <p class="catalog__desc-top">Однокомпонентное полимерцементное эластичное гидроизоляционное
                                паропроницаемое покрытие, предназначенное для защиты бетонных и
                                каменных поверхностей. </p>
                            <h4 class="catalog__table-title">технические характеристики</h4>
                            <table class="catalog__table" cellspacing="0" cellpadding="5">
                                <tr>
                                    <td valign="top">Внешний вид<br><br> </td>
                                    <td width="35%" valign="top">Порошок серого
                                        или белого цвета</td>
                                </tr>
                                <tr>
                                    <td valign="top">Время жизни раствора при 20 °С</td>
                                    <td valign="top">Около  45 мин</td>
                                </tr>
                                <tr>
                                    <td valign="top">Расход воды</td>
                                    <td valign="top">5,6–6,8 л/25 кг</td>
                                </tr>
                                <tr>
                                    <td valign="top">Перекрытие статических трещин при +20°С</td>
                                    <td valign="top">До 2,0 мм</td>
                                </tr>
                                <tr>
                                    <td valign="top">Толщина покрытия</td>
                                    <td valign="top">2–5 мм</td>
                                </tr>
                                <tr>
                                    <td valign="top">Марка по водонепроницаемости на бетоне:<br>
                                        при положительном давлении<br>
                                        при отрицательном давлении </td>
                                    <td valign="top"><br>W14<br>
                                        W2</td>
                                </tr>
                                <tr>
                                    <td valign="top">Прочность при растяжении в возрасте 28 суток</td>
                                    <td valign="top">1,6 МПа</td>
                                </tr>
                                <tr>
                                    <td valign="top">Относительное удлинение (28 суток) при t=20 °C
                                        (воздушное твердение)</td>
                                    <td valign="top">30 %</td>
                                </tr>
                                <tr>
                                    <td valign="top">Коэффициент капиллярного поглощения</td>
                                    <td valign="top">0,02 кг/(м²·ч⁰,⁵)</td>
                                </tr>
                                <tr>
                                    <td valign="top">Прочность сцепления с бетонным
                                        основанием через 28 суток, не менее</td>
                                    <td valign="top">1,5 МПа</td>
                                </tr>
                                <tr>
                                    <td valign="top">Температура эксплуатации</td>
                                    <td valign="top">от +5 °С до +35 °С</td>
                                </tr>
                                <tr>
                                    <td valign="top">Время высыхания</td>
                                    <td valign="top">6 часов</td>
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
                            <p class="catalog__desc-bottom">METACRETE Hydrostop ELM представляет собой однокомпонентное полимер-
                                цементное покрытие, состоящее изспециально подобранных цементов, напол-
                                нителей и добавок. После нанесения и полимеризации образует прочное паро-
                                проницаемое эластичное гидроизоляционное покрытие, которое сохраняет свою
                                эластичность при длительном нахождении в воде.
                            </p>
                        </div>
                        <div class="catalog__bottom-wrapper">
                            <a class="button button-catalog js-show-modal" href="#js-modal">Узнать цену</a>
                        </div>
                    </div>
                    <div class="catalog__product-accordeon">
                        <div class="catalog__product-item-wrapper">
                            <div class="catalog__product-item">
                                <a href="#catalog__product21" class="catalog__product-item-title js-catalog__product-item-title">Применение</a>
                                <img class="catalog__ico" href="#question-1" src="data:../images/base64/active-block.png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAMCAYAAABm+U3GAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA3ZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTM4IDc5LjE1OTgyNCwgMjAxNi8wOS8xNC0wMTowOTowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDoyZjhiNmZiZS1kOTFhLTdjNDUtODhiMS05ZWQxNjM3Zjc4NTgiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NDQ4MjUwNDBDODMyMTFFN0FBMzNDREIwQ0U3REI1RDkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NDQ4MjUwM0ZDODMyMTFFN0FBMzNDREIwQ0U3REI1RDkiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTcgKFdpbmRvd3MpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6N2JhNzRkYWYtMWQwZC0yZDQ2LTg0NGEtNTNiNjEyNDRkNzQxIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjJmOGI2ZmJlLWQ5MWEtN2M0NS04OGIxLTllZDE2MzdmNzg1OCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Ph5K7hIAAADESURBVHjaYmAgDvAB8QEg3grEXAxUAtxAfBiI/0HxDiBmp9RQLqhLQQZmAXE+EP+HupyNEkN3Qw3KRxIvgoptIMdwdqiX/0MNQgdVULk1QMxCrKFsUK+CNFbgUVcPVbMSiJmJMXQDVEMdEY5ogapdgs9wFqjXQAobSQi2bqie+UDMiC7JDPUSSEE7GRHdD9U7G9lwZqhXQBK9ZKYgkGFToWZMhRk+FyowgcI0zwh1McisPpDAUyCegi18yDQc5NDbAAEGAFv4LzpLbqyzAAAAAElFTkSuQmCC" width="22"
                                     height="125" alt="catalog-ico"/>
                                <div class="catalog__product-content js-catalog__product-content" id="catalog__product21">
                                    <p class="catalog__product-desc-item">Применяется для :</p>
                                    <ul class="catalog__product-list">
                                        <li class="catalog__product-list-item">―	гидроизоляции и защиты бетонных и железобетонных конструкций от разрушающего действия воды, хлоридов и кар-
                                            бонизации;</li>
                                        <li class="catalog__product-list-item">―	гидроизоляции поверхностей конструкций, подвергающихся линейной деформации;</li>
                                        <li class="catalog__product-list-item">―	в гражданском строительстве для гидроизо-ляции фундаментных плит, монолитных и сборных ограждающих кон-
                                            струкций, бассейнов и т.п.;</li>
                                        <li class="catalog__product-list-item">―	гидроизоляции промышленных объектов различного назначения, таких как тоннели, шахты, градирни, силосы, под-
                                            порные стенки, мостовые и портовые конструкции; </li>
                                        <li class="catalog__product-list-item">―	для внутренней и внешней прижимной гидроизоляции заглубленных и наземных резервуаров, в том числе с питьевой
                                            водой.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="catalog__product-item">
                                <a href="#catalog__product22" class="catalog__product-item-title js-catalog__product-item-title">Упаковка</a>
                                <img class="catalog__ico" href="#question-1" src="data:../images/base64/active-block.png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAMCAYAAABm+U3GAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA3ZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTM4IDc5LjE1OTgyNCwgMjAxNi8wOS8xNC0wMTowOTowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDoyZjhiNmZiZS1kOTFhLTdjNDUtODhiMS05ZWQxNjM3Zjc4NTgiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NDQ4MjUwNDBDODMyMTFFN0FBMzNDREIwQ0U3REI1RDkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NDQ4MjUwM0ZDODMyMTFFN0FBMzNDREIwQ0U3REI1RDkiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTcgKFdpbmRvd3MpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6N2JhNzRkYWYtMWQwZC0yZDQ2LTg0NGEtNTNiNjEyNDRkNzQxIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjJmOGI2ZmJlLWQ5MWEtN2M0NS04OGIxLTllZDE2MzdmNzg1OCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Ph5K7hIAAADESURBVHjaYmAgDvAB8QEg3grEXAxUAtxAfBiI/0HxDiBmp9RQLqhLQQZmAXE+EP+HupyNEkN3Qw3KRxIvgoptIMdwdqiX/0MNQgdVULk1QMxCrKFsUK+CNFbgUVcPVbMSiJmJMXQDVEMdEY5ogapdgs9wFqjXQAobSQi2bqie+UDMiC7JDPUSSEE7GRHdD9U7G9lwZqhXQBK9ZKYgkGFToWZMhRk+FyowgcI0zwh1McisPpDAUyCegi18yDQc5NDbAAEGAFv4LzpLbqyzAAAAAElFTkSuQmCC" width="22"
                                     height="125" alt="catalog-ico"/>
                                <div class="catalog__product-content js-catalog__product-content" id="catalog__product22">
                                    <p class="catalog__product-desc-item">METACRETE Hydrostop ELM выпускается в герметичных ведрах по 8,5 кг и во влагонепроницаемых мешках по 15 кг.</p>
                                </div>
                            </div>
                            <div class="catalog__product-item">
                                <a href="#catalog__product23" class="catalog__product-item-title js-catalog__product-item-title">Расход</a>
                                <img class="catalog__ico" href="#question-1" src="data:../images/base64/active-block.png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAMCAYAAABm+U3GAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA3ZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTM4IDc5LjE1OTgyNCwgMjAxNi8wOS8xNC0wMTowOTowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDoyZjhiNmZiZS1kOTFhLTdjNDUtODhiMS05ZWQxNjM3Zjc4NTgiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NDQ4MjUwNDBDODMyMTFFN0FBMzNDREIwQ0U3REI1RDkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NDQ4MjUwM0ZDODMyMTFFN0FBMzNDREIwQ0U3REI1RDkiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTcgKFdpbmRvd3MpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6N2JhNzRkYWYtMWQwZC0yZDQ2LTg0NGEtNTNiNjEyNDRkNzQxIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjJmOGI2ZmJlLWQ5MWEtN2M0NS04OGIxLTllZDE2MzdmNzg1OCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Ph5K7hIAAADESURBVHjaYmAgDvAB8QEg3grEXAxUAtxAfBiI/0HxDiBmp9RQLqhLQQZmAXE+EP+HupyNEkN3Qw3KRxIvgoptIMdwdqiX/0MNQgdVULk1QMxCrKFsUK+CNFbgUVcPVbMSiJmJMXQDVEMdEY5ogapdgs9wFqjXQAobSQi2bqie+UDMiC7JDPUSSEE7GRHdD9U7G9lwZqhXQBK9ZKYgkGFToWZMhRk+FyowgcI0zwh1McisPpDAUyCegi18yDQc5NDbAAEGAFv4LzpLbqyzAAAAAElFTkSuQmCC" width="22"
                                     height="125" alt="catalog-ico"/>
                                <div class="catalog__product-content js-catalog__product-content" id="catalog__product23">
                                    <p class="catalog__product-desc-item">Расход METACRETE Hydrostop ELM
                                        составляет 1,1 кг/м 2 при толщине слоя в 1 мм, без учета шероховатости
                                        поверхности.</p>
                                </div>
                            </div>
                            <div class="catalog__product-item">
                                <a href="#catalog__product24" class="catalog__product-item-title js-catalog__product-item-title">Подготовка основания</a>
                                <img class="catalog__ico" href="#question-1" src="data:../images/base64/active-block.png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAMCAYAAABm+U3GAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA3ZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTM4IDc5LjE1OTgyNCwgMjAxNi8wOS8xNC0wMTowOTowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDoyZjhiNmZiZS1kOTFhLTdjNDUtODhiMS05ZWQxNjM3Zjc4NTgiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NDQ4MjUwNDBDODMyMTFFN0FBMzNDREIwQ0U3REI1RDkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NDQ4MjUwM0ZDODMyMTFFN0FBMzNDREIwQ0U3REI1RDkiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTcgKFdpbmRvd3MpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6N2JhNzRkYWYtMWQwZC0yZDQ2LTg0NGEtNTNiNjEyNDRkNzQxIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjJmOGI2ZmJlLWQ5MWEtN2M0NS04OGIxLTllZDE2MzdmNzg1OCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Ph5K7hIAAADESURBVHjaYmAgDvAB8QEg3grEXAxUAtxAfBiI/0HxDiBmp9RQLqhLQQZmAXE+EP+HupyNEkN3Qw3KRxIvgoptIMdwdqiX/0MNQgdVULk1QMxCrKFsUK+CNFbgUVcPVbMSiJmJMXQDVEMdEY5ogapdgs9wFqjXQAobSQi2bqie+UDMiC7JDPUSSEE7GRHdD9U7G9lwZqhXQBK9ZKYgkGFToWZMhRk+FyowgcI0zwh1McisPpDAUyCegi18yDQc5NDbAAEGAFv4LzpLbqyzAAAAAElFTkSuQmCC" width="22"
                                     height="125" alt="catalog-ico"/>
                                <div class="catalog__product-content js-catalog__product-content" id="catalog__product24">
                                    <p class="catalog__product-desc-item catalog__product-desc-item--big">Основание должно быть влажным, но не
                                        мокрым, очищено от масел, жиров, грязи и
                                        других посторонних веществ.</p>
                                    <p class="catalog__product-desc-item catalog__product-desc-item--big">
                                        Слабый бетон и цементное молочко
                                        должны быть удалены металлической
                                        щеткой или водопескоструйной
                                        установкой, для придания шероховатой
                                        фактуры поверхности. Активные протечки
                                        в основании необходимо устранить с
                                        помощью METACRETE Hydrostop PB или
                                        METACRETE Hydrostop PBF.
                                    </p>
                                    <p class="catalog__product-desc-item catalog__product-desc-item--big">Сколы, раковины и другие виды
                                        разрушений основания отремонтировать
                                        материалами METACRETE Grand.</p>
                                    <p class="catalog__product-desc-item catalog__product-desc-item--big"><strong>
                                        Внимание! Температура основания
                                        должна быть в пределах от +5 °С до
                                        +30 °С.
                                    </strong></p>

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