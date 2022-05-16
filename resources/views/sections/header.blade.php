<?php
use hisorange\BrowserDetect\Parser as Browser;
?>
<header class="banner px-3.5 pt-3.5">
  @if(Browser::isDesktop())
    <div class="grid grid-cols-4 gap-1">
      <div class="col-span-1">
        <a class="brand" href="{{ home_url('/') }}">
          <img src="@asset('images/fallen-logo-desktop.png')" srcset="@asset('images/fallen-logo-desktop@2x.png') 2x,@asset('images/fallen-logo-desktop@3x.png') 3x" width="214" height="68" alt="Fallen Builders" class="mx-auto">
        </a>
      </div>
      <div class="col-span-3">
        @if (has_nav_menu('primary_navigation'))
          <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
            {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
          </nav>
        @endif
      </div>
    </div>
  @endif
</header>
