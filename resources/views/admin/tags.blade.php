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
				<a href="#" class='btn btn-info' data-toggle="modal" data-target="#exampleModal">添加</a>
			</div>
		</div>
		<table class="table table-hover table-bordered text-center icon mt-4 f-13">
				  <thead class='bg-theme'>
			<tr>
			  <th><input type="checkbox" id='allcheck' name=""></th>
			  <th scope="col">序号</th>
			  <th scope="col">名称</th>
			  <th scope="col">描述</th>

			  <th scope="col">添加时间</th>
			  <th scope='col'>状态</th>
			  <th scope='col'>操作</th>
			</tr>
				  </thead>
				  <tbody>
			<tr>
			  <td><input type="checkbox" name=""></td>
			  <td scope="row">1</td>
			  <td>laravel</td>
			  <td><a href="yangqq.com">laravel标签</a></td>
			  <td>2020-9-9</td>
			  <td><span class='bg-secondary status'>下架</span></td>
			  <td class='f-13'><a href="#" class='text-secondary' title='恢复'></a>&nbsp;<a href="#" class='text-secondary' title='删除'></a>&nbsp;<a href="#" class='text-secondary' title='重命名'></a></td>
			</tr>

				  </tbody>
				  <caption>共有45条数据</caption>
				</table>
			
		<!-- </div> -->
		
		   </div>
		</div>
	</div>
	<!-- 左边菜单end -->
	<!-- 模态框 -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
<div class="modal-content">
  <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">添加标签</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="modal-body">
    <form >
    	<label for='tag_name'>标签名</label>
    	<input type="text" class='form-control' name="tag_name">
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

