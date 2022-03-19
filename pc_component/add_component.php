<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>  
    <link rel="stylesheet" href="../style.css">
    
    <title>OMG</title>
</head>
    <header>
    <nav id="nav-bar">
            <div class="links">
                <a href="../index.php"><h1>OnlyMasterGaming</h1></a>
            <ul id="ul-menu">
                <ul> 
                                    
                <li><a href="../pc_store/index_pc.php">Buy a PC</a></li>
                    <li><a href="index_component.php">Buy accessories</a></li>
                    <li><a href="../pc_constructor/pc_constructor.php">Build a PC</a></li>
                    
                    <li><a href="add_component.php"><img src="https://cdn-icons-png.flaticon.com/512/992/992651.png" alt="Add"></a></li> 
                    <li><a href="../login_system/profile.php"><img src="https://cdn-icons-png.flaticon.com/512/1077/1077114.png" alt="User"></a></li>
                    <li><a href="../cart/cart.php"><img src="https://uxwing.com/wp-content/themes/uxwing/download/19-e-commerce-currency-shopping/shopping-cart.png" alt="Cart"></a></li>       
                              
                </ul>
            </ul>
            </div>
            <hr>
        </nav>
    </header>
<body>
    <h2>Add a product</h2>
        <main>
            <!-- <div class="select-cat">
                <select id="list" onchange="getSelectedCategory()">
                    <option value="0">Select a product</option>
                    <option value="1">Add pc</option>
                    <option value="2">Add cpu</option>
                    <option value="3">Add motherboard</option>
                    <option value="4">Add cooler</option>
                    <option value="5">Add ram</option>
                    <option value="6">Add storage</option>
                    <option value="7">Add gpu</option>
                    <option value="8">Add psu</option>
                    <option value="9">Add case</option>
                    <option value="10">Add monitor</option>
                    <option value="11">Add keyboard</option>
                    <option value="12">Add mouse</option>
                    <option value="13">Add mousepad</option>
                    <option value="14">Add headset</option>
                    <option value="15">Add armchair</option>   
                </select>
            </div> -->
