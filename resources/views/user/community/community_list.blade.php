@extends('layouts.app')

@section('content')
{{-- {{ route('#') }} --}}

<div class="com-1">
  <div class="com-3 com-5">
    <h2 class="com-5">GAME LIST</h2>
    <ul class="com-2">
    @foreach($communities as $community)
      <li>
        <div class="card btn-light btnx-list1 com-btn-1">
          <pre class="com-btn-2">{{ $community->name }}</pre>
          <a class="Link" href="{{ route('communitylist', ['console_id'=>$console->id, 'genre_id'=>$genre->id, 'community_id'=>$community->id]) }}"></a>
        </div>
      </li>
    @endforeach

    </ul>
  </div>
</div>

@endsection
