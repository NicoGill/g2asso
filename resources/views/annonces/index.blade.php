@extends('layouts.app')

@section('title', 'My Tickets')

@section('content')

  <h1>Vos annonces</h1>

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

@endsection
