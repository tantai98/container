<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('backend/libs/jquery/select2-bootstrap-theme/dist/select2-bootstrap.min.css')); ?>" type="text/css" />
   <link rel="stylesheet" href="<?php echo e(asset('backend/libs/jquery/select2/dist/css/select2.min.css')); ?>" type="text/css" />
   <link rel="stylesheet" href="<?php echo e(asset('summernote/dist/summernote.css')); ?>" type="text/css" />
   <link rel="stylesheet" href="<?php echo e(asset('libs/bootstrap-tagsinput/bootstrap-tagsinput.css')); ?>" type="text/css" />
   <link rel="stylesheet" href="<?php echo e(asset('backend/assets/styles/backend.css')); ?>" type="text/css" />

   <style type="text/css">
    h2{
          font-family: "Roboto-Bold";
          font-size: 10.5pt !important;
    }
   
      
   </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<form ui-jp="parsley" method="post" action="<?php echo e(route('post.edit.transpost')); ?>" >
<input type="hidden" name="district_id" value="<?php echo $district->id; ?>">
<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
<div class="app-header white box-shadow">
<div class="navbar">
    <div style="float:left;" class="title_form">
        <p>Sửa Phí Vận Chuyển</p>
      </div>
      <div style="float:right;margin-top:10px;">
     
    <button type="submit" name="submit"  value="post" class="btn success" style="
    padding-bottom: 8px;padding-top: 8px;font-size: 10pt;margin-right: 8px;font-family: 'Roboto-Bold';
    min-width:100px; background-color:#738CEC">Lưu</button>
      </div>
       
    <!-- / navbar collapse -->
</div>
</div>
   <div class="app-body" id="view">
     <style type="text/css">
      .alert{
        margin-top:20px;
        margin-bottom: 0px;
      }
      label {
          font-size: 10pt;
          color: #404040;
      }
      .form-control{
        margin-bottom: 15px !important;
        border: 1px solid #E7E7E7 !important; 
       
      }
      .thong-tin{
          background-color: #fff !important;
      }
      .box{
        min-height: 275px;
      }
      .s-img{
        max-width:100%;
        min-width:100px;
        background-color:#F0F0F0;
        border:1px solid #E7E7E7;
        position: relative;

      }
      .s-img img{
        max-height: 100px;
      }
      .s-img span{
          position: absolute;
          top: 35px;
          left: calc(50% - 15px);
      }
      .s-img1{
        max-width:100%;height:40px;min-width:130px;background-color:#F0F0F0;
        border:1px solid #E7E7E7;
        position: relative;

      }
       .s-img1 img{
        max-height: 100px;
      }
      .s-img1 span{
          position: absolute;
          top: 35px;
          left: calc(50% - 15px);
      }
      
      .no-border{
        border: 0px !important;
        background-color: rgba(1,1,1,0);
      }
      .add-attribute{
        position: absolute;
        right: 15px;
        top: 10px;
        color: #738CEC;
        cursor: pointer;
      }
      .add-attribute1{
        position: absolute;
        right: 10px;
        top: 10px;
        color: #FFFFFF;
      }
      .material-icons{
      cursor: pointer;
      }
      .modal-dialog {
          width: 600px;
          margin: 70px auto;
      }
      .modal-content{
        border-radius: 0px;
      }
      .modal-header {
          padding: 12px 15px;
          border-bottom: 1px solid #E7E7E7;
      }
      .modal-title{
        font-size: 10.5pt;
        font-family: "Roboto Bold";
      }
      .td{
        padding:12px 0px !important;
      }
      .wt{
        width: 145px !important;
      }
      .tw{
        width: 30px !important;
      }
      .d-tooltip{
      font-family: "Roboto";
      font-size: 10pt;
          position: absolute;
    background-color: black;
    color: white;
    padding: 4px 6px;
    border-radius: 6px;
    bottom: -12px;
    display: none;
    }
     
     .d-tooltip:after{
        content: "";
        position: absolute;
        bottom: 100%;
        left: 50%;
        margin-left: -5px;
        border-width: 5px;
        border-style: solid;
        border-color: transparent transparent #000 transparent;
    }
     </style>
    <div class="padding" style="padding-top:0px !important; padding-bottom:0px;">
        <?php echo $__env->make('backend.partials._messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
    <div class="padding">
         <div class="row">
          <div class="col-sm-6" >
            <div class="box" style="min-height:183px !important;" >
                  <div class="box-header">
                    <h2 style="font-family:'Roboto Black';">Sửa giá phí vận chuyển</h2>
                  </div>
                  <div class="box-body" style="padding-top:10px;">
                        <div class="row">
                            <input type="hidden" value="<?php echo e(csrf_token()); ?>" name="_token">
                                    <div class="form-group d-a" >
                                           <label class="col-sm-3 form-control-label ">Quận , Huyện</label>
                                              <div class="col-sm-9 d-province">
                                                  <input disabled type="text" class="form-control" value="<?php echo $district->name; ?>">
                                              </div> 
                                    </div>
                                    <div class="form-group">
                                           <label class="col-sm-3 form-control-label ">Phí vận chuyển</label>
                                           <div class="col-sm-9 d-monny">
                                            <input  type="text" class="form-control" placeholder="Phí vận chuyển" name="price" autocomplete="off" value="<?php echo $district->price; ?> ">
                                            <div class="d-tooltip"></div>
                                          </div>                             
                                    </div>                  
                              
                       </div>  
                  </div>   
            </div> 
          </div>
    </div>
  </div>
</form>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js-footer'); ?>
<script>
  $(document).on('mouseenter','.d-monny',function(){
    value = $(this).find('input').val();
    console.log(value);
    if(!value){

      $(this).find('.d-tooltip').text("Chưa nhập giá");
    }else{
      value = (value + "").replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");

      $(this).find('.d-tooltip').text(value +" "+"đ");
    }
  });
  $(document).on('keyup','.d-monny input',function(){
        value = $(this).val();
        if(!value){
        $(this).next().text("Chưa nhập giá");

        }else{
          value = parseInt(value);
          value = (value + "").replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");
          $(this).next().text(value+" "+"đ");
        }
      });
  
  $('.d-monny').hover(function() {
   
     $('.d-tooltip').css('display','block');
  }, function() {
    
    $('.d-tooltip').css('display','none');
  });
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>