var numOfSlides = 1;
var currentSlide = 1;
var slides = [
    {
        id: 1,
        slide: "",
        x: 0,
        y: 0,
        z: 0,
        rotate: 0,
        scale: 1,
        fon: true
    }
];
var templateOfButton = function(num){
	return "<li><a class='btn btn-default btn-raised' onclick='setCurrentSlide(this, " + num + ")'>Слайд " 
		+ num
		+ "<div class='ripple-wrapper'></div></a> </li>";
};

var addSlide = function(placeToInsert){
    numOfSlides ++;
    if(placeToInsert === undefined){
        slides.push(
            {
                id: numOfSlides,
                slide: "",
                x: 1000 * (numOfSlides - 1),
                y: 0,
                z: 0,
                rotate: 0,
                scale: 1,
                fon: true
            }
        );
        $('.slides-list ul').append(templateOfButton(numOfSlides));
        var button = $('.slides-list ul').children().last().children();
    }
    else {

    }
    $.material.init();
    setCurrentSlide(button, numOfSlides);
};

var readValues = function(){
    //Запись значений формы в массив slides
    slides[currentSlide - 1].slide = $('#redactor').redactor('code.get');
    slides[currentSlide - 1].x = $('#input-x').val();
    slides[currentSlide - 1].y = $('#input-y').val();
    slides[currentSlide - 1].z = $('#input-z').val();
    slides[currentSlide - 1].rotate = $('#input-rotate').val();
    slides[currentSlide - 1].scale = $('#input-scale').val();
    slides[currentSlide - 1].fon = $('#input-fon').prop('checked');
};

var writeValues = function(){
    //Установка значений в форму из массива slides
    $('#redactor').redactor('code.set', slides[currentSlide - 1].slide);
    $('#input-x').val(slides[currentSlide - 1].x);
    $('#input-y').val(slides[currentSlide - 1].y);
    $('#input-z').val(slides[currentSlide - 1].z);
    $('#input-rotate').val(slides[currentSlide - 1].rotate);
    $('#input-scale').val(slides[currentSlide - 1].scale);
    $('#input-fon').prop('checked', slides[currentSlide - 1].fon);
};

var setCurrentSlide = function(button, curSlide){
	$('.slide').hide(400, function(){
		$('.slides-list ul > * > *').removeClass('btn-primary');
        //Запись значений формы в массив slides
		readValues();

		currentSlide = curSlide;

        //Установка значений в форму из массива slides
		writeValues();

		$(button).addClass('btn-primary');
	});
	$('.slide').show(400);
};

var saveSlide = function(){
	readValues();
	$('#success').fadeIn(300).delay(400).fadeOut(300);
};

var removeSlide = function(){
    var confirmation = confirm("Вы действительно желаете удалить данный слайд?");
    if(confirmation){
        $('.slide').hide(400, function(){
            if(numOfSlides === 1){ //Если у нас всего один слайд, то устанавливаем настройки по умолчанию
                slides[0] = {
                    id: 1,
                    slide: "",
                    x: 0,
                    y: 0,
                    z: 0,
                    rotate: 0,
                    scale: 1,
                    fon: true
                };
            }
            else{
                slides.splice(currentSlide - 1, 1);
                numOfSlides = slides.length;
                $('.slides-list ul > *:last').remove();
                currentSlide --;
                $('.slides-list ul > * > *').removeClass('btn-primary');
                $('.slides-list ul > *:nth-child(' + currentSlide + ') a').addClass('btn-primary');
            }
            writeValues();
        });
        $('.slide').show(400);
    }
};

$('#showPresentation').click(function(){
	var actionUrl = $('#showPresentation').attr('data-action');
	$.post(actionUrl, {slides: slides}, function(presentation){
		var presentationWindow = window.open();
		presentationWindow.document.write(presentation);
	});
});