@extends('frontend.layouts.apps')
@section('content')


<!-- subcategory -->
<div class="td-category-header">
    <div class="td-container">
        <div class="td-pb-row">
            <div class="td-pb-span12">
                <div class="td-crumb-container">
                    <div class="entry-crumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
                        <span itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem">
                            <a title="" class="entry-crumb" itemscope itemprop="item" itemtype="http://schema.org/Thing" href="http://www.khoedep.vn/">
                            <span itemprop="name">Trang Chủ</span>    </a>    
                            <meta itemprop="position" content = "1">
                        </span>
                        <i class="td-icon-right td-bread-sep td-bred-no-url-last"></i> <span class="td-bred-no-url-last">{{ $name_cates_cate }}</span>
                    </div>
                </div>
                <h1 class="entry-title td-page-title">{{ $name_cates_cate }}</h1>
                <div class="td-category-siblings">
                    <ul class="td-category">
                        <li class="entry-category"><a style="background-color:;color:#fff;border-color:;" class=""  href="http://www.khoedep.vn/blog/">Blog</a></li>
                        <li class="entry-category"><a style="background-color:;color:#fff;border-color:;" class=""  href="http://www.khoedep.vn/lam-dep/">Làm Đẹp</a></li>
                        <li class="entry-category"><a style="background-color:;color:#fff;border-color:;" class="td-current-sub-category"  href="http://www.khoedep.vn/meo-hay/">Mẹo Hay</a></li>
                        <li class="entry-category"><a style="background-color:;color:#fff;border-color:;" class=""  href="http://www.khoedep.vn/featured/">Nổi bật</a></li>
                        <li class="entry-category"><a style="background-color:;color:#fff;border-color:;" class=""  href="http://www.khoedep.vn/tap-luyen/">Tập Luyện</a></li>
                        <li class="entry-category"><a style="background-color:#4ac5db;color:#fff;border-color:#4ac5db;" class=""  href="http://www.khoedep.vn/video/">Video</a></li>
                        <li class="entry-category"><a style="background-color:;color:#fff;border-color:;" class=""  href="http://www.khoedep.vn/yeu/">Yêu</a></li>
                    </ul>
                    <div class="td-subcat-dropdown td-pulldown-filter-display-option">
                        <div class="td-subcat-more"><i class="td-icon-menu-down"></i></div>
                        <ul class="td-pulldown-filter-list"></ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
       <!--  <div class="td-category-pulldown-filter td-wrapper-pulldown-filter">
            <div class="td-pulldown-filter-display-option">
                <div class="td-subcat-more">Mới nhất <i class="td-icon-menu-down"></i></div>
                <ul class="td-pulldown-filter-list">
                    <li class="td-pulldown-filter-item"><a class="td-pulldown-category-filter-link" id="td_uid_3_637ae69d16d99" data-td_block_id="td_uid_2_637ae69d16cf1" href="http://www.khoedep.vn/meo-hay/">Mới nhất</a></li>
                    <li class="td-pulldown-filter-item"><a class="td-pulldown-category-filter-link" id="td_uid_4_637ae69d16e35" data-td_block_id="td_uid_2_637ae69d16cf1" href="http://www.khoedep.vn/meo-hay/?filter_by=featured">Tin tiêu biểu</a></li>
                    <li class="td-pulldown-filter-item"><a class="td-pulldown-category-filter-link" id="td_uid_5_637ae69d16ebe" data-td_block_id="td_uid_2_637ae69d16cf1" href="http://www.khoedep.vn/meo-hay/?filter_by=popular">Phổ biến nhất</a></li>
                    <li class="td-pulldown-filter-item"><a class="td-pulldown-category-filter-link" id="td_uid_6_637ae69d16f44" data-td_block_id="td_uid_2_637ae69d16cf1" href="http://www.khoedep.vn/meo-hay/?filter_by=popular7">Xem nhiều theo tuần</a></li>
                    <li class="td-pulldown-filter-item"><a class="td-pulldown-category-filter-link" id="td_uid_7_637ae69d16fca" data-td_block_id="td_uid_2_637ae69d16cf1" href="http://www.khoedep.vn/meo-hay/?filter_by=review_high">Điểm cao nhất</a></li>
                    <li class="td-pulldown-filter-item"><a class="td-pulldown-category-filter-link" id="td_uid_8_637ae69d1704d" data-td_block_id="td_uid_2_637ae69d16cf1" href="http://www.khoedep.vn/meo-hay/?filter_by=random_posts">Ngẫu nhiên</a></li>
                </ul>
            </div>
        </div> -->
    </div>
