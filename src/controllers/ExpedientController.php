<?php

class ExpedientController extends Controller
{
  public function actionView($id)
  {
    $expedient = Expedient::find($id);

    if ($expedient['status'] == 'abierta') {
      $download_url = '/download-open-pdf'
      $columns = [
        'status',
        'in_charge',
        'zone',
        'tasks',
        'tools'
      ]
    } elseif ($expedient['status'] == 'cerrada') {
      $download_url = '/download-close-pdf'
      $columns = [
        'status',
        'in_charge',
        'time',
        'price'
      ]
    }

    $this->render('expedient/index', compact( $expedient, $download, $columns ))
  }
}
