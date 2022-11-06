<?php

/**
 * log a message in the debug.log file
 *
 * @param mixed $message
 * @param mixed $value
 *
 * @return void
 */
function log_message(mixed $message = '', mixed $value = ''): void  {
	$output = empty($value) ? $message : $message . '=>' . var_export($value, true);
	$output .= "\n";

	error_log($output, 3, 'debug.log');
}