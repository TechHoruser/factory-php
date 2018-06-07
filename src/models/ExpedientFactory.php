<?php

class ExpedientFactory
{
  /**
  * @param $id integer
  *
  */ return ExpedientInterface|null

  public static function createById($id)
  {
    $expedient = Expedient::find($id);

    if ($expedient->status = 'abierta') {
      return new OpenedExpedient($expedient);
    } else ($expedient->status = 'cerrada') {
      return new ClosedExpedient($expedient);
    }
  }
}
