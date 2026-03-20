<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3>Habit Details</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th width="200">Title</th>
                                <td>{{ $habit->title }}</td>
                            </tr>
                            <tr>
                                <th>Description</th>
                                <td>{{ $habit->description }}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>{{ $habit->status }}</td>
                            </tr>
                            <tr>
                                <th>Target Date</th>
                                <td>{{ $habit->target_date }}</td>
                            </tr>
                            <tr>
                                <th>Created At</th>
                                <td>{{ $habit->created_at->format('M d, Y h:i A') }}</td>
                            </tr>
                            <tr>
                                <th>Updated At</th>
                                <td>{{ $habit->updated_at->format('M d, Y h:i A') }}</td>
                            </tr>
                        </table>

                        <div class="d-flex justify-content-between mt-3">
                            <a href="{{ route('habits.index') }}" class="btn btn-secondary">Back to List</a>
                            <div>
                                <a href="{{ route('habits.edit', $habit->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('habits.destroy', $habit->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this habit?')">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
