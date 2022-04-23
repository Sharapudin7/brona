<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Партнерам");
?>

<div class="partners">
  <div class="container">
    <div class="partners__invitation">
      <div class="partners__invitation-block">
        <div class="partners__invitation-header">
          <h2>Приглашаем к сотрудничеству всех желающих</h2>
        </div>
        <div class="line"></div>
        <p class="partners__invitation-list">Диллеров - <span>Оптовые цены</span></p>
        <p class="partners__invitation-list">Дизайнеров - <span>Скидка 15%</span></p>
        <p class="partners__invitation-list">Прорабов - <span>Скидка 15%</span></p>
        <p class="partners__invitation-list">Установщиков - <span>Скидка 12%</span></p>
        <p class="partners__invitation-bottom">Индивидуальные условия уточняйте у менеджера</p>
      </div>
    </div>

    <div class="my-5 mx-auto text-center partners__modal">
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