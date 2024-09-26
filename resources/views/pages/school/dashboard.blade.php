<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-5">
        <div class="ms-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="bg-primary p-6 text-white">
                    <h2 class="text-center text-3xl">Selamat Datang Di sistem ARUNIKA</h2>
                    <p class="text-center">Sistem Asesmen untuk Anak Berkebutuhan Khusus Bonbol</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
@push('scripts')
@endpush
