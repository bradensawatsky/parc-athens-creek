<div x-data="{ open: false }" class="relative">
    <button 
        x-on:click="open = !open" 
        class="bg-primary text-light p-2 rounded-md md:hidden"
        aria-label="Toggle Navigation"
    >
        <template x-if="!open">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFF"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg>
        </template>
        <template x-if="open">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFF"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg>
        </template>
    </button>
    <nav 
        x-show="open"
        @click.away="open = false"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="transform -translate-y-[-1000px]"
        x-transition:enter-end="transform translate-y-0"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="transform translate-y-0"
        x-transition:leave-end="transform -translate-y-[-1000px]"
        class="fixed top-[72px] left-0 w-full h-screen bg-light flex flex-col items-center space-y-6 p-8 z-50 shadow-md md:hidden"
    >
        <a href="/" class="italic text-primary text-lg" :class="{ 'text-primary italic': activePage === $el.getAttribute('href') }">Home</a>
        <a href="/lifestyle" class="duration-200 hover:text-primary text-lg" :class="{ 'text-primary italic': activePage === $el.getAttribute('href') }">Lifestyle</a>
        <a href="/suites" class="duration-200 hover:text-primary text-lg" :class="{ 'text-primary italic': activePage === $el.getAttribute('href') }">Suites</a>
        <a href="/gallery" class="duration-200 hover:text-primary text-lg" :class="{ 'text-primary italic': activePage === $el.getAttribute('href') }">Gallery</a>
        <a href="#contact" class="bg-primary text-light py-3 px-8 text-center duration-200 hover:opacity-80 rounded-full text-lg">Contact Us</a>
    </nav>
</div>
