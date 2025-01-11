<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Photo</title>
</head>
<body>
    <h1>Upload a Photo</h1>
    <form action="{{ route('photo.upload') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="photo">Choose a photo:</label>
        <input type="file" name="photo" id="photo" required>
        <button type="submit">Upload</button>
    </form>
</body>
</html>
