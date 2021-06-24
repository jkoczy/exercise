@extends('layout_client/masterclient')
@section('title','Danh sách sản phẩm')
@section('content')

    <div class="container">
        <div class="row">
            @foreach($dssp as $sp)
                <div class="card col-md-4">
                    <img src="{{URL::asset('resources/hinh/hinh_san_pham/'.$sp->hinh_san_pham)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">{{$sp->ten_san_pham}}</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="{{url('san-pham/'.$sp->ten_url.'-' . $sp->id)}}" class="btn btn-primary">Chi tiết</a>
                    </div>
              </div>
            @endforeach
        </div>
    </div>
    <div class="container">
      <div class="row d-flex justify-content-center">
        {{$dssp->links()}}
      </div>
    </div>

@endsection