<div class="td-pb-span4 td-main-sidebar">
    <div class="td-ss-main-sidebar">
        <aside class="widget_text widget widget_custom_html">
            <div class="block-title"><span>Sản phẩm khuyên dùng</span></div>
            <div class="textwidget custom-html-widget">
                <!-- Either there are no banners, they are disabled or none qualified for this location! -->
            </div>
        </aside>
        <div class="td_block_wrap td_block_7 td_block_widget td_uid_10_637ae69d60b36_rand td_with_ajax_pagination td-pb-border-top"  data-td-block-uid="td_uid_10_637ae69d60b36" >
            <script>var block_td_uid_10_637ae69d60b36 = new tdBlock();
                block_td_uid_10_637ae69d60b36.id = "td_uid_10_637ae69d60b36";
                block_td_uid_10_637ae69d60b36.atts = '{"limit":"4","sort":"random_posts","post_ids":"","tag_slug":"","autors_id":"","installed_post_types":"","category_id":"","category_ids":"","custom_title":"N\u1ed4I B\u1eacT NH\u1ea4T","custom_url":"","show_child_cat":"","sub_cat_ajax":"","ajax_pagination":"load_more","header_color":"#","header_text_color":"#","ajax_pagination_infinite_stop":"","td_column_number":1,"td_ajax_preloading":"","td_ajax_filter_type":"","td_ajax_filter_ids":"","td_filter_default_txt":"All","color_preset":"","border_top":"","class":"td_block_widget td_uid_10_637ae69d60b36_rand","el_class":"","offset":"","css":"","live_filter":"","live_filter_cur_post_id":"","live_filter_cur_post_author":""}';
                block_td_uid_10_637ae69d60b36.td_column_number = "1";
                block_td_uid_10_637ae69d60b36.block_type = "td_block_7";
                block_td_uid_10_637ae69d60b36.post_count = "4";
                block_td_uid_10_637ae69d60b36.found_posts = "2596";
                block_td_uid_10_637ae69d60b36.header_color = "#";
                block_td_uid_10_637ae69d60b36.ajax_pagination_infinite_stop = "";
                block_td_uid_10_637ae69d60b36.max_num_pages = "649";
                tdBlocksArray.push(block_td_uid_10_637ae69d60b36);
            </script>
            <div class="td-block-title-wrap">
                <h4 class="block-title"><span>NỔI BẬT NHẤT</span></h4>
            </div>
            <div id=td_uid_10_637ae69d60b36 class="td_block_inner">

                    <?php 
                        $featured = App\Models\post::where('active', 1)->where('featured', 1)->orderBy('id', 'asc')->take(3)->get();
                        $postrandom = App\Models\post::where('active', 1)->inRandomOrder()->first();
                    ?>

                @include('frontend.include.index', ['data' => $featured])
                
            </div>
            <div class="td-load-more-wrap"><a href="#" class="td_ajax_load_more td_ajax_load_more_js" id="next-page-td_uid_10_637ae69d60b36" data-td_block_id="td_uid_10_637ae69d60b36">Xem thêm<i class="td-icon-font td-icon-menu-down"></i></a></div>
        </div>
        <!-- ./block -->
        <div class="td_block_wrap td_block_15 td_block_widget td_uid_11_637ae69d6cd14_rand td-pb-border-top"  data-td-block-uid="td_uid_11_637ae69d6cd14" >
            <script>var block_td_uid_11_637ae69d6cd14 = new tdBlock();
                block_td_uid_11_637ae69d6cd14.id = "td_uid_11_637ae69d6cd14";
                block_td_uid_11_637ae69d6cd14.atts = '{"limit":"4","sort":"random_posts","post_ids":"","tag_slug":"","autors_id":"","installed_post_types":"","category_id":"","category_ids":"","custom_title":"B\u00c0I NG\u1eaaU NHI\u00caN","custom_url":"","show_child_cat":"","sub_cat_ajax":"","ajax_pagination":"","header_color":"#","header_text_color":"#","ajax_pagination_infinite_stop":"","td_column_number":1,"td_ajax_preloading":"","td_ajax_filter_type":"","td_ajax_filter_ids":"","td_filter_default_txt":"All","color_preset":"","border_top":"","class":"td_block_widget td_uid_11_637ae69d6cd14_rand","el_class":"","offset":"","css":"","live_filter":"","live_filter_cur_post_id":"","live_filter_cur_post_author":""}';
                block_td_uid_11_637ae69d6cd14.td_column_number = "1";
                block_td_uid_11_637ae69d6cd14.block_type = "td_block_15";
                block_td_uid_11_637ae69d6cd14.post_count = "4";
                block_td_uid_11_637ae69d6cd14.found_posts = "2596";
                block_td_uid_11_637ae69d6cd14.header_color = "#";
                block_td_uid_11_637ae69d6cd14.ajax_pagination_infinite_stop = "";
                block_td_uid_11_637ae69d6cd14.max_num_pages = "649";
                tdBlocksArray.push(block_td_uid_11_637ae69d6cd14);
            </script>
            <div class="td-block-title-wrap">
                <h4 class="block-title"><span>BÀI NGẪU NHIÊN</span></h4>
            </div>
            <div id=td_uid_11_637ae69d6cd14 class="td_block_inner td-column-1">
                <div class="td-block-span12">
                    <div class="td_module_mx4 td_module_wrap td-animation-stack td-meta-info-hide">
                        <div class="td-module-image">
                            <div class="td-module-thumb"><a href="{{ route('details', $postrandom->link) }}" rel="bookmark" title="{{ $postrandom->title }}"><img width="218" height="150" class="entry-thumb" src="{{ asset($postrandom->image) }}" srcset="{{ asset($postrandom->image) }} 218w, {{ asset($postrandom->image) }} 100w" sizes="(max-width: 218px) 100vw, 218px" alt="steroid la gi" title="{{ $postrandom->title }}"/></a></div>
                            <a href="{{ route('details', $postrandom->link) }}" class="td-post-category">{{ $postrandom->title }}</a>            
                        </div>
                        <h3 class="entry-title td-module-title"><a href="{{ route('details', $postrandom->link) }}" rel="bookmark" title="{{ $postrandom->title }}">{{ $postrandom->title }}</a></h3>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- ./block -->
        <div class="clearfix"></div>
        <aside class="widget_text widget widget_custom_html">
            <div class="block-title"><span>Sản phẩm khuyên dùng</span></div>
            <div class="textwidget custom-html-widget">
                <!-- Either there are no banners, they are disabled or none qualified for this location! -->
            </div>
        </aside>
    </div>
</div>