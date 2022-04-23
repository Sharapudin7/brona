<div class="feedback">
  <div class="container">
    <div class="feedback__invitation">
      <div class="feedback__invitation-block">
        <div class="feedback__invitation-header">
          <h2>У ВАС ЕСТЬ ВОПРОСЫ?</h2>
        </div>
        <div class="line"></div>
        <p class="feedback__invitation-list">Закажите обратный звонок!</span></p>
        <p class="feedback__invitation-bottom">Наши специалисты ответят на Ваши вопросы <br> и помогут определиться с выбором!</p>
      </div>
    </div>
    <div class="feedback__modal">
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