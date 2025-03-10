document.addEventListener("DOMContentLoaded", function() {
    var map = L.map('map').setView([-6.934469, 107.604953], 12);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);

    var locations = [
        { name: "TPS 1", lat: -6.929543, lng: 107.634506 },
        { name: "TPS 2", lat: -6.945024, lng: 107.605659 },
        { name: "TPS 3", lat: -6.960372, lng: 107.590485 },
    ];

    locations.forEach(function(loc) {
        L.marker([loc.lat, loc.lng])
            .addTo(map)
            .bindPopup(`<b>${loc.name}</b>`)
            .openPopup();
    });
});
