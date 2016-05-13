<?php include "twitteroauth.php"; ?>
<div class="content container">
            <div class="page-wrapper">
                <header class="page-heading clearfix">
                   
                    <div class="breadcrumbs pull-right">
                        
                    </div><!--//breadcrumbs-->
                </header> 
                <div class="page-content">
                    <div class="row page-row">
                        <?php echo form_open('defaultController/create', array('class' => 'form-horizontal row-border', 'data-validate' => 'parsley', 'id' => 'validate-form')); ?>
                        <?php
                         $data_tweet = $_GET['data_tweet'];
                                    $category = $_GET['category'];
                        ?>
                        <div class="content-wrapper col-md-10 col-sm-8">  
                            <div class="page-row">
                                <h1 class="no-margin-top has-divider text-highlight">Result For #<?php  echo $data_tweet." in ". $category." Category"; ?> </h1>
                                 <?php
                                    $data_tweet = $_GET['data_tweet'];
                                    $category = $_GET['category'];
                                    //echo $data_tweet;
                                    $consumer_key = "244juJHGp6iVFj0gJYoRL9gIW";
                                    $consumer_secret="dHaplQP88Y4wCZKolv9uMFsTEqaxNi4fFlMP3qUgTQSsGm4dtr";
                                    $access_token="730197517082595328-koWGBqtQgJwkfQOehJYGbWoQSzpDBPC";
                                    $access_token_secret="vdK8DPGPRrt1LXDV1GMwdNCKDjxcjnFBiMhmghASfhPfL";

                                    $twitter = new TwitterOAuth ($consumer_key,$consumer_secret,$access_token,$access_token_secret);
                                    $tweets =  $twitter->get('https://api.twitter.com/1.1/search/tweets.json?q=%'.$data_tweet.'&result_type='.$category.'&count=20');

                                 ?>
                                <div class="table-responsive">                      
                                    <table class="table table-boxed">
                                        <thead>
                                        <tr>
                                                <th><center>Name</center></th>
                                                <th><center>Picture</center></th>
                                                <th><center>Text</center></th>
                                                <th><center>Retweet </center></th>
                                                <th><center>Location </center></th>
                                                <th><center>Created At </center></th>
                                        </tr>
                                </thead>
                                <input type="hidden" name="hashtag" value="<?php echo $data_tweet;?>"> 
				<input type="hidden" name="category" value="<?php echo $category;?>">
                                <tbody>
                                        <?php $count=1;foreach ($tweets->statuses as $key => $tweet){   ?>
                                        <tr>
                                                <td><center> <input type="hidden" name="user_name<?php echo $count?>" value="<?=$tweet->user->name;?>"> <?=$tweet->user->name;?> </center></td>
                                                <td><center> <input type="hidden" name="user_profile_image_url<?php echo $count?>" value="<?=$tweet->user->profile_image_url;?>"> <img src="<?=$tweet->user->profile_image_url;?>" /> </center></td>
                                                <td><center> <input type="hidden" name="user_text<?php echo $count?>" value="<?=$tweet->text;?>"> <?=$tweet->text;?> </center></td>
                                                <td><center> <input type="hidden" name="user_retweet_count<?php echo $count?>" value="<?=$tweet->retweet_count;?>"> <?=$tweet->retweet_count;?> </center></td>
                                                <td><center> <input type="hidden" name="user_location<?php echo $count?>" value="<?=$tweet->user->location;?>"> <?=$tweet->user->location;?> </center></td>
                                                <td><center> <input type="hidden" name="user_created_at<?php echo $count?>" value="<?=$tweet->created_at;?>"> <?=$tweet->created_at;?> </center></td>


                                        </tr>	
                                <?php $count++;} ?>
                                </tbody>
                                    </table><!--//table-->
                                <input type="hidden" name="count" value="<?php echo $count?>"/>
                                </div><!--//table-responsive--> 
                                <input type="submit" class="btn btn-mini btn-primary" value="Submit">
                                <a class="btn btn-mini btn-danger" title= "See Details" href="<?php echo base_url() ?>">Back</a>
                            </div><!--//page-row-->                                                                    
                        </div><!--//content-wrapper-->
                        
                        <?php echo form_close(); ?>  
                    </div><!--//page-row-->
                </div><!--//page-content-->
            </div><!--//page--> 
        </div><!--//content--