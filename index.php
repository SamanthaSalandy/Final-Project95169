
	<?php include('common/header.php') ?>
	<div class="home-div">
	
	<h1 id="current-time"></h1>
	
	<video src="PexelsVideosWeather.mp4" muted loop autoplay></video>
     
    <script>
        let time=document.getElementById("current-time");

        setInterval(() =>{
            let d = new Date ();
            time.innerHTML = d.toLocaleTimeString();
        },1000)
	</script>

	</div>
		<div class="w-100 in-ad-ap">
			<div class="row m-auto text-center">
				<div class="col-md-4"><h3>INTRODUCING-CICT</h3></div>
				<div class="col-md-4"><h3>ADMISSION POLICY</h3></div>
				<div class="col-md-4"><h3>APPLY NOW</h3></div>
			</div>
		</div>
		<div class="paragraph">
			<p>
				CICT provides a harmonious environment and learning opportunities  to its students regardless of their gender, socioeconomic background, religious beliefs and regional differences.
			</p>
		</div>
	<?php include('common/cards.php') ?>
	<?php include('common/footer.php') ?>
</body>
</html>

