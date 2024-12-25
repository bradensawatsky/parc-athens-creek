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
        Lifestyle Page
    </div>
</x-layout>