<?php

class QandaController extends Controller
{
	public function actionIndex()
	{
		if(!empty($_POST['Content']['taxonomy_id'])){
			$this->layout = false;
			$model = Content::model()->findByAttributes(array('taxonomy_id'=>$_POST['Content']['taxonomy_id']));
			if(!$model){
				$model = new Content;
				$_POST['Content']['created_at'] = date('Y-m-d H:i:s');
			}
			$_POST['Content']['updated_at'] = date('Y-m-d H:i:s');
			$model->attributes = $_POST['Content'];
			if($model->save()){
				echo '{"success":true}';
			}else{
				echo '{"success":false}';
			}
			exit();
		}
		$model = new Content;
		$this->render('index',array('model'=>$model));
	}
	public function actionView(){
		$this->layout = false;
		$model = Content::model()->findByAttributes(array('taxonomy_id'=>$_GET['id']));
		if($model){
			echo CJSON::encode($model);
		}else{
			echo null;
		}
	}
}