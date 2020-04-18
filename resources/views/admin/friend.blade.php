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
		    			<a href="#" class='btn btn-info' data-toggle="modal" data-target="#friendlinkadd">添加</a>
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
	<!-- 模态框 -->
<!-- Modal -->
<div class="modal fade" id="friendlinkadd" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">友链添加</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{url('/zyadmin/friendlink')}}" method="post">
        	@csrf
        	<div class='form-group'>
        		<label class='col-form-label'>网站名称</label>
        		<input type="text" class='form-control' placeholder="name" name="web_name">
        	</div>
        	<div class='form-group'>
        		<label class='col-form-label'>网站地址</label>
        		<input type="url" class='form-control' placeholder="url" name="web_link">
        	</div>
        	<div class='form-group'>
        		<label class='col-form-label'>联系方式</label>
        		<input type="email" class='form-control' placeholder="@" name="web_email">
        	</div>
        	<div class='form-group'>
        		<label class='col-form-label'>排序值</label>
        		<input type="number" class='form-control' number placeholder="." name="web_order">
        	</div>

        	
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
        <button type="submit" class="btn btn-primary"  >保存</button>
      </div>
      </form>
    </div>
  </div>
</div>
@section('scripts')
@endsection
@endsection
