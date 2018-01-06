<?php
/**
 * Support Feedback Replies (support-feedback-reply)
 * @var $this ReplyController
 * @var $model SupportFeedbackReply
 * @var $form CActiveForm
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2017 Ommu Platform (opensource.ommu.co)
 * @created date 16 February 2017, 16:00 WIB
 * @link https://github.com/ommu/ommu-support
 *
 */

	$this->breadcrumbs=array(
		'Support Feedback Replies'=>array('manage'),
		$model->reply_id=>array('view','id'=>$model->reply_id),
		'Update',
	);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>