<?php 
/* 
template name: Porcs
*/
get_header(); ?>
	<audio id="omfgaudio" loop>
        <source src="https://puravariedad.com/wp-content/uploads/2025/06/maubel-porc.mp3" type="audio/mp3">
    </audio>
    <div class="switch" onclick="maubel()" id="maubel">Click to toggle the music</div>
    <script type="text/javascript">
        function maubel() {
            var toggler = document.getElementById("maubel");
            var audioElement = document.getElementById("omfgaudio");
            if (audioElement.paused) {
                audioElement.play();
            }
            else {
                audioElement.pause();
            }
            toggler.classList.toggle("on");
        }
    </script>
<style>
/* REWrites Isla*/
.page-template-page-porcs {
	background-color: #1e9bea;
}
.page-template-page-porcs .main-header,
.page-template-page-porcs .pie {
	display: none
}
.page-template-page-porcs a {
	transition: 0s;
}
.page-template-page-porcs a:hover {
	transition: 0s;
	color: transparent
}
/* General styles isla */
.page-template-page-porcs {
    cursor:url('https://puravariedad.com/wp-content/uploads/2025/06/ungle.png'), auto;
    margin: 0;
    padding: 0;
    background: url('https://puravariedad.com/wp-content/uploads/2025/06/porcs.gif');
    position: relative;
}
@media (max-width: 640px) {
    .page-template-page-porcs {
        background: url('https://puravariedad.com/wp-content/uploads/2025/06/porcs-mini.gif');
    }
}
.switch {
    background: url('https://puravariedad.com/wp-content/uploads/2025/06/maubel-off.png');
    color: transparent;
    display: block;
    position: fixed;
    width: 200px;
    height: 204px;
    right: 2em;
    bottom: 2em;
    z-index: 1;
}
.switch.on {
    background: url('https://puravariedad.com/wp-content/uploads/2025/06/maubel-on.png');
}
</style>
<?php get_footer(); ?>