<!-----------------Onscroll Bar------------------->
<script>
     let menu = document.querySelector('#menu-bar');
    let head = document.querySelector('.head .navbar');

    menu.onclick = () => {
        head.classList.toggle('active');
    };

    menu.addEventListener('click', () =>{
        menu.classList.toggle('fa-times');
        navbar.classList.toggle('nav-toggle');
    });

    window.onscroll = () => {
        head.classList.remove('active');
        if (window.scrollY > 60) {
            document.querySelector('#menu-bar').classList.add('active');
        } else {
            document.querySelector('#menu-bar').classList.remove('active');
        }
    };
</script>