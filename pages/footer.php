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
                <hr>

                <section class="footer-2">
                    <iframe id="wedding-location" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3330.4015637679663!2d-111.82227122426107!3d33.41277367340445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x872ba7d05518c717%3A0x7d4718ad7510c9f7!2sMesa%20Arizona%20Temple!5e0!3m2!1sen!2sus!4v1706396272621!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </section>
            </nav>
        </footer>
        <?php
    }
}
?>
