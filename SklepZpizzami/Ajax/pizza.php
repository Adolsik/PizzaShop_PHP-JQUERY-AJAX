<?php
$pizza = array("Capriciossa","Salame","Diavola","Pancetta","Parma","Piccante","Ala Greca");
$pizzaOpisy = array("sos pomidorowy, mozzarella, szynka, pieczarki","sos pomidorowy, mozzarella, salame napoli, czarne oliwki","sos pomidorowy, mozzarella, włoskie salami spianata, świeżo mielony czerwony pieprz","sos pomidorowy, mozzarella, włoski boczek pancetta, pomidorki koktajlowe, biała cebula","sos pomidorowy, mozzarella, szynka parmeńska, rukola, pomidorki koktajlowe, parmezan","sos pomidorowy, mozzarella, włoskie salami spianata, chorizo, jalapeno","sos pomidorowy, mozzarella, ser feta, oliwki, cebula czerwona, bazylia, rukola, oliwa");
$ceny = array(27,27,29,30,31,30,28);

for ($i=0;$i<count($pizza);$i++)
{
    echo "<div class='tile'> <article class='tile is-child notification has-background-grey-lighter'>"."<h1 class='title is-2'> Pizza ".$pizza[$i]." ".$ceny[$i]."zł</h1>
    <h4 class='subtitle is-4'>$pizzaOpisy[$i]</h4>";

    echo "<div class='buttons'>
    <button class='button is-primary' id='pizza$i'>Dodaj do koszyka</button>
    </div>"
    ."<br>"
    ."<figure>
    <img style='width:600px; height:400px; border-radius:2vw' src='Images/pizza/pizza$i.jpg'></figure></article></div><br>";
}
?>
<script>


    $("#pizza0").click(function() {
            if (koszyk.length == 0)
            {
                koszyk.push("Pizza Capriciossa");
                koszykcena.push(27);
                cena = cena + 27;
            }
            else
            {
                if(isItemInCart("Pizza Capriciossa")==false)
                {
                    koszyk.push("Pizza Capriciossa");
                    koszykcena.push(27);
                    cena = cena + 27;
                }
                else
                {
                    koszykcena.push(27);
                    cena = cena + 27;
                } 
            }
            swal({
                title: "Gotowe",
                text: "Pomyślnie dodano produkt do koszyka",
                icon: "success",
                dangerMode: true,
             })
        });

        $("#pizza1").click(function() {
            if (koszyk.length == 0)
            {
                koszyk.push("Pizza Salame");
                koszykcena.push(27);
                cena = cena + 27;
            }
            else
            {
                if(isItemInCart("Pizza Salame")==false)
                {
                    koszyk.push("Pizza Salame");
                    koszykcena.push(27);
                    cena = cena + 27;
                }
                else
                {
                    koszykcena.push(27);
                    cena = cena + 27;
                } 
            }
            swal({
                title: "Gotowe",
                text: "Pomyślnie dodano produkt do koszyka",
                icon: "success",
                dangerMode: true,
             })
        });

        $("#pizza2").click(function() {
            if (koszyk.length == 0)
            {
                koszyk.push("Pizza Diavola");
                koszykcena.push(29);
                cena = cena + 29;
            }
            else
            {
                if(isItemInCart("Pizza Diavola")==false)
                {
                    koszyk.push("Pizza Diavola");
                    koszykcena.push(29);
                    cena = cena + 29;
                }
                else
                {
                    koszykcena.push(29);
                    cena = cena + 29;
                } 
            }
            swal({
                title: "Gotowe",
                text: "Pomyślnie dodano produkt do koszyka",
                icon: "success",
                dangerMode: true,
             })
        });

        $("#pizza3").click(function() {
            if (koszyk.length == 0)
            {
                koszyk.push("Pizza Pancetta");
                koszykcena.push(30);
                cena = cena + 30;
            }
            else
            {
                if(isItemInCart("Pizza Pancetta")==false)
                {
                    koszyk.push("Pizza Pancetta");
                    koszykcena.push(30);
                    cena = cena + 30;
                }
                else
                {
                    koszykcena.push(30);
                    cena = cena + 30;
                } 
            }
            swal({
                title: "Gotowe",
                text: "Pomyślnie dodano produkt do koszyka",
                icon: "success",
                dangerMode: true,
             })
        });

        $("#pizza4").click(function() {
            if (koszyk.length == 0)
            {
                koszyk.push("Pizza Parma");
                koszykcena.push(31);
                cena = cena + 31;
            }
            else
            {
                if(isItemInCart("Pizza Parma")==false)
                {
                    koszyk.push("Pizza Parma");
                    koszykcena.push(31);
                    cena = cena + 31;
                }
                else
                {
                    koszykcena.push(31);
                    cena = cena + 31;
                } 
            }
            swal({
                title: "Gotowe",
                text: "Pomyślnie dodano produkt do koszyka",
                icon: "success",
                dangerMode: true,
             })
        });
    
        $("#pizza5").click(function() {
            if (koszyk.length == 0)
            {
                koszyk.push("Pizza Piccante");
                koszykcena.push(30);
                cena = cena + 30;
            }
            else
            {
                if(isItemInCart("Pizza Piccante")==false)
                {
                    koszyk.push("Pizza Piccante");
                    koszykcena.push(30);
                    cena = cena + 30;
                }
                else
                {
                    koszykcena.push(30);
                    cena = cena + 30;
                } 
            }
            swal({
                title: "Gotowe",
                text: "Pomyślnie dodano produkt do koszyka",
                icon: "success",
                dangerMode: true,
             })
        });
        
        $("#pizza6").click(function() {
            if (koszyk.length == 0)
            {
                koszyk.push("Pizza Ala Greca");
                koszykcena.push(28);
                cena = cena + 28;
            }
            else
            {
                if(isItemInCart("Pizza Ala Greca")==false)
                {
                    koszyk.push("Pizza Ala Greca");
                    koszykcena.push(28);
                    cena = cena + 28;
                }
                else
                {
                    koszykcena.push(28);
                    cena = cena + 28;
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