@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')

<div class="contact-form__content">
  <div class="contact-form__heading">
    <h2>お問い合わせ</h2>
  </div>
  <form class="form" action="/confirm" method="post">
    @csrf
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">お名前</span>
        <span class="form__label--required">必須</span>
      </div>
      <div class="form__group-detail">
        <div class="form__input--text">
          <input type="text" name="last_name" placeholder="山田" value="{{ old('last_name') }}" />
           <div class="form__error">
              @error('last_name')
              {{ $message }}
              @enderror
           </div>
          <input type="text" name="first_name" placeholder="太郎" value="{{ old('first_name') }}" />
           <div class="form__error">
              @error('first_name')
              {{ $message }}
              @enderror
           </div>
        <div class="form__error">
          
        </div>
      </div>
    </div>
    <div class="form__group">
  <div class="form__group-title">
    <span class="form__label--item">性別</span>
    <span class="form__label--required">必須</span>
  </div>

  <div class="form__group-detail">

    <label>
      <input
        type="radio"
        name="gender"
        value="1"
        {{ old('gender', '1') == '1' ? 'checked' : '' }}
      >
      男性
    </label>

    <label>
      <input
        type="radio"
        name="gender"
        value="2"
        {{ old('gender') == '2' ? 'checked' : '' }}
      >
      女性
    </label>

    <label>
      <input
        type="radio"
        name="gender"
        value="3"
        {{ old('gender') == '3' ? 'checked' : '' }}
      >
      その他
    </label>
     <div class="form__error">
        @error('gender')
        {{ $message }}
        @enderror
     </div>
  </div>
</div>
<div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">メールアドレス</span>
        <span class="form__label--required">必須</span>
      </div>
      <div class="form__group-detail">
        <div class="form__input--text">
          <input type="email" name="email" placeholder="test@example.com" value="{{ old('email') }}" />
        </div>
        <div class="form__error">
          @error('emaill')
          {{ $message }}
          @enderror
          @if ($errors->has('email'))
            <p>{{ $errors->first('email') }}</p>
          @endif
        </div>
      </div>
      </div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">電話番号</span>
        <span class="form__label--required">必須</span>
      </div>
      <div class="form__group-detail">
        <div class="form__input--text">
          <input
            type="text"
            name="tel1"
            placeholder="090"
            value="{{ old('tel1') }}"
          />
          
          -

          <input
            type="text"
            name="tel2"
            placeholder="1234"
            value="{{ old('tel2') }}"
          />

          -

          <input
            type="text"
            name="tel3"
            placeholder="5678"
            value="{{ old('tel3') }}"
          />
         </div>
         

         <div class="form__error">
           @error('tel1')
           {{ $message }}
           @enderror
         </div>
       </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">住所</span>
        <span class="form__label--required">必須</span>
      </div>
    
     
      <div class="form__group-detail">
       <div class="form__input--text">
        <input
          type="text"
          name="address"
          placeholder="東京都渋谷区千駄ヶ谷1-2-3"
          value="{{ old('address') }}"
        />
        <div class="form__error">
          @error('address')
          {{ $message }}
          @enderror
        </div>
       </div>
      </div>
     </div> 
      
    <div class="form__group">
     <div class="form__group-title">
      <span class="form__label--item">建物名</span>
     </div>

    <div class="form__group-detail">
     <div class="form__input--text">
      <input
        type="text"
        name="building"
        placeholder="千駄ヶ谷マンション101"
        value="{{ old('building') }}"
      />
    </div>
  </div>
</div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">お問い合わせ種類</span>
        <span class="form__label--required">必須</span>
         <div class="form__error">
            @error('category_id')
            {{ $message }}
            @enderror
         </div>
    </div>

    <div class="form__group-detail">
      <div class="form__input--select">

        <select name="category_id">

          <option value="">選択してください</option>

          <option value="1">商品のお届けについて</option>

          <option value="2">商品の交換について</option>

          <option value="3">商品トラブル</option>

          <option value="4">ショップへのお問い合わせ</option>

          <option value="5">その他</option>

        </select>

      </div>
    </div>
  </div>
  <div class="form__group">
   <div class="form__group-title">
    <span class="form__label--item">お問い合わせ内容</span>
　 </div>
      <div class="form__group-detail">
        <div class="form__input--textarea">
          <textarea name="detail" placeholder="資料をいただきたいです">{{ old('detail') }}</textarea>
           <div class="form__error">
             @error('detail')
             {{ $message }}
             @enderror
           </div>
        </div>
      </div>
    </div>
    <div class="form__button">
      <button class="form__button-submit" type="submit">送信</button>
    </div>
  </form>
</div>
@endsection