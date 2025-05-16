<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Janjiin Home Page') }}
        </h2>
    </x-slot>

    @foreach ($events as $event)
    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ $event->name }}
                </div>
            </div>
        </div>
    </div>
    @endforeach

</x-app-layout>
