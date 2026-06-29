@extends('layouts.app')

@section('title', 'Nueva Mascota')

@section('content')
    <section class="card form-card">
        <div class="section-head section-head--stacked">
            <div>
                <p class="section-kicker">Formulario</p>
                <h2 class="section-title">
                    <i class="fa-solid fa-plus"></i>
                    Registrar Nueva Mascota
                </h2>
            </div>
        </div>

        <form action="{{ route('pets.store') }}" method="POST" class="form-stack">
            @csrf

            <div class="form-field">
                <label for="name">Nombre</label>
                <input id="name" type="text" name="name" value="{{ old('name') }}" required>
                @error('name')
                    <small class="form-error">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-field">
                <label for="species">Especie</label>
                <input id="species" type="text" name="species" value="{{ old('species') }}" required>
                @error('species')
                    <small class="form-error">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-field">
                <label for="age">Edad</label>
                <input id="age" type="number" name="age" min="0" value="{{ old('age') }}" required>
                @error('age')
                    <small class="form-error">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-actions">
                <button type="submit" class="btn btn-success">
                    <i class="fa-solid fa-floppy-disk"></i>
                    Guardar Mascota
                </button>

                <a href="{{ route('pets.index') }}" class="btn btn-secondary">
                    Volver a la lista
                </a>
            </div>
        </form>
    </section>
@endsection
