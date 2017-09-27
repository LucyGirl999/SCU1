$(function(){
	$("#activReg").css("color","#2057b2");
  	$(".searchIframe").hide();
	$(".searchContent").show();
	$(".userSearch").click(function(){
		$(".searchContent").show();
		$(".searchIframe").hide();
		$(".seniorSearch").css("background","#cfdcfd");
		$(".userSearch").css("background","#fff");
		
	});
	$(".seniorSearch").click(function() {
		$(".searchIframe").show();
		$(".searchContent").hide();
		$(".seniorSearch").css("background","#fff");
		$(".userSearch").css("background","#cfdcfd");
	}); 
	$("#i_rightNow").hide();
	$("#i_rightCheck").hide();
	$("#i_rightReg").hide();
	$(".opBgk").hide();
	$("#i_rightaReg").show();
	
	$(".operationLook").click(function(){
		$(".opBgk").show();
	})
	$(".submitClose").click(function(){
		$(".opBgk").hide();
	})
	$(".operationDel").click(function(){
		$(".opBgk").show();
	})
	$("#right_sbts").click(function(){
		$(".opBgk").show();
	})
	
  
});

function changeState(){
		var x=document.getElementsByClassName("one");
		if(document.getElementById("all").checked){
			for(i=0;i<x.length;i++){
				x[i].checked=true;
			}
		}
		else{
			for(i=0;i<x.length;i++){
				x[i].checked=false;
			}
		}
	}
$(function(){
})
laydate({
		elem: '#actDate', 
		event: 'focus'
	});	
function check4(){
	inputs=document.getElementById('layout').getElementsByTagName('input');
	spans=document.getElementById('layout').getElementsByTagName('span');
	textarea=document.getElementById('layout').getElementsByTagName('textarea')[0];
	tSpan=document.getElementById('layout').getElementsByTagName('span')[spans.length-1];
	for(i=0;i<inputs.length;i++){
		if(inputs[i].value==""){
			alert(spans[i].innerHTML+'不能为空');
			return false;
		}
	}
	if(textarea.value==""){
		alert(tSpan.innerHTML+'不能为空');
		return false;
	}
	return true;
}
