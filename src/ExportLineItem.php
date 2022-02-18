<?php
namespace belenka\DHLExpress;

class ExportLineItem extends DataClass {

    /**
     * @var string
     */
    protected $insuredValue;

	/**
	 * @var integer
	 */
	protected $itemNumber;

	/**
	 * @var string
	 */
	protected $commodityCode;

	/**
	 * @var string
	 */
	protected $importCommodityCode;

	/**
	 * @var integer
	 */
	protected $quantity;

	/**
	 * @var string
	 */
	protected $quantityUnitOfMeasurement;

	/**
	 * @var string
	 */
	protected $itemDescription;

	/**
	 * @var double
	 */
	protected $unitPrice;

	/**
	 * @var double
	 */
	protected $netWeight;

	/**
	 * @var double
	 */
	protected $grossWeight;

	/**
	 * @var string
	 */
	protected $exportReasonType;

	/**
	 * @var string
	 */
	protected $ManufacturingCountryCode;

	/**
	 * @var string
	 */
	protected $taxesPaid;

	/**
	 * @return string
	 */
	public function getInsuredValue()
	{
		return $this->insuredValue;
	}

	/**
	 * @param string $insuredValue
	 * @return ExportLineItem
	 */
	public function setInsuredValue($insuredValue)
	{
		$this->insuredValue = $insuredValue;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getItemNumber()
	{
		return $this->itemNumber;
	}

	/**
	 * @param int $itemNumber
	 * @return ExportLineItem
	 */
	public function setItemNumber($itemNumber)
	{
		$this->itemNumber = $itemNumber;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getCommodityCode()
	{
		return $this->commodityCode;
	}

	/**
	 * @param string $commodityCode
	 * @return ExportLineItem
	 */
	public function setCommodityCode($commodityCode)
	{
		$this->commodityCode = $commodityCode;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getImportCommodityCode()
	{
		return $this->importCommodityCode;
	}

	/**
	 * @param string $importCommodityCode
	 * @return ExportLineItem
	 */
	public function setImportCommodityCode($importCommodityCode)
	{
		$this->importCommodityCode = $importCommodityCode;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getQuantity()
	{
		return $this->quantity;
	}

	/**
	 * @param int $quantity
	 * @return ExportLineItem
	 */
	public function setQuantity($quantity)
	{
		$this->quantity = $quantity;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getQuantityUnitOfMeasurement()
	{
		return $this->quantityUnitOfMeasurement;
	}

	/**
	 * @param string $quantityUnitOfMeasurement
	 * @return ExportLineItem
	 */
	public function setQuantityUnitOfMeasurement($quantityUnitOfMeasurement)
	{
		$this->quantityUnitOfMeasurement = $quantityUnitOfMeasurement;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getItemDescription()
	{
		return $this->itemDescription;
	}

	/**
	 * @param string $itemDescription
	 * @return ExportLineItem
	 */
	public function setItemDescription($itemDescription)
	{
		$this->itemDescription = $itemDescription;
		return $this;
	}

	/**
	 * @return float
	 */
	public function getUnitPrice()
	{
		return $this->unitPrice;
	}

	/**
	 * @param float $unitPrice
	 * @return ExportLineItem
	 */
	public function setUnitPrice($unitPrice)
	{
		$this->unitPrice = $unitPrice;
		return $this;
	}

	/**
	 * @return float
	 */
	public function getNetWeight()
	{
		return $this->netWeight;
	}

	/**
	 * @param float $netWeight
	 * @return ExportLineItem
	 */
	public function setNetWeight($netWeight)
	{
		$this->netWeight = $netWeight;
		return $this;
	}

	/**
	 * @return float
	 */
	public function getGrossWeight()
	{
		return $this->grossWeight;
	}

	/**
	 * @param float $grossWeight
	 * @return ExportLineItem
	 */
	public function setGrossWeight($grossWeight)
	{
		$this->grossWeight = $grossWeight;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getExportReasonType()
	{
		return $this->exportReasonType;
	}

	/**
	 * @param string $exportReasonType
	 * @return ExportLineItem
	 */
	public function setExportReasonType($exportReasonType)
	{
		$this->exportReasonType = $exportReasonType;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getManufacturingCountryCode()
	{
		return $this->ManufacturingCountryCode;
	}

	/**
	 * @param string $ManufacturingCountryCode
	 * @return ExportLineItem
	 */
	public function setManufacturingCountryCode($ManufacturingCountryCode)
	{
		$this->ManufacturingCountryCode = $ManufacturingCountryCode;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getTaxesPaid()
	{
		return $this->taxesPaid;
	}

	/**
	 * @param string $taxesPaid
	 * @return ExportLineItem
	 */
	public function setTaxesPaid($taxesPaid)
	{
		$this->taxesPaid = $taxesPaid;
		return $this;
	}

	/**
     * @return array
     */
    public function buildData() {
        return [
            'ItemNumber' => $this->itemNumber,
            'CommodityCode' => $this->commodityCode,
            'ImportCommodityCode' => $this->importCommodityCode,
            'Quantity' => $this->quantity,
            'QuantityUnitOfMeasurement' => $this->quantityUnitOfMeasurement,
            'ItemDescription' => $this->itemDescription,
            'UnitPrice' => $this->unitPrice,
            'NetWeight' => $this->netWeight,
            'GrossWeight' => $this->grossWeight,
            'ExportReasonType' => $this->exportReasonType,
            'ManufacturingCountryCode' => $this->ManufacturingCountryCode,
            'TaxesPaid' => $this->taxesPaid,
        ];
    }
}