export default class Toggle
{
    constructor(element)
    {
       // Set Values
       this.element = element;
       
       // Call Functions
       this.init();
    }

    init()
    {
        // Set Options
        this.setOptions();

        // Add Event Listener
        this.element.addEventListener("click", this.toggleActive.bind(this));
    }

    setOptions()
    {
        const dataset = this.element.dataset;

        // Look For...
        // StartActive
        if("startActive" in dataset)
        this.element.classList.add("is-active");
    }

    toggleActive()
    {
        // Toggle Class
        this.element.classList.toggle("is-active");
    }
}