<option class="q-ft-option" value="0" >Chọn Quận , Huyện</option>
<?php foreach($district as $item): ?>
<option data-price="<?php echo $item->price; ?>"  value="<?php echo $item->price; ?>" data-id = "<?php echo $item->id; ?>" ><?php echo $item->name; ?>

	
</option>

<?php endforeach; ?>