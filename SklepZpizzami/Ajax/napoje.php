<?php
$napoj = array("Pepsi 2L","Mirinda 2L","Sprite 2L","Lech FREE 0.5L");
$ceny = array(9,9,9,11);

for ($i=0;$i<count($napoj);$i++)
{
    echo "<div class='tile'> <article class='tile is-child notification has-background-grey-lighter'>"."<h1 class='title is-2'>".$napoj[$i]."</h1>
    <h4 class='subtitle is-4'>$ceny[$i] zł</h4>";

    echo "<div class='buttons'>
    <button class='button is-primary' id='napoj$i'>Dodaj do koszyka</button>
    </div>"
    ."<br>"
    ."<figure>
    <img style='width:600px; height:500px; border-radius:2vw' src='Images/napoj/napoj$i.jpg'></figure></article></div><br>";
}
?>
<script>

$("#napoj0").click(function() {
            if (koszyk.length == 0)
            {
                koszyk.push("Pepsi 2L");
                koszykcena.push(9);
                cena = cena + 9;
            }
            else
            {
                if(isItemInCart("Pepsi 2L")==false)
                {
                    koszyk.push("Pepsi 2L");
                    koszykcena.push(9);
                    cena = cena + 9;
                }
                else
                {
                    koszykcena.push(9);
                    cena = cena + 9;
                } 
            }
            swal({
                title: "Gotowe",
                text: "Pomyślnie dodano produkt do koszyka",
                icon: "success",
                dangerMode: true,
             })
        });

        $("#napoj1").click(function() {
            if (koszyk.length == 0)
            {
                koszyk.push("Mirinda 2L");
                koszykcena.push(9);
                cena = cena + 9;
            }
            else
            {
                if(isItemInCart("Mirinda 2L")==false)
                {
                    koszyk.push("Mirinda 2L");
                    koszykcena.push(9);
                    cena = cena + 9;
                }
                else
                {
                    koszykcena.push(9);
                    cena = cena + 9;
                } 
            }
            swal({
                title: "Gotowe",
                text: "Pomyślnie dodano produkt do koszyka",
                icon: "success",
                dangerMode: true,
             })
        });
        $("#napoj2").click(function() {
            if (koszyk.length == 0)
            {
                koszyk.push("Sprite 2L");
                koszykcena.push(9);
                cena = cena + 9;
            }
            else
            {
                if(isItemInCart("Sprite 2L")==false)
                {
                    koszyk.push("Sprite 2L");
                    koszykcena.push(9);
                    cena = cena + 9;
                }
                else
                {
                    koszykcena.push(9);
                    cena = cena + 9;
                } 
            }
            swal({
                title: "Gotowe",
                text: "Pomyślnie dodano produkt do koszyka",
                icon: "success",
                dangerMode: true,
             })
        });

        $("#napoj3").click(function() {
            if (koszyk.length == 0)
            {
                koszyk.push("Lech FREE 0.5L");
                koszykcena.push(11);
                cena = cena + 11;
            }
            else
            {
                if(isItemInCart("Lech FREE 0.5L")==false)
                {
                    koszyk.push("Lech FREE 0.5L");
                    koszykcena.push(11);
                    cena = cena + 11;
                }
                else
                {
                    koszykcena.push(11);
                    cena = cena + 11;
                } 
            }
            swal({
                title: "Gotowe",
                text: "Pomyślnie dodano produkt do koszyka",
                icon: "success",
                dangerMode: true,
             })
        });
    
</script>