<x-layout>
    @include('components.hero.default')
    
    <section class="w-full py-12 lg:py-[6rem] px-4 md:px-12 bg-primary/5">
        <div class="mx-auto max-w-screen-xl text-center">
            <h2 class="text-primary mb-8">Community Amenities</h2>
            <p class="max-w-[800px] mx-auto">Athens Creek offers various amenities, including bocce ball courts, a putting green, private dining room, games room with pool table, laundry facilities, hair salon, lounge, and library. Residents can make use of secure underground parking for vehicles and scooters. For pet lovers, Athens Creek warmly welcomes small dogs and indoor cats.</p>
        </div>
        <div class="grid lg:grid-cols-2 gap-8 max-w-screen-xl mx-auto mt-16">
            <div>
                <div class="w-full md:w-11/12 lg:h-80">
                    <img class="w-full h-full object-cover" src="{{ asset('/storage/images/hero.png') }}" alt="">
                </div>
                <div class="bg-tertiary text-light py-4 md:py-8 p-8 w-full md:w-7/12 md:h-40 md:ml-auto md:-mt-[5.5rem] z-20 relative">
                    <h3 class="text-2xl">Courtyards</h3>
                    <p>Enjoy some sunshine and camaraderie in our beautiful, landscaped courtyards.</p>
                </div>
            </div>
            <div>
                <div class="w-full md:w-11/12 lg:h-80">
                    <img class="w-full h-full object-cover" src="{{ asset('/storage/images/hero-2.avif') }}" alt="">
                </div>
                <div class="bg-tertiary text-light py-4 md:py-8 p-8 w-full md:w-7/12 md:h-40 md:ml-auto md:-mt-[5.5rem] z-20 relative">
                    <h3 class="text-2xl">Library</h3>
                    <p>Enjoy time reading in our quiet and comfortable library.</p>
                </div>
            </div>
            <div>
                <div class="w-full md:w-11/12 lg:h-80">
                    <img class="w-full h-full object-cover" src="{{ asset('/storage/images/hero.png') }}" alt="">
                </div>
                <div class="bg-tertiary text-light py-4 md:py-8 p-8 w-full md:w-7/12 md:h-40 md:ml-auto md:-mt-[5.5rem] z-20 relative">
                    <h3 class="text-2xl">Multi-Purpose Room</h3>
                    <p>A versatile multi-purpose room is perfect for relaxation, social gatherings, and creative pursuits.</p>
                </div>
            </div>  
            <div>
                <div class="w-full md:w-11/12 lg:h-80">
                    <img class="w-full h-full object-cover" src="{{ asset('/storage/images/hero.png') }}" alt="">
                </div>
                <div class="bg-tertiary text-light py-4 md:py-8 p-8 w-full md:w-7/12 md:h-40 md:ml-auto md:-mt-[5.5rem] z-20 relative">
                    <h3 class="text-2xl">Pet Friendly</h3>
                    <p>Well behaved pets under 30 pounds are welcome!</p>
                </div>
            </div>  
            <div>
                <div class="w-full md:w-11/12 lg:h-80">
                    <img class="w-full h-full object-cover" src="{{ asset('/storage/images/hero.png') }}" alt="">
                </div>
                <div class="bg-tertiary text-light py-4 md:py-8 p-8 w-full md:w-7/12 md:h-40 md:ml-auto md:-mt-[5.5rem] z-20 relative">
                    <h3 class="text-2xl">Salon</h3>
                    <p>Enjoy a relaxing hair wash, cut, style, and more at our on-location hair salon.</p>
                </div>
            </div>                                                 
        </div>
    </section>

    <section 
    x-data="{ 
        activeIndex: null, 
        bgUrl: 'http://127.0.0.1:8000/storage/images/hero.png',
        communityServices: [
            { title: 'Dining Room', description: 'Delicious and nutritious meals every single day in our dining room!', image: 'http://127.0.0.1:8000/storage/images/hero.png' },
            { title: 'Emergency Response', description: 'We have 24-hour Medic-Alert Emergency Call Service to ensure your safety.', image: 'http://127.0.0.1:8000/storage/images/hero-2.avif' },
            { title: 'Housekeeping', description: 'Weekly housekeeping services.', image: 'http://127.0.0.1:8000/storage/images/cherrylane.webp' },
            { title: 'Personal Laundry', description: 'Optional personal laundry services to ensure you always feel your best.', image: 'http://127.0.0.1:8000/storage/images/hero-2.avif' },
            { title: 'Social Events', description: 'Enjoy a vibrant community with plentiful social activities and events!', image: 'http://127.0.0.1:8000/storage/images/hero-2.avif' },
        ] 
    }" 
    class="w-full py-12 lg:py-[6rem] px-4 md:px-12 bg-secondary"
>
    <div class="mx-auto max-w-screen-xl text-center">
        <h2 class="text-dark mb-8">Community Services</h2>
        <p class="max-w-[800px] mx-auto">
            Our monthly rental fee includes an array of services, such as lunch and dinner served in the dining room, continental-style breakfast in the Bistro from 8-10 AM daily, weekly housekeeping, 24-hour Medic-Alert Emergency Call Service, and individual air conditioning and heat controls. All utilities, including heat, air conditioning, light, and cable, are covered. 
            Bistro - Enjoy light bites all day long in our wonderful bistro.
        </p>
    </div>
    <div class="bg-cover max-w-screen-xl mx-auto relative mt-12 lg:mt-16">
        <div 
            class="absolute w-full h-full bg-cover bg-center duration-150"
            x-bind:style="{ backgroundImage: activeIndex !== null ? 'url(' + communityServices[activeIndex].image + ')' : 'url(' + bgUrl + ')' }"
        ></div>

        <div class="relative z-10 flex flex-col">
            <template x-for="(service, index) in communityServices" :key="index">
                <div 
                    x-on:mouseover="activeIndex = index; bgUrl = service.image" 
                    class="bg-light w-full md:w-[30rem] p-8 border-primary border-b-2 md:cursor-pointer transition-opacity duration-300" 
                    :class="{ 'md:opacity-60': activeIndex !== null && activeIndex !== index }"
                >
                    <h3 x-text="service.title" class="text-2xl"></h3>
                    <p x-text="service.description"></p>
                </div>
            </template>
        </div>
    </div>
</section>
  
</x-layout>