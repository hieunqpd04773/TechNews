@extends('Admin.master')
@section('noidung')
<style>
  .tieude{
  display: -webkit-box;
  max-height: 3.2rem;
  -webkit-box-orient: vertical;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: normal;
  -webkit-line-clamp: 1;
  line-height: 1.6rem;
}
</style>
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Danh sách tin</h4>
                <div class="table-responsive pt-3">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>
                          Tiêu Đề
                        </th>
                        <th>
                          Chuyên Mục
                        </th>
                        <th>
                          Tác Giả
                        </th>
                        <th>
                          Ngày đăng
                        </th>
                        <th>
                          Trạng thái
                        </th>
                        <th>
                          Hành động
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($allTin as $tin)
                      <tr>
                        <td>
                         <p class="tieude">{{$tin->tin_tieuDe}}</p> 
                        </td>
                        <td>
                          {{$tin->DanhMuc->danhMuc_ten}}
                        </td>
                        <td>
                          {{$tin->User->name}}
                        </td>
                        <td>
                          {{date_format($tin->tin_ngayDang,'Y-m-d')}}
                        </td>
                        <td>
                          @if($tin->tin_trangThai==1)
                            <p>Hiển thị</p>
                          @else
                             <p>Ẩn</p>
                          @endif
                        </td>
                        <td style="width: 16%">
                            <a href="{{route('loadUpdateTin',$tin->id)}}"><button type="button" class="btn btn-primary">Sửa</button></a>
                            <a href="{{route('deleteTin',$tin->id)}}" onclick="return confirm('Xóa mục này?')"><button type="button" class="btn btn-danger">Xóa</button></a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
    </div>
</div>
@endsection