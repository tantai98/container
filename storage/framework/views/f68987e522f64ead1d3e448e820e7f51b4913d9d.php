  <style type="text/css">
  .nav-text{
    font-size: 10pt;
    font-family: 'Roboto';
  }
  .nav-text::first-letter{
    text-transform: uppercase;
  }

</style>
  <ul class="nav" ui-nav>
   
    <li ui-sref-active="active">
      <a href="<?php echo e(url('quan-tri')); ?>" ui-sref="app.dashboard">
        <span class="nav-icon">
          <i class="material-icons">&#xe3fc;<span ui-include="'<?php echo e(asset('backend/assets/images/i_1.svg')); ?>'"></span></i>
        </span>
        <span class="nav-text">Bảng quản trị</span>
      </a>
    </li>
    <?php if(session('admin')->can('dev')): ?>
    <li>
      <a>
        <span class="nav-caret">
          <i class="fa fa-caret-down"></i>
        </span>   
       
        <span class="nav-icon">
          <i class="material-icons">&#xe8e8;<span ui-include="'<?php echo e(asset('backend/assets/images/i_1.svg')); ?>'"></span></i>
        </span>
        <span class="nav-text">DEV Layout</span> 
      </a>
      <ul class="nav-sub">
        <li ui-sref-active="active">
          <a href="<?php echo e(route('layout.add-group')); ?>"><span class="nav-text">Create Group Layout</span></a>
        </li>
         <?php $layout_list = DB::table('group_layouts')->get();?>
        <?php foreach($layout_list as $item): ?>
        <li ui-sref-active="active">
          <a href="<?php echo e(route('layout.view',['id'=>$item->id])); ?>"><span class="nav-text"><?php echo e($item->name); ?></span></a>
        </li>
        <?php endforeach; ?>

      </ul>
    </li>
    <li>
      <a>
        <span class="nav-caret">
          <i class="fa fa-caret-down"></i>
        </span>
       
        <span class="nav-icon">
          <i class="material-icons">&#xe8b9;<span ui-include="'<?php echo e(asset('backend/assets/images/i_1.svg')); ?>'"></span></i>
        </span>
        <span class="nav-text">DEV Config</span>
      </a>
      <ul class="nav-sub">
        <li ui-sref-active="active">
          <a href="<?php echo e(route('dev.slide')); ?>"><span class="nav-text">Tạo Slide</span></a>
        </li>
        <li ui-sref-active="active">
          <a href="<?php echo e(route('dev.list.category')); ?>"><span class="nav-text">Category Bài viết</span></a>
        </li>
         <li ui-sref-active="active">
          <a href="<?php echo e(route('dev.list.category.product.super')); ?>"><span class="nav-text">Category Sản phẩm</span></a>
        </li>
         <li ui-sref-active="active">
          <a href="<?php echo e(route('admin.config')); ?>"><span class="nav-text">Thông tin hệ thống</span></a>
        </li>
         <li ui-sref-active="active">
          <a href="<?php echo e(route('admin.config.font')); ?>"><span class="nav-text">Font chữ</span></a>
        </li>
         <li ui-sref-active="active">
          <a href="<?php echo e(route('admin.config.frame')); ?>"><span class="nav-text">Frame Sản Phẩm</span></a>
        </li>
        <?php $idadmin= App\Admins::where('id','>', 1)->first();?>
        <?php if($idadmin): ?>
        <li ui-sref-active="active">
          <a href="<?php echo e(route('editor.user.add',['id'=> $idadmin->id])); ?>"><span class="nav-text">Phân quyền cho admin</span></a>
        </li>
        <?php endif; ?>
       
        <li ui-sref-active="active">
          <a href="<?php echo e(route('dev.form')); ?>"><span class="nav-text">Tạo Form</span></a>
        </li>
        <li ui-sref-active="active">
          <a href="<?php echo e(route('dev.thumbnail')); ?>"><span class="nav-text">Thumbnail ảnh</span></a>
        </li>
      </ul>
    </li>
    <?php endif; ?>
     <?php if(session('admin')->can(['them_san_pham', 'sua_san_pham', 'luu_san_pham', 'xoa_san_pham', 'them_danh_muc_san_pham', 'sua_danh_muc_san_pham','xoa_danh_muc_san_pham', 'quan_ly_tags_san_pham','them_thuoc_tinh','sua_thuoc_tinh','xoa_thuoc_tinh','quan_ly_binh_luan_san_pham'])): ?>
    <li>
      <a>
        <span class="nav-caret">
          <i class="fa fa-caret-down"></i>
        </span>
       
        <span class="nav-icon">
          <i class="material-icons">&#xe547;</i>
        </span>
        <span class="nav-text">Sản phẩm</span>
      </a>
      <ul class="nav-sub">
      <?php if(session('admin')->can('them_san_pham') || session('admin')->can('luu_san_pham')): ?>
        <li ui-sref-active="active">
          <a href="<?php echo e(route('product.create.product')); ?>"><span class="nav-text">Thêm sản phẩm</span></a>
        </li>
      <?php endif; ?>  
        <li ui-sref-active="active">
          <a href="<?php echo e(route('product.list.product')); ?>"><span class="nav-text">Danh sách sản phẩm</span></a>
        </li>
      <?php if(session('admin')->can('them_thuoc_tinh') || session('admin')->can('sua_thuoc_tinh') || session('admin')->can('xoa_thuoc_tinh')): ?>
        <li ui-sref-active="active">
          <a href="<?php echo e(route('product.create.filter')); ?>"><span class="nav-text">Thuộc tính</span></a>
        </li>
      <?php endif; ?>
      <?php if(session('admin')->can('them_danh_muc_san_pham')): ?>
        <li ui-sref-active="active">
          <a href="<?php echo e(route('category.product.add')); ?>"><span class="nav-text">Thêm danh mục</span></a>
        </li>
      <?php endif; ?>
      
        <li ui-sref-active="active" >
          <a href="<?php echo e(route('dev.list.category.product')); ?>"><span class="nav-text">Danh mục</span></a>
        </li>
       <?php if(session('admin')->can('them_don_hang')): ?>
        <li ui-sref-active="active" >
          <a href="<?php echo e(route('order.add')); ?>"><span class="nav-text">Thêm đơn hàng</span></a>
        </li>
        <?php endif; ?>
        <?php if( session('admin')->can('xem_don_hang') || session('admin')->can('them_don_hang')  || session('admin')->can('xoa_don_hang') ||  session('admin')->can('xu_li_don_hang') ): ?>
         <li ui-sref-active="active" >
          <a href="<?php echo e(route('order.list')); ?>"><span class="nav-text">Đơn hàng</span></a>
        </li>
        <?php endif; ?>

         
        <li ui-sref-active="active" >
          <a href="<?php echo e(route('list.transpost')); ?>"><span class="nav-text">Danh sách phí vận chuyển</span></a>
        </li>

        <?php if(session('admin')->can('quan_ly_tags_san_pham')): ?>
           <li ui-sref-active="active" >
            <a href="<?php echo e(route('tags.product.list')); ?>"><span class="nav-text">Quản lý tags</span></a>
          </li> 
        <?php endif; ?>
         <?php if(session('admin')->can('quan_ly_binh_luan_san_pham')): ?>
           <li ui-sref-active="active" >
            <a href="<?php echo e(route('comments.product.list')); ?>"><span class="nav-text">Quản lý Comment</span></a>
          </li> 
        <?php endif; ?>
      </ul>
    </li>
    <?php endif; ?>

     <?php if(session('admin')->can(['dang_bai_viet', 'sua_bai_viet', 'xoa_bai_viet', 'luu_bai_viet', 'them_danh_muc_bai_viet', 'sua_danh_muc_bai_viet','xoa_danh_muc_bai_viet', 'quan_ly_tags_bai_viet','quan_ly_binh_luan_bai_viet'])): ?>
    <li>
      <a>
        <span class="nav-caret">
          <i class="fa fa-caret-down"></i>
        </span>
       
        <span class="nav-icon">
          <i class="material-icons">&#xe873;</i>
        </span>
        <span class="nav-text">Bài viết</span>
      </a>
        <ul class="nav-sub">
          <?php if(session('admin')->can(['dang_bai_viet']) || session('admin')->can(['luu_bai_viet'])): ?>
          <li ui-sref-active="active">
            <a href="<?php echo e(route('posts.add')); ?>"><span class="nav-text">Thêm bài viết</span></a>
          </li>
           <?php endif; ?>
          
          <li ui-sref-active="active">
            <a href="<?php echo e(route('posts.list')); ?>" ><span class="nav-text">Danh sách bài viết</span></a>
          </li>
          
          <?php if(session('admin')->can('quan_ly_tags_bai_viet')): ?>
           <li ui-sref-active="active" >
            <a href="<?php echo e(route('tags.list')); ?>"><span class="nav-text">Quản lý tags</span></a>
          </li> 
          <?php endif; ?>
          <?php if(session('admin')->can('them_danh_muc_bai_viet')): ?>
          <li ui-sref-active="active">
            <a href="<?php echo e(route('category.add')); ?>"><span class="nav-text">Tạo danh mục</span></a>
          </li>
          <?php endif; ?>
          
          <li ui-sref-active="active" >
            <a href="<?php echo e(route('category.list')); ?>"><span class="nav-text">Danh sách danh mục</span></a>
          </li>
          <?php if(session('admin')->can('quan_ly_binh_luan_san_pham')): ?>
             <li ui-sref-active="active" >
              <a href="<?php echo e(route('comments.post.list')); ?>"><span class="nav-text">Quản lý Comment</span></a>
            </li> 
          <?php endif; ?>
        </ul>
    </li>
    <?php endif; ?>
    <?php if(session('admin')->can(['xem_lien_he'])): ?>
    <li>
      <a>
        <span class="nav-caret">
          <i class="fa fa-caret-down"></i>
        </span>
       
        <span class="nav-icon">
          <i class="material-icons">&#xe0cf;</i>
        </span>
        <span class="nav-text">Form</span>
      </a>
        <ul class="nav-sub">
          <?php $contacts = App\FormType::all();?>
          <?php foreach($contacts as $element): ?>
             <li ui-sref-active="active">
            <a href="<?php echo e(route('form.manage', [$element->id])); ?>"><span class="nav-text"><?php echo e($element->name); ?></span></a>
          </li>
          <?php endforeach; ?>
        </ul>
    </li>
    <?php endif; ?>
     <?php if(session('admin')->can(['tao_menu', 'sua_menu', 'xoa_menu'])): ?>
    <li>
      <a>
        <span class="nav-caret">
          <i class="fa fa-caret-down"></i>
        </span>
       
        <span class="nav-icon">
          <i class="material-icons">&#xe5d2;</i>
        </span>
        <span class="nav-text">Quản lý menu</span>
      </a>
      <ul class="nav-sub">
       <?php if(session('admin')->can('tao_menu')): ?>
          <li ui-sref-active="active">
            <a href="<?php echo e(route('menu.add')); ?>"><span class="nav-text">Tạo menu</span></a>
          </li>
        <?php endif; ?>
        <li ui-sref-active="active">
          <a href="<?php echo e(route('menu.list')); ?>" ><span class="nav-text">Danh sách menu</span></a>
        </li>
      </ul>
    </li>
    <?php endif; ?>
     <?php if(session('admin')->can(['them_slide', 'sua_slide', 'xoa_slide'])): ?>
    <li>
      <a>
        <span class="nav-caret">
          <i class="fa fa-caret-down"></i>
        </span>
       
        <span class="nav-icon">
          <i class="material-icons">&#xe40b;</i>
        </span>
        <span class="nav-text">Quản lý slide</span>
      </a>
      <ul class="nav-sub">
        <?php $slide_list = App\Slide::getListSlide();?>
        <?php foreach($slide_list as $item): ?>
        <li ui-sref-active="active">
          <a href="<?php echo e(route('slide.manage',['id'=>$item->id])); ?>"><span class="nav-text"><?php echo e($item->name); ?></span></a>
        </li>
        <?php endforeach; ?>
      </ul>
    </li>
    <?php endif; ?>
     <?php if(session('admin')->can(['tao_layout', 'sua_slide', 'xoa_slide'])): ?>
    <li>
      <a>
        <span class="nav-caret">
          <i class="fa fa-caret-down"></i>
        </span>
       
        <span class="nav-icon">
          <i class="material-icons">&#xe051;</i>
        </span>
        <span class="nav-text">Quản lý layout</span>
      </a>
      <ul class="nav-sub">
        <?php $layout_list = DB::table('group_layouts')->get();?>
        <?php foreach($layout_list as $item): ?>
        <?php if(session('admin')->can('sua_layout')): ?>
        <li ui-sref-active="active">
          <a href="<?php echo e(route('layout.manage',['id'=>$item->id])); ?>"><span class="nav-text"><?php echo e($item->name); ?></span></a>
        </li>
        <?php endif; ?>
        <?php endforeach; ?>
      </ul>
    </li>
    <?php endif; ?>
    <?php if(session('admin')->can(['them_thanh_vien', 'sua_thanh_vien', 'phan_quyen_thanh_vien','xoa_thanh_vien'])): ?>
    <li class="no-bg">
      <a href="#">
      <span class="nav-caret">
          <i class="fa fa-caret-down"></i>
      </span>
      <span class="nav-icon"><i class="material-icons">&#xe7ef;</i></span>
      <span class="nav-text">Phân Quyền</span>
      </a>
      <ul class="nav-sub">
      <?php if(session('admin')->can('them_thanh_vien')): ?>
        <li ui-sref-active="active">
          <a href="<?php echo e(route('editor.add')); ?>"><span class="nav-text">Thêm Thành Viên</span></a>
        </li>
      <?php endif; ?>
        <li ui-sref-active="active">
          <a href="<?php echo e(route('editor.list')); ?>" ><span class="nav-text">Danh sách Thành Viên</span></a>
        </li>
      </ul>
    </li>
    <?php endif; ?>
    <li class="no-bg">
      <a href="<?php echo e(route('admin.edit')); ?>">
      <span class="nav-icon"><i class="material-icons">&#xe853;</i></span>
      <span class="nav-text">Thông tin cá nhân</span>
      </a>
    </li>
    <?php if(session('admin')->level < 2): ?>
    <li class="no-bg">
      <a href="<?php echo e(route('admin.system.edit')); ?>">
      <span class="nav-icon"><i class="material-icons">&#xe39e;</i></span>
      <span class="nav-text">Thông Tin Hệ Thống</span>
      </a>
    </li>
    <?php endif; ?>
   


    <li class="no-bg"><a href="<?php echo e(url(route('quan-tri/dang-xuat'))); ?>"><span class="nav-icon"><i class="material-icons"></i></span> <span class="nav-text">Đăng xuất</span></a></li>
  </ul>