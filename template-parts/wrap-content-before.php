<?php

$col_class = 'col-sm-9';

if( is_page_template ( 'template-full-width.php' ) ){ // show wide column if sidebar is removed
	$col_class = 'col-sm-12 site-full-width-wrap';
}

?>

    <div id="primary" class="content-area <?php echo $col_class; ?>">
        <main id="main" class="site-main">
