@extends('layouts.login')

@section('content')
<h2>機能を実装していきましょう。</h2>
 <table class='table table-hover'>
            <tr>
                <th>投稿No</th>
                <th>投稿内容</th>
                <th>投稿日時</th>
            </tr>
            @foreach ($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->posts }}</td>
                <td>{{ $post->created_at }}</td>
            </tr>
            @endforeach
        </table>
@endsection
