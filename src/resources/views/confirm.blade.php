<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>確認画面</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
</head>
<body>
    @extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('content')
<div class="confirm__content">
    <div class="confirm__heading">
        <h2>Confirm</h2>
    </div>

    <form action="/contacts" method="post">
        @csrf
        <table class="confirm-table">
            <tr>
                <th>お名前</th>
                <td>
                    {{ $contact['name'] }}
                    <input type="hidden" name="name" value="{{ $contact['name'] }}">
                </td>
            </tr>
            <tr>
                <th>メールアドレス</th>
                <td>
                    {{ $contact['email'] }}
                    <input type="hidden" name="email" value="{{ $contact['email'] }}">
                </td>
            </tr>
            <tr>
                <th>電話番号</th>
                <td>
                    {{ $contact['tel'] }}
                    <input type="hidden" name="tel" value="{{ $contact['tel'] }}">
                </td>
            </tr>
            <tr>
                <th>お問い合わせ内容</th>
                <td>
                    {{ $contact['content'] }}
                    <input type="hidden" name="content" value="{{ $contact['content'] }}">
                </td>
            </tr>
        </table>

        <div class="confirm__button">
            <button type="submit">送信</button>
        </div>
    </form>
</div>
@endsection
</body>
</html>