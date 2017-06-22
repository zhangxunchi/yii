<?php
namespace app\models;
use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;
class Category extends  ActiveRecord{

    public  static  function  tableName()
    {
        return "{{%category}}";
    }

    public  function  attributeLabels()
    {
        return [
            'parentid'=>'上级分类',
            'title'=>'分类名称',
        ];
    }


    /* 验证*/
    public  function  rules()
    {
        return [
            ['parentid','required','message'=>'上级分类不能为空'],
            ['title','required','message'=>'标题名称不能为空'],
            ['creationtime','safe']
        ];
    }


    //分类添加
    public  function  add($data){

        $data['Category']['creationtime']=date("Y-m-d H;i:s"); /*添加时间*/
        if($this->load($data)&&$this->save()){ //载入并且添加成功
            return true;
        }else{
            return false;
        }
    }


    //查询出所有分类
    public  function  getData(){
        $cates=self::find()->all();
        $cates =ArrayHelper::toArray($cates);
        return $cates;
    }

    //对查询出来的分类进行级别显示
    public  function  getTree($cates,$pid=0){
        $tree=[];
        foreach($cates as $cate){
            if($cate['parentid']==$pid){
                $tree[]=$cate;
                $tree=array_merge($tree,$this->getTree($cates,$cate['id']));
            }
        }
        return $tree;
    }




    public  function  getOptions(){
        $data=$this->getData();
        $tree=$this->getTree($data);
        $options=['添加顶级分类'];
        foreach($tree as $cate){
            $options[$cate['id']]=$cate['title'];
        }
        return $options;
    }


    /*分类列表*/
    public  function  getTreeList(){
        $data=$this->getData();
        $tree=$this->getTree($data);
        return $tree;
    }



}