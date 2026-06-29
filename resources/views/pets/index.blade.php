@extends('layouts.app')

@section('title', 'Listado de Mascotas')

@section('content')
    <section class="card">
        <div class="section-head">
            <div>
                <p class="section-kicker">Directorio</p>
                <h2 class="section-title">
                    <i class="fa-solid fa-paw"></i>
                    Directorio de Mascotas
                </h2>
            </div>

            <a href="{{ route('pets.create') }}" class="btn btn-success">
                <i class="fa-solid fa-plus"></i>
                Registrar Nueva Mascota
            </a>
        </div>

        @if(session('success'))
            <div class="alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="table-wrap">
            <table class="table-modern">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Especie</th>
                        <th>Edad</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($pets as $pet)
                        <tr>
                            <td>{{ $pet->id }}</td>
                            <td class="table-strong">{{ $pet->name }}</td>
                            <td>{{ $pet->species }}</td>
                            <td>{{ $pet->age }} años</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="table-empty">
                                No hay mascotas registradas todavía.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="pagination-wrap">
            {{ $pets->links() }}
        </div>
    </section>
@endsection
