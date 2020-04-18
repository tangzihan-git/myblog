 $(function(){
    // 基于准备好的dom，初始化echarts实例
        var myChart = echarts.init($('#charts')[0]);
  
        // 指定图表的配置项和数据
       option = {
          tooltip: {
              trigger: 'item',
              formatter: '{a} <br/>{b}: {c} ({d}%)'
          },
          legend: {
              orient: 'vertical',
              left: 10,
              data: ['PHP', 'JavaScript', 'Linux', '随记','Redis']
          },
          series: [
              {
                  name: '文章统计',
                  type: 'pie',
                  radius: ['50%', '70%'],
                  avoidLabelOverlap: false,
                  label: {
                      normal: {
                          show: false,
                          position: 'center'
                      },
                      emphasis: {
                          show: true,
                          textStyle: {
                              fontSize: '30',
                              fontWeight: 'bold'
                          }
                      }
                  },
                  labelLine: {
                      normal: {
                          show: true
                      }
                  },
                  data: [
                      {value: 200, name: 'PHP'},
                      {value: 400, name: 'JavaScript'},
                      {value: 600, name: 'Linux'},
                      {value: 800, name: '随记'},
                      {value: 800, name: 'Redis'},
                      
                  ]
              }
          ]
      };


        // 使用刚指定的配置项和数据显示图表。
        myChart.setOption(option);

     //-----------------------------------站长回复功能
     $('.rep_btn').each(function(i,e){
     	e.onclick=function(){
     		$($('.rep_co')[i]).removeClass('d-none');

     	}
     })
     //发布回复
     $('.fabu').each(function(i,e){
     	
     	$(e).click(function(){
     		//获取输入数据
     		// $('.rep_text')[i].value
     		//将数据渲染到页面	
     		var username =  $('.username')[i].innerText;
     		var value = $('.rep_text')[i].value
     		console.log($(this).parent().parent().parent().append("\
     			<div class='media'>\
     			<div class='media-body'>\
     			<p><span class='text-danger'>@"+username+"</span>："+value+"</p>\
     			</div></div>"
     			 ));
     		//将数据发送给服务端
     		$($('.rep_co')[i]).addClass('d-none');//隐藏评论框
     	})
     })
     //站长回复功能end-------------------------------------------

      })