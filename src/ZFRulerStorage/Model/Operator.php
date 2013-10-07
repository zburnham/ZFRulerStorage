<?php
/**
 * Operator.php
 * Model to store information about an Operator entity.
 * 
 * @author Zachary Burnham zburnham@gmail.com
 */

namespace ZFRulerStorage\Model;

use ZFRulerStorage\Model\Variable;

class Operator
{
    /**
     * Auto-increment ID.
     *
     * @var int
     */
    protected $operatorId;
    
    /**
     * Rule this Operator belongs to.  Foreign key.
     *
     * @var int
     */
    protected $ruleId;
    
    /**
     * Variable for the left-hand side of the comparison.
     *
     * @var Variable
     */
    protected $leftVariable;
    
    /**
     * Variable for the right-hand side of the comparison.
     *
     * @var Variable
     */
    protected $rightVariable;
    
    /**
     * Subclass of the main Operator class.
     *
     * @var string 
     */
    protected $class;
    
    /**
     * @return int
     */
    public function getOperatorId()
    {
        return $this->operatorId;
    }

    /**
     * @param int $operatorId
     * @return \ZFRulerStorage\Model\Operator
     */
    public function setOperatorId($operatorId)
    {
        $this->operatorId = $operatorId;
        return $this;
    }

    /**
     * @return int
     */
    public function getRuleId()
    {
        return $this->ruleId;
    }

    /**
     * @param int $ruleId
     * @return \ZFRulerStorage\Model\Operator
     */
    public function setRuleId($ruleId)
    {
        $this->ruleId = $ruleId;
        return $this;
    }

    /**
     * @return Variable
     */
    public function getLeftVariable()
    {
        return $this->leftVariable;
    }

    /**
     * @param \ZFRulerStorage\Model\Variable $leftVariable
     * @return \ZFRulerStorage\Model\Operator
     */
    public function setLeftVariable(Variable $leftVariable)
    {
        $this->leftVariable = $leftVariable;
        return $this;
    }

    /**
     * @return Variable
     */
    public function getRightVariable()
    {
        return $this->rightVariable;
    }

    /**
     * @param \ZFRulerStorage\Model\Variable $rightVariable
     * @return \ZFRulerStorage\Model\Operator
     */
    public function setRightVariable(Variable $rightVariable)
    {
        $this->rightVariable = $rightVariable;
        return $this;
    }

    /**
     * @return string
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * @param string $class
     * @return \ZFRulerStorage\Model\Operator
     */
    public function setClass(type $class)
    {
        $this->class = $class;
        return $this;
    }
}