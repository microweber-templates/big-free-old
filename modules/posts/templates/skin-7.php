<?php

/*

type: layout

name: Posts 7

description: Posts 7

*/
?>

<div class="row py-4 blog-posts-7">
    <?php if (!empty($data)): ?>
        <?php foreach ($data as $item): ?>
            <?php $categories = content_categories($item['id']);

            $itemCats = '';
            if ($categories) {
                foreach ($categories as $category) {
                    $itemCats .= '<small class="text-dark bg-body px-2 py-1   font-weight-bold d-inline-block mb-2 me-2  ">' . $category['title'] . '</small> ';
                }
            }
            ?>

            <div class="mx-auto col-sm-10 mx-md-0 col-md-6 col-lg-6 mb-5" itemscope itemtype="<?php print $schema_org_item_type_tag ?>">
                <div class="   overflow-hidden h-100 d-flex flex-column bg-body hover-  ">
                    <a href="<?php print $item['link'] ?>" class="d-block position-relative">
                        <div class="position-absolute p-4" style="z-index: 9;"><?php echo $itemCats; ?></div>
                        <?php if (!isset($show_fields) or $show_fields == false or in_array('description', $show_fields)): ?>

                        <div class="img-as-background square-75">
                            <img src="<?php print thumbnail($item['image'], 600, 600); ?>" />
                        </div>
                        <?php endif; ?>

                    </a>
                    <div class="d-flex flex-column h-100 px-md-0 px-2 pt-3 pb-5">
                        <?php if (!isset($show_fields) or $show_fields == false or in_array('created_at', $show_fields)): ?>

                        <small class="mb-3 mt-3 d-block  "><?php echo date_system_format($item['created_at']) ; ?></small>

                        <?php endif; ?>

                        <?php if (!isset($show_fields) or $show_fields == false or in_array('title', $show_fields)): ?>
                            <a href="<?php print $item['link'] ?>" class="text-dark text-decoration-none"><h3 class="mb-2"><?php print $item['title'] ?></h3></a>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>

<?php if (isset($pages_count) and $pages_count > 1 and isset($paging_param)): ?>
    <module type="pagination" pages_count="<?php echo $pages_count; ?>" paging_param="<?php echo $paging_param; ?>"/>
<?php endif; ?>
