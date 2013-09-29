<?php

class Carte
{
	private $_width = 498;
	private $_height = 300;
	private $_border = '1px solid black';
	private $_map = 'hq';
	private $_file;

	public function setWidth($width)
	{
		if (!is_int($width)) // S'il ne s'agit pas d'un nombre entier.
		{
			trigger_error('La largeur de la carte doit être un nombre entier', E_USER_WARNING);
			return;
		}

		$this->_width = $width;
	}

	public function setHeight($height)
	{
		if (!is_int($height)) // S'il ne s'agit pas d'un nombre entier.
		{
			trigger_error('La heuteur de la carte doit être un nombre entier', E_USER_WARNING);
			return;
		}

		$this->_height = $height;
	}

	public function setBorder($border)
	{
		$this->_border = $border;
	}

	public function setMap($map)
	{
		$this->_map = $map;
	}

	public function setFile($file)
	{
		$this->_file = $file;
	}

	public function run() // affiche la carte
	{
		echo "<script src=\"http://chc.sbg.ac.at/maps/scripts/prototype.js\" charset=\"utf-8\"></script>\n<script src=\"http://chc.sbg.ac.at/maps/scripts/mapview.js\"   charset=\"utf-8\"></script>\n";

		echo '<div class="chc-mapview" map=' . $this->_map . ' style="width: ' . $this->_width . 'px; height:' . $this->_height . 'px; border: ' . $this->_border . ';">';

		if($this->_file != '')
		{
			echo     "\n\t<link rel=\"chc-mapview-objects\" href=\"$this->_file\">\n";
		}

		echo '</div>';
	}

}


?>

