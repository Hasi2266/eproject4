<?php 

Class InvoiceDataModel extends CI_Model{

    var $id;
    var $project_id;
    var $invoice_id;
    var $total_amount;
    var $client_id;
    var $invoice_des;
    var $date;
    var $weight;
    var $amount;
    var $status;
    var $created_date;


    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of project_id
     */ 
    public function getProject_id()
    {
        return $this->project_id;
    }

    /**
     * Set the value of project_id
     *
     * @return  self
     */ 
    public function setProject_id($project_id)
    {
        $this->project_id = $project_id;

        return $this;
    }

    /**
     * Get the value of total_amount
     */ 
    public function getTotal_amount()
    {
        return $this->total_amount;
    }

    /**
     * Set the value of total_amount
     *
     * @return  self
     */ 
    public function setTotal_amount($total_amount)
    {
        $this->total_amount = $total_amount;

        return $this;
    }

    /**
     * Get the value of client_id
     */ 
    public function getClient_id()
    {
        return $this->client_id;
    }

    /**
     * Set the value of client_id
     *
     * @return  self
     */ 
    public function setClient_id($client_id)
    {
        $this->client_id = $client_id;

        return $this;
    }

    /**
     * Get the value of invoice_des
     */ 
    public function getInvoice_des()
    {
        return $this->invoice_des;
    }

    /**
     * Set the value of invoice_des
     *
     * @return  self
     */ 
    public function setInvoice_des($invoice_des)
    {
        $this->invoice_des = $invoice_des;

        return $this;
    }

    /**
     * Get the value of date
     */ 
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of date
     *
     * @return  self
     */ 
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get the value of weight
     */ 
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set the value of weight
     *
     * @return  self
     */ 
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get the value of amount
     */ 
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set the value of amount
     *
     * @return  self
     */ 
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get the value of status
     */ 
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @return  self
     */ 
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get the value of created_date
     */ 
    public function getCreated_date()
    {
        return $this->created_date;
    }

    /**
     * Set the value of created_date
     *
     * @return  self
     */ 
    public function setCreated_date($created_date)
    {
        $this->created_date = $created_date;

        return $this;
    }

    /**
     * Get the value of invoice_id
     */ 
    public function getInvoice_id()
    {
        return $this->invoice_id;
    }

    /**
     * Set the value of invoice_id
     *
     * @return  self
     */ 
    public function setInvoice_id($invoice_id)
    {
        $this->invoice_id = $invoice_id;

        return $this;
    }
}


?>