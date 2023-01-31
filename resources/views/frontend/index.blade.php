@extends('frontend.layouts.apps')
@section('content')
<?php 
    $random_data = App\Models\post::inRandomOrder()->limit(5)->get();    
    $data_first = App\Models\post::where('category', 6)->take(3)->get();
    $data_second = App\Models\post::where('category', 9)->take(3)->get();

?>

<div class="td-main-content-wrap td-main-page-wrap">
    <div class="td-container tdc-content-wrap">
        <div class="vc_row wpb_row td-pb-row">
            <div class="wpb_column vc_column_container td-pb-span12">
                <div class="vc_column-inner ">
                    <div class="wpb_wrapper">
                        <div class="td_block_wrap td_block_trending_now td_uid_2_637ae31510b4b_rand td-pb-border-top"  data-td-block-uid="td_uid_2_637ae31510b4b" >
                            <script>var block_td_uid_2_637ae31510b4b = new tdBlock();
                                block_td_uid_2_637ae31510b4b.id = "td_uid_2_637ae31510b4b";
                                block_td_uid_2_637ae31510b4b.atts = '{"limit":5,"sort":"random_posts","post_ids":"","tag_slug":"","autors_id":"","installed_post_types":"","category_id":"","category_ids":"","custom_title":"","custom_url":"","show_child_cat":"","sub_cat_ajax":"","ajax_pagination":"","header_color":"","header_text_color":"","ajax_pagination_infinite_stop":"","td_column_number":1,"td_ajax_preloading":"","td_ajax_filter_type":"","td_ajax_filter_ids":"","td_filter_default_txt":"T\u1ea5t c\u1ea3","color_preset":"","border_top":"","class":"td_uid_2_637ae31510b4b_rand","el_class":"","offset":"","css":"","live_filter":"","live_filter_cur_post_id":"","live_filter_cur_post_author":""}';
                                block_td_uid_2_637ae31510b4b.td_column_number = "1";
                                block_td_uid_2_637ae31510b4b.block_type = "td_block_trending_now";
                                block_td_uid_2_637ae31510b4b.post_count = "5";
                                block_td_uid_2_637ae31510b4b.found_posts = "2596";
                                block_td_uid_2_637ae31510b4b.header_color = "";
                                block_td_uid_2_637ae31510b4b.ajax_pagination_infinite_stop = "";
                                block_td_uid_2_637ae31510b4b.max_num_pages = "520";
                                tdBlocksArray.push(block_td_uid_2_637ae31510b4b);
                            </script>

                            <?php 

                                $featured = App\Models\post::where('active', 1)->where('featured', 1)->orderBy('id', 'asc')->take(4)->get();

                            ?>


                            <div id=td_uid_2_637ae31510b4b class="td_block_inner">
                                <div class="td-block-row">
                                    <div class="td-trending-now-wrapper" id="td_uid_2_637ae31510b4b" data-start="">
                                        <div class="td-trending-now-title">XEM NHIỀU NHẤT</div>
                                        <div class="td-trending-now-display-area">
                                            @if($featured->count()>0)
                                            @foreach($featured as $featureds)
                                            <div class="td_module_trending_now td-meta-info-hide td-trending-now-post-0 td-trending-now-post">
                                                <h3 class="entry-title td-module-title"><a href="{{ route('details', $featureds->link) }}" rel="bookmark" title="{{ $featureds->title }}">{{ $featureds->title }}</a></h3>
                                            </div>

                                            @endforeach
                                            @endif
                                            
                                        </div>
                                        <div class="td-next-prev-wrap"><a href="#"
                                            class="td_ajax-prev-pagex td-trending-now-nav-left"
                                            data-block-id="td_uid_2_637ae31510b4b"
                                            data-moving="left"
                                            data-control-start=""><i class="td-icon-menu-left"></i></a><a href="#"
                                            class="td_ajax-next-pagex td-trending-now-nav-right"
                                            data-block-id="td_uid_2_637ae31510b4b"
                                            data-moving="right"
                                            data-control-start=""><i class="td-icon-menu-right"></i></a></div>
                                    </div>
                                </div>
                                <!--./row-fluid-->
                            </div>
                        </div>
                        <!-- ./block -->
                        <div class="td_block_wrap td_block_big_grid_3 td_uid_3_637ae3151ab07_rand td-grid-style-1 td-hover-1 td-pb-border-top"  data-td-block-uid="td_uid_3_637ae3151ab07" >
                            <div id=td_uid_3_637ae3151ab07 class="td_block_inner">
                                <div class="td-big-grid-wrapper">

                                   
                                    @if($featured->count()>0)

                                    <div class="td_module_mx5 td-animation-stack td-meta-info-hide td-big-grid-post-0 td-big-grid-post td-big-thumb">
                                        <div class="td-module-thumb">
                                            <a href="{{ route('details', $featured[0]->link) }}" rel="bookmark" title="{{ $featured[0]->title }}">
                                                <img width="534" height="392" class="entry-thumb" src="{{ asset($featured[0]->image) }}" srcset="{{ asset($featured[0]->image) }} 534w, {{ asset($featured[0]->image) }} 80w" sizes="(max-width: 534px) 100vw, 534px" alt="{{ $featured[0]->title }}" title="{{ $featured[0]->title }}"/>
                                            </a>
                                        </div>
                                        <div class="td-meta-info-container">
                                            <div class="td-meta-align">
                                                <div class="td-big-grid-meta">
                                                    <!-- <a href="#" class="td-post-category">Tập Luyện</a>  -->                 
                                                    <h3 class="entry-title td-module-title"><a href="{{ route('details', $featured[0]->link) }}" rel="bookmark" title="{{ @$featured[0]->title }}">{{ @$featured[0]->title }}</a></h3>
                                                </div>
                                                <div class="td-module-meta-info">
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="td-big-grid-scroll">
                                        @if(!empty($featured[1]->title))
                                        <div class="td_module_mx11 td-animation-stack td-meta-info-hide td-big-grid-post-1 td-big-grid-post td-medium-thumb">
                                            <div class="td-module-thumb"><a href="" rel="bookmark" title="">
                                                <img width="533" height="261" class="entry-thumb" src="{{ asset($featured[1]->image) }}" srcset="{{ asset($featured[1]->image) }} 533w, {{ asset($featured[1]->image) }} 324w" sizes="(max-width: 533px) 100vw, 533px" alt="{{ @$featured[1]->title }}" title="{{ @$featured[1]->title }}"/></a></div>
                                            <div class="td-meta-info-container">
                                                <div class="td-meta-align">
                                                    <div class="td-big-grid-meta">
                                                        <!-- <a href="" class="td-post-category">Tập Luyện</a>     -->                    
                                                        <h3 class="entry-title td-module-title">
                                                            <a href="{{ route('details', $featured[1]->link) }}" rel="bookmark" title="{{ $featured[1]->title }}">{{ @$featured[1]->title }}
                                                            </a>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        @if(!empty($featured[2]->title))
                                        <div class="td_module_mx6 td-animation-stack td-meta-info-hide td-big-grid-post-2 td-big-grid-post td-small-thumb">
                                            <div class="td-module-thumb">
                                                <a href="{{ route('details', $featured[2]->link) }}" rel="bookmark" title="">
                                                    <img width="265" height="198" class="entry-thumb" src="{{ asset($featured[2]->image) }}" srcset="{{ asset($featured[2]->image) }} 265w, {{ asset($featured[2]->image) }} 80w" sizes="(max-width: 265px) 100vw, 265px" alt="{{ asset($featured[2]->title) }}" title="{{ asset($featured[2]->title) }}"/>
                                                </a>
                                            </div>

                                            <div class="td-meta-info-container">
                                                <div class="td-meta-align">
                                                    <div class="td-big-grid-meta">
                                                       <!--  <a href="http://www.khoedep.vn/blog/" class="td-post-category">Blog</a>   -->

                                                        <h3 class="entry-title td-module-title"><a href="{{ route('details', $featured[2]->link) }}" rel="bookmark" title="{{ $featured[2]->title }}">{{ $featured[2]->title }}</a>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endif


                                        @if(!empty($featured[3]->title))
                                        <div class="td_module_mx6 td-animation-stack td-meta-info-hide td-big-grid-post-3 td-big-grid-post td-small-thumb">
                                            <div class="td-module-thumb"><a href="{{ route('details', $featured[3]->link) }}" rel="bookmark" title="{{ $featured[3]->title }}">
                                                <img width="265" height="198" class="entry-thumb" src="{{ $featured[3]->image }}" srcset="{{ $featured[3]->image }}" sizes="(max-width: 265px) 100vw, 265px" alt="{{ $featured[3]->title }}" title="{{ $featured[3]->title }}"/></a></div>
                                            <div class="td-meta-info-container">
                                                <div class="td-meta-align">
                                                    <div class="td-big-grid-meta">
                                                        <!-- <a href="http://www.khoedep.vn/blog/" class="td-post-category">Blog</a>         -->                
                                                        <h3 class="entry-title td-module-title"><a href="{{ route('details', $featured[3]->link) }}" rel="bookmark" title="{{ $featured[3]->title }}">{{ $featured[3]->title }}</a></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endif

                                    </div>
                                    @endif


                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <!-- ./block -->
                    </div>
                </div>
            </div>
        </div>
        <div class="vc_row wpb_row td-pb-row">
            <div class="wpb_column vc_column_container td-pb-span8">
                <div class="vc_column-inner ">
                    <div class="wpb_wrapper">
                        <div class="td_block_wrap td_block_11 td_uid_4_637ae31531426_rand td-pb-border-top"  data-td-block-uid="td_uid_4_637ae31531426" >
                            <style scoped>
                                .td_uid_4_637ae31531426_rand .td_module_wrap:hover .entry-title a,
                                .td_uid_4_637ae31531426_rand a.td-pulldown-filter-link:hover,
                                .td_uid_4_637ae31531426_rand .td-subcat-item a:hover,
                                .td_uid_4_637ae31531426_rand .td-subcat-item .td-cur-simple-item,
                                .td_uid_4_637ae31531426_rand .td_quote_on_blocks,
                                .td_uid_4_637ae31531426_rand .td-opacity-cat .td-post-category:hover,
                                .td_uid_4_637ae31531426_rand .td-opacity-read .td-read-more a:hover,
                                .td_uid_4_637ae31531426_rand .td-opacity-author .td-post-author-name a:hover,
                                .td_uid_4_637ae31531426_rand .td-instagram-user a {
                                color: #14b74b;
                                }
                                .td_uid_4_637ae31531426_rand .td-next-prev-wrap a:hover,
                                .td_uid_4_637ae31531426_rand .td-load-more-wrap a:hover {
                                background-color: #14b74b;
                                border-color: #14b74b;
                                }
                                .td_uid_4_637ae31531426_rand .block-title span,
                                .td_uid_4_637ae31531426_rand .td-trending-now-title,
                                .td_uid_4_637ae31531426_rand .block-title a,
                                .td_uid_4_637ae31531426_rand .td-read-more a,
                                .td_uid_4_637ae31531426_rand .td-weather-information:before,
                                .td_uid_4_637ae31531426_rand .td-weather-week:before,
                                .td_uid_4_637ae31531426_rand .td-subcat-dropdown:hover .td-subcat-more,
                                .td_uid_4_637ae31531426_rand .td-exchange-header:before,
                                .td_uid_4_637ae31531426_rand .td-post-category:hover {
                                background-color: #14b74b;
                                }
                                .td_uid_4_637ae31531426_rand .block-title {
                                border-color: #14b74b;
                                }
                                .td_uid_4_637ae31531426_rand .block-title span,
                                .td_uid_4_637ae31531426_rand .td-trending-now-title,
                                .td_uid_4_637ae31531426_rand .block-title a {
                                color: #ffffff;
                                }
                            </style>
                            <script>var block_td_uid_4_637ae31531426 = new tdBlock();
                                block_td_uid_4_637ae31531426.id = "td_uid_4_637ae31531426";
                                block_td_uid_4_637ae31531426.atts = '{"limit":"3","sort":"random_posts","post_ids":"","tag_slug":"","autors_id":"","installed_post_types":"","category_id":"22","category_ids":"","custom_title":"M\u1eb8O HAY S\u1ee8C KH\u1eceE","custom_url":"http:\/\/www.khoedep.vn\/meo-hay\/","show_child_cat":"","sub_cat_ajax":"","ajax_pagination":"","header_color":"#14b74b","header_text_color":"#ffffff","ajax_pagination_infinite_stop":"","td_column_number":1,"td_ajax_preloading":"","td_ajax_filter_type":"","td_ajax_filter_ids":"","td_filter_default_txt":"T\u1ea5t c\u1ea3","color_preset":"","border_top":"","class":"td_uid_4_637ae31531426_rand","el_class":"","offset":"","css":"","live_filter":"","live_filter_cur_post_id":"","live_filter_cur_post_author":""}';
                                block_td_uid_4_637ae31531426.td_column_number = "1";
                                block_td_uid_4_637ae31531426.block_type = "td_block_11";
                                block_td_uid_4_637ae31531426.post_count = "3";
                                block_td_uid_4_637ae31531426.found_posts = "421";
                                block_td_uid_4_637ae31531426.header_color = "#14b74b";
                                block_td_uid_4_637ae31531426.ajax_pagination_infinite_stop = "";
                                block_td_uid_4_637ae31531426.max_num_pages = "141";
                                tdBlocksArray.push(block_td_uid_4_637ae31531426);
                            </script>
                           <!--  <div class="td-block-title-wrap">
                                <h4 class="block-title"><a href="http://www.khoedep.vn/meo-hay/">MẸO HAY SỨC KHỎE</a></h4>
                            </div> -->
                            <div id=td_uid_4_637ae31531426 class="td_block_inner">
                                
                                @if($data_first->count()>0)
                                @foreach($data_first as $val)
                                <div class="td-block-span12">
                                    <div class="td_module_10 td_module_wrap td-animation-stack td-meta-info-hide">
                                        <div class="td-module-thumb">

                                            <a href="{{ route('details', $val->link) }}" rel="bookmark" title="{{ $val->title }}"><img width="218" height="150" class="entry-thumb" src="{{ asset($val->image) }}" srcset="{{ asset($val->image) }} 218w, /2017/04/cach-cham-soc-da-mua-he4-100x70.png 100w" sizes="(max-width: 218px) 100vw, 218px" alt="Cach cham soc da mua he" title="{{ $val->title }}"/>
                                            </a>
                                        </div>
                                        <div class="item-details">

                                            <h3 class="entry-title td-module-title">
                                                <a href="{{ route('details', $val->link) }}" rel="bookmark" title="{{ $val->title }}">{{ $val->title }}</a>
                                            </h3>
                                            <div class="td-module-meta-info">
                                            </div>
                                            <div class="td-excerpt">
                                                         
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @endif
                                
                            </div>
                        </div>
                        <!-- ./block -->
                    </div>
                </div>
            </div>
            <div class="wpb_column vc_column_container td-pb-span4">
                <div class="vc_column-inner ">
                    <div class="wpb_wrapper">
                        <div class="td_block_wrap td_block_2 td_uid_5_637ae3154fd02_rand td-pb-border-top"  data-td-block-uid="td_uid_5_637ae3154fd02" >

                            <?php

                                $infocate_second = App\Models\category::find(9);
                            ?>
                          
                            <div class="td-block-title-wrap">
                                <h4 class="block-title"><a href="{{ route('details', $infocate_second->link) }}">{{ $infocate_second->namecategory }}</a></h4>
                            </div>

                            <div id=td_uid_5_637ae3154fd02 class="td_block_inner">

                                @include('frontend.include.index', ['data' => $data_second])

                            </div>
                        </div>
                        <!-- ./block -->
                    </div>
                </div>
            </div>
        </div>

        <div class="vc_row wpb_row td-pb-row">

            <?php 

                $id_cate = [4,7,8];

               

            ?>

            @foreach($id_cate as $val)
            <?php

                $info = App\Models\category::where('id', $val)->first();

                $post = App\Models\post::where('category', $val)->get();


            ?>

             
            <div class="wpb_column vc_column_container td-pb-span4">
                <div class="vc_column-inner ">
                    <div class="wpb_wrapper">
                        <div class="td_block_wrap td_block_19 td_uid_6_637ae3156e4b3_rand td-pb-border-top"  data-td-block-uid="td_uid_6_637ae3156e4b3" >
                            
                            <div class="td-block-title-wrap">
                                <h4 class="block-title"><a href="{{ route('details', $info->link) }}">{{ $info->namecategory }}</a></h4>
                            </div>
                            <div id=td_uid_6_637ae3156e4b3 class="td_block_inner td-column-1">
                                @if($post->count()>0)


                                @foreach($post as $key => $values)

                               

                                @if($key==0)
                                <div class="td_module_mx1 td_module_wrap td-animation-stack td-meta-info-hide">
                                    <div class="td-module-thumb"><a href="{{ route('details', $values->link) }}" rel="bookmark" title="{{ $values->title }}"><img width="356" height="220" class="entry-thumb" src="{{ asset($values->image) }}" alt="{{ $values->title }}" title="{{ $values->title }}"/></a></div>
                                    <div class="td-module-meta-info">
                                        <h3 class="entry-title td-module-title"><a href="{{ route('details', $values->link) }}" rel="bookmark" title="{{ $values->title }}">{{ $values->title }}</a></h3>
                                        <div class="td-editor-date">
                                            <span class="td-author-date">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                @else

                                <div class="td_module_mx2 td_module_wrap td-animation-stack td-meta-info-hide">
                                    <div class="td-module-thumb"><a href="{{ route('details', $values->link) }}" rel="bookmark" title="{{ $values->title }}"><img width="80" height="60" class="entry-thumb" src="{{ asset($values->image) }}" srcset="{{ asset($values->image) }}" sizes="(max-width: 80px) 100vw, 80px" alt="{{ $values->title }}"/><span class="td-video-play-ico td-video-small"><img width="20" height="20" class="td-retina" src="{{ asset($values->image) }}" alt="video"/></span></a></div>
                                    <div class="item-details">
                                        <h3 class="entry-title td-module-title"><a href="{{ route('details', $values->link) }}" rel="bookmark" title="{{ $values->title }}">{{ $values->title }}</a></h3>
                                        <div class="td-module-meta-info">
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                                @endif
                            </div>
                        </div>
                        <!-- ./block -->
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
        <div style="overflow:hidden;height:1px;">
            <a href="https://kissbrides.com/">mail order brides</a>
        </div>
    </div>

    <?php 
        $new_news = App\Models\post::orderBy('id','asc')->take(6)->get();

        $new = $new_news->chunk(2);

    ?>
    <div class="td-container td-pb-article-list">
        <div class="td-pb-row">
            <div class="td-pb-span8 td-main-content" role="main">
                <div class="td-ss-main-content">
                    <h4 class="block-title"><span>BÀI VIẾT MỚI NHẤT</span></h4>

                    @for($i=0; $i<count($new); $i++)

                    <div class="td-block-row">

                        @foreach($new[$i] as $val)
                        <div class="td-block-span6">

                            <div class="td_module_1 td_module_wrap td-animation-stack td-meta-info-hide">
                                <div class="td-module-image">
                                    <div class="td-module-thumb"><a href="{{ route('details',@$val->link) }}" rel="bookmark" title="{{ @$val->title }}"><img width="324" height="160" class="entry-thumb" src="{{ asset(@$val->image) }}" srcset="{{ asset(@$val->image) }}" sizes="(max-width: 324px) 100vw, 324px" alt="Move To Earn iCoin &amp; Health giải chạy bộ trực tuyến độc đáo" title="{{ @$val->title }}"/></a></div>
                                    <a href="http://www.khoedep.vn/tap-luyen/" class="td-post-category">Tập Luyện</a>            
                                </div>
                                <h3 class="entry-title td-module-title"><a href="{{ route('details',@$val->link) }}" rel="bookmark" title="{{ @$val->title }}">{{ @$val->title }}</a></h3>
                                <div class="td-module-meta-info">
                                </div>
                            </div>

                        </div>
                        @endforeach
                       
                    </div>

                    @endfor
                  
                </div>
            </div>
            <div class="td-pb-span4 td-main-sidebar" role="complementary">
                <div class="td-ss-main-sidebar">
                    <div class="td_block_wrap td_block_7 td_block_widget td_uid_9_637ae315c495f_rand td-pb-border-top"  data-td-block-uid="td_uid_9_637ae315c495f" >
                        <script>var block_td_uid_9_637ae315c495f = new tdBlock();
                            block_td_uid_9_637ae315c495f.id = "td_uid_9_637ae315c495f";
                            block_td_uid_9_637ae315c495f.atts = '{"limit":"5","sort":"random_posts","post_ids":"","tag_slug":"","autors_id":"","installed_post_types":"","category_id":"","category_ids":"","custom_title":"C\u00f3 th\u1ec3 b\u1ea1n mu\u1ed1n xem","custom_url":"","show_child_cat":"","sub_cat_ajax":"","ajax_pagination":"","header_color":"#","header_text_color":"#","ajax_pagination_infinite_stop":"","td_column_number":1,"td_ajax_preloading":"","td_ajax_filter_type":"","td_ajax_filter_ids":"","td_filter_default_txt":"All","color_preset":"","border_top":"","class":"td_block_widget td_uid_9_637ae315c495f_rand","el_class":"","offset":"","css":"","live_filter":"","live_filter_cur_post_id":"","live_filter_cur_post_author":""}';
                            block_td_uid_9_637ae315c495f.td_column_number = "1";
                            block_td_uid_9_637ae315c495f.block_type = "td_block_7";
                            block_td_uid_9_637ae315c495f.post_count = "5";
                            block_td_uid_9_637ae315c495f.found_posts = "2596";
                            block_td_uid_9_637ae315c495f.header_color = "#";
                            block_td_uid_9_637ae315c495f.ajax_pagination_infinite_stop = "";
                            block_td_uid_9_637ae315c495f.max_num_pages = "520";
                            tdBlocksArray.push(block_td_uid_9_637ae315c495f);
                        </script>
                        <div class="td-block-title-wrap">
                            <h4 class="block-title"><span>Có thể bạn muốn xem</span></h4>
                        </div>


                        <div id=td_uid_9_637ae315c495f class="td_block_inner">
                            @if($random_data->count()>0)
                            @foreach($random_data as $value)
                            <div class="td-block-span12">
                                <div class="td_module_6 td_module_wrap td-animation-stack td-meta-info-hide">
                                    <div class="td-module-thumb"><a href="{{ route('details', $value->link) }}" rel="bookmark" title="{{ $value->title }}">
                                        <img width="100" height="70" class="entry-thumb" src="{{ asset($value->image) }}" srcset="{{ asset($value->image) }} 100w, {{ asset($value->image) }} 218w" sizes="(max-width: 100px) 100vw, 100px" alt="{{ $value->title }}" title="{{ $value->title }}"/></a></div>
                                    <div class="item-details">
                                        <h3 class="entry-title td-module-title"><a href="{{ route('details', $value->link) }}" title="{{ $value->title }}">{{ $value->title }}</a></h3>
                                        <div class="td-module-meta-info">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @endif
                           
                        </div>
                    </div>
                    <!-- ./block -->                        
                </div>
            </div>
        </div>
        <!-- /.td-pb-row -->
    </div>
    <!-- /.td-container -->
</div>
<!-- /.td-main-content-wrap -->
@endsection