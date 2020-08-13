
<?php
class Pokemon
{
  /**
   * Set up some properties for your class.
   * 
   * Properties can be public, protected, or private.
   */
  public $name = '';
  public $health = 25;
  public $type = 'normal';
  private $level = 1;

  //  If a property is private, it can still be read/output if you set up a method for it.
  public function getLevel () {
    return $this->level;
  }

  // If a property is private, it can still be written to/updated if you set up a method for it.
  public function levelUp () {
    $this->level++;
    return $this->level;
  }
}