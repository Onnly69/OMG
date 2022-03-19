
$(document).ready(()=>{
    $('#pc-form').submit((event)=>{
        event.preventDefault()
        let pcName = $('#pc-name').val()
        let pcDescr = $('#pc-descr').val()
        let pcCpu = $('#pc-cpu').val()
        let pcMother = $('#pc-motherboard').val()
        let pcCooler = $('#pc-cooler').val()
        let pcRam = $('#pc-ram').val()
        let pcStorage = $('#pc-storage').val()
        let pcGpu = $('#pc-gpu').val()
        let pcPsu = $('#pc-psu').val()
        let pcCase = $('#pc-case').val()
        let pcPrice = $('#pc-price').val()
        let pcQuant = $('#pc-quant').val()
        let pcImg = $('#pc-img').val()

        $('#pc-form').find('input').val('');


        console.log(pcName)
        $.ajax({
            url: "component.php",
            type: "POST",
            data:{
                pcName,
                pcDescr,
                pcCpu,
                pcMother,
                pcCooler,
                pcRam,
                pcStorage,
                pcGpu,
                pcPsu,
                pcCase,
                pcPrice,
                pcQuant,
                pcImg
            },
            succes:function(data){
               console.log(data)  
            }           
        })
    })

    $('#cpu-form').submit((event)=>{
        event.preventDefault()
        let cpuName = $('#cpu-name').val()
        let cpuDescr = $('#cpu-descr').val()
        let cpuMulti = $('#cpu-multi').val()
        let cpuFreq = $('#cpu-freq').val()
        let cpuStatus = $('#cpu-status').val()
        let cpuGraphic = $('#graphic-cpu').val()
        let cpuSocket = $('#cpu-socket').val()
        let cpuPrice = $('#cpu-price').val()
        let cpuCant = $('#pc-cant').val()
        let cpuImg = $('#cpu-img').val()

        $('#cpu-form').find('input').val('');

        // console.log(cpuName)
        $.ajax({
            url: "component.php",
            type: "POST",
            data:{
                cpuName,
                cpuDescr,
                cpuMulti,
                cpuFreq,
                cpuStatus,
                cpuGraphic,
                cpuSocket,
                cpuPrice,
                cpuCant,
                cpuImg
            },
            succes:function(data){
               console.log(data)  
            }           
        })
    })

        // let id = $('#mthr').val();

       
        
    $('#mother-form').submit((event)=>{
        event.preventDefault()
        let mthrName = $('#mthr-name').val()
        let mthrDescr = $('#mthr-descr').val()
        let mthrFactor = $('#mthr-form-factor').val()
        let mthrSocket = $('#mthr-socket').val()
        let mthrChipset = $('#mthr-chipset').val()
        let mthrTypeRam = $('#mthr-type-ram').val()
        let mthrNrSlotRam = $('#mthr-nr-slot-ram').val()
        let mthrMaxRam = $('#mthr-max-ram').val()
        let mthrSize = $('#mthr-size').val()
        let mthrPrice = $('#mthr-price').val()
        let mthrCant = $('#mthr-cant').val()
        let mthrImg = $('#mthr-img').val()

        $('#mother-form').find('input').val('');
 
             console.log(mthrName,mthrFactor,mthrSocket,mthrChipset,mthrTypeRam,mthrNrSlotRam,mthrMaxRam,mthrSize,mthrPrice,mthrCant,mthrImg)
        $.ajax({
            url: "component.php",
            type: "POST",
            data:{
                mthrName,
                mthrDescr,
                mthrFactor,
                mthrSocket,
                mthrChipset,
                mthrTypeRam,
                mthrNrSlotRam,
                mthrMaxRam,
                mthrSize,
                mthrPrice,
                mthrCant,
                mthrImg
            },
            succes:function(data){
               console.log(data)  
            }           
        })
    })
  
    $('#cooler-form').submit((event)=>{
        event.preventDefault()
        let clrName = $('#clr-name').val()
        let clrDescr = $('#clr-descr').val()
        let clrType = $('#clr-type').val()
        let clrTdp = $('#clr-tdp').val()
        let clrSocket = $('#clr-socket').val()
        let clrRpm = $('#clr-rpm').val()
        let clrSize = $('#clr-size').val()
        let clrColor = $('#clr-color').val()
        let clrWeight = $('#clr-weight').val()
        let clrPrice = $('#clr-price').val()
        let clrCant = $('#clr-cant').val()
        let clrImg = $('#clr-img').val()

        $('#cooler-form').find('input').val('');

            // console.log(mthrCant,mthrImg)
        $.ajax({
            url: "component.php",
            type: "POST",
            data:{
                clrName,
                clrDescr,
                clrType,
                clrTdp,
                clrSocket,
                clrRpm,
                clrSize,
                clrColor,
                clrWeight,
                clrPrice,
                clrCant,
                clrImg
            },
            succes:function(data){
               console.log(data)  
            }           
        })
    })
    
    $('#ram-form').submit((event)=>{
        event.preventDefault()
        let ramName = $('#ram-name').val()
        let ramDescr = $('#ram-descr').val()
        let ramType = $('#ram-type').val()
        let ramCapacity = $('#ram-capacity').val()
        let ramMemSpeed = $('#ram-mem-speed').val()
        let ramFormFactor = $('#ram-form-factor').val()
        let ramPrice = $('#ram-price').val()
        let ramCant = $('#ram-cant').val()
        let ramImg = $('#ram-img').val()
        
        $('#ram-form').find('input').val('');

            // console.log(mthrCant,mthrImg)
        $.ajax({
            url: "component.php",
            type: "POST",
            data:{
                ramName,
                ramDescr,
                ramType,
                ramCapacity,
                ramMemSpeed,
                ramFormFactor,
                ramPrice,
                ramCant,
                ramImg
            },
            succes:function(data){
               console.log(data)  
            }           
        })
    })

    $('#storage-form').submit((event)=>{
        event.preventDefault()
        let stgName = $('#stg-name').val()
        let stgDescr = $('#stg-descr').val()
        let stgCapacity = $('#stg-capacity').val()
        let stgType = $('#stg-type').val()
        let stgFormFactor = $('#stg-form-factor').val()
        let stgRspeed = $('#stg-rspeed').val()
        let stgWspeed = $('#stg-wspeed').val()
        let stgPrice = $('#stg-price').val()
        let stgCant = $('#stg-cant').val()
        let stgImg = $('#stg-img').val()

        $('#storage-form').find('input').val('');

        console.log(stgName,stgDescr,stgCapacity,stgType,stgFormFactor,stgRspeed,stgWspeed,stgPrice,stgCant,stgImg)
        $.ajax({
            url: "component.php",
            type: "POST",
            data:{
                stgName,
                stgDescr,
                stgCapacity,
                stgType,
                stgFormFactor,
                stgRspeed,
                stgWspeed,
                stgPrice,
                stgCant,
                stgImg
            },
            succes:function(data){
               console.log(data)  
            }           
        })
    })
   
    $('#gpu-form').submit((event)=>{
        event.preventDefault()
        let gpuName = $('#gpu-name').val()
        let gpuDescr = $('#gpu-descr').val()
        let gpuMem = $('#gpu-mem').val()
        let gpuMemType = $('#gpu-mem-type').val()
        let gpuClock = $('#gpu-clock').val()
        let gpuSize = $('#gpu-size').val()
        let gpuPrice = $('#gpu-price').val()
        let gpuCant = $('#gpu-cant').val()
        let gpuImg = $('#gpu-img').val()    

        $('#gpu-form').find('input').val('');

        // console.log(mthrCant,mthrImg)
        $.ajax({
            url: "component.php",
            type: "POST",
            data:{
                gpuName,
                gpuDescr,
                gpuMem,
                gpuMemType,
                gpuClock,
                gpuSize,
                gpuPrice,
                gpuCant,
                gpuImg
            },
            succes:function(data){
               console.log(data)  
            }           
        })
    })

    $('#psu-form').submit((event)=>{
        event.preventDefault()
        let psuName = $('#psu-name').val()
        let psuDescr = $('#psu-descr').val()
        let psuPower = $('#psu-power').val()
        let psuFan = $('#psu-fan').val()
        let psuRpm = $('#psu-rpm').val()
        let psuType = $('#psu-type').val()
        let psuPrice = $('#psu-price').val()
        let psuCant = $('#psu-cant').val()
        let psuImg = $('#psu-img').val()

        $('#psu-form').find('input').val('');

        // console.log(mthrCant,mthrImg)
        $.ajax({
            url: "component.php",
            type: "POST",
            data:{
                psuName,
                psuDescr,
                psuPower,
                psuFan,
                psuRpm,
                psuType,
                psuPrice,
                psuCant,
                psuImg
            },
            succes:function(data){
               console.log(data)  
            }           
        })
    })

    $('#case-form').submit((event)=>{
        event.preventDefault()
        let caseName = $('#case-name').val()
        let caseDescr = $('#case-descr').val()
        let caseFormFactor = $('#case-form-factor').val()
        let caseMaterial = $('#case-material').val()
        let caseSize = $('#case-size').val()
        let caseFan = $('#case-fan').val()
        let caseCoolHeight = $('#case-cooler-height').val()
        let casePsu = $('#case-psu').val()
        let caseColor = $('#case-color').val()
        let casePrice = $('#case-price').val()
        let caseCant = $('#case-cant').val()
        let caseImg = $('#case-img').val()
      

        $('#case-form').find('input').val('');

         console.log(caseName,caseDescr,caseFormFactor,caseMaterial,caseSize,caseFan,caseCoolHeight,casePsu,caseColor,casePrice,caseCant,caseImg)
        $.ajax({
            url: "component.php",
            type: "POST",
            data:{
                caseName,
                caseDescr,
                caseFormFactor,
                caseMaterial,
                caseSize,
                caseFan,
                caseCoolHeight,
                casePsu,
                caseColor,
                casePrice,
                caseCant,
                caseImg
            },
            succes:function(data){
               console.log(data)  
            }           
        })
    })

    $('#monitor-form').submit((event)=>{
        event.preventDefault()
        let mntName = $('#mnt-name').val()
        let mntDescr = $('#mnt-descr').val()
        let mntResolution = $('#mnt-resolution').val()
        let mntFreq = $('#mnt-freq').val()
        let mntMatrix = $('#mnt-matrix').val()
        let mntMs = $('#mnt-ms').val()
        let mntInput = $('#mnt-input').val()
        let mntPrice = $('#mnt-price').val()
        let mntCant = $('#mnt-cant').val()
        let mntImg = $('#mnt-img').val()

        $('#monitor-form').find('input').val('');

        // console.log(mthrCant,mthrImg)
        $.ajax({
            url: "component.php",
            type: "POST",
            data:{
                mntName,
                mntDescr,
                mntResolution,
                mntFreq,
                mntMatrix,
                mntMs,
                mntInput,
                mntPrice,
                mntCant,
                mntImg
            },
            succes:function(data){
               console.log(data)  
            }           
        })
    })

    $('#keyboard-form').submit((event)=>{
        event.preventDefault()
        let keybName = $('#keyb-name').val()
        let keybDescr = $('#keyb-descr').val()
        let keybType = $('#keyb-type').val()
        let keybSize = $('#keyb-size').val()
        let keybRgb = $('#keyb-rgb').val()
        let keybPrice = $('#keyb-price').val()
        let keybCant = $('#keyb-cant').val()
        let keybImg = $('#keyb-img').val()

        $('#keyboard-form').find('input').val('');

         console.log(keybName,keybDescr,keybType,keybSize,keybRgb,keybPrice,keybCant,keybImg)
        $.ajax({
            url: "component.php",
            type: "POST",
            data:{
                keybName,
                keybDescr,
                keybType,
                keybSize,
                keybRgb,
                keybPrice,
                keybCant,
                keybImg         
            },
            succes:function(data){
               console.log(data)  
            }           
        })
    })

    $('#mouse-form').submit((event)=>{
        event.preventDefault()
        let msName = $('#ms-name').val()
        let msDescr = $('#ms-descr').val()
        let msDesign = $('#ms-design').val()
        let msSensor = $('#ms-sensor').val()
        let msSensResol = $('#ms-sens-resol').val()
        let msConnect = $('#ms-connect').val()
        let msWire = $('#ms-wire').val()
        let msWeight = $('#ms-weight').val()
        let msPrice= $('#ms-price').val()
        let msCant = $('#ms-cant').val()
        let msImg = $('#ms-img').val()

        $('#mouse-form').find('input').val('');

        // console.log(mthrCant,mthrImg)
        $.ajax({
            url: "component.php",
            type: "POST",
            data:{
                msName,
                msDescr,
                msDesign,
                msSensor,
                msSensResol,
                msConnect,
                msWire,
                msWeight, 
                msPrice,
                msCant,
                msImg
            },
            succes:function(data){
               console.log(data)  
            }           
        })
    })

    $('#mouse-pad-form').submit((event)=>{
        event.preventDefault()
        let mspName = $('#msp-name').val()
        let mspDescr = $('#msp-descr').val()
        let mspMaterial = $('#msp-material').val()
        let mspSize = $('#msp-size').val()
        let mspRgb = $('#msp-rgb').val()
        let mspPrice = $('#msp-price').val()
        let mspCant = $('#msp-cant').val()
        let mspImg = $('#msp-img').val()


        $('#mouse-pad-form').find('input').val('');

        // console.log(mspName,mspDescr,mspMaterial,mspSize,mspRgb,mspPrice,mspCant,mspImg)
        $.ajax({
            url: "component.php",
            type: "POST",
            data:{
                mspName,
                mspDescr,
                mspMaterial,
                mspSize,
                mspRgb,
                mspPrice,
                mspCant, 
                mspImg
            },
            succes:function(data){
               console.log(data)  
            }           
        })
    })
    
    $('#headset-form').submit((event)=>{
        event.preventDefault()
        let hsetName = $('#hset-name').val()
        let hsetDescr = $('#hset-descr').val()
        let hsetImpendance = $('#hset-impendance').val()
        let hsetSensivity = $('#hset-sensivity').val()
        let hsetMicro = $('#hset-micro').val()
        let hsetConnect = $('#hset-connect').val()
        let hsetCable = $('#hset-cable').val()
        let hsetWeight = $('#hset-weight').val()
        let hsetPrice = $('#hset-price').val()
        let hsetCant= $('#hset-cant').val()
        let hsetImg = $('#hset-img').val()

        $('#headset-form').find('input').val('');
        
        console.log("zdr")
        console.log(hsetName,hsetDescr,hsetImpendance,hsetSensivity,hsetMicro,hsetConnect,hsetCable,hsetWeight,hsetPrice,hsetCant,hsetImg)
        
        $.ajax({
            url: "component.php",
            type: "POST",
            data:{
                hsetName,
                hsetDescr,
                hsetImpendance,
                hsetSensivity,
                hsetMicro,
                hsetConnect,
                hsetCable, 
                hsetWeight,
                hsetPrice,
                hsetCant,
                hsetImg
            },
            succes:function(data){
               console.log(data)  
            }           
        })
    })

    $('#armchair-form').submit((event)=>{
        event.preventDefault()
        let armName = $('#arm-name').val()
        let armDescr = $('#arm-descr').val()
        let armMaxWeight = $('#arm-max-weight').val()
        let armColor = $('#arm-color').val()
        let armWeight = $('#arm-weight').val()
        let armMaterial = $('#arm-material').val()
        let armPrice = $('#arm-price').val()
        let armCant = $('#arm-cant').val()
        let armImg = $('#arm-img').val()
   

        $('#armchair-form').find('input').val('');
        // console.log("zdr")
        //  console.log(armName,armDescr)
        $.ajax({
            url: "component.php",
            type: "POST",
            data:{
                armName,
                armDescr,
                armMaxWeight,
                armColor,
                armWeight,
                armMaterial,
                armPrice, 
                armCant,
                armImg
            },
            succes:function(data){
               console.log(data)  
            }           
        })
    })
})    
