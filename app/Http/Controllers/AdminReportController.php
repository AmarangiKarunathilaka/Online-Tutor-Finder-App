public function index()
{
    // Retrieve and prepare the data for the report
    $data = YourModel::all(); // Replace YourModel with your actual model and logic

    // Pass the data to a view or export it
    return view('admin.reports.index', ['data' => $data]);
}
