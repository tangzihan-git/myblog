@extends('admin.layouts.app')
@section('content')
	<!-- 导航 -->
		<div class='row'>
		<!-- 左边菜单 -->
		@include('admin.layouts._aside')
		    <div class='col-md-10 '>
		    	<form id=''>
		    		<div class='form-group'>
		    			<span class='text-danger'>在此次添加屏蔽词以“|”分隔</span>
		    			<textarea  class='form-control' rows='12'>234|325</textarea>

		    		</div>
		    		<div class='form-group' style='margin: 0 auto'>
		    			<input type="submit" value='确定' class='btn btn-success' name="">
		    			
		    		</div>
		    	</form>
		      
		   </div>
		</div>
	</div>
	<!-- 左边菜单end -->
@section('scripts')
@endsection
@endsection

