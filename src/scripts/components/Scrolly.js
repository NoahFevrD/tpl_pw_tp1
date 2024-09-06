export default class Scrolly
{
    constructor(element)
    {
        // Set Values
        this.element = element;
        this.options = {
            rootMargin: "0px",
            repeat: true,
        };

        // Call init
        this.init();
    }

    init()
    {
        // Call Functions
        this.setOptions();

        // Instantiate Observer
        const observer = new IntersectionObserver(this.watch.bind(this), this.options);

        // Add Scrolly to all Element that got data-scrolly
        const items = this.element.querySelectorAll("[data-scrolly]");
        
        for(let item of items)
        observer.observe(item);
    }

    setOptions()
    {
        if("noRepeat" in this.element.dataset);
        this.repeat = false;
    }

    watch(entries, observer)
    {
        for(let i = 0;i < entries.length;i++)
        {
            const entry = entries[i];
            const target = entry.target;

            if(entry.isIntersecting)
            {
                target.classList.add("is-active");

                if(!this.repeat || "noRepeat" in target.dataset)
                observer.unobserve(target);
            }
        
            else
            target.classList.remove("is-active");
        }
    }
}