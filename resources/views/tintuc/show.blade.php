@extends('layout_client/masterclient')
@section('title','CHi tiết tin tức')
@section('content')
<!-- Featured Posts -->
<div class="featured_title">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title_container d-flex flex-row align-items-start justify-content-start">
                    <div>
                        <div class="section_title">{{$tintuc->tieu_de}}</div>
                        <div class="section_subtitle">{{$tintuc->tac_gia}}</div>
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
                                <div class="featured_post_image"><img class="img-thumbnail" src="{{URL::asset('resources/hinh/hinh_tin_tuc/'.$tintuc->hinh)}}" alt=""></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="post_content">
                                    <div class="post_category cat_technology"><a href="category.html">{{$tintuc->tieu_de}}</a></div>
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
                                    <div class="post_button trans_200"><a href="single.html">read more</a></div>
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