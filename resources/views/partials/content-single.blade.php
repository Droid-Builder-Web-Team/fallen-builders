<article @php(post_class('mx-5 lg:ml-0 lg:mr-8 relative'))>
  <header>
    <h1 class="entry-title text-[1.375rem] mb-3.5">
      {!! $title !!}
    </h1>

{{--    @include('partials.entry-meta')--}}
  </header>

  <div class="entry-content">
    <div class="fallen_image max-w-[129px] border-[6px] border-white border-solid float-right">
      <?php the_post_thumbnail('post-thumbnail', array( 'class'  => ' w-[129px]' ) ); ?>
      <?php get_template_part( 'templates/feature-image' ); ?>
    </div>
    @php(the_content())
  </div>

  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>

  @php(comments_template())
</article>
