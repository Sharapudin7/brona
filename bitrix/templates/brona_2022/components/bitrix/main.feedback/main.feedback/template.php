<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>
<div class="mfeedback">
  <?if(!empty($arResult["ERROR_MESSAGE"]))
{
	foreach($arResult["ERROR_MESSAGE"] as $v)
		ShowError($v);
}
if(strlen($arResult["OK_MESSAGE"]) > 0)
{
	?>
  <div class="mf-ok-text"><?=$arResult["OK_MESSAGE"]?></div>
  <?
}
?>

  <div class="modal-body">
    <form class="main__feedback" id="contactForm" action="<?=POST_FORM_ACTION_URI?>" method="POST">
      <?=bitrix_sessid_post()?>

      <h3 class="main__feedback-header">Оформление</h3>

      <div class="main__feedback-block">
        <div class="main__feedback-items">
          <div class="main__feedback-item">
            <?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME", $arParams["REQUIRED_FIELDS"])):?>
            <?endif?>
          </div>
          <input id="name" class="form-control" id="name" type="text" name="user_name"
            placeholder="Иванов Иван Иванович" value="<?=$arResult["AUTHOR_NAME"]?>">
        </div>

        <div class="main__feedback-items">
          <div class="main__feedback-item">
            <?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("user_city", $arParams["REQUIRED_FIELDS"])):?>
            <?endif?>
          </div>
          <input id="city" class="form-control" id="city" type="text" name="user_city" placeholder="г. Махачкала"
            value="<?=$arResult["AUTHOR_NAME"]?>">
        </div>


        <div class="main__feedback-items">
          <div class="main__feedback-item">
            <?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("user_phone", $arParams["REQUIRED_FIELDS"])):?>
            <?endif?>
          </div>
          <input id="phone" placeholder="+7 (999) 000-00-00" class="form-control" type="text" name="user_phone"
            value="<?=$arResult["user_phone"]?>">
        </div>
      </div>


      <!-- <div class="form-group">
  
		<div class="mf-text">
			<?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("EMAIL", $arParams["REQUIRED_FIELDS"])):?><?endif?>
		</div>
		<input id="email" class="form-control" type="email" placeholder="ivanov@email.com" name="user_email" value="<?=$arResult["AUTHOR_EMAIL"]?>">
    </div> -->



      <!-- <div class="form-group">
		<div class="mf-text">
			<?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("MESSAGE", $arParams["REQUIRED_FIELDS"])):?><?endif?>
		</div>
		<textarea id="message" class="form-control" name="MESSAGE" rows="4"><?=$arResult["MESSAGE"]?></textarea>
	</div> -->



      <input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
      <input id="button" class="btn btn-success" type="submit" name="submit" value="Отправить заявку">
    </form>
  </div>
</div>