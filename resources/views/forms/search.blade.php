<form role="search" method="get" class="search-form relative md:absolute ml-5 md:mx-5 lg:mx-8 bottom-[18px] lg:bottom-12 w-[85%] md:w-[75%]" action="{{ home_url('/') }}">
  <label>
    <span class="sr-only">
      {{ _x('Search for:', 'label', 'sage') }}
    </span>

    <input
      type="search"
      placeholder="{!! esc_attr_x('Search &hellip;', 'placeholder', 'sage') !!}"
      value="{{ get_search_query() }}"
      name="s"
      class="text-white bg-black p-2 border-[D2D2D2] border border-solid rounded w-full"
    >
  </label>

  <button class="morai absolute">{{ _x('', 'submit button', 'sage') }}</button>

</form>
