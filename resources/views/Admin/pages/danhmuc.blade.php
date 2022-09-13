@extends('Admin.master')
@section('noidung')
<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
            <div class="card-body">
                <h4 class="card-title">Thêm mới loại</h4>
                <p class="card-description">
                Use the <code>.form-inline</code> class to display a series of labels, form controls, and buttons on a single horizontal row
                </p>
                <form method="POST" action="{{route('addDM')}}" class="form-inline">
                  @csrf
                <label class="sr-only" for="inlineFormInputName2">Tên loại</label>
                <input type="text" name="danhMuc_ten" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Tên loại tin">
                <button type="submit" class="btn btn-primary mb-2">Thêm mới</button>
                </form>
            </div>
            </div>
        </div>
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Danh sách loại</h4>
                <div class="table-responsive pt-3">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>
                          #
                        </th>
                        <th>
                          Tên Loại
                        </th>
                        <th>
                          Số lượng tin
                        </th>
                        <th>
                          Hành động
                        </th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($allDanhMuc as $dm)
                      <tr>
                        <td>
                          {{$dm->id}}
                        </td>
                        <td>
                          {{$dm->danhMuc_ten}}
                        </td>
                        <td>
                          <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="20"></div>
                          </div>
                        </td>
                        <td style="width: 20%">
                            <a href="{{route('loadUpdateDM',$dm->id)}}"><button type="button" class="btn btn-primary">Sửa</button></a>
                            <a href="{{route('deleteDM',$dm->id)}}" onclick="return confirm('Xóa mục này?')"><button type="button" class="btn btn-danger">Xóa</button></a>
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