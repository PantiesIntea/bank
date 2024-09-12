ymaps.ready(init);
const ATM = [
    [41.287876, 69.299870, 'Торговый квартал Alfraganus'],
    [41.295316, 69.296465, 'Ресторан Sultan Saray'],
    [41.2951835,69.2966895, 'Ресторан Gasthaus'],
    [41.288236, 69.310924, 'Медицинский центр Medikon'],
    [41.292469, 69.299472, 'Школа музыки и искусства'],
    [41.286472, 69.284400, 'Центральная железнодорожная поликлиника']
];
function init() {
    let myMap = new ymaps.Map("map", {
        center: [41.315618, 69.260684],
        zoom: 12,
        controls: []
    }, {
        searchControlProvider: 'yandex#search'
    })

    for (let i = 0; i < ATM.length; i++){
        myPlacemark = new ymaps.Placemark([ATM[i][0], ATM[i][1]], {
            balloonContentBody: '<b>'+ATM[i][2]+'</b>',
        }, {
            iconLayout: 'default#image',
            iconImageHref: 'img/marker.svg',
            iconImageSize: [30, 32],
            iconImageOffset: [-14, -32]
        });
        myMap.geoObjects.add(myPlacemark);
    }

    if($('#map').hasClass('disable-scroll')) {
        myMap.behaviors.disable('scrollZoom')
        myMap.controls.add('zoomControl', {
            size: "large"
        });
    }

    let setCenter = (index) => {
        myMap.balloon.open([ATM[index][0], ATM[index][1]], "<b>"+ATM[index][2]+"</b>", {
            closeButton: true
        });
        myMap.panTo([ATM[index][0], ATM[index][1]], {
            delay: 3000
        });
    }

    $('.maps-list__address').click(function() {
        let index = $(this).data('atm')
        setCenter(index)
    })
    
}




