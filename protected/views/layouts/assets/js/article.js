$(function(){
	var sub = true;//判断是否可以提交表单
	$("#pic").change(function(){
		sub = true;
		var str = '';
		var arr = ['jpg','png','bmp','jpeg'];
		var maxSize = 4*1024*1024;
		$.each(this.files,function(i,file){
			//判断大小
			var mSize = file.size.toFixed(2) + 'B';
			if(file.size > 1024)
				mSize = (file.size/1024).toFixed(2)+'kb';
			if(file.size > 1024*1024)
				mSize = (file.size/(1024*1024)).toFixed(2) + 'M';
			//判断文件格式
			var ext = file.name.split(".").pop();
			var res = jQuery.inArray(ext,arr);
			if(res == -1){
				str +="<font color='red'>"+file.name+'('+mSize+')(文件格式错误)<br/></font>';
				sub = false;
				return true;
			}
			if(file.size > maxSize){
				str +="<font color='red'>"+file.name+'('+mSize+')(文件太大)<br/></font>';
				sub = false;
				return true;	
			}
			str +=file.name+'('+mSize+')<br/>';
		});
		$("#files").html(str);
	});
	$("#subline").click(function(event){
		var content='';
		var title = $("#title").val();
		if(title==''){content = "标题 ";}

		var ue = UE.getEditor("editor").hasContents();
		if(!ue){content +="行程介绍 ";}
		//增加线路时
		if($("#line_id").val()==""){
			var file = $("#pic").val();
			if(file==''){alert("图片不能为空");}	
		}
		var include = $("#include").val();
		include = include.replace(/\n/g,"<br/>").replace(/\s/g,"&nbsp;");
		$("#include").val(include);

		var uninclude = $("#uninclude").val();
		uninclude = uninclude.replace(/\n/g,"<br/>").replace(/\s/g,"&nbsp;");
		$("#uninclude").val(uninclude);
		
		var notice = $("#notice").val();
		notice = notice.replace(/\n/g,"<br/>").replace(/\s/g,"&nbsp;");
		$("#notice").val(notice);

		content += '不能为空';
		
		if(!sub || title=='' || ue==false){
			alert(content);
			event.preventDefault();
			return false;
		}
	});
	$("#sub").click(function(event){
		var content='';
		var title = $("#name").val();
		if(title==''){content = "标题 ";}

		var ue = UE.getEditor("editor").hasContents();
		if(!ue){content +="文章内容 ";}

		var file = $("#pic").val();
		if($("#article_id").val()==""){
			if(file==''){alert("图片不能为空");}	
		}

		content += '不能为空';

		if(!sub || title=='' || ue==false){
			alert(content);
			event.preventDefault();
			return false;
		}
	});
})

function speakDel(id){
	$.ajax({
		type: 'post',
		url: '/admin/speak/speakdel',
		dataType: 'json',
		data: {id:id},
		success:function(data){
			if(data != true){
				alert('删除失败!'+data);
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