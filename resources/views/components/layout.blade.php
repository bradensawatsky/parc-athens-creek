<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Athens Creek</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased bg-light text-dark">
        <header class="flex flex-col w-full">
            <div class="px-[2rem] py-[0.75rem] w-full bg-primary/90 border-b-2 border-secondary">
                <div class="mx-auto max-w-screen-2xl flex justify-end">
                    <a href="call:778-952-7690" class="flex items-center text-[0.75rem] gap-x-[0.5rem] group font-bold">
                        <x-icons.phone class="h-[1rem] w-[1rem] fill-secondary group-hover:fill-light duration-200"></x-icons.phone>
                        <span class="group-hover:text-light text-secondary duration-200">(778) 952 7690</span>
                    </a>
                </div>
            </div>

            <div class="p-[2rem] w-full">
                <div class="mx-auto max-w-screen-2xl flex items-center justify-between font-bold text-lg">
                    <img class="h-[60px]" src="{{asset('/storage/images/athens-creek-logo.png')}}">

                    <nav class="flex items-center gap-x-24 uppercase">
                        <a href="Home">Home</a>
                        <a href="Lifestyle">Lifestyle</a>
                        <a href="Suites">Suites</a>
                    </nav>

                    <a class="px-[1rem] py-[0.5rem] text-light bg-primary/90 border-2 border-secondary/50 rounded-sm uppercase" href="">Contact Us</a>
                </div>
            </div>
        </header>

        {{ $slot }}

        <div class="bg-dark w-full px-[2rem] border-y-2 border-secondary/50">
            <div class="mx-auto grid grid-cols-2 w-full max-w-screen-2xl py-[4rem] gap-x-[6rem]">
                <div class="col-span-2  text-light mb-[4rem]">
                    <h3 class="text-[2rem] font-bold mb-[1rem]">Contact Us</h3>
                    
                    <span class="leading-[1.5rem] text-[1.5rem] mb-[2rem] font-medium w-10/12">Learn more about living at Athens Creek or
                    book a visit with us</span>
                </div>

                <form class="flex flex-col items-end gap-y-[1rem] [&_textarea]:rounded-sm [&_select]:rounded-sm [&_input]:rounded-sm">
                    <label class="text-light flex flex-col w-full gap-y-1 font-bold">
                        Name
                        <input type="text" class="px-[1rem] text-dark py-[0.75rem]" placeholder="John Doe">
                    </label>

                    <label class="text-light flex flex-col w-full gap-y-1 font-bold">
                        Email Address
                        <input type="text" class="px-[1rem] text-dark py-[0.75rem]" placeholder="John Doe">
                    </label>

                    <label class="text-light flex flex-col w-full gap-y-1 font-bold">
                        Phone
                        <input type="text" class="px-[1rem] text-dark py-[0.75rem]" placeholder="John Doe">
                    </label>

                    <label class="text-light flex flex-col w-full gap-y-1 font-bold">
                        I'm interested in learning more about...
                        <select class="px-[1rem] py-[0.75rem] text-dark">
                            <option selected>Suites</option>
                            <option>Services</option>
                            <option>Pricing</option>
                            <option>Location</option>
                            <option>Availability</option>
                        </select>
                    </label>

                    <label class="text-light flex flex-col w-full gap-y-1 font-bold">
                        Message
                        <textarea class="px-[1rem] min-h-[156px] py-[0.75rem] text-dark" placeholder="Your message..."></textarea>
                    </label>

                    <div class="w-full flex items-center mt-[1rem]">
                        <button type="submit" class="bg-primary text-light font-bold px-[2rem] py-[0.75rem] rounded-sm">Submit</button>
                    </div>
                </form>
                
                <div class="flex flex-col gap-y-[1rem] text-light">
                    <a href="call:778-952-7690" class="flex items-center text-[1rem] gap-x-[0.5rem] group font-bold">
                        <x-icons.phone class="h-[1.5rem] w-[1.5rem] fill-secondary group-hover:fill-light duration-200"></x-icons.phone>
                        <span class="text-light duration-200">(778) 952 7690</span>
                    </a>
                    <a href="email:gm@athenscreek.com" class="flex items-center text-[1rem] gap-x-[0.5rem] group font-bold">
                        <x-icons.email class="h-[1.5rem] w-[1.5rem] fill-secondary group-hover:fill-light duration-200"></x-icons.email>
                        <span class="text-light duration-200">gm@athenscreek.com</span>
                    </a>
                    <a href="call:778-952-7690" class="flex items-center text-[1rem] gap-x-[0.5rem] group font-bold">
                        <x-icons.address class="h-[1.5rem] w-[1.5rem] fill-secondary group-hover:fill-light duration-200"></x-icons.address>
                        <span class="text-light duration-200">170 Warren Avenue West, Penticton, BC V2A 8R6</span>
                    </a>

                    <div class="mapouter mt-[2rem]"><div class="gmap_canvas"><iframe class="gmap_iframe rounded-sm" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=800&amp;hl=en&amp;q=170 Warren Avenue West, Penticton, BC V2A 8R6&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://embed-googlemap.com">google maps embed</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:400px;}.gmap_iframe {height:400px!important;}</style></div>
                </div>

            </div>
        </div>

        <footer class="w-full p-[2rem] bg-primary ">
            <div class="flex justify-between max-w-screen-2xl mx-auto">
                <div class="flex flex-col space-y-[1rem]">
                    <nav class="flex items-center space-x-10 text-light font-bold">
                        <a href="">Back To Top</a>
                        <a href="">Lifestyle</a>
                        <a href="">Suites</a>
                    </nav>
                    
                    <span class="text-md text-secondary"><span>© 2024 Athens Creek Retirement Lodging. </span><a href="#" class="underline">Sitemap</a></span>
                </div>

                <div class="flex flex-col space-y-[1rem] items-end">
                    <span class="text-light font-bold select-none">Follow Us</span>
                    <a href="#" class="group h-[1.5rem] w-[1.5rem] fill-secondary group-hover:fill-light duration-200"><x-icons.facebook></x-icons.facebook></a>
                </div>
            </div>
        </footer>
    </body>
</html>
