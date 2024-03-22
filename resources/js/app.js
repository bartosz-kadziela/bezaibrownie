import './bootstrap';
import {DataTable} from "simple-datatables";
import 'glightbox/dist/css/glightbox.min.css';
import GLightbox from 'glightbox';
import 'simple-datatables/dist/style.css';

let currentPath = window.location.pathname;

if (currentPath === "/") {
    var funFactElement = document.getElementById('funFact');

    setInterval(function () {
        axios.get('/api/get-random-fun-fact')
            .then(function (response) {
                funFactElement.innerHTML = '<strong>' + response.data.title + ':</strong> ' + response.data.body
            });
    }, 10000);
}

if (currentPath === "/diet") {
    let options = {
        searchable: true,
        perPage: 25,
    };

    const dataTable = new DataTable("#dietTable", options);
}

if (currentPath === "/gallery") {
    const customLightboxHTML = `<div id="glightbox-body" class="glightbox-container">
        <div class="gloader visible"></div>
        <div class="goverlay"></div>
        <div class="gcontainer !overflow-y-auto">
            <div class="flex relative justify-center flex-col-reverse md:flex-row-reverse md:h-screen">
                <div class="w-full p-8 bg-white md:w-1/3 md:flex-shrink-0">
                    <h2 class="font-bold text-2xl mb-8">
                        Comments
                    </h2>
                    <div id="disqus_thread"></div>
                </div>
                <div id="glightbox-slider" class="gslider md:w-2/3"></div>
            </div>
            <button class="gnext gbtn !top-1/2 md:!right-1/3 md:mr-6" tabindex="0" aria-label="Next">{nextSVG}</button>
            <button class="gprev gbtn !top-1/2" tabindex="1" aria-label="Previous">{prevSVG}</button>
            <button class="gclose gbtn" tabindex="2" aria-label="Close">{closeSVG}</button>
            <div class="block md:hidden absolute bottom-0 left-0 right-0 text-white text-center p-4">
                Scroll down to see comments section ▼
            </div>
        </div>
    </div>`;

    const gLightbox = GLightbox({
        lightboxHTML: customLightboxHTML,
    });

    gLightbox.on('open', () => {
        (function() {
            var d = document, s = d.createElement('script');
            s.src = 'https://bezaibrownie.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
        })();
    });

    gLightbox.on('slide_changed', ({ current }) => {
        DISQUS.reset({
            reload: true,
            config: function () {
                let id = current.slideConfig.title.replaceAll(' ', '-').toLowerCase();

                this.page.url = window.location.origin + '#!' + id;
                this.page.identifier = window.location.pathname + '-' + id;
            },
        });
    });
}

if (currentPath === "/health") {
    var collapsibles = document.getElementsByClassName("collapsible"); // Assign all elements on the page with "collapsible" class to the variable

    for (var i = 0; i < collapsibles.length; i++) { // For each element in collapsibles collection do ...
        collapsibles[i].addEventListener("click", function() { // Add click event listener for current collapsible, represented by i variable
            this.classList.toggle("active"); // Toggle either adds or removes "active" class from button

            var content = this.nextElementSibling; // Assign content element to content variable

            if (content.style.display === "block") { // If content is currently shown, hide it
                content.style.display = "none"; // Change display of content to none, which hides it from the page
            } else { // If content is currently hidden, show it
                content.style.display = "block";
            }
        });
    }
}
