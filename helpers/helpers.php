<?php

/**
 * Get the base path
 * 
 * @param string $path
 * @return string
 */

function base_path($path = '')
{
  return dirname(__DIR__) . '/' . $path;
}
