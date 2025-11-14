let center = [59.960832, 30.322866];

function init() {
    let map = new ymaps.Map("map", {
        center: center,
        zoom: 15,
    });

    let placeMark = new ymaps.Placemark(
        center,
        {
            balloonContent: `

			Санкт-Петербург, Малая Монетная улица, 5

		`,
        },
        {
            iconLayout: "default#image",
            iconImageHref: "iconDesMap.png",
            iconImageSize: [40, 60.2],
            iconImageOffset: [-19, -44],
        }
    );
    map.controls.remove("geolocationControl"); // удаляем геолокацию
    map.controls.remove("searchControl"); // удаляем поиск
    map.controls.remove("trafficControl"); // удаляем контроль трафика
    // map.controls.remove("typeSelector"); // удаляем тип
    map.controls.remove("fullscreenControl"); // удаляем кнопку перехода в полноэкранный режим
    // map.controls.remove("zoomControl"); // удаляем контрол зуммирования
    map.controls.remove("rulerControl"); // удаляем контрол правил
    // map.behaviors.disable(["scrollZoom"]); // отключаем скролл карты (опционально)
    map.geoObjects.add(placeMark);
}

ymaps.ready(init);
