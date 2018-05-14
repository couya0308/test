document.write("■■■問１■■■"+"<br>")

function menseki(hankei,ensyu=3.14){
    return(hankei*ensyu);
}

document.write(menseki(5)+"c㎡"+"<br>");
document.write(menseki(7)+"c㎡"+"<br>");
document.write(menseki(10)+"c㎡"+"<br>");

document.write("■■■問２■■■"+"<br>")

function ryokin(otona,kodomo,otonap=500,kodomop=200){
    return(otonap*otona+kodomop*kodomo)+"円です。";}

document.write(ryokin(2,5)+"<br>");
document.write(ryokin(1,5)+"<br>");
document.write(ryokin(3,7)+"<br>");


