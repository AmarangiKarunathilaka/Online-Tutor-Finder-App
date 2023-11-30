<!-- resources/views/reports/tutor_list_pdf.blade.php -->

<h1>Tutor List Report</h1>

<table>
    <thead>
        <tr>
            <th>Tutor ID</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tutors as $tutor)
            <tr>
                <td>{{ $tutor->id }}</td>
                <td>{{ $tutor->name }}</td>
                <td>{{ $tutor->email }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
