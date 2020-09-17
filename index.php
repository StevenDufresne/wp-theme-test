
<html DOCTYPE="html">
<head>
<title>Yes</title>
<?php wp_head(); ?>
<body>
<?php wp_body_open() ;?>
<?php post_class( ); ?>

    <!-- All the document's HTML goes first. -->
    <!-- Then last, before closing the body tag, add: -->
    <?php wp_footer(); ?>
</body>
</html>