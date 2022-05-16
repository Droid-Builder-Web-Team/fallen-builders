<?php
use hisorange\BrowserDetect\Parser as Browser;
?>
@extends('layouts.app')

@section('content')
    @if(Browser::isDesktop())
    <div class="grid grid-cols-4 gap-1">
      <div class="col-span-1 relative">
        @include('partials.page-header')
      </div>
      <div class="col-span-3">
    @while(have_posts()) @php(the_post())
      @includeFirst(['partials.content-single-' . get_post_type(), 'partials.content-single'])
    @endwhile
      </div>
    </div>
    @endif
    @if(Browser::isTablet())
      <div class="relative">
        @include('partials.page-header-tablet')
      </div>
        @while(have_posts()) @php(the_post())
        @includeFirst(['partials.content-single-' . get_post_type(), 'partials.content-single'])
        @endwhile
    @endif
    @if(Browser::isMobile())
      <div class="relative">
        @include('partials.page-header-mobile')
      </div>
      @while(have_posts()) @php(the_post())
      @includeFirst(['partials.content-single-' . get_post_type(), 'partials.content-single'])
      @endwhile
    @endif
@endsection
