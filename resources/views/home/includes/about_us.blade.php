<!-- About Us -->
<h1 class="mt-20 text-center font-semibold text-5xl">About Us</h1>
<div class="mt-16 w-9/12 mx-auto shadow-lg flex rounded-2xl">
    <div class="w-4/12">
        <div class="ml-auto text-center mt-4 leading-relaxed space-y-5 px-16">
            <h2 class="text-4xl font-semibold">Hours</h2>
            <p>You can find our hours of operation below:</p>
            <ul class="text-left list-disc px-12">
                <li>Monday - Friday: 10am - 8pm</li>
                <li>Saturday: 9:30am - 8pm</li>
                <li>Sunday: 10am - 6pm</li>
            </ul>
        </div>
    </div>
    <div class="w-4/12 max-h-full overflow-hidden">
        <img class=""
             src="{{ \App\Services\ImageService::getPublicImage('home/about_us/smoothies_hut.jpg') }}"
             alt="Smoothies Plus Hut">
    </div>
    <div class="w-4/12 bg-primary ml-auto rounded-r-2xl pb-10">

        <div class="ml-auto text-center mt-4 text-neutral-100 leading-relaxed space-y-5 px-8">
            <h2 class="text-4xl font-semibold">Smoothies Plus</h2>
            <p>Here at Smoothies Plus, we believe in serving the healthiest beverages and snacks fore
                everyone - even your beloved pets!</p>

            <p>We always aim to provide the following in our products:</p>
            <ul class="text-left list-disc px-8">
                <li>Vegan Options</li>
                <li>Natural & Fresh Ingredients</li>
                <li>Many Health Benefits</li>
                <li>Dairy Free Options</li>
            </ul>
            <p>You can find us at the Mcarthur Glenn Outlet in Cannock</p>
            <div class="flex items-center justify-center gap-x-6 text-neutral-700">
                <a href="#find-us"
                   class="shadow-xl rounded-md bg-neutral-50 px-3.5 py-2.5 text-sm font-semibold hover:bg-neutral-100
                   focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2
                   focus-visible:outline-neutral-100 transition ease-in-out hover:translate-x-1 duration-300">
                    Show Me <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</div>
