<div class="text-5xl font-bold p-10 bg-gray-200 text-center container mx-auto">
  <p>This is part of the header, is available on every page and is marked as a no-cache ESI block</p>


  @if(class_exists( 'WooCommerce' ) )
  <hr class="border-b border-black my-12">

  <p>This is the number of products you have in your WooCommerce cart: <a href="{{ wc_get_cart_url() }}" class="">{!! WC()->cart->get_cart_contents_count() !!}</a></p>
  @endif

  <hr class="border-b border-black my-12">

  <p>Here is the WPML language selector</p>
  @php(do_action('wpml_add_language_selector'))

  <hr class="border-b border-black my-12">

  <p>Here is the main nav</p>
  @if (has_nav_menu('primary_navigation'))
    <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
    </nav>
  @endif


  <hr class="border-b border-black my-12">

  <h1>Submit this form without any query to trigger a bug. This whole gray area will disappear.</h1>
  <form action="{{ home_url('/') }}">
    <input
      type="search"
      placeholder="{!! esc_attr_x('Search &hellip;', 'placeholder', 'sage') !!}"
      name="s"
      class="appearance-none ring-1 px-2 py-1 outline-none focus:outline-none focus:ring-blue-500"
    >
    <button class="px-2 py-1 rounded-lg bg-blue-500 text-white">Submit</button>
  </form>
</div>
