<html>
    <head>
    <link href="css/report.css" rel="stylesheet">
    </head>

<body>
@extends('adminHomeContent')
    @section('content')
    <section class="home">
        <div class="text">Generate reports</div>

  

 
    <!--   
    <form id="reportForm">
            <label for="startDate">Start Date:</label>
            <input type="date" id="startDate" name="startDate" required>

            <label for="endDate">End Date:</label>
            <input type="date" id="endDate" name="endDate" required>

            <label for="reportType">Report Type:</label>
            <select id="reportType" name="reportType" required>
                <option value="pdf">PDF</option>

     --> 
            
                <!-- Add more options based on your requirements -->
            </select>

            <form action="{{ route('view-pdf') }}" method="post" target="_blank">
	            @csrf
                <div>
                    <button type="button" onclick="generateReport()">Generate Report</button>

                </div>
            </form>

            
        </form>
   
        </section>
    @endsection

</body>  
</html>
