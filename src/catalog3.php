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
                <h3 class="catalog__block-title">Гидропломба</h3>
                <div class="catalog__content js-catalog__content" id="question-3">
                    <div class="catalog__content-item wow fadeIn">
                        <h3 class="catalog__title">Metacrete Hydrostop PBF</h3>
                        <div class="catalog__product-wrapper">
                            <div class="catalog__left-block catalog__left-block--small">
                                <div class="catalog__ico-container">
                                    <img class="catalog__ico-img" src="data:../images/base64/designation-ico/designation-ico1.png;base64,iVBORw0KGgoAAAANSUhEUgAAAEYAAABGCAMAAABG8BK2AAAArlBMVEVHcEyVl5qVl5uVl5uVl5uVl5uVl5uVl5uVl5qVl5uVl5uVl5uVl5uVl5uVl5uVl5uVl5uVl5uUl5qVl5uVl5qVl5uVl5uVl5uVl5uVl5qVl5v///+WmJyDh4qAhIeXmZ2Mj5J9gYSJjI+Pkpbj5OSxs7bd3t/FxseGiY2foaTQ0tOWmJuqra/Mzc55fYCTlZjU1dbZ2tu5ur1vc3ekp6rw8PHq6+z5+fnAwsOanKBBEOBEAAAAGXRSTlMAUJUfnxLW8/J5hLgtqWC+bT0I3cnr9uXnWBIZBgAABKRJREFUWMONWIla6joQLggUFEVFPWfSNN0AylpA9Oj7v9ht0zSZLC03nwJd8ueffRLPs8awN+k/jMa+Pcb+fDaY9O68m2PYG/iEAOkcj0/DbpDJO6HGHNC+xMXHfQel57F4HVyEEF71P2kBmb6huTfEql6Yv7hQnhAG2CTq2zq6g9C9yR9aSOAxaEcBcwI4oWr1PXZwke9hGEsiB5+eZtY2I4ELB+nnTl8M2tQE4HhD2WukbkZZyFha+SBioM82vOJDmhqh5PHlsL6GBbUlBMMfGv79GuVVoexS8h2UY51kVAgK2H3B6QF1XEzEEkBIES4CPtbHjMq54OAkmQIQbvXXDwUdbwIxaj6NCOCym7pR0emBEjffBxKH8xHyA4BmNUO45xLmEWHHv0GA+SjPA50IaKRGZYrRcNk2MPgYzgOmM/GvaeXAyjt3Wb5COAyzB5eGhN6eGzsJ9UQpQzjLsDPjSN1D3xvoThWlocJZhHArd9VAM+/BiGXMZ5EX7mn60gAjb26+gPgskjhyJi3TdH+9sZU5S5yzwNmWOCAXdeR1MXzPN7wJOM5Ww7FzswPGzt9RHO5/ljxIt3mh88f+IzVRw5ghDBRydsy+KpwLa+6Do2TVRgchlJlouclY8c3FIu0ZtHlUw2BHRinsWAXqgZU/KcnDkGvbinL+53tjS8MSM1wKmChl1/MJYtpWvjgbu9jXqwgYWrDswMWjSn+6soRQjnwr2YR5suTKDjb5zqJeX/u1+4ETi8OsP/eNM56OVE/p8k0nTGNMDrP4PMhQ5XRUOlCCjT2/0TZYOuIwweoocc5HKlE0TaJgsBRNY8brxEnx2eQUO5AsP74KTbO0RXm8SVY1ThNi58SddMaeTxxBBRBlCTkHP581zvFb4PyW2oEOGL3VorswvPzjduI4mz2i4+jKxo3faEtEcbIR5bPm87vH2jHiuHY/qx+hkMQHVGbW3xf21VyuGMZo6EgVK7AoY/svVR2CbcrihbrchFTrVEALBuWSBaIiUjK+ODOwK5WvWQqU07UPTseI4kooI7PFv6d/XTArZtQYqISaNzANWpSF5LLowLli7dQ/3r1ZhacFyA5ilm4OX20w3JV1mJEqvpgRLXKW7duEuyLt1JNmenuOpc5CFrmFOydmUh54PdKW9HekFO768+2mAyLlQN2YDF2ds3ToIk/i/dYUbpUQXEqBTL2qpXA3hgIpC5Pocjbp7PCMuWiuNQgATU1Q5S+2WS90OijN0WrfMPwf27kdSZN0v1U+sM9xJ8f76z4h+vpOndMiZPHyLNR0wmlwVm93DVuD23RQ+UAY/SysrnDqqW4fdULKaqg/4p/cwa/rwzJFt+UO793a6phSqk9apIyFaqdE4FVunUGvpmC0RaAjAm4mSA/t44lde9QFSIYgdy1yqT7ebA6g4zwBXP2+eDTTt76Prs0S2O2l3tLCm7kRH+gZFkyd2J0aEPJgHwtMuto7h08C0fXSjJc/RGvobh01+E/uI5PXe/tIAZA/grZRGLQfBU0H7vbNkgweXjrPk+4mb7IHAucRQZXB76e3j7emT+UJ2Z+xfjZW/lcff0ez/rODyH8nesW91dgEYwAAAABJRU5ErkJggg==" width="70" height="70" alt="designation-ico"/>
                                    <img class="catalog__ico-img" src="data:../images/base64/designation-ico/designation-ico3.png;base64,iVBORw0KGgoAAAANSUhEUgAAAEYAAABGCAMAAABG8BK2AAABAlBMVEVHcEz+rAD+rAD+rAD+rAD+rAD+rAD+rAD+rAD+rAD+rAD+rAD+rAD+rAD+rAD+rAD+rAD+rAD+rAD+rAD+rAD+rAD+rAD+rAD+rAD+rAD+rAD+rAD+rAD+rAD+rAD+rAD+rAD/////qwD9mgD/rgD+nAD+nQD/x1f/8tv/qgD+oQD/zGT+nwD+ogD/4KP/pQD+pwD/sAD/yV7/tAH/6sD/uyn/txb+lwD/3Jj+mQD/0nv/uB79kQD/0HP//vr/xE3/36D/zmn/5bD/4ab/1ob/9+f/14j/783/wUT/1YH/vTP/xlP/+u//8NX/wD3/tg3/2pH//PX/897///37hQD/57d+5njxAAAAIHRSTlMAlxnn9HrW8p+83Yz7gFojCKkQZSpRcAHJR7V1PTE57NybYWAAAAQ3SURBVFjDrZjXduo6EIadRnpvO8nJOfPLsoiMHBmDMaET0iC97Pd/lXNBtWmGvf8LL5ZkvjUejTSaMYwhHZxdLJwnVkdqY31t5XjRmKbTvZ21ZSJOE7V/OJl0sPIfxdLy5u54yuEqxdbWyuloyNEvmkkb/4yi7GzRrLoYpmzTHFqLUjZpLu2Pt8UWwuVERNwVljOLPcf9cSbfnp8zLhFxR3r1jJrCWelTdgeGpf0NeBYRSZ0FKkWbMSJijMnOk8kQp79eiYFR5ibv8SyIMfMZ99d4tKUtubTJdaj9dB0WisRe1IXNDLJ4VrYQIpfSabwG1bzQdv7dy/LgIVPNul42owff32xT9sIBI51HVINyrVZXQfCKZOkZ9Z8CeB66DF5A0ETRDv2jvcFWaBhT+gIeRZDCqzJbQBNgTeQB6eH2CjlneNUjxpBbysIvFVutnKLvT15SbwAqoDLwBZYEEMXQYnixiYgkT92jkRNKabOGz9rDzRvy3h2ojNQTWB36bghzYhjGfnjIyQBAPiASTwDwXXpD4acM3nj9KYOVYX9EfUMJwzjYilqTTCa9okuk/VQy6T3ptFdUOY/7aeF7lPNk0eMyEoNHxlk0LJkQQmhOxF0hhFBcCp3Wgjmaa0GuIC2iFDqMrlMEyeLt0AVjbcKso5TkcTDrxvrYOX2Tuf1QOg4mYWyMmZGmLlSAhuXGwCwZY05xppNXAICmxSxLTsGsGsujJ4SHjtLOR92ZYtLyOGvMQhdzG7zgQbEp1ozBtIMZAPDuAlzPhyEr28VclX5DunNihN8zJ6V8TXNiVOm2i6noGz4fxjGrLbdnTs2keTDuDfsAgnrPHJrjo6TplF8ANEv3Pe9YM2OEeHrENwDInpez5oxx4wS5rmvz6eCx89NTM1njmtTsBm8ucG1eAYDfvpjFxcxyvJc25PXJEkTcKlbwVRXTKCGMEn7nIz7LjtV2hsjVyZQ0A8ZK95xCZi/2nVjnTR+jvEpnVYqW7QhrgoSS4zDOe2cfVm3hiIyXmiDPt8U4TBoAUHADJnjjG5OV9c0xHyU8oJa50VzRPaarJUYfokz5vlBEro5DiRxkg4eoUkREqvVyFUP3KRGyJppguGvGkg4nmGi6c/1kLL3J/m7liaHka+ZjuQZXthxMvtFLvnkXD5N15OAl+/hvYE6Mxb+BuTSM8z/HbJwaxs6fY7YNwziIYB5mx+wOl1JzYNbb5W44d3vxMDVr4B46fNt32WcszLs9VOGFim/zKQ7loW/MXhdzGc531ZeplILoHdE7/fLuJHTtM9P1/HXjeowajVoh188WC4PFZniDakuoCRKWTeFV6mk/ej2fpP57v6KF+No8Zfj6cJ9iZXbKwqgmxdnSbJDlndEtk72ZOgxr41tBR7E9dP7vxH7S7kWMLk5i+3Jqe8u4PFw4TyyNbpEtJdYXTkYY8j8FNE3MEjvrTwAAAABJRU5ErkJggg==" width="70" height="70" alt="designation-ico"/>
                                    <img class="catalog__ico-img" src="data:../images/base64/designation-ico/designation-ico10.png;base64,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" width="70" height="70" alt="designation-ico"/>
                                </div>
                                <div class="catalog__img-wrapper">
                                    <img class="catalog__img catalog__img--6" src="./images/product-img/product-img7.jpg" alt="catalog-ico"/>
                                </div>
                            </div>
                            <div class="catalog__right-block catalog__right-block--big">
                                <p class="catalog__desc-top">Быстротвердеющий (около 2-х минут) ремонтный состав, предназначенный
                                    для оперативной ликвидации протечек внутренних и внешних стен, трещин,
                                    швов в бетонных и кирпичных конструкциях сооружений. Позволяет лик-
                                    видировать протечки при постоянном притоке воды.</p>
                                <h4 class="catalog__table-title">технические характеристики</h4>
                                <table class="catalog__table" cellspacing="0" cellpadding="5">
                                    <tr>
                                        <td valign="top">Внешний вид<br><br> </td>
                                        <td width="35%" valign="top">Сухая смесь</td>
                                    </tr>
                                    <tr>
                                        <td valign="top">Цвет</td>
                                        <td valign="top">Серый</td>
                                    </tr>
                                    <tr>
                                        <td valign="top">В/Т</td>
                                        <td valign="top">7,0–7,8 л/25 кг</td>
                                    </tr>
                                    <tr>
                                        <td valign="top">Начало схватывания</td>
                                        <td valign="top">Не ранее 1,5 мин</td>
                                    </tr>
                                    <tr>
                                        <td valign="top">Конец схватывания</td>
                                        <td valign="top">Не позднее 2,5 мин</td>
                                    </tr>
                                    <tr>
                                        <td valign="top">Прочность на сжатие через 24 часа</td>
                                        <td valign="top">Не менее 10 МПа </td>
                                    </tr>
                                    <tr>
                                        <td valign="top">Прочность на сжатие через 7 суток</td>
                                        <td valign="top">Не менее 15 МПа</td>
                                    </tr>
                                    <tr>
                                        <td valign="top">Прочность на сжатие через 28 суток</td>
                                        <td valign="top">Не менее 20 МПа</td>
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
                                <p class="catalog__desc-bottom">METACRETE Hydrostop PBF представляет собой сухую смесь, готовую к приме-
                                    нению. Hydrostop PBF при затворении водой образует быстросхватывающийся,
                                    расширяющийся и герметизирующий состав. Обеспечивает постоянную гидро-
                                    изоляцию, не подвергающуюся разрушению.
                                </p>
                            </div>
                            <div class="catalog__bottom-wrapper">
                                <a class="button button-catalog js-show-modal" href="#js-modal">Узнать цену</a>
                            </div>
                        </div>
                        <div class="catalog__product-accordeon">
                            <div class="catalog__product-item-wrapper">
                                <div class="catalog__product-item">
                                    <a href="#catalog__product25" class="catalog__product-item-title js-catalog__product-item-title">Применение</a>
                                    <img class="catalog__ico" href="#question-1" src="data:../images/base64/active-block.png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAMCAYAAABm+U3GAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA3ZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTM4IDc5LjE1OTgyNCwgMjAxNi8wOS8xNC0wMTowOTowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDoyZjhiNmZiZS1kOTFhLTdjNDUtODhiMS05ZWQxNjM3Zjc4NTgiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NDQ4MjUwNDBDODMyMTFFN0FBMzNDREIwQ0U3REI1RDkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NDQ4MjUwM0ZDODMyMTFFN0FBMzNDREIwQ0U3REI1RDkiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTcgKFdpbmRvd3MpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6N2JhNzRkYWYtMWQwZC0yZDQ2LTg0NGEtNTNiNjEyNDRkNzQxIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjJmOGI2ZmJlLWQ5MWEtN2M0NS04OGIxLTllZDE2MzdmNzg1OCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Ph5K7hIAAADESURBVHjaYmAgDvAB8QEg3grEXAxUAtxAfBiI/0HxDiBmp9RQLqhLQQZmAXE+EP+HupyNEkN3Qw3KRxIvgoptIMdwdqiX/0MNQgdVULk1QMxCrKFsUK+CNFbgUVcPVbMSiJmJMXQDVEMdEY5ogapdgs9wFqjXQAobSQi2bqie+UDMiC7JDPUSSEE7GRHdD9U7G9lwZqhXQBK9ZKYgkGFToWZMhRk+FyowgcI0zwh1McisPpDAUyCegi18yDQc5NDbAAEGAFv4LzpLbqyzAAAAAElFTkSuQmCC" width="22"
                                         height="125" alt="catalog-ico"/>
                                    <div class="catalog__product-content js-catalog__product-content" id="catalog__product25">
                                        <p class="catalog__product-desc-item">Применяется для ликвидациипротечек при постоянном притоке воды:</p>
                                        <ul class="catalog__product-list">
                                            <li class="catalog__product-list-item">―	гидроизоляция и защита бетонных и железобетонных конструкций от разрушающего действия воды;</li>
                                            <li class="catalog__product-list-item">―	в гражданском строительстве для гидроизоляции фундаментных плит, монолитных и сборных ограждающих кон-
                                                струкций, бассейнов и т.п.;</li>
                                            <li class="catalog__product-list-item">―	гидроизоляция промышленных объектов различного назначения, таких как тоннели, шахты, градирни, силосы, под-
                                                порные стенки, мостовые и портовые конструкции;</li>
                                            <li class="catalog__product-list-item">―	используется для быстрого закрепления анкеров, болтов, труб, свай и т.д.</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="catalog__product-item">
                                    <a href="#catalog__product26" class="catalog__product-item-title js-catalog__product-item-title">Упаковка</a>
                                    <img class="catalog__ico" href="#question-1" src="data:../images/base64/active-block.png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAMCAYAAABm+U3GAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA3ZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTM4IDc5LjE1OTgyNCwgMjAxNi8wOS8xNC0wMTowOTowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDoyZjhiNmZiZS1kOTFhLTdjNDUtODhiMS05ZWQxNjM3Zjc4NTgiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NDQ4MjUwNDBDODMyMTFFN0FBMzNDREIwQ0U3REI1RDkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NDQ4MjUwM0ZDODMyMTFFN0FBMzNDREIwQ0U3REI1RDkiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTcgKFdpbmRvd3MpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6N2JhNzRkYWYtMWQwZC0yZDQ2LTg0NGEtNTNiNjEyNDRkNzQxIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjJmOGI2ZmJlLWQ5MWEtN2M0NS04OGIxLTllZDE2MzdmNzg1OCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Ph5K7hIAAADESURBVHjaYmAgDvAB8QEg3grEXAxUAtxAfBiI/0HxDiBmp9RQLqhLQQZmAXE+EP+HupyNEkN3Qw3KRxIvgoptIMdwdqiX/0MNQgdVULk1QMxCrKFsUK+CNFbgUVcPVbMSiJmJMXQDVEMdEY5ogapdgs9wFqjXQAobSQi2bqie+UDMiC7JDPUSSEE7GRHdD9U7G9lwZqhXQBK9ZKYgkGFToWZMhRk+FyowgcI0zwh1McisPpDAUyCegi18yDQc5NDbAAEGAFv4LzpLbqyzAAAAAElFTkSuQmCC" width="22"
                                         height="125" alt="catalog-ico"/>
                                    <div class="catalog__product-content js-catalog__product-content" id="catalog__product26">
                                        <p class="catalog__product-desc-item">METACRETE Hydrostop PBF выпускается в герметичных ведрах по 2 и 9,5 кг, влагонепроницаемых мешках по 20 кг.</p>
                                    </div>
                                </div>
                                <!--<div class="catalog__product-item">-->
                                <!--<a href="#catalog__product27" class="catalog__product-item-title js-catalog__product-item-title">Расход</a>-->
                                <!--<img class="catalog__ico" href="#question-1" src="data:../images/base64/active-block.png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAMCAYAAABm+U3GAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA3ZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTM4IDc5LjE1OTgyNCwgMjAxNi8wOS8xNC0wMTowOTowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDoyZjhiNmZiZS1kOTFhLTdjNDUtODhiMS05ZWQxNjM3Zjc4NTgiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NDQ4MjUwNDBDODMyMTFFN0FBMzNDREIwQ0U3REI1RDkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NDQ4MjUwM0ZDODMyMTFFN0FBMzNDREIwQ0U3REI1RDkiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTcgKFdpbmRvd3MpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6N2JhNzRkYWYtMWQwZC0yZDQ2LTg0NGEtNTNiNjEyNDRkNzQxIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjJmOGI2ZmJlLWQ5MWEtN2M0NS04OGIxLTllZDE2MzdmNzg1OCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Ph5K7hIAAADESURBVHjaYmAgDvAB8QEg3grEXAxUAtxAfBiI/0HxDiBmp9RQLqhLQQZmAXE+EP+HupyNEkN3Qw3KRxIvgoptIMdwdqiX/0MNQgdVULk1QMxCrKFsUK+CNFbgUVcPVbMSiJmJMXQDVEMdEY5ogapdgs9wFqjXQAobSQi2bqie+UDMiC7JDPUSSEE7GRHdD9U7G9lwZqhXQBK9ZKYgkGFToWZMhRk+FyowgcI0zwh1McisPpDAUyCegi18yDQc5NDbAAEGAFv4LzpLbqyzAAAAAElFTkSuQmCC" width="22"-->
                                <!--height="125" alt="catalog-ico"/>-->
                                <!--<div class="catalog__product-content js-catalog__product-content" id="catalog__product27">-->
                                <!--<p class="catalog__product-desc-item">Расход METACRETE Hydrostop ELM-->
                                <!--составляет 1,1 кг/м 2 при толщине слоя в 1 мм, без учета шероховатости-->
                                <!--поверхности.</p>-->
                                <!--</div>-->
                                <!--</div>-->
                                <div class="catalog__product-item">
                                    <a href="#catalog__product28" class="catalog__product-item-title js-catalog__product-item-title">Подготовка основания</a>
                                    <img class="catalog__ico" href="#question-1" src="data:../images/base64/active-block.png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAMCAYAAABm+U3GAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA3ZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTM4IDc5LjE1OTgyNCwgMjAxNi8wOS8xNC0wMTowOTowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDoyZjhiNmZiZS1kOTFhLTdjNDUtODhiMS05ZWQxNjM3Zjc4NTgiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NDQ4MjUwNDBDODMyMTFFN0FBMzNDREIwQ0U3REI1RDkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NDQ4MjUwM0ZDODMyMTFFN0FBMzNDREIwQ0U3REI1RDkiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTcgKFdpbmRvd3MpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6N2JhNzRkYWYtMWQwZC0yZDQ2LTg0NGEtNTNiNjEyNDRkNzQxIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjJmOGI2ZmJlLWQ5MWEtN2M0NS04OGIxLTllZDE2MzdmNzg1OCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Ph5K7hIAAADESURBVHjaYmAgDvAB8QEg3grEXAxUAtxAfBiI/0HxDiBmp9RQLqhLQQZmAXE+EP+HupyNEkN3Qw3KRxIvgoptIMdwdqiX/0MNQgdVULk1QMxCrKFsUK+CNFbgUVcPVbMSiJmJMXQDVEMdEY5ogapdgs9wFqjXQAobSQi2bqie+UDMiC7JDPUSSEE7GRHdD9U7G9lwZqhXQBK9ZKYgkGFToWZMhRk+FyowgcI0zwh1McisPpDAUyCegi18yDQc5NDbAAEGAFv4LzpLbqyzAAAAAElFTkSuQmCC" width="22"
                                         height="125" alt="catalog-ico"/>
                                    <div class="catalog__product-content js-catalog__product-content" id="catalog__product28">
                                        <p class="catalog__product-desc-item catalog__product-desc-item--big">Основание должно быть очищено от
                                            масел, жиров, грязи и других посторонних
                                            веществ. Слабый бетон и цементное
                                            молочко должны быть удалены.</p>
                                        <p class="catalog__product-desc-item catalog__product-desc-item--big">
                                            При ликвидации акивных протечек
                                            необходимо увеличить глубину и ширину
                                            трещины до 15–20 мм.
                                        </p>
                                        <p class="catalog__product-desc-item catalog__product-desc-item--big">Рекомендуется придать внутренней части
                                            трещины форму «ласточкиного хвоста»,
                                            для достижения наилучшего результата.</p>
                                        <p class="catalog__product-desc-item catalog__product-desc-item--big">
                                            Если поверхность трещины или щели
                                            сухая, то, перед нанесением METACRETE
                                            Hydrostop PBF, необходимо тщательно
                                            увлажнить ремонтируемую поверхность
                                            водой в течение 15-ти минут.
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="catalog__content-item wow fadeIn">
                        <h3 class="catalog__title">Metacrete Hydrostop PB</h3>
                        <div class="catalog__product-wrapper">
                            <div class="catalog__left-block catalog__left-block--small">
                                <div class="catalog__ico-container">
                                    <img class="catalog__ico-img" src="data:../images/base64/designation-ico/designation-ico1.png;base64,iVBORw0KGgoAAAANSUhEUgAAAEYAAABGCAMAAABG8BK2AAAArlBMVEVHcEyVl5qVl5uVl5uVl5uVl5uVl5uVl5uVl5qVl5uVl5uVl5uVl5uVl5uVl5uVl5uVl5uVl5uUl5qVl5uVl5qVl5uVl5uVl5uVl5uVl5qVl5v///+WmJyDh4qAhIeXmZ2Mj5J9gYSJjI+Pkpbj5OSxs7bd3t/FxseGiY2foaTQ0tOWmJuqra/Mzc55fYCTlZjU1dbZ2tu5ur1vc3ekp6rw8PHq6+z5+fnAwsOanKBBEOBEAAAAGXRSTlMAUJUfnxLW8/J5hLgtqWC+bT0I3cnr9uXnWBIZBgAABKRJREFUWMONWIla6joQLggUFEVFPWfSNN0AylpA9Oj7v9ht0zSZLC03nwJd8ueffRLPs8awN+k/jMa+Pcb+fDaY9O68m2PYG/iEAOkcj0/DbpDJO6HGHNC+xMXHfQel57F4HVyEEF71P2kBmb6huTfEql6Yv7hQnhAG2CTq2zq6g9C9yR9aSOAxaEcBcwI4oWr1PXZwke9hGEsiB5+eZtY2I4ELB+nnTl8M2tQE4HhD2WukbkZZyFha+SBioM82vOJDmhqh5PHlsL6GBbUlBMMfGv79GuVVoexS8h2UY51kVAgK2H3B6QF1XEzEEkBIES4CPtbHjMq54OAkmQIQbvXXDwUdbwIxaj6NCOCym7pR0emBEjffBxKH8xHyA4BmNUO45xLmEWHHv0GA+SjPA50IaKRGZYrRcNk2MPgYzgOmM/GvaeXAyjt3Wb5COAyzB5eGhN6eGzsJ9UQpQzjLsDPjSN1D3xvoThWlocJZhHArd9VAM+/BiGXMZ5EX7mn60gAjb26+gPgskjhyJi3TdH+9sZU5S5yzwNmWOCAXdeR1MXzPN7wJOM5Ww7FzswPGzt9RHO5/ljxIt3mh88f+IzVRw5ghDBRydsy+KpwLa+6Do2TVRgchlJlouclY8c3FIu0ZtHlUw2BHRinsWAXqgZU/KcnDkGvbinL+53tjS8MSM1wKmChl1/MJYtpWvjgbu9jXqwgYWrDswMWjSn+6soRQjnwr2YR5suTKDjb5zqJeX/u1+4ETi8OsP/eNM56OVE/p8k0nTGNMDrP4PMhQ5XRUOlCCjT2/0TZYOuIwweoocc5HKlE0TaJgsBRNY8brxEnx2eQUO5AsP74KTbO0RXm8SVY1ThNi58SddMaeTxxBBRBlCTkHP581zvFb4PyW2oEOGL3VorswvPzjduI4mz2i4+jKxo3faEtEcbIR5bPm87vH2jHiuHY/qx+hkMQHVGbW3xf21VyuGMZo6EgVK7AoY/svVR2CbcrihbrchFTrVEALBuWSBaIiUjK+ODOwK5WvWQqU07UPTseI4kooI7PFv6d/XTArZtQYqISaNzANWpSF5LLowLli7dQ/3r1ZhacFyA5ilm4OX20w3JV1mJEqvpgRLXKW7duEuyLt1JNmenuOpc5CFrmFOydmUh54PdKW9HekFO768+2mAyLlQN2YDF2ds3ToIk/i/dYUbpUQXEqBTL2qpXA3hgIpC5Pocjbp7PCMuWiuNQgATU1Q5S+2WS90OijN0WrfMPwf27kdSZN0v1U+sM9xJ8f76z4h+vpOndMiZPHyLNR0wmlwVm93DVuD23RQ+UAY/SysrnDqqW4fdULKaqg/4p/cwa/rwzJFt+UO793a6phSqk9apIyFaqdE4FVunUGvpmC0RaAjAm4mSA/t44lde9QFSIYgdy1yqT7ebA6g4zwBXP2+eDTTt76Prs0S2O2l3tLCm7kRH+gZFkyd2J0aEPJgHwtMuto7h08C0fXSjJc/RGvobh01+E/uI5PXe/tIAZA/grZRGLQfBU0H7vbNkgweXjrPk+4mb7IHAucRQZXB76e3j7emT+UJ2Z+xfjZW/lcff0ez/rODyH8nesW91dgEYwAAAABJRU5ErkJggg==" width="70" height="70" alt="designation-ico"/>
                                    <img class="catalog__ico-img" src="data:../images/base64/designation-ico/designation-ico4.png;base64,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" width="70" height="70" alt="designation-ico"/>
                                    <img class="catalog__ico-img" src="data:../images/base64/designation-ico/designation-ico10.png;base64,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" width="70" height="70" alt="designation-ico"/>
                                </div>
                                <div class="catalog__img-wrapper">
                                    <img class="catalog__img catalog__img--6" src="./images/product-img/product-img8.jpg" alt="catalog-ico"/>
                                </div>
                            </div>
                            <div class="catalog__right-block catalog__right-block--big">
                                <p class="catalog__desc-top">Быстротвердеющий (около 5-ти минут) ремонтный состав, предназначенный
                                    для оперативной ликвидации протечек внутренних и внешних стен, трещин,
                                    швов в бетонных и кирпичных конструкциях сооружений. Позволяет лик-
                                    видировать протечки при постоянном притоке воды.</p>
                                <h4 class="catalog__table-title">технические характеристики</h4>
                                <table class="catalog__table" cellspacing="0" cellpadding="5">
                                    <tr>
                                        <td valign="top">Внешний вид<br><br> </td>
                                        <td width="35%" valign="top">Сухая смесь</td>
                                    </tr>
                                    <tr>
                                        <td valign="top">Цвет</td>
                                        <td valign="top">Серый</td>
                                    </tr>
                                    <tr>
                                        <td valign="top">Насыпная плотность</td>
                                        <td valign="top">1030±50</td>
                                    </tr>
                                    <tr>
                                        <td valign="top">В/Т</td>
                                        <td valign="top">7,0–7,8 л/25 кг</td>
                                    </tr>
                                    <tr>
                                        <td valign="top">Начало схватывания</td>
                                        <td valign="top">Не ранее 2 мин</td>
                                    </tr>
                                    <tr>
                                        <td valign="top">Конец схватывания</td>
                                        <td valign="top">Не позднее 5 мин</td>
                                    </tr>
                                    <tr>
                                        <td valign="top">Прочность на сжатие через 4 часа</td>
                                        <td valign="top">Не менее 20 МПа </td>
                                    </tr>
                                    <tr>
                                        <td valign="top">Прочность на сжатие через 24 часа</td>
                                        <td valign="top">Не менее 30 МПа </td>
                                    </tr>
                                    <tr>
                                        <td valign="top">Прочность на сжатие через 7 суток</td>
                                        <td valign="top">Не менее 40 МПа</td>
                                    </tr>
                                    <tr>
                                        <td valign="top">Прочность на сжатие через 28 суток</td>
                                        <td valign="top">Не менее 50 МПа</td>
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
                                <p class="catalog__desc-bottom">METACRETE Hydrostop PB представляет собой сухую смесь, готовую к приме-
                                    нению. Hydrostop PB при затворении водой образует быстросхватывающийся,
                                    расширяющийся и герметизирующий состав. Обеспечивает постоянную гидро-
                                    изоляцию, не подвергающуюся разрушению.
                                </p>
                            </div>
                            <div class="catalog__bottom-wrapper">
                                <a class="button button-catalog js-show-modal" href="#js-modal">Узнать цену</a>
                            </div>
                        </div>
                        <div class="catalog__product-accordeon">
                            <div class="catalog__product-item-wrapper">
                                <div class="catalog__product-item">
                                    <a href="#catalog__product29" class="catalog__product-item-title js-catalog__product-item-title">Применение</a>
                                    <img class="catalog__ico" href="#question-1" src="data:../images/base64/active-block.png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAMCAYAAABm+U3GAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA3ZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTM4IDc5LjE1OTgyNCwgMjAxNi8wOS8xNC0wMTowOTowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDoyZjhiNmZiZS1kOTFhLTdjNDUtODhiMS05ZWQxNjM3Zjc4NTgiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NDQ4MjUwNDBDODMyMTFFN0FBMzNDREIwQ0U3REI1RDkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NDQ4MjUwM0ZDODMyMTFFN0FBMzNDREIwQ0U3REI1RDkiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTcgKFdpbmRvd3MpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6N2JhNzRkYWYtMWQwZC0yZDQ2LTg0NGEtNTNiNjEyNDRkNzQxIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjJmOGI2ZmJlLWQ5MWEtN2M0NS04OGIxLTllZDE2MzdmNzg1OCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Ph5K7hIAAADESURBVHjaYmAgDvAB8QEg3grEXAxUAtxAfBiI/0HxDiBmp9RQLqhLQQZmAXE+EP+HupyNEkN3Qw3KRxIvgoptIMdwdqiX/0MNQgdVULk1QMxCrKFsUK+CNFbgUVcPVbMSiJmJMXQDVEMdEY5ogapdgs9wFqjXQAobSQi2bqie+UDMiC7JDPUSSEE7GRHdD9U7G9lwZqhXQBK9ZKYgkGFToWZMhRk+FyowgcI0zwh1McisPpDAUyCegi18yDQc5NDbAAEGAFv4LzpLbqyzAAAAAElFTkSuQmCC" width="22"
                                         height="125" alt="catalog-ico"/>
                                    <div class="catalog__product-content js-catalog__product-content" id="catalog__product29">
                                        <p class="catalog__product-desc-item">Применяется для ликвидациипротечек при постоянном притоке воды:</p>
                                        <ul class="catalog__product-list">
                                            <li class="catalog__product-list-item">―	гидроизоляция и защита бетонных и железобетонных конструкций от разрушающего действия воды;</li>
                                            <li class="catalog__product-list-item">―	в гражданском строительстве для гидроизоляции фундаментных плит, монолитных и сборных ограждающих кон-
                                                струкций, бассейнов и т.п.;</li>
                                            <li class="catalog__product-list-item">―	гидроизоляция промышленных объектов различного назначения, таких как тоннели, шахты, градирни, силосы, под-
                                                порные стенки, мостовые и портовые конструкции;</li>
                                            <li class="catalog__product-list-item">―	используется для быстрого закрепления анкеров, болтов, труб, свай и т.д.</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="catalog__product-item">
                                    <a href="#catalog__product30" class="catalog__product-item-title js-catalog__product-item-title">Упаковка</a>
                                    <img class="catalog__ico" href="#question-1" src="data:../images/base64/active-block.png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAMCAYAAABm+U3GAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA3ZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTM4IDc5LjE1OTgyNCwgMjAxNi8wOS8xNC0wMTowOTowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDoyZjhiNmZiZS1kOTFhLTdjNDUtODhiMS05ZWQxNjM3Zjc4NTgiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NDQ4MjUwNDBDODMyMTFFN0FBMzNDREIwQ0U3REI1RDkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NDQ4MjUwM0ZDODMyMTFFN0FBMzNDREIwQ0U3REI1RDkiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTcgKFdpbmRvd3MpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6N2JhNzRkYWYtMWQwZC0yZDQ2LTg0NGEtNTNiNjEyNDRkNzQxIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjJmOGI2ZmJlLWQ5MWEtN2M0NS04OGIxLTllZDE2MzdmNzg1OCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Ph5K7hIAAADESURBVHjaYmAgDvAB8QEg3grEXAxUAtxAfBiI/0HxDiBmp9RQLqhLQQZmAXE+EP+HupyNEkN3Qw3KRxIvgoptIMdwdqiX/0MNQgdVULk1QMxCrKFsUK+CNFbgUVcPVbMSiJmJMXQDVEMdEY5ogapdgs9wFqjXQAobSQi2bqie+UDMiC7JDPUSSEE7GRHdD9U7G9lwZqhXQBK9ZKYgkGFToWZMhRk+FyowgcI0zwh1McisPpDAUyCegi18yDQc5NDbAAEGAFv4LzpLbqyzAAAAAElFTkSuQmCC" width="22"
                                         height="125" alt="catalog-ico"/>
                                    <div class="catalog__product-content js-catalog__product-content" id="catalog__product30">
                                        <p class="catalog__product-desc-item">METACRETE Hydrostop PB выпускается в герметичных ведрах по 2 и 9,5 кг, влагонепроницаемых мешках по 20 кг.</p>
                                    </div>
                                </div>
                                <!--<div class="catalog__product-item">-->
                                <!--<a href="#catalog__product27" class="catalog__product-item-title js-catalog__product-item-title">Расход</a>-->
                                <!--<img class="catalog__ico" href="#question-1" src="data:../images/base64/active-block.png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAMCAYAAABm+U3GAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA3ZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTM4IDc5LjE1OTgyNCwgMjAxNi8wOS8xNC0wMTowOTowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDoyZjhiNmZiZS1kOTFhLTdjNDUtODhiMS05ZWQxNjM3Zjc4NTgiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NDQ4MjUwNDBDODMyMTFFN0FBMzNDREIwQ0U3REI1RDkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NDQ4MjUwM0ZDODMyMTFFN0FBMzNDREIwQ0U3REI1RDkiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTcgKFdpbmRvd3MpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6N2JhNzRkYWYtMWQwZC0yZDQ2LTg0NGEtNTNiNjEyNDRkNzQxIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjJmOGI2ZmJlLWQ5MWEtN2M0NS04OGIxLTllZDE2MzdmNzg1OCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Ph5K7hIAAADESURBVHjaYmAgDvAB8QEg3grEXAxUAtxAfBiI/0HxDiBmp9RQLqhLQQZmAXE+EP+HupyNEkN3Qw3KRxIvgoptIMdwdqiX/0MNQgdVULk1QMxCrKFsUK+CNFbgUVcPVbMSiJmJMXQDVEMdEY5ogapdgs9wFqjXQAobSQi2bqie+UDMiC7JDPUSSEE7GRHdD9U7G9lwZqhXQBK9ZKYgkGFToWZMhRk+FyowgcI0zwh1McisPpDAUyCegi18yDQc5NDbAAEGAFv4LzpLbqyzAAAAAElFTkSuQmCC" width="22"-->
                                <!--height="125" alt="catalog-ico"/>-->
                                <!--<div class="catalog__product-content js-catalog__product-content" id="catalog__product27">-->
                                <!--<p class="catalog__product-desc-item">Расход METACRETE Hydrostop ELM-->
                                <!--составляет 1,1 кг/м 2 при толщине слоя в 1 мм, без учета шероховатости-->
                                <!--поверхности.</p>-->
                                <!--</div>-->
                                <!--</div>-->
                                <div class="catalog__product-item">
                                    <a href="#catalog__product31" class="catalog__product-item-title js-catalog__product-item-title">Подготовка основания</a>
                                    <img class="catalog__ico" href="#question-1" src="data:../images/base64/active-block.png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAMCAYAAABm+U3GAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA3ZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTM4IDc5LjE1OTgyNCwgMjAxNi8wOS8xNC0wMTowOTowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDoyZjhiNmZiZS1kOTFhLTdjNDUtODhiMS05ZWQxNjM3Zjc4NTgiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NDQ4MjUwNDBDODMyMTFFN0FBMzNDREIwQ0U3REI1RDkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NDQ4MjUwM0ZDODMyMTFFN0FBMzNDREIwQ0U3REI1RDkiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTcgKFdpbmRvd3MpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6N2JhNzRkYWYtMWQwZC0yZDQ2LTg0NGEtNTNiNjEyNDRkNzQxIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjJmOGI2ZmJlLWQ5MWEtN2M0NS04OGIxLTllZDE2MzdmNzg1OCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Ph5K7hIAAADESURBVHjaYmAgDvAB8QEg3grEXAxUAtxAfBiI/0HxDiBmp9RQLqhLQQZmAXE+EP+HupyNEkN3Qw3KRxIvgoptIMdwdqiX/0MNQgdVULk1QMxCrKFsUK+CNFbgUVcPVbMSiJmJMXQDVEMdEY5ogapdgs9wFqjXQAobSQi2bqie+UDMiC7JDPUSSEE7GRHdD9U7G9lwZqhXQBK9ZKYgkGFToWZMhRk+FyowgcI0zwh1McisPpDAUyCegi18yDQc5NDbAAEGAFv4LzpLbqyzAAAAAElFTkSuQmCC" width="22"
                                         height="125" alt="catalog-ico"/>
                                    <div class="catalog__product-content js-catalog__product-content" id="catalog__product31">
                                        <p class="catalog__product-desc-item catalog__product-desc-item--big">Основание должно быть очищено от
                                            масел, жиров, грязи и других посторонних
                                            веществ. Слабый бетон и цементное
                                            молочко должны быть удалены.</p>
                                        <p class="catalog__product-desc-item catalog__product-desc-item--big">
                                            При ликвидации акивных протечек
                                            необходимо увеличить глубину и ширину
                                            трещины до 15–20 мм.
                                        </p>
                                        <p class="catalog__product-desc-item catalog__product-desc-item--big">Рекомендуется придать внутренней части
                                            трещины форму «ласточкиного хвоста»,
                                            для достижения наилучшего результата.</p>
                                        <p class="catalog__product-desc-item catalog__product-desc-item--big">
                                            Если поверхность трещины или щели
                                            сухая, то, перед нанесением METACRETE
                                            Hydrostop PB, необходимо тщательно
                                            увлажнить ремонтируемую поверхность
                                            водой в течение 15-ти минут.
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