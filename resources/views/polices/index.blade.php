@extends('layouts.app')


@section('content')
<div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
    <h1 class="text-3xl font-bold mb-6 text-center">Liste des Polices</h1>
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="py-3 px-4 text-left">ID</th>
                    <th class="py-3 px-4 text-left">Client Number</th>
                    <th class="py-3 px-4 text-left">Police Number</th>
                    <th class="py-3 px-4 text-left">Raison Sociale</th>
                    <th class="py-3 px-4 text-left">Address</th>
                    <th class="py-3 px-4 text-left">Telephone 1</th>
                    <th class="py-3 px-4 text-left">Telephone 2</th>
                    <th class="py-3 px-4 text-left">Fax</th>
                    <th class="py-3 px-4 text-left">Telex</th>
                    <th class="py-3 px-4 text-left">Code Activité</th>
                    <th class="py-3 px-4 text-left">Dirigeant</th>
                    <th class="py-3 px-4 text-left">Fonction</th>
                    <th class="py-3 px-4 text-left">Statut</th>
                    <th class="py-3 px-4 text-left">Date de Souscription</th>
                    <th class="py-3 px-4 text-left">Date de Fin</th>
                    <th class="py-3 px-4 text-left">Actions</th> <!-- New column for actions -->
                </tr>
            </thead>
            <tbody>
                @foreach($polices as $police)
                    <tr class="border-b border-gray-200">
                        <td class="py-3 px-4">{{ $police->id }}</td>
                        <td class="py-3 px-4">{{ $police->client_num }}</td>
                        <td class="py-3 px-4">{{ $police->police_number }}</td>
                        <td class="py-3 px-4">{{ $police->raison_sociale }}</td>
                        <td class="py-3 px-4">{{ $police->addresse }}</td>
                        <td class="py-3 px-4">{{ $police->telephone1 }}</td>
                        <td class="py-3 px-4">{{ $police->telephone2 }}</td>
                        <td class="py-3 px-4">{{ $police->fax }}</td>
                        <td class="py-3 px-4">{{ $police->telex }}</td>
                        <td class="py-3 px-4">{{ $police->code_activite }}</td>
                        <td class="py-3 px-4">{{ $police->dirigeant }}</td>
                        <td class="py-3 px-4">{{ $police->fonction }}</td>
                        <td class="py-3 px-4">{{ $police->statut }}</td>
                        <td class="py-3 px-4">{{ $police->date_souscription }}</td>
                        <td class="py-3 px-4">{{ $police->date_fin }}</td>
                        <td class="py-3 px-4">
                            <!-- Modifier Button -->
                            <a href="{{ route('police.edit', $police->id) }}" class="inline-block bg-blue-500 text-white px-4 py-2 rounded-lg shadow-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                                Modifier
                            </a>
                            <!-- Supprimer Button -->
                            <form action="{{ route('police.destroy', $police->id) }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-lg shadow-md hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50">
                                    Supprimer
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>



@endsection
