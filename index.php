 <?php 
$filename = "counter.txt"; 
if (!file_exists($filename)) { 
    file_put_contents($filename, 0); 
} 
$visitorCount = (int) file_get_contents($filename); 
$visitorCount++; 
file_put_contents($filename, $visitorCount); 
?> 
 
<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Visitor Counter</title> 
    <style> 
        body { 
            font-family: Arial, sans-serif; 
            text-align: center; 
            background-color: #f5f5f5; 
            margin-top: 50px; 
        } 
        .counter-container { 
            background: #ffffff; 
            border: 2px solid #ccc; 
            padding: 20px; 
            display: inline-block; 
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); 
        } 
        h1 { 
            color: #333; 
        } 
        p { 

            font-size: 18px; 
            color: #555; 
        } 
    </style> 
</head> 
<body> 
    <div class="counter-container"> 
        <h1>Welcome to Our Website!</h1> 
        <p>You are visitor number: <strong><?php echo $visitorCount; ?></strong></p> 
    </div> 
</body> 
</html> 