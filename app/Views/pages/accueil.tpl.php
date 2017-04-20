<?php
$metier=$this->get('metier');
?>

<div id="intro">
	<h1 class="leaguegothic white">Exploraction</h1>

</div>
<div id="box" class="">
    <div id="player"></div>

    <script>
      // 2. This code loads the IFrame Player API code asynchronously.
      var tag = document.createElement('script');

      tag.src = "https://www.youtube.com/iframe_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

      // 3. This function creates an <iframe> (and YouTube player)
      //    after the API code downloads.
      var player;
      function onYouTubeIframeAPIReady() {
        
        player = new YT.Player('player', {
          height: '100%',
          width: '100%',
          position:'fixed',
          top:0,
          left:0,
          videoId: 'r2ShaMdKF6E', //<?= $metier->media_link; ?>
          events: {
            'onReady':onPlayerReady,
            'onStateChange': onPlayerStateChange
          }
        });

      }

      // 4. The API will call this function when the video player is ready.
      function onPlayerReady(event) {
      	setTimeout('',5000);
      	document.getElementById("intro").style.display = "none";
        event.target.playVideo();
      }

      // 5. The API calls this function when the player's state changes.
      //    The function indicates that when playing a video (state=1),
      //    the player should play for six seconds and then stop.
      var done = false;
      function onPlayerStateChange(event) {
        if (event.data == YT.PlayerState.PLAYING && !done) {
          //setTimeout(stopVideo, 6000);
          done = true;
        }
        changeLayout();

      }
      function changeLayout(){
      	console.log(player.getPlayerState());
      	if(player.getPlayerState()==0){
      		changeNow();
      	}

      }
      	
      function stopVideo() {
        player.stopVideo();
      }
    </script>
</div>


<div id="index2" class="wrapper page">
	<div align="center">
		<div class="first_circle"></div> <!-- cercle periphérique -->
		<div class="first_div">
  			<div class="second_div">
    			<div class="img_div">
      				<img src="http://www.wifeo.com/image_design_v3/images_codes/i/img_welcome1410166189.png">
      			</div>
    		</div>
  		</div>

		<div class="txt_welcome"><?= $metier->job_title; ?></div>
		<div class="txt_user">PRESS F5 TO REPLAY</div>
	</div>
</div>

<script type="text/javascript">
	document.getElementById("index2").style.display = "none";

	function changeNow(){
			
			document.getElementById("box").style.display = "none";
			
      		document.getElementById("index2").style.display = "block";
	}
</script>
<script type="text/javascript">
	if(false){

	
	}
	
</script>
