<?php
/**
 * Base exception for all BigBoard exceptions.
 */
class BigBoardException extends Exception {};

/**
 * Thrown when there is an error communicating with the CI Server
 */
class BigBoardCIServerCommunicationException extends BigBoardException {};

?>