<?php
/**
 * PHP QR Code porting for Codeigniter
 *
 * @package        	CodeIgniter
 * @subpackage    	Libraries
 * @category    	Libraries
 * @porting author	dwi.setiyadi@gmail.com
 * @original author	http://phpqrcode.sourceforge.net/
 * 
 * @version		1.0
 */
 
class Ciqrcode
{
	var $cacheable = true;
	var $cachedir = 'application/cache/';
	var $errorlog = 'application/logs/';
	var $quality = true;
	var $size = 1024;
	
	function __construct($config = array()) {
		// call original library
		include "qrcode/qrconst.php";
		include "qrcode/qrtools.php";
		include "qrcode/qrspec.php";
		include "qrcode/qrimage.php";
		include "qrcode/qrinput.php";
		include "qrcode/qrbitstream.php";
		include "qrcode/qrsplit.php";
		include "qrcode/qrrscode.php";
		include "qrcode/qrmask.php";
		include "qrcode/qrencode.php";
        include(APPPATH . 'libraries/phpqrcode/qrlib.php');

		
		$this->initialize($config);
	}
	
	public function initialize($config = array()) {
		$this->cacheable = (isset($config['cacheable'])) ? $config['cacheable'] : $this->cacheable;
		$this->cachedir = (isset($config['cachedir'])) ? $config['cachedir'] : FCPATH.$this->cachedir;
		$this->errorlog = (isset($config['errorlog'])) ? $config['errorlog'] : FCPATH.$this->errorlog;
		$this->quality = (isset($config['quality'])) ? $config['quality'] : $this->quality;
		$this->size = (isset($config['size'])) ? $config['size'] : $this->size;
		
		// use cache - more disk reads but less CPU power, masks and format templates are stored there
		if (!defined('QR_CACHEABLE')) define('QR_CACHEABLE', $this->cacheable);
		
		// used when QR_CACHEABLE === true
		if (!defined('QR_CACHE_DIR')) define('QR_CACHE_DIR', $this->cachedir);
		
		// default error logs dir
		if (!defined('QR_LOG_DIR')) define('QR_LOG_DIR', $this->errorlog);
		
		// if true, estimates best mask (spec. default, but extremally slow; set to false to significant performance boost but (propably) worst quality code
		if ($this->quality) {
			if (!defined('QR_FIND_BEST_MASK')) define('QR_FIND_BEST_MASK', true);
		} else {
			if (!defined('QR_FIND_BEST_MASK')) define('QR_FIND_BEST_MASK', false);
			if (!defined('QR_DEFAULT_MASK')) define('QR_DEFAULT_MASK', $this->quality);
		}
		
		// if false, checks all masks available, otherwise value tells count of masks need to be checked, mask id are got randomly
		if (!defined('QR_FIND_FROM_RANDOM')) define('QR_FIND_FROM_RANDOM', false);
		
		// maximum allowed png image width (in pixels), tune to make sure GD and PHP can handle such big images
		if (!defined('QR_PNG_MAXIMUM_SIZE')) define('QR_PNG_MAXIMUM_SIZE',  $this->size);
	}
	
	public function generate($params = array())
{
    if (!isset($params['data'])) {
        show_error('QR Code data is not set.');
    }

    // QR Code configuration
    $tempDir = isset($params['savename']) ? $params['savename'] : FCPATH . 'assets/qr_code/';
    $filename = isset($params['filename']) ? $params['filename'] : 'qrcode.png'; // Default filename

    // Ensure the directory exists
    if (!is_dir($tempDir)) {
        mkdir($tempDir, 0755, true);
    }

    // Generate QR Code
    QRcode::png(
        $params['data'],
        $tempDir . $filename,
        isset($params['level']) ? $params['level'] : 'L',
        isset($params['size']) ? $params['size'] : 4,
        isset($params['margin']) ? $params['margin'] : 2
    );

    return $tempDir . $filename;  // Return the path to the generated QR code
}

}

/* end of file */
