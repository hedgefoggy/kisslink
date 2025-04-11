<?php include 'header.php'; ?>

<button type="submit">Log Out</button>
    <br>
<form action="/" method="post" enctype="multipart/form-data">
    <div class="avatar-container">
        <img src="uploads/avatars" class="avatar" alt="Photo" style="display: none;">
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

