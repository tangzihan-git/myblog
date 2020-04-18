@extends('admin.layouts.app')
@section('content')
	<!-- 导航 -->
		<div class='row'>
		<!-- 左边菜单 -->
		@include('admin.layouts._aside')
		    <div class='col-md-10 '>
		    	<div class='card mt-3'>
		    		<div class='card-body'>
		    			<div class='search '>
		    				<form class='form-inline row mb-2'>
		    					<div class='form-group'>
		    						<label for='date'>日期范围：</label>
		    						<input type="text" class='col-md-2 form-control' name="start">
		    						  - <input type="text" class='col-md-2 form-control' name="end">&nbsp;
		    						  <input type="text" class='col-md-3 form-control' name="search">&nbsp;
		    						<input type="button" class='btn btn-success form-control' value='搜索' name="">
		    					</div>
		    				</form>
		    			</div>
		    			<a href="#" class='btn btn-danger'>批量删除</a>


		    		</div>
		    	</div>
		    	<table class="table table-hover table-bordered text-center icon mt-4 f-13">
				  <thead class='bg-theme'>
				    <tr>
				      <th><input type="checkbox" id='allcheck' name=""></th>
				      <th scope="col">序号</th>
				      <th scope="col">用户ip</th>
				      <th scope="col">留言内容</th>
				      <th scope="col">留言时间</th>
				      <th scope='col'>留言类型</th>
				      <th scope='col'>处理状态</th>
				      <th scope="col">操作</th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				      <td><input type="checkbox" name=""></td>
				      <td scope="row">1</td>
				      <td>127.0.0.1</td>
				      <td>你6p</td>
				      <td>2020-9-10</td>
			
				      <td><span class='bg-danger status'>垃圾留言</span></td>
				      <td><span class='bg-success status'>已回复</span></td>
				      <td class='f-13'><a href="#" class='text-secondary' title='恢复'></a>&nbsp;<a href="#" class='text-secondary' title='删除'></a>&nbsp;<a href="#" class='text-secondary' title='回复'></a></td>
				    </tr>

				  </tbody>
				  <caption>共有数据：45条</caption>
				</table>
		    		
		    	<!-- </div> -->
		    	
		   </div>
		</div>
	</div>
	<!-- 左边菜单end -->
@section('scripts')
@endsection
@endsection
