<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Habit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3>Edit Habit</h3>
                    </div>
                    <div class="card-body">

                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('habits.update', $habit->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <!-- TITLE -->
                            <div class="mb-3">
                                <label for="title" class="form-label">Habit Title</label>
                                <input type="text" 
                                    class="form-control @error('title') is-invalid @enderror"
                                    id="title" 
                                    name="title" 
                                    value="{{ old('title', $habit->title) }}" 
                                    required>
                                @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- DESCRIPTION -->
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea 
                                    class="form-control @error('description') is-invalid @enderror"
                                    id="description" 
                                    name="description">{{ old('description', $habit->description) }}</textarea>
                                @error('description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- STATUS -->
                            <div class="mb-3">
                                <label for="status" class="form-label">Status</label>
                                <select 
                                    class="form-select @error('status') is-invalid @enderror"
                                    name="status" id="status" required>
                                    
                                    <option value="pending" {{ old('status', $habit->status) == 'pending' ? 'selected' : '' }}>Pending</option>
                                    <option value="in_progress" {{ old('status', $habit->status) == 'in_progress' ? 'selected' : '' }}>In Progress</option>
                                    <option value="done" {{ old('status', $habit->status) == 'done' ? 'selected' : '' }}>Done</option>

                                </select>
                                @error('status')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- TARGET DATE -->
                            <div class="mb-3">
                                <label for="target_date" class="form-label">Target Date</label>
                                <input type="date" 
                                    class="form-control @error('target_date') is-invalid @enderror"
                                    id="target_date" 
                                    name="target_date" 
                                    value="{{ old('target_date', $habit->target_date) }}">
                                @error('target_date')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- BUTTONS -->
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('habits.index') }}" class="btn btn-secondary">Cancel</a>
                                <button type="submit" class="btn btn-primary">Update Habit</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>