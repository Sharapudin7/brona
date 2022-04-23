<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');


CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("404 Not Found");


?> 
<div class="error__page">
  <h1 class="error__page-header">404</h1>
  <h3 class="error__page-subheader">Упс... Страница не найдена</h3>
  <p class="error__page-descr">Извините, но страницы, которую вы ищете, не существует.
    Вернитесь на главную страницу</p>
  <a href="/"><button class="error__page-btn">Вернуться на главную</button></a>
</div>
<?

// $APPLICATION->IncludeComponent("bitrix:main.map", ".default", Array(
// 	"LEVEL"	=>	"3",
// 	"COL_NUM"	=>	"2",
// 	"SHOW_DESCRIPTION"	=>	"Y",
// 	"SET_TITLE"	=>	"Y",
// 	"CACHE_TIME"	=>	"36000000"
// 	)
// );

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");

?>