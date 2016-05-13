<div class="content container">
            <div class="page-wrapper">
                <header class="page-heading clearfix">
                    <h1 class="heading-title pull-left">Find a Twitter Hashtag</h1>
                    <div class="breadcrumbs pull-right">
                        <ul class="breadcrumbs-list">
                           
                        </ul>
                    </div><!--//breadcrumbs-->
                </header> 
                <div class="page-content">
                    <div class="row">
                        <article class="contact-form col-md-8 col-sm-7  page-row">                            
                           <form action="<?php echo base_url(); ?>defaultController/result">
                                <div class="form-group name">
                                    <label for="name">Name</label>
                                    <select id="category" name="category" class="form-control">
                                        <option value="top">Top</option>
                                        <option value="live">Live</option>
                                    </select>
                                </div><!--//form-group-->
                                <div class="form-group email">
                                    <label for="email">Hastag<span class="required">*</span></label>
                                    <input id="email" type="text" name="data_tweet" class="form-control" placeholder="Enter your hashtag" required>
                                </div><!--//form-group-->
                                
                                <button type="submit" class="btn btn-mini btn-primary">Find</button>
                                <a class="btn btn-mini btn-success" title= "See Details" href="defaultController/tes">See Saved hastag Data</a>
                            </form>                  
                        </article><!--//contact-form-->
                        
                    </div><!--//page-row-->
                    
                </div><!--//page-content-->
            </div><!--//page-wrapper--> 
        </div><!--//content-->