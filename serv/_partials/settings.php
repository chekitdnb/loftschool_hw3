        <!--Setting Block-->
        <div class="generator__settings">
          <h2 class="h2">Настройки</h2>
          <!--Отправляем/получаем данные через ajax-->
          <?php
            include 'settings__upload.php';
          ?>
          <form class="settings__form" action="#" method="post">
            <fieldset class="form__block">
              <div class="block__header">
                <h3 class="p">Положение</h3>
                <!--Выбор типа наложения, .btn--active show active tab -->
                <div class="application-types">
                  <button data-type="use-four" class="btn--four-marks js-switch-type">4 Вотермарка</button>
                  <button data-type="use-one" class="btn--one-mark btn--active js-switch-type">1 Вотермарк</button>
                </div>
              </div>
              <div class="positioning">
                <!--Настройки для одного вотермарка -->
                <?php 
                  include 'settings__watermark.php';
                ?>
                <!--Настройки для нескольких вотермарков -->
                <?php
                  include 'settings__watermarks.php';
                ?>
              </div>
            </fieldset>
            <fieldset class="form__block">
              <div class="block__header">
                <p class="p">Прозрачность</p>
                <div class="slider-range"></div>
                <input id="opacity-value" type="text" name="opacity" value="80" readonly hidden class="opacity-val">
              </div>
            </fieldset>
            <fieldset class="form__block block--noborder">
              <button type="reset" class="btn--reset">Сброс</button>
              <button type="submit" class="btn--submit">Скачать</button>
            </fieldset>
          </form>
        </div>