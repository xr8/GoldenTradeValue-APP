
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.4.1/umd/popper.min.js"></script>

        <script src="<?php echo CDN_URL;?>js/gtv/money.js"  ></script>
        <script src="<?php echo CDN_URL;?>js/gtv/utility.js"></script>
        <script src="<?php echo CDN_URL;?>js/gtv/url.js"    ></script>
        <?php  
        $js = explode(",",$js);
        $jsCount = count($js);
        for ($i = 1; $i <= $jsCount; $i++) {echo "<script src=".CDN_URL."js/".$js[$i-1].".js></script>";}
        ?>        
    </body>
</html>