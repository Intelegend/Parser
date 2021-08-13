<?php

/* @var $this yii\web\View */

use app\models\CommentForm;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Parser';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p> <?php foreach ($rss->channel->item as $item) : ?></p>
    <?= $item->title ?>
    <?= $item->link ?>
    <?= $item->description ?>
    <?= $item->author ?>
    <?= $item->pubDate ?>
    <?php echo "<br>"; ?>
    <?php echo "<br>"; ?>
    <?php
            if (isset($item->enclosure['url'])) {
                echo "<img src = " . $item->enclosure['url'] . " width='200' height='200'";
            }
    ?>
    <?php echo "<br>"; ?>
<?php endforeach; ?>