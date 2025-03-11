document.addEventListener("DOMContentLoaded", function() {
    var map = L.map('map').setView([-6.934469, 107.604953], 12);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);

    var locations = [
        { lat: -6.43022, lng: 108.30191, name: "TPA PECUK INDRAMAYU" },
        { lat: -6.35739, lng: 108.33284, name: "TPA PAPAN SEJAHTERA" },
        { lat: -6.32531, lng: 108.32153, name: "DINAS LH" }
    ];

    locations.forEach(function(loc) {
        L.marker([loc.lat, loc.lng])
            .addTo(map)
            .bindPopup(`<b>${loc.name}</b>`)
            .openPopup();
    });
});
