<?php

/*

In this exercise, you have to use PDO.

Step 0 :  DONE
	Create a new database 'flower_db' and create the Flowers table. DONE
	It will contain: The name of the flower and the price DONE


Step 1 : Display flowers DONE
	
	- Create a class FlowerManager. DONE
	Create a public method findAll() that will retrieve all the flowers and return the result using PDO::FETCH_ASSOC. DONE

	- Create the page view-flowers.php DONE
	Display all the flowers on the page using FlowerManager->findAll(); DONE

Step 2 : 

	- Create the class Flower. DONE
	This class will represent a flower (name, price). DONE

	- Create getter and setter DONE

	- Edit FlowerManager::findAll() method. DONE
	This method should now return an array of Flower objects. DONE

	TIPS : You have to use PDO::FETCH_CLASS

Step 3 :

	- Edit the FlowerManager class.
	Add a new public method find($id).
	This function retrieve one specific flower (thanks to the id in the argument) and returns it.

	- On the view-flowers page, add a link 'see more' next to each flowers.
	This link redirect to 'flower-detail' page.

	- Create page 'flower-detail.php'
	Use get method (same as movie) to grab the id of the flower.

	- Display the flower in this page using FlowerManager->find($id)
	

 ?>