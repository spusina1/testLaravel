@extends('layouts.layout')


@section('mainD')
<div class="flex-center position-ref full-height">
    <div class="content">
        <form action="/licniPodaci/spasiPodatke" method="POST">
        @csrf
        <label for="ime"> Tvoje ime: </label>
        <input type=text id="ime" name="ime">
        <br>
        <label for="prezime"> Tvoje prezime: </label>
        <input type=text id="prezime" name="prezime">
        <br>
        <label for="godine"> Tvoje godine: </label>
        <input type=text id="godine" name="godine">
        <br>
        <input type=submit value="Sacuvaj podatke">
        </form>
    </div>
</div>
@endsection