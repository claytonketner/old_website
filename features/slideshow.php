<link rel="stylesheet" type="text/css" href="style/slideshow.css">

<?php
	if (!isset($width))
	{
		$width = "500";
	}

	require_once("features/info-section.php");
	$information = array();
	$infoPaths = preg_replace("/\.\w+/", ".txt", $images); // Get the image paths without the extension, keeping the period

	for ($i = 0; $i < count($infoPaths); $i++)
	{
		$src = $infoPaths[$i];
		$infoContents = file($src); // Array of each line
		$section = null;

		foreach ($infoContents as $line)
		{
			$line = trim($line);
			if ($line == "")
				continue;

			if ($line == "TITLE")
			{
				$section = InfoSection::TITLE;
				if (!isset($information[$i]["title"]))
					$information[$i]["title"] = "";
				continue;
			}
			if ($line == "DESCRIPTION")
			{
				$section = InfoSection::DESCRIPTION;
				if (!isset($information[$i]["description"]))
					$information[$i]["description"] = "";
				continue;
			}
			if ($line == "OTHER")
			{
				$section = InfoSection::OTHER;
				if (!isset($information[$i]["other"]))
					$information[$i]["other"] = "";
				continue;
			}

			if ($section == InfoSection::TITLE)
				$information[$i]["title"] .= " " . $line;
			if ($section == InfoSection::DESCRIPTION)
				$information[$i]["description"] .= " " . $line;
			if ($section == InfoSection::OTHER)
				$information[$i]["other"] .= " " . $line;
		}
	}
?>

<script type="text/javascript">
	$(".slideshow-image").ready(function()
	{
		prepareSlideshow($(this).find(".slideshow-image-wrapper"));
	});
</script>

<div class="slideshow-wrapper">
	<div class="slideshow-image-wrapper">
		<div class="slideshow-control-wrapper previous"><div class="slideshow-control previous"></div></div>

		<div class="slideshow-image">
			<?php
				for ($i = 0; $i < count($images); $i++)
				{
					$src = $images[$i];
					echo "<img src='" . $src . "' style='left:" . $i * $width . "px'>";
				}
			?>
		</div>

		<div class="slideshow-control-wrapper next"><div class="slideshow-control next"></div></div>
	</div>
	<div style="clear: both"></div>
	<div class="slideshow-description-wrapper">
		<div class="slideshow-description">
			<?php
				for ($i = 0; $i < count($information); $i++)
				{
					$info = $information[$i];
					if ($i == 0)
						echo "<div style='display:block;'>";
					else
						echo "<div>";
					echo "<h3>" . $info["title"] . "</h3>";
					if (isset($info["description"]))
						echo "<p>" . $info["description"] . "</p>";
					if (isset($info["other"]))
						echo $info["other"];
					echo "</div>";
				}
			?>
		</div>
		<div class="slideshow-description-control">
			Show Info
		</div>
	</div>
</div>