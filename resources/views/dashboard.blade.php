<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div style="display: flex;justify-content: center;align-items: center;">
            <a href="{{route('token')}}" class="btn btn-primary">Make a Payment</a>
        </div>
    </div>
</x-app-layout>
