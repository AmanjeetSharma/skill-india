<!-- filepath: c:\College\SEM-6\INT221\admin-panel\resources\views\dashboard\edit.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Course</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Edit Course</h1>
        <form action="{{ route('courses.update', $course->id) }}" method="POST" class="card p-4 shadow-sm">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Title:</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ $course->title }}" placeholder="Enter course title" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description:</label>
                <textarea name="description" id="description" class="form-control" rows="4" placeholder="Enter course description" required>{{ $course->description }}</textarea>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price:</label>
                <input type="number" name="price" id="price" class="form-control" value="{{ $course->price }}" placeholder="Enter course price" required>
            </div>
            <div class="mb-3">
                <label for="category_id" class="form-label">Category ID:</label>
                <input type="number" name="category_id" id="category_id" class="form-control" value="{{ $course->category_id }}" placeholder="Enter category ID" required>
            </div>
            <div class="mb-3">
                <label for="featured" class="form-label">Featured:</label>
                <select name="featured" id="featured" class="form-select" required>
                    <option value="1" {{ $course->featured ? 'selected' : '' }}>Yes</option>
                    <option value="0" {{ !$course->featured ? 'selected' : '' }}>No</option>
                </select>
            </div>
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-success">Update</button>
                <a href="{{ route('courses.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>