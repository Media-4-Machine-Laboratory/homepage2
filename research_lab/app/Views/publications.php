<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M4ML</title>

    <!-- page css -->
    <link rel="stylesheet" href="/css/publications.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/mdb-ui-kit@8.2.0/css/mdb.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
</head>
<body>
    <!-- Header -->
    <?php include 'header.php'; ?>

    <!-- Contents -->
    <div class="contents">
        <!-- Tabs navs -->
        <ul class="nav nav-tabs nav-justified mb-3" id="publication-tabs" role="tablist">
            <li class="nav-item" role="presentation">
                <a
                data-mdb-tab-init
                class="nav-link active"
                id="journal-tab-link"
                data-mdb-toggle="tab"
                role="tab"
                aria-controls="#journal-tab"
                aria-selected="true"
                >Journal</a>
            </li>
            <li class="nav-item" role="presentation">
                <a
                data-mdb-tab-init
                class="nav-link"
                id="conference-tab-link"
                data-mdb-toggle="tab"
                role="tab"
                aria-controls="#conference-tab"
                aria-selected="false"
                >Conference</a>
            </li>
            <li class="nav-item" role="presentation">
                <a
                data-mdb-tab-init
                class="nav-link"
                id="patent-tab-link"
                data-mdb-toggle="tab"
                role="tab"
                aria-controls="#patent-tab"
                aria-selected="false"
                >Patent</a>
            </li>
        </ul>

        <!-- Tabs content -->
        <div class="tab-content" id="publication-content">
            <div class="tab-pane fade show active" id="journal-tab" role="tabpanel" aria-labelledby="journal-tab-link">
                <div class="container">
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <?php foreach($journal as $value): ?>
                            <div class="col">
                                <div class="card h-100">
                                    <?php if (!empty($value['paper'])): ?>
                                        <img src="<?= $value['paper'] ?>" class="card-img-top" />
                                    <?php else: ?>
                                        <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/041.webp" class="card-img-top">
                                    <?php endif; ?>
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            <?= $value['title'] ?>
                                            <?php if (strpos($value['venue'], '(KCI)') !== false): ?>
                                                <span class="badge rounded-pill badge-success">KCI</span>
                                            <?php endif; ?>
                                            <?php if (strpos($value['venue'], '(SCI)') !== false): ?>
                                                <span class="badge rounded-pill badge-primary">SCI</span>
                                            <?php endif; ?>
                                            <?php if (strpos($value['venue'], '(SCIE)') !== false): ?>
                                                <span class="badge rounded-pill badge-info">SCIE</span>
                                            <?php endif; ?>
                                        </h5>
                                        <ul class="list-group list-group-light list-group-small">
                                            <li class="list-group-item">
                                                <?= $value['authors'] ?>
                                            </li>
                                            <li class="list-group-item">
                                                <?= $value['venue'] ?>, <?= substr($value['publish_date'], 0, 7) ?>
                                            </li>
                                            <?php if($value['links'] !== ''): ?>
                                                <li class="list-group-item">
                                                    <a href="<?= $value['links'] ?>">See Paper</a>
                                                </li>
                                            <?php endif; ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="conference-tab" role="tabpanel" aria-labelledby="conference-tab-link">
                <div class="container">
                    <div class="row">
                        <?php foreach($conference as $value): ?>
                            <div class="col-xl-6 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center">
                                                <div class="ms-3">
                                                    <p class="fw-bold mb-1"><?= $value['title'] ?></p>
                                                    <?php if ($value['en_title'] !== ''): ?>
                                                        <small class="text-muted mb-0"><?= $value['en_title'] ?></small>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <span class="badge rounded-pill badge-primary"><?= $value['venue'] ?></span>
                                        </div>
                                        <br>
                                        <ul class="list-group list-group-light list-group-small ms-3">
                                            <li class="list-group-item">
                                                <?= $value['authors'] ?>
                                            </li>
                                            <li class="list-group-item">
                                                <?= substr($value['publish_date'], 0, 7) ?>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="accordion accordion-borderless" id="accordion-<?= $value['id'] ?>">
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="headingPaper-<?= $value['id'] ?>">
                                                            <button data-mdb-collapse-init class="accordion-button" type="button"
                                                            data-mdb-toggle="collapse"
                                                            data-mdb-target="#collapsePaper-<?= $value['id'] ?>" aria-expanded="false" aria-controls="#collapsePaper-<?= $value['id'] ?>">
                                                                See Paper
                                                            </button>
                                                        </h2>
                                                        <div id="collapsePaper-<?= $value['id'] ?>" class="accordion-collapse collapse" aria-labelledby="headingPaper-<?= $value['id'] ?>" data-mdb-parent="#accordion-<?= $value['id'] ?>">
                                                            <div class="accordion-body">
                                                                <?php if (!empty($value['paper'])): ?>
                                                                    <img src="<?= $value['paper'] ?>" class="card-img-top" />
                                                                <?php else: ?>
                                                                    No Image Available
                                                                <?php endif; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="accordion accordion-borderless" id="accordion-<?= $value['id'] ?>">
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="headingPoster-<?= $value['id'] ?>">
                                                            <button data-mdb-collapse-init class="accordion-button" type="button"
                                                            data-mdb-toggle="collapse"
                                                            data-mdb-target="#collapsePoster-<?= $value['id'] ?>" aria-expanded="false" aria-controls="#collapsePoster-<?= $value['id'] ?>">
                                                                See Poster
                                                            </button>
                                                        </h2>
                                                        <div id="collapsePoster-<?= $value['id'] ?>" class="accordion-collapse collapse" aria-labelledby="headingPoster-<?= $value['id'] ?>" data-mdb-parent="#accordion-<?= $value['id'] ?>">
                                                            <div class="accordion-body">
                                                                <?php if (!empty($value['poster'])): ?>
                                                                    <img src="<?= $value['poster'] ?>" class="card-img-top" />
                                                                <?php else: ?>
                                                                    No Image Available
                                                                <?php endif; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="patent-tab" role="tabpanel" aria-labelledby="patent-tab-link">
                <?php foreach($patent as $value): ?>
                    <?= $value['title'] ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include 'footer.php'; ?>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/mdb-ui-kit@8.2.0/js/mdb.umd.min.js"></script>
    <script src="/js/landing_script.js"></script>
    <script>
        $(document).ready(function () {
            $(".nav-link").on("click", function (e) {
                e.preventDefault(); // 기본 동작 방지

                // 현재 클릭된 탭 활성화
                $(".nav-link").removeClass("active");
                $(this).addClass("active");

                // 연결된 컨텐츠 ID 가져오기
                var targetTab = $(this).attr("aria-controls");

                // 모든 탭 콘텐츠에서 show, active 제거
                $(".tab-pane").removeClass("show active");

                // 클릭한 탭에 연결된 콘텐츠에 show, active 추가
                $(targetTab).addClass("show active");
            });
        });
    </script>
</body>
</html>