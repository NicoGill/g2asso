@extends('layouts.app')

@section('content')

@if (session('status'))
  <section>
    <div class="container">
      <div class="alert alert-success">
        {{ session('status') }}
      </div>
    </div>
  </section>
@endif

<section class="jumbotron text-center">
  <div class="container-fluid">
    <h1 class="jumbotron-heading">G2asso example</h1>
    <p class="lead text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus elit arcu, aliquam et ex eu, posuere feugiat magna.
      Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc euismod purus dui, nec tincidunt felis ultrices vitae.</p>
    <p>
      <a href="{{ route('annonce.create') }}" class="btn btn-primary my-2">Ajouter une annonce</a>
      <a href="{{ route('annonce.index') }}" class="btn btn-secondary my-2">Voir mes annonces</a>
    </p>
  </div>
</section>

<section>
  <div class="container">
      @if ($annonces->isEmpty())
          <p>Vous n'avez pas encore d'annonce.</p>
      @else
        <div class="row">
          @foreach ($annonces as $annonce)
            <div class="col-4">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">
                    {{ $annonce->title }}
                    @if ($annonce->status === 'publish')
                        <span class="badge badge-success">{{ $annonce->status }}</span>
                    @else
                        <span class="badge badge-danger">{{ $annonce->status }}</span>
                    @endif
                  </h5>

                  <p class="card-text">
                    @foreach ($categories as $categorie)
                      @if ($categorie->id === $annonce->categorie_id)
                        <span>{{ $categorie->name }}</span>
                      @endif
                    @endforeach
                  </p>

                  <p class="card-text">{{ $annonce->description }}</p>

                  <a href="{{ url('annonce/'. $annonce->slug) }}" title="Voir l'annonce {{ $annonce->title }}" class="btn btn-primary">En savoir plus</a>

                </div>
                <div class="card-footer text-muted">
                  <p class="card-text">{{ $annonce->updated_at }}</p>
                </div>
              </div>
            </div>
          @endforeach
        </div>

          {{ $annonces->render() }}
      @endif
    </div>
  </section>
@endsection
