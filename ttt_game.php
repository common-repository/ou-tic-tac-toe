<?php
if(!defined('ABSPATH')) exit;
$outttcode = $_POST['nonce'];
if (!wp_verify_nonce($outttcode, 'vt4dksrk'))
{
    wp_die();
}

$ougender = sanitize_text_field($_POST['ougender']);

if($ougender == 'girl' || $ougender == 'boy' )
{
    $ou_tttfile1 = plugin_dir_url( __FILE__ );
    $ou_tttfileboy = $ou_tttfile1.'images/boy.png';
    $ou_tttfilegirl = $ou_tttfile1.'images/girl.png';
    ?>
    <div style="margin:5px; width:399px; height:399px; overflow:hidden;">
        <?php
        $outtti2='';
        $outtti='';
        ?>
        
        <input type="hidden" autocomplete="off" id="tttgallik" value="9">
        
        <input type="hidden" autocomplete="off" id="tttgfieldc1" value="0">
        <input type="hidden" autocomplete="off" id="tttgfieldc2" value="0">
        <input type="hidden" autocomplete="off" id="tttgfieldc3" value="0">
        <input type="hidden" autocomplete="off" id="tttgfieldc4" value="0">
        <input type="hidden" autocomplete="off" id="tttgfieldc5" value="0">
        <input type="hidden" autocomplete="off" id="tttgfieldc6" value="0">
        <input type="hidden" autocomplete="off" id="tttgfieldc7" value="0">
        <input type="hidden" autocomplete="off" id="tttgfieldc8" value="0">
        <input type="hidden" autocomplete="off" id="tttgfieldc9" value="0">
        
        <input type="hidden" autocomplete="off" id="tttgfielda1" value="0">
        <input type="hidden" autocomplete="off" id="tttgfielda2" value="0">
        <input type="hidden" autocomplete="off" id="tttgfielda3" value="0">
        <input type="hidden" autocomplete="off" id="tttgfielda4" value="0">
        <input type="hidden" autocomplete="off" id="tttgfielda5" value="0">
        <input type="hidden" autocomplete="off" id="tttgfielda6" value="0">
        <input type="hidden" autocomplete="off" id="tttgfielda7" value="0">
        <input type="hidden" autocomplete="off" id="tttgfielda8" value="0">
        <input type="hidden" autocomplete="off" id="tttgfielda9" value="0">
        
        <input type="hidden" autocomplete="off" id="tttgfield1" value="0">
        <input type="hidden" autocomplete="off" id="tttgfield2" value="0">
        <input type="hidden" autocomplete="off" id="tttgfield3" value="0">
        <input type="hidden" autocomplete="off" id="tttgfield4" value="0">
        <input type="hidden" autocomplete="off" id="tttgfield5" value="0">
        <input type="hidden" autocomplete="off" id="tttgfield6" value="0">
        <input type="hidden" autocomplete="off" id="tttgfield7" value="0">
        <input type="hidden" autocomplete="off" id="tttgfield8" value="0">
        <input type="hidden" autocomplete="off" id="tttgfield9" value="0">
        
        <script>
        jQuery(document).ready(function(){
        jQuery("#tttgfieldc1").val('0');
        jQuery("#tttgfieldc2").val('0');
        jQuery("#tttgfieldc3").val('0');
        jQuery("#tttgfieldc4").val('0');
        jQuery("#tttgfieldc5").val('0');
        jQuery("#tttgfieldc6").val('0');
        jQuery("#tttgfieldc7").val('0');
        jQuery("#tttgfieldc8").val('0');
        jQuery("#tttgfieldc9").val('0');
                  
        jQuery("#tttgfield1").val('0');
        jQuery("#tttgfield2").val('0');
        jQuery("#tttgfield3").val('0');
        jQuery("#tttgfield4").val('0');
        jQuery("#tttgfield5").val('0');
        jQuery("#tttgfield6").val('0');
        jQuery("#tttgfield7").val('0');
        jQuery("#tttgfield8").val('0');
        jQuery("#tttgfield9").val('0');
            
        jQuery("#tttgfielda1").val('0');
        jQuery("#tttgfielda2").val('0');
        jQuery("#tttgfielda3").val('0');
        jQuery("#tttgfielda4").val('0');
        jQuery("#tttgfielda5").val('0');
        jQuery("#tttgfielda6").val('0');
        jQuery("#tttgfielda7").val('0');
        jQuery("#tttgfielda8").val('0');
        jQuery("#tttgfielda9").val('0');
            
        jQuery("#tttgallik").val('9');
        });   
        </script>
        
        <script>
        function ttt_timer1()
        {
            jQuery("#ou_tttgameid").hide();  
            jQuery("#ou_tttgameid_lost").show(); 
            jQuery("#ou_tttgameid").empty();
            clearTimeout(ttt_timer1_content);
        }
        </script>
        
        <script>
        function ttt_computer()
        {
            var c1 = jQuery("#tttgfieldc1").val();
            var c2 = jQuery("#tttgfieldc2").val();
            var c3 = jQuery("#tttgfieldc3").val();
            var c4 = jQuery("#tttgfieldc4").val();
            var c5 = jQuery("#tttgfieldc5").val();
            var c6 = jQuery("#tttgfieldc6").val();
            var c7 = jQuery("#tttgfieldc7").val();
            var c8 = jQuery("#tttgfieldc8").val();
            var c9 = jQuery("#tttgfieldc9").val();
            
            
            var me1 = jQuery("#tttgfield1").val();
            var me2 = jQuery("#tttgfield2").val();
            var me3 = jQuery("#tttgfield3").val();
            var me4 = jQuery("#tttgfield4").val();
            var me5 = jQuery("#tttgfield5").val();
            var me6 = jQuery("#tttgfield6").val();
            var me7 = jQuery("#tttgfield7").val();
            var me8 = jQuery("#tttgfield8").val();
            var me9 = jQuery("#tttgfield9").val();
            
            var you1 = jQuery("#tttgfielda1").val();
            var you2 = jQuery("#tttgfielda2").val();
            var you3 = jQuery("#tttgfielda3").val();
            var you4 = jQuery("#tttgfielda4").val();
            var you5 = jQuery("#tttgfielda5").val();
            var you6 = jQuery("#tttgfielda6").val();
            var you7 = jQuery("#tttgfielda7").val();
            var you8 = jQuery("#tttgfielda8").val();
            var you9 = jQuery("#tttgfielda9").val();
            
            var ttall = jQuery("#tttgallik").val();
            
            if(c1==0)
            {
                c1a = ',1';
            }
            if(c2==0)
            {
                c2a = ',2';
            }
            if(c3==0)
            {
                c3a = ',3';
            }
            if(c4==0)
            {
                c4a = ',4';
            }
            if(c5==0)
            {
                c5a = ',5';
            }
            if(c6==0)
            {
                c6a = ',6';
            }
            if(c7==0)
            {
                c7a = ',7';
            }
            if(c8==0)
            {
                c8a = ',8';
            }
            if(c9==0)
            {
                c9a = ',9';
            }
            
            
            if(c1==1)
            {
                c1a = '';
            }
            if(c2==1)
            {
                c2a = '';
            }
            if(c3==1)
            {
                c3a = '';
            }
            if(c4==1)
            {
                c4a = '';
            }
            if(c5==1)
            {
                c5a = '';
            }
            if(c6==1)
            {
                c6a = '';
            }
            if(c7==1)
            {
                c7a = '';
            }
            if(c8==1)
            {
                c8a = '';
            }
            if(c9==1)
            {
                c9a = '';
            }
            
            var cv1 = '1';
            var cv2 = '2';
            var cv3 = '3';
            var cv4 = '4';
            var cv5 = '5';
            var cv6 = '6';
            var cv7 = '7';
            var cv8 = '8';
            var cv9 = '9';
            var ggender2 = '<?php echo $ougender;?>';
            var carryall2 = c1a+c2a+c3a+c4a+c5a+c6a+c7a+c8a+c9a;
            var carryall = new Array();
            
            carryall = carryall2.split(",");
            carryall = carryall.filter(Boolean);
            
            var arrresultk = carryall[Math.floor(Math.random()*(carryall.length))];
            var arrresult = jQuery.trim(arrresultk);
            var ttttimer1 = 0;
            if(ttall <=9)
            {
                if(ggender2 == 'boy')
                {
                    if(you1==1 && you2==1 && c3 == 0)
                    {
                        jQuery("#tttgres3").append('<img src="<?php echo esc_url($ou_tttfilegirl);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda3").val('1');
                        jQuery("#tttgfieldc3").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3); 
                        
                        
                        jQuery("#tttg1").css("background","#800000");
                        jQuery("#tttg2").css("background","#800000");
                        jQuery("#tttg3").css("background","#800000");
                      
                        var ttt_timer1_content = setTimeout(ttt_timer1, 2000);
                       
                    }
                    else
                    if(you2==1 && you3==1 && c1 == 0)
                    {
                        jQuery("#tttgres1").append('<img src="<?php echo esc_url($ou_tttfilegirl);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda1").val('1');
                        jQuery("#tttgfieldc1").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3);  
                        
                        jQuery("#tttg1").css("background","#800000");
                        jQuery("#tttg2").css("background","#800000");
                        jQuery("#tttg3").css("background","#800000");
                    
                        var ttt_timer1_content = setTimeout(ttt_timer1, 2000);
                    }
                    else
                    if(you1==1 && you3==1 && c2 == 0)
                    {
                        jQuery("#tttgres2").append('<img src="<?php echo esc_url($ou_tttfilegirl);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda2").val('1');
                        jQuery("#tttgfieldc2").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3); 
                        
                        jQuery("#tttg1").css("background","#800000");
                        jQuery("#tttg2").css("background","#800000");
                        jQuery("#tttg3").css("background","#800000");
                    
                        var ttt_timer1_content = setTimeout(ttt_timer1, 2000);
                        
                    }
                    else
                    if(you4==1 && you5==1 && c6 == 0)
                    {
                        jQuery("#tttgres6").append('<img src="<?php echo esc_url($ou_tttfilegirl);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda6").val('1');
                        jQuery("#tttgfieldc6").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3);  
                        
                        jQuery("#tttg4").css("background","#800000");
                        jQuery("#tttg5").css("background","#800000");
                        jQuery("#tttg6").css("background","#800000");
                    
                        var ttt_timer1_content = setTimeout(ttt_timer1, 2000);
                        
                    }
                    else
                    if(you5==1 && you6==1 && c4 == 0)
                    {
                        jQuery("#tttgres4").append('<img src="<?php echo esc_url($ou_tttfilegirl);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda4").val('1');
                        jQuery("#tttgfieldc4").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3); 
                        
                        jQuery("#tttg4").css("background","#800000");
                        jQuery("#tttg5").css("background","#800000");
                        jQuery("#tttg6").css("background","#800000");
                    
                        var ttt_timer1_content = setTimeout(ttt_timer1, 2000);
                    }
                    else
                    if(you4==1 && you6==1 && c5 == 0)
                    {
                        jQuery("#tttgres5").append('<img src="<?php echo esc_url($ou_tttfilegirl);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda5").val('1');
                        jQuery("#tttgfieldc5").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3);
                        
                        jQuery("#tttg4").css("background","#800000");
                        jQuery("#tttg5").css("background","#800000");
                        jQuery("#tttg6").css("background","#800000");
                    
                        var ttt_timer1_content = setTimeout(ttt_timer1, 2000);
                    }
                    else
                    if(you7==1 && you8==1 && c9 == 0)
                    {
                        jQuery("#tttgres9").append('<img src="<?php echo esc_url($ou_tttfilegirl);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda9").val('1');
                        jQuery("#tttgfieldc9").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3); 
                        
                        jQuery("#tttg7").css("background","#800000");
                        jQuery("#tttg8").css("background","#800000");
                        jQuery("#tttg9").css("background","#800000");
                    
                        var ttt_timer1_content = setTimeout(ttt_timer1, 2000);
                        
                    }
                    else
                    if(you8==1 && you9==1 && c7 == 0)
                    {
                        jQuery("#tttgres7").append('<img src="<?php echo esc_url($ou_tttfilegirl);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda7").val('1');
                        jQuery("#tttgfieldc7").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3);
                        
                        jQuery("#tttg7").css("background","#800000");
                        jQuery("#tttg8").css("background","#800000");
                        jQuery("#tttg9").css("background","#800000");
                    
                        var ttt_timer1_content = setTimeout(ttt_timer1, 2000);
                    }
                    else
                    if(you7==1 && you9==1 && c8 == 0)
                    {
                        jQuery("#tttgres8").append('<img src="<?php echo esc_url($ou_tttfilegirl);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda8").val('1');
                        jQuery("#tttgfieldc8").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3);
                        
                        jQuery("#tttg7").css("background","#800000");
                        jQuery("#tttg8").css("background","#800000");
                        jQuery("#tttg9").css("background","#800000");
                    
                        var ttt_timer1_content = setTimeout(ttt_timer1, 2000);
                       
                    }
                    else
                    if(you1==1 && you5==1 && c9 == 0)
                    {
                        jQuery("#tttgres9").append('<img src="<?php echo esc_url($ou_tttfilegirl);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda9").val('1');
                        jQuery("#tttgfieldc9").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3); 
                        
                        jQuery("#tttg1").css("background","#800000");
                        jQuery("#tttg5").css("background","#800000");
                        jQuery("#tttg9").css("background","#800000");
                    
                        var ttt_timer1_content = setTimeout(ttt_timer1, 2000);
                        
                    }
                    else
                    if(you5==1 && you9==1 && c1 == 0)
                    {
                        jQuery("#tttgres1").append('<img src="<?php echo esc_url($ou_tttfilegirl);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda1").val('1');
                        jQuery("#tttgfieldc1").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3);
                        
                        jQuery("#tttg1").css("background","#800000");
                        jQuery("#tttg5").css("background","#800000");
                        jQuery("#tttg9").css("background","#800000");
                    
                        var ttt_timer1_content = setTimeout(ttt_timer1, 2000);
                        
                    }
                    else
                    if(you1==1 && you9==1 && c5 == 0)
                    {
                        jQuery("#tttgres5").append('<img src="<?php echo esc_url($ou_tttfilegirl);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda5").val('1');
                        jQuery("#tttgfieldc5").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3);
                        
                        jQuery("#tttg1").css("background","#800000");
                        jQuery("#tttg5").css("background","#800000");
                        jQuery("#tttg9").css("background","#800000");
                    
                        var ttt_timer1_content = setTimeout(ttt_timer1, 2000);
                    }
                    else
                    if(you3==1 && you5==1 && c7 == 0)
                    {
                        jQuery("#tttgres7").append('<img src="<?php echo esc_url($ou_tttfilegirl);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda7").val('1');
                        jQuery("#tttgfieldc7").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3); 
                        
                        jQuery("#tttg3").css("background","#800000");
                        jQuery("#tttg5").css("background","#800000");
                        jQuery("#tttg7").css("background","#800000");
                    
                        var ttt_timer1_content = setTimeout(ttt_timer1, 2000);
                    }
                    else
                    if(you5==1 && you7==1 && c3 == 0)
                    {
                        jQuery("#tttgres3").append('<img src="<?php echo esc_url($ou_tttfilegirl);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda3").val('1');
                        jQuery("#tttgfieldc3").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3);
                        
                        jQuery("#tttg3").css("background","#800000");
                        jQuery("#tttg5").css("background","#800000");
                        jQuery("#tttg7").css("background","#800000");
                    
                        var ttt_timer1_content = setTimeout(ttt_timer1, 2000);
                    }
                    else
                    if(you3==1 && you7==1 && c5 == 0)
                    {
                        jQuery("#tttgres5").append('<img src="<?php echo esc_url($ou_tttfilegirl);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda5").val('1');
                        jQuery("#tttgfieldc5").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3);
                        
                        jQuery("#tttg3").css("background","#800000");
                        jQuery("#tttg5").css("background","#800000");
                        jQuery("#tttg7").css("background","#800000");
                    
                        var ttt_timer1_content = setTimeout(ttt_timer1, 2000);
                    }
                    else
                    if(you1==1 && you4==1 && c7 == 0)
                    {
                        jQuery("#tttgres7").append('<img src="<?php echo esc_url($ou_tttfilegirl);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda7").val('1');
                        jQuery("#tttgfieldc7").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3);
                        
                        jQuery("#tttg1").css("background","#800000");
                        jQuery("#tttg4").css("background","#800000");
                        jQuery("#tttg7").css("background","#800000");
                
                        var ttt_timer1_content = setTimeout(ttt_timer1, 2000);
                    }
                    else
                    if(you4==1 && you7==1 && c1 == 0)
                    {
                        jQuery("#tttgres1").append('<img src="<?php echo esc_url($ou_tttfilegirl);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda1").val('1');
                        jQuery("#tttgfieldc1").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3); 
                        
                        jQuery("#tttg1").css("background","#800000");
                        jQuery("#tttg4").css("background","#800000");
                        jQuery("#tttg7").css("background","#800000");
                    
                        var ttt_timer1_content = setTimeout(ttt_timer1, 2000);
                    }
                    else
                    if(you1==1 && you7==1 && c4 == 0)
                    {
                        jQuery("#tttgres4").append('<img src="<?php echo esc_url($ou_tttfilegirl);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda4").val('1');
                        jQuery("#tttgfieldc4").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3);  
                        
                        jQuery("#tttg1").css("background","#800000");
                        jQuery("#tttg4").css("background","#800000");
                        jQuery("#tttg7").css("background","#800000");
                    
                        var ttt_timer1_content = setTimeout(ttt_timer1, 2000);
                    }
                    else
                    if(you2==1 && you5==1 && c8 == 0)
                    {
                        jQuery("#tttgres8").append('<img src="<?php echo esc_url($ou_tttfilegirl);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda8").val('1');
                        jQuery("#tttgfieldc8").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3);  
                        
                        jQuery("#tttg2").css("background","#800000");
                        jQuery("#tttg5").css("background","#800000");
                        jQuery("#tttg8").css("background","#800000");
                    
                        var ttt_timer1_content = setTimeout(ttt_timer1, 2000);
                    }
                    else
                    if(you5==1 && you8==1 && c2 == 0)
                    {
                        jQuery("#tttgres2").append('<img src="<?php echo esc_url($ou_tttfilegirl);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda2").val('1');
                        jQuery("#tttgfieldc2").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3); 
                        
                        jQuery("#tttg2").css("background","#800000");
                        jQuery("#tttg5").css("background","#800000");
                        jQuery("#tttg8").css("background","#800000");
                        var ttt_timer1_content = setTimeout(ttt_timer1, 2000);
                    }
                    else
                    if(you2==1 && you8==1 && c5 == 0)
                    {
                        jQuery("#tttgres5").append('<img src="<?php echo esc_url($ou_tttfilegirl);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda5").val('1');
                        jQuery("#tttgfieldc5").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3); 
                        
                        jQuery("#tttg2").css("background","#800000");
                        jQuery("#tttg5").css("background","#800000");
                        jQuery("#tttg8").css("background","#800000");
                    
                        var ttt_timer1_content = setTimeout(ttt_timer1, 2000);
                    }
                    else
                    if(you3==1 && you6==1 && c9 == 0)
                    {
                        jQuery("#tttgres9").append('<img src="<?php echo esc_url($ou_tttfilegirl);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda9").val('1');
                        jQuery("#tttgfieldc9").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3);
                        
                        jQuery("#tttg3").css("background","#800000");
                        jQuery("#tttg6").css("background","#800000");
                        jQuery("#tttg9").css("background","#800000");
                    
                        var ttt_timer1_content = setTimeout(ttt_timer1, 2000);
                    }
                    else
                    if(you6==1 && you9==1 && c3 == 0)
                    {
                        jQuery("#tttgres3").append('<img src="<?php echo esc_url($ou_tttfilegirl);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda3").val('1');
                        jQuery("#tttgfieldc3").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3); 
                        
                        jQuery("#tttg3").css("background","#800000");
                        jQuery("#tttg6").css("background","#800000");
                        jQuery("#tttg9").css("background","#800000");
                    
                        var ttt_timer1_content = setTimeout(ttt_timer1, 2000);
                        
                    }
                    else
                    if(you3==1 && you9==1 && c6 == 0)
                    {
                        jQuery("#tttgres6").append('<img src="<?php echo esc_url($ou_tttfilegirl);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda6").val('1');
                        jQuery("#tttgfieldc6").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3); 
                        
                        jQuery("#tttg3").css("background","#800000");
                        jQuery("#tttg6").css("background","#800000");
                        jQuery("#tttg9").css("background","#800000");
                    
                        var ttt_timer1_content = setTimeout(ttt_timer1, 2000);
                    }  
                    else
                    if(me1==1 && me2==1 && c3 == 0)
                    {
                        jQuery("#tttgres3").append('<img src="<?php echo esc_url($ou_tttfilegirl);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda3").val('1');
                        jQuery("#tttgfieldc3").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3);  
                    }
                    else
                    if(me2==1 && me3==1 && c1 == 0)
                    {
                        jQuery("#tttgres1").append('<img src="<?php echo esc_url($ou_tttfilegirl);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda1").val('1');
                        jQuery("#tttgfieldc1").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3);  
                    }
                    else
                    if(me1==1 && me3==1 && c2 == 0)
                    {
                        jQuery("#tttgres2").append('<img src="<?php echo esc_url($ou_tttfilegirl);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda2").val('1');
                        jQuery("#tttgfieldc2").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3);  
                    }
                    else
                    if(me4==1 && me5==1 && c6 == 0)
                    {
                        jQuery("#tttgres6").append('<img src="<?php echo esc_url($ou_tttfilegirl);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda6").val('1');
                        jQuery("#tttgfieldc6").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3);  
                    }
                    else
                    if(me5==1 && me6==1 && c4 == 0)
                    {
                        jQuery("#tttgres4").append('<img src="<?php echo esc_url($ou_tttfilegirl);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda4").val('1');
                        jQuery("#tttgfieldc4").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3);  
                    }
                    else
                    if(me4==1 && me6==1 && c5 == 0)
                    {
                        jQuery("#tttgres5").append('<img src="<?php echo esc_url($ou_tttfilegirl);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda5").val('1');
                        jQuery("#tttgfieldc5").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3);  
                    }
                    else
                    if(me7==1 && me8==1 && c9 == 0)
                    {
                        jQuery("#tttgres9").append('<img src="<?php echo esc_url($ou_tttfilegirl);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda9").val('1');
                        jQuery("#tttgfieldc9").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3);  
                    }
                    else
                    if(me8==1 && me9==1 && c7 == 0)
                    {
                        jQuery("#tttgres7").append('<img src="<?php echo esc_url($ou_tttfilegirl);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda7").val('1');
                        jQuery("#tttgfieldc7").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3);  
                    }
                    else
                    if(me7==1 && me9==1 && c8 == 0)
                    {
                        jQuery("#tttgres8").append('<img src="<?php echo esc_url($ou_tttfilegirl);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda8").val('1');
                        jQuery("#tttgfieldc8").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3);  
                    }
                    else
                    if(me1==1 && me5==1 && c9 == 0)
                    {
                        jQuery("#tttgres9").append('<img src="<?php echo esc_url($ou_tttfilegirl);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda9").val('1');
                        jQuery("#tttgfieldc9").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3);  
                    }
                    else
                    if(me5==1 && me9==1 && c1 == 0)
                    {
                        jQuery("#tttgres1").append('<img src="<?php echo esc_url($ou_tttfilegirl);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda1").val('1');
                        jQuery("#tttgfieldc1").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3);  
                    }
                    else
                    if(me1==1 && me9==1 && c5 == 0)
                    {
                        jQuery("#tttgres5").append('<img src="<?php echo esc_url($ou_tttfilegirl);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda5").val('1');
                        jQuery("#tttgfieldc5").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3);  
                    }
                    else
                    if(me3==1 && me5==1 && c7 == 0)
                    {
                        jQuery("#tttgres7").append('<img src="<?php echo esc_url($ou_tttfilegirl);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda7").val('1');
                        jQuery("#tttgfieldc7").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3);  
                    }
                    else
                    if(me5==1 && me7==1 && c3 == 0)
                    {
                        jQuery("#tttgres3").append('<img src="<?php echo esc_url($ou_tttfilegirl);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda3").val('1');
                        jQuery("#tttgfieldc3").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3);  
                    }
                    else
                    if(me3==1 && me7==1 && c5 == 0)
                    {
                        jQuery("#tttgres5").append('<img src="<?php echo esc_url($ou_tttfilegirl);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda5").val('1');
                        jQuery("#tttgfieldc5").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3);  
                    }
                    else
                    if(me1==1 && me4==1 && c7 == 0)
                    {
                        jQuery("#tttgres7").append('<img src="<?php echo esc_url($ou_tttfilegirl);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda7").val('1');
                        jQuery("#tttgfieldc7").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3);  
                    }
                    else
                    if(me4==1 && me7==1 && c1 == 0)
                    {
                        jQuery("#tttgres1").append('<img src="<?php echo esc_url($ou_tttfilegirl);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda1").val('1');
                        jQuery("#tttgfieldc1").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3);  
                    }
                    else
                    if(me1==1 && me7==1 && c4 == 0)
                    {
                        jQuery("#tttgres4").append('<img src="<?php echo esc_url($ou_tttfilegirl);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda4").val('1');
                        jQuery("#tttgfieldc4").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3);  
                    }
                    else
                    if(me2==1 && me5==1 && c8 == 0)
                    {
                        jQuery("#tttgres8").append('<img src="<?php echo esc_url($ou_tttfilegirl);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda8").val('1');
                        jQuery("#tttgfieldc8").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3);  
                    }
                    else
                    if(me5==1 && me8==1 && c2 == 0)
                    {
                        jQuery("#tttgres2").append('<img src="<?php echo esc_url($ou_tttfilegirl);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda2").val('1');
                        jQuery("#tttgfieldc2").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3);  
                    }
                    else
                    if(me2==1 && me8==1 && c5 == 0)
                    {
                        jQuery("#tttgres5").append('<img src="<?php echo esc_url($ou_tttfilegirl);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda5").val('1');
                        jQuery("#tttgfieldc5").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3);  
                    }
                    else
                    if(me3==1 && me6==1 && c9 == 0)
                    {
                        jQuery("#tttgres9").append('<img src="<?php echo esc_url($ou_tttfilegirl);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda9").val('1');
                        jQuery("#tttgfieldc9").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3);  
                    }
                    else
                    if(me6==1 && me9==1 && c3 == 0)
                    {
                        jQuery("#tttgres3").append('<img src="<?php echo esc_url($ou_tttfilegirl);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda3").val('1');
                        jQuery("#tttgfieldc3").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3);  
                    }
                    else
                    if(me3==1 && me9==1 && c6 == 0)
                    {
                        jQuery("#tttgres6").append('<img src="<?php echo esc_url($ou_tttfilegirl);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda6").val('1');
                        jQuery("#tttgfieldc6").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3);  
                    }   
                    else
                    {
                        if(arrresult == cv1)
                        {
                            jQuery("#tttgres1").append('<img src="<?php echo esc_url($ou_tttfilegirl);?>" border="none" style="width:111px; height:111px;">');
                            jQuery("#tttgfielda1").val('1');
                            jQuery("#tttgfieldc1").val('1');
                            var ttall3 = ttall - 1;
                            jQuery("#tttgallik").val(ttall3);
                        }
                        else
                        if(arrresult == cv2)
                        {
                            jQuery("#tttgres2").append('<img src="<?php echo esc_url($ou_tttfilegirl);?>" border="none" style="width:111px; height:111px;">');
                            jQuery("#tttgfielda2").val('1');
                            jQuery("#tttgfieldc2").val('1');
                            var ttall3 = ttall - 1;
                            jQuery("#tttgallik").val(ttall3);
                        }
                        else
                        if(arrresult == cv3)
                        {
                            jQuery("#tttgres3").append('<img src="<?php echo esc_url($ou_tttfilegirl);?>" border="none" style="width:111px; height:111px;">');
                            jQuery("#tttgfielda3").val('1');
                            jQuery("#tttgfieldc3").val('1');
                            var ttall3 = ttall - 1;
                            jQuery("#tttgallik").val(ttall3);
                        }
                        else
                        if(arrresult == cv4)
                        {
                            jQuery("#tttgres4").append('<img src="<?php echo esc_url($ou_tttfilegirl);?>" border="none" style="width:111px; height:111px;">');
                            jQuery("#tttgfielda4").val('1');
                            jQuery("#tttgfieldc4").val('1');
                            var ttall3 = ttall - 1;
                            jQuery("#tttgallik").val(ttall3);
                        }
                        else
                        if(arrresult == cv5)
                        {
                            jQuery("#tttgres5").append('<img src="<?php echo esc_url($ou_tttfilegirl);?>" border="none" style="width:111px; height:111px;">');
                            jQuery("#tttgfielda5").val('1');
                            jQuery("#tttgfieldc5").val('1');
                            var ttall3 = ttall - 1;
                            jQuery("#tttgallik").val(ttall3);
                        }
                        else
                        if(arrresult == cv6)
                        {
                            jQuery("#tttgres6").append('<img src="<?php echo esc_url($ou_tttfilegirl);?>" border="none" style="width:111px; height:111px;">');
                            jQuery("#tttgfielda6").val('1');
                            jQuery("#tttgfieldc6").val('1');
                            var ttall3 = ttall - 1;
                            jQuery("#tttgallik").val(ttall3);
                        }
                        else
                        if(arrresult == cv7)
                        {
                            jQuery("#tttgres7").append('<img src="<?php echo esc_url($ou_tttfilegirl);?>" border="none" style="width:111px; height:111px;">');
                            jQuery("#tttgfielda7").val('1');
                            jQuery("#tttgfieldc7").val('1');
                            var ttall3 = ttall - 1;
                            jQuery("#tttgallik").val(ttall3);
                        }
                        else
                        if(arrresult == cv8)
                        {
                            jQuery("#tttgres8").append('<img src="<?php echo esc_url($ou_tttfilegirl);?>" border="none" style="width:111px; height:111px;">');
                            jQuery("#tttgfielda8").val('1');
                            jQuery("#tttgfieldc8").val('1');
                            var ttall3 = ttall - 1;
                            jQuery("#tttgallik").val(ttall3);
                        }
                        else
                        if(arrresult == cv9)
                        {
                            jQuery("#tttgres9").append('<img src="<?php echo esc_url($ou_tttfilegirl);?>" border="none" style="width:111px; height:111px;">');
                            jQuery("#tttgfielda9").val('1');
                            jQuery("#tttgfieldc9").val('1');
                            var ttall3 = ttall - 1;
                            jQuery("#tttgallik").val(ttall3);
                        }
                    }
                    
                }
                else
                if(ggender2 == 'girl')
                {
                    
                    if(you1==1 && you2==1 && c3 == 0)
                    {
                        jQuery("#tttgres3").append('<img src="<?php echo esc_url($ou_tttfileboy);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda3").val('1');
                        jQuery("#tttgfieldc3").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3); 
                        
                        
                        jQuery("#tttg1").css("background","#800000");
                        jQuery("#tttg2").css("background","#800000");
                        jQuery("#tttg3").css("background","#800000");
                      
                        var ttt_timer1_content = setTimeout(ttt_timer1, 2000);
                       
                    }
                    else
                    if(you2==1 && you3==1 && c1 == 0)
                    {
                        jQuery("#tttgres1").append('<img src="<?php echo esc_url($ou_tttfileboy);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda1").val('1');
                        jQuery("#tttgfieldc1").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3);  
                        
                        jQuery("#tttg1").css("background","#800000");
                        jQuery("#tttg2").css("background","#800000");
                        jQuery("#tttg3").css("background","#800000");
                    
                        var ttt_timer1_content = setTimeout(ttt_timer1, 2000);
                    }
                    else
                    if(you1==1 && you3==1 && c2 == 0)
                    {
                        jQuery("#tttgres2").append('<img src="<?php echo esc_url($ou_tttfileboy);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda2").val('1');
                        jQuery("#tttgfieldc2").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3); 
                        
                        jQuery("#tttg1").css("background","#800000");
                        jQuery("#tttg2").css("background","#800000");
                        jQuery("#tttg3").css("background","#800000");
                    
                        var ttt_timer1_content = setTimeout(ttt_timer1, 2000);
                        
                    }
                    else
                    if(you4==1 && you5==1 && c6 == 0)
                    {
                        jQuery("#tttgres6").append('<img src="<?php echo esc_url($ou_tttfileboy);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda6").val('1');
                        jQuery("#tttgfieldc6").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3);  
                        
                        jQuery("#tttg4").css("background","#800000");
                        jQuery("#tttg5").css("background","#800000");
                        jQuery("#tttg6").css("background","#800000");
                    
                        var ttt_timer1_content = setTimeout(ttt_timer1, 2000);
                        
                    }
                    else
                    if(you5==1 && you6==1 && c4 == 0)
                    {
                        jQuery("#tttgres4").append('<img src="<?php echo esc_url($ou_tttfileboy);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda4").val('1');
                        jQuery("#tttgfieldc4").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3); 
                        
                        jQuery("#tttg4").css("background","#800000");
                        jQuery("#tttg5").css("background","#800000");
                        jQuery("#tttg6").css("background","#800000");
                    
                        var ttt_timer1_content = setTimeout(ttt_timer1, 2000);
                    }
                    else
                    if(you4==1 && you6==1 && c5 == 0)
                    {
                        jQuery("#tttgres5").append('<img src="<?php echo esc_url($ou_tttfileboy);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda5").val('1');
                        jQuery("#tttgfieldc5").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3);
                        
                        jQuery("#tttg4").css("background","#800000");
                        jQuery("#tttg5").css("background","#800000");
                        jQuery("#tttg6").css("background","#800000");
                    
                        var ttt_timer1_content = setTimeout(ttt_timer1, 2000);
                    }
                    else
                    if(you7==1 && you8==1 && c9 == 0)
                    {
                        jQuery("#tttgres9").append('<img src="<?php echo esc_url($ou_tttfileboy);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda9").val('1');
                        jQuery("#tttgfieldc9").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3); 
                        
                        jQuery("#tttg7").css("background","#800000");
                        jQuery("#tttg8").css("background","#800000");
                        jQuery("#tttg9").css("background","#800000");
                    
                        var ttt_timer1_content = setTimeout(ttt_timer1, 2000);
                        
                    }
                    else
                    if(you8==1 && you9==1 && c7 == 0)
                    {
                        jQuery("#tttgres7").append('<img src="<?php echo esc_url($ou_tttfileboy);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda7").val('1');
                        jQuery("#tttgfieldc7").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3);
                        
                        jQuery("#tttg7").css("background","#800000");
                        jQuery("#tttg8").css("background","#800000");
                        jQuery("#tttg9").css("background","#800000");
                    
                        var ttt_timer1_content = setTimeout(ttt_timer1, 2000);
                    }
                    else
                    if(you7==1 && you9==1 && c8 == 0)
                    {
                        jQuery("#tttgres8").append('<img src="<?php echo esc_url($ou_tttfileboy);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda8").val('1');
                        jQuery("#tttgfieldc8").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3);
                        
                        jQuery("#tttg7").css("background","#800000");
                        jQuery("#tttg8").css("background","#800000");
                        jQuery("#tttg9").css("background","#800000");
                    
                        var ttt_timer1_content = setTimeout(ttt_timer1, 2000);
                       
                    }
                    else
                    if(you1==1 && you5==1 && c9 == 0)
                    {
                        jQuery("#tttgres9").append('<img src="<?php echo esc_url($ou_tttfileboy);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda9").val('1');
                        jQuery("#tttgfieldc9").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3); 
                        
                        jQuery("#tttg1").css("background","#800000");
                        jQuery("#tttg5").css("background","#800000");
                        jQuery("#tttg9").css("background","#800000");
                    
                        var ttt_timer1_content = setTimeout(ttt_timer1, 2000);
                        
                    }
                    else
                    if(you5==1 && you9==1 && c1 == 0)
                    {
                        jQuery("#tttgres1").append('<img src="<?php echo esc_url($ou_tttfileboy);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda1").val('1');
                        jQuery("#tttgfieldc1").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3);
                        
                        jQuery("#tttg1").css("background","#800000");
                        jQuery("#tttg5").css("background","#800000");
                        jQuery("#tttg9").css("background","#800000");
                    
                        var ttt_timer1_content = setTimeout(ttt_timer1, 2000);
                        
                    }
                    else
                    if(you1==1 && you9==1 && c5 == 0)
                    {
                        jQuery("#tttgres5").append('<img src="<?php echo esc_url($ou_tttfileboy);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda5").val('1');
                        jQuery("#tttgfieldc5").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3);
                        
                        jQuery("#tttg1").css("background","#800000");
                        jQuery("#tttg5").css("background","#800000");
                        jQuery("#tttg9").css("background","#800000");
                    
                        var ttt_timer1_content = setTimeout(ttt_timer1, 2000);
                    }
                    else
                    if(you3==1 && you5==1 && c7 == 0)
                    {
                        jQuery("#tttgres7").append('<img src="<?php echo esc_url($ou_tttfileboy);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda7").val('1');
                        jQuery("#tttgfieldc7").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3); 
                        
                        jQuery("#tttg3").css("background","#800000");
                        jQuery("#tttg5").css("background","#800000");
                        jQuery("#tttg7").css("background","#800000");
                    
                        var ttt_timer1_content = setTimeout(ttt_timer1, 2000);
                    }
                    else
                    if(you5==1 && you7==1 && c3 == 0)
                    {
                        jQuery("#tttgres3").append('<img src="<?php echo esc_url($ou_tttfileboy);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda3").val('1');
                        jQuery("#tttgfieldc3").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3);
                        
                        jQuery("#tttg3").css("background","#800000");
                        jQuery("#tttg5").css("background","#800000");
                        jQuery("#tttg7").css("background","#800000");
                    
                        var ttt_timer1_content = setTimeout(ttt_timer1, 2000);
                    }
                    else
                    if(you3==1 && you7==1 && c5 == 0)
                    {
                        jQuery("#tttgres5").append('<img src="<?php echo esc_url($ou_tttfileboy);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda5").val('1');
                        jQuery("#tttgfieldc5").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3);
                        
                        jQuery("#tttg3").css("background","#800000");
                        jQuery("#tttg5").css("background","#800000");
                        jQuery("#tttg7").css("background","#800000");
                    
                        var ttt_timer1_content = setTimeout(ttt_timer1, 2000);
                    }
                    else
                    if(you1==1 && you4==1 && c7 == 0)
                    {
                        jQuery("#tttgres7").append('<img src="<?php echo esc_url($ou_tttfileboy);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda7").val('1');
                        jQuery("#tttgfieldc7").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3);
                        
                        jQuery("#tttg1").css("background","#800000");
                        jQuery("#tttg4").css("background","#800000");
                        jQuery("#tttg7").css("background","#800000");
                
                        var ttt_timer1_content = setTimeout(ttt_timer1, 2000);
                    }
                    else
                    if(you4==1 && you7==1 && c1 == 0)
                    {
                        jQuery("#tttgres1").append('<img src="<?php echo esc_url($ou_tttfileboy);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda1").val('1');
                        jQuery("#tttgfieldc1").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3); 
                        
                        jQuery("#tttg1").css("background","#800000");
                        jQuery("#tttg4").css("background","#800000");
                        jQuery("#tttg7").css("background","#800000");
                    
                        var ttt_timer1_content = setTimeout(ttt_timer1, 2000);
                    }
                    else
                    if(you1==1 && you7==1 && c4 == 0)
                    {
                        jQuery("#tttgres4").append('<img src="<?php echo esc_url($ou_tttfileboy);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda4").val('1');
                        jQuery("#tttgfieldc4").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3);  
                        
                        jQuery("#tttg1").css("background","#800000");
                        jQuery("#tttg4").css("background","#800000");
                        jQuery("#tttg7").css("background","#800000");
                    
                        var ttt_timer1_content = setTimeout(ttt_timer1, 2000);
                    }
                    else
                    if(you2==1 && you5==1 && c8 == 0)
                    {
                        jQuery("#tttgres8").append('<img src="<?php echo esc_url($ou_tttfileboy);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda8").val('1');
                        jQuery("#tttgfieldc8").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3);  
                        
                        jQuery("#tttg2").css("background","#800000");
                        jQuery("#tttg5").css("background","#800000");
                        jQuery("#tttg8").css("background","#800000");
                    
                        var ttt_timer1_content = setTimeout(ttt_timer1, 2000);
                    }
                    else
                    if(you5==1 && you8==1 && c2 == 0)
                    {
                        jQuery("#tttgres2").append('<img src="<?php echo esc_url($ou_tttfileboy);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda2").val('1');
                        jQuery("#tttgfieldc2").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3); 
                        
                        jQuery("#tttg2").css("background","#800000");
                        jQuery("#tttg5").css("background","#800000");
                        jQuery("#tttg8").css("background","#800000");
                        var ttt_timer1_content = setTimeout(ttt_timer1, 2000);
                    }
                    else
                    if(you2==1 && you8==1 && c5 == 0)
                    {
                        jQuery("#tttgres5").append('<img src="<?php echo esc_url($ou_tttfileboy);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda5").val('1');
                        jQuery("#tttgfieldc5").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3); 
                        
                        jQuery("#tttg2").css("background","#800000");
                        jQuery("#tttg5").css("background","#800000");
                        jQuery("#tttg8").css("background","#800000");
                    
                        var ttt_timer1_content = setTimeout(ttt_timer1, 2000);
                    }
                    else
                    if(you3==1 && you6==1 && c9 == 0)
                    {
                        jQuery("#tttgres9").append('<img src="<?php echo esc_url($ou_tttfileboy);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda9").val('1');
                        jQuery("#tttgfieldc9").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3);
                        
                        jQuery("#tttg3").css("background","#800000");
                        jQuery("#tttg6").css("background","#800000");
                        jQuery("#tttg9").css("background","#800000");
                    
                        var ttt_timer1_content = setTimeout(ttt_timer1, 2000);
                    }
                    else
                    if(you6==1 && you9==1 && c3 == 0)
                    {
                        jQuery("#tttgres3").append('<img src="<?php echo esc_url($ou_tttfileboy);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda3").val('1');
                        jQuery("#tttgfieldc3").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3); 
                        
                        jQuery("#tttg3").css("background","#800000");
                        jQuery("#tttg6").css("background","#800000");
                        jQuery("#tttg9").css("background","#800000");
                    
                        var ttt_timer1_content = setTimeout(ttt_timer1, 2000);
                        
                    }
                    else
                    if(you3==1 && you9==1 && c6 == 0)
                    {
                        jQuery("#tttgres6").append('<img src="<?php echo esc_url($ou_tttfileboy);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda6").val('1');
                        jQuery("#tttgfieldc6").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3); 
                        
                        jQuery("#tttg3").css("background","#800000");
                        jQuery("#tttg6").css("background","#800000");
                        jQuery("#tttg9").css("background","#800000");
                    
                        var ttt_timer1_content = setTimeout(ttt_timer1, 2000);
                    }  
                    else
                    if(me1==1 && me2==1 && c3 == 0)
                    {
                        jQuery("#tttgres3").append('<img src="<?php echo esc_url($ou_tttfileboy);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda3").val('1');
                        jQuery("#tttgfieldc3").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3);  
                    }
                    else
                    if(me2==1 && me3==1 && c1 == 0)
                    {
                        jQuery("#tttgres1").append('<img src="<?php echo esc_url($ou_tttfileboy);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda1").val('1');
                        jQuery("#tttgfieldc1").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3);  
                    }
                    else
                    if(me1==1 && me3==1 && c2 == 0)
                    {
                        jQuery("#tttgres2").append('<img src="<?php echo esc_url($ou_tttfileboy);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda2").val('1');
                        jQuery("#tttgfieldc2").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3);  
                    }
                    else
                    if(me4==1 && me5==1 && c6 == 0)
                    {
                        jQuery("#tttgres6").append('<img src="<?php echo esc_url($ou_tttfileboy);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda6").val('1');
                        jQuery("#tttgfieldc6").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3);  
                    }
                    else
                    if(me5==1 && me6==1 && c4 == 0)
                    {
                        jQuery("#tttgres4").append('<img src="<?php echo esc_url($ou_tttfileboy);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda4").val('1');
                        jQuery("#tttgfieldc4").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3);  
                    }
                    else
                    if(me4==1 && me6==1 && c5 == 0)
                    {
                        jQuery("#tttgres5").append('<img src="<?php echo esc_url($ou_tttfileboy);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda5").val('1');
                        jQuery("#tttgfieldc5").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3);  
                    }
                    else
                    if(me7==1 && me8==1 && c9 == 0)
                    {
                        jQuery("#tttgres9").append('<img src="<?php echo esc_url($ou_tttfileboy);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda9").val('1');
                        jQuery("#tttgfieldc9").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3);  
                    }
                    else
                    if(me8==1 && me9==1 && c7 == 0)
                    {
                        jQuery("#tttgres7").append('<img src="<?php echo esc_url($ou_tttfileboy);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda7").val('1');
                        jQuery("#tttgfieldc7").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3);  
                    }
                    else
                    if(me7==1 && me9==1 && c8 == 0)
                    {
                        jQuery("#tttgres8").append('<img src="<?php echo esc_url($ou_tttfileboy);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda8").val('1');
                        jQuery("#tttgfieldc8").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3);  
                    }
                    else
                    if(me1==1 && me5==1 && c9 == 0)
                    {
                        jQuery("#tttgres9").append('<img src="<?php echo esc_url($ou_tttfileboy);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda9").val('1');
                        jQuery("#tttgfieldc9").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3);  
                    }
                    else
                    if(me5==1 && me9==1 && c1 == 0)
                    {
                        jQuery("#tttgres1").append('<img src="<?php echo esc_url($ou_tttfileboy);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda1").val('1');
                        jQuery("#tttgfieldc1").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3);  
                    }
                    else
                    if(me1==1 && me9==1 && c5 == 0)
                    {
                        jQuery("#tttgres5").append('<img src="<?php echo esc_url($ou_tttfileboy);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda5").val('1');
                        jQuery("#tttgfieldc5").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3);  
                    }
                    else
                    if(me3==1 && me5==1 && c7 == 0)
                    {
                        jQuery("#tttgres7").append('<img src="<?php echo esc_url($ou_tttfileboy);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda7").val('1');
                        jQuery("#tttgfieldc7").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3);  
                    }
                    else
                    if(me5==1 && me7==1 && c3 == 0)
                    {
                        jQuery("#tttgres3").append('<img src="<?php echo esc_url($ou_tttfileboy);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda3").val('1');
                        jQuery("#tttgfieldc3").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3);  
                    }
                    else
                    if(me3==1 && me7==1 && c5 == 0)
                    {
                        jQuery("#tttgres5").append('<img src="<?php echo esc_url($ou_tttfileboy);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda5").val('1');
                        jQuery("#tttgfieldc5").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3);  
                    }
                    else
                    if(me1==1 && me4==1 && c7 == 0)
                    {
                        jQuery("#tttgres7").append('<img src="<?php echo esc_url($ou_tttfileboy);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda7").val('1');
                        jQuery("#tttgfieldc7").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3);  
                    }
                    else
                    if(me4==1 && me7==1 && c1 == 0)
                    {
                        jQuery("#tttgres1").append('<img src="<?php echo esc_url($ou_tttfileboy);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda1").val('1');
                        jQuery("#tttgfieldc1").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3);  
                    }
                    else
                    if(me1==1 && me7==1 && c4 == 0)
                    {
                        jQuery("#tttgres4").append('<img src="<?php echo esc_url($ou_tttfileboy);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda4").val('1');
                        jQuery("#tttgfieldc4").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3);  
                    }
                    else
                    if(me2==1 && me5==1 && c8 == 0)
                    {
                        jQuery("#tttgres8").append('<img src="<?php echo esc_url($ou_tttfileboy);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda8").val('1');
                        jQuery("#tttgfieldc8").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3);  
                    }
                    else
                    if(me5==1 && me8==1 && c2 == 0)
                    {
                        jQuery("#tttgres2").append('<img src="<?php echo esc_url($ou_tttfileboy);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda2").val('1');
                        jQuery("#tttgfieldc2").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3);  
                    }
                    else
                    if(me2==1 && me8==1 && c5 == 0)
                    {
                        jQuery("#tttgres5").append('<img src="<?php echo esc_url($ou_tttfileboy);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda5").val('1');
                        jQuery("#tttgfieldc5").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3);  
                    }
                    else
                    if(me3==1 && me6==1 && c9 == 0)
                    {
                        jQuery("#tttgres9").append('<img src="<?php echo esc_url($ou_tttfileboy);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda9").val('1');
                        jQuery("#tttgfieldc9").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3);  
                    }
                    else
                    if(me6==1 && me9==1 && c3 == 0)
                    {
                        jQuery("#tttgres3").append('<img src="<?php echo esc_url($ou_tttfileboy);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda3").val('1');
                        jQuery("#tttgfieldc3").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3);  
                    }
                    else
                    if(me3==1 && me9==1 && c6 == 0)
                    {
                        jQuery("#tttgres6").append('<img src="<?php echo esc_url($ou_tttfileboy);?>" border="none" style="width:111px; height:111px;">');
                        jQuery("#tttgfielda6").val('1');
                        jQuery("#tttgfieldc6").val('1');
                        var ttall3 = ttall - 1;
                        jQuery("#tttgallik").val(ttall3);  
                    }   
                    else
                    {
                        if(arrresult == cv1)
                        {
                            jQuery("#tttgres1").append('<img src="<?php echo esc_url($ou_tttfileboy);?>" border="none" style="width:111px; height:111px;">');
                            jQuery("#tttgfielda1").val('1');
                            jQuery("#tttgfieldc1").val('1');
                            var ttall3 = ttall - 1;
                            jQuery("#tttgallik").val(ttall3);
                        }
                        else
                        if(arrresult == cv2)
                        {
                            jQuery("#tttgres2").append('<img src="<?php echo esc_url($ou_tttfileboy);?>" border="none" style="width:111px; height:111px;">');
                            jQuery("#tttgfielda2").val('1');
                            jQuery("#tttgfieldc2").val('1');
                            var ttall3 = ttall - 1;
                            jQuery("#tttgallik").val(ttall3);
                        }
                        else
                        if(arrresult == cv3)
                        {
                            jQuery("#tttgres3").append('<img src="<?php echo esc_url($ou_tttfileboy);?>" border="none" style="width:111px; height:111px;">');
                            jQuery("#tttgfielda3").val('1');
                            jQuery("#tttgfieldc3").val('1');
                            var ttall3 = ttall - 1;
                            jQuery("#tttgallik").val(ttall3);
                        }
                        else
                        if(arrresult == cv4)
                        {
                            jQuery("#tttgres4").append('<img src="<?php echo esc_url($ou_tttfileboy);?>" border="none" style="width:111px; height:111px;">');
                            jQuery("#tttgfielda4").val('1');
                            jQuery("#tttgfieldc4").val('1');
                            var ttall3 = ttall - 1;
                            jQuery("#tttgallik").val(ttall3);
                        }
                        else
                        if(arrresult == cv5)
                        {
                            jQuery("#tttgres5").append('<img src="<?php echo esc_url($ou_tttfileboy);?>" border="none" style="width:111px; height:111px;">');
                            jQuery("#tttgfielda5").val('1');
                            jQuery("#tttgfieldc5").val('1');
                            var ttall3 = ttall - 1;
                            jQuery("#tttgallik").val(ttall3);
                        }
                        else
                        if(arrresult == cv6)
                        {
                            jQuery("#tttgres6").append('<img src="<?php echo esc_url($ou_tttfileboy);?>" border="none" style="width:111px; height:111px;">');
                            jQuery("#tttgfielda6").val('1');
                            jQuery("#tttgfieldc6").val('1');
                            var ttall3 = ttall - 1;
                            jQuery("#tttgallik").val(ttall3);
                        }
                        else
                        if(arrresult == cv7)
                        {
                            jQuery("#tttgres7").append('<img src="<?php echo esc_url($ou_tttfileboy);?>" border="none" style="width:111px; height:111px;">');
                            jQuery("#tttgfielda7").val('1');
                            jQuery("#tttgfieldc7").val('1');
                            var ttall3 = ttall - 1;
                            jQuery("#tttgallik").val(ttall3);
                        }
                        else
                        if(arrresult == cv8)
                        {
                            jQuery("#tttgres8").append('<img src="<?php echo esc_url($ou_tttfileboy);?>" border="none" style="width:111px; height:111px;">');
                            jQuery("#tttgfielda8").val('1');
                            jQuery("#tttgfieldc8").val('1');
                            var ttall3 = ttall - 1;
                            jQuery("#tttgallik").val(ttall3);
                        }
                        else
                        if(arrresult == cv9)
                        {
                            jQuery("#tttgres9").append('<img src="<?php echo esc_url($ou_tttfileboy);?>" border="none" style="width:111px; height:111px;">');
                            jQuery("#tttgfielda9").val('1');
                            jQuery("#tttgfieldc9").val('1');
                            var ttall3 = ttall - 1;
                            jQuery("#tttgallik").val(ttall3);
                        }
                    }
                }
            }
            
            
            
        }
        </script>    
        
        <script>
        function ttt_timer2()
        {
            jQuery("#ou_tttgameid").hide();   
            jQuery("#ou_tttgameid_win").show();
            jQuery("#ou_tttgameid").empty(); 
            clearTimeout(ttt_timer2_content);
        }
        </script>
        
        <script>
        function ttt_notcomputer()
        {
            var ggender = '<?php echo $ougender;?>';
            var cc1 = jQuery("#tttgfieldc1").val();
            var cc2 = jQuery("#tttgfieldc2").val();
            var cc3 = jQuery("#tttgfieldc3").val();
            var cc4 = jQuery("#tttgfieldc4").val();
            var cc5 = jQuery("#tttgfieldc5").val();
            var cc6 = jQuery("#tttgfieldc6").val();
            var cc7 = jQuery("#tttgfieldc7").val();
            var cc8 = jQuery("#tttgfieldc8").val();
            var cc9 = jQuery("#tttgfieldc9").val();
            
            var ttall2 = jQuery("#tttgallik").val();
            
            var mm1 = jQuery("#tttgfield1").val();
            var mm2 = jQuery("#tttgfield2").val();
            var mm3 = jQuery("#tttgfield3").val();
            var mm4 = jQuery("#tttgfield4").val();
            var mm5 = jQuery("#tttgfield5").val();
            var mm6 = jQuery("#tttgfield6").val();
            var mm7 = jQuery("#tttgfield7").val();
            var mm8 = jQuery("#tttgfield8").val();
            var mm9 = jQuery("#tttgfield9").val();
            
                if(mm1==1 && mm2==1 && mm3 == 1)
                {
                    jQuery("#tttg1").css("background","#008000");
                    jQuery("#tttg2").css("background","#008000");
                    jQuery("#tttg3").css("background","#008000");
                    
                    var ttt_timer2_content = setTimeout(ttt_timer2, 2000);
                }
                else
                if(mm4==1 && mm5==1 && mm6 == 1)
                {
                    jQuery("#tttg4").css("background","#008000");
                    jQuery("#tttg5").css("background","#008000");
                    jQuery("#tttg6").css("background","#008000");
                    
                    var ttt_timer2_content = setTimeout(ttt_timer2, 2000);
                }
                else
                if(mm7==1 && mm8==1 && mm9 == 1)
                {
                    jQuery("#tttg7").css("background","#008000");
                    jQuery("#tttg8").css("background","#008000");
                    jQuery("#tttg9").css("background","#008000");
                    
                    var ttt_timer2_content = setTimeout(ttt_timer2, 2000);
                }
                else
                if(mm1==1 && mm5==1 && mm9 == 1)
                {
                    jQuery("#tttg1").css("background","#008000");
                    jQuery("#tttg5").css("background","#008000");
                    jQuery("#tttg9").css("background","#008000");
                    
                    var ttt_timer2_content = setTimeout(ttt_timer2, 2000);
                }
                else
                if(mm3==1 && mm5==1 && mm7 == 1)
                {
                    jQuery("#tttg3").css("background","#008000");
                    jQuery("#tttg5").css("background","#008000");
                    jQuery("#tttg7").css("background","#008000");
                    
                    var ttt_timer2_content = setTimeout(ttt_timer2, 2000);
                }
                else
                if(mm1==1 && mm4==1 && mm7 == 1)
                {
                    jQuery("#tttg1").css("background","#008000");
                    jQuery("#tttg4").css("background","#008000");
                    jQuery("#tttg7").css("background","#008000");
                    
                    var ttt_timer2_content = setTimeout(ttt_timer2, 2000);
                }
                else
                if(mm2==1 && mm5==1 && mm8 == 1)
                {
                    jQuery("#tttg2").css("background","#008000");
                    jQuery("#tttg5").css("background","#008000");
                    jQuery("#tttg8").css("background","#008000");
                    
                    var ttt_timer2_content = setTimeout(ttt_timer2, 2000);
                }
                else
                if(mm3==1 && mm6==1 && mm9 == 1)
                {
                    jQuery("#tttg3").css("background","#008000");
                    jQuery("#tttg6").css("background","#008000");
                    jQuery("#tttg9").css("background","#008000");
                    
                    var ttt_timer2_content = setTimeout(ttt_timer2, 2000);
                }
                else
                {
                    ttt_computer();
                }
                
    
        }
        </script>
        
        <script>
        function tttclick1() 
        {
            var ccc1 = jQuery("#tttgfieldc1").val();
            var gggender = '<?php echo $ougender;?>';
            var ttall92 = jQuery("#tttgallik").val();
            if(gggender == 'boy' && ccc1 == 0)
            {
                
                jQuery("#tttgres1").append('<img src="<?php echo esc_url($ou_tttfileboy);?>" border="none" style="width:111px; height:111px;">'); 
                jQuery("#tttgfield1").val('1');
                jQuery("#tttgfieldc1").val('1');
                
                var ttall94 = ttall92 - 1;
                jQuery("#tttgallik").val(ttall94);
                
                if(ttall94 ==0)
                {
                    jQuery("#ou_tttgameid").hide();
                    jQuery("#ou_tttgameid_draw").show();
                    jQuery("#ou_tttgameid").empty();
                }
                else
                {
                    ttt_notcomputer(); 
                }
                
            }
            else
            if(gggender == 'girl' && ccc1 == 0)
            {
                
                jQuery("#tttgres1").append('<img src="<?php echo esc_url($ou_tttfilegirl);?>" border="none" style="width:111px; height:111px;">'); 
                jQuery("#tttgfield1").val('1');
                jQuery("#tttgfieldc1").val('1');
                
                var ttall94 = ttall92 - 1;
                jQuery("#tttgallik").val(ttall94);
                
                if(ttall94 ==0)
                {
                    jQuery("#ou_tttgameid").hide();
                    jQuery("#ou_tttgameid_draw").show();
                    jQuery("#ou_tttgameid").empty();
                }
                else
                {
                    ttt_notcomputer(); 
                }
            }
            
        }
        </script>
        
        <script>
        function tttclick2() 
        {
            var ccc2 = jQuery("#tttgfieldc2").val();
            var gggender = '<?php echo $ougender;?>';
            var ttall92 = jQuery("#tttgallik").val();
            
            if(gggender == 'boy' && ccc2 == 0)
            {
                
                jQuery("#tttgres2").append('<img src="<?php echo esc_url($ou_tttfileboy);?>" border="none" style="width:111px; height:111px;">'); 
                jQuery("#tttgfield2").val('1');
                jQuery("#tttgfieldc2").val('1');
                
                var ttall94 = ttall92 - 1;
                jQuery("#tttgallik").val(ttall94);
                
                if(ttall94 ==0)
                {
                    jQuery("#ou_tttgameid").hide();
                    jQuery("#ou_tttgameid_draw").show();
                    jQuery("#ou_tttgameid").empty();
                }
                else
                {
                    ttt_notcomputer(); 
                }
            }
            else
            if(gggender == 'girl' && ccc2 == 0)
            {
                
                jQuery("#tttgres2").append('<img src="<?php echo esc_url($ou_tttfilegirl);?>" border="none" style="width:111px; height:111px;">'); 
                jQuery("#tttgfield2").val('1');
                jQuery("#tttgfieldc2").val('1');
                
                var ttall94 = ttall92 - 1;
                jQuery("#tttgallik").val(ttall94);
                
                if(ttall94 ==0)
                {
                    jQuery("#ou_tttgameid").hide();
                    jQuery("#ou_tttgameid_draw").show();
                    jQuery("#ou_tttgameid").empty();
                }
                else
                {
                    ttt_notcomputer(); 
                }
            }
        }
        </script>
        
        <script>
        function tttclick3() 
        {
            var ccc3 = jQuery("#tttgfieldc3").val();
            var gggender = '<?php echo $ougender;?>';
            var ttall92 = jQuery("#tttgallik").val();
            
            if(gggender == 'boy' && ccc3 == 0)
            {
                
                jQuery("#tttgres3").append('<img src="<?php echo esc_url($ou_tttfileboy);?>" border="none" style="width:111px; height:111px;">'); 
                jQuery("#tttgfield3").val('1');
                jQuery("#tttgfieldc3").val('1');
                
                var ttall94 = ttall92 - 1;
                jQuery("#tttgallik").val(ttall94);
                
                if(ttall94 ==0)
                {
                    jQuery("#ou_tttgameid").hide();
                    jQuery("#ou_tttgameid_draw").show();
                    jQuery("#ou_tttgameid").empty();
                }
                else
                {
                    ttt_notcomputer(); 
                }
            }
            else
            if(gggender == 'girl' && ccc3 == 0)
            {
                
                jQuery("#tttgres3").append('<img src="<?php echo esc_url($ou_tttfilegirl);?>" border="none" style="width:111px; height:111px;">'); 
                jQuery("#tttgfield3").val('1');
                jQuery("#tttgfieldc3").val('1');
                
                var ttall94 = ttall92 - 1;
                jQuery("#tttgallik").val(ttall94);
                
                if(ttall94 ==0)
                {
                    jQuery("#ou_tttgameid").hide();
                    jQuery("#ou_tttgameid_draw").show();
                    jQuery("#ou_tttgameid").empty();
                }
                else
                {
                    ttt_notcomputer(); 
                }
            }
        }
        </script>
        
        <script>
        function tttclick4() 
        {
            var ccc4 = jQuery("#tttgfieldc4").val();
            var gggender = '<?php echo $ougender;?>';
            var ttall92 = jQuery("#tttgallik").val();
            
            if(gggender == 'boy' && ccc4 == 0)
            {
                
                jQuery("#tttgres4").append('<img src="<?php echo esc_url($ou_tttfileboy);?>" border="none" style="width:111px; height:111px;">'); 
                jQuery("#tttgfield4").val('1');
                jQuery("#tttgfieldc4").val('1');
                
                var ttall94 = ttall92 - 1;
                jQuery("#tttgallik").val(ttall94);
                
                if(ttall94 ==0)
                {
                    jQuery("#ou_tttgameid").hide();
                    jQuery("#ou_tttgameid_draw").show();
                    jQuery("#ou_tttgameid").empty();
                }
                else
                {
                    ttt_notcomputer(); 
                }
            }
            else
            if(gggender == 'girl' && ccc4 == 0)
            {
                
                jQuery("#tttgres4").append('<img src="<?php echo esc_url($ou_tttfilegirl);?>" border="none" style="width:111px; height:111px;">'); 
                jQuery("#tttgfield4").val('1');
                jQuery("#tttgfieldc4").val('1');
                
                var ttall94 = ttall92 - 1;
                jQuery("#tttgallik").val(ttall94);
                
                if(ttall94 ==0)
                {
                    jQuery("#ou_tttgameid").hide();
                    jQuery("#ou_tttgameid_draw").show();
                    jQuery("#ou_tttgameid").empty();
                }
                else
                {
                    ttt_notcomputer(); 
                }
            }
        }
        </script>
        
        <script>
        function tttclick5() 
        {
            var ccc5 = jQuery("#tttgfieldc5").val();
            var gggender = '<?php echo $ougender;?>';
            var ttall92 = jQuery("#tttgallik").val();
            
            if(gggender == 'boy' && ccc5 == 0)
            {
                
                jQuery("#tttgres5").append('<img src="<?php echo esc_url($ou_tttfileboy);?>" border="none" style="width:111px; height:111px;">'); 
                jQuery("#tttgfield5").val('1');
                jQuery("#tttgfieldc5").val('1');
                
                var ttall94 = ttall92 - 1;
                jQuery("#tttgallik").val(ttall94);
                
                if(ttall94 ==0)
                {
                    jQuery("#ou_tttgameid").hide();
                    jQuery("#ou_tttgameid_draw").show();
                    jQuery("#ou_tttgameid").empty();
                }
                else
                {
                    ttt_notcomputer(); 
                }
            }
            else
            if(gggender == 'girl' && ccc5 == 0)
            {
                
                jQuery("#tttgres5").append('<img src="<?php echo esc_url($ou_tttfilegirl);?>" border="none" style="width:111px; height:111px;">'); 
                jQuery("#tttgfield5").val('1');
                jQuery("#tttgfieldc5").val('1');
                
                var ttall94 = ttall92 - 1;
                jQuery("#tttgallik").val(ttall94);
                
                if(ttall94 ==0)
                {
                    jQuery("#ou_tttgameid").hide();
                    jQuery("#ou_tttgameid_draw").show();
                    jQuery("#ou_tttgameid").empty();
                }
                else
                {
                    ttt_notcomputer(); 
                }
            }
        }
        </script>
        
        <script>
        function tttclick6() 
        {
            var ccc6 = jQuery("#tttgfieldc6").val();
            var gggender = '<?php echo $ougender;?>';
            var ttall92 = jQuery("#tttgallik").val();
            
            if(gggender == 'boy' && ccc6 == 0)
            {
                
                jQuery("#tttgres6").append('<img src="<?php echo esc_url($ou_tttfileboy);?>" border="none" style="width:111px; height:111px;">'); 
                jQuery("#tttgfield6").val('1');
                jQuery("#tttgfieldc6").val('1');
                
                var ttall94 = ttall92 - 1;
                jQuery("#tttgallik").val(ttall94);
                
                if(ttall94 ==0)
                {
                    jQuery("#ou_tttgameid").hide();
                    jQuery("#ou_tttgameid_draw").show();
                    jQuery("#ou_tttgameid").empty();
                }
                else
                {
                    ttt_notcomputer(); 
                }
            }
            else
            if(gggender == 'girl' && ccc6 == 0)
            {
                
                jQuery("#tttgres6").append('<img src="<?php echo esc_url($ou_tttfilegirl);?>" border="none" style="width:111px; height:111px;">'); 
                jQuery("#tttgfield6").val('1');
                jQuery("#tttgfieldc6").val('1');
                
                var ttall94 = ttall92 - 1;
                jQuery("#tttgallik").val(ttall94);
                
                if(ttall94 ==0)
                {
                    jQuery("#ou_tttgameid").hide();
                    jQuery("#ou_tttgameid_draw").show();
                    jQuery("#ou_tttgameid").empty();
                }
                else
                {
                    ttt_notcomputer(); 
                }
            }  
        }
        </script>
        
        <script>
        function tttclick7() 
        {
            var ccc7 = jQuery("#tttgfieldc7").val();
            var gggender = '<?php echo $ougender;?>';
            var ttall92 = jQuery("#tttgallik").val();
            
            if(gggender == 'boy' && ccc7 == 0)
            {
                
                jQuery("#tttgres7").append('<img src="<?php echo esc_url($ou_tttfileboy);?>" border="none" style="width:111px; height:111px;">'); 
                jQuery("#tttgfield7").val('1');
                jQuery("#tttgfieldc7").val('1');
                
                var ttall94 = ttall92 - 1;
                jQuery("#tttgallik").val(ttall94);
                
                if(ttall94 ==0)
                {
                    jQuery("#ou_tttgameid").hide();
                    jQuery("#ou_tttgameid_draw").show();
                    jQuery("#ou_tttgameid").empty();
                }
                else
                {
                    ttt_notcomputer(); 
                }
            }
            else
            if(gggender == 'girl' && ccc7 == 0)
            {
                
                jQuery("#tttgres7").append('<img src="<?php echo esc_url($ou_tttfilegirl);?>" border="none" style="width:111px; height:111px;">'); 
                jQuery("#tttgfield7").val('1');
                jQuery("#tttgfieldc7").val('1');
                
                var ttall94 = ttall92 - 1;
                jQuery("#tttgallik").val(ttall94);
                
                if(ttall94 ==0)
                {
                    jQuery("#ou_tttgameid").hide();
                    jQuery("#ou_tttgameid_draw").show();
                    jQuery("#ou_tttgameid").empty();
                }
                else
                {
                    ttt_notcomputer(); 
                }
            } 
        }
        </script>
        
        <script>
        function tttclick8() 
        {
            var ccc8 = jQuery("#tttgfieldc8").val();
            var gggender = '<?php echo $ougender;?>';
            var ttall92 = jQuery("#tttgallik").val();
            
            if(gggender == 'boy' && ccc8 == 0)
            {
                
                jQuery("#tttgres8").append('<img src="<?php echo esc_url($ou_tttfileboy);?>" border="none" style="width:111px; height:111px;">'); 
                jQuery("#tttgfield8").val('1');
                jQuery("#tttgfieldc8").val('1');
                
                var ttall94 = ttall92 - 1;
                jQuery("#tttgallik").val(ttall94);
                
                if(ttall94 ==0)
                {
                    jQuery("#ou_tttgameid").hide();
                    jQuery("#ou_tttgameid_draw").show();
                    jQuery("#ou_tttgameid").empty();
                }
                else
                {
                    ttt_notcomputer(); 
                }
            }
            else
            if(gggender == 'girl' && ccc8 == 0)
            {
                
                jQuery("#tttgres8").append('<img src="<?php echo esc_url($ou_tttfilegirl);?>" border="none" style="width:111px; height:111px;">'); 
                jQuery("#tttgfield8").val('1');
                jQuery("#tttgfieldc8").val('1');
                
                var ttall94 = ttall92 - 1;
                jQuery("#tttgallik").val(ttall94);
                
                if(ttall94 ==0)
                {
                    jQuery("#ou_tttgameid").hide();
                    jQuery("#ou_tttgameid_draw").show();
                    jQuery("#ou_tttgameid").empty();
                }
                else
                {
                    ttt_notcomputer(); 
                }
            }  
        }
        </script>
        
        <script>
        function tttclick9() 
        {
            var ccc9 = jQuery("#tttgfieldc9").val();
            var gggender = '<?php echo $ougender;?>';
            var ttall92 = jQuery("#tttgallik").val();
            
            if(gggender == 'boy' && ccc9 == 0)
            {
                
                jQuery("#tttgres9").append('<img src="<?php echo esc_url($ou_tttfileboy);?>" border="none" style="width:111px; height:111px;">'); 
                jQuery("#tttgfield9").val('1');
                jQuery("#tttgfieldc9").val('1');
                
                var ttall94 = ttall92 - 1;
                jQuery("#tttgallik").val(ttall94);
                
                if(ttall94 ==0)
                {
                    jQuery("#ou_tttgameid").hide();
                    jQuery("#ou_tttgameid_draw").show();
                    jQuery("#ou_tttgameid").empty();
                }
                else
                {
                    ttt_notcomputer(); 
                }
            }
            else
            if(gggender == 'girl' && ccc9 == 0)
            {
                
                jQuery("#tttgres9").append('<img src="<?php echo esc_url($ou_tttfilegirl);?>" border="none" style="width:111px; height:111px;">'); 
                jQuery("#tttgfield9").val('1');
                jQuery("#tttgfieldc9").val('1');
                
                var ttall94 = ttall92 - 1;
                jQuery("#tttgallik").val(ttall94);
                
                if(ttall94 ==0)
                {
                    jQuery("#ou_tttgameid").hide();
                    jQuery("#ou_tttgameid_draw").show();
                    jQuery("#ou_tttgameid").empty();
                }
                else
                {
                    ttt_notcomputer(); 
                }
            } 
        }
        </script>
        
        <?php
        for($outtti=0;$outtti<9;$outtti++)
        {
            $outtti2++;
            ?>
            <div onclick="tttclick<?php echo $outtti2;?>(); return false;" id="tttg<?php echo $outtti2;?>" style="float:left; cursor: pointer; border: 1px solid #ffffff; width: 131px; height: 131px;">
                <div style="padding:10px;" id="tttgres<?php echo $outtti2;?>">
                    
                </div>
            </div>
            <?php
        }
        ?>
    </div>
    <?php
}
else
{
    wp_die();
}
?>