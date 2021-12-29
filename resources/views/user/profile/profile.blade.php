@extends('layouts.app')

@section('content')
プロフィール

<br>
<div>
  <a class="btn btn-primary" href="{{ route('profile/create') }}" role="button">新規登録</a>
  <a class="btn btn-primary" href="{{ route('profile/edit') }}" role="button">編集</a>
</div>
<br>

<div>
  <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">ニックネーム</label>
  <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="ぬまたまん">
</div>

<div>
  <label for="exampleFormControlInput1" class="form-label">居住地</label><br>
  <select class="form-select prof-1 prof-2" aria-label="Default select example">
    <option selected>--選択してください--</option>
    <option value="1">北海道</option>
    <option value="2">青森県</option>
    <option value="3">岩手県</option>
    <option value="4">宮城県</option>
    <option value="5">秋田県</option>
    <option value="6">山形県</option>
    <option value="7">福島県</option>
    <option value="8">茨城県</option>
    <option value="9">栃木県</option>
    <option value="10">群馬県</option>
    <option value="11">埼玉県</option>
    <option value="12">千葉県</option>
    <option value="13">東京都</option>
    <option value="14">神奈川県</option>
    <option value="15">新潟県</option>
    <option value="16">富山県</option>
    <option value="17">石川県</option>
    <option value="18">福井県</option>
    <option value="19">山梨県</option>
    <option value="20">長野県</option>
    <option value="21">岐阜県</option>
    <option value="22">静岡県</option>
    <option value="23">愛知県</option>
    <option value="24">三重県</option>
    <option value="25">滋賀県</option>
    <option value="26">京都府</option>
    <option value="27">大阪府</option>
    <option value="28">兵庫県</option>
    <option value="29">奈良県</option>
    <option value="30">和歌山県</option>
    <option value="31">鳥取県</option>
    <option value="32">島根県</option>
    <option value="33">岡山県</option>
    <option value="34">広島県</option>
    <option value="35">山口県</option>
    <option value="36">徳島県</option>
    <option value="37">香川県</option>
    <option value="38">愛媛県</option>
    <option value="39">高知県</option>
    <option value="40">福岡県</option>
    <option value="41">佐賀県</option>
    <option value="42">長崎県</option>
    <option value="43">熊本県</option>
    <option value="44">大分県</option>
    <option value="45">宮崎県</option>
    <option value="46">鹿児島県</option>
    <option value="47">沖縄県</option>
  </select>
</div>
<br>

<div>
  <label for="exampleFormControlInput1" class="form-label">生年月日</label><br>
  <div class="form-inline">
    <input name="birth01" type="text" class="prof-1 prof-3 js-changeYear">
    <label for="InputName1">年</label>
    {{-- <select class="form-select prof-2" aria-label="Default select example">
      <option selected>--選択してください--</option>
      <option value="1">1900</option>
      <option value="2">Two</option>
      <option value="3">Three</option>
    </select> --}}

    <select name="birth02" class="form-select prof-1 js-changeMonth" aria-label="Default select example">
      {{-- <option selected>--選択してください--</option> --}}
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
      <option value="11">11</option>
      <option value="12">12</option>
    </select>
    <label for="InputName1">月</label>

    <select name="birth03" class="form-select prof-1 js-changeDay" aria-label="Default select example">
      {{-- <option selected>--選択してください--</option> --}}
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
      <option value="11">11</option>
      <option value="12">12</option>
      <option value="13">13</option>
      <option value="14">14</option>
      <option value="15">15</option>
      <option value="16">16</option>
      <option value="17">17</option>
      <option value="18">18</option>
      <option value="19">19</option>
      <option value="20">20</option>
      <option value="21">21</option>
      <option value="22">22</option>
      <option value="23">23</option>
      <option value="24">24</option>
      <option value="25">25</option>
      <option value="26">26</option>
      <option value="27">27</option>
      <option value="28">28</option>
      <option value="29">29</option>
      <option value="30">30</option>
      <option value="31">31</option>
    </select>
    <label for="InputName1">日</label>
  </div>
