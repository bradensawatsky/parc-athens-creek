<x-layout>
    @include('components.hero.default')
    
    <section class="w-full py-12 lg:py-[6rem] px-4 md:px-12 bg-primary/5">
        <div class="max-w-screen-2xl mx-auto grid grid-cols-2 gap-x-[3rem]">
            <div class="flex flex-col space-y-6 lg:space-y-8 py-[1rem] w-full lg:w-10/12 col-span-2 lg:col-span-1">
                <h2 class="text-primary font-medium ledger">
                    Discover the ideal blend of heritage charm, and modern living at Athens Creek Retirement Lodge. 
                </h2>

                <span class="font-medium w-2/3">Athens
                Creek offers 79 independent living suites, providing a luxurious retirement lifestyle.</span>

                <div>
                <a href="/lifestyle" class="border-b duration-200 hover:opacity-80 text-md border-primary  text-primary py-1" >Learn more about our lifestyle</a>
                </div>

                <p>
                    At Athens Creek, your well-being is our priority. The monthly fee encompasses 24-hour security, an in-
                    house emergency alert system, and covers all utilities, excluding personal telephone lines. Begin your
                    day with a delightful continental breakfast served in the Bistro and savour delicious lunches and dinners
                    daily in the Dining Room. Our commitment to your comfort extends to weekly housekeeping services,
                    ensuring laundered linens and towels. Secure underground parking is available for both vehicles and
                    scooters, providing convenience and peace of mind for all residents. All our suites are pet friendly, so
                    please bring your furry loved ones with you!
                </p>
            </div>

            <div class="relative flex flex-col lg:flex-row items-center justify-end text-light col-span-2 lg:col-span-1">
                <div class="h-full w-full lg:w-2/3 flex lg:absolute z-0 left-0">
                    <img class="object-cover object-left h-full w-full" src="{{asset('/storage/images/hero-2.avif')}}">
                </div>

                <div class="bg-primary py-12 lg:py-[6rem] px-4 lg:px-[2rem] w-full lg:max-w-80 border-secondary text-center z-10 flex flex-col items-center space-y-[1.5rem]">
                    <h2 class="font-medium">We'd love to hear from you!</h2>
                    <span class="">Contact us by phone or through our contact form below and learn more</span>
                    <span class="text-light text-2xl">(778) 952 7690</span>

                    <a href="#" class="button--primary">Contact Us</a>
                </div>
            </div>
        </div>
    </section>

    <section class="flex flex-col md:flex-row  relative w-full max-h-[650px]">
        <div class="z-20 text-light font-medium bg-primary flex flex-col md:items-end items-center gap-y-[2rem] text-center md:text-left w-full md:w-5/12 order-2 md:-order-1">
            <div class="bg-primary pr-4 lg:pr-[3rem] pl-[1rem] py-[3rem] h-full z-10 flex flex-col justify-center items-center space-y-6 lg:space-y-[3rem]">
                    <h2 class="ledger w-full">Conveniently Located</h2>
                    <p class="max-w-[500px]">Athens Creek is conveniently located near Cherry Lane Shopping Centre, banking services, City Transit,
                    and other essential services, making it easy for residents to access the amenities they need. Our
                    community is also adjacent to Lion’s Community Park, featuring a scenic walkway along the creek –
                    perfect for daily strolls. To secure your place at Athens Creek Retirement Lodge or for more information,
                    contact us today. Your comfortable retirement lifestyle awaits!</p>

                    <div class="w-full">
                        <a href="/suites" class="button--primary">Our Suites</a>
                    </div>
                </div>
        </div>

        <div class="relative w-full md:w-7/12">
            <div class="absolute z-10 bg-dark/20 h-full w-full"></div>
            <img class="object-cover h-full w-full" src="{{asset('/storage/images/cherrylane.webp')}}">
        </div>
    </section>
</x-layout>