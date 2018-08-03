<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

// include database and object files
include_once '../core.php';
include_once 'location.php';

$database = new Database();
$db = $database->getConnection();
$location = new Location($db);

$request_method = $_SERVER['REQUEST_METHOD'];
$results = array();
switch ($request_method) {
    case 'GET':
    $stmt = $location->getCities();

    if (is_null($stmt)) {
      header("Internal Server Error", true, 500);
      $results["error"] = "Missing province parameter";
    } else {
      while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
          extract($row);
          array_push($results, $city_name);
      }
      if (count($results) < 1) {
           header("Not Found", true, 404);
           $results["error"] = "No cities found for province '".$_REQUEST["province"]."'";
      }
    }
        break;
    default:
      header("Method Not Allowed", true, 405);
      $results["error"] = "'".$request_method."' is not allowed on this endpoint";
}
print_r(json_encode($results));