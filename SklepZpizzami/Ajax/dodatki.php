<?php
$dodatek = array("Sos pomidorowy","Ketchup","Sos czosnkowy","Oliwa");
$ceny = array(2,2,2,5);

for ($i=0;$i<count($dodatek);$i++)
{
    echo "<div class='tile'> <article class='tile is-child notification has-background-grey-lighter'>"."<h1 class='title is-2'>".$dodatek[$i]."</h1>
    <h4 class='subtitle is-4'>$ceny[$i] zł</h4>";

    echo "<div class='buttons'>
    <button class='button is-primary' id='dodatek$i'>Dodaj do koszyka</button>
    </div>"
    ."<br>"
    ."<figure>
    <img style='width:600px; height:400px; border-radius:2vw' src='Images/dodatek/dodatek$i.jpg'></figure></article></div><br>";
}
?>
<script>


$("#dodatek0").click(function() {
            if (koszyk.length == 0)
            {
                koszyk.push("Sos pomidorowy");
                koszykcena.push(2);
                cena = cena + 2;
            }
            else
            {
                if(isItemInCart("Sos pomidorowy")==false)
                {
                    koszyk.push("Sos pomidorowy");
                    koszykcena.push(2);
                    cena = cena + 2;
                }
                else
                {
                    koszykcena.push(2);
                    cena = cena + 2;
                } 
            }
            swal({
                title: "Gotowe",
                text: "Pomyślnie dodano produkt do koszyka",
                icon: "success",
                dangerMode: true,
             })
        });

        $("#dodatek1").click(function() {
            if (koszyk.length == 0)
            {
                koszyk.push("Ketchup");
                koszykcena.push(2);
                cena = cena + 2;
            }
            else
            {
                if(isItemInCart("Ketchup")==false)
                {
                    koszyk.push("Ketchup");
                    koszykcena.push(2);
                    cena = cena + 2;
                }
                else
                {
                    koszykcena.push(2);
                    cena = cena + 2;
                } 
            }
            swal({
                title: "Gotowe",
                text: "Pomyślnie dodano produkt do koszyka",
                icon: "success",
                dangerMode: true,
             })
        });

        $("#dodatek2").click(function() {
            if (koszyk.length == 0)
            {
                koszyk.push("Sos czosnkowy");
                koszykcena.push(2);
                cena = cena + 2;
            }
            else
            {
                if(isItemInCart("Sos czosnkowy")==false)
                {
                    koszyk.push("Sos czosnkowy");
                    koszykcena.push(2);
                    cena = cena + 2;
                }
                else
                {
                    koszykcena.push(2);
                    cena = cena + 2;
                } 
            }
            swal({
                title: "Gotowe",
                text: "Pomyślnie dodano produkt do koszyka",
                icon: "success",
                dangerMode: true,
             })
        });

        $("#dodatek3").click(function() {
            if (koszyk.length == 0)
            {
                koszyk.push("Oliwa");
                koszykcena.push(5);
                cena = cena + 5;
            }
            else
            {
                if(isItemInCart("Oliwa")==false)
                {
                    koszyk.push("Oliwa");
                    koszykcena.push(5);
                    cena = cena + 5;
                }
                else
                {
                    koszykcena.push(5);
                    cena = cena + 5;
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