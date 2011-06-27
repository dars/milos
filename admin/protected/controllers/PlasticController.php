<?php

class PlasticController extends Controller
{
	public function actionIndex()
	{
		if(!empty($_POST['Content']['taxonomy_id'])){
			$time = date('Y-m-d H:i:s');
			$this->layout = false;
			$model = Content::model()->findByAttributes(array('taxonomy_id'=>$_POST['Content']['taxonomy_id']));
			if(!$model){
				$model = new Content;
				$_POST['Content']['created_at'] = $time;
			}
			$_POST['Content']['updated_at'] = $time;
			$model->attributes = $_POST['Content'];
			if($model->save()){
				$i = 0;
				if(isset($_POST['his'])){
					$count = count($_POST['his']['id']);
					while($i<$count){
						$model2 = Pix::model()->findByPk($_POST['his']['id'][$i]);
						$model2->content = $_POST['his']['content'][$i];
						$model2->updated_at = $time;
						$model2->save();
						$i++;
					}
				}
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