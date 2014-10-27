
</div><!--end page-container-->
<!-- <div class="slide-out-div">
            <a class="handle" href="http://link-for-non-js-users.html">Content</a>
            <h3>Contact me</h3>
            <p>Thanks for checking out my jQuery plugin, I hope you find this useful.
            </p>
            <p>This can be a form to submit feedback, or contact info</p>
        </div> -->

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/snap.js"></script>
        <script type="text/javascript">
            var snapper = new Snap({
                element: document.getElementById('snapcontent'),
                dragger: document.getElementById('snapdrag'),
                disable: 'right'
            });
            
        </script>
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/demo.js"></script>

</body>

<?php wp_footer(); ?>
</html>
