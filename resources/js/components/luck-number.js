$(document).ready(function () {

    function getRandomDigit(min, max) {
        return Math.floor(Math.random() * (max - min + 1)) + min;
    }

    function pad(n) {
        return (n < 10) ? ("0" + n) : n;
    }

    $( "#view-n" ).click(function() {
        $( "#recommended-first-n" ).html(getRandomDigit(0, 9));
        $( "#recommended-second-n" ).html(getRandomDigit(0, 9));
    });

});



