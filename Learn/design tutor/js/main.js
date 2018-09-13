(function(){
    var menu = document.querySelector('ul'),
        menulink = document.getElementById('navbar_toggler');

    menulink.addEventListener('click', function(e){
        menu.classList.toggle('active');
        e.preventDefault();
    })
})();