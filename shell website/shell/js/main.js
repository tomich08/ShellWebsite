jQuery(document).ready(function($){
	//open the lateral panel
	$('.cd-btn').on('click', function(event){
		event.preventDefault();
		$('.para1').addClass('is-visible');
	});
	//clode the lateral panel
	$('.para1').on('click', function(event){
		if( $(event.target).is('.para1') || $(event.target).is('.cd-panel-close') ) { 
			$('.para1').removeClass('is-visible');
			event.preventDefault();
		}
	});
});

jQuery(document).ready(function($){
	//open the lateral panel
	$('.cd-btn2').on('click', function(event){
		event.preventDefault();
		$('.para2').addClass('is-visible');
	});
	//clode the lateral panel
	$('.para2').on('click', function(event){
		if( $(event.target).is('.para2') || $(event.target).is('.cd-panel-close') ) { 
			$('.para2').removeClass('is-visible');
			event.preventDefault();
		}
	});
});

jQuery(document).ready(function($){
	//open the lateral panel
	$('.cd-btn3').on('click', function(event){
		event.preventDefault();
		$('.para3').addClass('is-visible');
	});
	//clode the lateral panel
	$('.para3').on('click', function(event){
		if( $(event.target).is('.para3') || $(event.target).is('.cd-panel-close') ) { 
			$('.para3').removeClass('is-visible');
			event.preventDefault();
		}
	});
});