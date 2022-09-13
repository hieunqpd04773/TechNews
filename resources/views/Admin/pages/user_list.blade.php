@extends('Admin.master')
@section('noidung')
<div class="content-wrapper">
    <div class="row">
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