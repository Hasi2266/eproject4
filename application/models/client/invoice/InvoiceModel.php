<?php 

Class InvoiceModel extends CI_Model{

    var $id;
    var $invoice_id;
    var $project_id;
    var $total_amount;
    var $sub_total;
    var $client_id;
    var $status;
    var $created_date;
    var $update_date;
    var $balance;


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

    /**
     * Get the value of sub_total
     */ 
    public function getSub_total()
    {
        return $this->sub_total;
    }

    /**
     * Set the value of sub_total
     *
     * @return  self
     */ 
    public function setSub_total($sub_total)
    {
        $this->sub_total = $sub_total;

        return $this;
    }

    /**
     * Get the value of balance
     */ 
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * Set the value of balance
     *
     * @return  self
     */ 
    public function setBalance($balance)
    {
        $this->balance = $balance;

        return $this;
    }

  

   

    /**
     * Get the value of update_date
     */ 
    public function getUpdate_date()
    {
        return $this->update_date;
    }

    /**
     * Set the value of update_date
     *
     * @return  self
     */ 
    public function setUpdate_date($update_date)
    {
        $this->update_date = $update_date;

        return $this;
    }
}


?>