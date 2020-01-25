$(document).ready(function () {

    function getRandomDigit(min, max) {
        return Math.floor(Math.random() * (max - min + 1)) + min;
    }

    function pad_2d(n) {
        if (n < 10) {
            n = "0" + n;
            if (n == "00") {
                return pad_2d(getRandomDigit(0, 99));
            }
        }
        return n;
    }

    function pad_3d(n) {
        if (n < 10) {
            n = "00" + n;
            if (n == "000") {
                return pad_3d(getRandomDigit(0, 999));
            }
        } else if (n < 100) {
            n = "0" + n;
        }
        return n;
    }

    $("#view-n").click(function () {
        $("#recommended-first-n").html(getRandomDigit(0, 9));
        $("#recommended-second-n").html(getRandomDigit(0, 9));

        $("#2d-n-n1").html(pad_2d(getRandomDigit(0, 99)));
        $("#2d-n-n2").html(pad_2d(getRandomDigit(0, 99)));
        $("#2d-n-n3").html(pad_2d(getRandomDigit(0, 99)));
        $("#2d-n-n4").html(pad_2d(getRandomDigit(0, 99)));
        $("#2d-n-n5").html(pad_2d(getRandomDigit(0, 99)));
        $("#2d-n-n6").html(pad_2d(getRandomDigit(0, 99)));

        $("#3d-n-n1").html(pad_3d(getRandomDigit(0, 999)));
        $("#3d-n-n2").html(pad_3d(getRandomDigit(0, 999)));
        $("#3d-n-n3").html(pad_3d(getRandomDigit(0, 999)));
        $("#3d-n-n4").html(pad_3d(getRandomDigit(0, 999)));
        $("#3d-n-n5").html(pad_3d(getRandomDigit(0, 999)));
        $("#3d-n-n6").html(pad_3d(getRandomDigit(0, 999)));

    });

});



