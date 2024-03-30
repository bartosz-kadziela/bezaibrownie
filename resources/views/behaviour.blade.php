@extends('layout', ['title' => 'Behaviour'])

@section('content')
    <div class="mb-6">
        <h1 class="text-3xl font-semibold mb-4">
            Behaviour
        </h1>
        <a href="images/Bunny_behaviour.jpg" download="Bunny_behaviour.jpg" class="bg-indigo-600 hover:bg-indigo-700 transition-colors px-4 py-2 mb-4 text-white font-semibold rounded-lg inline-flex items-center">
            <svg class="mr-1.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5"/>
                <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708z"/>
            </svg>
            Download behaviour leaflet
        </a>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="p-4 md:p-8 md:flex bg-slate-100 border-2 rounded-xl">
                <img class="h-32 md:h-48 w-1/2 md:w-1/4 pb-2 md:pb-0 md:pr-4 object-contain mx-auto" src="images/bunny_curious.png" alt="Bunny_curious">
                <div class="md:w-3/4 flex flex-col justify-center text-center md:text-left">
                    <p class="text-xl font-medium text-sky-700 dark:text-sky-400 pb-3">
                        Curious
                    </p>
                    <p class="text-lg">
                        Curious bunnies exhibit focused attention by cupping their ears, rapidly twitching their noses,
                        and leaning forward to explore. Their movement is slow, characterized by tiptoeing rather than hopping.
                    </p>
                </div>
            </div>
            <div class="p-4 md:p-8 md:flex bg-slate-100 border-2 rounded-xl">
                <img class="h-32 md:h-48 w-1/2 md:w-1/4 pb-2 md:pb-0 md:pr-4 object-contain mx-auto" src="images/bunny_relaxed.png" alt="Bunny_relaxed">
                <div class="md:w-3/4 flex flex-col justify-center text-center md:text-left">
                    <p class="text-xl font-medium text-sky-700 dark:text-sky-400 pb-3">
                        Relaxed
                    </p>
                    <p class="text-lg">
                        A calm bunny lowers its ears at a comfortable angle, sits or lies down, and moves with a steady hop. The more awkward the nap position, the more relaxed they feel.
                    </p>
                </div>
            </div>
            <div class="p-4 md:p-8 md:flex bg-slate-100 border-2 rounded-xl">
                <img class="h-32 md:h-48 w-1/2 md:w-1/4 pb-2 md:pb-0 md:pr-4 object-contain mx-auto" src="images/bunny_aggressive.png" alt="Bunny_aggressive">
                <div class="md:w-3/4 flex flex-col justify-center text-center md:text-left">
                    <p class="text-xl font-medium text-sky-700 dark:text-sky-400 pb-3">
                        Aggressive
                    </p>
                    <p class="text-lg">
                        A bunny preparing for an attack aims to appear larger by elevating its body, chin, and tail. With ears folded and pointed backward over their shoulders, they advance in rapid dashes, often accompanied by growling sounds.
                    </p>
                </div>
            </div>
            <div class="p-4 md:p-8 md:flex bg-slate-100 border-2 rounded-xl">
                <img class="h-32 md:h-48 w-1/2 md:w-1/4 pb-2 md:pb-0 md:pr-4 object-contain mx-auto" src="images/bunny_alert.png" alt="Bunny_alert">
                <div class="md:w-3/4 flex flex-col justify-center text-center md:text-left">
                    <p class="text-xl font-medium text-sky-700 dark:text-sky-400 pb-3">
                        Alert
                    </p>
                    <p class="text-lg">
                        If your bunny stands upright with its ears pointing straight up, it's alert and focused on something. Alert rabbits often freeze but may move their ears and twitch their nose quickly. They're prepared to either escape or head towards a treat jar as soon as they figure out what's happening.
                    </p>
                </div>
            </div>
            <div class="p-4 md:p-8 md:flex bg-slate-100 border-2 rounded-xl">
                <img class="h-32 md:h-48 w-1/2 md:w-1/4 pb-2 md:pb-0 md:pr-4 object-contain mx-auto" src="images/bunny_sleepy.png" alt="bunny_sleepy">
                <div class="md:w-3/4 flex flex-col justify-center text-center md:text-left">
                    <p class="text-xl font-medium text-sky-700 dark:text-sky-400 pb-3">
                        Sleepy
                    </p>
                    <p class="text-lg">
                        As bunnies enjoy a peaceful nap, fully immersed in relaxation, they gracefully stretch out, nose twitches at rest, and elegantly lay their ears back on their bodies.
                    </p>
                </div>
            </div>
            <div class="p-4 md:p-8 md:flex bg-slate-100 border-2 rounded-xl">
                <img class="h-32 md:h-48 w-1/2 md:w-1/4 pb-2 md:pb-0 md:pr-4 object-contain mx-auto" src="images/bunny_nervous.png" alt="bunny_nervous">
                <div class="md:w-3/4 flex flex-col justify-center text-center md:text-left">
                    <p class="text-xl font-medium text-sky-700 dark:text-sky-400 pb-3">
                        Nervous
                    </p>
                    <p class="text-lg">
                        If a bunny is scared, it leans away, crouches to hide, and stays ready to run. Their ears fold back. If really scared, they might freeze, run for cover, or get a bit aggressive if stuck.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
