@extends('layout', ['title' => 'Gallery'])

@section('content')
    <div class="mb-8">
        <h1 class="text-3xl font-semibold mb-4">
            Pictures
        </h1>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-5 gap-4">
        <a href="images/Cage_waiting.jpg" class="glightbox" data-glightbox="title:Cage waiting">
            <img alt="Cage_waiting" src="images/Cage_waiting.jpg" class="hover:opacity-75 transition-opacity duration-500 ease-in-out"/>
        </a>
        <a href="images/New_cage.jpg" class="glightbox" data-glightbox="title:Checking out a new cage">
            <img alt="New_cage" src="images/New_cage.jpg" class="hover:opacity-75 transition-opacity duration-500 ease-in-out"/>
        </a>
        <a href="images/Bathroom_discovering.png" class="glightbox" data-glightbox="title:Bathroom discovering">
            <img alt="Bathroom_discovering" src="images/Bathroom_discovering.png" class="hover:opacity-75 transition-opacity duration-500 ease-in-out"/>
        </a>
        <a href="images/Yumm_pear.jpg" class="glightbox" data-glightbox="title:Yumm pear">
            <img alt="Yumm_pear" src="images/Yumm_pear.jpg" class="hover:opacity-75 transition-opacity duration-500 ease-in-out"/>
        </a>
        <a href="images/Beza_chill_1.png" class="glightbox" data-glightbox="title:Beza chilling in the kitchen">
            <img alt="Beza_chill_1" src="images/Beza_chill_1.png" class="hover:opacity-75 transition-opacity duration-500 ease-in-out"/>
        </a>
        <a href="images/Beza_chill_2.png" class="glightbox" data-glightbox="title:Some more of Beza chilling">
            <img alt="Beza_chill_2" src="images/Beza_chill_2.png" class="hover:opacity-75 transition-opacity duration-500 ease-in-out"/>
        </a>
        <a href="images/Beza_chill_3.jpg" class="glightbox" data-glightbox="title:Even more of Beza chilling">
            <img alt="Beza_chill_3" src="images/Beza_chill_3.jpg" class="hover:opacity-75 transition-opacity duration-500 ease-in-out"/>
        </a>
        <a href="images/Beza_dziumek.png" class="glightbox" data-glightbox="title:Beza dziumek">
            <img alt="Beza_dziumek" src="images/Beza_dziumek.png" class="hover:opacity-75 transition-opacity duration-500 ease-in-out"/>
        </a>
        <a href="images/Beza_exhibition_bunny.png" class="glightbox" data-glightbox="title:Beza exhibition bunny">
            <img alt="Beza_exhibition_bunny" src="images/Beza_exhibition_bunny.png" class="hover:opacity-75 transition-opacity duration-500 ease-in-out"/>
        </a>
        <a href="images/Beza_Omnomnom_1.jpg" class="glightbox" data-glightbox="title:Beza omnomnom">
            <img alt="Beza_Omnomnom_1" src="images/Beza_Omnomnom_1.jpg" class="hover:opacity-75 transition-opacity duration-500 ease-in-out"/>
        </a>
        <a href="images/Beza_omnomnom_3.jpg" class="glightbox" data-glightbox="title: Some more of Beza omnomnom">
            <img alt="Beza_omnomnom_3" src="images/Beza_omnomnom_3.jpg" class="hover:opacity-75 transition-opacity duration-500 ease-in-out"/>
        </a>
        <a href="images/Bunny_zone.png" class="glightbox" data-glightbox="title:Bunny zone">
            <img alt="Bunny_zone" src="images/Bunny_zone.png" class="hover:opacity-75 transition-opacity duration-500 ease-in-out"/>
        </a>
        <a href="images/Bunny_zone_2.jpg" class="glightbox" data-glightbox="title:Bunny zone reconnaissance">
            <img alt="Bunny_zone_2" src="images/Bunny_zone_2.jpg" class="hover:opacity-75 transition-opacity duration-500 ease-in-out"/>
        </a>
        <a href="images/Beza_reconnaissance.png" class="glightbox" data-glightbox="title:Some more reconnaissance">
            <img alt="Beza_reconnaissance" src="images/Beza_reconnaissance.png" class="hover:opacity-75 transition-opacity duration-500 ease-in-out"/>
        </a>
        <a href="images/Discoverer.png" class="glightbox" data-glightbox="title:Discoverer">
            <img alt="Discoverer" src="images/Discoverer.png" class="hover:opacity-75 transition-opacity duration-500 ease-in-out"/>
        </a>
        <a href="images/Kitchen_guard.png" class="glightbox" data-glightbox="title:Kitchen guard">
            <img alt="Kitchen_guard" src="images/Kitchen_guard.png" class="hover:opacity-75 transition-opacity duration-500 ease-in-out"/>
        </a>
        <a href="images/Petting_1.jpg" class="glightbox" data-glightbox="title:Who likes petting?">
            <img alt="Petting_1" src="images/Petting_1.jpg" class="hover:opacity-75 transition-opacity duration-500 ease-in-out"/>
        </a>
        <a href="images/Stretching.png" class="glightbox" data-glightbox="title:Stretching">
            <img alt="Stretching" src="images/Stretching.png" class="hover:opacity-75 transition-opacity duration-500 ease-in-out"/>
        </a>
        <a href="images/They_see_me_rolling.jpg" class="glightbox" data-glightbox="title:They see me rolling">
            <img alt="They_see_me_rolling" src="images/They_see_me_rolling.jpg" class="hover:opacity-75 transition-opacity duration-500 ease-in-out"/>
        </a>
        <a href="images/Tired.png" class="glightbox" data-glightbox="title:Tired">
            <img alt="Tired" src="images/Tired.png" class="hover:opacity-75 transition-opacity duration-500 ease-in-out"/>
        </a>
        <a href="images/Treats_1.jpg" class="glightbox" data-glightbox="title:Treats">
            <img alt="Treats_1" src="images/Treats_1.jpg" class="hover:opacity-75 transition-opacity duration-500 ease-in-out"/>
        </a>
        <a href="images/Meet_brownie_our_new_bunny.png" class="glightbox" data-glightbox="title:Meet Brownie - our new bunny">
            <img alt="Meet_brownie_our_new_bunny" src="images/Meet_brownie_our_new_bunny.png" class="hover:opacity-75 transition-opacity duration-500 ease-in-out"/>
        </a>
        <a href="images/New_homie _in_the_hood.jpg" class="glightbox" data-glightbox="title:New homie in the hood">
            <img alt="images/New_homie _in_the_hood" src="images/New_homie _in_the_hood.jpg" class="hover:opacity-75 transition-opacity duration-500 ease-in-out"/>
        </a>
        <a href="images/Getting_acquainted.jpg" class="glightbox" data-glightbox="title:Getting acquainted">
            <img alt="images/Getting_acquainted" src="images/Getting_acquainted.jpg" class="hover:opacity-75 transition-opacity duration-500 ease-in-out"/>
        </a>
        <a href="images/First_time_chilling_together.jpg" class="glightbox" data-glightbox="title:First time chilling together">
            <img alt="First_time_chilling_together" src="images/First_time_chilling_together.jpg" class="hover:opacity-75 transition-opacity duration-500 ease-in-out"/>
        </a>
        <a href="images/Aerodynamic_Brownie.jpg" class="glightbox" data-glightbox="title:Aerodynamic Brownie">
            <img alt="Aerodynamic_Brownie" src="images/Aerodynamic_Brownie.jpg" class="hover:opacity-75 transition-opacity duration-500 ease-in-out"/>
        </a>
        <a href="images/Got_some_food.jpg" class="glightbox" data-glightbox="title:Got some food?">
            <img alt="Got_some_food" src="images/Got_some_food.jpg" class="hover:opacity-75 transition-opacity duration-500 ease-in-out"/>
        </a>
        <a href="images/Beza_sleeping.jpg" class="glightbox" data-glightbox="title:Beza sleeping">
            <img alt="Beza_sleeping" src="images/Beza_sleeping.jpg" class="hover:opacity-75 transition-opacity duration-500 ease-in-out"/>
        </a>
        <a href="images/Brownie_sleeping.jpg" class="glightbox" data-glightbox="title:Brownie sleeping">
            <img alt="Brownie_sleeping" src="images/Brownie_sleeping.jpg" class="hover:opacity-75 transition-opacity duration-500 ease-in-out"/>
        </a>
        <a href="images/180.jpg" class="glightbox" data-glightbox="title:180">
            <img alt="180" src="images/180.jpg" class="hover:opacity-75 transition-opacity duration-500 ease-in-out"/>
        </a>
        <a href="images/Beza_cleaning_Brownie.jpg" class="glightbox" data-glightbox="title:Beza cleaning Brownie">
            <img alt="Beza_cleaning_Brownie" src="images/Beza_cleaning_Brownie.jpg" class="hover:opacity-75 transition-opacity duration-500 ease-in-out"/>
        </a>
        <a href="images/Imitating_frog.png" class="glightbox" data-glightbox="title:Imitating frog">
            <img alt="Imitating_frog" src="images/Imitating_frog.png" class="hover:opacity-75 transition-opacity duration-500 ease-in-out"/>
        </a>
        <a href="images/Both_tired.jpg" class="glightbox" data-glightbox="title:Both tired">
            <img alt="Both_tired" src="images/Both_tired.jpg" class="hover:opacity-75 transition-opacity duration-500 ease-in-out"/>
        </a>
        <a href="images/Exhausted.jpg" class="glightbox" data-glightbox="title:Exhausted">
            <img alt="Exhausted" src="images/Exhausted.jpg" class="hover:opacity-75 transition-opacity duration-500 ease-in-out"/>
        </a>
        <a href="images/Plush _house.jpg" class="glightbox" data-glightbox="title:Plush house">
            <img alt="Plush _house" src="images/Plush _house.jpg" class="hover:opacity-75 transition-opacity duration-500 ease-in-out"/>
        </a>
        <a href="images/Brownie_and_his_new_house.jpg" class="glightbox" data-glightbox="title:Brownie and his new house">
            <img alt="Brownie_and_his_new_house" src="images/Brownie_and_his_new_house.jpg" class="hover:opacity-75 transition-opacity duration-500 ease-in-out"/>
        </a>
        <a href="images/Chilling_together.jpg" class="glightbox" data-glightbox="title:Chilling together">
            <img alt="Chilling_together" src="images/Chilling_together.jpg" class="hover:opacity-75 transition-opacity duration-500 ease-in-out"/>
        </a>
        <a href="images/Its_safer_under_ear.jpg" class="glightbox" data-glightbox="title:Its safer under ear">
            <img alt="Its_safer_under_ear" src="images/Its_safer_under_ear.jpg" class="hover:opacity-75 transition-opacity duration-500 ease-in-out"/>
        </a>
        <a href="images/Home_sweet_home.jpg" class="glightbox" data-glightbox="title:Home sweet home">
            <img alt="Home_sweet_home" src="images/Home_sweet_home.jpg" class="hover:opacity-75 transition-opacity duration-500 ease-in-out"/>
        </a>
        <a href="images/Brownie_chilling.jpg" class="glightbox" data-glightbox="title:Brownie chilling">
            <img alt="Brownie_chilling" src="images/Brownie_chilling.jpg" class="hover:opacity-75 transition-opacity duration-500 ease-in-out"/>
        </a>
        <a href="images/zzzzzzzz.jpg" class="glightbox" data-glightbox="title:zzzzzzzz">
            <img alt="zzzzzzzz" src="images/zzzzzzzz.jpg" class="hover:opacity-75 transition-opacity duration-500 ease-in-out"/>
        </a>
        <a href="images/just_another_chill.jpg" class="glightbox" data-glightbox="title:just another chill">
            <img alt="just_another_chill" src="images/just_another_chill.jpg" class="hover:opacity-75 transition-opacity duration-500 ease-in-out"/>
        </a>
        <a href="images/Not_that_interesting_match.jpg" class="glightbox" data-glightbox="title:Not that interesting match">
            <img alt="Not_that_interesting_match" src="images/Not_that_interesting_match.jpg" class="hover:opacity-75 transition-opacity duration-500 ease-in-out"/>
        </a>
        <a href="images/Please_more_petting.jpg" class="glightbox" data-glightbox="title:Please more petting">
            <img alt="Please_more_petting" src="images/Please_more_petting.jpg" class="hover:opacity-75 transition-opacity duration-500 ease-in-out"/>
        </a>
        <a href="images/Reporting_from_the_tunnel.jpg" class="glightbox" data-glightbox="title:Reporting from the tunnel">
            <img alt="Reporting_from_the_tunnel" src="images/Reporting_from_the_tunnel.jpg" class="hover:opacity-75 transition-opacity duration-500 ease-in-out"/>
        </a>
        <a href="images/Synchronized_omnomom.jpg" class="glightbox" data-glightbox="title:Synchronized omnomom">
            <img alt="Synchronized_omnomom" src="images/Synchronized_omnomom.jpg" class="hover:opacity-75 transition-opacity duration-500 ease-in-out"/>
        </a>
        <a href="images/thats_some_good_hay.jpg" class="glightbox" data-glightbox="title:thats some good hay">
            <img alt="thats_some_good_hay" src="images/thats_some_good_hay.jpg" class="hover:opacity-75 transition-opacity duration-500 ease-in-out"/>
        </a>
        <a href="images/Very_distinguished.jpg" class="glightbox" data-glightbox="title:Very distinguished">
            <img alt="Very_distinguished" src="images/Very_distinguished.jpg" class="hover:opacity-75 transition-opacity duration-500 ease-in-out"/>
        </a>
        <a href="images/Yummy_pampuch.jpg" class="glightbox" data-glightbox="title:Yummy pampuch">
            <img alt="Yummy_pampuch" src="images/Yummy_pampuch.jpg" class="hover:opacity-75 transition-opacity duration-500 ease-in-out"/>
        </a>
        <a href="images/Kitchen_safeguarding.png" class="glightbox" data-glightbox="title:Kitchen safeguarding">
            <img alt="Kitchen_safeguarding" src="images/Kitchen_safeguarding.png" class="hover:opacity-75 transition-opacity duration-500 ease-in-out"/>
        </a>
        <a href="images/Sleeping_next_to_Brownie.jpg" class="glightbox" data-glightbox="title:Sleeping next to Brownie">
            <img alt="Sleeping_next_to_Brownie" src="images/Sleeping_next_to_Brownie.jpg" class="hover:opacity-75 transition-opacity duration-500 ease-in-out"/>
        </a>
    </div>
    <div class="mt-8 mb-8">
        <h1 class="text-3xl font-semibold mb-4">
            Videos
        </h1>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-5 gap-4 mb-4">
        <a href="videos/First_time_eating.mp4" class="glightbox" data-glightbox="title:First time eating">
            <div class="relative">
                <img src="images/Beza_first_time_eating_video_screen.jpg" alt="First time eating"/>
                <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-25 hover:bg-opacity-50 transition-all">
                    <svg xmlns="http://www.w3.org/2000/svg" width="68" height="68" fill="rgb(203 213 225)" class="cursor-pointer bi bi-play-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                        <path d="M6.271 5.055a.5.5 0 0 1 .52.038l3.5 2.5a.5.5 0 0 1 0 .814l-3.5 2.5A.5.5 0 0 1 6 10.5v-5a.5.5 0 0 1 .271-.445"/>
                    </svg>
                </div>
            </div>
        </a>
        <a href="videos/First_puzzle_solving.mp4" class="glightbox" data-glightbox="title:First puzzle solving">
            <div class="relative">
                <img src="images/First_puzzle_solving_video_screen.jpg" alt="First puzzle solving"/>
                <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-25 hover:bg-opacity-50 transition-all">
                    <svg xmlns="http://www.w3.org/2000/svg" width="68" height="68" fill="rgb(203 213 225)" class="cursor-pointer bi bi-play-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                        <path d="M6.271 5.055a.5.5 0 0 1 .52.038l3.5 2.5a.5.5 0 0 1 0 .814l-3.5 2.5A.5.5 0 0 1 6 10.5v-5a.5.5 0 0 1 .271-.445"/>
                    </svg>
                </div>
            </div>
        </a>
        <a href="videos/Omnomom_video.mp4" class="glightbox" data-glightbox="title:Omnomnom">
            <div class="relative">
                <img src="images/Omnomnom_video_screen.jpg" alt="Omnomnom"/>
                <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-25 hover:bg-opacity-50 transition-all">
                    <svg xmlns="http://www.w3.org/2000/svg" width="68" height="68" fill="rgb(203 213 225)" class="cursor-pointer bi bi-play-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                        <path d="M6.271 5.055a.5.5 0 0 1 .52.038l3.5 2.5a.5.5 0 0 1 0 .814l-3.5 2.5A.5.5 0 0 1 6 10.5v-5a.5.5 0 0 1 .271-.445"/>
                    </svg>
                </div>
            </div>
        </a>
        <a href="videos/Drinking_water.mp4" class="glightbox" data-glightbox="title:Drinking water">
            <div class="relative">
                <img src="images/Drinking_water_video_screen.jpg" alt="Drinking_water"/>
                <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-25 hover:bg-opacity-50 transition-all">
                    <svg xmlns="http://www.w3.org/2000/svg" width="68" height="68" fill="rgb(203 213 225)" class="cursor-pointer bi bi-play-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                        <path d="M6.271 5.055a.5.5 0 0 1 .52.038l3.5 2.5a.5.5 0 0 1 0 .814l-3.5 2.5A.5.5 0 0 1 6 10.5v-5a.5.5 0 0 1 .271-.445"/>
                    </svg>
                </div>
            </div>
        </a>
        <a href="videos/Nap_time.mp4" class="glightbox" data-glightbox="title:Nap time">
            <div class="relative">
                <img src="images/Nap_time_screen_video.jpg" alt="Nap_time"/>
                <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-25 hover:bg-opacity-50 transition-all">
                    <svg xmlns="http://www.w3.org/2000/svg" width="68" height="68" fill="rgb(203 213 225)" class="cursor-pointer bi bi-play-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                        <path d="M6.271 5.055a.5.5 0 0 1 .52.038l3.5 2.5a.5.5 0 0 1 0 .814l-3.5 2.5A.5.5 0 0 1 6 10.5v-5a.5.5 0 0 1 .271-.445"/>
                    </svg>
                </div>
            </div>
        </a>
        <a href="videos/Sniff_toy.mp4" class="glightbox" data-glightbox="title:Sniff toy">
            <div class="relative">
                <img src="images/Sniff_toy_screen_video.jpg" alt="Sniff_toy"/>
                <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-25 hover:bg-opacity-50 transition-all">
                    <svg xmlns="http://www.w3.org/2000/svg" width="68" height="68" fill="rgb(203 213 225)" class="cursor-pointer bi bi-play-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                        <path d="M6.271 5.055a.5.5 0 0 1 .52.038l3.5 2.5a.5.5 0 0 1 0 .814l-3.5 2.5A.5.5 0 0 1 6 10.5v-5a.5.5 0 0 1 .271-.445"/>
                    </svg>
                </div>
            </div>
        </a>
        <a href="videos/Brownie_checking_out_a_new_house.mp4" class="glightbox" data-glightbox="title:Brownie checking out a new house">
            <div class="relative">
                <img src="images/Brownie_checking_out_a_new_house_screen_video.jpg" alt="Brownie checking out a new house"/>
                <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-25 hover:bg-opacity-50 transition-all">
                    <svg xmlns="http://www.w3.org/2000/svg" width="68" height="68" fill="rgb(203 213 225)" class="cursor-pointer bi bi-play-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                        <path d="M6.271 5.055a.5.5 0 0 1 .52.038l3.5 2.5a.5.5 0 0 1 0 .814l-3.5 2.5A.5.5 0 0 1 6 10.5v-5a.5.5 0 0 1 .271-.445"/>
                    </svg>
                </div>
            </div>
        </a>
        <a href="videos/Snacks.mp4" class="glightbox" data-glightbox="title:Snacks">
            <div class="relative">
                <img src="images/Snacks_screen_video.jpg" alt="Snacks"/>
                <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-25 hover:bg-opacity-50 transition-all">
                    <svg xmlns="http://www.w3.org/2000/svg" width="68" height="68" fill="rgb(203 213 225)" class="cursor-pointer bi bi-play-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                        <path d="M6.271 5.055a.5.5 0 0 1 .52.038l3.5 2.5a.5.5 0 0 1 0 .814l-3.5 2.5A.5.5 0 0 1 6 10.5v-5a.5.5 0 0 1 .271-.445"/>
                    </svg>
                </div>
            </div>
        </a>
    </div>
@endsection
