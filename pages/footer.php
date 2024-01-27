<?php

class Footer{
    public function render()
    {
        $footer_links = array("Schedule","Details","RSVP");
        $footer_links_href = array("schedule","details","rsvp");
        $footer_links_id = array("schedule","details","rsvp");
        ?>

        <footer>
            <nav id="linksContainer-footer">
                <section class="footer-1">
            <h1 class="footer-heading">Ashish & Skya</h1>
                <?php
                for($i = 0; $i < count($footer_links); $i++)
                {
                    ?>
                    <a href="./<?php echo $footer_links_href[$i]?>.php" class="navLinks-footer" id="<?php echo $footer_links_id[$i]?>"><?php echo $footer_links[$i] ?></a>
                    <?php
                }
                ?>
                </section>
                <section class="footer-2"></section>
            </nav>
        </footer>
        <?php
    }
}
?>
