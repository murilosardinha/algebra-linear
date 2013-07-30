<!DOCTYPE html>
<html ng-app>
    <head>
        <?php include "header.php"; ?>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.7/angular.min.js"></script>
    </head>
    <body>
        <h1> <a href="index.php">Sistemas Lineares</a> >> <a href="#">Matriz 3x3</a> </h1>
        <h2>Complete a F&oacute;rmula Geral:</h2>
        <div class="wrapper">
            <div class="wrapper-form wrapper-form-3">
                <div class="left js_node m_3x3">
                    <input type="text" ng-model="a" placeholder="a">
                    <input type="text" ng-model="x" placeholder="x">
                    <span>+</span>
                    <input type="text" ng-model="b" placeholder="b">
                    <input type="text" ng-model="y" placeholder="y">
                    <span>+</span>
                    <input type="text" ng-model="c" placeholder="c">
                    <input type="text" ng-model="z" placeholder="z">
                    <span>=</span>
                    <input type="text" ng-model="e1" placeholder="e1">
                </div>
    
                <div class="left js_node m_3x3">
                    <input type="text" ng-model="d" placeholder="d">
                    <input type="text" ng-model="x" placeholder="x">
                    <span>+</span>
                    <input type="text" ng-model="e" placeholder="e">
                    <input type="text" ng-model="y" placeholder="y">
                    <span>+</span>
                    <input type="text" ng-model="f" placeholder="f">
                    <input type="text" ng-model="z" placeholder="z">
                    <span>=</span>
                    <input type="text" ng-model="e2" placeholder="e2">
                </div>

                <div class="left js_node m_3x3">
                  <input type="text" ng-model="g" placeholder="g">
                  <input type="text" ng-model="x" placeholder="x">
                  <span>+</span>
                  <input type="text" ng-model="h" placeholder="h">
                  <input type="text" ng-model="y" placeholder="y">
                  <span>+</span>
                  <input type="text" ng-model="i" placeholder="i">
                  <input type="text" ng-model="z" placeholder="z">
                  <span>=</span>
                  <input type="text" ng-model="e3" placeholder="e3">
                </div>

            </div>

            <div class="left margin-right">
                <span class="matriz" >A = </span>
                <div class="matriz-coef">
                    <p class="" >{{a|number}} &nbsp;&nbsp; {{b|number}} &nbsp;&nbsp; {{c|number}}</p>
                    <p class="" >{{d|number}} &nbsp;&nbsp; {{e|number}} &nbsp;&nbsp; {{f|number}}</p>
                    <p class="" >{{g|number}} &nbsp;&nbsp; {{h|number}} &nbsp;&nbsp; {{i|number}}</p>
                </div>
            </div>
    
            <div class="left margin-right">
                <span class="matriz" >X = </span>
                <div class="matriz-coef">
                    <p class="" >{{e1|number}} &nbsp;&nbsp; {{b|number}} &nbsp;&nbsp; {{c|number}}</p>
                    <p class="" >{{e2|number}} &nbsp;&nbsp; {{e|number}} &nbsp;&nbsp; {{f|number}}</p>
                    <p class="" >{{e3|number}} &nbsp;&nbsp; {{h|number}} &nbsp;&nbsp; {{i|number}}</p>
                 </div>
            </div>
    
            <div class="left margin-right">
                <span class="matriz" >Y = </span>
                <div class="matriz-coef">
                    <p class="" >{{a|number}} &nbsp;&nbsp; {{e1|number}} &nbsp;&nbsp; {{c|number}}</p>
                    <p class="" >{{d|number}} &nbsp;&nbsp; {{e2|number}} &nbsp;&nbsp; {{f|number}}</p>
                    <p class="" >{{g|number}} &nbsp;&nbsp; {{e3|number}} &nbsp;&nbsp; {{i|number}}</p>
                </div>
             </div>

            <div class="left margin-right">
              <span class="matriz" >Z = </span>
              <div class="matriz-coef">
                    <p class="" >{{a|number}} &nbsp;&nbsp; {{b|number}} &nbsp;&nbsp; {{e1|number}}</p>
                    <p class="" >{{d|number}} &nbsp;&nbsp; {{e|number}} &nbsp;&nbsp; {{e2|number}}</p>
                    <p class="" >{{g|number}} &nbsp;&nbsp; {{h|number}} &nbsp;&nbsp; {{e3|number}}</p>
              </div>
            </div>

        </div>

        <div class="wrapper-3">
            <h2>Resultados:</h2>

            <div class="left margin-right matriz-coef">
                <p>DetA = {{( (  (a*e*i)+(b*f*g)+(d*h*c)  ) - (  (g*e*c)+(f*h*a)+(d*b*i)    )  )}}</p>
                <p>DetX = {{( (  (e1*e*i)+(b*f*e3)+(e2*h*c)  ) - (  (e3*e*c)+(f*h*e1)+(e2*b*i)    )  )}}</p>
                <p>DetY = {{( (  (a*e2*i)+(e1*f*g)+(d*e3*c)  ) - (  (g*e2*c)+(f*e3*a)+(d*e1*i)    )  )}}</p>
                <p>DetZ = {{( (  (a*e*e3)+(b*e2*g)+(d*h*e1)  ) - (  (g*e*e1)+(e2*h*a)+(d*b*e3)    )  )}}</p>
            </div>
             <div class="left margin-right matriz-coef">
                <p>X = {{(  ( (  (e1*e*i)+(b*f*e3)+(e2*h*c)  ) - (  (e3*e*c)+(f*h*e1)+(e2*b*i)    )  ) / ( (  (a*e*i)+(b*f*g)+(d*h*c)  ) - (  (g*e*c)+(f*h*a)+(d*b*i)  )  )  )}}</p>
                <p>Y = {{(  ( (  (a*e2*i)+(e1*f*g)+(d*e3*c)  ) - (  (g*e2*c)+(f*e3*a)+(d*e1*i)    )  ) / ( (  (a*e*i)+(b*f*g)+(d*h*c)  ) - (  (g*e*c)+(f*h*a)+(d*b*i)  )  )  )}}</p>
                <p>Z = {{(  ( (  (a*e*e3)+(b*e2*g)+(d*h*e1)  ) - (  (g*e*e1)+(e2*h*a)+(d*b*e3)    )  ) / ( (  (a*e*i)+(b*f*g)+(d*h*c)  ) - (  (g*e*c)+(f*h*a)+(d*b*i)  )  )  )}}</p>
            </div>

            <div class="right margin-right note">
                <p>X = DetX / DetA</p>
                <p>Y = DetY / DetA</p>
                <p>Z = DetZ / DetA</p>
            </div>
        </div>


        <?php include "footer.php";?>
     </body>

</html>