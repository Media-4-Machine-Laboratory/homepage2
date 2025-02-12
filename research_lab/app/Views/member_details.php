<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M4ML</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="/css/member_details.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- MDB -->
    <link
    href="https://cdn.jsdelivr.net/npm/mdb-ui-kit@8.2.0/css/mdb.min.css"
    rel="stylesheet"
    />
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
    />

    <script src="/js/landing_script.js"></script>
    
</head>
<body>
    <!-- Header -->
    <?php include 'header.php'; ?>

    <!-- Contents -->
    <div class="contents">
        <div class="row">
            <div class="col col-md-4">
                <div class="profile">
                    <div class="profile-box card">
                        <div class="card-body">
                            <div class="profile-box-img">
                                <img src="<?= $member['profile_image'] ?>" />
                            </div>
                            <div class="profile-box-name">
                                <h3>
                                    <?= $member['name'] ?>
                                </h3>
                            </div>
                            <div class="profile-box-contents">
                                <h5 class="text-secondary"><?= $member['role'] ?></h5>
                                <a href="javascript:void(0);" onclick="copyEmail('<?= $member['email'] ?>')"> <p><i class="fas fa-envelope"></i>&nbsp;<?= $member['email'] ?></p></a>
                                <?php if (isset($links['github'])): ?>
                                    <a href="<?= esc($links['github']) ?>" target="_blank">
                                        <p><i class="fab fa-github"></i>&nbsp;Github</p>
                                    </a>
                                <?php endif; ?>
                                <?php if (isset($links['linkedin'])): ?>
                                    <a href="<?= esc($links['linkedin']) ?>" target="_blank">
                                        <p><i class="fab fa-linkedin-in"></i>&nbsp;Linked In</p>
                                    </a>
                                <?php endif; ?>
                                <?php foreach ($links as $key => $link): ?>
                                    <?php if (!in_array($key, ['github', 'linkedin'])): ?>
                                        <a href="<?= $link ?>" target="_blank">
                                            <p><i class="fas fa-globe"></i>&nbsp;&nbsp;<?= $link ?></p>
                                        </a>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-md-8">
                <div class="cv-contents">
                    <object data="http://localhost:8080/pdf/view/cv/sangkyunjeon.pdf" type="application/pdf"></object>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include 'footer.php'; ?>
    <script>
        function copyEmail(email) {
            navigator.clipboard.writeText(email).then(() => {})
        }
    </script>
</body>
</html>