@extends('admin.layouts.app')
@section('content')
	<!-- 导航 -->
		<div class='row'>
		<!-- 左边菜单 -->
		@include('admin.layouts._aside')
		    <div class='col-md-10 '>
		    	<div class='card mt-3'>
		    		<div class='card-body'>
		    			<a href="#" class='btn btn-danger'>批量删除</a>
		    			<a href="#" class='btn btn-info'>添加</a>
		    		</div>
		    	</div>
		    	<table class="table table-hover table-bordered text-center icon mt-4 f-13">
				  <thead class='bg-theme'>
				    <tr>
				      <th><input type="checkbox" id='allcheck' name=""></th>
				      <th scope="col">序号</th>
				      <th scope="col">网站名称</th>
				      <th scope="col">网站地址</th>
				      <th scope="col">联系方式</th>
				      <th scope='col'>排序</th>
				      <th scope='col'>状态</th>
				      <th scope="col">操作</th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				      <td><input type="checkbox" name=""></td>
				      <td scope="row">1</td>
				      <td>杨青青个人博客</td>
				      <td><a href="yangqq.com">yangqq.com</a></td>
				      <td>yangqq@qq.com</td>
				      <td>1</td>
				      <td><span class='bg-secondary status'>下架</span></td>
				      <td class='f-13'><a href="#" class='text-secondary'></a>&nbsp;<a href="#" class='text-secondary'></a>&nbsp;<a href="#" class='text-secondary'></a></td>
				    </tr>
				  </tbody>
				</table>
		    		
		    	<!-- </div> -->
		    	
		   </div>
		</div>
	</div>
	<!-- 左边菜单end -->
@section('scripts')
@endsection
@endsection
