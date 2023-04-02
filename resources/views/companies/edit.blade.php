@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Company aanpassen</h1>
        <form method="post" action="{{ route('companies.update', $company->id) }}">
            @method('PATCH')
            @csrf
            <div class="form-group">
                <label for="name">Company:</label>
                <input type="text" class="form-control" name="name" value="{{ $company->name }}" />
                <button type="submit" class="btn btn-primary">Aanpassen</button>
            </div>
        </form>
    </div>
</div>

@endsection