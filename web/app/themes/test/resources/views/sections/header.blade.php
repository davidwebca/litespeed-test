<header class="banner text-center text-lg my-8">
  <a class="brand" href="{{ home_url('/') }}">
    {!! $siteName !!}
  </a>
</header>

{!! apply_filters('litespeed_esi_url', 'fondues_loader', 'fondues_loader partials.header', ['view' => 'partials.esitest']) !!}

<div class="text-5xl bg-gray-200 p-10 my-10 container mx-auto">
  <a class="bg-blue-500 text-white font-bold rounded-lg px-2 py-1" href="{!! home_url('/?force_purge=1') !!}">Purge</a>
</div>