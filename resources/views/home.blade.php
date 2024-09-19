@extends('layouts.app')




@section('content')

<div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
    <h1 class="text-center text-5xl my-8">DECISION DU COMITE</h1>
    <ul role="list" class="divide-y divide-gray-600 ">
        <li class="flex justify-between gap-x-6 ">
          <a href={{route('ajouter')}} class="flex items-center justify-between w-full hover:bg-slate-200 py-2">
            <div class="flex min-w-0 gap-x-4 ">
                <p class="text-xl ">Menu nouvelle police</p>
              </div>
              <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                <svg viewBox="0 0 1024 1024" class="icon h-10 w-10" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M256 120.768L306.432 64 768 512l-461.568 448L256 903.232 659.072 512z" fill="#000000"></path></g></svg>
              </div>
          </a>
        </li>
        <li class="flex justify-between gap-x-6 ">
            <a href="#" class="flex items-center justify-between w-full hover:bg-slate-200 py-2">
              <div class="flex min-w-0 gap-x-4 ">
                <p class="text-xl ">Maintenance Fichier Option</p>
                </div>
                <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                  <svg viewBox="0 0 1024 1024" class="icon h-10 w-10" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M256 120.768L306.432 64 768 512l-461.568 448L256 903.232 659.072 512z" fill="#000000"></path></g></svg>
                </div>
            </a>
        </li>
        <li class="flex justify-between gap-x-6 ">
            <a href="#" class="flex items-center justify-between w-full hover:bg-slate-200 py-2">
              <div class="flex min-w-0 gap-x-4 ">
                <p class="text-xl ">Edition des Fichies d'Option</p>
                </div>
                <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                  <svg viewBox="0 0 1024 1024" class="icon h-10 w-10" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M256 120.768L306.432 64 768 512l-461.568 448L256 903.232 659.072 512z" fill="#000000"></path></g></svg>
                </div>
            </a>
        </li>
        <li class="flex justify-between gap-x-6 ">
            <a href="#" class="flex items-center justify-between w-full hover:bg-slate-200 py-2">
              <div class="flex min-w-0 gap-x-4 ">
                <p class="text-xl ">Edition Annulation / Suspension</p>
                </div>
                <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                  <svg viewBox="0 0 1024 1024" class="icon h-10 w-10" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M256 120.768L306.432 64 768 512l-461.568 448L256 903.232 659.072 512z" fill="#000000"></path></g></svg>
                </div>
            </a>
        </li>
        <li class="flex justify-between gap-x-6 ">
            <a href="#" class="flex items-center justify-between w-full hover:bg-slate-200 py-2">
              <div class="flex min-w-0 gap-x-4 ">
                <p class="text-xl ">Edition des Suppressions</p>
                </div>
                <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                  <svg viewBox="0 0 1024 1024" class="icon h-10 w-10" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M256 120.768L306.432 64 768 512l-461.568 448L256 903.232 659.072 512z" fill="#000000"></path></g></svg>
                </div>
            </a>
        </li>
        <li class="flex justify-between gap-x-6 ">
            <a href="#" class="flex items-center justify-between w-full hover:bg-slate-200 py-2">
              <div class="flex min-w-0 gap-x-4 ">
                <p class="text-xl ">Edition des Validités</p>
                </div>
                <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                  <svg viewBox="0 0 1024 1024" class="icon h-10 w-10" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M256 120.768L306.432 64 768 512l-461.568 448L256 903.232 659.072 512z" fill="#000000"></path></g></svg>
                </div>
            </a>
        </li>
        <li class="flex justify-between gap-x-6 ">
            <a href="#" class="flex items-center justify-between w-full hover:bg-slate-200 py-2">
              <div class="flex min-w-0 gap-x-4 ">
                <p class="text-xl ">Annulation/Suspension</p>
                </div>
                <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                  <svg viewBox="0 0 1024 1024" class="icon h-10 w-10" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M256 120.768L306.432 64 768 512l-461.568 448L256 903.232 659.072 512z" fill="#000000"></path></g></svg>
                </div>
            </a>
        </li>
        <li class="flex justify-between gap-x-6 ">
            <a href="#" class="flex items-center justify-between w-full hover:bg-slate-200 py-2">
              <div class="flex min-w-0 gap-x-4 ">
                <p class="text-xl ">Annulation/Suspension (Except.)</p>
                </div>
                <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                  <svg viewBox="0 0 1024 1024" class="icon h-10 w-10" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M256 120.768L306.432 64 768 512l-461.568 448L256 903.232 659.072 512z" fill="#000000"></path></g></svg>
                </div>
            </a>
        </li>
        <li class="flex justify-between gap-x-6 ">
            <a href="#" class="flex items-center justify-between w-full hover:bg-slate-200 py-2">
              <div class="flex min-w-0 gap-x-4 ">
                <p class="text-xl ">Réduction d'Option</p>
                </div>
                <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                  <svg viewBox="0 0 1024 1024" class="icon h-10 w-10" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M256 120.768L306.432 64 768 512l-461.568 448L256 903.232 659.072 512z" fill="#000000"></path></g></svg>
                </div>
            </a>
        </li>
      </ul>
</div>


@endsection
