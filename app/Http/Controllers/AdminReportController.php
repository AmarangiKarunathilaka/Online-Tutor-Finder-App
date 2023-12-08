// app/Http/Controllers/ReportController.php
<?php

use PDF;
use App\Models\studentRegister;
use App\Models\tutorRegister;
use App\Models\Feedback;

class AdminReportController extends Controller {
   
    public function downloadStudentListPDF()
    {
        $students = studentRegister::all();

        $pdf = PDF::loadView('reports.student_list_pdf', compact('students'));

        return $pdf->download('student_list.pdf');
    }

    public function downloadTutorListPDF()
    {
        $tutors = tutorRegister::all();

        $pdf = PDF::loadView('reports.tutor_list_pdf', compact('tutors'));

        return $pdf->download('tutor_list.pdf');
    }

    public function downloadFeedbackCountPDF()
    {
        $feedbackCount = Feedback::count();

        $pdf = PDF::loadView('reports.feedback_count_pdf', compact('feedbackCount'));

        return $pdf->download('feedback_count.pdf');
    }

}


/*class YourControllerName extends Controller {
    public function exportTableToPDF() {
        
        $data = YourModelName::all();

        // Load the view and pass the data
        $pdf = PDF::loadView('your.pdf.view', compact('data'));

        // Set paper size to A4
        $pdf->setPaper('a4', 'landscape');

        // Download the PDF file
        return $pdf->download('table_export.pdf');
    }
}*/

