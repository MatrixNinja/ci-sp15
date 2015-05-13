<?php
/**
 * Customer_model.php model for a generic Customer
 * 
 * Used to show how to do CRUD in CodeIgniter
 * 
 * @package ITC260
 * @subpackage Customer
 * @author Emilio Garduno <hitsone.sccc@gmail.com>
 * @version 1.0 2015/04/30 
 * @link http://www.MatrixNinja.com/ 
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see Customer.php
 * @see index.php
 * @todo none
 */

/**
 * Customer model for the CRUD demo
 * 
 * @see Customer
 * @todo none
 */
class Customer_model extends CI_Model {

	/**
	 * Loads default data into the object
	 * 
	 * @param none
	 * @return void
	 * @todo none
	 */
	public function __construct()
	{
		$this->load->database();
	}//END __constructor function

	
	public function get_customers()
	{
		//return "Hello from the customer model";
		return $this->db->get('test_Customers');
	}//END get_customers()

/* 
	public function get_news($slug = FALSE)
	{
		if ($slug === FALSE)
		{
			$query = $this->db->get('news');
			return $query->result_array();
		}

		$query = $this->db->get_where('news', array('slug' => $slug));
		return $query->row_array();
	}//END get_news function
*/
	
}//END Customer_model class