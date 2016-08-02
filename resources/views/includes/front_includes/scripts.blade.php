<!-- jQuery -->
<script src="{{ asset('/assets/js/jquery.js') }}"></script>
<script src="{{ asset('/assets/js/modernizr.custom.js') }}"></script>
<script src="{{ asset('/assets/js/classie.js') }}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('/assets/js/bootstrap.min.js') }}"></script>

<!-- Script to Activate the Carousel -->
<script>
    $('.carousel').carousel({
        interval: 15000, //changes the speed
        paginationSpeed:5000,
        easing:5000
    })
</script>

<script>

    /* When the user clicks on the button,
     toggle between hiding and showing the dropdown content */
    function myFunction() {
        document.getElementById("drp-dwn").classList.toggle("show");
    }

    // Close the dropdown menu if the user clicks outside of it
    window.onclick = function(event) {
        if (!event.target.matches('.drp-btn')) {

            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }
</script>