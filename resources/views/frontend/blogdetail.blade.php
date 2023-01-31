@extends('frontend.layouts.apps')
@section('content')

<?php 

    $related = App\Models\Post::where('category', $data->category)->get();
?>

<article id="post-18780" class="td-post-template-3 post-18780 post type-post status-publish format-standard has-post-thumbnail hentry category-dang-dep category-lam-dep category-meo-hay tag-cach-tang-can-nhanh tag-tang-can tag-tang-can-tang-co post-ftoc" itemscope itemtype="http://schema.org/Article">
    <div class="td-post-header td-container">
        <div class="td-crumb-container">
            <div class="entry-crumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
                <span itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem">
                    <a title="" class="entry-crumb" itemscope itemprop="item" itemtype="http://schema.org/Thing" href="http://www.khoedep.vn/">
                    <span itemprop="name">Trang Chủ</span>    </a>    
                    <meta itemprop="position" content = "1">
                </span>
                <i class="td-icon-right td-bread-sep"></i> 
                <span itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem">
                    <a title="Xem tất cả các bài viết trong Làm Đẹp" class="entry-crumb" itemscope itemprop="item" itemtype="http://schema.org/Thing" href="http://www.khoedep.vn/lam-dep/">
                    <span itemprop="name">Làm Đẹp</span>    </a>    
                    <meta itemprop="position" content = "2">
                </span>
                <i class="td-icon-right td-bread-sep"></i> 
                <span itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem">
                    <a title="Xem tất cả các bài viết trong Dáng Đẹp" class="entry-crumb" itemscope itemprop="item" itemtype="http://schema.org/Thing" href="http://www.khoedep.vn/lam-dep/dang-dep/">
                    <span itemprop="name">Dáng Đẹp</span>    </a>    
                    <meta itemprop="position" content = "3">
                </span>
                <i class="td-icon-right td-bread-sep td-bred-no-url-last"></i> <span class="td-bred-no-url-last">Làm thế nào để béo lên nhanh chóng cho người gầy hiệu...</span>
            </div>
        </div>
        <div class="td-post-header-holder td-image-gradient">
            <header class="td-post-title">
                <!-- <ul class="td-category">
                    <li class="entry-category"><a  href="http://www.khoedep.vn/lam-dep/">Làm Đẹp</a></li>
                    <li class="entry-category"><a  href="http://www.khoedep.vn/lam-dep/dang-dep/">Dáng Đẹp</a></li>
                    <li class="entry-category"><a  href="http://www.khoedep.vn/meo-hay/">Mẹo Hay</a></li>
                </ul> -->
                <h1 class="entry-title">{{ $data->title }}</h1>
                <div class="td-module-meta-info">
                </div>
            </header>
        </div>
    </div>
    <div class="td-container">
        <div class="td-pb-row">
            <div class="td-pb-span8 td-main-content" role="main">
                <div class="td-ss-main-content">
                    {!! $data->content   !!}
                    <!-- <footer>
                        <div class="td-post-source-tags">
                            <ul class="td-tags td-post-small-box clearfix">
                                <li><span>CHỦ ĐỀ</span></li>
                                <li><a href="http://www.khoedep.vn/tag/cach-tang-can-nhanh/">cách tăng cân nhanh</a></li>
                                <li><a href="http://www.khoedep.vn/tag/tang-can/">tăng cân</a></li>
                                <li><a href="http://www.khoedep.vn/tag/tang-can-tang-co/">Tăng cân tăng cơ</a></li>
                            </ul>
                        </div>
                        <div class="td-post-sharing td-post-sharing-bottom td-with-like">
                            <span class="td-post-share-title">Chia sẻ</span>
                            <div class="td-default-sharing">
                                <a class="td-social-sharing-buttons td-social-facebook" href="http://www.facebook.com/sharer.php?u=http%3A%2F%2Fwww.khoedep.vn%2Flam-the-nao-de-beo-len-nhanh-cho-nguoi-gay%2F" onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;">
                                    <i class="td-icon-facebook"></i>
                                    <div class="td-social-but-text">Facebook</div>
                                </a>
                                <a class="td-social-sharing-buttons td-social-twitter" href="https://twitter.com/intent/tweet?text=L%C3%A0m+th%E1%BA%BF+n%C3%A0o+%C4%91%E1%BB%83+b%C3%A9o+l%C3%AAn+nhanh+ch%C3%B3ng+cho+ng%C6%B0%E1%BB%9Di+g%E1%BA%A7y+hi%E1%BB%87u+qu%E1%BA%A3+nh%E1%BA%A5t%3F&url=http%3A%2F%2Fwww.khoedep.vn%2Flam-the-nao-de-beo-len-nhanh-cho-nguoi-gay%2F&via=Kh%E1%BB%8Fe+%C4%90%E1%BA%B9p">
                                    <i class="td-icon-twitter"></i>
                                    <div class="td-social-but-text">Twitter</div>
                                </a>
                                <a class="td-social-sharing-buttons td-social-google" href="http://plus.google.com/share?url=http://www.khoedep.vn/lam-the-nao-de-beo-len-nhanh-cho-nguoi-gay/" onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;"><i class="td-icon-googleplus"></i></a>
                                <a class="td-social-sharing-buttons td-social-pinterest" href="http://pinterest.com/pin/create/button/?url=http://www.khoedep.vn/lam-the-nao-de-beo-len-nhanh-cho-nguoi-gay/&amp;media=/2016/06/Lam-the-nao-de-beo-len-nhanh-chong.jpg&description=Làm thế nào để béo lên nhanh chóng? Chỉ cần hiểu hết 6 bí mật cần thiết để giúp cơ thể mập lên là nam và nữ sẽ nhanh chóng tăng cân cực kỳ hiệu quả." onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;"><i class="td-icon-pinterest"></i></a>
                                <a class="td-social-sharing-buttons td-social-whatsapp" href="whatsapp://send?text=L%C3%A0m+th%E1%BA%BF+n%C3%A0o+%C4%91%E1%BB%83+b%C3%A9o+l%C3%AAn+nhanh+ch%C3%B3ng+cho+ng%C6%B0%E1%BB%9Di+g%E1%BA%A7y+hi%E1%BB%87u+qu%E1%BA%A3+nh%E1%BA%A5t%3F%20-%20http%3A%2F%2Fwww.khoedep.vn%2Flam-the-nao-de-beo-len-nhanh-cho-nguoi-gay%2F" ><i class="td-icon-whatsapp"></i></a>
                            </div>
                            <div class="td-classic-sharing">
                                <ul>
                                    <li class="td-classic-facebook"><iframe frameBorder="0" src="http://www.facebook.com/plugins/like.php?href=http://www.khoedep.vn/lam-the-nao-de-beo-len-nhanh-cho-nguoi-gay/&amp;layout=button_count&amp;show_faces=false&amp;width=105&amp;action=like&amp;colorscheme=light&amp;height=21" style="border:none; overflow:hidden; width:105px; height:21px; background-color:transparent;"></iframe></li>
                                    <li class="td-classic-twitter">
                                        <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://www.khoedep.vn/lam-the-nao-de-beo-len-nhanh-cho-nguoi-gay/" data-text="Làm thế nào để béo lên nhanh chóng cho người gầy hiệu quả nhất?" data-via="" data-lang="en">tweet</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="td-author-name vcard author" style="display: none"><span class="fn"><a href="http://www.khoedep.vn/author/ngocchinh/">Khỏe Đẹp</a></span></div>
                        <span style="display: none;" itemprop="author" itemscope itemtype="https://schema.org/Person">
                            <meta itemprop="name" content="Khỏe Đẹp">
                        </span>
                        <meta itemprop="datePublished" content="2016-06-23T19:26:52+00:00">
                        <meta itemprop="dateModified" content="2020-04-09T16:19:35+00:00">
                        <meta itemscope itemprop="mainEntityOfPage" itemType="https://schema.org/WebPage" itemid="http://www.khoedep.vn/lam-the-nao-de-beo-len-nhanh-cho-nguoi-gay/"/>
                        <span style="display: none;" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                            <span style="display: none;" itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
                                <meta itemprop="url" content="/2015/10/Logo-KhoeDep.png">
                            </span>
                            <meta itemprop="name" content="Khỏe Đẹp">
                        </span>
                        <meta itemprop="headline " content="Làm thế nào để béo lên nhanh chóng cho người gầy hiệu quả nhất?">
                        <span style="display: none;" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
                            <meta itemprop="url" content="/2016/06/Lam-the-nao-de-beo-len-nhanh-chong.jpg">
                            <meta itemprop="width" content="690">
                            <meta itemprop="height" content="345">
                        </span>
                    </footer> -->
                    <div class="td_block_wrap td_block_related_posts td_uid_4_637ae782d77bc_rand td_with_ajax_pagination td-pb-border-top"  data-td-block-uid="td_uid_4_637ae782d77bc" >
                        <script>var block_td_uid_4_637ae782d77bc = new tdBlock();
                            block_td_uid_4_637ae782d77bc.id = "td_uid_4_637ae782d77bc";
                            block_td_uid_4_637ae782d77bc.atts = '{"limit":6,"sort":"","post_ids":"","tag_slug":"","autors_id":"","installed_post_types":"","category_id":"","category_ids":"","custom_title":"","custom_url":"","show_child_cat":"","sub_cat_ajax":"","ajax_pagination":"next_prev","header_color":"","header_text_color":"","ajax_pagination_infinite_stop":"","td_column_number":3,"td_ajax_preloading":"","td_ajax_filter_type":"td_custom_related","td_ajax_filter_ids":"","td_filter_default_txt":"T\u1ea5t c\u1ea3","color_preset":"","border_top":"","class":"td_uid_4_637ae782d77bc_rand","el_class":"","offset":"","css":"","live_filter":"cur_post_same_tags","live_filter_cur_post_id":18780,"live_filter_cur_post_author":"1"}';
                            block_td_uid_4_637ae782d77bc.td_column_number = "3";
                            block_td_uid_4_637ae782d77bc.block_type = "td_block_related_posts";
                            block_td_uid_4_637ae782d77bc.post_count = "6";
                            block_td_uid_4_637ae782d77bc.found_posts = "92";
                            block_td_uid_4_637ae782d77bc.header_color = "";
                            block_td_uid_4_637ae782d77bc.ajax_pagination_infinite_stop = "";
                            block_td_uid_4_637ae782d77bc.max_num_pages = "16";
                            tdBlocksArray.push(block_td_uid_4_637ae782d77bc);
                        </script>
                        <h4 class="td-related-title"><a id="td_uid_5_637ae782e399e" class="td-related-left td-cur-simple-item" data-td_filter_value="" data-td_block_id="td_uid_4_637ae782d77bc" href="#">BÀI VIẾT LIÊN QUAN</a></h4>
                        <div id=td_uid_4_637ae782d77bc class="td_block_inner">
                            
                            <div class="td-related-row">
                                @if($related->count()>0)
                                @foreach($related as $valss)
                                <div class="td-related-span4">
                                    <div class="td_module_related_posts td-animation-stack td-meta-info-hide td_mod_related_posts">
                                        <div class="td-module-image">
                                            <div class="td-module-thumb"><a href="{{ route('details', $valss->link) }}" rel="bookmark" title="{{ $valss->title }}"><img width="218" height="150" class="entry-thumb" srcset="{{ asset($valss->image) }} 218w, {{ asset($valss->image) }} 100w" sizes="(max-width: 218px) 100vw, 218px" alt="{{ $valss->title }}" title="{{ $valss->title }}"/></a></div>
                                            <a href="{{ route('details', $valss->link) }}" class="td-post-category">{{ $valss->title }}</a>            
                                        </div>
                                        <div class="item-details">
                                            <h3 class="entry-title td-module-title"><a href="{{ route('details', $valss->link) }}" rel="bookmark" title="{{ $valss->title }}">{{ $valss->title }}</a></h3>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @endif
                            </div>
                            <!--./row-fluid-->
                        </div>
                        <div class="td-next-prev-wrap"><a href="#" class="td-ajax-prev-page ajax-page-disabled" id="prev-page-td_uid_4_637ae782d77bc" data-td_block_id="td_uid_4_637ae782d77bc"><i class="td-icon-font td-icon-menu-left"></i></a><a href="#"  class="td-ajax-next-page" id="next-page-td_uid_4_637ae782d77bc" data-td_block_id="td_uid_4_637ae782d77bc"><i class="td-icon-font td-icon-menu-right"></i></a></div>
                    </div>
                    <!-- ./block -->
                </div>
            </div>
            @include('frontend.sidebar')
        </div>
        <!-- /.td-pb-row -->
    </div>
    <!-- /.td-container -->
</article>
@endsection