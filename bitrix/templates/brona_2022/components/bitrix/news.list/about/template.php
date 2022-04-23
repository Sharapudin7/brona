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
<div class="about">
  <div class="container">
    <?if($arParams["DISPLAY_TOP_PAGER"]):?>
    <?=$arResult["NAV_STRING"]?><br />
    <?endif;?>
    <?foreach($arResult["ITEMS"] as $arItem):?>
    <?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
    <div class="about__item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">

      <div class="row">
        <div class="col-sm-12 col-lg-6">
          <?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
          <?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
          <span class="about__name">
            <?echo $arItem["NAME"]?>
          </span>
          <?else:?>
          <b>
            <?echo $arItem["NAME"]?>
          </b><br />
          <?endif;?>
          <?endif;?>
          
          <video class="about__video" loop="" controls="ture" width="100%" height="auto">
            <source type="video/mp4" src="<?=CFile::GetPath(47)?>">
          </video>
        </div>
        <div class="col-sm-8 col-lg-5">
          <div class="about__item-right">
          <?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
          <p class="about__text">
            <?echo $arItem["PREVIEW_TEXT"];?>
          </p>
          <?endif;?>
            <button class="about__btn" data-toggle="modal" data-target="#exampleModal">Заказать звонок</button>       
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
                    "EMAIL_TO" => "imran@kaspsoft.com",
                    "EVENT_MESSAGE_ID" => "",
                    "OK_TEXT" => "Спасибо, ваше сообщение принято.",
                    "REQUIRED_FIELDS" => array(0=>"NAME",1=>"PHONE",),
                    "USE_CAPTCHA" => "Y"
                  )
                );?>
              </div>
            </div>
          </div>

          <div class="about__photos">
            <?foreach($arItem["PROPERTIES"]["MORE_PHOTO"]["VALUE"] as $item):?>
            <? $img = CFile::GetFileArray($item); ?>
            <div class="about__photo">
              <a data-fancybox="gallery" href="<?=$img["SRC"]?>"><img src="<?=$img["SRC"]?>"
                  alt="<?=$arResult["NAME"]?>" title="<?=$arResult["NAME"]?>" /></a>
            </div>
            <?endforeach;?>
          </div>
        </div>
        </div>
      </div>
    </div>
    <?endforeach;?>
    <?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
    <br /><?=$arResult["NAV_STRING"]?>
    <?endif;?>
  </div>
</div>