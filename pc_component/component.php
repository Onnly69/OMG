<?php

// print_r($_POST);
// echo $_POST;

include "../dbh.php";

$cName = $_POST['pcName'];
$cDescr = $_POST['pcDescr'];
$cCpu = $_POST['pcCpu'];
$cMother = $_POST['pcMother'];
$cCooler = $_POST['pcCooler'];
$cRam = $_POST['pcRam'];
$cStorage = $_POST['pcStorage'];
$cGpu = $_POST['pcGpu'];
$cPsu = $_POST['pcPsu'];
$cCase = $_POST['pcCase'];
$cPrice = $_POST['pcPrice'];
$cQuant = $_POST['pcQuant'];
$cImg = $_POST['pcImg'];

$cpuName = $_POST['cpuName'];
$cpuDescr = $_POST['cpuDescr'];
$cpuMulti = $_POST['cpuMulti'];
$cpuFreq = $_POST['cpuFreq'];
$cpuStatus = $_POST['cpuStatus'];
$cpuGraphic = $_POST['cpuGraphic'];
$cpuSocket = $_POST['cpuSocket'];
$cpuPrice = $_POST['cpuPrice'];
$cpuCant = $_POST['cpuCant'];
$cpuImg = $_POST['cpuImg'];

$mthrName = $_POST['mthrName'];
$mthrDescr = $_POST['mthrDescr'];
$mthrFactor = $_POST['mthrFactor'];
$mthrSocket = $_POST['mthrSocket'];
$mthrChipset = $_POST['mthrChipset'];
$mthrTypeRam = $_POST['mthrTypeRam'];
$mthrNrSlotRam = $_POST['mthrNrSlotRam'];
$mthrMaxRam = $_POST['mthrMaxRam'];
$mthrSize= $_POST['mthrSize'];
$mthrPrice = $_POST['mthrPrice'];
$mthrCant = $_POST['mthrCant'];
$mthrImg = $_POST['mthrImg'];


$clrName = $_POST['clrName'];
$clrDescr = $_POST['clrDescr'];
$clrType = $_POST['clrType'];
$clrTdp = $_POST['clrTdp'];
$clrSocket = $_POST['clrSocket'];
$clrRpm = $_POST['clrRpm'];
$clrSize = $_POST['clrSize'];
$clrColor = $_POST['clrColor'];
$clrWeight = $_POST['clrWeight'];
$clrPrice = $_POST['clrPrice'];
$clrCant = $_POST['clrCant'];
$clrImg = $_POST['clrImg'];


$ramName = $_POST['ramName'];
$ramDescr = $_POST['ramDescr'];
$ramType = $_POST['ramType'];
$ramCapacity = $_POST['ramCapacity'];
$ramMemSpeed = $_POST['ramMemSpeed'];
$ramFormFactor = $_POST['ramFormFactor'];
$ramPrice = $_POST['ramPrice'];
$ramCant = $_POST['ramCant'];
$ramImg = $_POST['ramImg'];


$stgName = $_POST['stgName'];
$stgDescr = $_POST['stgDescr'];
$stgCapacity = $_POST['stgCapacity'];
$stgType = $_POST['stgType'];
$stgFormFactor = $_POST['stgFormFactor'];
$stgRspeed = $_POST['stgRspeed'];
$stgWspeed = $_POST['stgWspeed'];
$stgPrice = $_POST['stgPrice'];
$stgCant = $_POST['stgCant'];
$stgImg = $_POST['stgImg'];


$gpuName = $_POST['gpuName'];
$gpuDescr = $_POST['gpuDescr'];
$gpuMem = $_POST['gpuMem'];
$gpuMemType = $_POST['gpuMemType'];
$gpuClock = $_POST['gpuClock'];
$gpuSize = $_POST['gpuSize'];
$gpuPrice = $_POST['gpuPrice'];
$gpuCant = $_POST['gpuCant'];
$gpuImg = $_POST['gpuImg'];


$psuName = $_POST['psuName'];
$psuDescr = $_POST['psuDescr'];
$psuPower = $_POST['psuPower'];
$psuFan = $_POST['psuFan'];
$psuRpm = $_POST['psuRpm'];
$psuType = $_POST['psuType'];
$psuPrice = $_POST['psuPrice'];
$psuCant = $_POST['psuCant'];
$psuImg = $_POST['psuImg'];


$caseName = $_POST['caseName'];
$caseDescr = $_POST['caseDescr'];
$caseFormFactor = $_POST['caseFormFactor'];
$caseMaterial = $_POST['caseMaterial'];
$caseSize = $_POST['caseSize'];
$caseFan = $_POST['caseFan'];
$caseCoolHeight = $_POST['caseCoolHeight'];
$casePsu = $_POST['casePsu'];
$caseColor = $_POST['caseColor'];
$casePrice = $_POST['casePrice'];
$caseCant = $_POST['caseCant'];
$caseImg = $_POST['caseImg'];


