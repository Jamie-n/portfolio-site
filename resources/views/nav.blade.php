<div class="min-h-screen lg:relative px-8 hidden md:block" id="nav-links">
    <div class="centered">
        <x-nav-link href="{{route('index')}}" name="Home" icon="fas fa-home" alt-text="Home icon"/>
        <x-nav-link href="{{route('employment.index')}}" name="Employment" icon="fas fa-briefcase" alt-text="Experience icon"/>
        <x-nav-link href="{{route('education.index')}}" name="Education" icon="fas fa-school" alt-text="Eduction icon"/>
        <x-nav-link href="{{route('projects.index')}}" name="Projects" icon="fas fa-computer" alt-text="Project icon"/>
    </div>

    <div class="absolute bottom-2">
        <div class="gap-6 flex">
            <x-nav-link icon="fab fa-linkedin-in text-white text-2xl hover:text-black ease-in-out duration-100" href="https://www.linkedin.com/in/jamie-neighbours/" rel="noreferrer" target="_blank" alt-text="LinkedIn Icon"/>
            <x-nav-link icon="fab fa-github text-white text-2xl hover:text-black ease-in-out duration-100" href="https://github.com/Jamie-n" rel="noreferrer" target="_blank" alt-text="GitHub Icon"/>
        </div>
    </div>
</div>

<script>
    let sidebar = false;

    $('#show_hide_button').click(function () {
        if (sidebar) {
            hide()
            sidebar = false;
        } else {
            show()
            sidebar = true;
        }
    })


    function hide() {
        $("#sidebar").animate({
            width: 0
        }, 300);

        setTimeout(function() {
            $("#sidebar").addClass('hidden').removeClass('fixed')
        }, 300);
    }

    function show() {
        $("#sidebar").addClass('fixed').removeClass('hidden')
        $("#sidebar").animate({
            width: $(window).width()
        }, 500);

        setTimeout(function() {
            $("#nav-links").delay(600).removeClass('hidden')
        }, 200);

    }
</script>
