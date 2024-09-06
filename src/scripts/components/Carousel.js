import Swiper from "swiper/bundle";

export default class Carousel
{
    constructor(element)
    {
        // Set Values
        this.element = element;
        this.options = {
            slidesPerView: "auto",
            spaceBetween: 0,

            pagination: {
                el: this.element.querySelector('.swiper-pagination'),
                clickable: true,
                type: 'bullets',
            },

            navigation: {
                nextEl: this.element.querySelector('.swiper-button-next'),
                prevEl: this.element.querySelector('.swiper-button-prev'),
            },
        };

        // Call Functions
        this.init();
    }

    init()
    {
        // Call Functions
        this.setOptions();

        // Create Swiper
        new Swiper(this.element, this.options);
    }

    setOptions()
    {
        // Set Values
        const dataset = this.element.dataset;

        // Change Options
        // ------------------

        // SpaceBetween
        if("space" in dataset)
        this.options.spaceBetween = parseFloat(dataset.space);

        // SliderPerView
        if("slides" in dataset)
        this.options.slidesPerView = parseFloat(dataset.slides);

        // Loop
        if("loop" in dataset)
        this.options.loop = true;

        // Autoplay
        if("autoplay" in dataset)
        this.options.autoplay = {
            delay: dataset.autoplay,
            pauseOnMouseEnter: true,
        };

        // Vertical
        if("vertical" in dataset)
        this.options.direction = "vertical";

        // FreeMode
        if("freeMode" in dataset)
        this.options.freeMode = {
            enabled: true,
            sticky: true,
        }

        // Added Settings
        // Recipes
        if("recipes" in dataset)
        this.options.breakpoints = {
            1024: {
                slidesPerView: 3,
            },
            768: {
                slidesPerView: 2.5,
            },
            480: {
                slidesPerView: 1.5,
            }
        }

        // Gallery
        if("gallery" in dataset)
        {
            this.options.slidesPerView = "auto"
        }
    }
}