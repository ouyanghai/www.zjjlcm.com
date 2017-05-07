$(function(){
	$(".open li").css("height","25px");
	$(".open-hide").click(function(){
		var sub = $(this).siblings('.sub');
		if(sub.is(":visible")){
			sub.find('li').animate({height:"0px"},function(){
				sub.hide();	
			});
		}else{
			sub.show();
			sub.find('li').animate({height:"25px"});
		}
	});
	$("#u_sub").click(function(){
		$.ajax({
			type: 'post',
			url : '/admin/manage',
			dataType: 'text',
			data: $("#uform").serialize(),
			beforeSend:function(){
				$("#u_sub").html('修改中...');
				$(this).attr('disabled',true);
			},
			success: function(data){
				if(data === false){
					alert('修改失败');
					return;
				}
				alert('修改成功');
				//关闭子窗口
				var mask = window.parent.document.getElementById('mask');
				var user = window.parent.document.getElementById('user_manage');
				mask.style.display='none';
				user.style.display='none';
				//window.location.reload();
			},
			error: function(data){
				alert('操作失败');
			}
		});
	});
	/*
	$("#add_sub").click(function(event){
		var ajaxevent = false;
		if(ajaxevent){
			return false;
		}
		ajaxevent = true;
		var username = $("#add_user").val();
		var password = $("#add_pass").val();
		$.ajax({
			type: 'post',
			url: '/admin/addpass',
			data: {username:username,password:password},
			dataType: 'json',
			success:function(data){
				if(data === true){
					alert('增加成功');
					return true;	
				}else{
					alert('增加失败!'+data);
					ajaxevent = false;
					return;
				}
			},
			error: function(){
				ajaxevent = false;
				alert('操作失败');
			}
		});
	});
	*/
	
	$("#subcity").click(function(event){
		var title = $("#title").val();
		if(title==''){
			alert('城市名称不能为空');
		}
		event.preventDefault();
		$.ajax({
			type:'post',
			url:'/admin/createcity',
			data: {'title':title},
			dataType: 'json',
			success: function(data){
				if(data === false){
					alert('增加失败');
					return;
				}
				alert('增加成功');
				window.location.reload();
			},
			error: function(){
				alert('操作失败');
			}
		});
	});
	
	$("#modcity").click(function(event){
		var title = $("#title").val();
		var id = $("#city_id").val();
		if(id==''){
			alert('数据错误');
		}
		if(title==''){
			alert('城市名称不能为空');
		}
		event.preventDefault();
		$.ajax({
			type:'post',
			url:'/admin/domodcity',
			data: {'id':id,'title':title},
			dataType: 'json',
			success: function(data){
				if(data === false){
					alert('修改失败');
					return;
				}
				alert('修改成功');
				window.location.href="/admin/citylist";
			},
			error: function(){
				alert('操作失败');
			}
		});
	});
});

function userDel(id){
	$.ajax({
		type: 'post',
		url: '/admin/del',
		data: {id:id},
		dataType: 'json',
		success: function(data){
			if(data === false){
				alert('删除失败');
				return;
			}
			alert('删除成功');
			window.location.reload();
		},
		error: function(){
			alert('操作失败');
		}
	})
}

function getUserInfo(id){
	var url = '/admin/getuserinfo?id='+id;
	$("#user_iframe").attr('src',url);
	$("#mask,#user_manage").show();
}

function close(){
	$("#mask,#user_manage").hide();
}

function delcity(id){
	$.ajax({
		type: 'post',
		url: '/admin/delcity',
		dataType: 'json',
		data: {'id':id},
		success:function(data){
			if(data != true){
				alert('删除失败!');
				return;
			}
			alert('删除成功');
			window.location.reload();
		},
		error:function(){
			alert('操作失败');
		},
	});
}
function delline(id){
	$.ajax({
		type: 'post',
		url: '/admin/delline',
		dataType: 'json',
		data: {'id':id},
		success:function(data){
			if(data != true){
				alert('删除失败!');
				return;
			}
			alert('删除成功');
			window.location.reload();
		},
		error:function(){
			alert('操作失败');
		},
	});
}
function delarticle(id){
	$.ajax({
		type: 'post',
		url: '/admin/delarticle',
		dataType: 'json',
		data: {'id':id},
		success:function(data){
			if(data != true){
				alert('删除失败!');
				return;
			}
			alert('删除成功');
			window.location.reload();
		},
		error:function(){
			alert('操作失败');
		},
	});
}
