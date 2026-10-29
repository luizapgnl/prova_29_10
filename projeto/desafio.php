    <!--Uma estação espacial precisa de um sistema web para administrar sua frota de robôs. Sua missão é 
    desenvolver a Central de Robôs, uma aplicação que permita cadastrar robôs, consultar seus dados e realizar
    recargas de energia. O sistema deverá funcionar com PHP e armazenar as informações em arquivo JSON, sem
    banco de dados !-->
    <?php
        //Criar a classe Robo com os atributos nome, modelo, energia e potencia.
        class robo{
            public $nome;
            public $modelo;
            public $energia;
            public $operador;
            public $funcao;
            public $id;

            // Criar formulário HTML com os campos nome do robô, modelo e nome do operador
            public funcition__construt($nome, $modelo, $operador, $energia = null, $id = null){
                    $configuracoes = [
                        "Explorador" =>[
                            "energia" => 100,
                            "potencia" => 20
                        ],

                        "Engenheiro" =>[
                            "energia" => 120,
                            "potencia" => 15
                        ],

                        "Defensor" =>[
                            "energia" => 150,
                            "potencia" => 30
                        ]
                        ];
                    

                        if (!isset($configuracoes[$modelo]){
                        throw new InvalidArgumentException("Modelo Inválido!")
                    }


                        $this->id $id ?? uniqid("robo_");
                        $this-> nome = $nome;
                        $this-> modelo = $modelo;
                        $this-> operador = $operador;

                        $this-> energia = $energia ?? $configuracoes["$modelo"]["$energia"];
                        $this-> energia = $potencis ?? $configuracoes["$modelo"]["$potencia"];
            }
        }

            public funcition exibirStatus(){
                return "Nome .$this-> Nome";
                    "| Energia: .$this-> Energia".
                    "| Potencia: .$this-> Potencia";

            }
        
            public funcition recarregar(){
                $this-> energia = min(200, $this->energia + 10);

            }
        
            public funcition paraArray(){

                return[
                    "id" => $this-> id,
                    "nome"=> $this-> nome = $nome,
                    "modelo"=> $this-> modelo = $modelo,
                    "operador"=> $this-> operador = $operador
                ];
            }
        


        
    ?>
