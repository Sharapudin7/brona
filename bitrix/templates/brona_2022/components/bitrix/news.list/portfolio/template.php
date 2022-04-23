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
$this->setFrameMode(true);
?>
<div class="portfolio">
  <div class="container">
    <?if($arParams["DISPLAY_TOP_PAGER"]):?>
    <?=$arResult["NAV_STRING"]?><br />
    <?endif;?>

    <?foreach($arResult["ITEMS"] as $arItem):?>
    <?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
    <div class="portfolio__items" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
      <?if($arItem["PROPERTIES"]["MORE_PHOTO"]["VALUE"]):?>
      <?foreach($arItem["PROPERTIES"]["MORE_PHOTO"]["VALUE"] as $item):?>
      <? $img = CFile::GetFileArray($item); ?>
      <div class="portfolio__item">
        <a data-fancybox="gallery" href="<?=$img["SRC"]?>"><img src="<?=$img["SRC"]?>" alt="<?=$arResult["NAME"]?>"
            title="<?=$arResult["NAME"]?>" /></a>
      </div>
      <?endforeach;?>
      <?endif;?>
    </div>
    <?endforeach;?>
    <?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
    <br /><?=$arResult["NAV_STRING"]?>
    <?endif;?>
  </div>
</div>