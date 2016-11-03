$.ajax({
	url: 'http://static.com/api/hot.php',
	type:'get',
	dataType:'json',
	error:function(){

	},
	success:function(result){	//result即为上面url中函数返回的对象
		if (result.code == 1) {
			//标识位返回值为1，说明成功
			html = '';
			var n=1;
			$.each(result.data, function(key,value){
				html += '<li class="curr"><span style="font-size: 24px; margin-right: 10px; color: red; font-style: italic">'+ n +'</span><a target="_blank" href="#">'+ value.title +'</a></li>';
	            n++;
			});
			$("#hot_html").html(html);
		}else{
			//标识位不为1，失败，执行其他
			
		};
	},
});