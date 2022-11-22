@extends('layouts.app')

@section('content')
<div class="p-10 bg-yellow-500 text-5xl text-black">
  <h1>Once search has been submitted WITHOUT any params, the gray box disappears for everyone: the ESI block probably triggers an error and caches this empty output for everyone, even if it's a no-cache block.</h1>
  <p>You can navigate to other pages or visit this site with another device and notice the gray block doesn't exist anymore for everyone.</p>
  {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
</div>
@endsection