</div>
<!-- big grid -->
<div class="td-category-grid">
    <div class="td-container">
        <div class="td-pb-row">
            <div class="td-pb-span12">
                <div class="td_block_wrap td_block_big_grid_1 td_uid_9_637ae69d17a17_rand td-grid-style-1 td-hover-1 td-pb-border-top"  data-td-block-uid="td_uid_9_637ae69d17a17" >
                    <div id=td_uid_9_637ae69d17a17 class="td_block_inner">
                        <div class="td-big-grid-wrapper">

                            @foreach($data as $key => $value)

                            @if($key<4)

                            @if($key===0)
                            <div class="td_module_mx5 td-animation-stack td-meta-info-hide td-big-grid-post-0 td-big-grid-post td-big-thumb">
                                <div class="td-module-thumb">
                                    <a href="{{ route('details', $value->link) }}" rel="bookmark" title="{{ $value->title }}"><img width="534" height="462" class="entry-thumb" src="{{ asset($value->image) }}" alt="{{ $value->title }}" title="{{ $value->title }}"/></a></div>
                                <div class="td-meta-info-container">
                                    <div class="td-meta-align">
                                        <div class="td-big-grid-meta">
                                            <a href="" class="td-post-category">Mẹo Hay</a>                        
                                            <h3 class="entry-title td-module-title"><a href="{{ route('details', $value->link) }}" rel="bookmark" title="{{ $value->title }}">{{ $value->title }}</a></h3>
                                        </div>
                                        <div class="td-module-meta-info">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @else

                            <div class="td-big-grid-scroll">

                                <div class="td_module_mx6 td-animation-stack td-meta-info-hide td-big-grid-post-1 td-big-grid-post td-small-thumb">
                                    <div class="td-module-thumb">
                                        <a href="{{ route('details', $value->link) }}" rel="bookmark" title="{{ $value->title }}"><img width="265" height="198" class="entry-thumb" src="{{ asset($value->image) }}" srcset="{{ asset($value->image) }} 265w, {{ asset($value->image) }} 80w" sizes="(max-width: 265px) 100vw, 265px" alt="{{ $value->title }}" title="{{ $value->title }}"/></a></div>
                                    <div class="td-meta-info-container">
                                        <div class="td-meta-align">
                                            <div class="td-big-grid-meta">
                                                <a href="{{ route('details', $value->link) }}" class="td-post-category">Mẹo Hay</a>                        
                                                <h3 class="entry-title td-module-title"><a href="{{ route('details', $value->link) }}" rel="bookmark" title="{{ $value->title }}">{{ $value->title }}</a></h3>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @endif
                            @endif

                            @endforeach
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <!-- ./block -->                    
            </div>
        </div>
    </div>
</div>

<div class="td-main-content-wrap">
    <div class="td-container">
        <!-- content -->
        <div class="td-pb-row">
            <div class="td-pb-span8 td-main-content">
                <div class="td-ss-main-content">
                    @if($data->count()>4)
                    <?php 

                        $datas = $data->chunk(2);
                        $new_news = $data;
                    ?>
                    
                    @for($i=2;$i<count($datas); $i++)
                   


                    <div class="td-block-row">


                        @for($k=$i; $k<=$i*2; $k++)
                        @if(!empty($new_news[$k]->title))

                        <div class="td-block-span6">

                            
                            <div class="td_module_1 td_module_wrap td-animation-stack td-meta-info-hide">
                                <div class="td-module-image">
                                    <div class="td-module-thumb"><a href="{{ route('details',$new_news[$k]->link) }}" rel="bookmark" title="{{ $new_news[$k]->title }}"><img width="324" height="160" class="entry-thumb" src="{{ asset($new_news[$k]->image) }}" srcset="{{ asset($new_news[$k]->image) }}" sizes="(max-width: 324px) 100vw, 324px" alt="Move To Earn iCoin &amp; Health giải chạy bộ trực tuyến độc đáo" title="{{ $new_news[$k]->title }}"/></a></div>
                                    <a href="http://www.khoedep.vn/tap-luyen/" class="td-post-category">Tập Luyện</a>            
                                </div>
                                <h3 class="entry-title td-module-title"><a href="{{ route('details',$new_news[$k]->link) }}" rel="bookmark" title="{{ $new_news[$k]->title }}">{{ $new_news[$k]->title }}</a></h3>
                                <div class="td-module-meta-info">
                                </div>

                                <div class="td-excerpt">
                                    Thực phẩm giàu kẽm đóng vai trò rất quan trọng trong cuộc sống và sức khỏe con người, nhưng rất nhiều người lại coi thường hoặc không để tâm...            
                                </div>
                            </div>

                        </div>
                        @endif
                        @endfor

                    </div>
                   
                    @endfor

                    @endif
                  
                    <!--./row-fluid-->                                    
                    <!-- <div class="page-nav td-pb-padding-side">
                        <span class="current">1</span><a href="http://www.khoedep.vn/meo-hay/page/2/" class="page" title="2">2</a><a href="http://www.khoedep.vn/meo-hay/page/3/" class="page" title="3">3</a><span class="extend">...</span><a href="http://www.khoedep.vn/meo-hay/page/42/" class="last" title="42">42</a><a href="http://www.khoedep.vn/meo-hay/page/2/" ><i class="td-icon-menu-right"></i></a><span class="pages">Trang 1 của 42</span>
                        <div class="clearfix"></div>
                    </div> -->
                </div>
            </div>

            @include('frontend.sidebar')
        </div>
        <!-- /.td-pb-row -->
    </div>
    <!-- /.td-container -->
</div>
<!-- /.td-main-content-wrap -->

@endsection