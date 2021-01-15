<?php foreach($menu as $menuKey => $menuValue ): ?>
<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $menuKey ?></a>
    <ul class="dropdown-menu">
        
        <?php foreach($menuValue as $subMenu => $subMenuValue ): ?>
          <li><a href="<?php echo base_url($subMenuValue["url"]) ?>"><?php echo $subMenuValue["text"] ?></a></li> 
        <?php endforeach ?>
    </ul>
</li>
<?php endforeach ?>