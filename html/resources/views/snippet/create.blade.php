<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
</head>
<body>
    <div class="newPostContainer">
        <div class="newPostHeader">
            <img/>
            <span class="newPost">New Post</span>
            <span class="publicPrivate">Public</span>
            <img src="close-icon.svg" alt="Close" id="closeIcon">
        </div>
        <form action="#" method="POST">
            @csrf
            <div>
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" value ="{{ old('name', '') }}" required>
            </div>
            <div>
                <label for="text">Text:</label>
                <input type="text" id="post" name="post" value ="{{ old('name', '') }}" required>
            </div>
            <div>
                <label for="options">Options:</label>
                <select id="options" name="options">
                    <option value="option1">HTML</option>
                    <option value="option2">CSS</option>
                    <option value="option3">JavaScript</option>
                    <option value="option4">PHP</option>
                    <option value="option5">Java</option>
                </select>
            </div>
            <div>
                <button type="submit">Save</button>
                <button type="submit">Post</button>
            </div>
        </form>
    </div>
</body>
</html>
