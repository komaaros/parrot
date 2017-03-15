@extends('layouts.master')
@section('content')
<h1>Lists</h1>
@if($lists->count() > 0)
<ul>
    @foreach($lists as $list)
    <li><a href="{{ $_SERVER['REQUEST_URI']. "/" .$list->id }}">{{ $list->name }}</a></li>
    @endforeach
</ul>
{!! $lists->render() !!}

@else
<p>There are no records</p>
@endif
@endsection
