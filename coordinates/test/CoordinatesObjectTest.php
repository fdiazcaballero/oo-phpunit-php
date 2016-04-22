<?php
require_once __DIR__ . "/../src/Autoloader.php";

/**
 * Generated by PHPUnit_SkeletonGenerator on 2016-04-13 at 22:07:33.
 */
class CoordinatesObjectTest extends PHPUnit_Framework_TestCase {

    /**
     * @var CoordinatesObject
     */
    protected $object;

    protected function setUp() {
        $this->object = new CoordinatesObject(array(array(1,1), array(1,3)));
    }

    protected function tearDown() {
         $this->object=null;
    }

    /**
     * @covers CoordinatesObject::write
     */
    public function testWriteHtml() {
        $this->expectOutputString(
'<html><br>
<body><br>
  <table border=1><br>
  <tr><br>
      <td>1</td><br>
      <td>1</td><br>
  </tr><br>
  <tr><br>
      <td>1</td><br>
      <td>3</td><br>
  </tr><br>
  </table><br>
</body><br>
</html><br>
');
        $this->object->write(CoordinatesBaseFactory::getWriter());       
        
    }
    
    function testWriteCSVSuccess(){
        $this->expectOutputString(
'coordinate x, coordinate y
1,1
1,3');
        $this->object->write(CoordinatesBaseFactory::getWriter("text/csv"));            
    }

}
