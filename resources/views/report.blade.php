<html>
    <head>
    <link href="css/report.css" rel="stylesheet">
    </head>

<body>

    <header>
        <h1>Admin Report Download</h1>
    </header>

 
        <form id="reportForm">
            <label for="startDate">Start Date:</label>
            <input type="date" id="startDate" name="startDate" required>

            <label for="endDate">End Date:</label>
            <input type="date" id="endDate" name="endDate" required>

            <label for="reportType">Report Type:</label>
            <select id="reportType" name="reportType" required>
                <option value="pdf">PDF</option>
                <option value="csv">CSV</option>
                <!-- Add more options based on your requirements -->
            </select>

            <button type="button" onclick="generateReport()">Generate Report</button>
        </form>
   

</body>  
</html>
