<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Hi.. <span class="bg-green-400 rounded-xl px-3 py-1 text-gray-700 font-bold">{{Auth::user()->name}}</span>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
           This is Home Page
        </div>
    </div>
</x-app-layout>
