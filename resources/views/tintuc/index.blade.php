@extends('layout_client/masterclient')
@section('title','Tin Tức')
@section('content')
<!-- Featured Posts -->
<div class="featured_title">
    <div class="container">
        
        <div class="row">
            <div class="col-lg-12">

                <div class="posts">
                        
                    @foreach($dstt as $tt)
                    <!-- Post -->
                    <div class="post_item post_h_large">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="post_image"><img src="{{URL::asset('resources/hinh/hinh_tin_tuc/'.$tt->hinh)}}" alt="{{$tt->tieu_de}}"></div>
                            </div>
                            <div class="col-lg-7">
                                <div class="post_content">
                                    <div class="post_category cat_technology"><a href="category.html">technology</a></div>
                                    <div class="post_title"><a href="single.html">{{$tt->tieu_de}}</a></div>
                                    <div class="post_info d-flex flex-row align-items-center justify-content-start">
                                        <div class="post_author d-flex flex-row align-items-center justify-content-start">
                                            <div><div class="post_author_image"><img src="images/author_1.jpg" alt=""></div></div>
                                            <div class="post_author_name"><a href="{{url('tin-tuc/'.$tt->id)}}">Chi tiết</a></div>
                                        </div>
                                        <div class="post_date"><a href="#">29 April 2018</a></div>
                                        <div class="post_comments ml-auto"><a href="#">3 comments</a></div>
                                    </div>
                                    <div class="post_text">
                                        <p>Curabitur venenatis efficitur lorem sed tempor. Integer aliquet tempor cursus. Nullam vestibulum convallis risus vel condimentum. Nullam auctor lorem in libero luctus, vel volutpat quam tincidunt.</p>
                                    </div>
                                </div>
                            </div>
                        </div>	
                    </div>
                    @endforeach
                </div>
                <!-- Load more button -->
                <div class="load_more">
                    <div class="load_more_button"><a href="#">load more</a></div>
                </div>
            </div>
            <!-- Sidebar -->
        </div>
    </div>
</div>

@endsection