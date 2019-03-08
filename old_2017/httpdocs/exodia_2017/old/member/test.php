<?php
include_once 'c.php';
$data = json_encode(array( "eventId" => 534 ));
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://api.thecollegefever.com/event-service/v1/events/geteventdetails");
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER,
array('Content-Type: application/json', 'Content-Length: ' . strlen($data)));
curl_setopt($ch, CURLOPT_TIMEOUT, 5);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
$output = curl_exec($ch);
$result = json_decode($output);

for($i=0;$i<count($result->ticketConfigs);$i++){
if(mysql_num_rows(mysql_query("SELECT * FROM events WHERE programId='".$result->ticketConfigs[$i]->id."'"))==0){
if($result->ticketConfigs[$i]->programName != "Hospitality"&&$result->ticketConfigs[$i]->programName != "EXODIA HOODIES FOR IIT MANDI")
echo "<form action='a.php?r=create_event' method='post'>
    <table class='table'>
        <tr><td>Event Name: </td><td><input type='text' name='name' placeholder='Event Name' value='".$result->ticketConfigs[$i]->programName."' required/></td><td></td></tr>
        <tr><td>Program ID: </td><td><input type='text' name='programId' placeholder='programId' value='".$result->ticketConfigs[$i]->id."' required/></td><td></td></tr>
        <tr><td>Program Type: </td><td><input type='text' name='programType' placeholder='programType' value='".$result->ticketConfigs[$i]->eventTypeId."' required/></td><td></td></tr>
        <tr><td>Description: </td><td><input type='text' name='description' placeholder='Description'/></td><td></td></tr>
        <tr><td>Type: </td>
            <td>
                <select name='type' style='width:175px;color: black' required>
                    <option value='Technical'>Technical</option>
                    <option value='Cultural'>Cultural</option>
                    <option value='Literary'>Literary</option>
                    <option value='Other'>Other</option>
                </select>
            </td><td></td></tr>
        <tr><td>No. of max team members: </td><td><input type='text' name='count' placeholder='' required/></td><td></td></tr>
        <tr><td>Fee: </td><td><input type='number' name='amt' placeholder='' value='".$result->ticketConfigs[$i]->price."' required/></td><td></td></tr>
        <tr><td></td><td><input class='btn bg-primary' type='submit' name='submit' value='Submit'/></td><td></td></tr>
    </table>
    </form>";
    }
}

?>