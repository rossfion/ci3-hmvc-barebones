<?php (defined('BASEPATH')) OR exit('No direct script access allowed');
/**
 * Welcome Controller
 *
 * @category Controller
 * @package  CodeIgniter
 * @author   Tariqul Islam <tareq@webkutir.net>
 * @license  http://directory.fsf.org/wiki/License:ReciprocalPLv1.3 Reciprocal Public License v1.3
 * @link     http://webkutir.net
 */
class Welcome extends MX_Controller
{
    /**
     * Class Constructor
     */
    function __construct()
    {
        parent::__construct();
        $this->parser->setModule("welcome");
    }
    /**
     * Default Method
     * 
     * @return void
     */
    public function index()
    {
        $this->parser->parse("welcome_message");
    }
}
/* End of file welcome.php */
/* Location: ./application/modules/welcome/controllers/welcome.php */