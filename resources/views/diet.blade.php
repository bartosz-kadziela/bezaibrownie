@extends('layout', ['title' => 'Diet'])

@section('content')
    <h1 class="text-3xl font-semibold mb-4">
        What do they eat?
    </h1>
    <div>
        <p class="leading-8 text-justify float-left w-auto md:w-1/2 md:pr-4 pb-8">
            A well-balanced bunny diet is vital for the overall well-being of your bunny. Being herbivores, they flourish on high-fiber hay like Timothy or orchard grass. Integrate fresh greens such as dandelion greens and parsley, keeping pellets to approximately 1/4 cup per 5 pounds of body weight. Treats, like small portions of apple or pear, should be offered in moderation. Adequate hydration is crucial, so ensure a constant supply of fresh water. By monitoring portion sizes and introducing dietary variety, you fulfill their nutritional requirements. This equilibrium in your bunny's diet guarantees not only their immediate happiness but also contributes to their long and healthy life.
        </p>
        <img alt="Synchronized_omnomom" src="images/Synchronized_omnomom.jpg" class="float-right md:pl-4 w-full md:w-1/2 h-72 object-cover pb-8" />
        <div class="clear-both"></div>
    </div>
    <div class="overflow-x-auto">
        <table id="dietTable">
            <thead>
                <tr>
                    <th class="w-1/4">Everyday</th>
                    <th class="w-1/4">2-3x per week</th>
                    <th class="w-1/4">1x per week</th>
                    <th class="w-1/4">Prohibited</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Water</td>
                    <td>Apple</td>
                    <td>Banana</td>
                    <td>Non-fruit sugar</td>
                </tr>
                <tr>
                    <td>Hay</td>
                    <td>Basil</td>
                    <td>Bilberry</td>
                    <td>Grain</td>
                </tr>
                <tr>
                    <td>Selected dried herbs</td>
                    <td>Mint</td>
                    <td>Grape</td>
                    <td>Cereals</td>
                </tr>
                <tr>
                    <td>Twigs</td>
                    <td>Parsley</td>
                    <td>Pear</td>
                    <td>Nuts</td>
                </tr>
                <tr>
                    <td>Dandelion</td>
                    <td>Dill</td>
                    <td>Strawberry</td>
                    <td>Potatoes</td>
                </tr>
                <tr>
                    <td>Timothy</td>
                    <td>Topinambour</td>
                    <td>Beetroot</td>
                    <td>Onion</td>
                </tr>
                <tr>
                    <td>Lanceolate</td>
                    <td>Lovage</td>
                    <td>Lettuce</td>
                    <td>Garlic</td>
                </tr>
                <tr>
                    <td>Broadleaf plantain</td>
                    <td>Hive</td>
                    <td>Cucumber</td>
                    <td>Cabbage</td>
                </tr>
                <tr>
                    <td>Birch leaves</td>
                    <td>Carrot tops</td>
                    <td>Tomato</td>
                    <td>Seeds</td>
                </tr>
                <tr>
                    <td>Strawberry leaves</td>
                    <td>Melissa</td>
                    <td>Pepper</td>
                    <td>Citrus fruits</td>
                </tr>
                <tr>
                    <td>Currant leaves</td>
                    <td>Chicory root</td>
                    <td>Zucchini</td>
                    <td>Corn</td>
                </tr>
                <tr>
                    <td>Nettle</td>
                    <td>Beet greens</td>
                    <td>Yarrow</td>
                    <td>Spinach</td>
                </tr>
                <tr>
                    <td>Echinacea</td>
                    <td>Pumpkin</td>
                    <td>Broccoli</td>
                    <td>Cauliflower</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
