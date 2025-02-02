document.addEventListener("DOMContentLoaded", function() {
    fetch('/map/getApiKey')
        .then(response => response.json())
        .then(data => {
            if (data.apiKey) {
                const script = document.createElement('script');
                script.src = `//dapi.kakao.com/v2/maps/sdk.js?appkey=${data.apiKey}&autoload=false`;
                script.onload = () => kakao.maps.load(initializeMap);
                document.head.appendChild(script);
            } else {
                console.error("API Key is missing.");
            }
        })
        .catch(error => console.error("Error loading API key:", error));
});

function initializeMap() {
    var mapContainer = document.getElementById('map'),
        mapOption = { 
            center: new kakao.maps.LatLng(35.11465847290701, 128.96877662953457),
            level: 5
        };
    var map = new kakao.maps.Map(mapContainer, mapOption);

    var positions = [
        {
            title: '교수 연구실', 
            latlng: new kakao.maps.LatLng(35.11713167362015, 128.96770098400012)
        },
        {
            title: '학생 연구실', 
            latlng: new kakao.maps.LatLng(35.11578924624616, 128.96629226270247)
        },
    ];
    
    // 마커 이미지의 이미지 주소입니다
    var imageSrc = "https://t1.daumcdn.net/localimg/localimages/07/mapapidoc/markerStar.png"; 
        
    for (var i = 0; i < positions.length; i ++) {
        
        // 마커 이미지의 이미지 크기 입니다
        var imageSize = new kakao.maps.Size(24, 35); 
        
        // 마커 이미지를 생성합니다    
        var markerImage = new kakao.maps.MarkerImage(imageSrc, imageSize); 
        
        // 마커를 생성합니다
        var marker = new kakao.maps.Marker({
            map: map, // 마커를 표시할 지도
            position: positions[i].latlng, // 마커를 표시할 위치
            title : positions[i].title, // 마커의 타이틀, 마커에 마우스를 올리면 타이틀이 표시됩니다
            image : markerImage // 마커 이미지 
        });

        var infowindow = new kakao.maps.InfoWindow({
            content: positions[i].title // 인포윈도우에 표시할 내용
        });

        kakao.maps.event.addListener(marker, 'mouseover', makeOverListener(map, marker, infowindow));
        kakao.maps.event.addListener(marker, 'mouseout', makeOutListener(infowindow));
    }
}

function makeOverListener(map, marker, infowindow) {
    return function() {
        infowindow.open(map, marker);
    };
}

function makeOutListener(infowindow) {
    return function() {
        infowindow.close();
    };
}