<div class="components">
             <div class="pc-add"><h2>Add PC</h2>
            
            <form id="pc-form">
            <h4>PC name</h4>    
                <input type="text" id="pc-name" placeholder="Ex: OMG GAMING">
            <br>
            <h4>Description</h4>
                <input type="text" id="pc-descr">
            <br>
            <h4>CPU</h4>
                <input type="text" id="pc-cpu" placeholder="Ex: i5 9400f">
            <br>
            <h4>Motherboard</h4>
                <input type="text" id="pc-motherboard" placeholder="Ex: Asus Prime z370">
            <br>
            <h4>Cooler</h4>
                <input type="text" id="pc-cooler" placeholder="Ex: Corsair h100i">
            <br>
            <h4>RAM</h4>
                <input type="text" id="pc-ram" placeholder="Ex: Corsair Vengeance 2x8GB">
            <br>
            <h4>Storage</h4>
                <input type="text" id="pc-storage" placeholder="Ex: Seagate Barracuda 1TB">
            <br>
            <h4>Graphic Card (GPU)</h4>
                <input type="text" id="pc-gpu" placeholder="Ex: Zotac gtc 1060 6gb AMP Edition">
            <br>
            <h4>Power Supply (PSU)</h4>
                <input type="text" id="pc-psu" placeholder="Ex: Deep Cool DA-600">
            <br>
            <h4>Case</h4>
                <input type="text" id="pc-case" placeholder="Ex: Gamemax g561">
            <br>
            <h4>Price</h4>
                <input type="number" id="pc-price" placeholder="Ex: 800"><span>EUR</span>
            <br>
            <h4>Quantity</h4>
                <input type="number" id="pc-quant" placeholder="Ex: 1">
            <br>
            <h4>Image</h4>
                <input type="text" id="pc-img" placeholder="Image url">
            <br>
            <input id="submit" type="submit" value="Add PC">
    </form>
        </div> 


         <div class="cpu-add"><h2>Add Processor (CPU)</h2>
            
            <form id="cpu-form">
            <h4>CPU name</h4>    
                <input type="text" id="cpu-name" placeholder="Ex: i5 9400f">
            <br>
            <h4>Description</h4>
                <input type="text" id="cpu-descr">
            <br>
            <h4>Cores and Threads</h4>
                <input type="text" id="cpu-multi" placeholder="Ex: 6 cores 6 threads">
            <br>
            <h4>Frequence</h4>
                <input type="text" id="cpu-freq" placeholder="Ex: 2.9 stock, 4.1 turbo boost"><span> GHz</span>
            <br>
            <h4>CPU status</h4>
                <input type="text" id="cpu-status" placeholder="Ex: locked">
            <br>
            <h4>Graphic CPU</h4>
                <input type="text" id="graphic-cpu" placeholder="Ex: UHD Graphics 630">
            <br>
            <h4>Socket</h4>
                <input type="text" id="cpu-socket" placeholder="Ex: 1151 v2">
            <br>
            <h4>Price</h4>
                <input type="number" id="cpu-price" placeholder="Ex: 150"><span> EUR</span>
            <br>
            <h4>Quantity</h4>
                <input type="number" id="pc-cant" placeholder="Ex: 1">
            <br>
            <h4>Image</h4>
                <input type="text" id="cpu-img" placeholder="Image url">
            <br>
            <input id="submit" type="submit" value="Add CPU">
    </form>
        </div>

        <div class="motherboard-add"><h2>Add Motherboard</h2>
            
            <form id="mother-form">
            <h4>Motherboard name</h4>    
                <input type="text" id="mthr-name" placeholder="Ex: Asus Prime z370">
            <br>
            <h4>Description</h4>
                <input type="text" id="mthr-descr">
            <br>
            <h4>Form Factor</h4>
                <input type="text" id="mthr-form-factor" placeholder="Ex: ATX">
            <br>
            <h4>Socket</h4>
                <input type="text" id="mthr-socket" placeholder="Ex: LGA 1151">
            <br>
            <h4>Chipset</h4>
                <input type="text" id="mthr-chipset" placeholder="Ex: z370">
            <br>
            <h4>Type of Ram</h4>
                <input type="text" id="mthr-type-ram" placeholder="Ex: DDR4">
            <br>
            <h4>Nr slot for RAM</h4>
                <input type="number" id="mthr-nr-slot-ram" placeholder="Ex: 4">
            <br>
            <h4>Max RAM capacity </h4>
                <input type="number" id="mthr-max-ram" placeholder="Ex: 128"><span> GB</span>
            <br>
            <h4>Size</h4>
                <input type="text" id="mthr-size" placeholder="Ex: 226 x 305"><span> mm</span>
            <br>
            <h4>Price</h4>
                <input type="number" id="mthr-price" placeholder="Ex: 100"><span> EUR</span>
            <br>
            <h4>Quantity</h4>
                <input type="number" id="mthr-cant" placeholder="Ex: 4">
            <br>
            <h4>Image</h4>
                <input type="text" id="mthr-img" placeholder="Image URL">
            <br>
            <input id="submit" type="submit" value="Add Motherboard">
    </form>     
        </div> 

        <div class="cooler-add"><h2>Add Cooler</h2>
            
            <form id="cooler-form">
            <h4>Cooler name</h4>    
                <input type="text" id="clr-name" placeholder="Ex: Corsair h100i 240">
            <br>
            <h4>Description</h4>
                <input type="text" id="clr-descr">
            <br>
            <h4>Type</h4>
                <input type="text" id="clr-type" placeholder="Ex: water">
            <br>
            <h4>TDP</h4>
                <input type="number" id="clr-tdp" placeholder="Ex: 200"><span> W</span>
            <br>
            <h4>Compatible Socket</h4>
                <input type="text" id="clr-socket" placeholder="Ex: 2011x, 115x ,AM3, AM4">
            <br>
            <h4>RPM</h4>
                <input type="number" id="clr-rpm" placeholder="Ex: 2400"><span> rpm</span>
            <br>
            <h4>Size (for Watercooler only radiator)</h4>
                <input type="text" id="clr-size" placeholder="Ex: 120 x 227"><span> mm</span>
            <br>
            <h4>Color</h4>
                <input type="text" id="clr-color" placeholder="Ex: balck">
            <br>
            <h4>Weight</h4>
                <input type="number" id="clr-weight" placeholder="Ex: 1216"><span> g</span>
            <br>
            <h4>Price</h4>
                <input type="number" id="clr-price" placeholder="Ex: 110"><span> EUR</span>
            <br>
            <h4>Quantity</h4>
                <input type="number" id="clr-cant" placeholder="Ex: 4">
            <br>
            <h4>Image</h4>
                <input type="text" id="clr-img" placeholder="Image url">
            <br>
            <input id="submit" type="submit" value="Add Cooler">
    </form>
        </div> 

        <div class="ram-add"><h2>Add RAM</h2>
            
            <form id="ram-form">
            <h4>RAM name</h4>    
                <input type="text" id="ram-name" placeholder="Ex: Corsair venegance LPX 16GB(2x8GB)">
            <br>
            <h4>Description</h4>
                <input type="text" id="ram-descr">
            <br>
            <h4>Type</h4>
                <input type="text" id="ram-type" placeholder="Ex: DDR4">
            <br>
            <h4>Capacity</h4>
                <input type="number" id="ram-capacity" placeholder="Ex: 16"><span> GB</span>
            <br>
            <h4>Memory Speed</h4>
                <input type="number" id="ram-mem-speed" placeholder="Ex: 3000"><span> MHz</span>
            <br>
            <h4>Form Factor</h4>
                <input type="text" id="ram-form-factor" placeholder="Ex: DIMM">
            <br>
            <h4>Price</h4>
                <input type="number" id="ram-price" placeholder="Ex: 70"><span> EUR</span>
            <br>
            <h4>Quantity</h4>
                <input type="number" id="ram-cant" placeholder="Ex: 1">
            <br>
            <h4>Image</h4>
                <input type="text" id="ram-img" placeholder="Image url">
            <br>
            <input id="submit" type="submit" value="Add RAM">
    </form>
        </div> 

        <div class="storage-add"><h2>Add HDD/SSD</h2>
            
            <form id="storage-form">
            <h4>HDD/SSD name</h4>    
                <input type="text" id="stg-name" placeholder="Ex: HDD:Seagate Barracuda 1TB ">
            <br>
            <h4>Description</h4>
                <input type="text" id="stg-descr">
            <br>
            <h4>Capacity</h4>
                <input type="number" id="stg-capacity" placeholder="Ex: 1000"><span> GB</span>
            <br>
            <h4>Type</h4>
                <input type="text" id="stg-type" placeholder="Ex: HDD">
            <br>
            <h4>Form Factor</h4>
                <input type="text" id="stg-form-factor" placeholder="Ex: 3.5"><span> inch</span>
            <br>
            <h4>Read Speed</h4>
                <input type="number" id="stg-rspeed" placeholder="Ex: 162"><span> MB/s</span>
            <br>
            <h4>Write Speed</h4>
                <input type="number" id="stg-wspeed" placeholder="Ex: 136"><span> MB/s</span>
            <br>
            <h4>Price</h4>
                <input type="number" id="stg-price" placeholder="Ex: 40"><span> EUR</span>
            <br>
            <h4>Quantity</h4>
                <input type="number" id="stg-cant" placeholder="Ex: 1">
            <br>
            <h4>Image</h4>
                <input type="text" id="stg-img" placeholder="Image url">
            <br>
            <input id="submit" type="submit" value="Add Storage">
    </form>
        </div> 

        <div class="gpu-add"><h2>Add GPU</h2>
            
            <form id="gpu-form">
            <h4>GPU name</h4>    
                <input type="text" id="gpu-name" placeholder="Ex: Zotac GTX 1060 6GB AMP Edition">
            <br>
            <h4>Description</h4>
                <input type="text" id="gpu-descr">
            <br>
            <h4>Memory</h4>
                <input type="number" id="gpu-mem" placeholder="Ex: 6"><span> GB</span>
            <br>
            <h4>Memory type</h4>
                <input type="text" id="gpu-mem-type" placeholder="Ex: GDDR5">
            <br>
            <h4>Memory clock</h4>
                <input type="number" id="gpu-clock" placeholder="Ex: 1600"><span> MHz</span>
            <br>
            <h4>Size</h4>
                <input type="text" id="gpu-size" placeholder="Ex: 210"><span> mm</span>
            <br>
            <h4>Price</h4>
                <input type="number" id="gpu-price" placeholder="Ex: 250"><span> EUR</span>
            <br>
            <h4>Quantity</h4>
                <input type="number" id="pc-cant" placeholder="Ex: 1">
            <br>
            <h4>Image</h4>
                <input type="text" id="gpu-img" placeholder="Image url">
            <br>
            <input id="submit" type="submit" value="Add GPU">
    </form>
        </div> 

        <div class="psu-add"><h2>Add Power Supply (PSU)</h2>
            
            <form id="psu-form">
            <h4>PSU name</h4>    
                <input type="text" id="psu-name" placeholder="Ex: Deep Cool DA-600">
            <br>
            <h4>Description</h4>
                <input type="text" id="psu-descr">
            <br>
            <h4>Power</h4>
                <input type="number" id="psu-power" placeholder="Ex: 600"><span> W</span>
            <br>
            <h4>Fan</h4>
                <input type="number" id="psu-fan" placeholder="Ex: 120"><span> mm</span>
            <br>
            <h4>RPM</h4>
                <input type="number" id="psu-rpm" placeholder="Ex: 1700"><span> rpm</span>
            <br>
            <h4>Type</h4>
                <input type="text" id="psu-type" placeholder="Ex: non-modular">
            <br>
            <h4>Price</h4>
                <input type="number" id="psu-price" placeholder="Ex: 70"><span> EUR</span>
            <br>
            <h4>Quantity</h4>
                <input type="number" id="psu-cant" placeholder="Ex: 1">
            <br>
            <h4>Image</h4>
                <input type="text" id="psu-img" placeholder="Image url">
            <br>
            <input id="submit" type="submit" value="Add PSU">
    </form>
        </div> 

         <div class="case-add"><h2>Add Case</h2>
            
            <form id="case-form">
            <h4>PSU name</h4>    
                <input type="text" id="case-name" placeholder="Ex: GAMEMAX Dark Ranger,">
            <br>
            <h4>Description</h4>
                <input type="text" id="case-descr">
            <br>
            <h4>Form Factor</h4>
                <input type="text" id="case-form-factor" placeholder="Ex: MID TOWER">
            <br>
            <h4>Material</h4>
                <input type="text" id="case-material" placeholder="Ex: metal,organic glass">
            <br>
            <h4>Size</h4>
                <input type="text" id="case-size" placeholder="Ex: 230x430x450"><span> mm</span>
            <br>
            <h4>Fan</h4>
                <input type="number" id="case-fan" placeholder="Ex: 3">
            <br>
            <h4>Coler Height</h4>
                <input type="text" id="case-cooler-height" placeholder="Ex: 165"><span> mm</span>
            <br>
            <h4>Psu</h4>
                <input type="text" id="case-psu" placeholder="Ex: no">
            <br>
            <h4>Color</h4>
                <input type="text" id="case-color" placeholder="Ex: yellow">
            <br>
            <h4>Price</h4>
                <input type="number" id="case-price" placeholder="Ex: 40"><span> EUR</span>
            <br>
            <h4>Quantity</h4>
                <input type="number" id="case-cant" placeholder="Ex: 3">
            <br>
            <h4>Image</h4>
                <input type="text" id="case-img" placeholder="Image url">
            <br>
            <input id="submit" type="submit" value="Add Case">
    </form>
        </div> 
        

        <div class="monitor-add"><h2>Add Monitor</h2>
            
            <form id="monitor-form">
            <h4>Monitor name</h4>    
                <input type="text" id="mnt-name" placeholder="Ex: Acer v226hql">
            <br>
            <h4>Description</h4>
                <input type="text" id="mnt-descr">
            <br>
            <h4>Resolution</h4>
                <input type="text" id="mnt-resolution" placeholder="Ex: 1920x1080"><span> px</span>
            <br>
            <h4>Frequence</h4>
                <input type="number" id="mnt-freq" placeholder="Ex: 60"><span> Hz</span>
            <br>
            <h4>Matrix Type</h4>
                <input type="text" id="mnt-matrix" placeholder="Ex: LED VA">
            <br>
            <h4>Responsive Time</h4>
                <input type="text" id="mnt-ms" placeholder="Ex: 5"><span> ms</span>
            <br>
            <h4>Inputs</h4>
                <input type="text" id="mnt-input" placeholder="Ex: 2xHDMI 1XDVI 1xVGA ">
            <br>
            <h4>Price</h4>
                <input type="number" id="mnt-price" placeholder="Ex: 80"><span> EUR</span>
            <br>
            <h4>Quantity</h4>
                <input type="number" id="mnt-cant" placeholder="Ex: 4">
            <br>
            <h4>Image</h4>
                <input type="text" id="mnt-img" placeholder="Image url">
            <br>
            <input id="submit" type="submit" value="Add Monitor">
    </form>
        </div> 
        

        <div class="keyboard-add"><h2>Add Keyboard</h2>
            
            <form id="keyboard-form">
            <h4>GPU name</h4>    
                <input type="text" id="keyb-name" placeholder="Ex: HyperX Alloy FPS RGB">
            <br>
            <h4>Description</h4>
                <input type="text" id="keyb-descr">
            <br>
            <h4>Type</h4>
                <input type="text" id="keyb-type" placeholder="Ex: mechanical">
            <br>
            <h4>Size<h4>
                <input type="text" id="keyb-size" placeholder="Ex: 130x320"><span> mm</span>
            <br>
            <h4>Rgb</h4>
                <input type="text" id="keyb-rgb" placeholder="Ex: no">
            <br>
            <h4>Price</h4>
                <input type="number" id="keyb-price" placeholder="Ex: 70"><span> EUR</span>
            <br>
            <h4>Quantity</h4>
                <input type="number" id="keyb-cant" placeholder="Ex: 1">
            <br>
            <h4>Image</h4>
                <input type="text" id="keyb-img" placeholder="Image url">
            <br>
            <input id="submit" type="submit" value="Add Keyboard">
    </form>
        </div> 

        <div class="mouse-add"><h2>Add Mouse</h2>
            
            <form id="mouse-form">
            <h4>Mouse name</h4>    
                <input type="text" id="ms-name" placeholder="Ex: Xtrfy m42 Retro">
            <br>
            <h4>Description</h4>
                <input type="text" id="ms-descr">
            <br>
            <h4>Design</h4>
                <input type="text" id="ms-design" placeholder="Ex: Simetric">
            <br>
            <h4>Sensor</h4>
                <input type="text" id="ms-sensor" placeholder="Ex: Pixart 3389">
            <br>
            <h4>Sensor Resolution</h4>
                <input type="number" id="ms-sens-resol" placeholder="Ex: 16000"><span> dpi</span>
            <br>
            <h4>Interface Connectivity</h4>
                <input type="text" id="ms-connect" placeholder="Ex: usb cable">
            <br>
            <h4>Wire Lenght</h4>
                <input type="number" id="ms-wire" placeholder="Ex: 180"><span> cm</span>
            <br>
            <h4>Weight</h4>
                <input type="number" id="ms-weight" placeholder="Ex: 59"><span> g</span>
            <br>
            <h4>Price</h4>
                <input type="number" id="ms-price" placeholder="Ex: 70"><span> EUR</span>
            <br>
            <h4>Quantity</h4>
                <input type="number" id="ms-cant" placeholder="Ex: 1">
            <br>
            <h4>Image</h4>
                <input type="text" id="ms-img" placeholder="Image url">
            <br>
            <input id="submit" type="submit" value="Add Mouse">
    </form>
        </div> 

        <div class="mouse-pad-add"><h2>Add Mouse-pad</h2>
            
            <form id="mouse-pad-form">
            <h4>Mouse-pad name</h4>    
                <input type="text" id="msp-name" placeholder="Ex: HyperX FURY S Pro">
            <br>
            <h4>Description</h4>
                <input type="text" id="msp-descr">
            <br>
            <h4>Material</h4>
                <input type="text" id="msp-material" placeholder="Ex: Cloth, rubber">
            <br>
            <h4>Size</h4>
                <input type="text" id="msp-size" placeholder="Ex: 450x400"><span> mm</span>
            <br>
            <h4>RGB</h4>
                <input type="text" id="msp-rgb" placeholder="Ex: no">
            <br>
            <h4>Price</h4>
                <input type="number" id="msp-price" placeholder="Ex: 30"><span> EUR</span>
            <br>
            <h4>Quantity</h4>
                <input type="number" id="msp-cant" placeholder="Ex: 4">
            <br>
            <h4>Image</h4>
                <input type="text" id="msp-img" placeholder="Image url">
            <br>
            <input id="submit" type="submit" value="Add Mouse-pad">
    </form>
        </div> 

        <div class="headset-add"><h2>Add Headseat</h2>
            
            <form id="headseat-form">
            <h4>Headphone name</h4>    
                <input type="text" id="hset-name" placeholder="Ex: Razer Kraken X">
            <br>
            <h4>Description</h4>
                <input type="text" id="hset-descr">
            <br>
            <h4>Impendance</h4>
                <input type="number" id="hset-impendance" placeholder="Ex: 32 "><span> Ω</span>
            <br>
            <h4>Sensivity</h4>
                <input type="number" id="hset-sensivity" placeholder="Ex: 109"><span> dB</span>
            <br>
            <h4>Microphone</h4>
                <input type="text" id="hset-micro" placeholder="Ex: yes">
            <br>
            <h4>Connector</h4>
                <input type="text" id="hset-connect" placeholder="Ex: USB">
            <br>
            <h4>Cable Length</h4>
                <input type="number" id="hset-cable" placeholder="Ex: 130"><span> cm</span>
            <br>
            <h4>Weight</h4>
                <input type="number" id="hset-weight" placeholder="Ex: 250"><span> g</span>
            <br>
            <h4>Price</h4>
                <input type="number" id="hset-price" placeholder="Ex: 50"><span> EUR</span>
            <br>
            <h4>Quantity</h4>
                <input type="number" id="hset-cant" placeholder="Ex: 1">
            <br>
            <h4>Image</h4>
                <input type="text" id="hset-img" placeholder="Image url">
            <br>
            <input id="submit" type="submit" value="Add Headset">
    </form>
       </div> 

          <div class="armchair-add"><h2>Add Armchair</h2>
            
            <form id="armchair-form">
            <h4>GPU name</h4>    
                <input type="text" id="arm-name" placeholder="Ex: COUGAR Terminator Gaming Chair">
            <br>
            <h4>Description</h4>
                <input type="text" id="arm-descr">
            <br>
            <h4>Max Weight</h4>
                <input type="number" id="arm-max-weight" placeholder="Ex: 135"><span> kg</span>
            <br>
            <h4>Color</h4>
                <input type="text" id="arm-color" placeholder="Ex: black">
            <br>
            <h4>Weight</h4>
                <input type="number" id="arm-weight" placeholder="Ex: 36.5"><span> kg</span>
            <br>
            <h4>Material</h4>
                <input type="text" id="arm-material" placeholder="Ex: leather">
            <br>
            <h4>Price</h4>
                <input type="number" id="arm-price" placeholder="Ex: 400"><span> EUR</span>
            <br>
            <h4>Quantity</h4>
                <input type="number" id="arm-cant" placeholder="Ex: 1">
            <br>
            <h4>Image</h4>
                <input type="text" id="arm-img" placeholder="Image url">
            <br>
            <input id="submit" type="submit" value="Add Armchair">
       
    </form>
          </div>  
</div>
        <script src="add_component_script.js"></script>
        </main>
</body>
</html>