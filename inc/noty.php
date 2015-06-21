<?php
$cookie_name = 'newsletterpop';
if(!isset($_COOKIE[$cookie_name])) {
?>

<script>
var n = noty ({
    layout: 'center',
    theme: 'relax', // or 'relax'
    type: 'alert',
    text: '<form method="post" class="af-form-wrapper" style="padding:7px;" accept-charset="UTF-8" action="https://www.aweber.com/scripts/addlead.pl"><div style="display: none;"><input type="hidden" name="meta_web_form_id" value="13572850" /><input type="hidden" name="meta_split_id" value="" /><input type="hidden" name="listname" value="awlist3850778" /><input type="hidden" name="redirect" value="http://www.wpzoan.com/newsletter-signup/" id="redirect_ea22261a62c34555462514151494f145" /><input type="hidden" name="meta_adtracking" value="Basic_Form" /><input type="hidden" name="meta_message" value="1" /><input type="hidden" name="meta_required" value="name,email" /><input type="hidden" name="meta_tooltip" value="" /></div><div class="row"><div class="col-xs-12 col-md-8"><div class="form-group"><label class="previewLabel" for="awf_field-72435507" style="text-align:left!important;">First Name: </label><br/><input id="awf_field-72435507" type="text" name="name" class="text form-control" value=""  onfocus="" onblur="" tabindex="500" /></div><div class="form-group"><label class="previewLabel" for="awf_field-72435508" style="text-align:left!important;">Email: </label><br/><input class="text form-control" id="awf_field-72435508"  type="text" name="email" value="" tabindex="501" onfocus="" onblur="" /></div></div><div class="col-xs-12 col-md-4"><div style="margin-top:40px;"><input name="submit" id="af-submit-image-13572850" type="submit" class="image btn btn-warning" style="" value="Submit Form" src="" tabindex="502" /></div></div></div><div style="display: none;"><img src="https://forms.aweber.com/form/displays.htm?id=jMys7EwcrAw=" alt="" /></div></form>', // can be html or string
    dismissQueue: true, // If you want to use queue feature set this true
    template: '<div class="noty_message"><span class="noty_text"></span><div class="noty_close"></div></div>',
    animation: {
        open: 'animated swing', // or Animate.css class names like: 'animated bounceInLeft'
        close: 'animated bounceOutRight', // or Animate.css class names like: 'animated bounceOutLeft'
        easing: 'swing',
        speed: 500 // opening & closing animation speed
    },
    timeout: false, // delay for closing event. Set false for sticky notifications
    force: false, // adds notification to the beginning of queue when set to true
    modal: false,
    maxVisible: 5, // you can set max visible notification for dismissQueue true option,
    killer: false, // for close all notifications before show
    closeWith: ['button'], // ['click', 'button', 'hover', 'backdrop'] // backdrop click will close all notifications
    callback: {
        onShow: function() {},
        afterShow: function() {},
        onClose: function() {},
        afterClose: function() {},
        onCloseClick: function() {},
    },
    buttons: false // an array of buttons
});

jQuery('#s').click(function(){
    $noty.close();
});
</script>

<style>
#noty_bottomRight_layout_container {width:600px!important;}
#noty_bottomRight_layout_container li {width:100%!important;}
 #close_btn {position:absolute; top:-180px; right:-20px; height:40px; width:40px; color:#fff; font-weight:700;}
#noty_center_layout_container {width:600px!important; }
#noty_center_layout_container li {width:600px!important; height:350px!important;  background-image:url(<?php echo get_template_directory_uri(); ?>/library/images/5-bck.png);}
.noty_message {width:580px!important; font-size:16px!important; color:#fff!important; margin-top:180px!important;}
.noty_close{position:absolute; top:-170px!important; right:-2px!important; background:url(<?php echo get_template_directory_uri(); ?>/library/images/5-bck.png!important);  } 

@media screen and (max-width: 767px) {
#noty_bottomRight_layout_container {width:310px!important;}
#noty_bottomRight_layout_container li {width:100%!important;}
 #close_btn {position:absolute; top:0px; right:5px; height:40px; width:40px; color:#fff; font-weight:700;}
 .noty_close {position:absolute; top:0px; right:5px; height:40px; width:40px; }
#noty_center_layout_container {width:310px!important; display:none!important; }
#noty_center_layout_container li {width:310px!important; height:350px!important;  background-image:url(<?php echo get_template_directory_uri(); ?>/library/images/5-bck-sm.png);}
.noty_message {width:280px!important; font-size:16px!important; color:#fff!important; margin-top:110px!important;}
.noty_close{position:absolute; top:-170px!important; right:-2px!important; background:url(<?php echo get_template_directory_uri(); ?>/library/images/5-bck-sm.png!important);  } 
#awf_field-72435507 {width:280px!important;}
#awf_field-72435508 {width:280px!important;}
}

</style>

<?php 
}
else
{
	} 
?>