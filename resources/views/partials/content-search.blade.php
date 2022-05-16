<article @php(post_class('ml-5 mr-8 md:mr-5 lg:ml-0 lg:mr-8 relative'))>
  <header>
    <h2 class="entry-title mb-3.5">
      <a href="{{ get_permalink() }}">
        {!! $title !!}
      </a>
    </h2>

  </header>

  <div class="entry-summary">
    @php(the_excerpt())
  </div>

  <div class="fallen_image w-[80px] h-[80px] md:w-[98px] md:h-[98px] overflow-hidden rounded-full absolute top-[-12px] md:top-[-6px] right-[-12px] md:right-5">
  <?php the_post_thumbnail('post-thumbnail', array( 'class'  => ' w-[80px] md:w-[98px]' ) ); ?>
  <?php get_template_part( 'templates/feature-image'); ?>
  </div>

</article>
