<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/',['as' => 'frontend.trang-chu','uses' => 'PageController@index']);
// Frontend(MT-F4)
Route::get('/category',['as'=>'view.category','uses'=>'frontend\PagesController@views']);
Route::get('/blog',['as'=>'view.blog','uses'=>'frontend\PagesController@viewblog']);
Route::get('/cart',['as'=>'view.cart','uses'=>'frontend\PagesController@viewcart']);

Route::post('/contact',['as' => 'contact','uses' => 'PageController@ajaxContact']);

Route::get('/category/',['as'=>'category.posts','uses'=>'PageController@getCategory']);
Route::get('/product/',['as'=>'product.posts.home','uses'=>'PageController@getCategoryProductHome']);

Route::get('/danh-muc-san-pham/{slug}',['as'=>'getProDetail','uses'=>'PageController@getDanhmucSanpham']);

Route::get('/danh-muc-bai-viet/{slug}',['as'=>'getPostCategory','uses'=>'PageController@getPostCategory']);

Route::get('/category/{id}/{slug}',['as'=>'view.category.products','uses'=>'frontend\PagesController@viewproducts']);
// filter1(MT-F4)
Route::post('/filter1',['as'=>'view.category.filter1','uses'=>'frontend\PagesController@viewfilterpro1']);
// ajax show tỉnh thành phố fronted shoping Cart
Route::post('ajax-province-fronted',['as'=>'ajax.province.fronted','uses'=>'frontend\PagesController@ajaxProvinceFrontend']);

// ajax.order
Route::post('ajax-order/fghjkjllk',['as'=>'ajax.form.order','uses'=>'frontend\PagesController@ajaxOrder']);

// ajax list xem
Route::post('ajax-list-xem',['as'=>'ajax.list.xem','uses'=>'frontend\PagesController@ajaxListXem']);
//tim kiem sp
Route::get('/tim-kiem',['as' => 'frontend.search','uses' => 'frontend\PagesController@getSearch']);
//add cart
Route::post('add-cart/dsfdsg',['as'=>'ajax.add.card','uses'=>'frontend\PagesController@addCart']);

// total product
Route::post('total-product/hgjh',['as'=>'ajax.total.product','uses'=>'frontend\PagesController@totalProduct']);

// Remove Cart mainmenu
Route::post('remove/hgfhgfh',['as'=>'ajax.remove.cart','uses'=>'frontend\PagesController@removeCart']);
// Remove shoping Cart
Route::post('remove/shopingCart/fghfghhjh',['as'=>'ajax.del.cart','uses'=>'frontend\PagesController@removeShopingCart']);
// nhận email ưu đãi
Route::post('/email-uudai',['as'=>'email.uudai', 'uses'=>'frontend\PagesController@dangkyUudai']);
// tìm kiếm sản phẩm
Route::post('tim-kiem-san-pham',['as'=>'product.search','uses'=>'frontend\PagesController@productSearch']);
// Bắt buộc phải có 
Route::get('/san-pham/{id}/{slug}',['as' => 'frontend.san-pham.slug','uses' => 'PageController@getChitietSanphamSlug']);

// Bắt buộc phải có 
Route::get('/bai-viet/{id}/{slug}',['as' => 'frontend.bai-viet.slug','uses' => 'PageController@getBaiViet']);


Route::get('quan-tri/dang-nhap',['as' => 'quan-tri/dang-nhap','uses' => 'backend\LoginController@getLogin']);
Route::post('quan-tri/dang-nhap',['as' => 'quan-tri/post-dang-nhap','uses' =>'backend\LoginController@postLogin']);
Route::get('quan-tri/dang-xuat',['as' => 'quan-tri/dang-xuat','uses' => 'backend\LoginController@getLogout']);

