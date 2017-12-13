
function runBar1(){
	$ ("#progressbar1").css('display','inline-block');
	$('#progressb1').one('webkitAnimationEnd oanimationend msAnimationEnd animationend',   
  function(e) {
    
		var s2 = Snap('#animated2');
		var progress2 = s2.select('#progress2');
		
		progress2.attr({strokeDasharray: '0, 251.2'});
		$('#progress2').css('display','block');
		Snap.animate(0,251.2, function( value ) {
			progress2.attr({ 'stroke-dasharray':value+',251.2'});
		}, 500);
		
		var count2 = $(('#count2'));
		$({ Counter2: 0 }).animate({ Counter2: count2.text() }, {
		  duration: 500,
		  easing: 'linear',
		  step: function () {
			   
			 if(this.Counter2 > 95) {
				 runBar2();
		    }
			
		  }
		});


  });
}

function runBar2() {
	
		$ ("#progressbar2").css('display','inline-block');
	$('#progressb2').one('webkitAnimationEnd oanimationend msAnimationEnd animationend',   
  function(e) {
	
	var s3 = Snap('#animated3');
				var progress3 = s3.select('#progress3');

				progress3.attr({strokeDasharray: '0, 251.2'});
				$('#progress3').css('display','block');
				Snap.animate(0,251.2, function( value ) {
					progress3.attr({ 'stroke-dasharray':value+',251.2'});
				}, 500);
				var count3 = $(('#count3'));
		$({ Counter3: 0 }).animate({ Counter3: count3.text() }, {
		  duration: 500,
		  easing: 'linear',
		  step: function () {
			 if(this.Counter3 > 95) {
				 runBar3();
		    }
			
		  }
		});
				  });
}

function runBar3(){
	$ ("#progressbar3").css('display','inline-block');
	$('#progressb3').one('webkitAnimationEnd oanimationend msAnimationEnd animationend',   
  function(e) {
	
	var s4 = Snap('#animated4');
				var progress4 = s4.select('#progress4');

				progress4.attr({strokeDasharray: '0, 251.2'});
				$('#progress4').css('display','block');
				Snap.animate(0,251.2, function( value ) {
					progress4.attr({ 'stroke-dasharray':value+',251.2'});
				}, 500);
				var count4 = $(('#count4'));
		$({ Counter4: 0 }).animate({ Counter4: count4.text() }, {
		  duration: 500,
		  easing: 'linear',
		  step: function () {
			 if(this.Counter4 > 95) {
				 runBar4();
		    }
			
		  }
		});
				  });
}

function runBar4(){
	$ ("#progressbar4").css('display','inline-block');
	$('#progressb4').one('webkitAnimationEnd oanimationend msAnimationEnd animationend',   
  function(e) {
	
	var s5 = Snap('#animated5');
				var progress5 = s5.select('#progress5');

				progress5.attr({strokeDasharray: '0, 251.2'});
				$('#progress5').css('display','block');
				Snap.animate(0,251.2, function( value ) {
					progress5.attr({ 'stroke-dasharray':value+',251.2'});
				}, 500);
				var count5 = $(('#count5'));
		$({ Counter5: 0 }).animate({ Counter5: count5.text() }, {
		  duration: 500,
		  easing: 'linear',
		  step: function () {
			 if(this.Counter5 > 95) {
				 //runBar5();
		    }
			
		  }
		});
				  });
}

