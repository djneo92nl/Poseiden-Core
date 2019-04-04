<?php

namespace App\Devices\Interfaces\Lights;

/**
 * Interface DimmableDevice
 * @package App\Devices\Interfaces\Lights
 */
interface DimmableDevice
{
	public function __construct($deviceControllerManager, $data);

	/**
	 * @return mixed
	 */
	public function setState (State\DimmableState $state);

	/**
	 * @return mixed
	 */
	public function getState ();

	/**
	 * @return mixed
	 */
	public function setOff ();

	/**
	 * @return mixed
	 */
	public function setOn ();

	/**
	 * @return mixed
	 */
	public function setBrightness ($brightness);

	/**
	 * @return mixed
	 */
	public function getBrightness ();
}

