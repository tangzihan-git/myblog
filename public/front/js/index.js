$(function(){
		/**
        *随机颜色
        *
        *@param int min 颜色最小值
        *@param int max 颜色最大值
        *@return 随机返回 rgb颜色
		*/
		function randColor(min,max){
			var min = min | 0;
			var max = max | 255;
			min = min < 0 ? 0 : min;
			max = max <255 ? 255 : max;

			var r = Math.floor(Math.random() * (max - min+1))+min;
			var g = Math.floor(Math.random() * (max - min+1))+min;
			var b = Math.floor(Math.random() * (max - min+1))+min;
			return {
				r:r,
				g:g,
				b:b
			}



		}
		$('.tag-text').each(function(i,e){
			var color = randColor();
			e.style.backgroundColor='rgb('+color.r+','+color.g+','+color.b+')';
		})
		//日期计算
		
        var nday = $('#day');
        var nhour = $('#hour');
        var nmin = $('#min');
        var nsmt = $('#smt');
		var ago = new Date('2017-12-5');
		setInterval(function(){
			var now = new Date();
		    var time=Math.abs(Math.floor((ago.getTime()-now.getTime())/1000));//换算秒
		    var day=Math.floor(time/(24*60*60));//换算天
	        var hour=Math.floor(time/(60*60)%24);//换算小时
	        var min=Math.floor(time/60%60);//换算分
	        var smt=Math.floor(time%60)//换算秒
	       nday.text(day)
	       nhour.text(hour)
	       nmin.text(min)
	       nsmt.text(smt)

		},1000)
		//评论框显示
        $('.callback').each(function(i,e){
        	$(e).click(function(){
        		// console.log($(e).data('flag'))
        		
        		if($(e).data('flag')==0){
        			
        			$(e).data('flag',1)
        			$(this).parent().parent().append("<form class='pl'><div class='form-group'><textarea class='form-control' name='conment' placeholder='说两句吧~'' required></textarea></div> <div class='form-group row'><img src='https://blog.yzmcms.com/api/index/code.html???????css/'class='ml-3' style='height: 40px;'><input type='text' class='col-sm-2 form-control' required name='random'><input type='submit' value='提交' class='btn btn-info ml-1' name=''></div></form>")
        		}else{
        			$(e).data('flag',0)
        			console.log($(this).parent().next().remove());
        			
        		}
        		
        	})
        })
        //文章点赞
        $('.article-zan').one('click',function(){
        	// $(this).text($(this).next()+1)
        	var article_zan = parseInt($(this).children().text())
        	$(this).children().text(article_zan+1)
        })

		
	})