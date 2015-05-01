<?php
/**
 * index.php view page for generic customer controller
 * 
 * Used to show how to do CRUD in CodeIgniter
 * 
 * application/views/customer/index.php
 * 
 * @package ITC260
 * @subpackage Customer
 * @author Emilio Garduno <hitsone.sccc@gmail.com>
 * @version 1.0 2015/04/30 
 * @link http://www.MatrixNinja.com/ 
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see Customer_model.php
 * @see Customer.php
 * @todo none
 */
$this->load->view($this->config->item('theme') . 'header');
?>
<h2><?php echo $title ?></h2>

<?php $this->load->view($this->config->item('theme') . 'footer'); ?>