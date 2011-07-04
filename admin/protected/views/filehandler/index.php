<?php
$this->widget('application.extensions.Plupload.PluploadWidget', array(
   'config' => array(
       'runtimes' => 'flash,silverlight,browserplus,html5',
       'url' => $this->createUrl('filehandler/upload'),
       'max_file_size' => '30mb',
       'unique_names' => true,
       'filters' => array(
            array('title' => Yii::t('app', 'Images files'), 'extensions' => 'jpg,jpeg,gif,png'),
        ),
       'max_file_number' => 1,
       'autostart' => true,
       'reset_after_upload' => true,
   ),
   'callbacks' => array(
       'UploadComplete' => 'function(up,file){
			window.parent.savePix(file,"'.$_GET['type'].'");
			alert("上傳完成");
			window.parent.$.fancybox.close();
		}',
   ),
   'id' => 'uploader'
));
?>