@extends('layouts.app')

@section('title', $annonce->title)

@section('content')
    <div class="row">
        <div class="col-md-22">

          <h1> {{ $annonce->title }} <small>#{{ $annonce->id }}</small> </h1>

          @include('partials.flash')

          <div class="ticket-info">
              <p><strong>Catégorie :</strong> {{ $categorie->name }}</p>
              <p><strong>Utilisateur : {{ $annonce->user->name }}</strong></p>
              <p><strong>Description :</strong> {{ $annonce->description }}</p>
              <p><strong>Contenu :</strong> {{ $annonce->content }}</p>
              <p>
              @if ($annonce->status === 'publish')
                  Status: <span class="label label-success">{{ $annonce->status }}</span>
              @else
                  Status: <span class="label label-danger">{{ $annonce->status }}</span>
              @endif
              </p>
              <p>Créé le: {{ $annonce->created_at->diffForHumans() }}</p>
          </div>

          <hr>

          <div class="comment-form">
              <form action="{{ url('comment') }}" method="POST" class="form">
                  {!! csrf_field() !!}

                  <input type="hidden" name="ticket_id" value="{{ $annonce->id }}">

                  <div class="form-group{{ $errors->has('comment') ? ' has-error' : '' }}">
                      <textarea rows="10" id="comment" class="form-control" name="comment"></textarea>

                      @if ($errors->has('comment'))
                          <span class="help-block">
                              <strong>{{ $errors->first('comment') }}</strong>
                          </span>
                      @endif
                  </div>

                  <div class="form-group">
                      <button type="submit" class="btn btn-primary">Envoyer</button>
                  </div>
              </form>
            </div>
          </div>
        </div>
@endsection
