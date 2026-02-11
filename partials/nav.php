<?php
$current=basename($_SERVER['PHP_SELF']);
function link_with_lang($file,$lang){
    return $file.'?lang='.urlencode($lang);
}
?>
<header class="site-header">
    <div class="container nav-row" >
        <a href="<?php echo link_with_lang('index.php',$lang);?>" class="brand">
        <img src="assets\images\Logo.png" class="logo" alt="logo" width='100px'>
        <span><?php echo __t('site.name',$t,'University');?></span></a>
        <button class="burger" aria-label="Menu" aria-expanded="false" onclick="toggleMenu">
            <span></span><span></span><span></span>
        </button>
        <nav id="mainNav" class="nav">
            <a href="<?php echo link_with_lang('index.php',$lang);?>" class="<?php echo $current==='index.php'?'active':''; ?>">
            <?php echo __t('nav.home',$t,'HOME'); ?>
            </a>
           <a href="#"><?php echo __t('nav.about',$t,'About'); ?></a>
           <a href="#"><?php echo __t('nav.depts',$t,'Departments'); ?></a>
           <a href="#"><?php echo __t('nav.admissions',$t,'Admissions'); ?></a>
           <a href="#"><?php echo __t('nav.news',$t,'News'); ?></a>
           <a href="#"><?php echo __t('nav.gallary',$t,'Gallery'); ?></a>
           <a href="#"><?php echo __t('nav.contact',$t,'Contects'); ?></a>
           <div class="lang-switch">
            <a href="?lang=en"><?php echo __t('lang.en',$t,'EN'); ?></a>
            <a href="?lang=ps"><?php echo __t('lang.ps',$t,'PS'); ?></a>
            <a href="?lang=fa"><?php echo __t('lang.fa',$t,'FA'); ?></a>
           </div>

        </nav>
    </div>
</header>