<x-layout>
    @include('components.hero.default')
    
    <div     x-data="{ 
        activeSuite: 0, 
        suites: [
            { 
                title: 'One-Bedroom', 
                description: '615 sq ft suite offers a spacious bedroom, fully equipped kitchen, living and dining areas, a full bathroom, a balcony, and ample storage.', 
                suiteFeatures: [
                    'Modern compact kitchen includes: range, fridge, microwave, spacious cupboards and Dining Area with coverings',
                    'Closets with Shelf Organizers',
                    'Spacious Living Area includes Phone, Cable and all window coverings',
                    'Well-appointed bathroom with walk-in shower and safety bars',
                    'Balcony',
                    'Emergency Fire Sprinklers'
                ], 
                image: 'http://127.0.0.1:8000/storage/images/180604-Oceana-B3.jpg' 
            },
            { 
                title: 'Two-Bedroom', 
                description: '840 sq ft suite features a master bedroom plus a spare bedroom, den, generously sized dining and living areas, a well-equipped kitchen, full bathroom, additional storage space, and a balcony.', 
                suiteFeatures: [
                    'Modern full kitchen with range, fridge, microwave, spacious cupboards and Dining Area',
                    'Spacious Living Area includes Phone, Cable and all window coverings',
                    'Well-appointed bathroom with walk-in shower and safety bars',
                    'Master Bedroom',
                    'Den/Secondary Bedroom',
                    'Closets with Shelf Organizers',
                    'Balcony',
                    'Emergency Fire Sprinklers'
                ], 
                image: 'http://127.0.0.1:8000/storage/images/Oceana-PARC-2-Bedroom-Floorplan-D2.jpg' 
            }
        ] 
    }"  class="w-full py-12 lg:py-[8rem] px-4 md:px-12 bg-primary/5">

    <div class="max-w-screen-xl mx-auto text-center mb-12">
        <h2 class="text-4xl font-bold mb-4">Our Suites</h2>
        <p class="text-lg max-w-[600px] mx-auto">Each suite is equipped with a stove and fridge, providing the convenience and independence of preparing your own meals if you so wish.</p>
    </div>    
    <div class="max-w-screen-xl mx-auto">
        <div class="grid gap-6 max-w-screen-lg mx-auto" :class="`lg:grid-cols-${suites.length}`">
            <template x-for="(suite, index) in suites" :key="index">
            <div x-on:click="activeSuite = index" class="flex justify-center items-center border-primary border-2 bg-light cursor-pointer p-6 duration-200 hover:bg-secondary" :class="{ 'bg-secondary': activeSuite === index }">
                <h3 x-text="suite.title" class="text-lg font-bold"></h3>
            </div>
            </template>              
        </div>
        <div class="grid lg:grid-cols-3 w-full mt-8 gap-6">
            <template x-for="(suite, index) in suites" :key="index">
                <div x-transition.opacity x-transition.duration.200 x-show="activeSuite === index" class="lg:col-span-3 grid grid-cols-1 lg:grid-cols-3 gap-6 p-4">
                    <div class="lg:col-span-1 p-6">
                        <p x-text="suite.description" class="font-semibold text-lg mb-12"></p>
                        <h4 class="font-bold text-xl ledger">Suite Features:</h4>
                        <ul class="list-disc ml-8 mt-4 space-y-3">
                            <template x-for="(feature, index) in suite.suiteFeatures" :key="index">
                                <li x-text="feature"></li>
                            </template>
                        </ul>
                    </div>
                    <img class="lg:col-span-2 w-full h-auto object-cover" :src="suite.image" alt="">
                </div>
            </template>                
        </div>
    </div> 
</div>
<div class="w-full bg-primary py-12 lg:py-[4rem] px-4 md:px-12">
    <div class="max-w-screen-xl mx-auto text-center mt-12">
        <h2 class="text-3xl font-bold mb-4 text-light">Our Building</h2>
        <p class="text-lg mb-8 text-light">Experience peace of mind and comfort in our thoughtfully designed suites at Athens Creek Retirement Lodge.</p>
        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-2">
            <div class="flex flex-col items-center bg-light pb-4 rounded-lg shadow-md">
                <img src="http://127.0.0.1:8000/storage/images/hero.png" alt="Barrier-Free Living" class="w-full h-48 object-cover mb-4 rounded-t-lg">
                <h3 class="text-xl font-semibold mb-2 text-primary">Barrier-Free Living</h3>
            </div>
            <div class="flex flex-col items-center bg-light pb-4 rounded-lg shadow-md">
                <img src="http://127.0.0.1:8000/storage/images/hero.png" alt="Group Event Area" class="w-full h-48 object-cover mb-4 rounded-t-lg">
                <h3 class="text-xl font-semibold mb-2 text-primary">Group Event Area</h3>
            </div>
            <div class="flex flex-col items-center bg-light pb-4 rounded-lg shadow-md">
                <img src="http://127.0.0.1:8000/storage/images/hero.png" alt="Outdoor Garden Space" class="w-full h-48 object-cover mb-4 rounded-t-lg">
                <h3 class="text-xl font-semibold mb-2 text-primary">Outdoor Garden Space</h3>
            </div>
            <div class="flex flex-col items-center bg-light pb-4 rounded-lg shadow-md">
                <img src="http://127.0.0.1:8000/storage/images/hero.png" alt="Pet Friendly Building" class="w-full h-48 object-cover mb-4 rounded-t-lg">
                <h3 class="text-xl font-semibold mb-2 text-primary">Pet Friendly Building</h3>
            </div>
        </div>
    </div>         
</div>
</x-layout>