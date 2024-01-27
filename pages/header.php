<?php 

class Header{
    public function render()
    {

        ?>

<header>
        <h1>Ashish & Skya</h1>
        <nav id="linksContainer">
        <?php
            $linksList = array("Home","Jewellery","Guests","Plans","License","Gifts Registery","Decoration","Food","Invitations","Photoshoot","Venue","Playlist","Wedding Album");
            $hrefList = array("index","jewellery","guests","plans","license","gifts-registery","decoration","food","invitations","photoshoot","venue","playlist","wedding-album");
            for($i = 0; $i < count($linksList); $i++)
            {
                ?>
                <a href="./<?php echo $hrefList[$i]?>.php" class="navLinks"><?php echo $linksList[$i] ?></a>
                <?php
            }
            ?>
        </nav>
    </header>
        <?php
    }
}
?>