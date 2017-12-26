<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Category */
/* @var $form ActiveForm */
?>
<div class="category-add">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'name') ?>
        <?= $form->field($model, 'parent_id')->hiddenInput() ?>
    <?= \liyuze\ztree\ZTree::widget([
        'setting' => '{
			data: {
				simpleData: {
					enable: true,
					pIdKey: "parent_id"
				},
			
			},
			callback: {
				onClick: function(e,treeId, treeNode){
				//1.找到父类Id那个框框
				$("#category-parent_id").val(treeNode.id);
				console.dir(treeNode.id);
				}
			}
		}',
        'nodes' => $cates
    ]);
    ?>
        <?= $form->field($model, 'intro') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- category-add -->