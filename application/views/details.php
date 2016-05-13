<?php include "twitteroauth.php"; 
foreach($result as $data){
?>
<div class="content container">
            <div class="page-wrapper">
                <header class="page-heading clearfix">
                    <h1 class="heading-title pull-left">Hastag Data for #<?php echo $data['hashtag']." in ".$data['category']." Category" ;?></h1>
                    
                </header>
               
                <br>
                <br>
                <div class="breadcrumbs pull-right">
                       
                    </div><!--//breadcrumbs-->
                <div class="page-content">
                    
                    <div class="row">
                        
                        <article class="contact-form col-md-8 col-sm-7  page-row">                            
                           <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" >
                                    <thead>
                                        <tr>
                                            <th><center>Username</center></th>
                                            <th><center>Profil Image</center></th>
                                            <th><center>Tweet </center></th>
                                            <th><center>Retweet Count </center></th>
                                            <th><center>Location </center></th>
                                            <th><center>Created At </center></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                                for($i = 0; $i < count($data['detail']); $i++) {
                                                    $post_user_name = $data['detail'][$i]['user_name'];
                                                    $post_user_profile_image_url = $data['detail'][$i]['user_profile_image_url']; 																	  
                                                    $post_user_text = $data['detail'][$i]['user_text'];
                                                    $post_user_retweet_count = $data['detail'][$i]['user_retweet_count'];
                                                    $post_user_location = $data['detail'][$i]['user_location'];
                                                    $post_user_created_at = $data['detail'][$i]['user_created_at'];
                       
                                        ?>
                                      <tr>
                                            <td><center> <?php echo $post_user_name; ?> </center></td>
                                            <td><center> <img src="<?php echo $post_user_profile_image_url?>" /></center></td>
                                            <td><center> <?php echo $post_user_text; ?> </center></td>
                                            <td><center> <?php echo $post_user_retweet_count; ?> </center></td>
                                            <td><center> <?php echo $post_user_location; ?> </center></td>
                                            <td><center> <?php echo $post_user_created_at; ?> </center></td>

                                       </tr>	
                                    <?php }}?>
                                    </tbody>
                            </table><!--end table-->  
                            <br>
                            <a class="btn btn-mini btn-success" title= "See Details" href="tes">Back</a>
                        </article><!--//contact-form-->
                        
                    </div><!--//page-row-->
                    
                </div><!--//page-content-->
            </div><!--//page-wrapper--> 
        </div><!--//content-->