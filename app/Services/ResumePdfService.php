<?php

namespace App\Services;

use App\Data\Resume;
use Barryvdh\DomPDF\Facade\Pdf;

class ResumePdfService
{
    public function generatePdf(Resume $resume)
    {
        return Pdf::loadView ('pdf.resume', compact('resume'))
                                ->download('resume.pdf');

    }

}
