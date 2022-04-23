<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Доставка и оплата");
?>

<div class="delivery">
  <div class="container">
    <div class="delivery__invitation">
      <div class="delivery__invitation-block">
        <div class="delivery__invitation-header">
          <h2>Быстро доставим любой Ваш заказ по всей России</h2>
        </div>
        <div class="line"></div>
        <p class="delivery__invitation-list">Бесплатная доставка в Дагестан и Чечню</span></p>
        <p class="delivery__invitation-list">При заказе от 70 000, бесплатно по всей России</span></p>
        <p class="delivery__invitation-bottom">По всем вопросам обращаться к менеджеру</p>
      </div>
    </div>
    <div class="my-5 mx-auto text-center delivery__modal">
      <button class="myBtn" data-toggle="modal" data-target="#exampleModal">Заказать звонок</button>
    </div>
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
  </div>
</div>




<div class="payment">
  <div class="container">
    <div class="delivery__invitation delivery__invitation-payment">
      <div class="delivery__invitation-block">
        <div class="delivery__invitation-header">
          <h2>Способы оплаты</h2>
        </div>
        <div class="line"></div>
        <p class="delivery__invitation-list">Наличные</span></p>
        <p class="delivery__invitation-list">Переводом на расчетный счет</span></p>
        <p class="delivery__invitation-bottom">По всем вопросам обращаться к менеджеру</p>
      </div>
    </div>
    <div class="my-5 mx-auto text-center payment__modal">
      <button class="myBtn" data-toggle="modal" data-target="#exampleModal">Заказать звонок</button>
    </div>
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

  </div>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>