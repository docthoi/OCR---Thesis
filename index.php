<html>

<body>

    <center>
        <h1>PHP OCR Test</h1>

        <!--    for creating upload button-->
        <form class="box" method="POST" action="upload.php" enctype="multipart/form-data">
            <div class="box__input">
                <input class="box__file" type="file" name="image" id="file" />
                <label for="file"><strong>Choose a file</strong><span class="box__dragndrop"> or drag it here</span>.</label>
                <button class="box__button" type="submit">Upload</button>
            </div>
            <!--    for displaying load animation-->
            <div class="box__uploading">Uploading&hellip;</div>
            <!--    for displaying error if wrong file submitted-->
            <div class="box__error">Error! <span></span>.</div>
        </form>

        <h3>Click the upload button, or choose an image from your hard drive and drag it on the page to upload to the OCR. Our program is designed for instant text digital conversion into a document ready solution. </h3>
        <h4>Accepts .JPG and .PNG files only, one at a time. For best results, use image with normal orientation (no tilting, no skewering) and texts that don't break form.</h4>
        <!--
            <?php
            include_once('config.php');
            $result = mysql_query("SELECT * FROM images");
            while($row = mysql_fetch_array($result))
            {
            echo '<div id="imagelist">';
            echo '<p><img src="'.$row['location'].'"></p>';
            echo '</div>';
            }
            ?>
        -->
    </center>

</body>