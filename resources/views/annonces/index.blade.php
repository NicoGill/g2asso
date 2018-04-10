@extends('layouts.app')

@section('title', 'My Tickets')

@section('content')
  <div class="row">
      <div class="col-md-12">

          <h1>Vos annonces</h1>

          @if ($annonces->isEmpty())
              <p>Vous n'avez pas encore d'annonce.</p>
          @else
              <table class="table">
                  <thead>
                      <tr>
                          <th>Catégorie</th>
                          <th>Titre</th>
                          <th>Description</th>
                          <th>Dernière modification</th>
                      </tr>
                  </thead>
                  <tbody>
                  @foreach ($annonces as $annonce)
                      <tr>
                          <td>
                          @foreach ($categories as $categorie)
                              @if ($categorie->id === $annonce->categorie_id)
                                  {{ $categorie->name }}
                              @endif
                          @endforeach
                          </td>
                          <td>
                              <a href="{{ url('annonce/'. $annonce->slug) }}">
                                  #{{ $annonce->id }} - {{ $annonce->title }}
                              </a>
                          </td>
                          <td>
                          @if ($annonce->status === 'publish')
                              <span class="label label-success">{{ $annonce->status }}</span>
                          @else
                              <span class="label label-danger">{{ $annonce->status }}</span>
                          @endif
                          </td>
                          <td>{{ $annonce->updated_at }}</td>
                      </tr>
                  @endforeach
                  </tbody>
              </table>

              {{ $annonces->render() }}
          @endif

        </div>
    </div>
@endsection
