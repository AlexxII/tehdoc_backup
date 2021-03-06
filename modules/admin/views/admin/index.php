<?php

use yii\bootstrap\Nav;
use wbraganca\dynamicform\DynamicFormWidget;
use yii\helpers\Html;
use yii\bootstrap\Modal;
use yii\bootstrap\ActiveForm;
use yii\web\JsExpression;

$this->title = 'Панель администрирования';
$this->params['breadcrumbs'][] = $this->title;

$about = "Панель администрирования";

?>

<style>
  .h-title {
    font-size: 18px;
    color: #1e6887;
  }
</style>

<div class="admin-pannel">
  <h3><?= Html::encode($this->title) . 'TEST'?>
    <sup class="h-title fa fa-question-circle-o" aria-hidden="true"
         data-toggle="tooltip" data-placement="right" title="<?php echo $about ?>"></sup>
  </h3>

</div>

<script>
    $(document).ready(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>
