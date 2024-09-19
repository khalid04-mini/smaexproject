@extends('layouts.app')

@section('content')

<div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">

    <form action="{{ route('police.update', ['id' => $police->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="space-y-12">
          <div class="border-b border-gray-900/10 pb-12">
            <h2 class="text-xl font-semibold leading-7 text-gray-900 mt-8">Éditer Police</h2>

            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-4">
                    <label for="client-num" class="block text-sm font-medium leading-6 text-gray-900">Numéro du client</label>
                    <div class="mt-2">
                      <input type="text" name="client-num" id="client-num" value="{{ old('client-num', $police->client_num) }}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Enter client Num">
                    </div>
                </div>
                <div class="sm:col-span-4">
                  <label for="police-number" class="block text-sm font-medium leading-6 text-gray-900">Numéro de police</label>
                  <div class="mt-2">
                    <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                      <input type="text" name="police-number" id="police-number" value="{{ old('police-number', $police->police_number) }}" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Enter police number">
                    </div>
                  </div>
                </div>

                <div class="sm:col-span-4">
                  <label for="raison-sociale" class="block text-sm font-medium leading-6 text-gray-900">Raison Sociale</label>
                  <div class="mt-2">
                    <input type="text" name="raison-sociale" id="raison-sociale" value="{{ old('raison-sociale', $police->raison_sociale) }}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Enter client name">
                  </div>
                </div>
                <div class="sm:col-span-4">
                  <label for="addresse" class="block text-sm font-medium leading-6 text-gray-900">Addresse</label>
                  <div class="mt-2">
                    <input type="text" name="addresse" id="addresse" value="{{ old('addresse', $police->addresse) }}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Enter addresse">
                  </div>
                </div>

                <!-- Telephone 1 -->
                <div class="sm:col-span-4">
                  <label for="telephone1" class="block text-sm font-medium leading-6 text-gray-900">Téléphone 1</label>
                  <div class="mt-2">
                    <input type="tel" name="telephone1" id="telephone1" value="{{ old('telephone1', $police->telephone1) }}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Enter téléphone 1">
                  </div>
                </div>

                <!-- Telephone 2 -->
                <div class="sm:col-span-4">
                  <label for="telephone2" class="block text-sm font-medium leading-6 text-gray-900">Téléphone 2</label>
                  <div class="mt-2">
                    <input type="tel" name="telephone2" id="telephone2" value="{{ old('telephone2', $police->telephone2) }}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Enter téléphone 2">
                  </div>
                </div>

                <!-- Fax -->
                <div class="sm:col-span-4">
                  <label for="fax" class="block text-sm font-medium leading-6 text-gray-900">Fax</label>
                  <div class="mt-2">
                    <input type="text" name="fax" id="fax" value="{{ old('fax', $police->fax) }}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Enter fax">
                  </div>
                </div>

                <!-- Telex -->
                <div class="sm:col-span-4">
                  <label for="telex" class="block text-sm font-medium leading-6 text-gray-900">Telex</label>
                  <div class="mt-2">
                    <input type="text" name="telex" id="telex" value="{{ old('telex', $police->telex) }}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Enter telex">
                  </div>
                </div>

                <!-- Code Activité -->
                <div class="sm:col-span-4">
                  <label for="code_activite" class="block text-sm font-medium leading-6 text-gray-900">Code Activité</label>
                  <div class="mt-2">
                    <input type="text" name="code_activite" id="code_activite" value="{{ old('code_activite', $police->code_activite) }}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Enter code activité">
                  </div>
                </div>

                <!-- Dirigeant -->
                <div class="sm:col-span-4">
                  <label for="dirigeant" class="block text-sm font-medium leading-6 text-gray-900">Dirigeant</label>
                  <div class="mt-2">
                    <input type="text" name="dirigeant" id="dirigeant" value="{{ old('dirigeant', $police->dirigeant) }}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Enter dirigeant">
                  </div>
                </div>

                <!-- Fonction -->
                <div class="sm:col-span-4">
                  <label for="fonction" class="block text-sm font-medium leading-6 text-gray-900">Fonction</label>
                  <div class="mt-2">
                    <input type="text" name="fonction" id="fonction" value="{{ old('fonction', $police->fonction) }}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Enter fonction">
                  </div>
                </div>

                <!-- Code Postal -->
                <div class="sm:col-span-4">
                  <label for="code_postal" class="block text-sm font-medium leading-6 text-gray-900">Code Postal</label>
                  <div class="mt-2">
                    <input type="text" name="code_postal" id="code_postal" value="{{ old('code_postal', $police->code_postal) }}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Enter code postal">
                  </div>
                </div>

                <!-- Pays -->
                <div class="sm:col-span-4">
                  <label for="pays" class="block text-sm font-medium leading-6 text-gray-900">Pays</label>
                  <div class="mt-2">
                    <input type="text" name="pays" id="pays" value="{{ old('pays', $police->pays) }}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Enter pays">
                  </div>
                </div>
            </div>
          </div>

          <div class="flex items-center gap-x-6">
            <button type="submit" class="inline-block rounded-md px-3.5 py-1.5 text-sm font-semibold ring-1 ring-gray-900/10 hover:ring-gray-900/20">Enregistrer</button>
          </div>
        </div>
    </form>
</div>

@endsection
