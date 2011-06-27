<?php

class PixController extends Controller
{
	public function actionIndex()
	{
		$this->layout = false;
		$model = new Pix;
		$model->name = $_POST['f'];
		$model->taxonomy_id = $_POST['taxonomy_id'];
		$model->created_at = date('Y-m-d H:i:s');
		if($model->save()){
			echo '{"success":true}';
		}else{
			echo '{"success":false}';
		}
	}
	public function actionView(){
		$this->layout = false;
		$model = Pix::model()->findAllByAttributes(array('taxonomy_id'=>$_GET['id']));
		$this->render('view',array('model'=>$model));
	}
	public function actionDelete(){
		$this->layout = false;
		$model = Pix::model()->deleteByPk($_GET['id']);
		echo '{"success":true}';
	}
	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}