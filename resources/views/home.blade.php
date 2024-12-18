<x-layout>
    <div class="flex justify-center items-center min-h-[700px] relative w-full border-secondary">
        <div class="flex z-20 justify-center items-center text-light font-medium flex flex-col gap-y-[2rem]">
            <span class="text-[1.5rem]">Athens Creek Retirement Lodge</span>
            <h1 class="text-[4rem] ledger text-center leading-[4rem] font-bold">Heritage Charm <br>& Modern Living</h1>
            <a class="text-[1.25rem] flex items-center group space-x-[1rem]" href="">
                <span class="group-hover:text-secondary duration-200 uppercase">Let’s Chat</span>
                <x-icons.cta class="w-[1rem] group-hover:fill-secondary duration-200 h-[1rem] fill-light"></x-icons.cta>
            </a>
        </div>

        <div class="absolute z-10 bg-dark/60 h-full w-full">

        </div>

        <div class="absolute z-0 top-0 left-0 w-full h-full">
            <img class="object-cover object-bottom w-full h-full" src="{{asset('/storage/images/hero.png')}}">
        </div>
    </div>
    
    <div class="w-full py-[8rem] px-[3rem] bg-primary/5">
        <div class="max-w-screen-2xl mx-auto grid grid-cols-2 gap-x-[3rem]">
            <div class="flex flex-col space-y-[2rem] py-[1rem] w-10/12">
                <span class="text-primary font-medium ledger text-4xl leading-[3rem]">
                    Discover the ideal blend of heritage charm, and modern living at Athens Creek Retirement Lodge. 
                </span>

                <span class="font-medium w-2/3">Athens
                Creek offers 79 independent living suites, providing a luxurious retirement lifestyle.</span>

                <div>
                <a href="" class="border-b duration-200 hover:opacity-80 text-md border-primary  text-primary py-1" >Learn more about our lifestyle</a>
                </div>

                <p class="prose-md">
                    At Athens Creek, your well-being is our priority. The monthly fee encompasses 24-hour security, an in-
                    house emergency alert system, and covers all utilities, excluding personal telephone lines. Begin your
                    day with a delightful continental breakfast served in the Bistro and savour delicious lunches and dinners
                    daily in the Dining Room. Our commitment to your comfort extends to weekly housekeeping services,
                    ensuring laundered linens and towels. Secure underground parking is available for both vehicles and
                    scooters, providing convenience and peace of mind for all residents. All our suites are pet friendly, so
                    please bring your furry loved ones with you!
                </p>
            </div>

            <div class="relative flex items-center justify-end text-light">
                <div class="h-full w-2/3 flex absolute z-0 left-0">
                    <img class="object-cover object-left h-full w-full" src="{{asset('/storage/images/hero-2.avif')}}">
                </div>

                <div class="bg-primary w-[20rem] py-[6rem] px-[2rem] border-secondary text-center z-10 flex flex-col items-center space-y-[1.5rem]">
                    <span class="ledger text-3xl">We'd love to hear from you!</span>
                    <span class="text-secondary">Contact us by phone or through our contact form below and learn more</span>
                    <span class="text-light text-2xl">(778) 952 7690</span>

                    <a href="#" class="bg-light font-medium text-tertiary p-3 duration-200 hover:opacity-80 rounded-full w-48 text-md">Contact Us</a>
                </div>
            </div>
        </div>
    </div>

    <div class="flex  min-h-[700px] relative w-full ">
        <div class="z-20 text-light font-medium bg-primary w-5/12 flex flex-col items-end justify-end gap-y-[2rem]">
            <div class="bg-primary min-w-[40rem] w-5/12 pr-[3rem] pl-[1rem] py-[3rem] h-full z-10 flex flex-col justify-center items-center space-y-[3rem]">
                    <span class="ledger text-4xl font-bold w-full">Conveniently Located</span>
                    <span class="prose-md">Athens Creek is conveniently located near Cherry Lane Shopping Centre, banking services, City Transit,
                    and other essential services, making it easy for residents to access the amenities they need. Our
                    community is also adjacent to Lion’s Community Park, featuring a scenic walkway along the creek –
                    perfect for daily strolls. To secure your place at Athens Creek Retirement Lodge or for more information,
                    contact us today. Your comfortable retirement lifestyle awaits!</span>

                    <div class="w-full">
                        <a href="#" class="bg-light font-medium text-tertiary py-3 px-12 duration-200 text-center hover:opacity-80 rounded-full w-48 text-md text-primary">Our Suites</a>
                    </div>
                </div>
        </div>

        <div class="absolute z-10 bg-dark/20 h-full w-full">

        </div>

        <div class="absolute z-0 top-0 left-0 w-full h-full flex justify-end">
            <img class="object-cover object-right-bottom w-10/12 h-full" src="{{asset('/storage/images/cherrylane.webp')}}">
        </div>
    </div>
</x-layout>