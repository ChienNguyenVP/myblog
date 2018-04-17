@extends('layout.layout')
@section('header')
	<link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
  	<script type="text/javascript" src="//code.jquery.com/jquery-3.1.1.min.js"></script>
   	<script type="text/javascript" src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
   	<script type="text/javascript" src="{{asset('ckeditor/ckeditor.js')}}"></script>
@endsection
@section('content')
	<section>
		<div class="container-fluid">
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Thêm mới</button>
			<div id="myModal" class="modal fade" role="dialog">
			<div class="modal-dialog">

		    <!-- Modal content-->
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h3 class="modal-title">Thêm mới bài viết</h3>
		      </div>
		      <div class="modal-body">
		        <form action="" method="POST" role="form">
		        	<div class="form-group">
		        		<label for="">Tiêu đề</label>
		        		<input type="text" class="form-control" id="" placeholder="">
		        	</div>
		        	<div class="form-group">
		        		<label for="">Nội dung</label>
		        		<input type="texta" name="content" id="content">
		        	</div>
		        	<div class="form-group">
		        		<label for="">Ảnh</label>
		        		<input type="file" class="form-control" id="" placeholder="">
		        	</div>
		        	<div class="form-group">
		        		<label for="">Nổi bật</label>
		        		<input type="int" class="form-control" id="" placeholder="">
		        	</div>
		        	<button type="submit" class="btn btn-primary">Thêm</button>
		        </form>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		      </div>
		    </div>

		  </div>
</div>

			<table class="table table-hover" id="table"> 
				<thead>
					<tr>
						<th>ID</th>
						<th>Tiêu đề</th>
						<th>Ảnh</th>
						<th>Tin nổi bật</th>
						<th>Ngày tạo</th>
						<th>Ngày cập nhật</th>
						<th>Hành động</th>
						
					</tr>
				</thead>
			</table>
		</div>
	</section>
@endsection

@section('footer')
	<script>
$(function() {
    $('#table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('post') !!}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'title', name: 'title' },
            { data: 'image', name: 'image' },
            { data: 'featured', name: 'featured' },
            { data: 'created_at', name: 'created_at' },
            { data: 'updated_at', name: 'updated_at' },
            { data: 'action', name: 'action' }
        ]
    });
});
</script>
<script type="text/javascript">
	CKEDITOR.replace('content');
</script>
@endsection