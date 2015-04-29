<?php
// views/rss/index.php
/*
The code below comes from controllers/News.php:
$this->load->view('themes/bootswatch/header');
========================================================
The dynamic header and footer need to be added to each new page created; index.php, view.php, create.php, etc..

-Dynamic Header Example:
		$this->load->view($this->config->item('theme') . 'header');
*/
$this->load->view($this->config->item('theme') . 'header');
?>
<h2><?php echo $title ?></h2>

<?php
	print '<h1>' . $xml->channel->title . '</h1>';
	foreach($xml->channel->item as $story)
	{
		echo '<a href="' . $story->link . '">' . $story->title . '</a><br />'; 
		echo '<p>' . $story->description . '</p><br /><br />';
	}

$this->load->view($this->config->item('theme') . 'footer'); ?>