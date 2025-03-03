<form action="/server_path" method="post" enctype="multipart/form-data" class="centered-form">
    <div class="avatar-container">
        <img class="avatar" src="" alt="Photo" style="display: none;">
    </div>
    <label>Username</label>
    <br>
    <input type="file" name="avatar" accept="image/*">
    <br>
    <button type="submit">Upload</button>
    <br>
    <textarea class="custom-textarea"></textarea>
    <button type="button" id="loadTextButton">Upload post</button>
</form>