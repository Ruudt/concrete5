<?
namespace Concrete\Attribute\Text;
use Loader;
use \Concrete\Core\Foundation\Object;
use \Concrete\Core\Attribute\DefaultController;
class Controller extends DefaultController  {

	protected $searchIndexFieldDefinition = 'X NULL';

	public function form() {
		if (is_object($this->attributeValue)) {
			$value = Loader::helper('text')->entities($this->getAttributeValue()->getValue());
		}
		print Loader::helper('form')->text($this->field('value'), $value);
	}
	
	public function composer() {
		if (is_object($this->attributeValue)) {
			$value = Loader::helper('text')->entities($this->getAttributeValue()->getValue());
		}
		print Loader::helper('form')->text($this->field('value'), $value, array('class' => 'span5'));
	}


}