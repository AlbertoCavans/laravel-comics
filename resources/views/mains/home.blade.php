@extends('GenStructure.GenStructure')

@section('title', 'Home')

@section('main')
<div class="container-fluid container-main text-light">
    <div class="container py-5">
    <h1>Boolcomics Home</h1>
    <p class="introduction">
        Buongiorno, 
        Questa è la homepage del progetto Boolcomics / Laravel-comics. Il centro nevralgico dell'esercizio 
        è la pagina <a href="{{ route('comics') }}">comics</a> dove sono presenti tutti i link che reindirizzano
        alle rispettive pagine di ogni fumetto di cui è fornita la copertina nella pagina stessa.
        Ci è stato fornito lo screen di esempio della pagina <a href="{{ route('comics') }}">comics</a> e delle pagine riguardanti i singoli fumetti
        Non essendo stata fornita indicazione sulla home ho preso la libertà di usarla come pagina di arrivo e 
        spiegazione su dove andare a reperire il cuore dell'esercizio.
        <br>

        Per raggiungere la pagina comics oltre ai link nel testo introduttivo è anche possibile clickare il l'elemento "COMICS" 
        presente nel menù principale dell'header di questa pagina.
    </p>
    </div>
    
</div>
@endsection