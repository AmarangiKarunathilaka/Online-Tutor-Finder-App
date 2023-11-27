<!--
class YourControllerName extends Controller {
    public function exportTableToPDF() {
        
        $data = YourModelName::all();

        // Load the view and pass the data
        $pdf = PDF::loadView('your.pdf.view', compact('data'));

        // Set paper size to A4
        $pdf->setPaper('a4', 'landscape');

        // Download the PDF file
        return $pdf->download('table_export.pdf');
    }
}
-->