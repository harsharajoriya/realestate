<div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
 <div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Enquiry</a>
        </li>
    </ul>
</div>

<div class="row">
<!-- dashboard-->
   <div class="container-fluid">
    <div class="row">
	  <div class="col-md-12" >
              <a style='float: right;' class="btn btn-info text-center" href="<?php echo  base_url('download-csv').'/'.'Enquiry'; ?>" >Download CSV</a>
      </div>
		                      <div class="table-responsive"> 
                                    <!-- THE MESSAGES -->
                                    <table class="table table-mailbox product-table">
                                        <thead>
                                            <tr>
                                                    <th>Date</th>
                                                    <th>Name</th>
                                                    <th>Email id</th>
													<th>Mobile Number</th>
													<th>Enquiry For</th>
                                                    <th>Subject</th>
                                                    <th>Message</th>
                                                    <th>Action</th>
                                                </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if (checkValue($enquiry)) {
                                              foreach ($enquiry as $var) { ?>
                                                <tr>
                                                        <td class=""><?php echo short_date($var->added_dtm); ?></td>
                                                        <td><a href="#"><?php echo $var->first_name.' '.$var->last_name; ?></a></td>
                                                        <td><a href="#"><?php echo $var->email; ?></a></td>
														 <td><a href="#"><?php echo $var->phone; ?></a></td> <td>
														 <a href="#"><?php echo $var->email; ?></a></td>
                                                        <td><a href="#"><?php  echo $var->subject; ?></a></td> 
                                                        <td><span class="more"><?php echo $var->message;?></span></td>
                                                        <td style="width:100px">
                                                             <a href="javascript:void(0)" onclick="delete_data_from_table('enquiry',<?php echo $var->enquiry_id ?>)" title="Delete" class="icon glyphicon-trash"><span></span></a>
                                                        </td>
                                                    </tr>
                                                <?php
                                            }  }else{
                                                echo "<tr><td colspan='5' align='center'>No Comments</td>
                                               <td style='display:none;'></td><td style='display:none;'></td><td style='display:none;'></td><td style='display:none;'></td></tr>";
                                            } ?>
                                        </tbody>
                                    </table>
                                </div>   
    </div>
</div>
</div>
</div>
<!--end dashboard-->
<style type="text/css">
     
.more_content span {
    display: none;
}
</style>
<script type="text/javascript">
     $(function(){
    var showTotalChar = 40, showChar = "Show more", hideChar = "Show less";
    $('.detail_page_desc').each(function(){
        var content = $(this).text();
        if(content.length > showTotalChar){
            var con = content.substr(0, showTotalChar);
            var hcon = content.substr(showTotalChar, content.length - showTotalChar);
            var txt= con +  '<span class="dots">...</span><span class="more_content"><span>' + hcon + '</span>&nbsp;&nbsp;<a href="" class="showmoretxt">' + showChar + '</a></span>';
            $(this).html(txt);
        }
    });
    
    $(".showmoretxt").click(function(){
        if ($(this).hasClass("sample")){
            $(this).removeClass("sample");
            $(this).text(showChar);
        }else{
        $(this).addClass("sample");
        $(this).text(hideChar);
    }
    $(this).parent().prev().toggle();
    $(this).prev().toggle();
    return false;
    });
});

</script>
