<?php
function cate_parent ($data, $parent=0, $str='', $select=0){
	foreach($data as $val){
	   $name =$val["name"];
	   $id   =$val["id"];
	   if($val["parent_id"] ==$parent){

	    if($select !=0 && $id == $select){
	      echo "<option value='$id' selected='selected'> $str $name</option>";
	    }
	     else{
	      echo "<option value='$id'> $str $name</option>";
          }
	    cate_parent($data,$id,$str.'--',$select);
 	   }
	  
	}
	
}
function choose_menu_link ($data, $type, $parent=0, $str='', $select='')
{   //dd($data);
	//dd($select);
	foreach($data as $item){
		  $slug = $type.'/'.$item->prefix;
		  $name = $item->name;
		if($item->parent_id ==$parent){
			if($select !='' && $slug == $select){

				 echo "<option value='$slug' selected='selected'> $str $name</option>";
			}
			else{
                echo "<option value='$slug'> $str $name</option>";
			}
			choose_menu_link($data,$type, $item->id,$str.'--', $select );
		}
	}
}
function check_status_order($status){
	switch ($status) {
		case '1':
			echo 'đang đợi';
			break;
		case '2':
			echo 'bị hủy';
			break;
		case '3':
			echo 'đang giao hàng';
			break;
		case '4':
			echo 'đã thanh toán';
			break;
		default:
			echo 'đã nhận hàng';
			break;
		
			
	}
}



function mutiselect ($data, $parent=0, $str='', $selects){
	foreach($data as $k=> $val){
	   $name =$val->name;
	   $id   =$val->id;
	   if($val->parent_id ==$parent){
	  
	   if(in_array($id, $selects)){

	      echo "<option value='$id' selected=''> $str $name</option>";
	    }
	    else{
	      echo "<option value='$id'> $str $name</option>";
          }
	    mutiselect($data,$id,$str.'--',$selects);    	  
	   	
	  }
	  
 }
}

function subMenu($data, $id){
    foreach ($data as $value) {
        if($value['parent_id'] == $id){
        $link = route('view.category.products',['id'=>$value->id,'slug'=>$value->prefix]);
        echo "<li><a href='".$link."''>".$value['name']."</a>";
        subMenu($data, $value['id']);        }
        echo "</li>";
    }
}

function getMenu(){
	$menuAll = DB::table('menus')->get();
	$menuParents = [];
	foreach ($menuAll as $key => $menu) {
		if ($menu->parent_id == 0) {
			array_push($menuParents,$menu);
			unset($menuAll[$key]);
		}
	}
	
	$treeMenus[] = [];
	for ($i= 0; $i < count($menuParents); $i++) { 
		$treeMenus[$i]['menuParents'] = $menuParents[$i];
		
		foreach ($menuAll as $keyMenuAll => $valueMenuAll) {
			// dd($keyMenuAll);
			if ($valueMenuAll->parent_id == $treeMenus[$i]['menuParents']->id) {
				$treeMenus[$i]["child"][$keyMenuAll] = $valueMenuAll;
			}
		}
	}
	
   return $treeMenus;
}

?>