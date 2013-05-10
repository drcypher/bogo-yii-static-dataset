<?php
/**
 * Static dataset of Id-Title pairs with manual Id.
 */
class CBStaticDatasetManualIdTitle extends CBStaticDataset
{
	/**
	 * Type of input dataset.
	 *
	 * @var integer
	 */
	protected $inputType = self::INPUT_TYPE_ATTRIBUTE_PAIR;

	/**
	 * Optional parameters refining the input type.
	 *
	 * Interpretion of these params depends on the input type selected.
	 *
	 * @var array
	 */
	protected $inputTypeParams = array('keyAttr' => 'id', 'valueAttr' => 'title');

	/**
	 * Attributes to accompany verbose action messages.
	 *
	 * @var string[]
	 */
	protected $verboseAttributes = array('id', 'title');
}