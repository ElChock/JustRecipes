$('.box_comida').click(function(e){
	var img = e.target.src;
	var box = '<div class="box" id="box"><img class="box_img" src="'+ img + '"><div class="box_boton" id="box_boton">X</div></div>';
	$('body').append(box);
	$('#box_boton').click(function(){
		$('#box').remove();
	})
})