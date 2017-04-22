
function userValidator(){
		var regExp = /^[a-zA-Z0-9]{5,12}$/;
		// 做出验证
		if($("#user").val() == null || $("#user").val() == ""){
			// 为空
			$("#userTip").text("用户名不能为空.").removeClass().addClass('wrongFill');
			return false;
		}else if(!regExp.test(this.value)){
			// 不匹配
			$("#userTip").text("用户名格式输入错误.").removeClass().addClass('wrongFill');
			return false;
		}else{
			// 输入正确
			$("#userTip").text("用户名格式输入正确.").removeClass().addClass('rightFill');
			return true;
		}
	}

function pwdValidator(){
	var regExp = /^[a-zA-Z0-9]{5,12}$/;
	if($("#pwd").val() == null || $("#pwd").val() == ""){
		// 为空
		$("#pwdTip").text("密码不能为空.").removeClass().addClass('wrongFill');
		return false;
	}else if(!regExp.test(this.value)){
		// 不匹配
		$("#pwdTip").text("密码格式输入错误.").removeClass().addClass('wrongFill');
		return false;
	}else{
		// 输入正确
		$("#pwdTip").text("密码格式输入正确.").removeClass().addClass('rightFill');
		return true;
	}
}

$("#user").focus(function(){
	// 给出提示内容
	$("#userTip").text("用户名必须为6至12之间的英文和数字.").removeClass().addClass("focus");
}).blur(userValidator);

$("#pwd").focus(function(){
	$("#pwdTip").text("密码必须为6至12之间的英文和数字.").removeClass().addClass("focus");
}).blur(pwdValidator);

	
$("#btn").click(function(event){
	event.preventDefault();
	var user = $('#user').val(),
	pwd = $('#pwd').val();
	$.ajax({
		type: 'POST',
		url: '/admin/login',
		dataType: "json",
		data: "User[username]="+user+"&User[password]="+pwd,
		success:function(data){
			if(data == "1"){
				location.href = '/admin/index';
			}else{
				$("#pwdValTip").text(data);
			}
		},
	});
});

function subVal(){
	var user = $('#user').val(),
	pwd = $('#pwd').val();
	$.ajax({
		type: 'POST',
		url: '/admin/login',
		dataType: "json",
		data: "User[username]="+user+"&User[password]="+pwd,
		success:function(data){
			if(data == "1"){
				location.href = "/admin/index";
			}else{
				$("#pwdValTip").text(data);
			}
		},
	});
}