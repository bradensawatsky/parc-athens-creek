<x-layout>
    <div class="flex justify-center items-center min-h-[700px] relative w-full border-y-2 border-secondary">
        <div class="flex z-20 justify-center items-center text-light font-bold flex flex-col">
            <span class="text-[1.5rem]">Athens Creek Retirement Lodge</span>
            <h1 class="text-[4rem] mb-[1rem]">Heritage Charm & Modern Living</h1>
            <a class="text-[1.5rem] flex items-center group space-x-[1rem]" href="">
                <span class="group-hover:text-secondary duration-200">Let’s Chat</span>
                <x-icons.cta class="w-[1.5rem] group-hover:fill-secondary duration-200 h-[1.5rem] fill-light"></x-icons.cta>
            </a>
        </div>

        <div class="absolute z-10 bg-dark opacity-[60%] h-full w-full">

        </div>

        <div class="absolute z-0 top-0 left-0 w-full h-full">
            <img class="object-cover object-bottom w-full h-full" src="{{asset('/storage/images/hero.png')}}">
        </div>
    </div>

    <div class="h-[1000px]"></div>
</x-layout>