<?php

class ExpedientController extends Controller
{
  public function actionView($id)
  {
    $expedient = Expedient::find($id);

    $this->render('expedient/index', compact( $expedient ))
  }
}
