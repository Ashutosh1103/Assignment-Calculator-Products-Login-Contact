<!DOCTYPE html>
<html>
    <head>
        <title>calculator</title>
        
       <style>
    
body{
   
    min-height: 100vh; 
     background: rgb(65, 65, 160);
}
   
.calculator{
    justify-content: center;
    align-items: center;
    margin-left: 34.3%;
    width: 240px;
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr;
}
.calculator span{
    width: 60px;
    height: 60px;
    line-height: 60px;
    text-align: center;
    background: white;
    font-size: 1.2em;
    color: black;
    font-weight: 500;
}
.calculator .operation{
    background: rgb(41, 40, 40);
    color: white;
}
.calculator .clear{
    background:rgb(219, 52, 22);
    color: white;
}
.calculator .inputarea{
    grid-column: span 4;
    padding: 20px 10px;
    outline: none;
    border: none;
    font-size: 1.3em;
}
.calculator .plus{
    grid-row: span 2;
    height: 120px;
    line-height: 120px;
}
.calculator .equals{
    background: rgb(30, 214, 30);
    font-size: 1.8em ;
}
#history{
    width: 240px;
    height: 371px;
    overflow-y: scroll;
    font-size: 1.1em;
    background: rgb(114, 114, 235);
    box-sizing: border-box;
    padding: 10px 20px;
    justify-content: center;
    align-items: center;
    float: right;
    margin-right: 30%;
}

#history::-webkit-scrollbar{
    width: 0;

}
#history h3{
    padding: 10px 0px;
    font-size: 1.2em;
}
#history p:last-child{
    font-size: 1.3em;
    font-weight: 500;
    color: white;
}

</style>

    </head>
    <body>
    <span  id="history">
            <h3>HISTORY</h3>
            </span>
        <form action="" class=" calculator" name="calc">
            <input type="text" name="txt" class="inputarea">
            <span onclick="document.calc.txt.value += '1';">1</span>
            <span onclick="document.calc.txt.value += '2';">2</span>
            <span onclick="document.calc.txt.value += '3';">3</span>
            <span class="clear" onclick="document.calc.txt.value = '';">C</span>
            <span onclick="document.calc.txt.value += '4';">4</span>
            <span onclick="document.calc.txt.value += '5';">5</span>
            <span onclick="document.calc.txt.value += '6';">6</span>
            <span class="operation plus" onclick="document.calc.txt.value += '+';">+</span>
            <span onclick="document.calc.txt.value += '7';">7</span>
            <span onclick="document.calc.txt.value += '8';">8</span>
            <span onclick="document.calc.txt.value += '9';">9</span>
            <span onclick="document.calc.txt.value += '0';">0</span>
            <span onclick="document.calc.txt.value = backspace(document.calc.txt.value);">B</span>
            <span onclick="document.calc.txt.value += '.';">.</span>
            <span class="operation minus" onclick="document.calc.txt.value += '-';">-</span>
           
            <span class="equals" onclick="document.calc.txt.value = calculation(document.calc.txt.value);">=</span>
            <span class="operation expo" onclick="document.calc.txt.value += '**';">^</span>
            <span class="operation div" onclick="document.calc.txt.value += '/';">/</span>
            <span class="operation mul" onclick="document.calc.txt.value += '*';">*</span>
            </form>
       


        
        <script>
           let history=document.getElementById('history');
            function calculation(v){
                para = document.createElement('p');
                data=v+"="+ eval(v);
                para.innerText = data;
                history.appendChild(para);
                return eval(v);
            }
            function backspace(b){
                return b.slice(0, b.length-1);
            }
        </script>

        
    </body>
</html>