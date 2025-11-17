<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complaints for {{ $official->name }}</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 20px;
            color: #333;
        }
        h2, h3 {
            text-align: center;
            margin-bottom: 10px;
        }
        p {
            text-align: center;
            margin-bottom: 20px;
            font-size: 14px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 30px;
        }
        table, th, td {
            border: 1px solid #333;
        }
        th, td {
            padding: 8px 12px;
            text-align: left;
        }
        th {
            background-color: #6362E7;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .footer {
            text-align: center;
            font-size: 12px;
            margin-top: 40px;
            color: #666;
        }
    </style>
</head>
<body>

    <h2>Black Spot Monitoring System</h2>
    <h3>Complaints ({{ $complaints->count() }}) for Official: {{ $official->name }}</h3>
    <p>
        <strong>Email:</strong> {{ $official->email }} |
        <strong>Phone:</strong> {{ $official->phone }}
    </p>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Description</th>
                <th>Status</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($complaints as $c)
            <tr>
                <td>{{ $c->id }}</td>
                <td>{{ $c->description ?? 'N/A' }}</td>
                <td>{{ $c->complaint_status }}</td>
                <td>{{ $c->created_at->format('d-m-Y H:i') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="footer">
        Generated on {{ now()->format('d-m-Y H:i') }} by Black Spot Monitoring System
    </div>

</body>
</html>