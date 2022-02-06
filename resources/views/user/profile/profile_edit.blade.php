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
            {{-- <label for="formFile" class="form-label">画像</label>
            <input class="form-control" type="file" id="formFile"> --}}

            <div class="col-md-10">
              <input type="file" class="form-control-file" name="image">
              <span class="avatar-form image-picker">
                <input type="file" name="avatar" class="d-none" accept="image/png,image/jpeg,image/gif" id="avatar" />
                <label for="avatar" class="d-inline-block">
                    <img src="/images/avatar-default.svg" class="rounded-circle" style="object-fit: cover; width: 200px; height: 200px;">
                </label>
              </span>

            </div>
          </div>

        </div>
        <div class="form-group row">
          <div class="mb-3">
            <label for="name" class="form-label">ニックネーム</label>
            <input name="name" type="text" class="form-control prof-1 prof-2" value="{{ $profile_form->name }}" placeholder="例:ぬまたまん">
          </div>
        </div>
        <div class="form-group row">
          <div class="mb-3">
            <label for="residence" class="form-label">居住地</label><br>
            <select name="residence" class="form-select prof-1 prof-2" aria-label="Default select example" value="{{ $profile_form->residence }}">
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
              <input name="birth01" type="text" class="prof-1 prof-3 js-changeYear" value="{{ $profile_form->birth01 }}">
              <label for="InputName1">年</label>

              <select name="birth02" class="form-select prof-1 js-changeMonth" value="{{ $profile_form->birth02 }}"">
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

              <select name="birth03" class="form-select prof-1 js-changeDay" value="{{ $profile_form->birth03 }}"">
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
              <input class="form-check-input" type="checkbox" name="holiday[]" value="1"
              {{ is_array(old("holiday")) && in_array("1", old("holiday"), true)? ' checked' : '' }} id="holiday01">
              <label class="form-check-label" for="holiday01">平日</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" name="holiday[]" value="2"
              {{ is_array(old("holiday")) && in_array("2", old("holiday"), true)? ' checked' : '' }} id="holiday02">
              <label class="form-check-label" for="holiday02">土日</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" name="holiday[]" value="3"
              {{ is_array(old("holiday")) && in_array("3", old("holiday"), true)? ' checked' : '' }} id="holiday03">
              <label class="form-check-label" for="holiday03">祝日</label>
            </div>
            @if ($errors->has('holiday'))
              <span class="error">{{$errors->first('holiday')}}</span>
            @endif
          </div>
        </div>


        <div class="form-group row">
          <div class="mb-3">
            <label class="form-label">ゲームの頻度</label><br>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="frequency" value="1"
              @if( old('frequency') == "1") checked @endif>
              <label class="form-check-label" for="frequency01">気合いの毎日</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="frequency" value="2"
              @if( old('frequency') == "2") checked @endif >
              <label class="form-check-label" for="frequency02">休日にがっつり</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="frequency" value="3"
              @if( old('frequency') == "3") checked @endif >
              <label class="form-check-label" for="frequency03">マイペースに週1~2</label>
            </div>
            @if ($errors->has('checkbox'))
              <span class="error">{{$errors->first('checkbox')}}</span>
            @endif
          </div>
        </div>

        <div class="form-group row">
          <div class="mb-3">
            <label class="form-label">所持ゲーム</label><br>
            @foreach($consoles as $console)
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="consoles[]" value="{{ $console->id }}"
                {{ is_array(old("consoles")) && in_array($console->id, old("consoles"), true)? ' checked' : '' }} >
                <label class="form-check-label" for="console01">{{ $console->name }}</label>
              </div>
            @endforeach
          </div>
        </div>

        <div class="form-group row">
          <div class="mb-3">
            <label class="form-label">興味のあるジャンル</label><br>
            @foreach($genres as $genre)
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="genres[]" value="{{ $genre->id }}"
                {{ is_array(old("genres")) && in_array($genre->id, old("genres"), true)? ' checked' : '' }} >
                <label class="form-check-label" for="genre01">{{ $genre->name }}</label>
              </div>
            @endforeach
          </div>
        </div>


        <div class="form-group row">
          <div class="mb-3">
            <label for="game_code" class="form-label">PSPIN/フレンドコードetc...</label><br>
            <input type="text" class="form-control prof-1 prof-2" name="game_code01" value="{{ old('game_code01') }}" placeholder="PSPIN" >
            <input type="text" class="form-control prof-1 prof-2" name="game_code02" value="{{ old('game_code02') }}" placeholder="フレンドコード">
          </div>
        </div>
        <div class="form-group row">
          <div class="mb-3">
            <label class="form-label">チャット機能</label><br>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="chat_flag" value="true" id="chat_flag01" checked>
              <label class="form-check-label" for="chat_flag01">ON</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="chat_flag" value="false" id="chat_flag02">
              <label class="form-check-label" for="chat_flag02">OFF</label>
            </div>
            @if ($errors->has('checkbox'))
              <span class="error">{{$errors->first('checkbox')}}</span>
            @endif
          </div>
        </div>
        <div class="form-group row">
          <label for="introduction" class="form-label">自己紹介</label>
          <textarea class="form-control" name="introduction" value="{{ old('introduction') }}" rows="5"></textarea>
        </div>
        {{ csrf_field() }}
        <a href="{{ route('profile') }}"><input type="submit" class="btn btn-primary" value="保存"></a>
      </form>
    </div>
  </div>
</div>
@endsection
