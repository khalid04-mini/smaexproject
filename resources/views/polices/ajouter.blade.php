@extends('layouts.app')


@section('content')


<div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">

    <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="space-y-12">
          <div class="border-b border-gray-900/10 pb-12">
            <h2 class="text-xl font-semibold leading-7 text-gray-900 mt-8">Ajouter Nouvelle Police</h2>

            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-4">
                    <label for="client-num" class="block text-sm font-medium leading-6 text-gray-900">Numéro du client</label>
                    <div class="mt-2">
                      <input type="text" name="client-num" id="client-num" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Enter client Num">
                    </div>
                </div>
              <div class="sm:col-span-4">
                <label for="police-number" class="block text-sm font-medium leading-6 text-gray-900">Numéro de police</label>
                <div class="mt-2">
                  <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                    <input type="text" name="police-number" id="police-number" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Enter police number">
                  </div>
                </div>
              </div>

              <div class="sm:col-span-4">
                <label for="raison-sociale" class="block text-sm font-medium leading-6 text-gray-900">Raison Sociale</label>
                <div class="mt-2">
                  <input type="text" name="raison-sociale" id="raison-sociale" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Enter client name">
                </div>
              </div>
              <div class="sm:col-span-4">
                <label for="addresse" class="block text-sm font-medium leading-6 text-gray-900">Addresse</label>
                <div class="mt-2">
                  <input type="text" name="addresse" id="addresse" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Enter addresse">
                </div>
              </div>

              <!-- Telephone 1 -->
              <div class="sm:col-span-4">
                <label for="telephone1" class="block text-sm font-medium leading-6 text-gray-900">Téléphone 1</label>
                <div class="mt-2">
                  <input type="tel" name="telephone1" id="telephone1" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Enter téléphone 1">
                </div>
              </div>

              <!-- Telephone 2 -->
              <div class="sm:col-span-4">
                <label for="telephone2" class="block text-sm font-medium leading-6 text-gray-900">Téléphone 2</label>
                <div class="mt-2">
                  <input type="tel" name="telephone2" id="telephone2" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Enter téléphone 2">
                </div>
              </div>

              <!-- Fax -->
              <div class="sm:col-span-4">
                <label for="fax" class="block text-sm font-medium leading-6 text-gray-900">Fax</label>
                <div class="mt-2">
                  <input type="text" name="fax" id="fax" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Enter fax">
                </div>
              </div>

              <!-- Telex -->
              <div class="sm:col-span-4">
                <label for="telex" class="block text-sm font-medium leading-6 text-gray-900">Telex</label>
                <div class="mt-2">
                  <input type="text" name="telex" id="telex" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Enter telex">
                </div>
              </div>

              <!-- Code Activité -->
              <div class="sm:col-span-4">
                <label for="code_activite" class="block text-sm font-medium leading-6 text-gray-900">Code Activité</label>
                <div class="mt-2">
                  <input type="text" name="code_activite" id="code_activite" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Enter code activité">
                </div>
              </div>

              <!-- Dirigeant -->
              <div class="sm:col-span-4">
                <label for="dirigeant" class="block text-sm font-medium leading-6 text-gray-900">Dirigeant</label>
                <div class="mt-2">
                  <input type="text" name="dirigeant" id="dirigeant" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Enter dirigeant">
                </div>
              </div>

              <!-- Fonction -->
              <div class="sm:col-span-4">
                <label for="fonction" class="block text-sm font-medium leading-6 text-gray-900">Fonction</label>
                <div class="mt-2">
                  <input type="text" name="fonction" id="fonction" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Enter fonction">
                </div>
              </div>

              <div class="sm:col-span-4">
                <label for="statut" class="block text-sm font-medium leading-6 text-gray-900">Statut</label>
                <div class="mt-2">
                  <input type="text" name="statut" id="statut" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Enter statut">
                </div>
              </div>

              <div class="sm:col-span-4">
                <label for="date-souscription" class="block text-sm font-medium leading-6 text-gray-900">Date de souscription</label>
                <div class="mt-2">
                  <input type="date" name="date-souscription" id="date-souscription" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
              </div>

              <div class="sm:col-span-4">
                <label for="date-fin" class="block text-sm font-medium leading-6 text-gray-900">Date de fin</label>
                <div class="mt-2">
                  <input type="date" name="date-fin" id="date-fin" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
              </div>
              <div class="col-span-full">
                <label for="file-upload" class="block text-sm font-medium leading-6 text-gray-900">File</label>
                <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                  <div class="text-center">
                    <!-- Updated SVG Icon -->
                    <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                      <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd"/>
                    </svg>

                    <!-- File Upload -->
                    <div class="mt-4 flex text-sm leading-6 text-gray-600">
                      <label for="file-upload" class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                        <span>Upload a file</span>
                        <input id="file-upload" name="file-upload" type="file" class="sr-only">
                      </label>
                      <p class="pl-1">or drag and drop</p>
                    </div>
                    <p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF up to 10MB</p>
                  </div>
                </div>
              </div>


            </div>
            <div class="mt-6 flex items-center justify-end">
                <button type="submit" class="h-12 rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                  Ajouter Police
                </button>
              </div>
          </div>
        </div>
    </form>

</div>

@endsection
