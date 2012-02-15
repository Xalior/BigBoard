<?php
/**
 * Interface for BigBoard modules
 *
 * @author D. Rimron (xalior.com)
 */
interface BigBoardModuleInterface {
	public function getHeader();
    public function getBody();
    public function xhr();
	public function getAllJobs();
}

class BigBoardBasemodule implements BigBoardModuleInterface {
    private $hash = '';

    function getHeader() {

    }

    function getBody() {

    }

    function xhr() {

    }

    function getAllJobs() {

    }

}
?>
