<?php

class OpenedExpedient extends Expedient implements ExpedientInterface
{
  public function __construct($expedient)
  {
    // ...
    $this->download_pdf = '/download-opened-pdf'
    $this->form_view = 'expedient/sub/opened'
  }

  public function downloadPdf()
  {
    // ...
  }
}
