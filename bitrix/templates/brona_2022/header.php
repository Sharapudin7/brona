<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
<!DOCTYPE html>
<html>

<head>
  <?$APPLICATION->ShowHead();?>
  <title>
    <?$APPLICATION->ShowTitle();?>
  </title>

  <? 
    use Bitrix\Main\Page\Asset;
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/bootstrap.min.css", true);
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/bootstrap-grid.min.css", true);
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/slippry.css", true);
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/fancybox.css", true);
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/index.css", true);

    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery-3.6.0.min.js" );
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/bootstrap.bundle.min.js" );
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/fancybox.umd.js" );
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/slippry.min.js" );
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/script.js" );
    $APPLICATION->AddHeadString("<link rel='shortcut icon' type='image/x-icon' href='/favicon.ico' />");
    $APPLICATION->AddHeadString("<meta name='viewport' content='width=device-width, initial-scale=1.0'>");
    ?>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
    integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
    integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous">
  </script>


</head>

<body>
  <div id="panel">
    <?$APPLICATION->ShowPanel();?>
  </div>
  <header <?if ($APPLICATION->GetCurDir()=='/'):?>class="header"
    <?else:?> class="header-top"
    <?endif;?>>
    <div class="container">
      <div class="header__top">

        <div class="header__contacts">
          <div class="header__top-block">
            <a href="https://www.instagram.com" class="header__social-link" target="_blank">
              <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M12.855 15.9766H5.14499C3.44249 15.9766 2.0625 14.5966 2.0625 12.8941V5.18406C2.0625 3.48156 3.44249 2.10156 5.14499 2.10156H12.855C14.5575 2.10156 15.9375 3.48156 15.9375 5.18406V12.8941C15.9375 14.5966 14.5575 15.9766 12.855 15.9766Z"
                  stroke="white" stroke-width="1.12" stroke-linecap="round" stroke-linejoin="round" />
                <path
                  d="M8.99977 11.7144C10.4785 11.7144 11.6773 10.5156 11.6773 9.03687C11.6773 7.55813 10.4785 6.35938 8.99977 6.35938C7.52103 6.35938 6.32227 7.55813 6.32227 9.03687C6.32227 10.5156 7.52103 11.7144 8.99977 11.7144Z"
                  stroke="white" stroke-width="1.12" stroke-linecap="round" stroke-linejoin="round" />
                <path
                  d="M12.8623 5.97859C13.289 5.97859 13.6348 5.63273 13.6348 5.20609C13.6348 4.77945 13.289 4.43359 12.8623 4.43359C12.4357 4.43359 12.0898 4.77945 12.0898 5.20609C12.0898 5.63273 12.4357 5.97859 12.8623 5.97859Z"
                  fill="white" />
              </svg>
            </a>
            <a href="https://www.pinterest" class="header__social-link" target="_blank">
              <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M8.4375 6.1875L6.1875 15.75" stroke="white" stroke-width="1.125" stroke-linecap="round"
                  stroke-linejoin="round" />
                <path
                  d="M4.32729 11.0077C3.83796 10.2778 3.52644 9.44337 3.41769 8.57138C3.30895 7.69939 3.406 6.81405 3.70108 5.98632C3.99615 5.1586 4.48105 4.41152 5.11688 3.80497C5.75272 3.19842 6.52181 2.74927 7.36252 2.49351C8.20322 2.23776 9.09215 2.18253 9.95805 2.33224C10.8239 2.48195 11.6427 2.83244 12.3488 3.35561C13.0548 3.87878 13.6284 4.56009 14.0237 5.34491C14.419 6.12974 14.6249 6.99625 14.6249 7.875C14.6249 10.9816 12.3749 12.9375 10.1249 12.9375C7.87494 12.9375 7.19772 11.4563 7.19772 11.4563"
                  stroke="white" stroke-width="1.125" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </a>
            <a href="https://www.whatsapp.com" class="header__social-link" target="_blank">
              <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M3.19421 12.4434C2.35557 11.0297 2.06187 9.35842 2.36826 7.74344C2.67465 6.12847 3.56006 4.6809 4.85823 3.67255C6.15639 2.66419 7.77801 2.16442 9.41858 2.26709C11.0592 2.36975 12.6058 3.06778 13.7681 4.2301C14.9305 5.39243 15.6285 6.93909 15.7312 8.57966C15.8339 10.2202 15.3341 11.8418 14.3258 13.14C13.3174 14.4382 11.8698 15.3236 10.2549 15.63C8.6399 15.9364 6.96862 15.6427 5.55487 14.8041L5.55488 14.804L3.22356 15.4701C3.12711 15.4977 3.02504 15.4989 2.92793 15.4738C2.83082 15.4486 2.74221 15.3979 2.67128 15.327C2.60035 15.2561 2.54967 15.1675 2.52451 15.0703C2.49935 14.9732 2.50061 14.8712 2.52817 14.7747L3.19426 12.4434L3.19421 12.4434Z"
                  stroke="white" stroke-width="0.9" stroke-linecap="round" stroke-linejoin="round" />
                <path
                  d="M10.6955 12.9375C9.95546 12.9385 9.2225 12.7936 8.5386 12.5109C7.8547 12.2281 7.23331 11.8133 6.71002 11.29C6.18674 10.7667 5.77186 10.1453 5.48915 9.4614C5.20644 8.7775 5.06145 8.04454 5.06251 7.30451C5.06418 6.78361 5.27239 6.28465 5.64147 5.91707C6.01055 5.54949 6.51035 5.34331 7.03125 5.34375C7.11669 5.34375 7.20061 5.36634 7.2745 5.40922C7.3484 5.4521 7.40965 5.51376 7.45204 5.58794L8.27406 7.02649C8.32364 7.11324 8.34921 7.21164 8.34814 7.31155C8.34708 7.41146 8.31942 7.50929 8.26802 7.59497L7.60785 8.69525C7.94749 9.44898 8.55102 10.0525 9.30475 10.3922L10.405 9.73199C10.4907 9.68058 10.5885 9.65292 10.6885 9.65186C10.7884 9.6508 10.8868 9.67637 10.9735 9.72594L12.4121 10.548C12.4862 10.5904 12.5479 10.6516 12.5908 10.7255C12.6337 10.7994 12.6563 10.8833 12.6563 10.9687C12.6548 11.4891 12.448 11.9877 12.0808 12.3564C11.7136 12.7251 11.2158 12.9339 10.6955 12.9375Z"
                  stroke="white" stroke-width="0.9" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </a>
          </div>
          <div class="header__top-block">
            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M8.65447 9.3435C11.5645 12.2535 12.232 8.886 14.0845 10.7385C15.8695 12.5235 16.897 12.8835 14.632 15.1485C14.347 15.3735 12.547 18.1185 6.20947 11.7885C-0.128027 5.451 2.61697 3.651 2.84197 3.366C5.11447 1.0935 5.46697 2.1285 7.25197 3.9135C9.11197 5.766 5.74447 6.4335 8.65447 9.3435Z"
                stroke="white" stroke-width="1.12" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <a href="tel:+79285222200" class="header__contact-link">
              <span>8-988-637-90-00</span>
            </a>
          </div>
        </div>
      </div>
      <div class="header__main">
        <div class="header__main-block">
          <div class="header__menu header__menu_left">
            <div class="search-block">
              <button class="btn search-block__button">
                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M8.15625 14.0625C11.4182 14.0625 14.0625 11.4182 14.0625 8.15625C14.0625 4.89432 11.4182 2.25 8.15625 2.25C4.89432 2.25 2.25 4.89432 2.25 8.15625C2.25 11.4182 4.89432 14.0625 8.15625 14.0625Z"
                    stroke="white" stroke-width="1.125" stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M12.3321 12.332L15.7493 15.7493" stroke="white" stroke-width="1.125" stroke-linecap="round"
                    stroke-linejoin="round" />
                </svg>
                <span class="search__block-text">Поиск</span>
                </bitton>
            </div>


            <?$APPLICATION->IncludeComponent(
        "bitrix:menu",
        "menu_left",
        Array(
          "ALLOW_MULTI_SELECT" => "N",
          "CHILD_MENU_TYPE" => "top",
          "DELAY" => "N",
          "MAX_LEVEL" => "1",
          "MENU_CACHE_GET_VARS" => array(""),
          "MENU_CACHE_TIME" => "3600",
          "MENU_CACHE_TYPE" => "N",
          "MENU_CACHE_USE_GROUPS" => "Y",
          "ROOT_MENU_TYPE" => "top",
          "USE_EXT" => "N"
        )
      );?>
          </div>
          <div class="logo">
            <a href="/">
              <img src="/bitrix/templates/brona_2022/img/logo.svg" alt="">
            </a>
          </div>
          <div class="header__menu header__menu_right">
            <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"menu_right", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "drop-down",
		"DELAY" => "N",
		"MAX_LEVEL" => "2",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "right",
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => "menu_right"
	),
	false
);?>
            <div class="menu__top block__right">
              <a href="/wishlist/">
                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M14.7969 4.24659C16.401 5.90871 16.401 8.60369 14.7969 10.2658L9.44943 15.8069C9.20088 16.0644 8.79789 16.0644 8.54937 15.8068L3.20305 10.2658C1.59898 8.60369 1.59898 5.90871 3.20305 4.24659C4.80311 2.58862 7.39498 2.58448 9 4.23416C10.605 2.58448 13.1969 2.58862 14.7969 4.24659Z"
                    stroke="white" stroke-width="1.12" />
                </svg>
              </a>
              <a href="/basket">
                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M5.625 16.3125C6.24632 16.3125 6.75 15.8088 6.75 15.1875C6.75 14.5662 6.24632 14.0625 5.625 14.0625C5.00368 14.0625 4.5 14.5662 4.5 15.1875C4.5 15.8088 5.00368 16.3125 5.625 16.3125Z"
                    fill="white" />
                  <path
                    d="M12.9375 16.3125C13.5588 16.3125 14.0625 15.8088 14.0625 15.1875C14.0625 14.5662 13.5588 14.0625 12.9375 14.0625C12.3162 14.0625 11.8125 14.5662 11.8125 15.1875C11.8125 15.8088 12.3162 16.3125 12.9375 16.3125Z"
                    fill="white" />
                  <path
                    d="M2.97322 5.0625H15.5893L13.7331 11.5591C13.666 11.7941 13.5241 12.0009 13.3289 12.1481C13.1337 12.2954 12.8959 12.375 12.6514 12.375H5.91109C5.66661 12.375 5.42879 12.2954 5.23362 12.1481C5.03844 12.0009 4.89654 11.7941 4.82937 11.5591L2.28621 2.65797C2.25262 2.54044 2.18167 2.43704 2.08408 2.36343C1.9865 2.28982 1.86759 2.25 1.74535 2.25H0.5625"
                    stroke="white" stroke-width="1.125" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </a>
              <a href="/">
                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M9 11.25C11.4853 11.25 13.5 9.23528 13.5 6.75C13.5 4.26472 11.4853 2.25 9 2.25C6.51472 2.25 4.5 4.26472 4.5 6.75C4.5 9.23528 6.51472 11.25 9 11.25Z"
                    stroke="white" stroke-width="1.125" stroke-miterlimit="10" />
                  <path
                    d="M2.17883 15.1868C2.8704 13.9898 3.86479 12.9959 5.06213 12.3048C6.25946 11.6138 7.61756 11.25 9 11.25C10.3824 11.25 11.7405 11.6138 12.9378 12.3049C14.1352 12.996 15.1295 13.9899 15.8211 15.187"
                    stroke="white" stroke-width="1.125" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div <?if ($APPLICATION->GetCurDir()=='/'):?>class="main__showTitleNone"
        <?else:?> class="main__showTitle"
        <?endif;?>>
        <span>
          <?$APPLICATION->ShowTitle(false)?>
        </span>
      </div>
      <div class="main__breadcrumb">
        <?
        $page = $APPLICATION->GetCurPage();
      
        if($page!="/"){
          $APPLICATION->IncludeComponent(
            "bitrix:breadcrumb", 
            "breadcrumb", 
            array(
              "START_FROM" => "0",
              "PATH" => "",
              "SITE_ID" => "s1",
              "COMPONENT_TEMPLATE" => "breadcrumb"
            ),
            false
          );
        }
        ?>
      </div>
    </div>
  </header>

  <div <?if ($APPLICATION->GetCurDir()=='/'):?>class="header-mob"
    <?else:?> class="header-mob-backg"
    <?endif;?>>
    <div>
      <div class="container">
        <div class="header-mob__container">
          <button class="btn header-mob__button search-block__button">
            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M8.15625 14.0625C11.4182 14.0625 14.0625 11.4182 14.0625 8.15625C14.0625 4.89432 11.4182 2.25 8.15625 2.25C4.89432 2.25 2.25 4.89432 2.25 8.15625C2.25 11.4182 4.89432 14.0625 8.15625 14.0625Z"
                stroke="white" stroke-width="1.125" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M12.3321 12.332L15.7493 15.7493" stroke="white" stroke-width="1.125" stroke-linecap="round"
                stroke-linejoin="round" />
            </svg>
          </button>

          <div class="logo">
            <a href="/">
              <img src="/bitrix/templates/brona_2022/img/logo.svg" alt="">
            </a>
          </div>

          <button class="btn header-mob__button header-mob__burger">
            <svg width="28" height="22" viewBox="0 0 28 22" fill="none" xmlns="http://www.w3.org/2000/svg"
              class="burger">
              <path d="M26.0542 2.03418H2.04508" stroke="#fff" stroke-width="3.00114" stroke-linecap="round"
                stroke-linejoin="round" />
              <path d="M26.0542 20.2673H14.0496" stroke="#fff" stroke-width="3.00114" stroke-linecap="round"
                stroke-linejoin="round" />
              <path d="M26.0542 11.1509H2.04508" stroke="#fff" stroke-width="3.00114" stroke-linecap="round"
                stroke-linejoin="round" />
            </svg>

            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
              class="menu-close">
              <path d="M2 2.11597L21.884 22" stroke="#fff" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" />
              <path d="M2.07178 21.884L21.9558 2.00001" stroke="#fff" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" />
            </svg>
          </button>
        </div>
        <div class="header-mob__dropdown">
          <ul class="header-mob__menu-list">
            <li class="header-mob__menu-list-item"><a href="/katalog/">Каталог</a></li>
            <li class="header-mob__menu-list-item"><a href="/blog/">Блог</a></li>
            <li class="header-mob__menu-list-item"><a href="/services/">Услуги</a></li>
            <li class="header-mob__menu-list-item"><a href="/portfolio/">Портфолио</a></li>
            <li class="header-mob__menu-list-item"><a href="/contacts/">Где купить</a></li>
            <li class="header-mob__menu-list-item"><a href="/partneram/">Патнерам</a></li>
            <li class="header-mob__menu-list-item"><a href="/about/">О компании</a></li>
            <li class="header-mob__menu-list-item"><a href="/dostavka-i-oplata/">Доставка и оплата</a></li>
            <li class="header-mob__menu-list-item"><a href="/vopros-otvet/">Вопрос-ответ</a></li>
            <li class="header-mob__menu-list-item"><a href="/contacts/">Контакты</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>