<?php
// Require composer autoload
require_once __DIR__ . '/vendor/autoload.php';
// Create an instance of the class:
$mpdf = new \Mpdf\Mpdf();


//form validation

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $address = $_POST['address'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $img = $_FILES['img']['name'];
    $dir = "images/" . basename($img);
    move_uploaded_file($_FILES['img']['tmp_name'], $dir);

    $description = $_POST['description'];
    $experience = $_POST['experience'];
    $education = $_POST['education'];


}

$html = "
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>$name</title>
    <link href='style.css' rel='stylesheet'>
    <script defer src='js/script.js'></script>
</head>

<body contenteditable>
    <h1 class='naglowek'>Curriculum Vitae</h1>
    <h2>$name</h2>
   
    <h3 class='naglowek3'>Contact details</h3>
    <p class='condet'>Adress: $address<br>Phone: <strong>+ $phone</strong><br>E-mail:
        $email<br>
        Date of birth: $dob</p>
    <img width='200' height='200'
        src='images/$pic'
        alt='$name'>
        <hr>
    <h3>Description</h3>
    <p><i>$description</i></p>
    <hr>
    <h3>Experience</h3>
    <p>
    $experience
    </p>
    <hr>
    
    <p><span class='daty'>J A N U A R Y 2 0 1 9 — M A Y 2 0 2 2</span><br><br><em>● full warehouse service</em><br>●
        preparation and shipment of
        personalized orders to the Benelux countries<br>● reach truck and forklift maintenance<br>● loading and
        unloading of goods<br>● exploiting Crude Oil Distillation Products</p>

    <h3 class='naglowek3'>Education</h3>
    <p>$education</span></p>

</body>
</html>";


//getting the css files
$stylesheet = file_get_contents('style.css');

$mpdf->WriteHTML($stylesheet,\Mpdf\HTMLParserMode::HEADER_CSS);
$mpdf->WriteHTML($html,\Mpdf\HTMLParserMode::HTML_BODY);


// Output a PDF file directly to the browser
// $mpdf->Output();
//name of the file and, make it downloadable.
$mpdf->Output('cv.pdf', 'd');