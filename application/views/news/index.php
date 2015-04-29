<?php
// views/news/index.php
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

<?php foreach ($news as $news_item): ?>
        <h3><?php echo $news_item['title'] ?></h3>
        <div class="main">
                <?php echo $news_item['text'] ?>
        </div>
<?php echo anchor ('news/' . $news_item['slug'], 'View Article'); ?>

<?php endforeach ?>

<?php $this->load->view($this->config->item('theme') . 'footer'); ?>