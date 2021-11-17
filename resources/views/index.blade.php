@extends('layouts.default')

@section('content')
<form action="/" method="POST">
  <table>
    @csrf
    <tr>
      <th>
        氏名
      </th>
      <td>
        <input type="text" name="name">
      </td>
    </tr>
    <tr>
      <th>
        メールアドレス
      </th>
      <td>
        <input type="email" name="email">
      </td>
    </tr>
    <tr>
      <th>
        お問い合わせ内容
      </th>
      <td>
        <input type="text" name="text">
      </td>
    </tr>
    <tr>
      <th></th>
      <td>
        <button>送信</button>
      </td>
    </tr>
  </table>
</form>
@endsection