<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset("bootstrap/css/bootstrap.css")}}">
    <title>Demo Hello World</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

</head>
<body>
<h1>Staff list</h1>
<div class="container-fluid">
    <table class="table table-striped pl-2 pr-2">
        <thead>
        <tr class="success">
            <th>ID</th>
            <th>Full Name</th>
            <th>Phone Number</th>
            <th>Birthday</th>
            <th>Gender</th>
            <th>Department</th>
            <th>Position</th>
            <th>Certification</th>
            <th>Salary</th>
            <th>Strength</th>
            <th>Joining Date</th>
            <th>Active</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($staffs as $staff)
            <tr>
                <td>{{ $staff->staff_id}}</td>
                <td>{{$staff->name}}</td>
                <td>{{$staff->tel}}</td>
                <td>{{$staff->birthday}}</td>
                <td>{{$staff->gender}}</td>
                <td>{{ $staff->department_id}}</td>
                <td>{{ $staff->position_id}}</td>
                <td>{{ $staff->certification_id}}</td>
                <td>{{ $staff->salary_id}}</td>
                <td>{{ $staff->strength}}</td>
                <td>{{ $staff->enrollment_date}}</td>
                <td>{{ $staff->active}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $staffs->links() }}
</div>
</body>
</html>
