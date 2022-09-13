@extends('Admin.master')
@section('noidung')
<div class="content-wrapper">
    <div class="row">
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Thêm mới tin</h4>
            <p class="card-description">
              Nhập thông tin
            </p>
            <form method="POST" action="{{route('createTin')}}" enctype="multipart/form-data" class="forms-sample">
              @csrf
              <div class="form-group">
                <label for="exampleSelectGender">Danh mục</label>
                  <select class="form-control" name="danhMuc_id" id="exampleSelectGender">
                    @foreach ($allDM as $DM)
                        <option value="{{$DM->id}}">{{$DM->danhMuc_ten}}</option>
                    @endforeach
                  </select>
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Tiêu Đề</label>
                <input type="text" name="tin_tieuDe" class="form-control" id="exampleInputName1" placeholder="Nhập tiêu đề">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail3">Tóm Tắt</label>
                <textarea class="form-control" name="tin_tomTat" id="exampleTextarea1" rows="6"></textarea>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail3">Nội Dung</label>
                <textarea class="form-control" name="tin_noiDung" id="exampleTextarea1" cols="10" rows="25"></textarea>
              </div>            
              <div class="form-group">
                <label>Ảnh Bìa</label>
                <input type="file" name="file_upload" class="form-control">
              </div>
              <div class="form-group">
                <label for="exampleSelectGender">Ngày Đăng</label>
                <input type="date" name="tin_ngayDang" class="form-control" id="exampleInputEmail3" placeholder="Nhập ngày đăng">
              </div>
              <div class="form-group">
                <label for="exampleSelectGender">Trạng Thái</label>
                  <select class="form-control" name="tin_trangThai" id="exampleSelectGender">
                    <option value="1" selected>Hiện</option>
                    <option value="0">Ẩn</option>
                  </select>
              </div>
              <div class="form-group">
                <label for="exampleSelectGender">Tác Giả</label>
                  <select class="form-control" name="tacGia_id" id="exampleSelectGender">
                    @foreach ($users as $user)
                      <option value="{{$user->id}}">{{$user->name}}</option>
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