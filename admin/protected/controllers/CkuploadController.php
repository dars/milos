<?php

class CkuploadController extends Controller
{
	public function actionCKUpload()
	{
		$this->layout = false;
		$file = new Upload($_FILES['upload']);
		if($file->uploaded){
			$uuid = sha1(uniqid('',true));
			$file->file_new_name_body = $uuid;
			$file->process(Yii::app()->basePath.'/../upload/');
			if($file->processed){
				$this->render('index',array(
					'num'=>$_GET['CKEditorFuncNum'],
					'url'=>Yii::app()->request->baseUrl.'/upload/'.$uuid.'.'.$file->file_src_name_ext,
					'msg'=>'檔案已上傳'
				));
			}else{
				echo $file->error;
			}
		}else{
			echo $file->error;
		}
	}
}