$mntName = $_POST['mntName'];
$mntDescr = $_POST['mntDescr'];
$mntResolution = $_POST['mntResolution'];
$mntFreq = $_POST['mntFreq'];
$mntMatrix = $_POST['mntMatrix'];
$mntMs = $_POST['mntMs'];
$mntInput = $_POST['mntInput'];
$mntPrice = $_POST['mntPrice'];
$mntCant = $_POST['mntCant'];
$mntImg = $_POST['mntImg'];


$keybName = $_POST['keybName'];
$keybDescr = $_POST['keybDescr'];
$keybType = $_POST['keybType'];
$keybSize = $_POST['keybSize'];
$keybRgb = $_POST['keybRgb'];
$keybPrice = $_POST['keybPrice'];
$keybCant = $_POST['keybCant'];
$keybImg = $_POST['keybImg'];


$msName = $_POST['msName'];
$msDescr = $_POST['msDescr'];
$msDesign = $_POST['msDesign'];
$msSensor = $_POST['msSensor'];
$msSensResol = $_POST['msSensResol'];
$msConnect = $_POST['msConnect'];
$msWire = $_POST['msWire'];
$msWeight = $_POST['msWeight'];
$msPrice = $_POST['msPrice'];
$msCant = $_POST['msCant'];
$msImg = $_POST['msImg'];


$mspName = $_POST['mspName'];
$mspDescr = $_POST['mspDescr'];
$mspMaterial = $_POST['mspMaterial'];
$mspSize = $_POST['mspSize'];
$mspRgb = $_POST['mspRgb'];
$mspPrice = $_POST['mspPrice'];
$mspCant = $_POST['mspCant'];
$mspImg = $_POST['mspImg'];


$hsetName = $_POST['hsetName'];
$hsetDescr = $_POST['hsetDescr'];
$hsetImpendance = $_POST['hsetImpendance'];
$hsetSensivity = $_POST['hsetSensivity'];
$hsetMicro = $_POST['hsetMicro'];
$hsetConnect = $_POST['hsetConnect'];
$hsetCable = $_POST['hsetCable'];
$hsetWeight = $_POST['hsetWeight'];
$hsetPrice = $_POST['hsetPrice'];
$hsetCant = $_POST['hsetCant'];
$hsetImg = $_POST['hsetImg'];


$armName = $_POST['armName'];
$armDescr = $_POST['armDescr'];
$armMaxWeight = $_POST['armMaxWeight'];
$armColor = $_POST['armColor'];
$armWeight = $_POST['armWeight'];
$armMaterial = $_POST['armMaterial'];
$armPrice = $_POST['armPrice'];
$armCant = $_POST['armCant'];
$armImg = $_POST['armImg'];


// var_dump($cName);

// echo $cName,$cDescr,$cCpu,$cMother;

// $pcSql = "INSERT INTO pc(name, description, cpu, mother, cooler, ram, storage, gpu, psu, pc_case, price, quantity, img)
//         VALUES('{$cName}', '{$cDescr}', '{$cCpu}', '{$cMother}', '{$cCooler}', '{$cRam}', '{$cStorage}', '{$cGpu}', '{$cPsu}', '{$cCase}', '{$cPrice}', '{$cQuant}', '{$cImg}')";
//     mysqli_query($conn, $pcSql);

// $cpuSql = " INSERT INTO cpu(name,description,multi,freq,status,graphic_cpu,socket,price,quantity,img)
//             VALUES('{$cpuName}','{$cpuDescr}','{$cpuMulti}','{$cpuFreq}','{$cpuStatus}','{$cpuGraphic}','{$cpuSocket}','{$cpuPrice}','{$cpuCant}','{$cpuImg}')";
//             mysqli_query($conn, $cpuSql);

// $motherSql = " INSERT INTO mother(name,description,form_factor,socket,chipset,type_ram,nr_slot_ram,max_ram,size,price,quantity,img)
//             VALUES('{$mthrName}','{$mthrDescr}','{$mthrFactor}','{$mthrSocket}','{$mthrChipset}','{$mthrTypeRam}','{$mthrNrSlotRam}','{$mthrMaxRam}','{$mthrSize}','{$mthrPrice}','{$mthrCant}','{$mthrImg}')";
//             mysqli_query($conn, $motherSql); 
           
