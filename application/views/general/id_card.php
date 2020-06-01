<div class="inner-banner contact" style="padding: 74px 0;"> <!--contact-->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="content text-center full-width">
                    <h1>Find Id Card</h1>
                    <ul>
                        <li class="active"><a href="<?= site_url('home/index')?>">Home</a> <i class="fa fa-angle-right"></i> <a href="">Id  Card</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="campus-tour padding-lg"> 
    <div class="container ">
        <div class="row">
          
            <div class="col-md-offset-2 col-md-4">
                    <div class="form-group">
                        <!-- <label>Enter Id Card Number</label> -->
                        <input type="text" class="form-control" name="id_card" id="id_card" placeholder="Enter The Id  Card">
                    </div>
                
            </div>
            <div class="col-md-4">
                    
                       <button   class="btn btn-success btn-sm btn-block"  onclick="get_id_card()"><i class="fs fs-search"></i>&nbsp;&nbsp; Get Id Card</button>
                    
            </div>
        </form>
        </div>
         <div class="row">
            <div class="col-md-offset-2 col-md-4 ajaxresult">
                <!-- <label class="text-center text-success">Result Found...................</label>
                <br/>
                <a href="http://localhost/human_right/frontend/images/pic_hrpws/LOGO-HRPWS copy.png" target="_blank">
                    <img src="http://localhost/human_right/frontend/images/pic_hrpws/LOGO-HRPWS copy.png"  style="height:100px;">
                </a> -->
            </div>
        </div>
      
    
     </div>
</section>
<script src="<?= base_url('admin_assets/js/jquery.min.js'); ?>"></script>
<script type="text/javascript">
    function get_id_card()
    {
        var id_card_no=$('#id_card').val(); 
        if(id_card_no)
        {
            $.ajax({
                url: 'find_id_card',
                data: { id: id_card_no },
                type: 'post',
                success: function(data) {
                    console.log(data)
                    // response = jQuery.parseJSON(data);
                    // console.log(response);
                    $('.ajaxresult').html(data); 
                }             
            });
        }
        else
        {
            // alert('error'); 
            $('.ajaxresult').html('<label class="text-center text-danger"> Enter A Valid Id.......</label>'); 
        }
    }
</script>
