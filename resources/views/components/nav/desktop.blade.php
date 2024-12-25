<nav class="items-center gap-x-12 uppercase hidden lg:flex">
    <a href="/" :class="{ 'text-primary italic': activePage === $el.getAttribute('href') }" class="duration-200 hover:text-primary">Home</a>
    <a href="/lifestyle" :class="{ 'text-primary italic': activePage === $el.getAttribute('href') }" class="duration-200 hover:text-primary">Lifestyle</a>
    <a href="/suites" :class="{ 'text-primary italic': activePage === $el.getAttribute('href') }" class="duration-200 hover:text-primary">Suites</a>
    <a href="/gallery" :class="{ 'text-primary italic': activePage === $el.getAttribute('href') }" class="duration-200 hover:text-primary">Gallery</a>
    <a href="#contact" class="bg-primary text-light p-2 text-center duration-200 hover:opacity-80 rounded-full px-6">Contact Us</a>
</nav>