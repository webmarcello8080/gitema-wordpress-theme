<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="<?= THEME_CSS_URL ?>/bootstrap.min.css">

<!-- jQuery library -->
<script src="<?= THEME_JS_URL ?>/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="<?= THEME_JS_URL ?>/bootstrap.min.js"></script>
<script>
window.onload = function() {
    if (window.jQuery) {  
        // jQuery is loaded  
        alert("Yeah!");
    } else {
        // jQuery is not loaded
        alert("Doesn't Work");
    }
}
</script>
<body>
    <?php

    echo '<h1>here</h1>';
    echo THEME_VERSION . "<br/>";
    echo THEME_CSS_URL . "<br/>";
    echo THEME_JS_URL . "<br/>";
    echo THEME_URL . "<br/>";
    echo THEME_PATH . "<br/>";
    ?>
</body>
