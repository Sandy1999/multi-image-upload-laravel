<h1>Upload Images For Blogs</h1>
<form enctype="multipart/form-data" method="POST" action="/upload">
        <?php echo e(csrf_field()); ?>

    <label for="images[]">Images:</label><br/>
    <input type="file" name="images[]" multiple><br/>
    <button type="submit" name="submit">Upload</button>
</form>