<?php
namespace app\models;
use yii\base\Model;
/*图片添加*/
class UploadImageForm extends Model {
    public $cover;
    public $pics;
    public $picture;

    public function rules() {
        return [
            [['cover'], 'file', 'skipOnEmpty' => false, 'extensions' => 'jpg, png'],
            [['picture'], 'file', 'skipOnEmpty' => false, 'extensions' => 'jpg, png'],
        ];
    }
    public function upload() {
        if ($this->validate()) {
            $this->cover->saveAs('../uploads/' . $this->cover->baseName . '.' .
                $this->cover->extension);



            $this->picture->saveAs('../uploads/' . $this->pics->baseName . '.' .
                $this->picture->extension);

            return true;
        } else {
            return false;
        }
    }
}