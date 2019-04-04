<?php

namespace App\Devices\Interfaces\Lights;

/**
 * Interface DimmableDevice
 * @package App\Devices\Interfaces\Lights
 */
interface OnOffDevice
{
	public function __construct($deviceControllerManager, $data);

	/**
	 * @return mixed
	 */
	public function setState (State\OnOffState $state);

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
     * @return bool
     */
    public function isAvailable();
}

