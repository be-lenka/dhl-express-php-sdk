<?php
namespace belenka\DHLExpress;

class ExportDeclaration extends DataClass {

    /**
     * @var string
     */
    protected $invoiceDate;

    /**
     * @var string
     */
    protected $invoiceNumber;

    /**
     * @var string
     */
    protected $exportReasonType;

    /**
     * @var string
     */
    protected $exportReason;

    /**
     * @var string
     */
    protected $placeOfIncoterm;

	/**
	 * @var string
	 */
	protected $shipmentPurpose;

	/**
	 * @var string
	 */
	protected $documentFunction;

	/**
	 * @var double
	 */
	protected $invoiceTotalNetWeight;

	/**
	 * @var double
	 */
	protected $invoiceTotalGrossWeight;

	/**
	 * @var string
	 */
	protected $invoiceInstructions;

	/**
	 * @var ExportLineItems
	 */
	protected $exportLineItems;

	/**
	 * @return string
	 */
	public function getInvoiceDate()
	{
		return $this->invoiceDate;
	}

	/**
	 * @param string $invoiceDate
	 * @return ExportDeclaration
	 */
	public function setInvoiceDate($invoiceDate)
	{
		$this->invoiceDate = $invoiceDate;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getInvoiceNumber()
	{
		return $this->invoiceNumber;
	}

	/**
	 * @param string $invoiceNumber
	 * @return ExportDeclaration
	 */
	public function setInvoiceNumber($invoiceNumber)
	{
		$this->invoiceNumber = $invoiceNumber;
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
	 * @return ExportDeclaration
	 */
	public function setExportReasonType($exportReasonType)
	{
		$this->exportReasonType = $exportReasonType;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getExportReason()
	{
		return $this->exportReason;
	}

	/**
	 * @param string $exportReason
	 * @return ExportDeclaration
	 */
	public function setExportReason($exportReason)
	{
		$this->exportReason = $exportReason;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getPlaceOfIncoterm()
	{
		return $this->placeOfIncoterm;
	}

	/**
	 * @param string $placeOfIncoterm
	 * @return ExportDeclaration
	 */
	public function setPlaceOfIncoterm($placeOfIncoterm)
	{
		$this->placeOfIncoterm = $placeOfIncoterm;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getShipmentPurpose()
	{
		return $this->shipmentPurpose;
	}

	/**
	 * @param string $shipmentPurpose
	 * @return ExportDeclaration
	 */
	public function setShipmentPurpose($shipmentPurpose)
	{
		$this->shipmentPurpose = $shipmentPurpose;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getDocumentFunction()
	{
		return $this->documentFunction;
	}

	/**
	 * @param string $documentFunction
	 * @return ExportDeclaration
	 */
	public function setDocumentFunction($documentFunction)
	{
		$this->documentFunction = $documentFunction;
		return $this;
	}

	/**
	 * @return float
	 */
	public function getInvoiceTotalNetWeight()
	{
		return $this->invoiceTotalNetWeight;
	}

	/**
	 * @param float $invoiceTotalNetWeight
	 * @return ExportDeclaration
	 */
	public function setInvoiceTotalNetWeight($invoiceTotalNetWeight)
	{
		$this->invoiceTotalNetWeight = $invoiceTotalNetWeight;
		return $this;
	}

	/**
	 * @return float
	 */
	public function getInvoiceTotalGrossWeight()
	{
		return $this->invoiceTotalGrossWeight;
	}

	/**
	 * @param float $invoiceTotalGrossWeight
	 * @return ExportDeclaration
	 */
	public function setInvoiceTotalGrossWeight($invoiceTotalGrossWeight)
	{
		$this->invoiceTotalGrossWeight = $invoiceTotalGrossWeight;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getInvoiceInstructions()
	{
		return $this->invoiceInstructions;
	}

	/**
	 * @param string $invoiceInstructions
	 * @return ExportDeclaration
	 */
	public function setInvoiceInstructions($invoiceInstructions)
	{
		$this->invoiceInstructions = $invoiceInstructions;
		return $this;
	}

	/**
	 * @return ExportLineItems
	 */
	public function getExportLineItems()
	{
		return $this->exportLineItems;
	}

	/**
	 * @param ExportLineItems $exportLineItems
	 * @return ExportDeclaration
	 */
	public function setExportLineItems($exportLineItems)
	{
		$this->exportLineItems = $exportLineItems;
		return $this;
	}

	/**
     * @return array
     */
    public function buildData() {
        $result = [
            'InvoiceDate' => $this->invoiceDate,
            'InvoiceNumber' => $this->invoiceNumber,
            'ExportReasonType' => $this->exportReasonType,
            'ExportReason' => $this->exportReason,
            'PlaceOfIncoterm' => $this->placeOfIncoterm,
            'ShipmentPurpose' => $this->shipmentPurpose,
            'DocumentFunction' => $this->documentFunction,
            'InvoiceTotalNetWeight' => $this->invoiceTotalNetWeight,
            'InvoiceTotalGrossWeight' => $this->invoiceTotalGrossWeight,
            'InvoiceInstructions' => $this->invoiceInstructions,
        ];

        if ($this->exportLineItems instanceof ExportLineItems) {
        	$result['ExportLineItems'] = $this->exportLineItems->buildData();
		}

        return $result;
    }
}