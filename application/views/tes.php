<?php include "twitteroauth.php"; ?>
<div class="content container">
            <div class="page-wrapper">
                <header class="page-heading clearfix">
                    <h1 class="heading-title pull-left">Hastag Data</h1>
                    <div class="breadcrumbs pull-right">
                        
                    </div><!--//breadcrumbs-->
                </header>
                <?php
                    
                    
                ?>
                <br>
                <br>
                <div class="page-content">
                    <div class="row">
                        <article class="contact-form col-md-8 col-sm-7  page-row">                            
                           <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" >
                                    <thead>
                                            <tr>
                                                    <th><center>Hashtag</center></th>
                                                    <th><center>Category</center></th>
                                                    <th><center>Action</center></th>
                                                   
                                                   
                                            </tr>
                                    </thead>
                                    <tbody>
                                            <?php foreach($result as $data) 
                            {  
                      //display the records  
                        ?>
                                            <tr>
                                                    
                                                    <td><center>  <?php echo $data['hashtag'];?> </center></td>
                                                    <td><center>  <?php echo $data['category'];?> </center></td>
                                                    <td><center>   <a class="btn btn-mini btn-success" title= "See Details" href="details?id_st=<?php echo $data['_id'];?>">See Details</a>  </center></td>
                                                   
                                                    
                                            </tr>	
                                    <?php } ?>
                                    </tbody>
                            </table><!--end table-->  
                            <a class="btn btn-mini btn-primary" title= "See Details" href="<?php echo base_url() ?>">Find More Hastag</a>
                        </article><!--//contact-form-->
                        
                    </div><!--//page-row-->
                    
                </div><!--//page-content-->
            </div><!--//page-wrapper--> 
        </div><!--//content-->