<?php
namespace belenka\DHLExpress;

class ExportLineItems extends DataClass {

    /**
     * @var ExportLineItem[]
     */
    protected $exportLineItems;

	/**
	 * ExportLineItems constructor.
	 */
	public function __construct()
	{
		$this->exportLineItems = [];
	}

	/**
	 * @return ExportLineItem[]
	 */
	public function getExportLineItems()
	{
		return $this->exportLineItems;
	}

	/**
	 * @param ExportLineItem[] $exportLineItems
	 * @return ExportLineItems
	 */
	public function setExportLineItems($exportLineItems)
	{
		$this->exportLineItems['ExportLineItem'] = $exportLineItems;
		return $this;
	}

	/**
	 * @param ExportLineItem $exportLineItem
	 * @return ExportLineItems
	 */
	public function addExportLineItem(ExportLineItem $exportLineItem)
	{
		$this->exportLineItems['ExportLineItem'][] = $exportLineItem->buildData();
		return $this;
	}

    /**
     * @return array
     */
    public function buildData() {
		return $this->exportLineItems;
    }
}