@extends('layouts.app')

@section('content')
コミュニティ

<div class="com-1">
  <div>
    人気
  </div>
  <div class="com-3">
    <h2 class="com-5">GAME CONSOLE</h2>
    <ul class="com-2">
      @foreach($consoles as $console)
        <li>
          <div class="card btn-light {{ $console->btn_color }} com-btn-1">
            <h5 class="com-btn-2">{{ $console->name }}</h5>
            <a class="Link" href="{{ route('communitygenre', ['console_id'=>$console->id]) }}"></a>
          </div>
        </li>
      @endforeach

      {{-- <li>
        <div class="card btn-light btnx-indigo-light com-btn-1">
          <h5 class="com-btn-2">PlayStation4/5</h5>
          <a class="Link" href="{{ route('ps4/5') }}"></a>
        </div>
      </li>
      <li>
        <div class="card btn-light btnx-purpule-light com-btn-1">
          <h5 class="com-btn-2">PlayStationVita</h5>
          <a class="Link" href="{{ route('psv') }}"></a>
        </div>
      </li>
      <li>
        <div class="card btn-light btnx-pink-light com-btn-1">
          <h5 class="com-btn-2">PlayStation VR <br> Oculus Quest</h5>
          <a class="Link" href="{{ route('vr') }}"></a>
        </div>
      </li>
      <li>
        <div class="card btn-light btnx-orange-light com-btn-1">
          <h5 class="com-btn-2">Xbox Series S</h5>
          <a class="Link" href="{{ route('xbox') }}"></a>
        </div>
      </li><br>
      <li>
        <div class="card btn-light btnx-teal-light com-btn-1">
          <h5 class="com-btn-2">Nintendo Switch</h5>
          <a class="Link" href="{{ route('switch') }}"></a>
        </div>
      </li>
      <li>
        <div class="card btn-light btnx-cyan-light com-btn-1">
          <h5 class="com-btn-2">NINTENDO 3DS</h5>
          <a class="Link" href="{{ route('3ds') }}"></a>
        </div>
      </li>
      <li>
        <div class="card btn-light btnx-lime-light com-btn-1">
          <h5 class="com-btn-2">PC</h5>
          <a class="Link" href="{{ route('pc') }}"></a>
        </div>
      </li>
      <li>
        <div class="card btn-light btnx-gray-light com-btn-1">
          <h5 class="com-btn-2">その他</h5>
          <a class="Link" href="{{ route('other') }}"></a>
        </div>
      </li> --}}
    </ul>


  </div>
</div>



  {{-- <div class="row m-0">
    <div class="col-sm-3 card btn-light btnx-indigo-light com-btn-1 ">
      <h5 class="com-btn-2">PlayStation4/5</h5>
      <a class="Link" href={{ route('ps4/5') }}></a>
    </div>

    <div class="col-sm-3 card btn-light btnx-purpule-light com-btn-1">
      <h5 class="com-btn-2">PlayStationVita</h5>
      <a class="Link" href={{ route('psv') }}></a>
    </div>

    <div class="col-sm-3 card btn-light btnx-pink-light com-btn-1">
      <h5 class="com-btn-2">PlayStation VR <br> Oculus Quest</h5>
      <a class="Link" href={{ route('vr') }}></a>
    </div>

    <div class="col-sm-3 card btn-light btnx-orange-light com-btn-1">
      <h5 class="com-btn-2">Xbox Series S</h5>
      <a class="Link" href={{ route('xbox') }}></a>
    </div>
  </div>

  <div class="row m-0">
    <div class="col-sm-3 card btn-light btnx-teal-light com-btn-1">
      <h5 class="com-btn-2">Nintendo Switch</h5>
      <a class="Link" href={{ route('switch') }}></a>
    </div>

    <div class="col-sm-3 card btn-light btnx-cyan-light com-btn-1">
      <h5 class="com-btn-2">NINTENDO 3DS</h5>
      <a class="Link" href={{ route('3ds') }}></a>
    </div>

    <div class="col-sm-3 card btn-light btnx-lime-light com-btn-1">
      <h5 class="com-btn-2">PC</h5>
      <a class="Link" href={{ route('pc') }}></a>
    </div>

    <div class="col-sm-3 card btn-light btnx-gray-light com-btn-1">
      <h5 class="com-btn-2">その他</h5>
      <a class="Link" href={{ route('other') }}></a>
    </div>
  </div> --}}

@endsection
