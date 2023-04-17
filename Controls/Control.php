<?php
require("./Models/Connections.php");

// random bird (random RGB Color)
function randomBird()
{
    $R = rand(0, 255);
    $G = rand(0, 255);
    $B = rand(0, 255);
    return array($R, $G, $B);
}

//add bird with random color
function addBird()
{
    //connect db
    $mysqli = connect();
    //random bird
    $bird = randomBird();

    // TEST BIRD
    // $bird[0] = 5;
    // $bird[1] = 160;
    // $bird[2] = 215;

    //check price of bird
    $price = getPrice($bird);

    //insert bird
    $stmt = $mysqli->prepare("INSERT INTO birdbreedrgb(red, green, blue, price) VALUES (?, ?, ?, ?)");
    $stmt->bind_param(
        "ssss",
        $bird[0],
        $bird[1],
        $bird[2],
        $price
    );

    $stmt->execute();
}

function sellBird($id)
{
    //connect db
    $mysqli = connect();
    $stmt = $mysqli->prepare("UPDATE birdbreedrgb SET statussold = 0 WHERE birdid = ?");
    $stmt->bind_param(
        "s",
        $id
    );

    //execute PDO 

    $stmt->execute();
}

function getPrice($color)
{
    //Lucky color of RGB number
    $bestRGB = array(0, 170, 230);


    //check price from *requirement 
    if (abs($color[0] - $bestRGB[0]) < 20 && abs($color[1] - $bestRGB[1]) < 20 && abs($color[2] - $bestRGB[2]) < 20) {
        $diff = abs($color[0] - $bestRGB[0]) + abs($color[1] - $bestRGB[1]) + abs($color[2] - $bestRGB[2]);
        if (8 - ($diff / 10) < 0) return 0;
        else return 8 - $diff / 10;
    } else return 0;
}

//get all bird
function getBird()
{
    $mysqli = connect();
    $stmt = $mysqli->prepare("SELECT * from birdbreedrgb");
    $stmt->execute();
    $result = $stmt->get_result();
    return $result;
}

//get amount sold bird 
function getSumSold()
{
    $mysqli = connect();
    $stmt = $mysqli->prepare("SELECT SUM(price) AS S from birdbreedrgb WHERE statussold = 0");
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    return $row["S"];
}

//get amount bird not sold
function getCount()
{
    $mysqli = connect();
    $stmt = $mysqli->prepare("SELECT count(birdid) AS c from birdbreedrgb WHERE statussold = 1");
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    return $row["c"];
}
