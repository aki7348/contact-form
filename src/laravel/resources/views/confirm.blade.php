@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('content')

<div class="confirm__content">
  <div class="confirm__heading">
    <h2>お問い合わせ内容確認</h2>
  </div>
  
  <form class="form" action="/thanks" method="post">
    @csrf
    <div class="confirm-table">
      <table class="confirm-table__inner">
        <tr class="confirm-table__row">
          <th class="confirm-table__header">お名前</th>
          <td class="confirm-table__text">
            <input
              type="text"
              name="name"
              value="{{ $contact['last_name'] }} {{ $contact['first_name'] }}"
              readonly
            >  
            <input type="hidden" name="last_name" value="{{ $contact['last_name'] }}">
            <input type="hidden" name="first_name" value="{{ $contact['first_name'] }}">  
          </td>
        </tr>
        <tr class="confirm-table__row">
          <th class="confirm-table__header">性別</th>
           <td class="confirm-table__text">
            <input
              type="text"
              name="gender"
              value="
              @if($contact['gender'] == 1)
                男性
              @elseif($contact['gender'] == 2)
                女性
              @else
                その他
              @endif
              "
              readonly
            >
            <input type="hidden" name="gender" value="{{ $contact['gender'] }}">
          </td>
        </tr> 
        <tr class="confirm-table__row">
          <th class="confirm-table__header">メールアドレス</th>
          <td class="confirm-table__text">
            <input 
              type="text"
              name="email"
              value="{{ $contact['email'] }}"
              readonly
            > 
            <input type="hidden" name="email" value="{{ $contact['email'] }}">
          </td>
        </tr>
         
        <tr class="confirm-table__row">
          <th class="confirm-table__header">電話番号</th>
          <td class="confirm-table__text">
            <input
              type="text"
              name="tel"
              value="{{ $contact['tel1'] }}-{{ $contact['tel2'] }}-{{ $contact['tel3'] }}"
              readonly
            >
            <input type="hidden" name="tel1" value="{{ $contact['tel1'] }}">
            <input type="hidden" name="tel2" value="{{ $contact['tel2'] }}">
            <input type="hidden" name="tel3" value="{{ $contact['tel3'] }}">
          </td>
        </tr>
        <tr class="confirm-table__row">
          <th class="confirm-table__header">住所</th>
          <td class="confirm-table__text">
            <input
              type="text"
              name="address"
              value="{{ $contact['address'] }}"
              readonly
            >
　　　　　　 <input type="hidden" name="address" value="{{ $contact['address'] }}">
        <tr class="confirm-table__row">
          <th class="confirm-table__header">建物名</th>
          <td class="confirm-table__text">
          　<input
  　　　　　　 type="text"
              name="building"
              value="{{ $contact['building'] }}"
              readonly
            >
            <input type="hidden" name="building" value="{{ $contact['building'] }}">
        <tr class="confirm-table__row">
          <th class="confirm-table__header">お問い合わせ種類</th>
          <td class="confirm-table__text">
　　　　　　 <input
              type="text"
              name="category"
              value="@if($contact['category_id'] == 1)商品のお届けについて  
              @elseif($contact['category_id'] == 2)商品の交換について
              @elseif($contact['category_id'] == 3)商品トラブル
              @elseif($contact['category_id'] == 4)ショップへのお問い合わせ
              @elseその他
              @endif"
              readonly
            >
            <input
              type="hidden"
              name="category_id"
              value="{{ $contact['category_id'] }}"
            >
          </td>
        </tr>
        <tr class="confirm-table__row">
          <th class="confirm-table__header">お問い合わせ内容</th>
          <td class="confirm-table__text">
            <input type="text" name="detail" value="{{ $contact['detail'] }}" readonly />
            <input type="hidden" name="detail" value="{{ $contact['detail'] }}">
          </td>
        </tr>
      </table>
    </div>
    <div class="form__button">
      <button class="form__button-submit" type="submit">送信</button>
    </div> 
      
    </form>
    
    <button
        class="form__button-correct"
        type="button"
        onclick="location.href='/'"
      >
        修正
      </button>
    </div>

    @endsection
