<?php
namespace app\models;
use yii\db\ActiveRecord;
use app\models;
use Yii;
class Profile extends  ActiveRecord{

    public  static  function  tableName()
    {
        return "{{%profile}}";
    }

}