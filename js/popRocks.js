var $popRocks = jQuery.noConflict();
$popRocks(document).ready(function() {

		// custom popup action by unscene.us
		$popRocks('body').prepend('<div id="btn-tip-main"><div id="btn-tip-box"><i class="btn-tip-close icon-cross"></i><div id="btn-info"></div></div></div>');
		
		$popRocks('.btn-tip').each(function() {
			var addURL = $popRocks(this).attr('href');
			$popRocks(this).attr('data-url',addURL);
		});

		var popbtn = $popRocks('.btn-tip');
		var popContainr = $popRocks('#btn-tip-main');
		var popBox = $popRocks('#btn-tip-box');
		var popInfo = $popRocks('#btn-info');

		// start popup
		popbtn.click(function(e){
			e.preventDefault();
			var infoTXT=$popRocks(this).attr('data-text');
			var infoURL=$popRocks(this).attr('data-url');
			var infoTitle=$popRocks(this).attr('title');
			if(infoTXT!==""){
				popContainr.addClass('open');
				popInfo.html(function() {
					if(infoURL=="#close"){
						return "<h4>" + infoTitle + "</h4><p>" + infoTXT + "</p>" + "<a class='btn btn-default btn-tip-close' href='#'>Okay, Got it!</a>";
					} else {
						return "<h4>" + infoTitle + "</h4><p>" + infoTXT + "</p>" + "<a class='btn btn-primary' href='" + infoURL + "' target='_new'>Continue</a>";
					}
				});
				var popClose = $popRocks('.btn-tip-close');
				popClose.click(function(e){
					e.preventDefault();
					popContainr.removeClass('open');
				});


			} else{
				popContainr.addClass('open');
			    popInfo.html(fixThisShit);
			}
		});


});

