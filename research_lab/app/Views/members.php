<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M4ML</title>

    <!-- page css -->
    <link rel="stylesheet" href="/css/members_style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/mdb-ui-kit@8.2.0/css/mdb.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    
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
                                <picture>
                                    <source type="image/webp" srcset="<?= $member['image_url'] ?>?width=100 100w">
                                    <img class="rounded-circle" src="<?= $member['image_url'] ?>" alt="<?= $member['name'] ?>" loading="lazy">
                                </picture>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/mdb-ui-kit@8.2.0/js/mdb.umd.min.js"></script>
    <script src="/js/landing_script.js"></script>
</body>
</html>