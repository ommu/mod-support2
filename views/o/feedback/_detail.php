<?php
/**
 * Support Feedbacks (support-feedbacks)
 * @var $this FeedbackController
 * @var $model SupportFeedbacks
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2017 Ommu Platform (www.ommu.co)
 * @created date 23 August 2017, 08:49 WIB
 * @modified date 21 March 2018, 08:48 WIB
 * @link https://github.com/ommu/mod-support
 *
 */
?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		array(
			'name'=>'feedback_id',
			'value'=>$model->feedback_id,
		),
		array(
			'name'=>'publish',
			'value'=>$this->quickAction(Yii::app()->controller->createUrl('publish', array('id'=>$model->feedback_id)), $model->publish),
			'type'=>'raw',
		),
		array(
			'name'=>'subject_id',
			'value'=>$model->subject_id ? $model->subject->title->message : '-',
		),
		array(
			'name'=>'user_id',
			'value'=>$model->user->displayname ? $model->user->displayname : '-',
		),
		array(
			'name'=>'email',
			'value'=>$model->email ? $model->email : '-',
		),
		array(
			'name'=>'displayname',
			'value'=>$model->displayname ? $model->displayname : '-',
		),
		array(
			'name'=>'phone',
			'value'=>$model->phone ? $model->phone : '-',
		),
		array(
			'name'=>'message',
			'value'=>$model->message ? $model->message : '-',
			'type'=>'raw',
		),
		array(
			'name'=>'reply_search',
			'value'=>$model->view->reply_condition ? Yii::t('phrase', 'Yes') : Yii::t('phrase', 'No'),
		),
		array(
			'name'=>'reply_message',
			'value'=>$model->reply_message ? $model->reply_message : '-',
			'type'=>'raw',
		),
		array(
			'name'=>'replied_date',
			'value'=>!in_array($model->replied_date, array('0000-00-00 00:00:00','1970-01-01 00:00:00','0002-12-02 07:07:12','-0001-11-30 00:00:00')) ? $this->dateFormat($model->replied_date) : '-',
		),
		array(
			'name'=>'replied_id',
			'value'=>$model->replied_id ? $model->replied->displayname : '-',
		),
		array(
			'name'=>'views_search',
			'value'=>$model->view->views ? $model->view->views : '0',
		),
		array(
			'name'=>'users_search',
			'value'=>$model->view->view_users ? $model->view->view_users : '0',
		),
		array(
			'name'=>'creation_date',
			'value'=>!in_array($model->creation_date, array('0000-00-00 00:00:00','1970-01-01 00:00:00','0002-12-02 07:07:12','-0001-11-30 00:00:00')) ? $this->dateFormat($model->creation_date) : '-',
		),
		array(
			'name'=>'modified_date',
			'value'=>!in_array($model->modified_date, array('0000-00-00 00:00:00','1970-01-01 00:00:00','0002-12-02 07:07:12','-0001-11-30 00:00:00')) ? $this->dateFormat($model->modified_date) : '-',
		),
		array(
			'name'=>'modified_search',
			'value'=>$model->modified->displayname ? $model->modified->displayname : '-',
		),
		array(
			'name'=>'updated_date',
			'value'=>!in_array($model->updated_date, array('0000-00-00 00:00:00','1970-01-01 00:00:00','0002-12-02 07:07:12','-0001-11-30 00:00:00')) ? $this->dateFormat($model->updated_date) : '-',
		),
	),
)); ?>