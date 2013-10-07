<?php
/**
 * Variable.php
 * Model to store information about a Variable entity.
 * 
 * @author Zachary Burnham zburnham@gmail.com
 */

namespace ZFRulerStorage\Model;

class Variable
{
    /**
     * Auto-increment ID.
     *
     * @var int
     */
    protected $variableId;
    
    /**
     * Operator this Variable is associated with.  Foreign key.
     * @var int
     */
    protected $operatorId;
    
    /**
     * Variable name.
     *
     * @var string
     */
    protected $name;
    
    /**
     * Default variable value.
     *
     * @var mixed
     */
    protected $value;
    
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return \ZFRulerStorage\Model\Variable
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     * @return \ZFRulerStorage\Model\Variable
     */
    public function setValue($value)
    {
        $this->value = $value;
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
     * @return \ZFRulerStorage\Model\Variable
     */
    public function setVariableId($variableId)
    {
        $this->variableId = $variableId;
        return $this;
    }

    /**
     * @return int
     */
    public function getOperatorId()
    {
        return $this->operatorId;
    }

    /**
     * @param int $operatorId
     * @return \ZFRulerStorage\Model\Variable
     */
    public function setOperatorId($operatorId)
    {
        $this->operatorId = $operatorId;
        return $this;
    }
}