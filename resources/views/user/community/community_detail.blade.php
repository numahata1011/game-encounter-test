@extends('layouts.app')

@section('content')

<div class="com-1">
  <div class="com-3 com-5">
    <h2 class="com-5">GAME TOP</h2>
      {{-- カスタムボタンの追加 --}}
      <button class="btn" data-btn>Submit</button>
        <div class="checkmark-container">
          <svg x="0px" y="0px" fill="none" class="checkmark-svg" viewBox="0 0 25 30">
            <path d="M2,19.2C5.9,23.6,9.4,28,9.4,28L23,2"/>
          </svg>
        </div>
  </div>
</div>

@endsection
