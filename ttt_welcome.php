<?php
$oumtttacebook ="https://www.facebook.com/oleksandrustymenko87";
$oumttttwitter ="https://twitter.com/OUstymenko";
$oumttttsite ="http://oleksandrustymenko.com";
$ou_tttfile = plugin_dir_url( __FILE__ );
$ou_tttfileimage = $ou_tttfile.'images/background.jpg';
$ou_tttfileloader = $ou_tttfile.'images/loader.gif';
?>
<script>
function outtttart()
{
    var ougender = jQuery("input[name=ouwelttt_genter]:checked").val();
    var formData = new FormData();
    formData.append('action', 'outttstart');
    formData.append('ougender', ougender);
    formData.append('nonce', '<?php echo wp_create_nonce('vt4dksrk');?>');
    jQuery.ajax({
    type: "post",
    url: oumtttjaxcode.oumtttjaxcode_url,
    data: formData,
    contentType:false,
    processData:false,
    beforeSend: function() 
    {
            jQuery("#ou_fffwelcome").hide();
            jQuery("#outttn_loader").show();
    },
    success: function(html)
    {
            jQuery("#ou_tttgameid").empty();
            jQuery("#ou_tttgameid").append(html);
            jQuery("#outttn_loader").hide();
            jQuery("#ou_tttgameid").show();
    }
    });
}
</script>
<div style="width:409px; margin:5px 0px; overflow: hidden; height:409px;  background-image: url('<?php echo $ou_tttfileimage;?>');">
    <div id="ou_fffwelcome" style="width:409px; height:409px;" >
        
        <div style="color: #ffffff; text-align:center; font-size:50px; height:55px;">
            <div style="padding:15px 0px 0px 0px;">
                <?php
                echo '<b>'.esc_html('TIC TAC TOE').'</b>';
                ?>
            </div>
        </div>

        <div style="color: #ff9900; text-align:center; font-size:50px; width:409px; height:299px;">
        
            <div style="height:139px; width:409px;">
                <div style="padding:45px 10px 0px 10px; text-align:center; font-size:34px; color: #ffffff; ">
                    <div style="padding:0px;">
                        <?php
                        echo '<b>'.esc_html('I AM ').'</b>';
                        ?>
                    </div>
                    <div style="padding:15px 0px 0px 0px; font-size:24px; ">
                        <?php
                        echo '<input type="radio" autocomplete = "off" name="ouwelttt_genter" value="boy" checked> A BOY ';
                        echo ' <input type="radio" autocomplete = "off" name="ouwelttt_genter" value="girl"> A GIRL';
                        ?>
                    </div>
                </div>
            </div>

            <div style="height:160px; width:409px; text-align:center;">
                <div style="padding:30px 0px 0px 0px;">
                    <?php
                    echo '<a href="" onclick="outtttart(); return false;" class="tttwelcomebutton" >'.esc_html('START').'</a>';
                    ?>
                </div>
            </div>

        </div>

        <div style="color: #ff9900; text-align:right; height:55px;">
            <div style="padding:10px;">
                <?php
                echo '<a href="'.esc_url($oumttttsite).'" class="tttwelcomelink2" ><b>'.esc_html('Site').'</b></a> ';
                echo '<a href="'.esc_url($oumtttacebook).'" class="tttwelcomelink2" ><b>'.esc_html('Facebook').'</b></a> ';
                echo '<a href="'.esc_url($oumttttwitter).'" class="tttwelcomelink2" ><b>'.esc_html('Twitter').'</b></a>';
                ?>
            </div>
        </div>

    </div> 
    
    <!-- loader -->
    <div id="outttn_loader" style="display:none; width:409px; height:409px;" >
        <div style="padding:160px 0px 0px 0px; text-align:center;">
            <img src="<?php echo $ou_tttfileloader;?>" border="none">
        </div>
    </div>
    <!-- end loader -->
    <!-- game -->
    <div id="ou_tttgameid" style="display:none; width:409px; height:409px;"></div>
    <!-- end game -->

    <div id="ou_tttgameid_lost" style="display:none; width:409px; height:409px;">
    
        <div style="text-align:center; width:409px; height:200px; font-size:46px;">
            <div style="padding: 100px 0px 0px 0px; color:#ffffff;">
                <b><span style="padding:0px 10px 0px 0px;">Y O U</span>  L O S T !</b>
            </div>
        </div>
        
        <div style="text-align:center; width:409px; height:209px;">
            <script>
            function outtttart_back()
            {
                jQuery("#ou_tttgameid").hide();
                jQuery("#ou_tttgameid_lost").hide();
                jQuery("#ou_tttgameid_win").hide();
                jQuery("#ou_tttgameid_draw").hide();
                jQuery("#ou_fffwelcome").show();
                jQuery("#ou_tttgameid").empty();
            }
            </script>
            <?php
            echo '<a href="" onclick="outtttart_back(); return false;" class="tttwelcomebutton" >'.esc_html('BACK').'</a>';
            ?>
        </div>
        
    </div>
    
    <div id="ou_tttgameid_win" style="display:none; width:409px; height:409px;">
    
        <div style="text-align:center; width:409px; height:200px; font-size:46px;">
            <div style="padding: 100px 0px 0px 0px; color:#ffffff;">
                <b><span style="padding:0px 10px 0px 0px;">Y O U</span>  W I N !</b>
            </div>
        </div>
        
        <div style="text-align:center; width:409px; height:209px;">
            <script>
            function outtttart_back()
            {
                jQuery("#ou_tttgameid").hide();
                jQuery("#ou_tttgameid_lost").hide();
                jQuery("#ou_tttgameid_win").hide();
                jQuery("#ou_tttgameid_draw").hide();
                jQuery("#ou_fffwelcome").show();
                jQuery("#ou_tttgameid").empty();
            }
            </script>
            <?php
            echo '<a href="" onclick="outtttart_back(); return false;" class="tttwelcomebutton" >'.esc_html('BACK').'</a>';
            ?>
        </div>
        
    </div>
    
    <div id="ou_tttgameid_draw" style="display:none; width:409px; height:409px;">
    
        <div style="text-align:center; width:409px; height:200px; font-size:46px;">
            <div style="padding: 100px 0px 0px 0px; color:#ffffff;">
                <b><span style="padding:0px 10px 0px 0px;">D R A W !</b>
            </div>
        </div>
        
        <div style="text-align:center; width:409px; height:209px;">
            <script>
            function outtttart_back()
            {
                jQuery("#ou_tttgameid").hide();
                jQuery("#ou_tttgameid_lost").hide();
                jQuery("#ou_tttgameid_win").hide();
                jQuery("#ou_tttgameid_draw").hide();
                jQuery("#ou_fffwelcome").show();
                jQuery("#ou_tttgameid").empty();
            }
            </script>
            <?php
            echo '<a href="" onclick="outtttart_back(); return false;" class="tttwelcomebutton" >'.esc_html('BACK').'</a>';
            ?>
        </div>
        
    </div>
    
</div>