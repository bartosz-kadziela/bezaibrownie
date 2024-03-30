@extends('layout', ['title' => 'Health'])

@section('content')
    <div class="mb-4">
        <h1 class="text-3xl font-semibold mb-4">
            When should you be concerned about health of your bunny?
        </h1>
        <p class="text-justify pb-2 leading-8">
            Bunnies tend to hide signs of illness, exhibiting subtle behavioral changes as the initial hint of potential health issues. If any concerning changes are noticed, contacting your vet for an appointment is recommended.
        </p>
        <p class="text-justify pb-2 leading-8">
            <span class="underline decoration-solid"> Certain health issues necessitate immediate attention, such as:</span> unresponsiveness, difficulty breathing, refusal to eat or poop, diarrhea, flystrike, trauma, bleeding, seizures. Other symtomps may not be as critical, however still require observation and action if needed.
        </p>
        <div class="flex-col lg:flex-row inline-flex p-2 border-2 border-double">
            <span class="pr-2 pb-2 lg:pb-0 font-medium">Legend: </span>
            <div class="md:flex-row flex-col inline-flex">
                <span class="border-2 bg-orange-200 px-1">Orange</span>
                <span class="px-2">- Potentially dangerous health issues;</span>
            </div>
            <div class="md:flex-row flex-col inline-flex">
                <span class="border-2 bg-red-300 px-1">Red</span>
                <span class="pl-2">- Emergencies/ Very dangerous health issues</span>
            </div>
        </div>
    </div>
    <div class="grid md:grid-cols-2 gap-2">
        <div>
            <button type="button" class="collapsible bg-orange-200">
                <span class="mr-2">
                    Grooming Changes
                </span>
            </button>
            <div class="content leading-8">
                Indicators include dirty fur, soiled ears, excessive scratching, chewing of fur, and wetness around the eyes, chin, or bottom.
            </div>
        </div>
        <div>
            <button type="button" class="collapsible bg-orange-200">
                <span class="mr-2">
                    Changes in Eating Habits
                </span>
            </button>
            <div class="content leading-8">
                This involves alterations in food preferences, exclusive consumption of favorite foods, reduced eating, dropping or peculiar chewing of food.    Complete refusal to eat is considered an emergency.
            </div>
        </div>
        <div>
            <button type="button" class="collapsible bg-orange-200">
                <span class="mr-2">
                    Activity Alterations
                </span>
            </button>
            <div class="content leading-8">
                Noteworthy changes involve decreased activity levels, delayed greetings, aggression, reduced engagement in play, exploration, or interaction.
            </div>
        </div>
        <div>
            <button type="button" class="collapsible bg-orange-200">
                <span class="mr-2">
                    Toilet Habit Changes
                </span>
            </button>
            <div class="content leading-8">
                These involve loss of litter training, increased urination, small or irregularly shaped droppings. Diarrhea or the absence of droppings are considered emergencies.
            </div>
        </div>
        <div>
            <button type="button" class="collapsible bg-red-300">
                <span class="mr-2">
                    Signs of Pain
                </span>
            </button>
            <div class="content leading-8">
                Observable signs encompass sitting huddled or hunched up, tense or semi-closed eyes, reluctance to move, and possible teeth grinding.
            </div>
        </div>
        <div>
            <button type="button" class="collapsible bg-red-300">
                <span class="mr-2">
                    Movement Changes
                </span>
            </button>
            <div class="content leading-8">
                Signs encompass limping, stumbling, dragging back legs, lack of coordination, tilting to one side, or reluctance to move.
            </div>
        </div>
        <div>
            <button type="button" class="collapsible bg-red-300">
                <span class="mr-2">
                    Stomach Pressing (pain)
                </span>
            </button>
            <div class="content leading-8">
                Indications include pressing the stomach to the floor, restlessness, and an inability to find a comfortable sitting or lying spot. Bunny tends to change position very often and is reluctant to playing.
            </div>
        </div>
        <div>
            <button type="button" class="collapsible bg-red-300">
                <span class="mr-2">
                    Seizure
                </span>
            </button>
            <div class="content leading-8">
                Characterized by rapid twitching, kicking, or shaking. The rabbit may stagger or appear disoriented but not necessarily fall over.
            </div>
        </div>
        <div>
            <button type="button" class="collapsible bg-red-300">
                <span class="mr-2">
                    Unresponsiveness
                </span>
            </button>
            <div class="content leading-8">
                Laying on the side limp, floppy, and cold. Some rabbits sleep in this position but will act normally when disturbed.
            </div>
        </div>
        <div>
            <button type="button" class="collapsible bg-red-300">
                <span class="mr-2">
                    Difficulty Breathing
                </span>
            </button>
            <div class="content leading-8">
                Signs include mouth breathing (bunnies usually breathe through their nose), labored breathing, wheezing, or blue lips.
            </div>
        </div>
    </div>
    <div class="pb-4">
        <h1 class="text-3xl font-semibold my-4">
            Bunny vets worth recommending
        </h1>
        <p class="pb-4">
            The following map is showing all the bunny vets near Łódź worth recommending.
        </p>
        <iframe class="w-full h-96"
                referrerpolicy="no-referrer-when-downgrade"
                src="https://www.google.com/maps/d/u/0/embed?mid=11b60a2_uV-DFZaO3akfJ1wrkrYtYuxY&ehbc=2E312F&noprof=1"
                allowfullscreen>
        </iframe>
    </div>
@endsection
