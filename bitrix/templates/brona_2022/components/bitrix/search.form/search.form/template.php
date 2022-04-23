<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);?>
<div class="search-form">
  <form action="<?=$arResult["FORM_ACTION"]?>">
    <div class="search-form__form">
      <?if($arParams["USE_SUGGEST"] === "Y"):?>
      <?$APPLICATION->IncludeComponent(
          "bitrix:search.suggest.input",
          "",
          array(
            "NAME" => "q",
            "VALUE" => "",
            "INPUT_SIZE" => 15,
            "DROPDOWN_SIZE" => 10,
          ),
          $component, array("HIDE_ICONS" => "Y")
        );?>
          <?else:?><input type="text" name="q" value="" size="15" maxlength="50" class="search-form__input"
        placeholder="Поиск" />
      <?endif;?>
      <input name="s" type="submit" value="" class="search-form__submit" />
    </div>
  </form>
  <button class="btn search-block__hide">
    <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M2 2L30.8605 30.8605M30.8605 2L2 30.8605" stroke="#FFF" stroke-width="3.39535"
        stroke-linecap="round" stroke-linejoin="round" />
    </svg>
  </button>
</div>