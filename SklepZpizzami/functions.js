let ilosc=[];
let cena=0;
let koszyk=[];
let koszykcena=[];

function finalise()
{
    if(cena==0)
    {
        swal({
            title: "Błąd!",
            text: "Koszyk jest pusty.",
            icon: "error",
         })
    }
    else
    {
        swal({
            title: "Gotowe",
            text: "Zamówienie zostało złożone pomyślnie",
            icon: "success",
         })
    }
    cena = 0;
    koszyk = [];
    koszykcena = [];
    $("#ajaxContent").load("cart.html");
}
function deleteItem(i)
{
    cena -= koszykcena[i];
    if (cena<0)
    {
        cena=0;
    }
    ilosc[i]-=1;

    if(ilosc[i]<=0)
    {
        koszyk.splice(koszyk[i], 1);
        koszykcena.splice(koszykcena[i], 1);
        ilosc[i]=1;
    }
    $("#ajaxContent").load("cart.html");
}
function addItem(i)
{
cena += koszykcena[i];
ilosc[i] += 1;
$("#ajaxContent").load("cart.html");

}
function isItemInCart(string){
    let isItem = false;
    for(let i=0; i<koszyk.length;i++){
        if(koszyk[i]==string){
            isItem=true;
            break;
        }
    }
    return isItem;
};

for(let i=0; i<99; i++){
    ilosc[i] = 1;
}