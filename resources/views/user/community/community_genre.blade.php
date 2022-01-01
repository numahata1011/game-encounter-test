@extends('layouts.app')

@section('content')
{{-- {{ route('#') }} --}}

<div class="com-1">
  <div class="com-3 com-4">
    <h2 class="com-5">GAME GENRE</h2>
    <ul class="com-2">
    @foreach($genres as $genre)
      <li>
        <div class="card btn-light {{ $genre->btn_color }} com-btn-1">
          <h5 class="com-btn-2">{{ $genre->name }}</h5>
          <a class="Link" href="{{ route('genre', ['console_id'=>$console->id, 'genre_id'=>$genre->id]) }}"></a>
        </div>
      </li>
    @endforeach

    {{-- <li>
      <div class="card btn-light com-btn-1">
        <h5 class="com-btn-2">アクション</h5>
        <a class="Link" href="#"></a>
      </div>
    </li>
    <li>
      <div class="card btn-light com-btn-1">
        <h5 class="com-btn-2">アクション</h5>
        <a class="Link" href="#"></a>
      </div>
    </li>
    <li>
      <div class="card btn-light com-btn-1">
        <h5 class="com-btn-2">アクション</h5>
        <a class="Link" href="#"></a>
      </div>
    </li>
    <li>
      <div class="card btn-light com-btn-1">
        <h5 class="com-btn-2">アクション</h5>
        <a class="Link" href="#"></a>
      </div>
    </li>
    <li>
      <div class="card btn-light com-btn-1">
        <h5 class="com-btn-2">アクション</h5>
        <a class="Link" href="#"></a>
      </div>
    </li> --}}
  </ul>
  </div>
</div>

  {{-- <div class="com-btn-3">
    <div class="card btn-light com-btn-1 com-btn-4 ">
      <h5 class="com-btn-2">アクション</h5>
      <a class="Link" href="#"></a>
    </div>

    <div class="card btn-light com-btn-1 com-btn-4 ">
      <h5 class="com-btn-2">アドベンチャー</h5>
      <a class="Link" href="#"></a>
    </div>

    <div class="card btn-light com-btn-1 com-btn-4 ">
      <h5 class="com-btn-2">シューティング</h5>
      <a class="Link" href="#"></a>
    </div>

    <div class="card btn-light com-btn-1 com-btn-4 ">
      <h5 class="com-btn-2">RPG</h5>
      <a class="Link" href="#"></a>
    </div>

    <div class="card btn-light com-btn-1 com-btn-4 ">
      <h5 class="com-btn-2">シュミレーション</h5>
      <a class="Link" href="#"></a>
    </div>
  </div> --}}


<div>

</div>


@endsection
