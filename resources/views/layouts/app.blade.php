<a class="sr-only focus:not-sr-only" href="#main">
  {{ __('Skip to content') }}
</a>

@include('sections.header')

  <main id="main" class="main">
    @yield('content')

    @if(!is_single())
    <aside class="sidebar mx-5 lg:mx-8 mt-8 lg:mt-5">
      @php(dynamic_sidebar('sidebar-primary'))
    </aside>
    @endif
  </main>


@include('sections.footer')
