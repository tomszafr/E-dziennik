<?php

class PolskiController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
						'actions'=>array('index','view','admin', 'update'),
						'expression' => array($this,'allowTeacher')
			),
			array('deny',  // deny all users
						'actions'=>array('index', 'view', 'create', 'update', 'admin','delete'),
						'users'=>array('*'),
				),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Polski;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Polski']))
		{
			$model->attributes=$_POST['Polski'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_u));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Polski']))
		{
			$model->attributes=$_POST['Polski'];
			if($model->save())
				$this->redirect(array('admin'));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Polski');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Polski('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Polski']))
			$model->attributes=$_GET['Polski'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Polski the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Polski::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Polski $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='polski-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	/**
	 * Translates subjects from full names to table names and the other way around
	 * @param string $subj subject string
	 * @return <string>
	 */
	public function getSubjLabel($subj) {
		$labels=array(
				'polski' => 'J. polski',
				'matematyka' => 'Matematyka',
				'J. polski' => 'polski',
				'Matematyka' => 'matematyka',
		);
		return $labels[$subj];
	}
	/**
	 * Get email adress of the teacher of given subject
	 * @param string $subj chosen subject
	 */
	public function getMail($subj) {
		$subjN = $this->getSubjLabel($subj);
		$teacher = Nauczyciele::model()->find(array(
				'condition'=>'t.przedmiot=:przedmiot',
				'params'=>array(':przedmiot'=>$subjN),
		));
		return $teacher->ma;
	}
	/**
	 * Check whether the user teaches this subject
	 * @return boolean
	 */
	public function allowTeacher(){
		if(Yii::app()->user->level == 'n' && Yii::app()->user->subjN == 'polski') {
			return true;
		} else {
			return false;
		}
	}
}
