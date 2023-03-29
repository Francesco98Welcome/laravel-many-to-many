@extends('layouts.admin')

@section('content')

<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <div class="col">
            <h1>
               Crea Progetto
            </h1>
        </div>
    </div>

    @include('partials.errors')

    <div class="row mb-4">
        <div class="col">
            <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">

                @csrf

                <div class="mb-3">
                    <label for="title" class="form-label">Titolo di un progetto*</label>
                    <input type="text" 
                           name="title"
                           class="form-control" 
                           id="title" 
                           maxlength="255"
                           required
                           placeholder="Inserisci titolo di un progetto.."
                           value={{ old('title') }}>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione progetto*</label>
                    <textarea class="form-control" 
                              name="description"
                              id="description" 
                              rows="10" 
                              maxlength="4096"
                              required
                              placeholder="Inserisci la descrizione di un progetto..">{{ old('description') }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="type_id">

                    </label>
                    <select name="type_id" id="type_id" class="form-select">
                        <option value="">Nessun tipo </option>
                        @foreach ($types as $type)
                            <option value="{{ $type->id }}" {{ old('type_id') == $type->id ? 'selected' : '' }}>{{ $type->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="img" class="form-label">Immagine in evidenza</label>
                    <input type="file" 
                           name="img"
                           class="form-control" 
                           id="img" 
                           accept="image/"
                           placeholder="Inserisci l'immagine in evidenza..">
                </div>

                <div>
                    <button type="submit" class="btn btn-success">
                        Add
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection