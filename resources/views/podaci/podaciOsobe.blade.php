@extends('layouts.layout')


@section('mainD')
<div class="flex-center position-ref full-height">
    <div class="content">
        <p> Ime osobe je {{ $podaciOsobe->ime }} </p>
   
    <br>
    
        <a href="/licniPodaci" class="back"> Nazad </a>
    </div>
    <form action="/licniPodaci/{{ $podaciOsobe->id }}" method="POST">
        @csrf
        @method('DELETE')
        <button> Obrisi </button>
    </form>
</div>
@endsection