var a = 0;
var b = 0;
function display(x){
	if(a == 0 && b == 0 && x == 1){
		jQuery('#myslidemenu'+x).css('display','block');
		a = 1;
		b = 0;
	}
	else if(a == 1 && b == 0 && x == 1){
		jQuery('#myslidemenu'+x).css('display','none');
		a = 0;
		b = 0;
	}
	else if(a == 1 && b == 0 && x == 2){
		jQuery('#myslidemenu1').css('display','none');
		jQuery('#myslidemenu'+x).css('display','block');
		a = 0;
		b = 1;
	}
	else if(a == 0 && b == 1 && x == 1){
		jQuery('#myslidemenu2').css('display','none');
		jQuery('#myslidemenu'+x).css('display','block');
		b = 0;
		a = 1;
	}
	else if(a == 0 && b == 0 && x == 2 ){
		jQuery('#myslidemenu'+x).css('display','block');
		b = 1;
		a = 0;
	}
	else if(a == 0 && b == 1 && x == 2 ){
		jQuery('#myslidemenu'+x).css('display','none');
		b = 0;
		a = 0;
	}	
}