</div>
<br>

<div>
  <label for="exampleFormControlInput1" class="form-label">休日</label><br>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
    <label class="form-check-label" for="flexCheckChecked">平日</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
    <label class="form-check-label" for="flexCheckChecked">土日</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
    <label class="form-check-label" for="flexCheckChecked">祝日</label>
  </div>
</div>
<br>

<div>
  <label for="exampleFormControlInput1" class="form-label">所持ゲーム</label><br>
  <div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
    <label class="form-check-label" for="flexCheckChecked">PlayStation4 / 5</label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
    <label class="form-check-label" for="flexCheckChecked">PlayStationVita</label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
    <label class="form-check-label" for="flexCheckChecked">PlayStation VR / Oculus Quest</label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
    <label class="form-check-label" for="flexCheckChecked">Xbox Series S</label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
    <label class="form-check-label" for="flexCheckChecked">Nintendo Switch</label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
    <label class="form-check-label" for="flexCheckChecked">NINTENDO 3DS</label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
    <label class="form-check-label" for="flexCheckChecked">PC</label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
    <label class="form-check-label" for="flexCheckChecked">その他</label>
  </div>
</div>
<br>

<div>
  <label for="exampleFormControlInput1" class="form-label">興味のあるジャンル</label><br>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
    <label class="form-check-label" for="flexCheckChecked">アクション</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
    <label class="form-check-label" for="flexCheckChecked">アドベンチャー</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
    <label class="form-check-label" for="flexCheckChecked">シューティング</label>
  </div><br>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
    <label class="form-check-label" for="flexCheckChecked">PRG</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
    <label class="form-check-label" for="flexCheckChecked">シュミレーション</label>
  </div><br>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
    <label class="form-check-label" for="flexCheckChecked">スポーツ</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
    <label class="form-check-label" for="flexCheckChecked">格闘</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
    <label class="form-check-label" for="flexCheckChecked">レース</label>
  </div><br>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
    <label class="form-check-label" for="flexCheckChecked">音楽ゲーム</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
    <label class="form-check-label" for="flexCheckChecked">パズル</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
    <label class="form-check-label" for="flexCheckChecked">テープルゲーム</label>
  </div><br>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
    <label class="form-check-label" for="flexCheckChecked">パーティ</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
    <label class="form-check-label" for="flexCheckChecked">コミュニケーション</label>
  </div><br>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
    <label class="form-check-label" for="flexCheckChecked">学習・教育</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
    <label class="form-check-label" for="flexCheckChecked">トレーニング</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
    <label class="form-check-label" for="flexCheckChecked">ツール</label>
  </div>
</div><br>

<div>
  <label for="exampleFormControlInput1" class="form-label">ゲームの頻度</label><br>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    <label class="form-check-label" for="flexRadioDefault1">気合いの毎日</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    <label class="form-check-label" for="flexRadioDefault1">休日にがっつり</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    <label class="form-check-label" for="flexRadioDefault1">マイペースに週1~2</label>
  </div>
</div>
<br>

<div>
  <label for="exampleFormControlInput1" class="form-label">PSPIN/フレンドコードetc...</label><br>
  <input type="email" class="form-control prof-1 prof-2" id="exampleFormControlInput1" placeholder="PSPIN">
  <input type="email" class="form-control prof-1 prof-2" id="exampleFormControlInput1" placeholder="フレンドコード">
</div>
<br>

<div>
  <label for="exampleFormControlInput1" class="form-label">チャット機能</label><br>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
    <label class="form-check-label" for="flexRadioDefault2">ON</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    <label class="form-check-label" for="flexRadioDefault1">OFF</label>
  </div>
</div>
<br>

<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">自己紹介</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
</div>




@endsection
