var numOfSlides = 1;
var currentSlide = 1;
var slides = [{num: 1, slide: ""}];
var templateOfButton = function(num){
	return "<li><a class='btn btn-default btn-raised' onclick='setCurrentSlide(this, " + num + ")'>Слайд " 
		+ num
		+ "<div class='ripple-wrapper'></div></a> </li>";
}
$('#add-slide').click(function(){
	numOfSlides ++;
	slides.push({num: numOfSlides,
		slide: ""});
	$('.slides-list ul').append(templateOfButton(numOfSlides));
	$.material.init()
	
});

var setCurrentSlide = function(button, curSlide){
	$('.slide').hide(400, function(){
		$('.slides-list ul > * > *').removeClass('btn-primary');
		slides[currentSlide - 1].slide = $('#redactor').redactor('code.get');
		currentSlide = curSlide;
		$('#redactor').redactor('code.set', slides[currentSlide - 1].slide);
		$(button).addClass('btn-primary');
	});
	$('.slide').show(400);
}

var saveSlide = function(){
	slides[currentSlide - 1].slide = $('#redactor').redactor('code.get');
	//$('#success').fadeIn(300, function() {delay(100); $(this).fadeOut(100)});
	$('#success').fadeIn(300).delay(400).fadeOut(300);
}