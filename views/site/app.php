<?php 
	use imperavi\ImperaviRedactorWidget;
	
?>

<div class="app row">
	<div class="slides well col-md-2">
			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-2">
					<a id="add-slide" class="btn btn-primary btn-fab btn-raised mdi-image-add-to-photos" data-toggle="tooltip" data-placement="right" title="" data-original-title="Tooltip on right"></a>
				</div>
				<div class="col-md-4"></div>
			</div>
			<div class="slides-list">
			    <ul class="nav nav-pills nav-stacked">
					<li><a class='btn btn-default btn-raised' onclick="setCurrentSlide(this, 1)">Слайд 1</a> </li>
				</ul>
			</div>
	</div>	
	<div class="col-md-1"></div>
	<div class="col-md-7">
		
		<div class="well container slide">
			<a onclick="saveSlide()" class="btn btn-primary"><span class="mdi-content-save"></span>  Сохранить слайд</a>
			<a class="btn btn-danger"><span class="mdi-action-delete"></span>  Удалить слайд</a>
			<textarea id="redactor" name="redactor"></textarea>
		</div>
	</div>
	<div class="col-md-2"></div>
</div>
<button id="success" class="btn btn-fab btn-fab-mini btn-raised btn-sm btn-success" style="display: none; position: fixed; top: 50%; left: 50%;"><i class="mdi-navigation-check"></i></button>
<button id="showPresentation" 
	class="btn btn-primary btn-fab btn-raised mdi-action-open-in-browser" 
	style="position: fixed; top: 90%; left: 90%;" 
	data-toggle="tooltip" 
	data-placement="left" 
	title="" 
	data-original-title="Перейти к презентации"></button>
