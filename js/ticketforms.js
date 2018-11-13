'use strict';
// ticket form
window.onload = () => {
    var doc = document,
        bookTicketform = doc.getElementById('bookTicket'),
        bookTicketLink = doc.getElementById('airtickets'),
        bookHotelform = doc.getElementById('searchHotels'),
        bookHotelLink = doc.getElementById('hotelsbooking');

    bookTicketLink.addEventListener('click', () => {
        bookTicketform.classList.toggle('invisible');
    });



}