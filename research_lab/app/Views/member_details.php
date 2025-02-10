<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M4ML</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="/css/member_details.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
    <script src="/js/landing_script.js"></script>
    
</head>
<body>
    <!-- Header -->
    <?php include 'header.php'; ?>

    <!-- Contents -->
    <div class="contents">
        <p>
        <?= 
            $member['en_name']
        ?>
        </p>
    </div>

    <!-- Footer -->
    <?php include 'footer.php'; ?>
</body>
</html>