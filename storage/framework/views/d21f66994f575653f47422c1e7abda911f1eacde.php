<?php foreach($district as $v1): ?>
    <ol class="dd-list dd-list-handle child_ol province_<?php echo $province->id; ?>" style="margin-left:40px;" >
      <li class="dd-item">
        <div class="dd-content box">
          <div>
              <div class="menu_name"><?php echo $v1->name; ?></div>
              <div class="menu_edit">
              <div id="d-district-ajax_<?php echo $v1->id; ?>" class="price_<?php echo $province->id; ?>" style="float:left;padding-right:100px;"><?php echo number_format((int)$province->price,0,'','.'); ?>đ</div>
              </div>
          </div>
        </div>
      </li>
    </ol>
 <?php endforeach; ?>