<?

	require_once 'config.inc';

/*////////////////////////////////////////////

library index

	DB Retrieval

*/////////////////////////////////////////////

//////////////////////////////////////////////
// Retrieves customer account information
//////////////////////////////////////////////

	function get_customer($conn,$ctn) {

		try {
        
	        $PDO = $conn->prepare('SELECT * FROM account WHERE ctn = :ctn');
	        $PDO->bindParam(':ctn', $ctn, PDO::PARAM_STR);
	        $PDO->execute();
	        
	        //$PDO->setFetchMode(PDO::FETCH_OBJ);

	        if($PDO->rowCount() == 0) {
	        	return false;
	        } else {
	        	$account = $PDO->fetchAll();
	        }

	        

	    } catch(PDOException $e) {
	        echo 'ERROR: '.$e->getMessage();    
	    }

	    return $account;

	}

