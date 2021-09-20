<x-app-layout>
    <div class="container py-8">
        <h1 class="text-lg uppercase font-semibold text-gray-700">
            {{$categories->first()->name}}
        </h1>
        @livewire('category-products', ['category' => $categories->first()])
    </div>
    @push('script')
         <script>
        livewire.on('glider',function () {
        new Glider(document.querySelector('.glider'), {
            slidesToShow: 5.5,
            slidesToScroll: 5,
            draggable: true,
            dots: '.dots',
            arrows: {
                prev: '.glider-prev',
                next: '.glider-next'
            }
        });
        })
    </script>
    @endpush
</x-app-layout>
