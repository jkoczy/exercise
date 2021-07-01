@extends('layout_client/masterclient')
@section('title','Công ty bán hàng online')
@section('content')

<div class="intro">
    <div class="container">
        <div class="row">
            <!-- Intro Item -->
            <div class="col-md-12">
                @if(Cart::count()==0)
                    <h3 style="text-align: center">GIỏ hàng rỗng,
                        <a href="{{url('/')}}">Tiếp tục mua hàng</a>
                    </h3>
                @else
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">Hình</th>
                        <th scope="col">Sản phẩm</th>
                        <th scope="col">Số lượng</th>
                        <th scope="col">Xóa</th>
                        <th scope="col">Gía</th>
                        <th scope="col">Tiền</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                        @foreach(Cart::content() as $row)

                        <tr>
                            <td>
                                <img src="{{ URL::asset('resources/hinh/hinh_san_pham/'.$row->options->hinh) }}" class="img-thumbnail" style="max-width: 150px">
                            </td>
                            <td>{{ $row->name }}</td>
                            <td>
                            <form class="form-inline" method="post" action="{{ url('khach-hang/cap-nhat-gio-hang') }}">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <input type="hidden" value="{{ $row->rowId }}" name="Th_rowID">
                                <select name="Th_soluong" class="form-control" style="width: 100px; text-align: center;">
                                @for ($i = 1; $i < 10; $i++)
                                    @if ($i == ($row->qty*1))
                                     <option value="{{ $i }}" selected="selected">{{ $i }}</option>
                                 @else
                                     <option value="{{ $i }}">{{ $i }}</option>
                                 @endif
                             @endfor
                                </select>
                                <input type="submit" name="Th_submit" value="cập nhật" class="btn btn-primary btn-sm">
                            </form>	

                            </td>
                            <td><a href="{{ url('khach-hang/xoa-mat-hang/'.$row->rowId) }}">xóa</a></td>
                            <td>{{ number_format($row->price) }} đ</td>
                            <td>{{ number_format($row->qty*$row->price) }} đ</td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection