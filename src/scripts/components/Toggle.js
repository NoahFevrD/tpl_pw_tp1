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
        // Add Event Listener
        this.element.addEventListener("click", this.toggleActive.bind(this));
    }

    toggleActive()
    {
        this.element.classList.toggle('is-active');
    }
}