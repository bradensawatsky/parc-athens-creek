<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Athens Creek</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&family=Source+Code+Pro:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Ledger&family=Outfit:wght@100..900&family=Source+Code+Pro:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
        
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased bg-light text-dark">
        <header class="flex flex-col w-full fixed top-0 z-40 bg-[white]">
            <div class="px-8 py-4 w-full">
                <div x-data="{ activePage: window.location.pathname }" class="mx-auto max-w-screen-2xl flex items-center justify-between font-bold text-md">
                    <a href="/">
                        <img class="h-10 lg:h-[60px]" src="{{asset('/storage/images/athens-creek-logo.png')}}">
                    </a>
                    @include('components.nav.desktop')
                    @include('components.nav.mobile')
                </div>
            </div>
        </header>

        {{ $slot }}

        <div class="bg-dark w-full px-[2rem]">
            <div class="mx-auto grid grid-cols-2 w-full max-w-screen-2xl py-12 lg:py-[6rem] gap-x-[6rem]">
                <div id="contact" class="col-span-2  text-light mb-8 lg:mb-16">
                    <h2 class="text-[2rem] ledger font-bold mb-[1rem]">Contact Us</h2>
                    
                    <span class="text-lg mb-[2rem] font-medium w-10/12">Learn more about living at Athens Creek or
                    book a visit with us</span>
                </div>

                <form class="flex flex-col col-span-2 lg:col-span-1 items-end gap-y-[1rem] [&_textarea]:rounded-sm [&_select]:rounded-sm [&_input]:rounded-sm">
                    <label class="text-light flex flex-col w-full gap-y-1 font-bold">
                        Name
                        <input type="text" class="px-[1rem] text-dark py-[0.75rem]" placeholder="John Doe">
                    </label>

                    <label class="text-light flex flex-col w-full gap-y-1 font-bold">
                        Email Address
                        <input type="email" class="px-[1rem] text-dark py-[0.75rem]" placeholder="john@example.com">
                    </label>

                    <label class="text-light flex flex-col w-full gap-y-1 font-bold">
                        Phone
                        <input type="tel" class="px-[1rem] text-dark py-[0.75rem]" placeholder="123456789">
                    </label>

                    <label class="text-light flex flex-col w-full gap-y-1 font-bold">
                        I'm interested in learning more about...
                        <select class="px-[1rem] py-[0.75rem] text-dark" style="border-right:12px solid transparent;">
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

                    <div class="w-full flex items-center mt-4 lg:mt-8">
                        <button type="submit" class="bg-primary text-light font-bold px-[2rem] py-[0.75rem] rounded-full uppercase duration-200 hover:opacity-80">Submit</button>
                    </div>
                </form>
                
                <div class="flex flex-col gap-y-[1rem] col-span-2 lg:col-span-1 mt-12 lg:mt-0 text-light">
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
            <div class="flex flex-col md:flex-row justify-between max-w-screen-2xl mx-auto">
                <div class="flex flex-col space-y-[1rem]">
                    <nav class="flex items-center space-x-10 text-light font-bold">
                        <a href="#">Back To Top</a>
                        <a href="/lifestyle">Lifestyle</a>
                        <a href="/suites">Suites</a>
                        <a href="/gallery">Gallery</a>
                    </nav>
                    
                    <span class="text-md text-secondary"><span>© 2024 Athens Creek Retirement Lodging. </span><a href="#" class="underline">Sitemap</a></span>
                </div>

                <div class="flex flex-col space-y-[1rem] items-start mb-12 md:mb-0 -order-1 md:order-1">
                    <span class="text-light font-bold select-none">Follow Us</span>
                    <a href="https://www.facebook.com/AthensCreekRetirementLodge/" target="_blank" class="h-[1.5rem] w-[1.5rem] fill-secondary hover:fill-light duration-200"><x-icons.facebook></x-icons.facebook></a>
                </div>
            </div>
        </footer>
    </body>
</html>
