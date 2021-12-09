<?php
function onSave() {
    saveToFile($_POST['product']);
}
function saveToFile($product){
    $productsArray = getFromFile();
    $productsArray[] = $product;
    $jsonProduct = json_encode ($productsArray);
    file_put_contents("./product.json", $jsonProduct);

}
function getFromFile() {
    $jsonProduct = file_get_contents("./product.json");
    $productsArray = json_decode($jsonProduct, true);
    return $productsArray;

}
function deleteItem($index) {
    $productsArray = getFromFile();
    unset($productsArray[$index]);
    $jsonProduct = json_encode ($productsArray);
    
    file_put_contents("./product.json", $jsonProduct);
    header("location: index.php");
    }?>
<hr>
<?php
$products = [
    [
        
        'name'        => 'Nobel 8900',
        'price'       => 14.995,
        'category'    => 'Lænestole',
        'description' => 'Nobels smukke, slanke og ædle udtryk passer til en
        indretning, . <br>Her er der nemlig tale om et produkt, hvor der er 
        kælet for detaljen. <br>Træets åre står smukt frem og alle samlinger 
        står snorlige – lavet til at holde i generationer. <br>I Nobel kan 
        smukt kombineres med den stilfulde skammel Nobel 8990, <br>som kun 
        fuldender den perfekte siddeoplevelse. Nobels højde er 30 cm ',
    ],
    [
        'name'        => ' Nobel 8920',
        'price'       => 15.595,
        'category'    => 'Lænestole',
        'description' => 'Nobel 8920 slanke og ranke ryg giver et royalt og ædelt <br>
        udtryk med flotte nordiske træk. Det giver en nostalgisk charme, som man kun kan glædes over <br>
        <når man samtidigt nyder godt af den fantastiske siddekomfort<br>
        der på alle måder er indarbejdet i denne perle af dansk design. Nobel 8920 højde er 32 cm',
    ],
    [
        'name'        => 'Munin 6360',
        'price'       =>  36.455 ,
        'category'    => 'Lænestole',
        'description' => 'Sansestimulering og høj siddekomfort forenes i den<b>
        stilfulde designgyngestol 6360 Munin.Muninstolen er nyskabende og<br>
        kombinerer stilfuldt dansk design med 110 års møbeltradition og <br> 
        kvalitetshåndværk. Stolen er designet til at give den bedst tænkelige <br>
        siddekomfort, samtidig med, at den både virker beroligende og sansestimulerende.',

    ],

    [
        'name'        => 'Bear R 6510',
        'price'       => 17.450,
        'category'    => 'Lænestole',
        'description' => '6510 Bear R er en møbelserie, der er designet med inspiration<br>
        både fra den vilde natur og klassisk dansk design. <br>
        Det skønne samspil mellem de brede flader i stellets armlæn<br>
        og det velpolstret sæde samt ryglæn giver et smukt designudtryk. <br>
        Den høje ryg giver en fantastisk støtte af hele ryggen og ønskes en mere tilbagelænet siddestilling.',

    ],
    [
        'name'        => 'Cantate 6010',
        'price'       =>  14.445,
        'category'    => 'Lænestole',
        'description' => 'Denne lænestol passer ind i enhver boligindretning med sit klassiske udtryk<br>
        Du får med Cantate 6010 ikke bare en visuelt smuk stol <br>
        men også en yderst solid og bæredygtig stol, der holder i generationer.',
    ],

    [
        'name'        => 'Plus 5900',
        'price'       => 11.260 ,
        'category'    => 'Lænestole',
        'description' => 'Hvilestolen tilbyder en uovertruffen siddekomfort og med de mange <br>
        forskellige tilpasningsmuligheder, kan stolen tilpasses ergonomisk til <br>
        et enkelte menneske både i højde og dybde samt med lænde- og armstøtte',
    ],

    [
        'name'        => 'Plus 5980',
        'price'       => 15.550  ,
        'category'    => 'Lænestole',
        'description' => 'Plus 5980 er en funktionel drejestol med høj ryg <br>
        Med denne hvilestol får du en blød og behagelig stol med maksimal siddekomfort.<br>
        Vi justerer blandt andet sædedybde og siddehøjde for optimal siddekomfort <br>
        ',
    ],

    [

        'name'        => 'Plus 5060',
        'price'       => 17.110 ,
        'category'    => 'Lænestole',
        'description' => 'Plus 5060 er en virkelig behagelig lænestol med indbygget lang fodhviler <br>
        nakkepude og elektronisk ryglæn, som skaber maksimal siddekomfort <br>
        Plus 5060 fås med elektronisk ryg og sæde, samt genopladeligt ledningsfrit <br>
        batteri eller med ledning til stikkontakt',
    ],

    [
        'name'        => 'Casa 5197',
        'price'       =>  11.480 ,
        'category'    => 'Lænestole',
        'description' => 'Denne lænestol er bygget med særdeles god siddekomfort i fokus.<br>
        Stolens siddekomfort indbyder til maksimal afslapning med polstrede armlæn<br>
        lækker nakkestøtte',
    ],
    [
        'name'        => 'Edge 7900',
        'price'       => 11.260 ,
        'category'    => 'Lænestole',
        'description' => 'Hvis du ønsker en stol som du sidder godt i, er Edge 7900 uden tvivl <br>
        værd at kigge nærmere på. Her får du vedvarende siddeglæde år efter år. <br>
        der er muligheden for at vælge mellem et bredt udvalg af kvalitetstekstiler<br>
        og læder i forskellige farver, gør at stolen kan få et personligt udtryk.',
    ],
    [
        'name'        => 'Scala 5411',
        'price'       => 9.975,
        'category'    => 'Lænestole',
        'description' => 'Scala 5411 er en lille klassisk og stilren læne- og sofastol, der kan<br>
        sammensættes med 2-personers og 3-personers sofa fra Scala-serien.<br>
        På den måde kan der skabes ro og sammenhæng i  indretninge<br>
        med matchende designs fra samme møbelserie.',
    ],
    [
        'name'        => 'Senator 5390 & 5391',
        'price'       =>  8.965,
        'category'    => 'Lænestole',
        'description' => 'Senator 5391 er en klassisk og særdeles elegant hvilestol.<br>
         Nyd den lækre elegance med siddekomfort i særklasse. Senator 5391 har<br>
         unktionelt ryglæn der giver dig mulighed for at læne dig tilbage i stolen.',


    ],
    
    [
        'name'        => 'Armstol 182',
        'price'       =>  5180,
        'category'    => 'Lænestole',
        'description' => 'Godt håndværk og stilfuldt design – Armstol 182 har <br>
        elegance og unikke former. Det er en tidløs designklassiker, der med sit <br>
        lette udtryk vil tage sig godt ud i både stuen, spisestuen og i køkkenet.'
    ],
    [
        'name'        => 'Gyngestol 183',
        'price'       => 5.760  ,
        'category'    => 'Lænestole',
        'description' => 'Godt håndværk og stilfuldt design – gyngestol 183 er elegant<br>
        og unik i sin form. gyngestol 183 er en tidløs designklassiker, der med sit<br>
        lette udtryk, vil tage sig godt ud i både stuen, spisestuen, køkkenet og på kontoret<br>
        eller i den hyggelige læsekro',

    ],
        
];
?>
<h2 style='text-align:center;'>Welcome to Farstrup Furniture webshop!</h2>
<h3>Our Products</h3>
<h4> Lænerstole</h4>
<?php foreach ($products as $product) : ?>
    <p>
        <span style='font-weight:bold;'>
            <?= $product['name'] ?> 
        </span> 
        <br/>
        Price: Kr <?= $product['price'] ?>
        <br/>
        Category: <?= $product['category'] ?>
        <br/>
        <?= $product['description'] ?>
    </p>
