/**
 * Javascript code
 * author: xum
 *   time: 2016-11-16
 */

$(document).ready(function(){
	$("#submit-btn").click(function(){		
		var $username = $("div#content input.username").val();
		var $password = $("div#content input.password").val();
		//alert($username + "---" + $password);
		if(($username != "tpv")||($password != "123456")){
			alert("�û��������������!");
		}else{
			 window.location.href = $newIndex;
/*			$.ajax({
				url: $newIndex
			   //data: {'username':$username, 'password':$password}	
			});*/
		}
	});
});