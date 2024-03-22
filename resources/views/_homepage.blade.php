@extends('layout', ['title' => 'Homepage'])

@section('content')
    <div class="mb-4">
        <h1 class="text-3xl font-semibold mb-4">
            Introduction
        </h1>
        <p>
            Meet Beza and Brownie - our two beloved bunnies!
        </p>
        <p class="py-4 leading-8 text-justify">
            Their names come from types of desserts: chocolate Brownie and Meringue, which also correspond to their colours: brown & white. Beza is: agile, curious, and fearless, whereas Brownie is: calm, kind, and cautious. They are both very friendly, hungry, and in need of petting (often together at the same time).
        </p>
        <p class="leading-8 text-justify">
            It was in August 2022 when, just after moving into our new flat, I and my wife Paulina decided to have a bunny. When we saw photos of 6-weeks-old Beza, the decision to make her part of our family was simple and swift :)
        <p class="py-4 leading-8 text-justify">
            However, we quickly concluded that one bunny is not enough. Despite spending time with Beza each day, we could see that she started feeling lonely, especially when I and Paulina were out working.
        <p class="leading-8 text-justify">
            As a result, in January 2023, we adopted 4-year-old Brownie from a foundation. In the beginning, we were afraid that the age difference between Beza and Brownie might become troublesome during their befriending, but fortunately, this was not the case, and they are happily living together now :).
        </p>
    </div>
    <div class="mb-4">
        <h1 class="text-3xl font-semibold mb-4">
            Fun fact about bunnies
        </h1>
        @php
            $funFact = App\Models\FunFact::inRandomOrder()->first();
        @endphp
        <p class="p-4 border-4 border-dashed hover:bg-sky-100 transition-colors rounded-lg">
            <i id="funFact">
                <strong>{{ $funFact['title'] }}:</strong> {{ $funFact['body'] }}
            </i>
        </p>
    </div>
    <div>
        <h1 class="text-3xl font-semibold my-4">
            Should you get a bunny?
        </h1>
        <p class="text-justify pb-2 leading-8">
            Answering this question may not be as easy as it initially seems to be. However, below you can find some factors, which you definitely should consider before getting a bunny:
        </p>
        <div class="float-left px-5">
            <ul>
                <li class="list-disc leading-8">
                    <span class="font-semibold">Patience</span> - be patient, bunnies need time to adapt to new environment.
                </li>
                <li class="list-disc leading-8">
                    <span class="font-semibold">Time</span> - allocate time for bunny play; it makes them happy & fosters trust.
                </li>
                <li class="list-disc leading-8">
                    <span class="font-semibold">Space</span> - give your bunny space - a large cage/playpen and room to run.
                </li>
                <li class="list-disc leading-8">
                    <span class="font-semibold">Money</span> - enough for food, vet, meds, toys, etc.
                </li>
            </ul>
        </div>
        <div class="float-left px-5">
            <ul>
                <li class="list-disc leading-8">
                    <span class="font-semibold">Petting</span> - be ready for ample bunny petting—they adore it!
                </li>
                <li class="list-disc leading-8">
                    <span class="font-semibold">Other pets</span> - avoid having other pets to protect bunnies from fear or harm.
                </li>
                <li class="list-disc leading-8">
                    <span class="font-semibold">Cleaning</span> - bunnies need daily cleaning of their cage and litter boxes.
                </li>
                <li class="list-disc leading-8">
                    <span class="font-semibold">Hygiene</span> - bunnies manage hygiene, but remember to groom and trim their claws.
                </li>
            </ul>
        </div>
        <div class="clear-both"></div>
    </div>
@endsection
