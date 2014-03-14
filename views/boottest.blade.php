@extends('master')

@extends('layouts.master')
@section('navigation')
 @parent
 <li><a href='#'>追加ナビ</a></li>
@stop
@section('content')
<h2>ようこそ{{ $name }}さん</h2>
<h2>あなたは{{ $jusyo }}に住んでいます。</h2>
<p>helloフォルダ内のindex.blade.phpファイルです。</p>
<?php echo $footer?>
@stop
