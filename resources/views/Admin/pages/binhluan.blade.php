@extends('Admin.master')
@section('noidung')
<div class="content-wrapper">
    <div class="row">
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
                          Nội Dung
                        </th>
                        <th>
                            Tin
                        </th>
                        <th>Trạng thái</th>
                        <th>
                          Hành động
                        </th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($allBl as $bl)
                      <tr>
                        <td>
                          {{$bl->id}}
                        </td>
                        <td>
                          {{$bl->bl_noiDung}}
                        </td>
                        <td style="width: 35%">
                            {{$bl->Tin->tin_tieuDe}}
                        </td>
                        <td>
                            @if($bl->bl_trangThai==1)
                            Hiển thị
                            @else
                            Bị Ẩn
                            @endif
                        </td>
                        </td>
                        <td style="width: 20%">
                            <a href="{{route('hiddenBL',$bl->id)}}"><button type="button" class="btn btn-primary">Ẩn</button></button></a>
                            <a href="{{route('deleteBL',$bl->id)}}" onclick="return confirm('Xóa mục này?')"><button type="button" class="btn btn-danger">Xóa</button></a>
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