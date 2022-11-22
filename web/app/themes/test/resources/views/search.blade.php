@extends('layouts.app')

@section('content')
<div class="p-10 bg-yellow-500 text-5xl text-black">
  <h1>Once search has been submitted WITHOUT any params, the gray box disappears for everyone: the ESI block probably triggers an error and caches this empty output for everyone, even if it's a no-cache block.</h1>
</div>
@endsection
