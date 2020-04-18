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
				<a href="#" class='btn btn-danger text-light'>批量删除</a>


			</div>
		</div>

		<table class="table table-hover table-bordered text-center icon mt-4 f-13">
				  <thead class='bg-theme'>
			<tr>
			  <th><input type="checkbox" id='allcheck' name=""></th>
			  <th scope="col">序号</th>
			  <th scope="col">用户ip</th>
			  <th scope='col'>用户名</th>
			  <th scope="col">评论文章</th>
			  <th scope="col">评论内容</th>
			  <th scope='col'>评论状态</th>
			  <th scopr='col'>评论时间</th>
			  <th scope="col">操作</th>
			</tr>
				  </thead>
				  <tbody>
			<tr>
			  <td><input type="checkbox" name=""></td>
			  <td scope="row">1</td>
			  <td>127.0.0.1</td>
			  <td>匿名用户</td>
			  <td><a href="#">laravel生命周期</a></td>
			  <td>忽而好分隔</td>
			  <td><span class='bg-success status'>正常</span></td>
			  <td>2020-4-5</td>
			  <td class='f-13'><a href="#" class='text-secondary' title='恢复'></a>&nbsp;<a href="#" class='text-secondary' title='删除'></a>&nbsp;<a href="#" class='text-secondary' title='回复'></a></td>
			</tr>
			  <tr>
			  <td><input type="checkbox" name=""></td>
			  <td scope="row">1</td>
			  <td>127.0.0.1</td>
			  <td>匿名用户</td>
			  <td><a href="#">laravel生命周期</a></td>
			  <td>忽而好分隔</td>
			  <td><span class='bg-info status'>审核</span></td>
			  <td>2020-4-5</td>
			  <td class='f-13'><a href="#" class='text-secondary' title='恢复'></a>&nbsp;<a href="#" class='text-secondary' title='删除'></a>&nbsp;<a href="#" class='text-secondary' title='回复'></a></td>
			</tr>
			<tr>
			  <td><input type="checkbox" name=""></td>
			  <td scope="row">1</td>
			  <td>127.0.0.1</td>
			  <td>匿名用户</td>
			  <td><a href="#">laravel生命周期</a></td>
			  <td>忽而好分隔</td>
			  <td><span class='bg-danger status'>垃圾</span></td>
			  <td>2020-4-5</td>
			  <td class='f-13'><a href="#" class='text-secondary' title='恢复'></a>&nbsp;<a href="#" class='text-secondary' title='删除'></a>&nbsp;<a href="#" class='text-secondary' title='回复' data-toggle="modal" data-target="#replay"></a></td>
			</tr>

				  </tbody>
				  <caption>共有数据：45条</caption>
				</table>
			
		<!-- </div> -->
		
		   </div>
		</div>
	</div>
	<!-- 左边菜单end -->
	<!-- 模态框 -->
<div class="modal fade" id="replay" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
<div class="modal-content">
  <div class="modal-header">
    <h5 class="modal-title" >回复</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="modal-body">
    <form >
    	<textarea class='form-control' name='replay'></textarea>
    </form>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
    <button type="button" class="btn btn-primary" data-dismiss='modal'>保存</button>
  </div>
</div>
	  </div>
    </div>
@section('scripts')
@endsection
@endsection