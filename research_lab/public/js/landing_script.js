$(document).ready(function() {
    $("nav a").on("click", function(event) {
        if (this.hash !== "") {
            event.preventDefault();
            var hash = this.hash;
            $("html, body").animate({
                scrollTop: $(hash).offset().top
            }, 800);
        }
    });
});

$(document).ready(function() {
    let currentIndex = 0;
    const items = $('.gallery-item');
    const totalItems = items.length;
    
    function moveGallery() {
        items.removeClass('active');
        currentIndex = (currentIndex + 1) % totalItems;
        items.eq(currentIndex).addClass('active');
    }
    
    setInterval(moveGallery, 3000);
});