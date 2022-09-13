@extends('Admin.master')
@section('noidung')
<div class="content-wrapper">
    <div class="row">
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Chỉnh sửa tin</h4>
            <p class="card-description">
              Nhập thông tin chỉnh sửa
            </p>
            <form method="POST" action="{{route('updateTin')}}" enctype="multipart/form-data" class="forms-sample">
              @csrf
              <div class="form-group">
                <input type="hidden" name="id" value="{{$tin->id}}" id="">
                <label for="exampleSelectGender">Danh mục</label>
                  <select class="form-control" name="danhMuc_id" id="exampleSelectGender">
                    @foreach ($allDM as $DM)
                        @if ($tin->id==$DM->id)
                            <option selected value="{{$DM->id}}">{{$DM->danhMuc_ten}}</option>
                        @else
                            <option value="{{$DM->id}}">{{$DM->danhMuc_ten}}</option>
                        @endif
                            
                    @endforeach
                  </select>
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Tiêu Đề</label>
                <input type="text" name="tin_tieuDe" value="{{$tin->tin_tieuDe}}" class="form-control" id="exampleInputName1" placeholder="Nhập tiêu đề">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail3">Tóm Tắt</label>
                <textarea class="form-control" name="tin_tomTat" id="exampleTextarea1" rows="6">{{$tin->tin_tomTat}}</textarea>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail3">Nội Dung</label>
                <textarea class="form-control" name="tin_noiDung" id="exampleTextarea1" cols="10" rows="25">{{$tin->tin_noiDung}}</textarea>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail3">Ảnh Bìa</label>
                <input type="hidden" value="{{$tin->tin_anhBia}}" name="tin_anhBia" class="form-control" id="exampleInputEmail3" placeholder="Nhập ảnh">
                <img style="width: 20%;" src="{{asset('images/tin/'.$tin->tin_anhBia)}}" alt="{{$tin->tin_anhBia}}">
                <input type="file" name="file_upload" class="form-control">
              </div>
              <div class="form-group">
                <label for="exampleSelectGender">Ngày Đăng</label>
                <input type="datetime" class="form-control" name="tin_ngayDang" value="{{date($tin->tin_ngayDang)}}" id="">
              </div>
              <div class="form-group">
                <label for="exampleSelectGender">Trạng Thái</label>
                  <select class="form-control" name="tin_trangThai" id="exampleSelectGender">
                    @if ($tin->tin_trangThai==1)
                        <option value="1" selected>Hiện</option>
                        <option value="0">Ẩn</option>
                    @else
                        <option value="1">Hiện</option>
                        <option value="0" selected>Ẩn</option>
                    @endif
                  </select>
              </div>
              <div class="form-group">
                <label for="exampleSelectGender">Tác Giả</label>
                  <select class="form-control" name="tacGia_id" id="exampleSelectGender">
                    @foreach ($users as $user)
                        @if ($tin->tacGia_id==$user->id)
                            <option selected value="{{$user->id}}">{{$user->name}}</option>
                        @else
                            <option value="{{$user->id}}">{{$user->name}}</option>
                        @endif        
                    @endforeach
                  </select>
              </div>
              <button type="submit" class="btn btn-primary mr-2">Submit</button>
              <button type="button" class="btn btn-light">Cancel</button>
            </form>
          </div>
        </div>
    </div>
      
</div>
@endsection