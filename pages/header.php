<?php 

class Header{
    public function render()
    {

        ?>

<header>
        <h1>Ashish & Skya</h1>
        <nav id="linksContainer">
        <?php
//            $linksList = array("Home","Jewellery","Guests","Plans","License","Gifts Registery","Decoration","Food","Invitations","Photoshoot","Venue","Playlist","Wedding Album");
//            $hrefList = array("index","jewellery","guests","plans","license","gifts-registery","decoration","food","invitations","photoshoot","venue","playlist","wedding-album");
            $linksList_1 = array("Home","Our Story","The Wedding","Registry","Contact");
            $hrefList_1 = array("index","our-story","the-wedding","registry","contact");
            for($i = 0; $i < count($linksList_1); $i++)
            {
                ?>
                <a href="./<?php echo $hrefList_1[$i]?>.php" class="navLinks"><?php echo $linksList_1[$i] ?></a>
                <?php
            }
            ?>
        </nav>
    </header>
        <?php
    }
}
?>