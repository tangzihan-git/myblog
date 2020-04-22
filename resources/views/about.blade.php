@extends('layouts.app')
@section('title',$about[0]->title)
@section('description',$about[0]->desc)
@section('keywords')
@section('styles')
 <link rel="stylesheet" href="/front/css/editormd.preview.min.css" />
@endsection
@section('content')
	<div class='row'>
		<div class='col-md-9 col-sm-12'>
			<div class='sb' style='margin-top:30px;background: #fff;'>
				<div class='article-header'>
					<h5 class='h5'>关于我</h5>
			    </div>
			</div>
			    <div  class='mr-con' id="test-editormd-view2" >
		            <textarea id="append-test" style="display:none;">{{$about[0]->body}}</textarea>          
		          
				</div>
	    </div>
		@include('layouts._aside')
	</div>
@endsection
@section('scripts')
<script src="/front/lib/marked.min.js"></script>
<script src="/front/lib/prettify.min.js"></script>
<script src="/front/lib/raphael.min.js"></script>
<script src="/front/lib/underscore.min.js"></script>
<script src="/front/lib/sequence-diagram.min.js"></script>
<script src="/front/lib/flowchart.min.js"></script>
<script src="/front/lib/jquery.flowchart.min.js"></script>
<script src="/front/js/editormd.js"></script>
<script type="text/javascript">
	$(function(){var testEditormdView,testEditormdView2;testEditormdView2=editormd.markdownToHTML("test-editormd-view2",{htmlDecode:"style,script,iframe",emoji:true,taskList:true,tex:true,flowChart:true,sequenceDiagram:true,})});
</script>
@endsection
