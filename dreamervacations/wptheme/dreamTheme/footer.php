<footer class="footer">
  <div class="content has-text-centered">
    <p>
      <strong>Dreamer Vacations LLC</strong> &#8226; <a href="http://www.dreamervacations.tannerjfronk.com/wp-admin/">Login</a>
    </p>
    <div class="socialMedia">
            <span class="icon is-large fa-2x">
                <a href="#"><i class="fab fa-facebook-square"></i></a>
            </span>
            <span class="icon is-large fa-2x">
                <a href="#"><i class="fab fa-youtube-square"></i></a>
            </span>
            <span class="icon is-large fa-2x">
                <a href="#"><i class="fab fa-instagram-square"></i></a>
            </span>
            <span class="icon is-large fa-2x">
                <a href="#"><i class="fab fa-pinterest-square"></i></a>
            </span>
            <span class="icon is-large fa-2x">
                <a href="#"><i class="fab fa-twitter-square"></i></a>
            </span>
        </div>
  </div>
</footer>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        
        // Get all "navbar-burger" elements
        const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

        // Check if there are any navbar burgers
        if ($navbarBurgers.length > 0) {

            // Add a click event on each of them
            $navbarBurgers.forEach( el => {
                el.addEventListener('click', () => {

                // Get the target from the "data-target" attribute
                const target = el.dataset.target;
                const $target = document.getElementById(target);

                // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
                el.classList.toggle('is-active');
                $target.classList.toggle('is-active');
                });
            });
        }
    });
</script>
</body>
</html>