<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;

use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>

    <?php $this->beginBody() ?>

    <div class="wrap">
        <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item active">
                <?= Html::a('Home', ['/site/index'], ['class' => 'nav-link'])?>
            </li>
            <li class="nav-item active">
                <?= Html::a('Videos', ['/site/about'], ['class' => 'nav-link'])?>
            </li>
            <li class="nav-item">
                <?= Html::a('Alternative current', ['/site/contact'], ['class' => 'nav-link'])?>
            </li>
            <li class="nav-item">
                <?= Html::a('Theory of fields', ['/site/new'], ['class' => 'nav-link'])?>
            </li>
            <li class="nav-item">
                <?= Html::a('Discussion', ['/site/login'], ['class' => 'nav-link'])?>
            </li>
            <li class="nav-item">
                <?= Html::a('History', ['/history/index'], ['class' => 'nav-link'])?>
            </li>
        </ul>
        
    </div>
</nav>


<div class="container">
    <?= Breadcrumbs::widget([
        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>

</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-97407974-1', 'auto');
  ga('send', 'pageview');

</script>

<!-- ZERO.kz -->
<span id="_zero_68870">
<noscript>
<a href="http://zero.kz/?s=68870" target="_blank">
<img src="http://c.zero.kz/z.png?u=68870" width="88" height="31" alt="ZERO.kz" />
</a>
</noscript>
</span>

<script type="text/javascript"><!--
var _zero_kz_ = _zero_kz_ || [];
_zero_kz_.push(["id", 68870]);
_zero_kz_.push(["type", 1]);

(function () {
    var a = document.getElementsByTagName("script")[0],
    s = document.createElement("script");
    s.type = "text/javascript";
    s.async = true;
    s.src = (document.location.protocol == "https:" ? "https:" : "http:")
    + "//c.zero.kz/z.js";
    a.parentNode.insertBefore(s, a);
})(); //-->
</script>
<!-- End ZERO.kz -->


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
