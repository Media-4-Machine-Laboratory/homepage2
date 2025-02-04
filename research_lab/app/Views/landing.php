<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M4ML</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="/css/landing_style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
    <!-- <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=dcf2430e47f4d6e4c7eae6a01045a618"></script> -->
    <script src="/js/landing_script.js"></script>
    
</head>
<body>
    <!-- Header -->
    <?php include 'header.php'; ?>

    <!-- 랜딩 페이지 내용 -->
    <section id="landing">
        <h1>Media For Machine Lab</h1>
        <p>Advancing AI and Machine Learning for Real-World Applications</p>
    </section>

    <!-- 연구실 활동 갤러리 -->
    <section id="gallery">
        <div class="gallery-container" id="gallerySlider">
            <div class="gallery-item active">
                <img src="/images/activity1.jpg" alt="Activity 1">
                <div class="overlay">AI Research Workshop</div>
            </div>
            <div class="gallery-item">
                <video src="/videos/activity2.mp4" muted autoplay loop></video>
                <div class="overlay">Machine Learning Demo</div>
            </div>
            <div class="gallery-item">
                <img src="/images/activity3.jpg" alt="Activity 3">
                <div class="overlay">Robotics & AI</div>
            </div>
        </div>
    </section>

    <!-- 연구실 위치 섹션 -->
    <section id="location">
        <div class="location-container">
            <div id="map" ></div>
            <div class="location-info">
                <h3>교수 연구실</h3>
                <hr>
                <p>부산광역시 OO구 OO동 OOO-OO</p>
                <br>
                <h3>학생 연구실</h3>
                <hr>
                <p>부산광역시 OO구 OO동 OOO-XX</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'footer.php'; ?>

    <script src="/js/map.js"></script>
</body>
</html>
