@extends('layouts.app')

@section('title', 'Open Ticket')

@section('content')
    <div class="row">
        <div class="col-md-12">

            <h1>Ajouter une annonce</h1>

                @include('partials.flash')

                @include('errors.list')

                <form class="form-horizontal" role="form" method="POST" action="{{ url('annonce') }}">
                    {!! csrf_field() !!}

                    <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                        <label for="title" class="col-md-4 control-label">Titre</label>

                        <div class="col-md-6">
                            <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}">

                            @if ($errors->has('title'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('categorie') ? ' has-error' : '' }}">
                        <label for="categorie" class="col-md-4 control-label">Catégorie</label>

                        <div class="col-md-6">
                            <select id="categorie" type="categorie" class="form-control" name="categorie">
                                <option value="">Séléctionner une catégorie</option>
                                @foreach ($categories as $categorie)
                                  <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
                                @endforeach
                            </select>

                            @if ($errors->has('categorie'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('categorie') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                        <label for="description" class="col-md-4 control-label">Contenu</label>

                        <div class="col-md-6">
                            <textarea id="description" type="" class="form-control" name="description">{{ old('description') }}</textarea>

                            @if ($errors->has('description'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('description') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
                        <label for="content" class="col-md-4 control-label">Message</label>

                        <div class="col-md-6">
                            <textarea rows="10" id="content" class="form-control" name="content">{{ old('content') }}</textarea>

                            @if ($errors->has('content'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('content') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-btn fa-ticket"></i> Lancer l'annonce
                            </button>
                        </div>
                    </div>
                </form>
        </div>
    </div>
@endsection
