<?php 
	use imperavi\ImperaviRedactorWidget;
	use yii\helpers\Url;
	
?>

<div class="app row">
	<div class="slides well col-md-2">
			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-2">
					<button id="add-slide"
                            onclick="addSlide()"
                            class="btn btn-primary btn-fab btn-raised mdi-image-add-to-photos"
                            data-toggle="tooltip"
                            data-placement="right"
                            title="Добавить слайд"
                            data-original-title="Добавить слайд"
                            style="font-size: 30px; height: 60px; width: 60px;">
                    </button>
				</div>
				<div class="col-md-4 "></div>
			</div>
			<div class="slides-list">
			    <ul class="nav nav-pills nav-stacked">
					<li><a class='btn btn-primary btn-raised' onclick="setCurrentSlide(this, 1)">Слайд 1</a> </li>
				</ul>
			</div>
	</div>
	<div class="col-md-1 hidden-tablet hidden-phone"></div>
	<div class="col-md-7">

		<div class="well container-fluid slide">
			<a onclick="saveSlide()" class="btn btn-primary"><span class="mdi-content-save"></span>  Сохранить слайд</a>
			<a onclick="removeSlide()" class="btn btn-danger"><span class="mdi-action-delete"></span>  Удалить слайд</a>
			<textarea id="redactor" name="redactor"></textarea>

            <form class="form-horizontal">
                <fieldset>
                    <legend>Настройки слайда</legend>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="input-x" class="col-lg-4 control-label">Координата X:</label>
                                <div class="col-lg-6">
                                    <input type="number" class="form-control" id="input-x" placeholder="X" value="0">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input-y" class="col-lg-4 control-label">Координата Y:</label>
                                <div class="col-lg-6">
                                    <input type="number" class="form-control" id="input-y" placeholder="Y" value="0">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input-z" class="col-lg-4 control-label">Координата Z:</label>
                                <div class="col-lg-6">
                                    <input type="number" class="form-control" id="input-z" placeholder="Z" value="0">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="input-rotate" class="col-lg-4 control-label">Поворот слайда (в градусах):</label>
                                <div class="col-lg-6">
                                    <input type="number" class="form-control" id="input-rotate" placeholder="&#176;" value="0">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input-scale" class="col-lg-4 control-label">Масштаб:</label>
                                <div class="col-lg-6">
                                    <input type="number" class="form-control" id="input-scale" placeholder="&#128270;" value="1">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input-z" class="col-lg-4 control-label">Подложка: </label>
                                <div class="col-lg-6">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" class="col-lg-4" id="input-fon" checked>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </form>


		</div>
	</div>
	<div class="col-md-2"></div>
</div>
<button id="success" class="btn btn-fab btn-fab-mini btn-raised btn-sm btn-success" style="display: none; position: fixed; top: 50%; left: 50%; font-size: 35px; height: 70px; width: 70px;"><i class="mdi-navigation-check" style="font-size: 35px;"></i></button>
<button id="showPresentation" 
	class="btn btn-primary btn-fab btn-raised mdi-action-open-in-browser"  
	data-action="<?php echo Url::toRoute(['site/presentation']); ?>"
	style="position: fixed; top: 85%; left: 90%; font-size: 30px; height: 60px; width: 60px;"
	data-toggle="modal"
	data-target="#message" 
	data-placement="left" 
	title="Перейти к презентации" 
	data-original-title="Перейти к презентации"></button>

<div id="message" class="modal fade" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <p>Презентация откроется в новом окне вашего браузера. Приятного просмотра.</p>
		<small>Для переключения между слайдами используйте клавиши стрелок: вправо или вниз для перехода на следующий слайд; вверх или влево - для перехода на предыдущий слайд</small>
      </div>
    </div>
  </div>
</div>