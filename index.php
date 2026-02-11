<?php require __DIR__ .'/config/language.php';?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>" dir="<?php echo $dir; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo __t('site.name',$t,'University');?></title>
    <link rel="stylesheet" href="assets/css/style.css">
    <script defer src="assets/js/app.js"></script>
</head>
<body>
<?php include __DIR__ .'/partials/nav.php';?>
    <main>
        <section class="hero">
            <img class="hero_img" src="assets/images/university.jpeg" alt="CS Compus">
            <div class="hero_text">
                <h1><?php echo __t('hero.titel',$t,'Welcome to Kandahar UNiversity');?></h1>
                <p><?php echo __t('hero.tagline',$t,'Quality Education for every one.');?></p>
                <a href="#"><?php echo __t('cta.learnmore',$t,'Learn More');?></a>
            </div>
        </section>
    </main>
    <?php include __DIR__ .'/partials/footer.php';?>
</body>
</html>