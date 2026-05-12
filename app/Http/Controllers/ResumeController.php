<?php

namespace App\Http\Controllers;

use App\Data\Resume;
use App\Services\ResumePdfService;
use App\Services\ResumeService;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ResumeController extends Controller
{
    //
    public function __construct(protected readonly ResumeService  $resumeService,
                                protected readonly ResumePdfService $resumePdfService)
    {
    }

    public function index(): view
    {

        $resume = $this->resumeService->getResume();

        return view('resume', compact('resume'));

    }

    public function download()
    {
        $resume = $this->resumeService->getResume();
        return $this->resumePdfService->generatePdf($resume);

    }
}