<?php endforeach; ?>

<hr>

<?php

$products = [
    [
        'name'        => '5040 Multiplus',
        'price'       =>  32.660 ,
        'category'    => 'funktionsstole',
        'description' => 'Generelt<br>
        Plus-serien findes i utal af forskellige designs og muligheder. <br>
        Længe leve individualisme! <br>
        Vedligeholdelse<br>
        Afhængigt af hvilket tekstil eller lædermateriale, som du ønsker<br>
        på stolen er der forskellige ting du kan gøre
        Mål m.m.<br>
        Bredde: 71 cm<br>
        Dybde: 72 cm<br>
        Højde: 116 cm<br>
        Sædehøjde: 47 cm<br>',
    ],
    [
        'name'        => 'Home-Line 6311',
        'price'       =>  23.270  ,
        'category'    => 'funktionsstole',
        'description' => 'Generelt<br>
        Home-Line 6311 er stolen med de mange funktioner.<br>
        Vedligeholdelse<br>
        Afhængigt af hvilket tekstil eller lædermateriale, som du ønsker<br>
        på stolen er der forskellige ting du kan gøre
        Mål m.m.<br>
        Bredde: 71 cm<br>
        Dybde: 82 cm<br>
        Højde: 116 cm<br>
        Sædehøjde: 47 cm<br>',
    ],
    [
        'name'        => 'Home-Line 6341',
        'price'       =>  27.700 ,
        'category'    => 'funktionsstole',
        'description' => 'Generelt<br>
        Home-Line 6341 er stolen med de mange funktioner.<br>
        Vedligeholdelse<br>
        Afhængigt af hvilket tekstil eller lædermateriale, som du ønsker<br>
        på stolen er der forskellige ting du kan gøre
        Mål m.m.<br>
        Bredde: 71 cm<br>
        Dybde: 82 cm<br>
        Højde: 116 cm<br>
        Sædehøjde: 47 cm<br>',
    ],
    [
        'name'        => 'Fastoflex 5463',
        'price'       => 12.810  ,
        'category'    => 'funktionsstole',
        'description' => 'Generelt<br>
        Fastoflex 5463 er vores armstol XXL, med en statisk bæreevne på 450 kg.<br>
        Vedligeholdelse<br>
        Afhængigt af hvilket tekstil eller lædermateriale, som du ønsker<br>
        på stolen er der forskellige ting du kan gøre
        Mål m.m.<br>
        Bredde: 90 cm<br>
        Dybde: 71 cm<br>
        Højde: 88 cm<br>
        Sædehøjde: 45 cm<br>',
    ],
];
?>
<h2 style='text-align:center;'>Welcome to Farstrup Furniture webshop!</h2>
<h3>Our Products</h3>
<h4> Funktionsstole</h4>
<?php foreach ($products as $product) : ?>
    <p>
        <span style='font-weight:bold;'>
            <?= $product['name'] ?> 
        </span> 
        <br/>
        Price: Kr <?= $product['price'] ?>
        <br/>
        Category: <?= $product['category'] ?>
        <br/>
        <?= $product['description'] ?>
    </p>
<?php endforeach; ?>




 


