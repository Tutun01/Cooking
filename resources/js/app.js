import './bootstrap';
import Alpine from 'alpinejs';

window.Alpine = Alpine;
Alpine.start();

document.addEventListener('DOMContentLoaded', () => {

    if (document.querySelector('#requested_date')) {
        initReservationCalendar();
    }

});

function initReservationCalendar() {
    flatpickr('#requested_date', {
        dateFormat: 'Y-m-d',
        minDate: 'today',
        disable: window.reservedDates || [],
        locale: {
            firstDayOfWeek: 1
        },
        onDayCreate: function (dObj, dStr, fp, dayElem) {
            const date = dayElem.dateObj.toISOString().split('T')[0];
            if ((window.reservedDates || []).includes(date)) {
                dayElem.style.background = '#ddd';
                dayElem.style.color = '#999';
            }
        }
    });

    console.log('Reservation calendar initialized');
}
