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
		    						
		    						<select class='form-control'>
		    							<option value='0'>栏目</option>
		    							<option>前端</option>
		    							<option>随记</option>
		    						</select>

		    						<label for='date'>日期范围：</label>
		    						<input type="text" class='col-md-2 form-control' name="start">
		    						  - <input type="text" class='col-md-2 form-control' name="end">&nbsp;
		    						  <input type="text" class='col-md-3 form-control' name="search">&nbsp;
		    						<input type="button" class='btn btn-success form-control' value='搜索' name="">
		    					</div>
		    				</form>
		    			</div>
		    			<a href="#" class='btn btn-danger text-light'>批量删除</a>&nbsp;
		    			<a href="#" class='btn btn-info text-light'>添加文章</a>


		    		</div>
		    	</div>

		    	<table class="table table-hover table-bordered text-center icon mt-4 f-13">
				  <thead class='bg-theme'>
				    <tr>
				      <th><input type="checkbox" id='allcheck' name=""></th>
				      <th scope="col">序号</th>
				      <th scope="col">文章标题</th>
				      <th scope='col'>所属栏目</th>
				      <th scope='col'>作者</th>
				      <th scope="col">封面图</th>
				      <th scope='col'>访问次数</th>
				      <th scope='col'>允许评论</th>
				      <th scope='col'>发布状态</th>
				      <th scope="col">更新时间</th>
				      <th>操作</th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				      <td><input type="checkbox" name=""></td>
				      <td scope="row">1</td>
				      <td><a href="#">如何建站</a></td>
				      <td>技术分享</td>
				      <td>唐子涵</td>
				      <td><img src="../images/-741352d2e87aa1a4.jpg" width="80"></td>
				      <td>34</td>
				      <td class='text-success'>允许</td>
				      <td><span class='bg-success status'>发布</span></td>
				      <td>2020-9-8</td>
				      <td class='f-13'><a href="#" class='text-secondary' title='恢复'></a>&nbsp;<a href="#" class='text-secondary' title='删除'></a>&nbsp;<a href="#" class='text-secondary' title='回复'></a></td>
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
