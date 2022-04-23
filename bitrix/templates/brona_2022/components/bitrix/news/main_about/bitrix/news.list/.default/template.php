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
<div class="main__about">
  <div class="container">
    <?if($arParams["DISPLAY_TOP_PAGER"]):?>
    <?=$arResult["NAV_STRING"]?><br />
    <?endif;?>
    <?foreach($arResult["ITEMS"] as $arItem):?>
    <?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
    <div class="main__about-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
      <div class="main__about-left">
        <div class="main__about-text">
        <h5 class="main__about-header">О нас</h5>
          <a href="<?echo $arItem["DETAIL_PAGE_URL"]?>">
            <div class="main__about-name">
              <?echo $arItem["NAME"]?>
            </div>
          </a>
          <?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>

          <div class="main__about-descr">
          <?echo $arItem["PREVIEW_TEXT"];?>
          </div>
          <a href="#" class="main__about-detail">Подробнее</a>
        </div>
        <?endif;?>

        <div class="main__about-video">
          <video class="about__video" loop="" controls="ture" width="100%" height="auto">
            <source type="video/mp4" src="<?=CFile::GetPath(47)?>">
          </video>
        </div>
      </div>


      <div class="main__about-photos">
        <?foreach($arItem["PROPERTIES"]["MORE_PHOTO"]["VALUE"] as $item):?>
        <? $img = CFile::GetFileArray($item); ?>
        <div class="main__about-photo">
          <a data-fancybox="gallery" href="<?=$img["SRC"]?>"><img src="<?=$img["SRC"]?>" alt="<?=$arResult["NAME"]?>"
              title="<?=$arResult["NAME"]?>" /></a>
        </div>
        <?endforeach;?>
      </div>
      <div class="main__about-portfolio">
        <a href="/portfolio/">Все портфолио</a>
        <svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1.41 0L0 1.41L4.58 6L0 10.59L1.41 12L7.41 6L1.41 0Z" fill="#FF6040"/>
        </svg>
      </div>
    </div>
    <?endforeach;?>
    <?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
    <br /><?=$arResult["NAV_STRING"]?>
    <?endif;?>
  </div>
</div>