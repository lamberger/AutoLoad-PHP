<?php include 'class_resource/config.php' ?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>PHP AutoLoad Classes</title>
    </head>

<body>
    <!-- Create an object of Person class -->
    <?php $person = new Person('John', 'Doe', ' john@doe.com'); ?>

    <!-- Calling all functions in Persson -->
    <p><?php echo 'All info about Person : '.$person->getAllPersonInfo(); ?></p>
    <p><?php echo 'Person class full name : '.$person->getFullName(); ?></p>
    <p><?php echo 'Person class email : '.$person->getEmail(); ?></p>
    
    <!-- Create an object of Address class -->  
    <?php $address = new Address('Wall Street', '95-104', 'New York'); ?>

    <!-- Calling all functions in Address -->
    <p><?php echo 'All info about the Address : '.$address->getAllAddressInfo(); ?></p>
    <p><?php echo 'Address class Street : '.$address->getStreet(); ?></p>
    <p><?php echo 'Address class Area : '.$address->getArea(); ?></p>
    <p><?php echo 'Address class City : '.$address->getCity(); ?></p>
    
    <!-- Output -->   
    <p><?php echo $person->getFullName(). ' has been seen at '. $address->getStreet().' in '. $address->getCity(); ?> ;-)</p>
        
</body>
</html>
