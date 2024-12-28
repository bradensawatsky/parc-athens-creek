<x-layout>
    @include('components.hero.default')
    
    <section x-data="{
        galleryOpen: false, 
        galleryImages: [
            '{{ asset('/storage/images/hero.png') }}',
            '{{ asset('/storage/images/cherrylane.webp') }}',
            '{{ asset('/storage/images/hero-2.avif') }}',
            '{{ asset('/storage/images/hero.png') }}',
            '{{ asset('/storage/images/cherrylane.webp') }}',
            '{{ asset('/storage/images/hero-2.avif') }}',
            '{{ asset('/storage/images/hero.png') }}',
            '{{ asset('/storage/images/cherrylane.webp') }}',
            '{{ asset('/storage/images/hero-2.avif') }}'
        ],
        currentIndex: 0,
        nextSlide() {
            this.currentIndex = (this.currentIndex + 1) % this.galleryImages.length;
        },
        prevSlide() {
            this.currentIndex = (this.currentIndex - 1 + this.galleryImages.length) % this.galleryImages.length;
        }
        }" 
        class="flex flex-col items-center w-full pt-20">
        <h2>Explore life at Athen's Creek</h2>
        <p class="text-large font-semibold mb-12">This will be a cool tagline</p>
        <div class="bg-secondary px-4 lg:px-12 py-12 lg:py-24 w-full">
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-3 lg:gap-3 max-w-screen-2xl m-auto">
                <template x-for="(image, index) in galleryImages" :key="index">
                    <img 
                        class="object-cover duration-300 hover:scale-105 cursor-pointer h-60 w-full" 
                        :src="image" 
                        alt="" 
                        x-on:click="currentIndex = index; galleryOpen = true">
                </template>
            </div>
        </div>
        <div x-show="galleryOpen"
            class="fixed z-50 top-0 left-0 bg-dark/80 w-full h-full py-8 lg:p-32"
        >
            <div class="relative m-auto w-full lg:w-[900px]">
            <button 
                class="absolute z-60 bg-primary duration-200 text-white p-2 right-0 top-0 hover:bg-secondary" 
                x-on:click="galleryOpen = false">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFF">
                    <path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/>
                </svg>
            </button>
            <button 
                class="absolute z-60 bg-primary top-[calc(50%-2rem)] lg:top-[calc(50%-3rem)] left-0 lg:-left-6 w-min duration-200 text-white px-1 lg:px-2 py-8 lg:py-12 h-16  hover:bg-secondary flex items-center justify-center"
                x-on:click="prevSlide()">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFF"><path d="M640-80 240-480l400-400 71 71-329 329 329 329-71 71Z"/></svg>            <button 
                class="absolute z-60 bg-primary top-[calc(50%-2rem)] lg:top-[calc(50%-3rem)] right-0 lg:-right-6 w-min duration-200 text-white px-1 lg:px-2 py-8 lg:py-12 h-16 hover:bg-secondary flex items-center justify-center"
                x-on:click="nextSlide()">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFF"><path d="m321-80-71-71 329-329-329-329 71-71 400 400L321-80Z"/></svg>            </button>
            <img  x-transition class="m-auto object-cover w-full h-[calc(100vw/1.777778)] lg:w-[900px] lg:h-[578px]" :src="galleryImages[currentIndex]" alt="Gallery Image">                
            </div>
        </div>             
    </section>
</x-layout>