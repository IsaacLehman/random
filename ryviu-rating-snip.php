<?php
// add rating wiget
echo '<div class="ryviu-collection" style="display:block"><ryviu-widget-total
        collection="1"
        product_id = "' . <Your Products ID> . '"
        handle="' . <Your Products Slug> . '"
        reviews_data="'. htmlspecialchars(get_post_meta( <Your Products ID>, 'ryviu_product_reviews_info', true ), ENT_QUOTES, 'UTF-8') .'">
      </ryviu-widget-total></div>';
?>
