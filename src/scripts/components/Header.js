export default class Header
{
    constructor(element)
    {
        // Set Values
        this.element = element;
        this.options = {
            threshold: 0,
            hideOnScroll: true,
        };

        this.oldScrollPos = 0;
        this.scrollPos = 0;

        this.html = document.documentElement;

        // Call Init
        this.init();
        this.initNavMobile();
    }

    init()
    {
        // Set Options
        this.setOptions();

        // Add Scroll Event
        window.addEventListener("scroll",this.onScroll.bind(this));
    }

    initNavMobile()
    {
        // Set Buttons
        const toggle = this.element.querySelector(".js-toggle");
        toggle.addEventListener("click", this.onToggleNav.bind(this));
    }

    setOptions()
    {
        if("autoHide" in this.element.dataset)
        this.options.hideOnScroll = false;
        
        if("threshold" in this.element.dataset)
        this.options.threshold = parseFloat(this.element.dataset.threshold);
    }

    onScroll()
    {
        // Set Values
        this.scrollPos = document.scrollingElement.scrollTop;

        // Check the difference between the new and old ScrollPosition
        this.setDirection();

        // Hide Header on Scroll
        if(this.options.hideOnScroll)
        this.setHeaderState();

        // Set Old Scroll Pos
        this.oldScrollPos = this.scrollPos;
    }

    setDirection()
    {
        // Scroll toward the bottom
        if(this.scrollPos >= this.oldScrollPos)
        {
            this.html.classList.add("is-scrolling-down");
            this.html.classList.remove("is-scrolling-up");
        }
        
        // Scroll toward the Top
        else
        {
            this.html.classList.remove("is-scrolling-down");
            this.html.classList.add("is-scrolling-up");
        }
    }

    setHeaderState()
    {
        // Hide Header If Scroll Position is above the Given Threshold
        if(this.scrollPos > document.scrollingElement.scrollHeight * this.options.threshold)
        this.html.classList.add("header-is-hidden");
    
        else
        this.html.classList.remove("header-is-hidden");
    }

    onToggleNav()
    {
        // Toggle class "nav-is-active"
        this.html.classList.toggle("nav-is-active");
        this.html.classList.remove("is-scrolling-down");
    }
}