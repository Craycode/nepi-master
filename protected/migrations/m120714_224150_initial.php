<?php

class m120714_224150_initial extends CDbMigration
{

	public function up()
	{
		$sql = <<<EOD
			-- phpMyAdmin SQL Dump
			-- version 3.4.10.1deb1
			-- http://www.phpmyadmin.net
			--
			-- Host: localhost
			-- Generation Time: Jul 14, 2012 at 10:36 PM
			-- Server version: 5.5.24
			-- PHP Version: 5.3.10-1ubuntu3.2

			SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
			SET AUTOCOMMIT=0;
			START TRANSACTION;
			SET time_zone = "+00:00";

			--
			-- Database: `nepi`
			--
			DROP DATABASE `nepi`;
			CREATE DATABASE `nepi` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
			USE `nepi`;
			COMMIT;
EOD;
		$this->execute($sql);
	}

	public function down()
	{
		echo "m120714_224150_initial does not support migration down.\n";
		return false;
	}

	/*
	  // Use safeUp/safeDown to do migration with transaction
	  public function safeUp()
	  {
	  }

	  public function safeDown()
	  {
	  }
	 */
}