<?php

class BlogController extends Controller
{
	public function actionIndex()
	{
		if(!empty($_POST)){
			$i=0;
			while($i<7){
				$time = date('Y-m-d H:i:s');
				$model = Content::model()->findByPk($_POST['id'][$i]);
				$model->content = $_POST['content'][$i];
				$model->service = $_POST['service'][$i];
				$model->tips = $_POST['tips'][$i];
				$model->uuid = $_POST['uuid'][$i];
				$model->updated_at = $time;
				$model->save();
				$i++;
			}
			echo '{"success":true}';
		}else{
			$model = Content::model()->findAllByAttributes(array('taxonomy_id'=>22));
			$this->render('index',array('model'=>$model));
		}
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