@extends('layouts.app')

@section('content')

<div class="cont-1">

  <h2>お問い合わせフォーム</h2>

  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">お問い合わせカテゴリ</label><br>
    {{-- <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com"> --}}
    <select class="form-select cont-2" aria-label="Default select example">
      <option selected>タップして選択</option>
      <option value="1">不具合報告</option>
      <option value="2">不具合報告</option>
      <option value="3">不快なユーザがいる</option>
      <option value="4">サイトの技術的な問題について</option>
      <option value="5">利用規約・プライバシーポリシーについて</option>
      <option value="6">その他</option>
      <option value="7">退会</option>
    </select>
  </div>

  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">お問い合わせ内容</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>

  <a class="btn btn-primary" href="{{ route('community') }}" role="button">送信</a>
</div>

@endsection
