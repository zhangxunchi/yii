<?php
namespace app\models;
use yii\db\ActiveRecord;

class Product extends  ActiveRecord{




    public  $picture;
    public  $color;
    public  $size;

    public  static  function tableName()
    {
        return "{{%product}}";
    }


    public  function attributeLabels()
    {
        return [
            'title'=>'标题',
            'descr'=>'商品描述',
            'price'=>'价格',
            'descr'=>'商品描述',
            'issale'=>'是否促销',
            'ishot'=>'是否热卖',
            'cover'=>'封面图片',
            'promotion'=>'促销价格',
            'stock'=>'库存',
            'cateid'=>'商品类别',
            'texture'=>'材质',
            'technology'=>'工艺处理',
            'style'=>'风格',
            'season'=>'适用季节',
            'thickness'=>'厚薄',
            'site'=>'产地',
        ];
    }

    public  function rules()
    {
        return [
            ['cateid','required','message'=>'分类不能为空'],
            ['title','required','message'=>'标题不能为空'],
            ['price','required','message'=>'单价不能为空'],
            ['issale','required','message'=>'是否促销不能为空'],
            ['ishot','required','message'=>'是否热卖不能为空'],
            ['stock','required','message'=>'库存不能为空'],
            ['promotion','number','message'=>'库存只能是数字'],
            ['descr','required','message'=>'描述不能为空'],
            ['texture','required','message'=>'材质不能为空'],
            ['technology','required','message'=>'工艺处理不能为空'],
            ['style','required','message'=>'风格不能为空'],
            ['season','required','message'=>'适用季节不能为空'],
            ['thickness','required','message'=>'厚薄不能为空'],
            ['site','required','message'=>'产地不能为空'],
        ];
    }



    /*添加*/
    public  function  reg($data){
        if($this->load($data)&&$this->validate()){
            date_default_timezone_set('PRC');
            $this->createtime=date('Y-m-d H:i:s');
            if($this->save(false)){
                return true;
            }
            return false;
        }
        return false;
    }


}