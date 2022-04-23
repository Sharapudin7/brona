<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
<div class="footer">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-5 col-lg-2">
        <div class="footer__contacts">
          <div class="logo">
            <a href="/">
              <img src="/bitrix/templates/brona_2022/img/logo.svg" alt="">
            </a>
          </div>
          <div class="contacts__footer">
            <div class="contacts__info">
              <div class="contacts__info-icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M6.62 10.79C8.06 13.62 10.38 15.93 13.21 17.38L15.41 15.18C15.68 14.91 16.08 14.82 16.43 14.94C17.55 15.31 18.76 15.51 20 15.51C20.55 15.51 21 15.96 21 16.51V20C21 20.55 20.55 21 20 21C10.61 21 3 13.39 3 4C3 3.45 3.45 3 4 3H7.5C8.05 3 8.5 3.45 8.5 4C8.5 5.25 8.7 6.45 9.07 7.57C9.18 7.92 9.1 8.31 8.82 8.59L6.62 10.79Z"
                    fill="#FF6040" />
                </svg>
              </div>
              <a href="tel:+79886379000">+7 988 637 90 00</a>
            </div>
            <div class="contacts__info">
              <div class="contacts__info-icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M20.34 3.03L20.5 3C20.78 3 21 3.22 21 3.5V18.62C21 18.85 20.85 19.03 20.64 19.1L15 21L9 18.9L3.66 20.97L3.5 21C3.22 21 3 20.78 3 20.5V5.38C3 5.15 3.15 4.97 3.36 4.9L9 3L15 5.1L20.34 3.03ZM9 16.89L15 19V7.11L9 5V16.89Z"
                    fill="#FF6040" />
                </svg>
              </div>
              <a href="/contacts/">Смотреть на карте</a>
            </div>
            <div class="contacts__info">
              <div class="contacts__info-icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M20 4H4C2.9 4 2.01 4.9 2.01 6L2 18C2 19.1 2.9 20 4 20H20C21.1 20 22 19.1 22 18V6C22 4.9 21.1 4 20 4ZM4 8L12 13L20 8V18H4V8ZM4 6L12 11L20 6H4Z"
                    fill="#FF6040" />
                </svg>
              </div>
              <a href="mailto:info@gmail.com">info@gmail.com</a>
            </div>
          </div>
            <button class="contacts__button" data-toggle="modal" data-target="#exampleModal">Заказать звонок</button>
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Обратная связь</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span
                      aria-hidden="true">×</span> </button>
                </div>
                <?$APPLICATION->IncludeComponent(
                  "bitrix:main.feedback",
                  "main.feedback",
                  Array(
                    "AJAX_MODE" => "Y",
                    "EMAIL_TO" => "Sharapudinov_001@bk.ru",
                    "EVENT_MESSAGE_ID" => "",
                    "OK_TEXT" => "Спасибо, ваше сообщение принято.",
                    "REQUIRED_FIELDS" => array(
                      0=>"NAME",
                      1=>"user_phone",
                      2=>"user_phone",
                    ),
                    "USE_CAPTCHA" => "Y"
                  )
                );?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-4 footer__top footer__desktop">
        <h3 class="footer__top-text">Меню</h3>
        <div class="footer__menu">
          <ul class="footer__menu-list">
            <li class="footer__menu-list-item"><a href="/katalog/">Каталог</a></li>
            <li class="footer__menu-list-item"><a href="/services/">Услуги</a></li>
            <li class="footer__menu-list-item"><a href="/portfolio/">Портфолио</a></li>
            <li class="footer__menu-list-item"><a href="/contacts/">Где купить</a></li>
            <li class="footer__menu-list-item"><a href="/partneram/">Партнерам</a></li>
          </ul>
          <ul class="footer__menu-list">
            <li class="footer__menu-list-item"><a href="/blog/">Блог</a></li>
            <li class="footer__menu-list-item"><a href="/contacts/">Контакты</a></li>
            <li class="footer__menu-list-item"><a href="/about/">О компании</a></li>
            <li class="footer__menu-list-item"><a href="/dostavka-i-oplata/">Доставка и оплата</a></li>
            <li class="footer__menu-list-item"><a href="/vopros-otvet/">Вопрос-ответ</a></li>
          </ul>
        </div>
      </div>
      <div class="col-sm-12 col-md-7 col-lg-4 footer__top footer__desktop">
        <h3 class="footer__top-text">Каталог</h3>
        <div class="footer__menu">
          <ul class="footer__menu-list">
            <li class="footer__menu-list-item"><a href="/">Фрамуги</a></li>
            <li class="footer__menu-list-item"><a href="/">Капители </a></li>
            <li class="footer__menu-list-item"><a href="/">Плинтусы</a></li>
            <li class="footer__menu-list-item"><a href="/">Стекла</a></li>
            <li class="footer__menu-list-item"><a href="/">Фурнитура</a></li>
          </ul>
          <ul class="footer__menu-list">
            <li class="footer__menu-list-item"><a href="/">Входные двери</a></li>
            <li class="footer__menu-list-item"><a href="/">Межкомнатные двери</a></li>
            <li class="footer__menu-list-item"><a href="/">Межкомнатные окна</a></li>
            <li class="footer__menu-list-item"><a href="/">Фигурные наличники</a></li>
            <li class="footer__menu-list-item"><a href="/">Обшивка входной двери</a></li>
          </ul>
        </div>
      </div>
      <div class="col-sm-12 col-md-4 col-lg-1 footer__desktop">
        <h3 class="footer__top-text">Instagram</h3>
        <div class="footer__social">
          <a href="">
            <!-- <img src="/bitrix/templates/brona_2022/img/insta.svg" alt=""> -->
          </a>
          <a href="">
            <!-- <img src="/bitrix/templates/brona_2022/img/insta2.svg" alt=""> -->
          </a>
        </div>
      </div>
      <div class="footer_accordion footer__mobile">
        <div class="accordion-group accordion__group">
          <h3 class="accordion-header accordion__header default-open">Меню</h3>
          <div class="accordion__body accordion-body">
            <div class="col-sm-12 col-md-4 footer__top footer__top-mobile">
              <div class="footer__menu">
                <ul class="footer__menu-list">
                  <li class="footer__menu-list-item"><a href="/katalog/">Каталог</a></li>
                  <li class="footer__menu-list-item"><a href="/services/">Услуги</a></li>
                  <li class="footer__menu-list-item"><a href="/portfolio/">Портфолио</a></li>
                  <li class="footer__menu-list-item"><a href="/gde-kupit/">Где купить</a></li>
                  <li class="footer__menu-list-item"><a href="/partneram/">Партнерам</a></li>
                </ul>
                <ul class="footer__menu-list">
                  <li class="footer__menu-list-item"><a href="/blog/">Блог</a></li>
                  <li class="footer__menu-list-item"><a href="/contacts/">Контакты</a></li>
                  <li class="footer__menu-list-item"><a href="/about/">О компании</a></li>
                  <li class="footer__menu-list-item"><a href="/dostavka-i-oplata/">Доставка и оплата</a></li>
                  <li class="footer__menu-list-item"><a href="/vopros-otvet/">Вопрос-ответ</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer_accordion footer__mobile">
        <div class="accordion-group accordion__group">
          <h3 class="accordion-header accordion__header default-open">Каталог</h3>
          <div class="accordion__body accordion-body">
            <div class="col-sm-12 col-md-4 footer__top footer__top-mobile">
              <div class="footer__menu">
                <ul class="footer__menu-list">
                  <li class="footer__menu-list-item"><a href="/">Фрамуги</a></li>
                  <li class="footer__menu-list-item"><a href="/">Капители </a></li>
                  <li class="footer__menu-list-item"><a href="/">Плинтусы</a></li>
                  <li class="footer__menu-list-item"><a href="/">Стекла</a></li>
                  <li class="footer__menu-list-item"><a href="/">Фурнитура</a></li>
                </ul>
                <ul class="footer__menu-list">
                  <li class="footer__menu-list-item"><a href="/">Входные двери</a></li>
                  <li class="footer__menu-list-item"><a href="/">Межкомнатные двери</a></li>
                  <li class="footer__menu-list-item"><a href="/">Межкомнатные окна</a></li>
                  <li class="footer__menu-list-item"><a href="/">Фигурные наличники</a></li>
                  <li class="footer__menu-list-item"><a href="/">Обшивка входной двери</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer_accordion footer__mobile">
        <div class="accordion-group accordion__group">
          <h3 class="accordion-header accordion__header default-open">Instagram</h3>
          <div class="accordion__body accordion-body">
            <div class="col-sm-12 col-md-1">
              <div class="footer__social">
                <a href="">
                  <!-- <img src="/bitrix/templates/brona_2022/img/insta.svg" alt=""> -->
                </a>
                <a href="">
                  <!-- <img src="/bitrix/templates/brona_2022/img/insta2.svg" alt=""> -->
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer__bottom">
    <div class="footer__bottom-left">
      <span>© Brona 2022</span>
    </div>
    <div class="footer__bottom-right">
      <span>Все права защищены</span>
    </div>
  </div>
</div>
</div>
</body>

</html>