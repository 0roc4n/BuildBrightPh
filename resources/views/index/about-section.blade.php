<div class="lg:flex justify-center items-center text-center">
    <p class="text-3xl font-bold text-red-700">Hello, Builder! Get to Know Us</p>
</div>
<div class="flex justify-center mt-4 ">
    <p class="lg:text-center lg:w-3/5 text-xl">
        BUILD BRIGHT PH offers premier hardware shopping and reliable delivery services. Discover how we help you build your dreams.
    </p>
</div>
<div class="mt-10" style="background-image: url('images/abt-bg.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; background-opacitiy: rgba(129, 129, 129, 0.5);">
    <div class="lg:flex pt-10 justify-center p-5 gap-5">
        <div class="lg:w-1/2 bg-gray-400 bg-opacity-80 rounded-md p-5 text-white"  data-aos="fade-right">
            <p class="text-4xl font-bold text-center mt-10">Who is Build Bright PH</p>
            <p class="mt-5 text-xl lg:text-2xl font-semibold lg:tracking-widest p-5 px-10 text-center">
                Founded in the Philippines, Build Bright PH is a rapidly growing hardware store chain dedicated to supplying top-quality hardware and construction materials. With multiple branches nationwide, 
                we provide reliable and innovative solutions to builders, contractors, and DIY enthusiasts.
            </p>
        </div>
        <div class="lg:w-1/2">
            <div class="mt-10" data-aos="fade-left" >
                <div class="accordion-header bg-gray-400 bg-opacity-80 w-full py-3 rounded flex justify-between cursor-pointer">
                    <span class="px-12 text-xl lg:text-3xl text-white font-bold tracking-widest">Our Mission</span>
                    <i class="fa-solid fa-chevron-up text-3xl text-white px-10"></i>
                </div>
                <div class="accordion-content text-white font-semibold lg:text-2xl mt-5 lg:tracking-widest">
                    To empower communities with top-quality hardware and construction materials, 
                    delivering exceptional service and ensuring customer satisfaction.
                </div>
            </div>
            <div class=" mt-10" data-aos="fade-right">
                <div class="accordion-header2 bg-gray-400 bg-opacity-80 w-full py-3 rounded flex justify-between cursor-pointer">
                    <span class="px-12 text-xl lg:text-3xl text-white font-bold tracking-widest">Our Vision</span>
                    <i class="fa-solid fa-chevron-up text-3xl text-white px-10"></i>
                </div>
                <div class="accordion-content2 text-white font-semibold lg:text-2xl mt-5 tracking-widest hidden">
                    To empower communities with top-quality hardware and construction materials, 
                    delivering exceptional service and ensuring customer satisfaction.
                </div>
            </div>  
        </div>    
    </div>
</div>
<script>
    document.querySelector('.accordion-header').addEventListener('click', function() {
    const content = document.querySelector('.accordion-content');
    const icon = this.querySelector('i');
    
    // Toggle visibility of the content
    content.classList.toggle('hidden');
    
    // Toggle the icon between down and up chevron
    if (content.classList.contains('hidden')) {
        icon.classList.remove('fa-chevron-up');
        icon.classList.add('fa-chevron-down');
    } else {
        icon.classList.remove('fa-chevron-down');
        icon.classList.add('fa-chevron-up');
    }
});
document.querySelector('.accordion-header2').addEventListener('click', function() {
    const content = document.querySelector('.accordion-content2');
    const icon = this.querySelector('i');
    
    // Toggle visibility of the content
    content.classList.toggle('hidden');
    
    // Toggle the icon between down and up chevron
    if (content.classList.contains('hidden')) {
        icon.classList.remove('fa-chevron-up');
        icon.classList.add('fa-chevron-down');
    } else {
        icon.classList.remove('fa-chevron-down');
        icon.classList.add('fa-chevron-up');
    }
});

</script>