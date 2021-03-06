<!DOCTYPE html>
<html ng-app>
    <head>
        <?php include "header.php"; ?>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.7/angular.min.js"></script>
    </head>
    <body>
        <h1> <a href="index.php">Sistemas Lineares</a> >> <a href="#">Matriz 2x2</a> </h1>
        <h2>Complete a F&oacute;rmula Geral:</h2>
        <div class="wrapper">
            <div class="wrapper-form">
                <div class="left js_node">
                    <input type="text" ng-model="a" placeholder="a">
                    <input type="text" ng-model="x" placeholder="x">
                    <span>+</span>
                    <input type="text" ng-model="b" placeholder="b">
                    <input type="text" ng-model="y" placeholder="y">
                    <span>=</span>
                    <input type="text" ng-model="e1" placeholder="e1">
                </div>
    
                <div class="left js_node">
                    <input type="text" ng-model="c" placeholder="c">
                    <input type="text" ng-model="x" placeholder="x">
                    <span>+</span>
                    <input type="text" ng-model="d" placeholder="d">
                    <input type="text" ng-model="y" placeholder="y">
                    <span>=</span>
                    <input type="text" ng-model="e2" placeholder="e2">
                </div>            
            </div>
    
            <div class="left margin-right">
                <span class="matriz" >A = </span>
                <div class="matriz-coef">
                    <p class="" >{{a|number}} &nbsp;&nbsp; {{b|number}}</p>
                    <p class="" >{{c|number}} &nbsp;&nbsp; {{d|number}}</p>
                </div>
            </div>
    
            <div class="left margin-right">
                <span class="matriz" >X = </span>
                <div class="matriz-coef">
                    <p class="" >{{e1|number}} &nbsp;&nbsp; {{b|number}}</p>
                    <p class="" >{{e2|number}} &nbsp;&nbsp; {{d|number}}</p>
                </div>
            </div>
    
            <div class="left margin-right">
                <span class="matriz" >Y = </span>
                <div class="matriz-coef">
                    <p class="" >{{a|number}} &nbsp;&nbsp; {{e1|number}}</p>
                    <p class="" >{{c|number}} &nbsp;&nbsp; {{e2|number}}</p>
                </div>
             </div>
        </div>
    
        <div class="wrapper-2">
            <h2>Resultados:</h2>

            <div class="left margin-right matriz-coef">
                <p>DetA = {{   (a*d)-(b*c)  }}</p>
                <p>DetX = {{   (e1*d)-(e2*b)  }}</p>
                <p>DetY = {{   (e2*a)-(e1*c)  }}</p>
            </div>
             <div class="left margin-right matriz-coef">
                <p>X = {{(  ( (e1*d )-(e2*b) )/( (a*d)-(b*c) )  )}}</p>
                <p>Y = {{(  ( (e2*a )-(e1*c) )/( (a*d)-(b*c) )  )}}</p>
            </div>

            <div class="right margin-right note">
                <p>X = DetX / DetA</p>
                <p>Y = DetY / DetA</p>
            </div>

        </div>


        <?php include "footer.php";?>
     </body>


</html>