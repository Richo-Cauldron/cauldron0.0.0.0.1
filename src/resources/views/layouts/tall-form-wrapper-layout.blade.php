<div>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ $formTitle ?? null }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="p-12 overflow-hidden bg-white shadow-xl sm:rounded-lg">
                @include('tall-forms::form')
            </div>
        </div>
    </div>
</div>