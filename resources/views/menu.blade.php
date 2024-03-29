@extends('base')

@section('title', 'Accueil')

@section('content')
    <section>
        <h2 class="title">Menu</h2>
    @foreach ($categories as $categorie)
        <div>
            <h3>{{ $categorie->nom }}</h3>
            <ul class="plats">
                @foreach ($categorie->plats() as $plat)
                <li>
                    <img src="{{asset('images/'.
                    $plat->fichier)}}" alt="{{
                    $plat->nom}}" />
                    <h4>{{ $plat->nom }}</h4>
                    <span class="prix">{{$plat->prix}}
                    eur</span>
                </li>
                @endforeach
            </ul>
        </div>
        @endforeach
    </section>
@endsection