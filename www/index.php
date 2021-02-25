<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Teste Bip</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="assets/scss/main.css">
    </head>
    <body>
        <header>
            <div class="content flex flex-wrap">
                <div class="col-6">
                </div>
                <div class="col-6">
                </div>
            </div>
        </header>
        <div class="busca">
            <div class="busca__content alignVertical">
                <input id="search_text" type="text" name="cidade" placeholder="Buscar cidade"/>
                <button id="buscar" type="submit" id="completed-task" class="fabutton">
                    <i class="material-icons">search</i>
                </button>
            </div>
        </div>
        <div id="result" class="content flex flex-wrap">

        </div>
        <script>
            $(document).ready(function(){
                load_data();
                function load_data(query)
                {
                    $.ajax({
                        url:"controllers/ControllersCidades.php",
                        method:"post",
                        data:{query:query},
                        success:function(data)
                        {
                            $('#result').html(data);
                        }
                    });
                }
                
                $('#search_text').keyup(function(){
                    var search = $(this).val();
                    if(search != '')
                    {
                        load_data(search);
                    }
                    else
                    {
                        load_data();			
                    }
                });
            });
        </script>
    </body>
</html>