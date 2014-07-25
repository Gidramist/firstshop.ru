
<?php
/**
*
*/
class Bootstrap
{

	function __construct()
	{

		$controller = new Controller();
        print_r($controller->getUrl());
        $url = $controller->getUrl();


        switch ($url[0]) {
        	case 'index':
        		$Controller->getIndex();
        		break;

    		case 'goods':
        		echo "Попали в индекс";
        		break;

    		case 'product':
        		echo "Попали в продакт";
        		break;

        	default:
        		echo "error";
        		break;
        }





	}
}




?>
