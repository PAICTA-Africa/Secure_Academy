<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
            </div>
        </div>
        <div class="card">
    <div class="card-header">Active Students</div>
    <div class="card-body">
        <h1>{{ $activeUsers }}</h1>
    </div>
</div>
    </div>
</x-app-layout>
