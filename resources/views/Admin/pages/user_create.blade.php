@extends('Admin.master')
@section('noidung')
<div class="content-wrapper">
    <div class="row">
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Chỉnh sửa tài khoản</h4>
            <p class="card-description">
              Nhập thông tin chỉnh sửa
            </p>
            <form method="POST" action="{{route('createUser')}}" class="forms-sample">
              @csrf
              <div class="form-group">
                <label for="exampleInputName1">Họ Tên</label>
                <input type="hidden" name="id">
                <input type="text" name="hoTen" class="form-control" id="exampleInputName1" placeholder="Nhập họ tên">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail3">Địa Chỉ Email</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail3">Mật khẩu</label>
                <input type="password" name="password" class="form-control" id="exampleInputEmail3" placeholder="Email">
              </div>    
              <div class="form-group">
                <label>Ảnh Đại Diện</label>
                <input type="file" name="file_upload" class="form-control">
              </div>           
              <div class="form-group">
                <label>File upload</label>
                <input type="file" name="img[]" class="file-upload-default">
                <div class="input-group col-xs-12">
                  <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                  <span class="input-group-append">
                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                  </span>
                </div>
              </div>
              <div class="form-group">
                <label for="exampleSelectGender">Trạng Thái</label>
                  <select class="form-control" name="trangThai" id="exampleSelectGender">
                    <option value="1" selected>Kích Hoạt</option>
                    <option value="0">Chưa Kích Hoạt</option>
                  </select>
              </div>
              <div class="form-group">
                <label for="exampleSelectGender">Vai trò</label>
                  <select class="form-control" name="vaiTro" id="exampleSelectGender">
                    <option selected>Người Dùng</option>
                    <option>Quản trị</option>
                  </select>
              </div>
              <button type="submit" class="btn btn-primary mr-2">Submit</button>
              <a href="{{route('listUser')}}"><button type="button" class="btn btn-light">Cancel</button></a>
            </form>
          </div>
        </div>
    </div>
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Danh Sách Tài Khoản</h4>
          <p class="card-description">
            Add class <code>.table-striped</code>
          </p>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>
                    User
                  </th>
                  <th>
                    Họ Tên
                  </th>
                  <th>
                    Email
                  </th>
                  <th>
                    Trạng Thái
                  </th>
                  <th>
                    Hành Động
                  </th>
                </tr>
              </thead>
              <tbody>
              @foreach ($allUser as $user)
              <tr>
                  <td class="py-1">
                    <img src="{{asset('images/taikhoan/'.$user->hinhAnh)}}" alt="image"/>
                  </td>
                  <td>
                    {{$user->name}}
                  </td>
                  <td>
                      {{$user->email}}
                  </td>
                  <td>
                      @if ($user->trangThai==1)
                      <a href="{{route('disableUser',$user->id)}}" onclick="return confirm('Hủy kích hoạt?')"><button type="button" class="btn btn-primary">Đã Kích Hoạt</button></a>
                      @else
                      <a href="{{route('ableUser',$user->id)}}" onclick="return confirm('Kích hoạt?')"><button type="button" class="btn btn-primary">Kích Hoạt?</button></a>
                      @endif
                  </td>
                  <td>
                      <a href="{{route('loadUpdateUser',$user->id)}}"><button type="button" class="btn btn-primary">Sửa</button></a>
                      <a href="{{route('deleteUser',$user->id)}}" onclick="return confirm('Xóa mục này?')"><button type="button" class="btn btn-danger">Xóa</button></a>
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
@endsection