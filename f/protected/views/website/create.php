<?php
/* @var $this WebsiteController */
/* @var $model Website */

$this->breadcrumbs=array(
	'Websites'=>array('index'),
	'Create',
);

$this->menu=array(
//	array('label'=>'List Website', 'url'=>array('index')),
	array('label'=>'Manage Website', 'url'=>array('admin')),
);
?>

<h1>Create Website</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>