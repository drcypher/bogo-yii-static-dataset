<?php
/**
 * Static dataset of Id-Title pairs with Auto-increment Id.
 */
class CBStaticDatasetAutoIdTitle extends CBStaticDatasetManualIdTitle
{
	/**
	 * Names of attributes which should be suppressed when inserting.
	 *
	 * @var string[]
	 */
	protected $suppressedInsertAttributes = array('id');
}