 <!DOCTYPE html>
<html>
    <head>
        <?php echo link_tag('/assets/css/tablestyle.css'); ?>
    </head>
    <body>

    </div>

    <div class="well">

  <?php echo $this->table->generate($records);?>

   <p><?php echo $links; ?></p>

    </div>
    
    </body>
</html>


