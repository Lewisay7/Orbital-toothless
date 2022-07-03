$(document).scroll(function() {
    navbarScroll();
});

function navbarScroll() {
    var y = window.scrollY;
    if (y > 10) {
        $('.header').addClass('small');
    } else if (y < 10) {
        $('.header').removeClass('small');
    }
}

function alertuser(){
    var foodname=document.getElementById("food_type").value;
    var grams=document.getElementById("input");
    alert(foodname);
    alertuser(grams)
    
}