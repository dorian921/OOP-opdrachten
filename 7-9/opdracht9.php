
<?php

class Music {
  /**
   * @var string
   */
  public $name;

  /**
   * @var string
   */
  public $genre;

  /**
   * @var int
   */
  public $listen;

  /**
   * Music constructor.
   * @param string $name
   * @param string $genre
   * @param int $listen
   */
  public function __construct($name, $genre, $listen) {
    $this->name = $name;
    $this->genre = $genre;
    $this->listen = $listen;
  }

  /**
   * @return string
   */
  public function getName() {
    return $this->name;
  }
}

?>