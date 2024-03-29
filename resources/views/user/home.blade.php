@extends('user.layouts.app')

@section('css')
    <style>
      .vi-frame {
        /* border:1.5px solid var(--foregroundprimary); */
        border:1.5px solid #e5e5e5;
        border-radius: 5px;
        background-color: white;
        box-shadow: none;
        transform: translateY(5px);
        transition: 500ms all ease;

        //prevent from selecting text
        -webkit-user-select: none; /* Safari */
        -ms-user-select: none; /* IE 10 and IE 11 */
        user-select: none; /* Standard syntax */
      }
      .vi-frame:hover{
        transform: translateY(0px);
        box-shadow: 0px 5px 0px var(--foregroundprimary);
      }
      .vi-frame:active{
        transform: translateY(5px);
        box-shadow: 0px 0px 10px transparent;
      }
      .vi-backdrop{
        background-color: rgba(255, 255, 255,0.7);
        backdrop-filter: blur(2px);
      }
      .vi-border-rounded{
        border-radius: 15px;
      }
      .vi-gap{
        margin:5px; padding:5px;
      }
    </style>
@endsection

@section('content')
<div class="uk-flex uk-flex-column uk-margin-top">
  {{-- banner --}}
  <div class="vi-border-rounded uk-overflow-hidden uk-position-relative uk-visible-toggle uk-width-1-1 uk-box-shadow-medium" tabindex="1" uk-slideshow="ratio:3:1; animation: pull; autoplay:true; "  >
    <ul class="uk-slideshow-items">
      @foreach ($banners as $item)
      @if($item->imageurl!="")
        <a href="{{$item->link}}"><li onclick="window.location.href=''">
          <img  src="{!!$item->imageurl!!}" uk-cover>
        </li></a>
      @endif
      @endforeach
    </ul>
    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
  </div>

  {{-- categories --}}
  <div class="uk-flex uk-flex-column uk-child-width-1-1 uk-card uk-card-default uk-padding-small uk-margin vi-border-rounded">
    <div id="title" class="uk-flex uk-flex-between uk-card-title uk-padding-small uk-padding-remove-vertical">
      <div class="uk-width-expand">@lang('general.categories')</div>
      <div><button class="uk-button uk-button-text" onclick="allcategories();">@lang('general.learnmore')</button><span uk-icon="chevron-right"></span></div>
    </div>

    <hr>
    <div id="content" class="uk-card-body uk-padding-small">
      <div class="" tabindex="-1" uk-slider="pause-on-hover:true ; autoplay:false; finite: true; center:false;">
        <ul class="uk-slider-items uk-child-width-1-3 uk-child-width-1-4@s uk-child-width-1-6@m">
          @each ('user.partials.category_card',$categories,'item', 'user.partials.feature_updating')
        </ul>

        <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
      </div>
    </div>
  </div>

  {{-- features --}}
  <div class="uk-flex uk-flex-column uk-child-width-1-1 uk-card uk-card-default uk-padding-small uk-margin vi-border-rounded uk-margin-remove-top">
    <div id="title" class="uk-flex uk-flex-between uk-card-title uk-padding-small uk-padding-remove-vertical">
      <div class="uk-width-expand">@lang('general.features')</div>
      <div></div>
    </div>

    <hr>
    <div id="content" class="uk-card-body uk-padding-small uk-padding-remove-vertical">
      <div class="uk-flex uk-flex-wrap uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m uk-child-width-1-6@l">
        @each ('user.partials.product_card',$products,'item', 'user.partials.feature_updating')
      </div>
      
    </div>
  </div>
 

  {{-- saleoff_products --}}
  <div class="uk-flex uk-flex-column uk-child-width-1-1 uk-card uk-card-default uk-padding-small uk-margin vi-border-rounded uk-margin-remove-top">
    <div id="title" class="uk-flex uk-flex-between uk-card-title uk-padding-small uk-padding-remove-vertical">
      <div class="uk-width-expand">💥@lang('general.saleoff')💥</div>
      <div><button class="uk-button uk-button-text" onclick="allsaleoff();">@lang('general.learnmore')</button><span uk-icon="chevron-right"></span></div>
    </div>

    <hr>
    <div id="content" class="uk-card-body uk-padding-small uk-padding-remove-vertical">

       <div uk-filter="target: .js-filter">
        <ul class="uk-subnav uk-subnav-pill">
          <li uk-filter-control><a href="#">@lang('general.filter.all')</a></li>
            @foreach($saleoffable_categories as $item)
              <li uk-filter-control=".category-{{$item->id}}"><a href="#">{{$item->name}}</a></li>
            @endforeach
        </ul>
    
        <div class="uk-flex uk-flex-wrap js-filter uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m uk-child-width-1-6@l uk-text-center">
          {{-- @each ('user.partials.product_card',$saleoff_products,'item', 'user.partials.feature_updating') --}}
          @each ('user.partials.product_card',$saleoffable_products,'item', 'user.partials.feature_updating')

        </div>
    
      </div>

    </div>
  </div>

</div>
@endsection

@section('js')
<script src="{{asset('js/jquery-3.6.1.min.js')}}"></script>
<script>
  $(document).ready(function(){
   $('.category-showing-product-on-click').click(function(){
    $('#search').val($(this).data('cname'));
    window.scrollTo({
      top: 0,
      behavior: "smooth",
    });
    $('#search').trigger('input');
   });
  });
</script>
@endsection