Route::group(['prefix'=>'quan-tri', 'middleware'=>'permission'],function(){	
	Route::get('/', array('as'=>'admin.home', 'uses'=> 'backend\BackendController@index'));
	Route::get('/backend-create-sitemap',['as' => 'create.sitemap','uses' => 'backend\BackendController@getCreatesitemap']);
	Route::group(['prefix'=>'/quan-tri-vien'],function(){

	});
	Route::get('/khach-hang-lien-he',['as' => 'customerContact','uses' => 'PageController@customerContact']);

	Route::group(['prefix'=>'/bai-viet'],function(){
			// Thêm một bài viết mới
		Route::get('/them-bai-viet', array('as'=>'posts.add', 'permissions'=>array('dang_bai_viet', 'luu_bai_viet'), 'uses'=>'backend\PostController@create_post'));
			// Chỉnh sửa bài viết 
		Route::get('/chinh-sua-bai-viet/{id}', array('as'=>'posts.edit', 'permissions'=>'sua_bai_viet', 'uses'=>'backend\PostController@edit_post'));
			// Nhận request thêm bài viết
		Route::post('/them-bai-viet', array('as'=>'ppostt_posts.add', 'uses'=>'backend\PostController@post_create_post'));
			// Hiển thị danh sách tất cả bài viết
		Route::get('/', array('as'=>'posts.list', 'uses'=>'backend\PostController@index_post'));
			//xoa tab content
		Route::post('/xoa-tab-content',['as'=>'xoa.content.tab', 'uses'=>'backend\PostController@xoa_tab']);

		Route::post('/sua-bai-viet', ['as'=>'update.post', 'uses'=>'backend\PostController@update_post']);
		Route::post('/xoa-bai-viet', ['as'=>'del.post', 'permissions'=>'xoa_bai_viet', 'uses'=>'backend\PostController@del_post']);
			// đăng kí thêm một danh mục 
		Route::get('/them-danh-muc', array('as'=>'category.add', 'permissions'=>'them_danh_muc_bai_viet', 'uses'=>'backend\PostController@create_category'));
			// Nhận Form thêm danh mục
		Route::post('/them-danh-muc', array('as'=>'category.post_add', 'uses'=>'backend\PostController@post_create_category'));
			// hiển thị blade Chỉnh sửa một danh mục
		Route::get('/chinh-sua-danh-muc/{id}', array('as'=>'category.edit', 'permissions'=>'sua_danh_muc_bai_viet', 'uses'=>'backend\PostController@edit_category'));
		Route::post('/chinh-sua-danh-muc/askdfhaksdhfkasj/asdkfjhaskdfj', array('as'=>'form_category.edit', 'uses'=>'backend\PostController@formsavecate'));
            // xoa danh muc
		Route::post('xoa-danh-muc', ['as'=>'cate.del', 'permissions'=>'xoa_danh_muc_bai_viet', 'uses'=>'backend\PostController@del_category']);
			// Hiện danh sách bài viết trong danh mục
		Route::get('/danh-sach-bai-viet/{id}', array('as'=>'category.detail', 'uses'=>'backend\PostController@post_in_cate'));
			// Hiện danh sách tất cả danh mục
		Route::get('/danh-sach-danh-muc', array('as'=>'category.list', 'uses'=>'backend\PostController@list_category'));
			// Quản lý comment sản phẩm
		Route::get('/quan-ly-comment', ['as' => 'comments.post.list', 'uses' => 'backend\CommentController@listCommentPost']);
			// Quản lý comment sản phẩm
		Route::get('/quan-ly-comment/da-duyet', ['as' => 'comments.post.list.done', 'uses' => 'backend\CommentController@listCommentPostDone']);
			// Xóa Comment 
		Route::post('/quan-ly-comment/xoqwertyuityuio', ['as' => 'comments.post.delete', 'uses' => 'backend\CommentController@deleteCommentPost']);
			// Duyệt Comment 
		Route::post('/quan-ly-comment/duyetqwertyuio', ['as' => 'comments.post.accept', 'uses' => 'backend\CommentController@acceptCommentPost']);
	});
	Route::group(['prefix'=>'/menu'], function(){
		Route::get('/danh-sach-menu', ['as'=>'menu.list', 'uses'=>'backend\MenuController@index']);	
		Route::get('/tao-menu',['as'=>'menu.add', 'permissions'=>'tao_menu', 'uses'=>'backend\MenuController@create']);
		Route::post('order-menu',array('as'=>'menu.orderby', 'permissions'=>'sua_menu', 'uses'=>'backend\MenuController@ordermenu'));
		Route::post('xoa-menu',array('as'=>'menu.del', 'permissions'=>'xoa_menu', 'uses'=>'backend\MenuController@del_menu'));
		Route::post('/tao-menu-post',['as'=>'menu.post_add', 'uses'=>'backend\MenuController@store']);
			//nhận form tạo menu
			// hiển thị blade Chỉnh sửa một danh mục
		Route::get('/chinh-sua-menu/{id}', array('as'=>'menu.edit', 'permissions'=>'sua_menu', 'uses'=>'backend\MenuController@edit_menu'));
		Route::post('chinh-sua-menu-post',array('as'=>'menu.edit.post', 'uses'=>'backend\MenuController@post_edit_menu'));

			// sắp xếp lại menu 
		Route::post('/sap-xep-menu',['as'=>'menu.sap-xep', 'uses'=>'backend\MenuController@Sapxep']);
			//tìm kiếm tag
		Route::post('/tim-kiem-tag/', array('as'=>'tag.post.search', 'uses'=>'backend\PostController@post_search_tag'));
	});
	Route::group(['prefix'=>'/quan-ly-slide'], function(){
		Route::get('/slide/{id}', ['as'=>'slide.manage', 'uses'=>'backend\SlideController@index']);	
		Route::get('/them-anh-vao-slide/{id}', ['as'=>'slide.add', 'permissions'=>'them_slide', 'uses'=>'backend\SlideController@addImg']);	
		Route::get('/chinh-sua-slide/{slide_type_id}/{slide_id}', ['as'=>'slide.edit', 'permissions'=>'sua_slide', 'uses'=>'backend\SlideController@editSlide']);	
		Route::post('/slide/QOIQMAMNDKPQPOIE', ['as'=>'slide.post_add', 'uses'=>'backend\SlideController@formAdd']);	
		Route::post('/slide/qeouoiasl/QOIQMAMNDKPQPOIE', ['as'=>'slide.post_save', 'uses'=>'backend\SlideController@formSave']);	
		Route::post('/slide/qeouoiasl/QOIQMAMNDKPQPaaaaaaaaaOIE', ['as'=>'del.slide', 'permissions'=>'xoa_slide', 'uses'=>'backend\SlideController@delSlide']);	
		Route::post('/fsfsdfsaaafdfd-sdffsdf', ['as'=>'slide.check', 'permissions'=>'sua_slide', 'uses'=>'backend\SlideController@SlideCheck']);
	});
	Route::group(['prefix'=>'/upload'],function(){
		Route::post('/anh', ['as'=>'quan-tri/dang-anh', 'uses'=>'backend\PostController@uploadImg']);
		Route::post('/up-img', ['as'=>'quan-tri.upload.up-img', 'uses'=>'backend\UploadController@uploadImage']);
	});
		 //quan ly tags
	Route::group(['prefix'=>'tags'], function(){
		Route::post('/get_list_tag_ajax', array('as'=>'get_list_tag_ajax', 'uses'=>'backend\TagController@getTag_Ajax'));

		Route::get('quan-ly-tag', ['as'=>'tags.list', 'uses'=>'backend\TagController@index']);
		Route::get('sua-tag/{id}', ['as'=>'tags.edit', 'uses'=>'backend\TagController@edit']);
		Route::get('/danh-sach-tag/{id}', array('as'=>'tags.detail.cate', 'uses'=>'backend\TagController@tag_in_cate'));
		Route::post('update-tag', ['as'=>'tags.edit.post', 'uses'=>'backend\TagController@update']);
		Route::post('xoa-tag', ['as'=>'tags.del', 'uses'=>'backend\TagController@deltag']);

		Route::get('tag-san-pham',['as'=>'tags.product.list','uses'=>'backend\TagController@TagsProduct']);
		Route::get('/danh-sach-tag-san-pham/{id}', array('as'=>'product.tags.detail.cate', 'uses'=>'backend\TagController@tag_in_product'));
		Route::get('sua-tag-product/{id}', ['as'=>'tags.product.edit', 'uses'=>'backend\TagController@productedit']);
		Route::post('update-tag-product', ['as'=>'tags.product.edit.post', 'uses'=>'backend\TagController@productupdate']);
		Route::post('xoa-tag-product', ['as'=>'tags.product.del', 'uses'=>'backend\TagController@productdeltag']);
	});

	Route::group(['prefix'=>'/dev', 'permissions'=>'dev'],function(){
		Route::get('/layout-add-group', ['as'=>'layout.add-group', 'uses'=>'backend\DevController@addGroup']);

		Route::get('/layout-list-group', ['as'=>'layout.list-group', 'uses'=>'backend\DevController@listGroup']);
		Route::post('/layout-qwertyuioist-group', ['as'=>'layout.group.post_add', 'uses'=>'backend\DevController@createGroup']);
		Route::post('/layout-qwertyuioist-grdffdserqrdoup', ['as'=>'layout.layout.post_add', 'uses'=>'backend\DevController@createLayout']);
		Route::post('/layoutdddaa-qwertyuioist-grdffdserqrdoup', ['as'=>'layout.layout.post_pattern', 'uses'=>'backend\DevController@createPattern']); 
		Route::get('/layout-group/{id}', ['as'=>'layout.view', 'uses'=>'backend\DevController@index']);	
		Route::get('/layout/{id}', ['as'=>'layout.config', 'uses'=>'backend\DevController@config']);	
		Route::get('/duplicate/{id}', ['as'=>'layout.duplicate', 'uses'=>'backend\DevController@duplicate']);	
				// Hiển thị danh mmục
		Route::get('/danh-sach-danh-muc', array('as'=>'dev.list.category', 'uses'=>'backend\DevController@list_category'));

		Route::get('/danh-sach-danh-muc-san-pham', array('as'=>'dev.list.category.product.super', 'uses'=>'backend\DevController@list_category_product')); 

		Route::post('/dev-editable',array('as'=>'dev.editable', 'uses'=>'backend\DevController@editable'));
		Route::post('/dev-editable-product',array('as'=>'dev.editable.product', 'uses'=>'backend\DevController@editableProduct'));

		Route::post('/dev-sfsfsdfsd-dsfsd',array('as'=>'dev.check', 'uses'=>'backend\DevController@changelink'));
		Route::get('/dev-slide', ['as'=>'dev.slide', 'uses'=>'backend\DevController@slide']);
		Route::post('/dev-sfsfsdfsd-ddddjkskeiruwosfsd',array('as'=>'layout.dev.slide_add', 'uses'=>'backend\DevController@addslide'));
                //Dev Form
		Route::get('/dev-form', ['as'=>'dev.form', 'uses'=>'backend\DevController@form']);
		Route::get('/dev-thumbnail', ['as'=>'dev.thumbnail', 'uses'=>'backend\DevController@thumbnail']);
		Route::post('/dev-thumbnail', ['as'=>'dev.thumbnail.post', 'uses'=>'backend\DevController@thumbnailPost']);
		Route::get('/thumb-product-auto', ['as'=>'create.thumbnail.auto', 'uses'=>'backend\DevController@refresh_thumb_all']);
		Route::get('/thumb-post-auto', ['as'=>'create.thumbnail.auto.post', 'uses'=>'backend\DevController@refresh_thumb_all_post']);

		Route::post('/dev-dfsdfsdf-sfsfsdfsd-ddddjkskeiruwosfsd',array('as'=>'dev.form.post', 'uses'=>'backend\DevController@form_post'));
		Route::post('/dev-edit-form-type/{id}', ['as' => 'edit.form.types', 'uses' => 'backend\DevController@editFormType']);
		Route::post('/dev-form-kgjklsgdlk', ['as' => 'del.form.types', 'uses'=>'backend\DevController@DelFormType']);

		Route::get('/dev-abcef-gh', ['as' => 'dev.slides.list', 'uses' => 'backend\DevController@slide_add_in']);
		Route::post('/dev-del-kgjklsgdlk', ['as' => 'del.slide.types', 'uses'=>'backend\DevController@delSlideType']);
		Route::post('/dev-edit-slide-type/{id}', ['as' => 'edit.slide.types', 'uses' => 'backend\DevController@editSlideType']);

		Route::get('/he-thong', ['as'=>'admin.config', 'uses'=>'backend\DevController@config_system']);		
		Route::post('/he-thong-post', ['as'=>'admin.post.config', 'uses'=>'backend\DevController@config_system_update']);
		Route::post('/dev-add-item', ['as'=>'dev.add.item', 'uses'=>'backend\DevController@devadditem']);
		Route::get('/config-font', ['as'=>'admin.config.font', 'uses'=>'backend\DevController@config_fonts']);	
		Route::post('/config-font-post', ['as'=>'admin.config.fonts.post', 'uses'=>'backend\DevController@config_fonts_update']);
		Route::get('/config-frame', ['as'=>'admin.config.frame', 'uses'=>'backend\DevController@config_frame']);
		Route::post('/cconfig-frame-post', ['as'=>'admin.config.frame.post', 'uses'=>'backend\DevController@config_frame_update']);
		    	// phân quyền
		Route::get('/danh-sach-phan-quyen', ['as'=>'admin.config.permission', 'uses'=>'backend\DevController@permission_list']);
		Route::post('/them-phan-quyen', ['as'=>'admin.config.add.permission', 'uses'=>'backend\DevController@add_permission']);

	});

Route::group(['prefix'=>'/layout'],function(){
	Route::get('/manage/{id}', ['as'=>'layout.manage', 'permissions'=>'sua_layout', 'uses'=>'backend\WidgetController@index']);	
	Route::get('/manage/layout/{id}', ['as'=>'layout.manage.config', 'uses'=>'backend\WidgetController@config']);	
	Route::get('/manage/edit/pattern/{id}', ['as'=>'layout.edit.partern', 'permissions'=>'sua_layout', 'uses'=>'backend\WidgetController@edit']);	
	Route::post('akhdsfkoiquerppdwoirk', ['as'=>'layout.formedit', 'uses'=>'backend\WidgetController@formedit']);
	Route::post('/fsfsdfsd-sdffsdf', ['as'=>'layout.update', 'uses'=>'backend\WidgetController@update']);	
});
Route::group(['prefix'=>'/lien-he'],function(){
	Route::get('/form/{id}', ['as'=>'form.manage', 'permissions'=>'xem_lien_he', 'uses'=>'backend\ContactController@index']);	
	Route::post('/del-form-qwertyu/dfghj', ['as'=>'form.del.ajax', 'uses'=>'backend\ContactController@delForm']);	
});

Route::group(['prefix'=>'/admin'],function(){
	Route::get('/thong-tin-ca-nhan', ['as'=>'admin.edit', 'uses'=>'backend\AdminController@index']);
	Route::post('/thong-sdfsdf-tin-ca-nhan', ['as'=>'admin.post.edit', 'uses'=>'backend\AdminController@updatecanhan']);

	Route::get('/thong-tin-he-thong', ['as'=>'admin.system.edit', 'uses'=>'backend\AdminController@indexsystem']);
	Route::post('/thong-sdfsdf-tin-he-thong', ['as'=>'admin.system.post.edit', 'uses'=>'backend\AdminController@update']);

	Route::get('/them-editor', ['as' => 'editor.add', 'permissions'=>'them_thanh_vien', 'uses' => 'backend\AdminController@editor']);
	Route::post('/post-them-editor', ['as' => 'post.editor.add', 'uses' => 'backend\AdminController@addEditor']);

	Route::get('/sua-editor/{id}', ['as' => 'editor.edit', 'permissions'=>'sua_thanh_vien', 'uses' => 'backend\AdminController@get_edit_editor']);
	Route::post('/post-sua-e/{id}', ['as' => 'post.editor.edit', 'uses' => 'backend\AdminController@post_edit_editor']);


	Route::get('/danh-sach-editor', ['as' => 'editor.list', 'uses' => 'backend\AdminController@listEditor']);
	Route::get('/them-phan-quyen-thanh-vien/{id}', ['as' => 'editor.user.add', 'permissions'=>'phan_quyen_thanh_vien', 'uses' => 'backend\AdminController@add_permission_user']);
	Route::post('/them-phan-quyen-thanh-vien-post-dfsfsd', ['as' => 'editor.user.add.permission', 'uses' => 'backend\AdminController@add_permission_user_post']);
	Route::post('/del-editor-abcd', ['as' => 'del.editor', 'uses' => 'backend\AdminController@delEditor']);
});	
Route::group(['prefix' =>'don-hang'], function(){
	Route::get('/them-don-hang',['as'=>'order.add','permissions'=>'them_don_hang','uses'=>'backend\OrderController@getOrderadd']);
	Route::get('/chitiet/{id}', ['as'=>'order.show','uses' =>'backend\OrderController@show']);

	Route::get('/danh-sach', ['as'=>'order.list', 'uses' =>'backend\OrderController@index']);
	Route::get('/loai-don-hang/{id}', ['as'=>'order.type', 'uses' =>'backend\OrderController@list_type']);

	Route::post('status', ['as'=>'order.status', 'uses' =>'backend\OrderController@status']);
	Route::post('/them-don-hang',['as'=>'order.add','uses'=>'backend\OrderController@postOrderadd']);
	Route::post('/info-order/qwerty', ['as'=>'order.get.info', 'uses' =>'backend\OrderController@infoOrder']);
	Route::post('/submit-order/qwertyqwertyqwerty', ['as'=>'order.ajax.submit', 'uses' =>'backend\OrderController@saveOrder']);

	Route::post('/search/qwerty/ytrewq',['as'=>'order.search.add','uses'=>'backend\OrderController@postOrderSearchadd']);
	Route::post('/checkbox/qwertyqwerty',['as'=>'order.checkbox.add','uses'=>'backend\OrderController@postOrderCheckadd']);
	Route::post('/submit/qwertyqwerty',['as'=>'order.submit.add','uses'=>'backend\OrderController@postOrderadd']);
});
Route::group(['prefix'=>'frame'],function(){
	     	//Tạo Frame
	Route::get('create-frame/{id}',['as'=>'frame.create.frame','uses'=>'backend\FrameController@createFrame']);
	Route::post('create-frame-post',['as'=>'frame.create.frame.post','uses'=>'backend\FrameController@postFrame']);
	Route::post('ajax-list-frame',['as'=>'ajax.list.frame','uses'=>'backend\FrameController@ajaxListFrame']);
	Route::post('/xoa-frame', array('as'=>'frame.delete', 'uses'=>'backend\FrameController@del_frame_post'));
	Route::get('sua-frame/{id}',['as'=>'frame.edit.frame','uses'=>'backend\FrameController@editFrame']);
	Route::post('post-sua-frame',['as'=>'frame.edit.frame.post','uses'=>'backend\FrameController@editFramepost']);
});
Route::group(['prefix'=>'/san-pham'],function(){
		 	//list transposst
	Route::get('danh-sach-transpost',['as'=>'list.transpost','uses'=>'backend\ProductController@listTranspost']);
		 	//ajax đặt giá province
	Route::post('dat-gia/gh',['as'=>'ajax.datgia','uses'=>'backend\ProductController@formdatgiaProvince']);

		 	// post đặt giá
	Route::post('edit-gia/ghgjh',['as'=>'ajax.price.province','uses'=>'backend\ProductController@postProvince']);

		 	//ajax đặt giá district
	Route::post('dat-gia/hgfhf',['as'=>'ajax.datgia.district','uses'=>'backend\ProductController@formdatgiaDistrict']);
			// post dat gia district

	Route::post('edit-gia-district/gh',['as'=>'ajax.price.district','uses'=>'backend\ProductController@postDistrict']);
		 	// ajax phí rieng
	Route::post('phi-rieng/gh',['as'=>'ajax.giarieng','uses'=>'backend\ProductController@postgiarieng']);

		 	// ajax phí chung
	Route::post('phi-chung/gh',['as'=>'ajax.giachung','uses'=>'backend\ProductController@postgiachung']);
		 	// Tạo sản phẩm
	Route::get('/tao-san-pham', ['as'=>'product.create.product', 'uses'=>'backend\ProductController@createProduct']);
		 	// Sửa sản phẩm
	Route::get('/sua-san-pham/{id}', ['as'=>'product.edit.product', 'uses'=>'backend\ProductController@editProduct']);
		 	// Danh sách sản phẩm
	Route::get('/danh-sach-san-pham', ['as'=>'product.list.product', 'uses'=>'backend\ProductController@listProduct']);
		 	// Bộ lọc
	Route::get('/tao-bo-loc', ['as'=>'product.create.filter', 'uses'=>'backend\ProductController@createFilter']);
       		// Xem sản phẩm theo danh mục
	Route::get('/danh-sach-san-pham/{id}', array('as'=>'cate.products.detail', 'uses'=>'backend\ProductController@products_in_cate'));
       		// Tạo mới sản phẩm
	Route::post('/tao-san-pham-form', array('as'=>'product.add', 'uses'=>'backend\ProductController@formProduct'));
       		// Sửa sản phẩm
	Route::post('/sua-san-pham-form', array('as'=>'product.edit', 'uses'=>'backend\ProductController@formProductEdit'));
            // Xóa sản phẩm
	Route::post('/xoa-san-pham', array('as'=>'products.del', 'uses'=>'backend\ProductController@del_product_post'));
       		// Danh mục sản phẩm
	Route::get('/danh-muc-san-pham', ['as' => 'dev.list.category.product', 'uses' => 'backend\ProductController@listCategoryProduct']);
			// Thêm danh mục sản phẩm
	Route::get('/them-danh-muc-san-pham', array('as'=>'category.product.add', 'uses'=>'backend\ProductController@createCategoryProduct'));
			// Quản lý comment sản phẩm
	Route::get('/quan-ly-comment', ['as' => 'comments.product.list',  'permissions'=>'quan_ly_binh_luan_san_pham', 'uses' => 'backend\CommentController@listCommentProduct']);
			// Quản lý comment sản phẩm
	Route::get('/quan-ly-comment/da-duyet', ['as' => 'comments.product.list.done',  'permissions'=>'quan_ly_binh_luan_san_pham', 'uses' => 'backend\CommentController@listCommentProductDone']);
			// Xóa Comment 
	Route::post('/quan-ly-comment/xoqwertyuityuio', ['as' => 'comments.product.delete', 'permissions'=>'quan_ly_binh_luan_san_pham', 'uses' => 'backend\CommentController@deleteCommentProduct']);
			// Duyệt Comment 
	Route::post('/quan-ly-comment/duyetqwertyuio', ['as' => 'comments.product.accept', 'permissions'=>'quan_ly_binh_luan_san_pham', 'uses' => 'backend\CommentController@acceptCommentProduct']);

			// Thêm danh mục sản phẩm
	Route::post('/them-danh-muc-san-pham', array('as'=>'category.product.post_add', 'uses'=>'backend\ProductController@post_create_category_product'));
       		// Xóa danh mục sản phẩm
	Route::post('/xoa-danh-muc-san-pham', array('as'=>'cate.products.del', 'uses'=>'backend\ProductController@del_product_category'));
      		// Sửa danh mục sản phẩm
	Route::get('/sua-danh-muc-san-pham/{id}', array('as'=>'cate.products.edit', 'uses'=>'backend\ProductController@edit_product_category'));
       		// Lưu danh mục sản phẩm
	Route::post('/save-danh-muc-san-pham', array('as'=>'save.cate.products.edit', 'uses'=>'backend\ProductController@save_edit_category'));
	Route::post('/create-attr', array('as'=>'attr.products.create', 'uses'=>'backend\ProductController@createAttribute'));
	Route::post('/check-key', array('as'=>'check-key.products', 'uses'=>'backend\ProductController@checkKey'));
	Route::post('/add-filter', array('as'=>'product.add-filter', 'uses'=>'backend\ProductController@addFilter'));
	Route::post('/get-filter-ajax', array('as'=>'ajax.filter.get', 'uses'=>'backend\ProductController@getFilterAjax'));
	Route::post('/save-filter-ajax', array('as'=>'ajax.filter.submit', 'uses'=>'backend\ProductController@saveFilterAjax'));
	Route::post('/del-filter-ajax', array('as'=>'ajax.filter.del', 'uses'=>'backend\ProductController@delFilterAjax'));
	Route::post('/change-attr-filter-ajax', array('as'=>'ajax.attr.filter.change', 'uses'=>'backend\ProductController@changeFilterStatus'));
	Route::post('/ajax-del-attr', array('as'=>'ajax.del.attr', 'uses'=>'backend\ProductController@delAttribute'));
	Route::post('/get-attr-ajax', array('as'=>'ajax.attr.get', 'uses'=>'backend\ProductController@getAttrAjax'));
	Route::post('/get-attr-save', array('as'=>'ajax.attr.save', 'uses'=>'backend\ProductController@saveAttrAjax'));
});
});