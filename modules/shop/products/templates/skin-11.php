<?php

/*

type: layout

name: skin-11

description: skin-11

*/
?>

<?php
$tn = $tn_size;
if (!isset($tn[0]) or ($tn[0]) == 150) {
    $tn[0] = 350;
}
if (!isset($tn[1])) {
    $tn[1] = $tn[0];
}
?>

<?php if (!empty($data)): ?>
    <div class="row shop-products">
        <?php foreach ($data as $item): ?>
            <?php $categories = content_categories($item['id']); ?>

            <?php
            $itemData = content_data($item['id']);
            $itemTags = content_tags($item['id']);

            $in_stock = true;
            if (isset($itemData['qty']) and $itemData['qty'] != 'nolimit' and intval($itemData['qty']) == 0) {
                $in_stock = false;
            }

            ?>

            <?php
            $itemData = content_data($item['id']);
            $itemTags = content_tags($item['id']);

            if (!isset($itemData['label'])) {
                $itemData['label'] = '';
            }
            if (!isset($itemData['label-color'])) {
                $itemData['label-color'] = '';
            }

            $itemData = content_data($item['id']);
            $itemTags = content_tags($item['id']);

            if (!isset($itemData['label'])) {
                $itemData['label'] = '';
            }
            if (!isset($itemData['label-color'])) {
                $itemData['label-color'] = '';
            }
            $itemCats = '';
            if ($categories) {
                foreach ($categories as $category) {
                    $itemCats .= $category['title'] . ', ';
                }
            }
            ?>

            <div class=" mx-auto mx-md-0 col-lg-12 py-2 mb-3 item-<?php print $item['id'] ?>" data-masonry-filter="<?php print $itemCats; ?>" itemscope="" itemtype="<?php print $schema_org_item_type_tag ?>">
                <div class="product h-100 d-flex flex-column position-relative">
                    <div class="d-flex">
                        <?php if (is_array($item['prices'])): ?>
                            <?php foreach ($item['prices'] as $k => $v): ?>
                                <input type="hidden" name="price" value="<?php print $v ?>"/>
                                <input type="hidden" name="content_id" value="<?php print $item['id'] ?>"/>
                                <?php break; endforeach; ?>
                        <?php endif; ?>

                        <?php if ($show_fields == false or in_array('thumbnail', $show_fields)): ?>

                            <div class="col-lg-7 col-md-8 mx-auto col-12" href="<?php print $item['link'] ?>">

                                    <?php if (isset($itemData['label-type']) && $itemData['label-type'] === 'text'): ?>
                                        <div class="position-absolute  top-0 left-0 m-2" style="z-index: 3;">
                                            <div class="badge text-white px-3 pb-1 pt-2 rounded-0" style="background-color: <?php echo $itemData['label-color']; ?>;"><?php echo $itemData['label']; ?></div>
                                        </div>
                                    <?php endif; ?>

                                    <?php if (isset($item['original_price']) and $item['original_price'] != ''): ?>


                                        <?php
                                        $vals2 = array_values($item['prices']);
                                        $val1 = array_shift($vals2);
                                        ?>

                                        <?php
                                        $percentChange = 0;
                                        ?>

                                        <?php if (isset($item['price_discount_percent']) and $item['price_discount_percent']): ?>
                                            <?php
                                            $percentChange = $item['price_discount_percent'];
                                            ?>
                                        <?php endif; ?>
                                        <?php if (isset($itemData['label-type']) && $itemData['label-type'] === 'percent' && $percentChange > 0): ?>

                                            <div class="discount-label">
                                                <span class="discount-percentage">
                                                        <?php echo $percentChange; ?>%
                                                </span>
                                                <span class="discount-label-text"><?php _lang("Discount"); ?></span>
                                            </div>
                                        <?php endif; ?>
                                    <?php endif; ?>

                                    <module type="pictures" template="skin-14" content-id="<?php print $item['id'] ?>"/>
                            </div>
                        <?php endif; ?>

                        <div class="col-lg-5 col-md-4 col-12 pt-3 px-5 mx-auto">
                            <div class="row mt-1">
                                <div class="col">
                                    <?php if ($show_fields == false or in_array('title', $show_fields)): ?>
                                        <a href="<?php print $item['link'] ?>" class="text-dark text-decoration-none">
                                            <h5><?php print $item['title'] ?></h5>
                                        </a>
                                    <?php endif; ?>

                                    <?php if (isset($item['description'])): ?>
                                        <div class="py-4">
                                            <p><?php print $item['description'] ?></p>
                                        </div>
                                    <?php endif; ?>

                                    <div class="price-holder">
                                        <?php if ($show_fields == false or in_array('price', $show_fields)): ?>
                                            <?php if (isset($item['prices']) and is_array($item['prices'])): ?>
                                                <?php
                                                $vals2 = array_values($item['prices']);
                                                $val1 = array_shift($vals2);
                                                ?>

                                                <?php if (isset($item['original_price']) and $item['original_price'] != ''): ?>
                                                <h6 class="price-old mb-0"><?php print currency_format($item['original_price']); ?></h6>
                                                <?php endif; ?>
                                                <h6 class="price mb-0"><?php print currency_format($val1); ?></h6>

                                            <?php endif; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="py-4">
                                    <?php if ($show_fields == false or ($show_fields != false and in_array('add_to_cart', $show_fields))): ?>
                                        <?php if ($in_stock == true): ?>
                                            <a href="javascript:;" onclick="mw.cart.add('.shop-products .item-<?php print $item['id'] ?>');" class="btn btn-primary px-5 btn-lg"> <?php _lang("Buy now", 'templates/big') ?></a>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

<?php if (isset($pages_count) and $pages_count > 1 and isset($paging_param)): ?>
    <module type="pagination" pages_count="<?php echo $pages_count; ?>" paging_param="<?php echo $paging_param; ?>"/>
<?php endif; ?>
