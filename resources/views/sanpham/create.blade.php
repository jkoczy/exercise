<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    @if (session('alert'))
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-success">
                    {{session('alert')}}
                </div>
            </div>
        </div>
    </div>
    @endif

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label>Tên sản phẩm</label>
                      <input type="text" class="form-control" name="ten_san_pham" value="{{old('ten_san_pham')}}">
                        @error('ten_san_pham')
                            <small class="form-text text-muted">{{$message}}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Mô tả tóm tắt</label>
                        <textarea id="mo_ta_tom_tat" name="mo_ta_tom_tat" class="form-control">{{old('mo_ta_tom_tat')}}</textarea>
                        @error('mo_ta_tom_tat')
                            <small class="form-text text-muted">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Chi tiết</label>
                        <textarea id="chi_tiet" name="chi_tiet" class="form-control">{{old('chi_tiet')}}</textarea>
                        @error('chi_tiet')
                            <small class="form-text text-muted">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Giá size s</label>
                        <input type="text" class="form-control" id="gia_size_s" name="gia_size_s" aria-describedby="gia_size_s" value="{{old('gia_size_s')}}">
                        @error('gia_size_s')
                            <small class="form-text text-muted">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Giá size m</label>
                        <input type="text" class="form-control" id="gia_size_m" name="gia_size_m" aria-describedby="gia_size_m" value="{{old('gia_size_m')}}">
                        @error('gia_size_m')
                            <small class="form-text text-muted">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="ten_san_pham">Hình</label>
                        <input type="file" class="form-control" id="hinh_san_pham" name="hinh_san_pham" aria-describedby="hinh_san_pham">
                        @error('hinh_san_pham')
                            <small class="form-text text-muted">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Loại sản phẩm</label>
                        <select class="form-control" name="ma_loai">
                        @foreach ($lsp as $item)
                            <option value="{{$item->id}}" @unless (!(old('ma_loai')==$item->id)) selected="selected"                     
                        @endunless>{{$item->ten_loai}}</option>
                        @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Thêm</button>
                  </form>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>