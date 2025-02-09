<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M4ML</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="/css/members_style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
    <!-- <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=dcf2430e47f4d6e4c7eae6a01045a618"></script> -->
    <script src="/js/landing_script.js"></script>
    
</head>
<body>
    <!-- Header -->
    <?php include 'header.php'; ?>

    <!-- Contents -->
    <div class="contents">
        <section id="members">
            <div class="members-container">
                <?php
                    $categories = ["Professor", "PhD", "Master", "Undergraduate", "Alumni"];
                    foreach ($categories as $category):
                        $filtered = array_filter($members, fn($m) => $m['role'] == $category);
                        if (count($filtered) > 0):
                ?>
                <div class="member-category">
                    <h3><?= $category ?></h3>
                    <div class="member-list">
                        <?php foreach ($filtered as $member): ?>
                            <div class="member-card">
                                <img src="<?= $member['profile_image'] ?>" alt="<?= $member['name'] ?>">
                                <h4><?= $member['name'] ?></h4>
                                <p><?= $member['email'] ?></p>
                                <a href="/members/<?= $member['en_name'] ?>">View Profile</a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php endif; endforeach; ?>
            </div>
        </section>
    </div>

    <!-- Footer -->
    <?php include 'footer.php'; ?>
</body>
</html>