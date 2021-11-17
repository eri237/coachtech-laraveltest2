@extends('layouts.default')

@section('content')
<form method="POST" action="{{ route('contact.send') }}">
  <table>  
    @csrf
    <tr>
      <th>
        氏名
      </th>
      <td>
        {{ $inputs['name'] }}
      </td>
    </tr>
    <tr>
      <th>
        メールアドレス
      </th>
      <td>
        {{ $form['email'] }}
      </td>
    </tr>
    <tr>
      <th>
        お問い合わせ内容
      </th>
      <td>
        {{ $inputs['text'] }}
      </td>
    </tr>
    <tr>
      <th></th>
      <td>
        <button type="submit" name="action" value="back">
        入力内容修正
        </button>
        <button type="submit" name="action" value="submit">
        送信する
        </button>
      </td>
    </tr>
  </table>
</form>
@endsection