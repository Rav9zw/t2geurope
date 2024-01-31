import $ from 'jquery';


$(document).ready(function () {

    let date = $('#draw-date').html();
    let endDate = new Date(date);

    function updateTimer() {
        let now = new Date();
        let difference = endDate - now;

        let days = Math.floor(difference / (1000 * 60 * 60 * 24));
        let hours = Math.floor((difference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        let minutes = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));
        let seconds = Math.floor((difference % (1000 * 60)) / 1000);

        if (days == 0) {
            $('#counter-days').closest('.counter-item-container').addClass('d-none');
            $('#counter-seconds').closest('.counter-item-container').removeClass('d-none');
        } else {
            $('#counter-days').closest('.counter-item-container').removeClass('d-none');
            $('#counter-seconds').closest('.counter-item-container').addClass('d-none');
        }

        $('#counter-days').html(days);
        $('#counter-hours').html(hours);
        $('#counter-minutes').html(minutes);
        $('#counter-seconds').html(seconds);
    }


    setInterval(updateTimer, 1000);
    updateTimer();
});
