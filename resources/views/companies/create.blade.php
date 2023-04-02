@extends('layouts.app')

@section('content')

<div>
    <form method="post" action="{{ route('companies.store') }}">
        @csrf
        <div class="form-group">
            <label for="name">Company name:</label>
            <input type="text" name="name" class="form-control" />

            <button type="submit" class="btn btn-primary">Toevoegen</button>
        </div>
    </form>
</div>
@endsection