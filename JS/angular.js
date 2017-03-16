        console.log('Angular funcinando');
        var acumuladorApp = angular.module( 'acumuladorApp', [] );
        
        acumuladorApp.controller( "acumuladorAppCtrl",
            
            //[ "$scope",  //Originalmente solo se minificaba el scope.
            [ "$scope", "$http", //Esto es para minificar, pero interfiere con lo de php, hay que minificar las otras variables.
             
                function( $scope, $http )
                {
                   
                    $scope.cargar_datos_php = function()
                    {
                            console.log('Hola midno')
                            var lista=document.getElementById('select');
                            var salida="";
                            for (var i = 0; i < lista.length; i++) {
                                if (lista.item(i).selected) 
                                {
                                    if (salida=="") {
                                        salida+= (lista.item(i).value);
                                    } else{
                                        salida+= "," +(lista.item(i).value) 
                                    }
                                            }   
                            }
                            document.getElementById('cont-salida').value=salida
                            console.log(salida)

                    /**
                     * Esta función se activa al usar el texto 2.
                     */
                        //var cad2 = $scope.datos.texto2;
                        
                        if( salida.length != "")
                        {
                            //Aquí se hace el llamado a un php con conexión a MySQL.
                            $http.get( 'llamado-php.php?cadena=' + salida )
                            .then(function (response){$scope.campos = response.data.records;} 
                            );   
                        }                    
                    }
                }
            ] //Si se minifica, se deben minificar todas las llamadas inyecciones, de lo contrario mejor no minifique nada.
        );
        
