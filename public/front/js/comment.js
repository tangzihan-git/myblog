$(function(){var testEditormdView,testEditormdView2;testEditormdView2=editormd.markdownToHTML("test-editormd-view2",{htmlDecode:"style,script,iframe",emoji:true,taskList:true,tex:true,flowChart:true,sequenceDiagram:true,});var articleid=$("#articleid").val();$(".my").on("click","li",function(){var that=$(this);$(".pl").remove();$(".my").each(function(i,e){if(that.data("flag")==0){that.data("flag",1);that.parent().parent().append("<form class='pl'><div class='form-group'><textarea class='form-control usercon'  name='conment' placeholder='说两句吧~'' required></textarea></div> <div class='form-group row'><img src='{{ captcha_src('mini') }}'  class='ml-3 img-random' style='height: 40px;'><input type='text' class='col-sm-2 form-control random' required name='captcha'><input type='button' value='提交' class='btn btn-info ml-1 submit' name=''></div></form>")}else{that.data("flag",0);that.parent().next().remove()}});$(".img-random").click(function(){this.src="/captcha/mini?'"+Math.random()});$(".submit").click(function(){var parentid=$(this).parent().parent().prev().children().data("parent");if(!parentid&&parentid){parentid=beifenid}var level=$(this).parent().parent().prev().children().data("level")+1;var con=htmlEscape($(".usercon").val());var random=$(".random").val();if(!con){alert("请输入内容");return false}else{if(!random){alert("请输入验证码");return false}else{var subthat=$(this);sendCon(parentid,level,con,random,subthat)}}})});$("#submit").click(function(){var con=htmlEscape($(".usercon").val());var random=$(".random").val();if(!con){alert("请输入内容");return false}else{if(!random){alert("请输入验证码");return false}else{$.ajax({headers:{"X-CSRF-TOKEN":$('meta[name="csrf-token"]').attr("content")},url:"{{url('/comments')}}",type:"get",dataType:"json",data:{"parentid":0,"level":1,"con":con,"captcha":random,"articleid":articleid},success:function(msg){if(msg.error){alert(msg.error);return false}var text=$("<div class='showcomment'><div class='small mt-2' style='width:100%;margin-left:0%'><div><img src='https://dss0.baidu.com/73x1bjeh1BF3odCf/it/u=970046986,3090048325&fm=85&s=4C12C519C8913CCA569E5FC2030080A8'><span>#@热心网友</span><time>"+123+"</time><span class='float-right'></span><div class='mentcon'><p>"+con+"</p><br><br><ul class='huifu'><li class='callback' data-flag='0' data-level='1' date-parent='0'  >回复</li></ul></div></div></div></div>");$(".my").append(text)}})}}});function htmlEscape(text){return text.replace(/[<>"&]/g,function(match,pos,originalText){switch(match){case"<":return"&lt;";case">":return"&gt;";case"&":return"&amp;";case'"':return"&quot;"}})}function sendCon(parentid,level,con,random,subthat){$.ajax({headers:{"X-CSRF-TOKEN":$('meta[name="csrf-token"]').attr("content")},url:"{{url('/comments')}}",type:"get",dataType:"json",data:{"parentid":parentid,"level":level,"con":con,"captcha":random,"articleid":articleid},success:function(msg){if(msg.error){alert(msg.error);return false}var text=$("<div class='showcomment'><div class='small mt-2' style='width:"+(100-(level*10)+10)+"%;margin-left:"+(100-(100-(level*10)+10))+"%'><div><img src='https://dss0.baidu.com/73x1bjeh1BF3odCf/it/u=970046986,3090048325&fm=85&s=4C12C519C8913CCA569E5FC2030080A8'><span>#@热心网友</span><time>"+msg.time+"</time><span class='float-right'></span><div class='mentcon'><p>"+con+"</p><br><br><ul class='huifu'><li class='callback' data-flag='0' data-level='"+level+"' date-parent='"+msg.id+"'  >回复</li></ul></div></div></div></div>");beifenid=msg.id;subthat.parent().parent().parent().parent().parent().parent().after().append(text)}})}$(".article-zan").on("click",function(){that=$(this);var article_zan=parseInt($(this).children().text());$.ajax({headers:{"X-CSRF-TOKEN":$('meta[name="csrf-token"]').attr("content")},url:"{{url('/article/zan')}}",type:"get",dataType:"json",data:{"code":200,"articleid":articleid},success:function(msg){console.log(msg);if(msg.status==0){alert("你已经点过赞了哦");return false}that.children().text(article_zan+1)}})})});function echo(stringA,stringB){var hello="你好";alert("hello world")};