<?php
/**
 * @author Ricardo R. Montuan <ricardo.montuan@hotmail.com>
 *
 */
namespace rrmontuan\challenge;

class MultiplesIterator extends \IteratorIterator
{
    private $multiples;
    private $message;
    
    /**
     * @param \Traversable $iterator The traversable iterator
     * @param array $multiples Multiples that will be tested against each element of $iterator
     * @param string $message This message will be displayed every time an element of $iterator is multiple of all elements in $multiples
     */
    public function __construct(\Traversable $iterator, array $multiples, string $message = '')
    {
        parent::__construct($iterator);
        $this->multiples = $multiples;
        $this->message = $message;
    }
    
    /**
     * Verifies whether the number is multiple of the numbers defined in $multiples or not
     * @param mixed $value
     * @return mixed
     */
    private function isMultiple($value)
    {
        return array_reduce($this->multiples, function($result, $multiple) use ($value){
            return is_numeric($value) && $result && ($value % $multiple == 0);
        }, !empty($this->multiples));
    }
    
    /**
     * {@inheritDoc}
     * @see \IteratorIterator::current()
     */
    public function current(){
        $value = parent::current();
        
        if($this->isMultiple($value)){
            return $this->message;
        }
        
        return $value;
    }
    
}