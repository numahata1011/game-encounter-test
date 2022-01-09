@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 mx-auto">
      <h2>プロフィール</h2>
      <form action="{{ action('User\ProfileController@create') }}" method="post" enctype="multipart/form-data">
        @csrf
        @if (count($errors) > 0)
          <ul>
            @foreach($errors->all() as $e)
              <li>{{ $e }}</li>
            @endforeach
          </ul>
        @endif

        <div class="form-group row">
          <div class="mb-3">
            <label for="formFile" class="form-label">画像</label>
            <input class="form-control" type="file" id="formFile">

            <div class="col-md-10">
              <input type="file" class="form-control-file" name="image">
              <span class="avatar-form image-picker">
                <input type="file" name="avatar" class="d-none" accept="image/png,image/jpeg,image/gif" id="avatar" />
                <label for="avatar" class="d-inline-block">
                    <img src="/images/avatar-default.svg" class="rounded-circle" style="object-fit: cover; width: 200px; height: 200px;">
                </label>
              </span>

              {{-- <button data-test="profile-summary-main-photo-button" class="css-1at3n10">
                <div class="lazy-img-wrap__Rbmmg css-1jsm5da" style="width: 128px; height: 128px;">
                  <span class="css-1jsm5da lazy-img-placeholder__UuJb5"></span>
                  <img class="lazy-img__lbCiP css-1jsm5da lazy entered loaded" data-src="https://prod-pairs-jp-icon-cdn.pairs.lv/icon/8a9870937a38576e4c9e6069c20d2cf74dac3641?height=280&amp;impolicy=pairs280x280&amp;imwidth=280&amp;v=1&amp;width=280" alt="あなたのプロフィール写真" data-ll-status="loaded" src="https://prod-pairs-jp-icon-cdn.pairs.lv/icon/8a9870937a38576e4c9e6069c20d2cf74dac3641?height=280&amp;impolicy=pairs280x280&amp;imwidth=280&amp;v=1&amp;width=280" style="width: 128px; height: 128px; display: block;">
                </div>
                <div class="css-ylxssm"></div>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="css-1k11wvq">
                  <title></title>
                  <path d="M13.5585 3C14.4193 3 15.1836 3.55086 15.4558 4.36754L16 6H18C19.6569 6 21 7.34315 21 9V17C21 18.6569 19.6569 20 18 20H6C4.34315 20 3 18.6569 3 17V9C3 7.34315 4.34315 6 6 6H8L8.54415 4.36754C8.81638 3.55086 9.58066 3 10.4415 3H13.5585ZM12 8.5C9.51472 8.5 7.5 10.5147 7.5 13C7.5 15.4853 9.51472 17.5 12 17.5C14.4853 17.5 16.5 15.4853 16.5 13C16.5 10.5147 14.4853 8.5 12 8.5ZM18.5 7.5C17.9477 7.5 17.5 7.94772 17.5 8.5C17.5 9.05228 17.9477 9.5 18.5 9.5C19.0523 9.5 19.5 9.05228 19.5 8.5C19.5 7.94772 19.0523 7.5 18.5 7.5Z">
                  </path>
                </svg>
              </button> --}}


            </div>
          </div>

        </div>
        <div class="form-group row">
          <div class="mb-3">
            <label for="name" class="form-label">ニックネーム</label>
            <input type="text" class="form-control prof-1 prof-2" name="name" value="{{ old('name') }}" placeholder="例:ぬまたまん">
          </div>
        </div>
        <div class="form-group row">
          <div class="mb-3">
            <label for="residence" class="form-label">居住地</label><br>
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
        </div>
        <div class="form-group row">
          <div class="mb-3">
            <label for="birthday" class="form-label">生年月日</label><br>
            <div class="form-inline">
              <input name="birth01" type="text" class="prof-1 prof-3 js-changeYear" value="{{ old('birth01') }}">
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
        </div>

        <div class="form-group row">
          <div class="mb-3">
            <label class="form-label">休日</label><br>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" name="holiday[]" value="平日"{{ is_array(old("checkbox")) && in_array("平日", old("checkbox"), true)? ' checked' : '' }} id="holiday01">
              <label class="form-check-label" for="holiday01">平日</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" name="holiday[]" value="土日"{{ is_array(old("checkbox")) && in_array("土日", old("checkbox"), true)? ' checked' : '' }} id="holiday02">
              <label class="form-check-label" for="holiday02">土日</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" name="holiday[]" value="祝日"{{ is_array(old("checkbox")) && in_array("祝日", old("checkbox"), true)? ' checked' : '' }} id="holiday03">
              <label class="form-check-label" for="holiday03">祝日</label>
            </div>
            @if ($errors->has('checkbox'))
              <span class="error">{{$errors->first('checkbox')}}</span>
            @endif
          </div>
        </div>

        <div class="form-group row">
          <div class="mb-3">
            <label class="form-label">所持ゲーム</label><br>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="console[]" value="" id="console01">
              <label class="form-check-label" for="console01">PlayStation4 / 5</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="console[]" value="" id="console02">
              <label class="form-check-label" for="console02">PlayStationVita</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="console[]" value="" id="console03">
              <label class="form-check-label" for="console03">PlayStation VR / Oculus Quest</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="console[]" value="" id="console04">
              <label class="form-check-label" for="console04">Xbox Series S</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="console[]" value="" id="console05">
              <label class="form-check-label" for="console05">Nintendo Switch</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="console[]" value="" id="console06">
              <label class="form-check-label" for="console06">NINTENDO 3DS</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="console[]" value="" id="console07">
              <label class="form-check-label" for="console07">PC</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="console[]" value="" id="console08">
              <label class="form-check-label" for="console08">その他</label>
            </div>
            @if ($errors->has('checkbox'))
              <span class="error">{{$errors->first('checkbox')}}</span>
            @endif
          </div>
        </div>
        <div class="form-group row">
          <div class="mb-3">
            <label class="form-label">興味のあるジャンル</label><br>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" name="genre[]" value="" id="genre01">
              <label class="form-check-label" for="genre01">アクション</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" name="genre[]" value="" id="genre02">
              <label class="form-check-label" for="genre02">アドベンチャー</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" name="genre[]" value="" id="genre03">
              <label class="form-check-label" for="genre03">シューティング</label>
            </div><br>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" name="genre[]" value="" id="genre04">
              <label class="form-check-label" for="genre04">PRG</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" name="genre[]" value="" id="genre05">
              <label class="form-check-label" for="genre05">シュミレーション</label>
            </div><br>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" name="genre[]" value="" id="genre06">
              <label class="form-check-label" for="genre06">スポーツ</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" name="genre[]" value="" id="genre07">
              <label class="form-check-label" for="genre07">格闘</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" name="genre[]" value="" id="genre08">
              <label class="form-check-label" for="genre08">レース</label>
            </div><br>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" name="genre[]" value="" id="genre09">
              <label class="form-check-label" for="genre09">音楽ゲーム</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" name="genre[]" value="" id="genre10">
              <label class="form-check-label" for="genre10">パズル</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" name="genre[]" value="" id="genre11">
              <label class="form-check-label" for="genre12">テープルゲーム</label>
            </div><br>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" name="genre[]" value="" id="genre12">
              <label class="form-check-label" for="genre12">パーティ</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" name="genre[]" value="" id="genre13">
              <label class="form-check-label" for="genre13">コミュニケーション</label>
            </div><br>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" name="genre[]" value="" id="genre14">
              <label class="form-check-label" for="genre14">学習・教育</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" name="genre[]" value="" id="genre15">
              <label class="form-check-label" for="genre15">トレーニング</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" name="genre[]" value="" id="genre16">
              <label class="form-check-label" for="genre16">乙女ゲーム</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" name="genre[]" value="" id="genre17">
              <label class="form-check-label" for="genre17">ツール</label>
            </div>
            @if ($errors->has('checkbox'))
              <span class="error">{{$errors->first('checkbox')}}</span>
            @endif
          </div>
        </div>
        <div class="form-group row">
          <div class="mb-3">
            <label class="form-label">ゲームの頻度</label><br>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="frequency[]" "気合いの毎日"{{ is_array(old("checkbox")) && in_array("気合いの毎日", old("checkbox"), true)? ' checked' : '' }} id="frequency01">
              <label class="form-check-label" for="frequency01">気合いの毎日</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="frequency[]" "休日にがっつり"{{ is_array(old("checkbox")) && in_array("休日にがっつり", old("checkbox"), true)? ' checked' : '' }} id="frequency02">
              <label class="form-check-label" for="frequency02">休日にがっつり</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="frequency[]" "マイペースに週1~2"{{ is_array(old("checkbox")) && in_array("マイペースに週1~2", old("checkbox"), true)? ' checked' : '' }} id="frequency03">
              <label class="form-check-label" for="frequency03">マイペースに週1~2</label>
            </div>
            @if ($errors->has('checkbox'))
              <span class="error">{{$errors->first('checkbox')}}</span>
            @endif
          </div>
        </div>
        <div class="form-group row">
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">PSPIN/フレンドコードetc...</label><br>
            <input type="email" class="form-control prof-1 prof-2" id="exampleFormControlInput1" placeholder="PSPIN">
            <input type="email" class="form-control prof-1 prof-2" id="exampleFormControlInput1" placeholder="フレンドコード">
          </div>
        </div>
        <div class="form-group row">
          <div class="mb-3">
            <label class="form-label">チャット機能</label><br>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="chat_flag[]" id="chat_flag01" checked>
              <label class="form-check-label" for="chat_flag02">ON</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="chat_flag[]" id="chat_flag02">
              <label class="form-check-label" for="chat_flag02">OFF</label>
            </div>
            @if ($errors->has('checkbox'))
              <span class="error">{{$errors->first('checkbox')}}</span>
            @endif
          </div>
        </div>
        <div class="form-group row">
          <div class="mb-3">
            <label for="introduction" class="form-label">自己紹介</label>
            <textarea class="form-control" id="introduction" rows="5"></textarea>
          </div>
        </div>
        {{ csrf_field() }}
        <a href="{{ route('profile') }}"><input type="submit" class="btn btn-primary" value="保存"></a>
      </form>
    </div>
  </div>
</div>
@endsection
