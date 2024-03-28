<script src="//api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
<script>

    ymaps.ready(init);

    function init () {
        let centerMap =[{{ $map_info['geo'] }}]
        var myMap = new ymaps.Map("map_page", {
            // Координаты центра карты
            center: centerMap,
            // Масштаб карты
            zoom: 15,
            // Выключаем все управление картой
            controls: ['geolocationControl','zoomControl']
        });

        var myGeoObjects = [];


        var clusterer = new ymaps.Clusterer({
            clusterDisableClickZoom: false,
            clusterOpenBalloonOnClick: false,
            preset: 'islands#greenClusterIcons',
        });

        myGeoObjects = new ymaps.Placemark([{{ $map_info['geo'] }}],
            {
                hintContent: '<div class="map-hint">{{ $map_info['adress'] }}</div>',
                balloonContent: '<div class="map-hint"><b>{{ $map_info['organization_name'] }}</b> <br/> {{ $map_info['adress'] }} <br/>  {{ $map_info['phone'] }} </div>',
            }, {
                preset: 'islands#icon',
                iconColor: '#2E85B6'
            }

        );
        clusterer.add(myGeoObjects);






        myMap.geoObjects.add(clusterer);
        // Отключим zoom
        myMap.behaviors.disable('scrollZoom');

    }

</script>

<div id="map_page" class="map_page">

</div>
