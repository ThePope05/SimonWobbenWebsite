<x-message-layout>
    <x-slot name="title">
        No access
    </x-slot>
    <p>
        Please login to access this page.
    </p>
    <a href="{{ route('login') }}" class="text-blue-500 hover:text-blue-700">Login</a>
    <a href="{{ url()->previous() }}" class="text-blue-500 hover:text-blue-700">Go back</a>
</x-message-layout>