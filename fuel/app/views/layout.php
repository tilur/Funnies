<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US">
        <head>
                <?php echo $head; ?>
        </head>
        <body>
                <div id="tupperware">
                        <?php echo $header; ?>
                        <?php if ($sidebarLeft) { ?>
                        <div id="tupper-sidebar-left"><?php echo $sidebarLeft; ?></div>
                        <?php } ?>
                        <div id="tupper-content" class="<?php echo $pageClass.' '.$contentClass; ?>">
                                <?php echo $content; ?>
                        </div>
                        <?php if ($sidebarRight) { ?>
                        <div id="tupper-sidebar-right"><?php echo $sidebarRight; ?></div>
                        <?php } ?>
                        <?php echo $footer; ?>
                </div>
        </body>
</html>