// $clrSql = " INSERT INTO cooler(name,description,type,tdp,socket,rpm,size,color,weight,price,quantity,img)
//             VALUES('{$clrName}','{$clrDescr}','{$clrType}','{$clrTdp}','{$clrSocket}','{$clrRpm}','{$clrSize}','{$clrColor}','{$clrWeight}','{$clrPrice}','{$clrCant}','{$clrImg}')";
//             mysqli_query($conn, $clrSql);

// $ramSql = " INSERT INTO ram(name,description,ram_type,capacity,mem_speed,form_factor,price,quantity,img)
//             VALUES('{$ramName}','{$ramDescr}','{$ramType}','{$ramCapacity}','{$ramMemSpeed}','{$ramFormFactor}','{$ramPrice}','{$ramCant}','{$ramImg}')";
//             mysqli_query($conn, $ramSql);

// $stgSql = " INSERT INTO storage(name,description,capacity,type,form_factor,read_speed,write_speed,price,quantity,img)
//             VALUES('{$stgName}','{$stgDescr}','{$stgCapacity}','{$stgType}','{$stgFormFactor}','{$stgRspeed}','{$stgWspeed}','{$stgPrice}','{$stgCant}','{$stgImg}')";
//             mysqli_query($conn, $stgSql);

// $gpuSql = " INSERT INTO videocard(name,description,memory,mem_type,mem_clock,size,price,quantity,img)
//             VALUES('{$gpuName}','{$gpuDescr}','{$gpuMem}','{$gpuMemType}','{$gpuClock}','{$gpuSize}','{$gpuPrice}','{$gpuCant}','{$gpuImg}')";
//             mysqli_query($conn, $gpuSql);

// $psuSql = " INSERT INTO psu(name,description,power,psu_fan,rpm,type,price,quantity,img)
//             VALUES('{$psuName}','{$psuDescr}','{$psuPower}','{$psuFan}','{$psuRpm}','{$psuType}','{$psuPrice}','{$psuCant}','{$psuImg}')";
//             mysqli_query($conn, $psuSql);

// $caseSql = " INSERT INTO cases(name,description,form_factor,material,size,fan,cooler_height,psu,color,price,quantity,img)
//             VALUES('{$caseName}','{$caseDescr}','{$caseFormFactor}','{$caseMaterial}','{$caseSize}','{$caseFan}','{$caseCoolHeight}','{$casePsu}','{$caseColor}','{$casePrice}','{$caseCant}','{$caseImg}')";
//             mysqli_query($conn, $caseSql);

// $mntSql = " INSERT INTO monitor(name,description,resolution,freq,matrix_type,responsive_time,inputs,price,quantity,img)
//             VALUES('{$mntName}','{$mntDescr}','{$mntResolution}','{$mntFreq}','{$mntMatrix}','{$mntMs}','{$mntInput}','{$mntPrice}','{$mntCant}','{$mntImg}')";
//             mysqli_query($conn, $mntSql);

// $keybSql = " INSERT INTO keyboard(name,description,type,size,rgb,price,quantity,img)
//             VALUES('{$keybName}','{$keybDescr}','{$keybType}','{$keybSize}','{$keybRgb}','{$keybPrice}','{$keybCant}','{$keybImg}')";
//             mysqli_query($conn, $keybSql);

// $msSql = " INSERT INTO mouse(name,description,design,sensor,sens_dpi,conn_interface,wire_length,weight,price,quantity,img)
//             VALUES('{$msName}','{$msDescr}','{$msDesign}','{$msSensor}','{$msSensResol}','{$msConnect}','{$msWire}','{$msWeight}','{$msPrice}','{$msCant}','{$msImg}')";
//             mysqli_query($conn, $msSql);

// $mspSql = " INSERT INTO mouse_pad(name,description,material,size,rgb,price,quantity,img)
//             VALUES('{$mspName}','{$mspDescr}','{$mspMaterial}','{$mspSize}','{$mspRgb}','{$mspPrice}','{$mspCant}','{$mspImg}')";
//             mysqli_query($conn, $mspSql);

$hsetSql = " INSERT INTO headphones(name,description,impendance,sensivity,microphone,connector,cable_weight,weight,price,quantity,img)
            VALUES('{$hsetName}','{$hsetDescr}','{$hsetImpendance}','{$hsetSensivity}','{$hsetMicro}','{$hsetConnect}','{$hsetCable}','{$hsetWeight}','{$hsetPrice}','{$hsetCant}','{$cpuImg}')";
            mysqli_query($conn, $hsetSql);

// $armSql = " INSERT INTO armchair(name,description,max_weight,color,weight,material,price,quantity,img)
//             VALUES('{$armName}','{$armDescr}','{$armMaxWeight}','{$armColor}','{$armWeight}','{$armMaterial}','{$armPrice}','{$armCant}','{$armImg}')";
//             mysqli_query($conn, $armSql);

?>