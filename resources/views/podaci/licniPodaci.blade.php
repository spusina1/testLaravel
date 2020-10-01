@extends('layouts.layout')


@section('mainD')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div>
            <img src="images/maxresdefault.jpg">
        </div> 
        <div class="title m-b-md">
            Licni podaci
        </div>
             
        @foreach($lista as $item)
        <div> {{$loop -> index}} {{$item->ime}} - {{$item->prezime}}
        @if($loop->first)
        <span> - prvi u petlji </span>
        @endif
        </div>
        @endforeach
    </div>
   
</div>
@endsection
