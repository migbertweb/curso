<x-app-layout>
    <div class="container py-8">
        <h1 class="text-lg uppercase font-semibold text-gray-700">
            {{$categories->first()->name}}
        </h1>
        @livewire('category-products', ['category' => $categories->first()])
    </div>
</x-app-layout>
