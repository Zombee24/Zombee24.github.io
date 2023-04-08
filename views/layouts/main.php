<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body>
    <?php $this->beginBody() ?>

    <div id='wrap_outer'>
        <div id='wrap'>
            <div id="wrap_inner">

                <header id="header">
                    <div id="header_outer">
                        <div id='header_inner'>
                            <div id="header_logo"><img src="" alt=""></div>
                            <ul class="nav justify-content-end">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="/site/index">Home</a>
                                </li>
                                <?php /*
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="/admin/customers">Customer</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="/admin/products">Products</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="/admin/companies">Companies</a>
                                </li>
                                */ ?>
                            </ul>
                        </div>
                    </div>
                </header>

                <?php /*
                <div id="breadcrumbs">
                    <div id='breadcrumbs_inner'>
                        <?php if (!empty($this->params['breadcrumbs'])) : ?>
                        <?= Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]) ?>
                        <?php endif ?>
                    </div>
                </div>

                <div id="display">
                    <div id="display_inner">
                        <div id="display_panel">
                            <div class="dropdown">
                                <button class="btn btn-outline dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Company Websites
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="https://www.svprx.co.uk/">Summit</a></li>
                                    <li><a class="dropdown-item" href="https://bova.co.uk/">Bova</a></li>
                                    <li><a class="dropdown-item" href="https://www.nvsweb.co.uk/">NVS</a></li>
                                    <li><a class="dropdown-item" href="https://vetordering.com/">Veenak</a></li>
                                    <li><a class="dropdown-item" href="https://www.mipet.com/">MiPet</a></li>
                                </ul>
                                </di>
                            </div>
                        </div>
                    </div>
                </div>
                */?>


                <div id="body">
                    <div id='body_inner'>
                        <main id="main" role="main">
                            <div id="container">
                                <?= Alert::widget() ?>
                                <?= $content ?>
                            </div>
                        </main>
                    </div>
                </div>

                <?php /*
                <div id="afterthought">
                    <div id="afterthought_inner">

                    </div>
                </div>
                */ ?>

                <footer id="footer">
                    <div class="footer_inner">
                        <div class="col-md-6 text-center text-md-start">&copy; VetCare Cheap Compare <?= date('Y') ?>
                        </div>
                    </div>
                </footer>

            </div>
        </div>
    </div>
    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>