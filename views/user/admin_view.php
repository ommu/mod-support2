<?php
/**
 * Support Feedback Users (support-feedback-user)
 * @var $this yii\web\View
 * @var $this app\modules\support\controllers\UserController
 * @var $model app\modules\support\models\SupportFeedbackUser
 * version: 0.0.1
 *
 * @copyright Copyright (c) 2017 ECC UGM (ecc.ft.ugm.ac.id)
 * @link http://ecc.ft.ugm.ac.id
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @created date 20 September 2017, 15:40 WIB
 * @contact (+62)856-299-4114
 *
 */

use yii\helpers\Html;
use yii\helpers\Url;
use app\libraries\MenuContent;
use yii\widgets\DetailView;

$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Support Feedback Users'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

$this->params['menu']['content'] = [
	['label' => Yii::t('app', 'Back To Manage'), 'url' => Url::to(['index']), 'icon' => 'table'],
	// ['label' => Yii::t('app', 'Update'), 'url' => Url::to(['update', 'id' => $model->id]), 'icon' => 'eye'],
	['label' => Yii::t('app', 'Delete'), 'url' => Url::to(['delete', 'id' => $model->id]), 'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'), 'method' => 'post', 'icon' => 'trash'],
];
?>

<div class="col-md-12 col-sm-12 col-xs-12">
	<div class="x_panel">
		<div class="x_title">
			<h2><?php echo Html::encode($this->title); ?></h2>
			<?php if($this->params['menu']['content']):
			echo MenuContent::widget(['items' => $this->params['menu']['content']]);
			endif;?>
			<ul class="nav navbar-right panel_toolbox">
				<li><a href="#" title="<?php echo Yii::t('app', 'Toggle');?>" class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
				<li><a href="#" title="<?php echo Yii::t('app', 'Close');?>" class="close-link"><i class="fa fa-close"></i></a></li>
			</ul>
			<div class="clearfix"></div>
		</div>
		<div class="x_content">
			<?php echo DetailView::widget([
				'model' => $model,
				'options' => [
					'class'=>'table table-striped detail-view',
				],
				'attributes' => [
					'id',
					'publish',
					[
						'attribute' => 'feedbacks_search',
						'value' => $model->feedbacks->displayname,
					],
					[
						'attribute' => 'user_search',
						'value' => $model->user_id ? $model->user->displayname : '-',
					],
					[
						'attribute' => 'creation_date',
						'value' => !in_array($model->creation_date, ['0000-00-00 00:00:00','1970-01-01 00:00:00']) ? Yii::$app->formatter->format($model->creation_date, 'datetime') : '-',
					],
					[
						'attribute' => 'modified_date',
						'value' => !in_array($model->modified_date, ['0000-00-00 00:00:00','1970-01-01 00:00:00']) ? Yii::$app->formatter->format($model->modified_date, 'datetime') : '-',
					],
					[
						'attribute' => 'modified_search',
						'value' => $model->modified_id ? $model->modified->displayname : '-',
					],
					[
						'attribute' => 'updated_date',
						'value' => !in_array($model->updated_date, ['0000-00-00 00:00:00','1970-01-01 00:00:00']) ? Yii::$app->formatter->format($model->updated_date, 'datetime') : '-',
					],
				],
			]) ?>
		</div>
	</div>
</div>