<?php

interface  BaseLib 
{
	public function install(  $param = array() );
	public function uninstall(  $param = array() );
	public function delete(  $param = array() );
	public function update(  $param = array() );
	public function select(  $param = array() );
	public function insert(  $param = array() );
	public function create(  $param = array() );
	public function getlist( $limit = 10, $offset = 0 );
}