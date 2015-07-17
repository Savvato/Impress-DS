$(document).ready(function(){
	$.material.init();
	$('#redactor').redactor({
        plugins: ['underline', 'scriptbuttons', 'bufferbuttons']
    });
});