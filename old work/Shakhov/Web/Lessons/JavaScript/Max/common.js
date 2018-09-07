$(function(){
//document.cookie = "userName=loggedOnBefore"
	loggedTest();

/*	setCookie('Client', 'NotloggedOnBefore');
	alert(getCookie('Client'));
	console.log(document.cookie);*/

	//$.cookie('cookie_name', 'cookie_value');
	//var co = $.cookie('cookie_name');
//alert(co);




















	function loggedTest()
		{
			var pechenka = getCookie('Client');
			if(pechenka = "")
			{
				timr();
			}
		/*	else
			{
				//alert()	
			}*/
		}


	function timr(){
		setCookie('Client', 'loggedOnBefore');
		setTimeout(popUp, 15000);
	}

	function popUp(){
		$.fancybox.open( $('#num-popup'));
	}


	function setCookie(cname, cvalue)
	{
    var d = new Date();
    d.setTime(d.getTime() + (60000));
    var expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
	}


	function getCookie(cname) 
	{
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
	}

});
