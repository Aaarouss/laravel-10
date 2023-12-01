@extends('base')

@section('title', 'Accueil')

@section('content')
    <section>
        <h2 class="title">Menu</h2>
    @foreach ($categories as $categorie)
        <div>
            <h3>{{ $categorie }}</h3>
            <ul class="plats">
                @for ($i = 0; $i < 5; $i++)
                <li>
                    <img src="/Images/plat abdel.jpg" alt="plat de abdel">
                    <h4>Lorem ipsum dolor</h4>
                    <span class="prix">9,99$</span>
                </li>
                @endfor
            </ul>
        </div>
        @endforeach
    </section>
@endsection