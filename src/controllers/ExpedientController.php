<?php

class ExpedientController extends Controller
{
  public function actionView($id)
  {
    $expedients = Expedient::findAll($id);

    $this->render('expedient/index', $expedients)
  }
}
