<?php
    if( is_singular() ) :
?>
<div class="breadcrumbs-singular">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>
<?php endif; ?>

<?php
    if( is_archive() ) :
?>
    <div class="breadcrumbs-archive">
        <?php if(function_exists('bcn_display'))
        {
            bcn_display();
        }?>
    </div>
<?php endif; ?>