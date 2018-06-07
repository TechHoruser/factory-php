<?php

class ClosedExpedient extends Expedient implements ExpedientInterface
{
  public function __construct($expedient)
  {
    // ...
    $this->download_pdf = '/download-closed-pdf'
    $this->form_view = 'expedient/sub/closed'
  }

  public function downloadPdf()
  {
    // ...
  }
}
