@extends('layout_client/masterclient')
@section('title','Công ty bán hàng online')
@section('content')
<div class="featured_title">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="section_title_container d-flex flex-row align-items-start justify-content-start">
          <div>
            <div class="section_title">{{$sanpham->ten_san_pham}}</div>
            <div class="section_subtitle">Handpicked articles</div>
          </div>
          <div class="section_bar"></div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="featured_posts">

          <!-- Post -->
          <div class="featured_post post_h_large">
            <div class="row">
              <div class="col-lg-6">
                <div class="featured_post_image"><img src="{{URL::asset('resources/hinh/hinh_san_pham/'.$sanpham->hinh_san_pham)}}" class="img-thumbnail" alt=""></div>
              </div>
              <div class="col-lg-6">
                <div class="post_content">
                  <div class="post_category cat_technology"><a href="category.html">technology</a></div>
                  <div class="post_title"><a href="single.html">The new Apple release ceremony</a></div>
                  <div class="post_info d-flex flex-row align-items-center justify-content-start">
                    <div class="post_author d-flex flex-row align-items-center justify-content-start">
                      <div><div class="post_author_image"><img src="images/author_1.jpg" alt=""></div></div>
                      <div class="post_author_name"><a href="#">Michael Smith</a></div>
                    </div>
                    <div class="post_date"><a href="#">29 April 2018</a></div>
                    <div class="post_comments ml-auto"><a href="#">3 comments</a></div>
                  </div>
                  <div class="post_text">
                    <p>Curabitur venenatis efficitur lorem sed tempor. Integer aliquet tempor cursus. Nullam vestibulum convallis risus vel condimentum. Nullam auctor lorem in libero luctus, vel volutpat quam tincidunt. Nullam vestibulum convallis risus vel condimentum. Nullam auctor lorem in libero.</p>
                  </div>
                  <div class="post_button trans_200">
                    <input type="hidden" value="{{$sanpham->id}}" id="msp">
                    <select id="Th_soluong" style="width:110px; text-align:center;" class="form-control">
                      @for ($i = 1; $i <= 10; $i++)
                        <option>{{$i}}</option>
                      @endfor
                      </select>
                    <a href="#" id="btnThemVaoGioHang">Thêm vào giỏ hàng</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
@section('script')
<script>
  $(document).ready(function(){
    $("#btnThemVaoGioHang").click(function(){
      let soluong = $("#Th_soluong").val();
      let id = $("#msp").val();
      $.ajax({
        type:"POST",
        dataType:'json',
        url: "{{url('khach-hang/them-vao-gio-hang')}}/"+id,
        data:{_token:'<?php echo csrf_token() ?>', sl:soluong},
        success: function(data){
          if(data.n==0)
          alert('Thêm vào giỏ hàng không thành công');
          else
            $("#lblCartCount").html(data.count);
      }});      
      return false;
    });
  });
  </script>
@endsection