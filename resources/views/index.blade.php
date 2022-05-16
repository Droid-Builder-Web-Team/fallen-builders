@extends('layouts.app')

<?php
use hisorange\BrowserDetect\Parser as Browser;
?>

@section('content')
  @if(Browser::isDesktop())
  <div class="grid grid-cols-4 gap-1">
    <div class="col-span-1 relative">
      @include('partials.page-header')
      {!! get_search_form(true) !!}
    </div>
    <div class="col-span-3">
  @if (! have_posts())
    <x-alert type="warning">
      {!! __('Sorry, no results were found.', 'sage') !!}
    </x-alert>

  @endif

  @while(have_posts()) @php(the_post())
    @includeFirst(['partials.content-' . get_post_type(), 'partials.content'])
  @endwhile

  {!! get_the_posts_navigation() !!}
    </div>
  </div>
  @endif

  @if(Browser::isTablet())
    <div class="relative">
      @include('partials.page-header-tablet')
    </div>
    @if (! have_posts())
      <x-alert type="warning">
        {!! __('Sorry, no results were found.', 'sage') !!}
      </x-alert>

    @endif

    @while(have_posts()) @php(the_post())
    @includeFirst(['partials.content-' . get_post_type(), 'partials.content'])
    @endwhile

    {!! get_the_posts_navigation() !!}
  @endif

  @if(Browser::isMobile())
    <div class="relative">
      @include('partials.page-header-mobile')
    </div>
    @if (! have_posts())
      <x-alert type="warning">
        {!! __('Sorry, no results were found.', 'sage') !!}
      </x-alert>

    @endif

    @while(have_posts()) @php(the_post())
    @includeFirst(['partials.content-' . get_post_type(), 'partials.content'])
    @endwhile

    {!! get_the_posts_navigation() !!}
  @endif

@endsection
