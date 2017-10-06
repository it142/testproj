<html>
<head>
    <title>Laravel</title>

    <link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

</head>
<body>
<div class="panel panel-info">
    <div class="panel-heading">
        <h4>Add a new product</h4>
    </div>
    <div class="panel-body">
        <form action="upload" method="post" enctype="multipart/form-data">
            <label>Select image to upload:</label>
            <input type="file" name="filetest"><br />
            <input type="submit" value="Upload photo" name="submit2">

        </form>
    </div>
</div>


</body>
</html>