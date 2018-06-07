<?php

class ExpedientController extends Controller
{
  public function actionView($id)
  {
    $expedient = ExpedientFactory::createById($id);

    $this->render('expedient/index', compact( $expedient ))
  }
}
