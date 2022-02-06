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
              <select class="form-select prof-1 prof-2" name="residence_id" value="{{ old('residence_id') }}">
              @foreach($residences as $residence)
                  <option value="{{ $residence->id }}">{{ $residence->name }}</option>
              @endforeach
              </select>
          </div>
        </div>

        <div class="form-group row">
          <div class="mb-3">
            <label for="birthday" class="form-label">生年月日</label><br>
            <div class="form-inline">
              <input name="birth01" type="text" class="prof-1 prof-3 js-changeYear" value="{{ old('birth01') }}">
              <label for="InputName1">年</label>

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
            @foreach($holidays as $holiday)
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="holiday[]" value="{{ $holiday->id }}"
                {{ is_array(old("holidays")) && in_array($holiday->id, old("holidays"), true)? ' checked' : '' }} >
                <label class="form-check-label">{{ $holiday->name }}</label>
              </div>
            @endforeach

            @if ($errors->has('holiday'))
              <span class="error">{{$errors->first('holiday')}}</span>
            @endif
          </div>
        </div>


        <div class="form-group row">
          <div class="mb-3">
            <label class="form-label">ゲームの頻度</label><br>
            <select class="form-select prof-1 prof-2" name="frequency_id" value="{{ old('frequency_id') }}">
            @foreach($frequencies as $frequency)
                <option value="{{ $frequency->id }}">{{ $frequency->name }}</option>
            @endforeach
            </select>

            {{-- @foreach($frequencies as $frequency)
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="frequency_id" value="{{ $frequency->id }}"
              @if( old('frequency') == "{{ $frequency->id }}") checked @endif>
              <label class="form-check-label">{{ $frequency->name }}</label>
            </div>
            @endforeach --}}

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
