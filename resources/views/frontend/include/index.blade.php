@if($data->count()>0)
@foreach($data as $val)
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