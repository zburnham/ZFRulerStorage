<?php
/**
 * VariableProperty.php
 * Model to store information about a VariableProperty entity.
 * 
 * @author Zachary Burnham zburnham@gmail.com
 */

namespace ZFRulerStorage\Model;

class VariableProperty
{
    /**
     * Auto-increment ID.
     *
     * @var int
     */
    protected $variablePropertiesId;
    
    /**
     * Variable ID (foreign key).
     *
     * @var int
     */
    protected $variableId;
    
    /**
     * @return int
     */
    public function getVariablePropertiesId()
    {
        return $this->variablePropertiesId;
    }

    /**
     * @param int $variablePropertiesId
     * @return \ZFRulerStorage\Model\VariableProperty
     */
    public function setVariablePropertiesId($variablePropertiesId)
    {
        $this->variablePropertiesId = $variablePropertiesId;
        return $this;
    }

    /**
     * @return int
     */
    public function getVariableId()
    {
        return $this->variableId;
    }

    /**
     * @param int $variableId
     * @return \ZFRulerStorage\Model\VariableProperty
     */
    public function setVariableId($variableId)
    {
        $this->variableId = $variableId;
        return $this;
    }
}