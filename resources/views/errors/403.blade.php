{{-- \resources\views\users\create.blade.php --}}
@extends('layouts.app')

@section('title', '| Non auth')

@section('content')

<div class='col-12'>

  <h1>Erreur 403</h1>
  <p>Vous n'êtes pas autorisé à accéder à l'administration, déso.</p>
  <pre>{{ $exception->getMessage() }}</pre>

</div>

@endsection
