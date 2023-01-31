<footer>
    <nav id="menuRS" class="nav-rs">
        <?php 
                    foreach($menuRS as $item){
                        echo "<a href=".$item->page." target='_blank'><div class='rs ".$item->titre."'></div></a>";
                    }
        ?>
    </nav>
</footer>