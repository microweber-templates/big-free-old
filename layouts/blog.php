<?php

/*

type: layout
content_type: dynamic
name: Blog
position: 3
description: Blog

*/


?>
<?php include template_dir() . "header.php"; ?>
<div class="container">

    <module   type="breadcrumb" />

</div>
    <div class="edit main-content" data-layout-container rel="content" field="content">
        <module type="layouts" template="blog/skin-1"/>



    </div>

<?php include template_dir() . "footer.php"; ?>
