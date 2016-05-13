<?php
function linktag($address) {
    echo "<link rel='stylesheet' type='text/css' href='".base_url()."$address' /> \n";
}
?>
<link rel="shortcut icon" href="favicon.ico">  
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>   
    <!-- Global CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/bootstrap/css/bootstrap.min.css">   
    <!-- Plugins CSS -->    
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/flexslider/flexslider.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/pretty-photo/css/prettyPhoto.css"> 
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/styles.css">
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');
    
      ga('create', 'UA-24707561-9', 'auto');
      ga('send', 'pageview');
    
    </script>
    <!-- Facebook Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
    n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
    document,'script','../../../connect.facebook.net/en_US/fbevents.js');
    
    fbq('init', '1506230579705064');
    fbq('track', "PageView");</script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=1506230579705064&amp;ev=PageView&amp;noscript=1"
    /></noscript>
    <!-- End Facebook Pixel Code -->

<?php
////////////LOADING SYSTEM SETTINGS FOR ALL PAGES AND ACCOUNTS/////////
//$system_name = $this->db->get_where('settings', array('type' => 'system_name'))->row()->description;
//$system_title = $this->db->get_where('settings', array('type' => 'system_title'))->row()->description;
//$system_email = $this->db->get_where('settings', array('type' => 'system_email'))->row()->description;
//$system_phone = $this->db->get_where('settings', array('type' => 'system_phone'))->row()->description;
//?>