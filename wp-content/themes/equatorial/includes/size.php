<?php if (in_array($_SERVER['REMOTE_ADDR'], array("5.2.216.144", "::1", "86.121.81.24"))) { ?>
    <div id="windowSize">    
        <p>
            <span class="width"></span> x <span class="height"></span> 
        </p>
        <p>
            page-<?php echo str_replace(".php","",get_page_template_slug()); ?>
        </p>
        <p>
            <?php echo $_SERVER['REMOTE_ADDR']; ?>
        </p>
    </div>
    <style>
        #windowSize {
            position: fixed;
            right: 0px;
            bottom: 120px;
            color: #f00;
            z-index: 1000000;
            background-color: rgba(255,255,255,0.7);
            padding: 3px;
            text-align: right;
            font-weight: normal;
            font-family: Arial, sans-serif;
        }
        #windowSize p { 
            font-size: 12px;
            color: red; 
            margin: 0;
        }
        #windowSize p span {
            display: inline-block;
            padding: 0 3px;
            font-weight: bold;
        } 
    </style> 
    <script>
        jQuery(window).on('load resize', function () {
            jQuery('#windowSize .width').html(jQuery(window).width());
            jQuery('#windowSize .height').html(jQuery(window).height());
        });
    </script>      
<?php } ?>