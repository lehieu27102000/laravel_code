@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row m-b-20">
        <div class="col-12 col-sm-12 col-md-12">
            <div class="text-right">
                <a href="{{url('blogs/create')}}" class="btn btn-sm btn-outline-primary">
                    <i class="fa fa-fw fa-plus"></i> Tạo bài viết
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12">
            <table class="table table-bordered table-sm">
                <thead>
                    <tr>
                        <th>Tiêu đề</th>
                        <th>Nội dung</th>
                        <th>Ghi chú</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($articles as $article)
                    <tr>
                        <td>
                            <a href="{{url('blogs/edit') . '/' .  $article->id}}" data-toggle="tooltip" title="Sửa">
                                {{$article->title}}
                            </a>
                        </td>
                        <td>
                            <a href="">
                                {{$article->content}}
                            </a>
                        </td>
                        <td>{{$article->note}}</td>
                        <td>
                            <!-- <a href="{{url('blogs/destroy') . '/' . $article->id}}">
                                <i class="fa fa-fw fa-trash"></i> Xóa
                            </a> -->
                            <a href="javascript:;" class="btn-delete" data-id="{{$article->id}}">
                                <i class="fa fa-fw fa-trash"></i> Xóa
                            </a>
                        </td>
                        <td>
                            <a class="btn-popup-view" href="javascript:;" data-id="{{$article->id}}">
                                <i class="fa fa-fw fa-eye"></i> Xem
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div>
                {{ $articles->links() }}
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-12">
            <a class="btn btn-sm btn-link" href="{{url('home')}}">Trở về</a>
        </div>
    </div>
</div>


<div class="modal fade" id="modal-article" data-backdrop="static" tabindex="-1" aria-labelledby="" aria-hidden="true">
	<!-- <div class="modal-dialog modal-dialog-scrollable modal-xl"> -->
	<div class="modal-dialog modal-dialog-scrollable modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="">Xem chi tiết</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">Loading...</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i> Đóng</button>
			</div>
		</div>
	</div>
	</div>
</div>

<script>
    $(function() {
        $(".btn-popup-view").click(function() {
            var id  = $(this).data("id")
            $("#pre-loading").show();
            $("#modal-article").modal();
            $.ajax({
                url: "{{url('blogs/show')}}" + "/" + id,
                dataType: "Json",
                success: function(response) {
                    // console.log(response);
                    $("#modal-article .modal-body").html(response.html);
                },
                complete:function() {
                    $("#pre-loading").hide();
                }
            })
        })

        $(".btn-delete").click(function() {
            const id = $(this).data("id")
            $("#pre-loading").show()
            $.ajax({
                url : "{{url('blogs/destroy')}}" + "/" + id,
                dataType : "Json",
                success: function(response) {
                    console.log(response.message)
                },
                complete: function() {
                    $("#pre-loading").hide()
                }
            })
        })
    });
</script>
@endsection
